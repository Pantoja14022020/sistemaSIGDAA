<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/registro.css') }}" />
    <title>Registro</title>
  </head>
  <body>
    <header>
      <div class="header-info">
        <img src="./img/logo.png" alt="UAEH" />
        <h1>Universidad Autónoma del Estado de Hidalgo</h1>
      </div>
    </header>
    <section class="nombre-dependencia">
      <h1>Dirección de Archivo General</h1>
    </section>
    <section class="form-registro">
      <h4>Registro</h4>
      <form action="/registrar" method="POST">
        @csrf
        <label for="Tipo de usuario">Tipo de usuario</label>
        <select class="controls" name="tipo_usuario">
          <option value="0" selected>Seleccionar</option>
          <option value="1">Responsable de control de correspondencia</option>
          <option value="2">Responsable de expediente</option>
          <option value="3">Enlace Operativo Normativo de Archivo</option>
          <option value="4">Responsable institucional</option>
          <option value="5">Responsable de archivo</option>
        </select>
        <label for="nombre">Nombre</label>
        <input class="controls" type="text" name="nombre" id="Nombre" />
        <label for="Apellido Paterno">Apellido Paterno</label>
        <input
          class="controls"
          type="text"
          name="apellido_paterno"
          id="APaterno"
        />
        <label for="Apellido Materno">Apellido Materno</label>
        <input
          class="controls"
          type="text"
          name="apellido_materno"
          id="AMaterno"
        />
        <label for="Nempleado">Número de empleado</label>
        <input
          class="controls"
          type="text"
          name="numero_empleado"
          id="Nempleado"
          placeholder="Numero de empleado (Si no tienes número de empleado, deja en blanco)"
        />
        <label for="Dependencia/Unidad Académica"
          >Dependencia/Unidad Académica</label
        >
        <select
          class="controls"
          name="dep_o_unid"
          id="tipo-usuario"
        >
          <option value="0" selected>Seleccionar</option>
          <option value="1">Dependencia</option>
          <option value="2">Unidad Académica</option>
        </select>
        <label for="Seleccione su dependencia o su unidad"
          >Seleccione su dependencia o su unidad</label
        >
        <select
          class="controls"
          name="cat_dep_o_unid"
          id="selectUnidadesDependenciasRegistro"
        >
          <option value="0" selected>Seleccionar</option>
          <option value="1" data-tipo="1">Rectoría</option>
          <option value="2" data-tipo="1">Contraloría General</option>
          <option value="3" data-tipo="1">
            Dirección General De Planeación
          </option>
          <option value="4" data-tipo="1">
            Dirección General De Comunicación Social
          </option>
          <option value="5" data-tipo="1">Secretaria General</option>
          <option value="6" data-tipo="1">Administraciones</option>
          <option value="7" data-tipo="1">
            Coordinación De Investigación, Desarrollo E Innovación
          </option>
          <option value="8" data-tipo="1">Coordinación Académica</option>
          <option value="9" data-tipo="1">
            Coordinador De Extensión De La Cultura
          </option>
          <option value="10" data-tipo="1">
            Coordinación De Vinculación E Internacionalización
          </option>
          <option value="11" data-tipo="1">
            Coordinación De Administración Y Finanzas
          </option>
          <option value="12" data-tipo="1">Patronato Universitario</option>
          <option value="13" data-tipo="2">Escuelas Preparatorias</option>
          <option value="14" data-tipo="2">Escuelas Superiores</option>
          <option value="15" data-tipo="2">Institutos</option>
        </select>
        <label for="Seleccione su dependencia o su unidad"
          >Seleccione su dependencia o su unidad</label
        >
        <select
          class="controls"
          name="subcat_dep_o_unid"
          id="selectSetUnidadesDep"
        >
          <option value="0" selected>Seleccionar</option>
          <option value="1" data-categoria="1">Rectoría de la UAEH</option>
          <option value="2" data-categoria="1">
            Dirección de la Unidad de Transparencia
          </option>
          <option value="3" data-categoria="1">
            Dirección General Jurídica
          </option>
          <option value="4" data-categoria="1">
            Dirección General de Evaluación
          </option>
          <option value="5" data-categoria="1">Defensoría Universitaria</option>
          <option value="6" data-categoria="1">Coordinación de Asesores</option>
          <option value="7" data-categoria="2">Contraloría General</option>
          <option value="8" data-categoria="2">
            Dirección de Control Interno
          </option>
          <option value="9" data-categoria="2">Dirección de Auditoría</option>
          <option value="10" data-categoria="2">
            Dirección de Responsabilidad Administrativa
          </option>
          <option value="11" data-categoria="2">
            Dirección de Supervisión Patrimonial
          </option>
          <option value="12" data-categoria="3">
            Dirección General de Planeación
          </option>
          <option value="13" data-categoria="3">
            Dirección de Información y Sistemas
          </option>
          <option value="14" data-categoria="3">
            Dirección de Gestión de la Calidad
          </option>
          <option value="15" data-categoria="3">
            Dirección de Proyectos y Obras
          </option>
          <option value="16" data-categoria="4">
            Dirección General de Comunicación Social
          </option>
          <option value="17" data-categoria="4">
            Dirección de Comunicación Social
          </option>
          <option value="18" data-categoria="4">
            Dirección del Sistema Universitario de Medios Autónomos
          </option>
          <option value="19" data-categoria="4">
            Dirección de Radio Universidad Pachuca
          </option>
          <option value="20" data-categoria="4">
            Dirección de Radio Universidad San Bartolo Tutotepec
          </option>
          <option value="21" data-categoria="4">
            Dirección de Radio Universidad Zimapán
          </option>
          <option value="22" data-categoria="4">
            Dirección de Radio Universidad Huejutla
          </option>
          <option value="23" data-categoria="4">
            Dirección de Radio Universidad Tulancingo
          </option>
          <option value="24" data-categoria="4">
            Dirección de Radio Universidad Actopan
          </option>
          <option value="25" data-categoria="5">Secretaría General</option>
          <option value="26" data-categoria="5">Subsecretaría General</option>
          <option value="27" data-categoria="5">
            Dirección del Archivo General
          </option>
          <option value="28" data-categoria="5">
            Dirección de Administración Escolar
          </option>
          <option value="29" data-categoria="5">
            Dirección de Eventos Especiales
          </option>
          <option value="30" data-categoria="5">
            Dirección de Protección Civil
          </option>
          <option value="31" data-categoria="5">
            Dirección de Protección Universitaria
          </option>
          <option value="32" data-categoria="5">
            Dirección de Servicio Médico Universitario
          </option>
          <option value="33" data-categoria="5">
            Representante institucional de la Oficina del Estímulo al Desempeño
            del Personal Docente ante la S.E.P.
          </option>
          <option value="34" data-categoria="5">
            Dirección del Centro de Estudios de Opinión
          </option>
          <option value="35" data-categoria="6">
            Administración de la Torres de Posgrado "Lic. Gerardo Sosa Castelán"
          </option>
          <option value="36" data-categoria="6">
            Administración del CEUNI
          </option>
          <option value="37" data-categoria="6">
            Administración de la Orquesta Sinfónica
          </option>
          <option value="38" data-categoria="6">
            Administración "CARLOS MARTÍNEZ BALMORI"
          </option>
          <option value="39" data-categoria="6">
            Administración del Centro Cultural La Garza
          </option>
          <option value="40" data-categoria="6">
            Administración de Ciudad del conocimiento
          </option>
          <option value="41" data-categoria="6">
            Administración de Torres de Rectoría
          </option>
          <option value="42" data-categoria="6">
            Administración de Centro de Electrónica y Desarrollo de Aplicaciones
            Inteligentes (CEDAI)
          </option>
          <option value="43" data-categoria="6">
            Administración de Club Universitario Real del Monte
          </option>
          <option value="44" data-categoria="6">
            Administración de Villa Deportiva Universitaria "Mario Vázquez Raña"
          </option>
          <option value="45" data-categoria="6">
            Administración del Museo Casa Grande
          </option>
          <option value="46" data-categoria="6">
            Administración del CEVIDE
          </option>
          <option value="47" data-categoria="7">
            Coordinación de Investigación Desarrollo e Innovación
          </option>
          <option value="48" data-categoria="7">
            Dirección de Investigación
          </option>
          <option value="49" data-categoria="7">
            Dirección de Desarrollo e Innovación
          </option>
          <option value="50" data-categoria="7">
            Dirección de Parque Científico y Tecnológico
          </option>
          <option value="51" data-categoria="7">
            Dirección del Observatorio Tecnológico de Hidalgo
          </option>
          <option value="52" data-categoria="7">
            Dirección de Transferencia de Tecnología
          </option>
          <option value="53" data-categoria="7">
            Dirección de Desarrollo de Capital Humano para la Investigación
          </option>
          <option value="54" data-categoria="7">
            Dirección de Divulgación de la Ciencia
          </option>
          <option value="55" data-categoria="8">Coordinación Académica</option>
          <option value="56" data-categoria="8">
            Dirección de Educación Media Superior
          </option>
          <option value="57" data-categoria="8">
            Dirección de Educación Superior
          </option>
          <option value="58" data-categoria="8">
            Dirección de Innovación Académica
          </option>
          <option value="59" data-categoria="8">
            Dirección de Superación Académica
          </option>
          <option value="60" data-categoria="8">
            Dirección del Colegio de Posgrado
          </option>
          <option value="61" data-categoria="8">Dirección de Tutorías</option>
          <option value="62" data-categoria="8">
            Dirección de Servicios Académicos
          </option>
          <option value="63" data-categoria="8">
            Dirección de Bibliotecas y Centros de Información
          </option>
          <option value="64" data-categoria="8">
            Dirección de Laboratorios
          </option>
          <option value="65" data-categoria="8">
            Dirección del Centro de Autoaprendizaje de Idiomas
          </option>
          <option value="66" data-categoria="8">
            Dirección del Centro de Cómputo Académico
          </option>
          <option value="67" data-categoria="8">Dirección de Bioterio</option>
          <option value="68" data-categoria="8">
            Dirección del Centro de Lenguas
          </option>
          <option value="69" data-categoria="8">Dirección de Becas</option>
          <option value="70" data-categoria="8">
            Dirección de Estudios de Pertinencia y Factibilidad
          </option>
          <option value="71" data-categoria="9">
            Coordinación de Extensión de la cultura
          </option>
          <option value="72" data-categoria="9">
            Dirección de Promoción Cultural
          </option>
          <option value="73" data-categoria="9">
            Dirección de Ediciones y Publicaciones
          </option>
          <option value="74" data-categoria="9">
            Dirección de Fomento a la Lectura
          </option>
          <option value="75" data-categoria="9">
            Dirección de Promoción Deportiva
          </option>
          <option value="76" data-categoria="9">
            Dirección del Festival Internacional de la Imagen
          </option>
          <option value="77" data-categoria="9">
            Dirección de la Feria Universitaria del Libro
          </option>
          <option value="78" data-categoria="10">
            Coordinación de Vinculación e Internacionalización
          </option>
          <option value="79" data-categoria="10">
            Dirección de Relaciones Internacionales e Intercambio Académico
          </option>
          <option value="80" data-categoria="10">
            Dirección de Relaciones Interinstitucionales
          </option>
          <option value="81" data-categoria="10">
            Dirección de Relaciones Públicas
          </option>
          <option value="82" data-categoria="10">
            Dirección de Imagen y Mercadotecnia
          </option>
          <option value="83" data-categoria="10">
            Dirección de Servicio Social, Prácticas Profesionales y Vinculación
            Laboral
          </option>
          <option value="84" data-categoria="10">
            Dirección de Vinculación con Egresados
          </option>
          <option value="85" data-categoria="10">
            Dirección de Tecnología Web y Webometría
          </option>
          <option value="86" data-categoria="10">
            Dirección del Centro de Educación Continua y a Distancia
          </option>
          <option value="87" data-categoria="11">
            Coordinación de Administración y Finanzas
          </option>
          <option value="88" data-categoria="11">
            Dirección de Administración de Personal
          </option>
          <option value="89" data-categoria="11">
            Dirección de Recursos Materiales, Adquisiciones, Arrendamientos y
            Servicios
          </option>
          <option value="90" data-categoria="11">
            Dirección de Recursos Financieros
          </option>
          <option value="91" data-categoria="11">
            Dirección de Control Presupuestal
          </option>
          <option value="92" data-categoria="11">
            Dirección de Ahorro para el Retiro
          </option>
          <option value="93" data-categoria="11">Dirección de Tesorería</option>
          <option value="94" data-categoria="11">
            Dirección de mantenimiento
          </option>
          <option value="95" data-categoria="11">
            Dirección de Transporte
          </option>
          <option value="96" data-categoria="12">
            Presidencia del Patronato Universitario
          </option>
          <option value="97" data-categoria="13">
            Escuela Preparatoria No. 1
          </option>
          <option value="98" data-categoria="13">
            Escuela Preparatoria No. 2
          </option>
          <option value="99" data-categoria="13">
            Escuela Preparatoria No. 3
          </option>
          <option value="100" data-categoria="13">
            Escuela Preparatoria No. 4
          </option>
          <option value="101" data-categoria="13">
            Escuela Preparatoria No. 5
          </option>
          <option value="102" data-categoria="13">
            Escuela Preparatoria No. 6
          </option>
          <option value="103" data-categoria="13">
            Escuela Preparatoria No. 7
          </option>
          <option value="104" data-categoria="14">
            Escuela Superior de Actopan
          </option>
          <option value="105" data-categoria="14">
            Escuela Superior de Apan
          </option>
          <option value="106" data-categoria="14">
            Escuela Superior de Ciudad Sahagún
          </option>
          <option value="107" data-categoria="14">
            Escuela Superior de Huejutla
          </option>
          <option value="108" data-categoria="14">
            Escuela Superior de Tepeji del Rio
          </option>
          <option value="109" data-categoria="14">
            Escuela Superior de Tizayuca
          </option>
          <option value="110" data-categoria="14">
            Escuela Superior de Tlahuelilpan
          </option>
          <option value="111" data-categoria="14">
            Escuela Superior de Zimapán
          </option>
          <option value="112" data-categoria="14">
            Escuela Superior de Atotonilco de Tula
          </option>
          <option value="113" data-categoria="15">
            Instituto de Ciencias Básicas e Ingeniería
          </option>
          <option value="114" data-categoria="15">
            Instituto de Ciencias Económico Administrativas
          </option>
          <option value="115" data-categoria="15">
            Instituto de Ciencias Sociales y Humanidades
          </option>
          <option value="116" data-categoria="15">
            Instituto de Ciencias Agropecuarias
          </option>
          <option value="117" data-categoria="15">
            Instituto de Ciencias de la Salud
          </option>
          <option value="118" data-categoria="15">Instituto de Artes</option>
        </select>
        <label for="Cargo/Funcion">Cargo/Funcion</label>
        <input
          class="controls"
          type="text"
          name="cargo_o_funcion"
          id="CF"
        />
        <label for="telefono">Extensión Telefonica</label>
        <input
          class="controls"
          type="tel"
          name="ext_telefonica"
          id="ext"
        />
        <label for="correo">Correo</label>
        <input
          class="controls"
          type="email"
          name="correo"
          id="correo"
          placeholder="ejemplo@uaeh.edu.mx"
        />
        <label for="contraseña">Contraseña</label>
        <input
          class="controls"
          type="password"
          name="contraseña"
          id="contra"
        />
        <input class="botons" type="submit" value="Registrar" />

        <a href="#">¿Ya tengo Cuenta?</a>
      </form>
    </section>
    <footer>
      <div class="ubicacion">
        <h4>Ubicación</h4>
        <b
          >Fray Bernardino de Sahagún, esquina Fray Alonso de la Veracruz, S/N,
          Fraccionamiento Bulevares de San Francisco, C.P. 42078.</b
        >
      </div>
      <div class="logo-footer">
        <img src="./img/logo-footer.png" alt="logo" />
        <b>archivogeneral@uaeh.edu.mx</b>
        <b>Teléfono 01 (771) 71 7 2000 ext. 2721</b>
      </div>
      <div class="garza-img">
        <img src="./img/garza.png" alt="garza" />
      </div>
    </footer>
    <script src="{{ asset('js/registro.js') }}"></script>
  </body>
</html>
