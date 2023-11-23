<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
        <title>Login</title>
    </head>
    <body>
      <header>
        <div class="header-info">
          <img src="./img/logo.png" alt="UAEH">
          <h1>Universidad Autónoma del Estado de Hidalgo</h1>
        </div>
      </header>
      <section class="nombre-dependencia">
        <h1>Dirección de Archivo General</h1>
      </section>
  
      <section class="form-registro" name="" action="">
          <h4>Inicio de Sesión</h4>
          <script type="text/javascr"></script>
          <form action="login" method="POST">
            @csrf
            <label for="correo">Email</label>
            <input class="controls" type="text" name="correo" id="email" placeholder="ejemplo@uaeh.edu.mx">
            <label for="contraseña">Contraseña</label>
            <input class="controls" type="password" name="contraseña" id="Contra" >
            <input class="botons" type="submit" value="Iniciar" />

            <a class="a" href="#">¿Olvidaste tu Contraseña?</a>
            <a class="a" href="/registro">¿NO Tienes Cuenta?</a>
          </form>
      </section>
      <pre>
       
      </pre>
      <footer class="footer">
        <div class="ubicacion">
          <h4>Ubicación</h4>
          <b>Fray Bernardino de Sahagún, esquina Fray Alonso de la Veracruz, S/N, Fraccionamiento Bulevares de San Francisco, C.P. 42078.</b>
        </div>
        <div class="logo-footer">
          <img src="./img/logo-footer.png" alt="logo">
          <b>archivogeneral@uaeh.edu.mx</b>
          <b>Teléfono 01 (771) 71 7 2000 ext. 2721</b>
        </div>
        <div class="garza-img">
          <img src="./img/garza.png" alt="garza">
        </div>
      </footer>
    </body>
</html>