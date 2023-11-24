<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/control_de_correspondencia.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
        <title>Control de correspondencia (Recibidos)</title>
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
            <li><a href="/principal">Inicio</a></li>
            <li><a href="">¿Cómo completar los formularios?</a></li>
            <li id="ctrl_correspondencia">Control de correspondencia
              <ul id="sub_ctr">
                <li><a href="/control_correspondencia_emitidos">Emitidos</a></li>
                <li><a href="/control_correspondencia_recibidos">Recibidos</a></li>
              </ul>
            </li>
            <li><a href="/logout">Cerrar Sesion </a></li>
          </ul>
        </nav>
      </section>

      <section class="form-registro" name="" action="">
          <h4>Control de Correspondencia (Recibidos)</h4>
          <script type="text/javascr"></script>
          <form action="/control_correspondencia_recibidos" method="POST">
            @csrf
            <label for="fecha_emision">Fecha de Recepción</label>
            <input class="controls" type="date" name="fecha_emision" id="FeEm" >
            <label for="no_oficio">Número de Oficio o Memorándum </label>
            <input class="controls" type="text" name="no_oficio" id="Noficio" >
            <label for="nombre_remitente">Nombre del Remitente</label>
            <input class="controls" type="text" name="nombre_remitente" id="DesNom" >
            <label for="cargo_remitente">Cargo del Remitente</label>
            <input class="controls" type="text" name="cargo_remitente" id="DesCar" >
            <label for="asunto">Asunto </label>
            <input class="controls" type="text" name="asunto" id="Asunto" >
            <label for="tipo_prioridad">Prioridad</label>
            <select class="controls" name="tipo_prioridad">
              <option value="0" selected>Seleccionar</option>
              <option value="prioritario">Prioritario</option>
              <option value="no prioritario">No Prioritario</option>
            </select>
            <label for="turnar_nombre">Turnar A (Nombre)</label>
            <input class="controls" type="text" name="turnar_nombre" id="TurnarNom" >
            <label for="turnar_cargo">Turnar A (Cargo)</label>
            <input class="controls" type="text" name="turnar_cargo" id="TurnarCar" >
            <label for="observaciones">Observaciones (Anexos)</label>
            <input class="controls" type="text" name="observaciones" id="Observa" >
            <label for="ubicacion">Ubicación (Nombre del Expediente en que se Integró)</label>
            <input class="controls" type="text" name="ubicacion" id="Ubica" >
            <input class="botons" type="submit" value="Completar">
      </section>
      <footer>
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