<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UFT-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width", initial-scale = 1.0>
        <title>SIGDAA</title>
        <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/principal.css') }}" >
        <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
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
      <section class="smenu">
        <nav>
          <ul>
            @if(Auth::user()->tipo_usuario !== '5')
            <li><a href="">Inicio</a></li>
            @endif
            @if(Auth::user()->tipo_usuario === '5') <!--5 = Responsable de archivo-->
              <li><a href="/principal">Admin</a></li>
            @endif
            <!--<option value="1">Responsable de control de correspondencia</option>
            <option value="2">Responsable de expediente</option>
            <option value="3">Enlace Operativo Normativo de Archivo</option>
            <option value="4">Responsable institucional</option>
            <option value="5">Responsable de archivo</option>-->
            @if(Auth::user()->tipo_usuario === '2' || Auth::user()->tipo_usuario === '1')
              <li><a href="">¿Cómo completar los formularios?</a></li>
            @endif
            @if(Auth::check())
              @if(Auth::user()->tipo_usuario === '1')
                <li id="ctrl_correspondencia">Control de correspondencia
                  <ul id="sub_ctr">
                    <li><a href="/control_correspondencia_emitidos">Emitidos</a></li>
                    <li><a href="/control_correspondencia_recibidos">Recibidos</a></li>
                  </ul>
                </li>
              @endif
              @if(Auth::user()->tipo_usuario === '2')
                <li><a href="/transferencia_primaria">Transferencia Primaria</a></li>
                <li><a href="/archivo_tramite">Archivo Tramite</a></li>
              @endif
            @endif
            <li><a href="/logout">Cerrar Sesion </a></li>
          </ul>
        </nav>
      </section>
      
      <!--menu mio
      <section class="smenu">
        <div>
        <ul class="ul">
         <li class="li"><a href="">INICIO</a></li>
         <li class="li"><a href="">¿CÓMO CONTESTAR?</a></li>
         <li class="li"><a href="">FORMULARIOS</a></li>
         <li class="li"><button class="btn">CERRAR SESIÓN</button></li>
        </ul>
        </div>
        
      </section>
      -->
      <section class="form-registro">

      </section>
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