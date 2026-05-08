<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class GeminiService
{
    protected string $apiKey;
    protected string $baseUrl;
    protected string $model;

    public function __construct()
    {
        $this->apiKey = config('gemini.api_key');
        $this->baseUrl = config('gemini.base_url') ?: 'https://generativelanguage.googleapis.com/v1beta';
        $this->model = config('gemini.model', 'gemini-1.5-flash');
    }

    public function generateContent(string $message, string $systemPrompt = '')
    {
        $url = "{$this->baseUrl}/models/{$this->model}:generateContent?key={$this->apiKey}";

        $payload = [
            'contents' => [
                [
                    'parts' => [
                        ['text' => $systemPrompt . "\n\nUsuario: " . $message]
                    ]
                ]
            ],
            'generationConfig' => [
                'temperature' => 0.7,
                'maxOutputTokens' => 2048,
            ]
        ];

        // Si el modelo soporta system_instruction (disponible en v1beta)
        if (!empty($systemPrompt)) {
            // Nota: Algunos modelos antiguos o versiones no soportan systemInstruction como campo separado.
            // Para maxima compatibilidad, lo incluimos en el mensaje como hicimos arriba, 
            // o usamos el campo dedicado si estamos seguros de la version v1beta.
            $payload['systemInstruction'] = [
                'parts' => [
                    ['text' => $systemPrompt]
                ]
            ];
            // Si usamos systemInstruction, quitamos el prompt del contenido principal
            $payload['contents'][0]['parts'][0]['text'] = $message;
        }

        try {
            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
            ])->post($url, $payload);

            if ($response->failed()) {
                Log::error('Gemini API Error', [
                    'status' => $response->status(),
                    'body' => $response->body(),
                ]);
                throw new \Exception('Error en la comunicación con la IA: ' . $response->json('error.message', 'Unknown error'));
            }

            $data = $response->json();

            // Extraer el texto de la respuesta (manejando multiples candidatos/partes)
            if (isset($data['candidates'][0]['content']['parts'])) {
                $text = '';
                foreach ($data['candidates'][0]['content']['parts'] as $part) {
                    $text .= $part['text'] ?? '';
                }
                return $text;
            }

            throw new \Exception('No se recibió contenido válido de la IA.');

        } catch (\Exception $e) {
            Log::error('Gemini Service Exception: ' . $e->getMessage());
            throw $e;
        }
    }
}
