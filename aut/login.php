<div class="container" id="container">
    <div class="form-container sign-up-container">
        <form method="post">
            <h1>Registrar</h1>
            <div class="social-container">
               <img src="assets/img/icon/pipoca.png">
                <img src="assets/img/icon/cinema.png">
                <img src="assets/img/icon/tira-de-filme.png">
            </div>
            <span>Ou use seu email para se registrar</span>
            <input class="input" type="text" placeholder="Name" id="username"/>
            <input class="input" type="email" placeholder="Email" id="email"/>
            <input class="input" type="password" placeholder="Password" id="user_password" />
            <input class="btn" type="submit" value="Registrar">
        </form>
    </div>
    <div class="form-container sign-in-container">
        <form method="post">
            <h1>Login</h1>
            <div class="social-container">
                <img src="assets/img/icon/pipoca.png">
                <img src="assets/img/icon/cinema.png">
                <img src="assets/img/icon/tira-de-filme.png">
            </div>
            <span>Ou use sua conta</span>
            <input class="input" type="email" placeholder="Email" id="email" />
            <input class="input" type="password" placeholder="Password" id="user_password"/>
            <a href="#" id="alt_senha">Esqueceu sua senha?</a>
            <input type="submit" value="Entrar" class="btn">
        </form>
    </div>
    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-left">
                <h1>Bem vindo de volta!</h1>
                <p>Para se manter conectado entre com seus dados</p>
                <input class="btn ghost" id="signIn"type="submit" value="Logar" class="btn" style="background:#fff ;color:black">
                <!-- <button class="ghost" id="signIn" style="background:#fff ;color:#121212">Logar</button> -->
            </div>
            <div class="overlay-panel overlay-right">
                <h1>Olá, Usuário!</h1>
                <p>Entre com sua conta pessoal e alugue um filme.</p>
                <input class="btn ghost" id="signUp"type="submit" value="Registar" class="btn" style="background:#fff ;color:black">
                <!-- <button class="ghost" id="signUp" style="background:#fff ;color:black">Registrar</button> -->
            </div>
        </div>
    </div>
</div>
<script src="assets/js/login.js"></script>