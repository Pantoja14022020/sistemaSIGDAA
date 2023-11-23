<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/control_de_correspondencia.css') }}" />
        <title>Control de correspondencia (Emitidos)</title>
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
          <h4>Control de Correspondencia (Emitidos)</h4>
          <script type="text/javascr"></script>
          <form action="/control_correspondencia_emitidos" method="POST">
            @csrf
            <label for="fecha_emision">Fecha Emisión</label>
            <input class="controls" type="date" name="fecha_emision" id="FeEm" >
            <label for="no_oficio">Número de Oficio o Memorándum </label>
            <input class="controls" type="text" name="no_oficio" id="Noficio" >
            <label for="nombre_destinatario">Nombre del Destinatario </label>
            <input class="controls" type="text" name="nombre_destinatario" id="DesNom" >
            <label for="cargo_destinatario">Cargo del Destinatario </label>
            <input class="controls" type="text" name="cargo_destinatario" id="DesCar" >
            <label for="asunto">Asunto </label>
            <input class="controls" type="text" name="asunto" id="Asunto" >
            <label for="nombre_emisor">Nombre de la Persona que Emite/Solicita </label>
            <input class="controls" type="text" name="nombre_emisor" id="EmiteNom" >
            <label for="cargo_emisor">Cargo de la Persona que Emite/Solicita </label>
            <input class="controls" type="text" name="cargo_emisor" id="EmiteCar" >
            <label for="fecha_acuse">Fecha Emisión</label>
            <input class="controls" type="date" name="fecha_acuse" id="FeAcu" >
            <label for="nombre_del_que_turna">Nombre de la Persona que Turna </label>
            <input class="controls" type="text" name="nombre_del_que_turna" id="TurNom" >
            <label for="cargo_persona_turna">Cargo de la Persona que Turna </label>
            <input class="controls" type="text" name="cargo_persona_turna" id="TurCar" >
            <label for="prioridad">Prioridad</label>
            <select class="controls" name="prioridad">
              <option value="0" selected>Seleccionar</option>
              <option value="prioritario">Prioritario</option>
              <option value="no prioritario">No Prioritario</option>
            </select>
            <label for="fecha_respuesta_acuse">Fecha de Respuesta de Acuse</label>
            <input class="controls" type="date" name="fecha_respuesta_acuse" id="FeAcu2" >
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