{include file="header.tpl" titulo="Home - Personas"}
    <div class="d-flex row justify-content-center">
        <div class="col-6 border border-3">
            <form action="loguear" method="POST" class="form-group">
            <h1>Nombre de usuario</h1>
            <input type="text" name="username" placeholder="UserName" required> 
            <h1>Contraseña</h1>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" value="login">
            </form>
            <a href="{BASE_URL|cat:registrar}"><button>Registrarse</button></a>
        </div>
    </div>
{include file="footer2.tpl"}