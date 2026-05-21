<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar sesión - Amazon Clone</title>
    <style>
        body { font-family: sans-serif; display: flex; justify-content: center; padding-top: 50px; background: #f0f2f2; }
        .box { background: white; padding: 20px; border: 1px solid #ddd; border-radius: 8px; width: 350px; }
        h1 { font-size: 28px; font-weight: 400; }
        input { width: 100%; padding: 8px; margin: 10px 0; border: 1px solid #888; border-radius: 4px; box-sizing: border-box; }
        button { width: 100%; padding: 8px; background: #f7ca00; border: 1px solid #c79800; border-radius: 4px; cursor: pointer; }
        .error { color: red; font-size: 12px; }
    </style>
</head>
<body>
    <div class="box">
        <h1>Iniciar sesión</h1>
        <form method="POST" action="/login">
            @csrf
            <label>Correo electrónico</label>
            <input type="email" name="email" required>
            @error('email') <div class="error">{{ $message }}</div> @enderror
            <button type="submit">Continuar</button>
        </form>
    </div>
</body>
</html>