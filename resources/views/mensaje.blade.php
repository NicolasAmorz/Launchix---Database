
<!-- resources/views/mensaje.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Enviar Mensaje</title>
</head>
<body>
    <h1>Enviar un Mensaje</h1>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form action="{{ route('mensaje.enviar') }}" method="POST">
        @csrf
        <label for="mensaje">Mensaje:</label><br>
        <textarea name="mensaje" id="mensaje" rows="4" cols="50" required></textarea><br><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>