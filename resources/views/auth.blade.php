<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/styles.login.css') }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login/Cadastro - Conexus</title>
</head>
<body>
    {{-- Mensagens de sessão e erros --}}
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
        </div>
    @endif

    <div class="container">
        <div class="form-box login active">
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <h1>Login</h1>
                <div class="input-box">
                    <input type="text" placeholder="Usuário, E-mail ou CPF" name="username" required value="{{ old('username') }}" />
                    <i class="bx bxs-user"></i>
                </div>
                <div class="input-box">
                    <input type="password" placeholder="Senha" name="password" required />
                    <i class="bx bx-lock-alt"></i>
                </div>
                <button type="submit" class="btn">Entrar</button>
            </form>
        </div>
        <div class="form-box cadastro">
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <h1>Cadastro</h1>
                <div class="input-box">
                    <input type="text" placeholder="Usuário" name="username" required value="{{ old('username') }}" />
                    <i class="bx bxs-user"></i>
                </div>
                <div class="input-box">
                    <input type="email" placeholder="E-mail" name="email" required value="{{ old('email') }}" />
                    <i class="bx bxs-envelope"></i>
                </div>
                <div class="input-box">
                    <input type="text" id="cpf" name="cpf" pattern="\d{11}" placeholder="CPF" maxlength="11" required value="{{ old('cpf') }}" />
                    <i class="bx bxs-user"></i>
                </div>
                <div class="input-box">
                    <input type="tel" id="telefone" name="telefone" placeholder="Telefone" maxlength="15" value="{{ old('telefone') }}" />
                    <i class="bx bxs-phone"></i>
                </div>
                <div class="input-box">
                    <input type="password" placeholder="Senha" name="password" required />
                    <i class="bx bx-lock-alt"></i>
                </div>
                <div class="input-box">
                    <input type="password" placeholder="Confirme a senha" name="password_confirmation" required />
                    <i class="bx bx-check"></i>
                </div>
                <div class="esqueci-senha" style="margin-bottom: 10px;">
                    <input type="checkbox" name="term" id="term" value="1" {{ old('term') ? 'checked' : '' }}>
                    <label for="term">
                        Eu li e concordo com os
                        <a href="../termos-serviços/index.html" target="_blank">Termos de Serviços</a>
                    </label>
                </div>
                <button type="submit" class="btn">Cadastre-se</button>
            </form>
        </div>
        <div class="toggle-box">
            <div class="toggle-panel toggle-left">
                <h1>Olá, Bem-Vindo!</h1>
                <p>Não possui uma conta?</p>
                <button class="btn cadastro-btn">Cadastre-se</button>
            </div>
            <div class="toggle-panel toggle-right">
                <h1>Bem-Vindo, de volta!</h1>
                <p>Já possui uma conta?</p>
                <button class="btn login-btn">Login</button>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>