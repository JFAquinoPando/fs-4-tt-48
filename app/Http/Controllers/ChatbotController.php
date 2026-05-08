<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gemini\Laravel\Facades\Gemini;
use Illuminate\Log\Logger;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;

class ChatbotController extends Controller
{
    public function chat(Request $request)
    {
        $request->validate([
            'message' => 'required|string',
        ]);

        $userMessage = $request->input('message');

        try {
            // Intentar obtener productos de la base de datos si existe la tabla
            $productsContext = "";
            if (Schema::hasTable('products')) {
                $products = DB::table('products')->limit(50)->get();
                if ($products->count() > 0) {
                    $productsContext = "Aquí tienes algunos de nuestros productos disponibles:\n";
                    foreach ($products as $product) {
                        $productsContext .= "- {$product->descripcion}: {$product->precio} Gs.\n";
                    }
                }
            }

            // Contexto básico sobre la tienda
            $systemPrompt = "Eres un asistente virtual de una tienda de e-commerce llamada Amazon Clone. 
            Ayuda a los usuarios con sus preguntas sobre productos, envíos y devoluciones.
            Sé amable, profesional y conciso. 
            $productsContext
            Si no hay productos en la lista anterior, menciona que tenemos PC Gamers, artículos de hogar, decoración y regalos para mamá.
            Si no sabes algo, dile que se comunique con atención al cliente.";
            
            $model = config('gemini.model', 'gemini-1.5-flash');
            $result = Gemini::generativeModel($model)->generateContent($systemPrompt . "\n\nUsuario: " . $userMessage);
            
            Log::info($result->text());
            return response()->json([
                'response' => $result->text(),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Lo siento, hubo un error al procesar tu solicitud.',
                'details' => $e->getMessage()
            ], 500);
        }
    }
}
