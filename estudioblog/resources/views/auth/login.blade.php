<h1>Login</h1>

@error('login')
    <div class="text-danger">{{ $message }}</div>
@enderror

<form action="{{ route('login') }}" method="POST">
    @csrf

    <div>
        <label for="login">Login:</label>
        <input
            type="text"
            name="login"
            id="login"
            value="{{ old('login') }}"
        >
    </div>

    <div>
        <label for="password">Password:</label>
        <input
            type="password"
            name="password"
            id="password"
        >
    </div>

    <input type="submit" value="Enviar">
</form>
