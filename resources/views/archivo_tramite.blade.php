<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/archivo_tramite.css') }}">
        <title>Archivo de Trámite</title>
    </head>
    <body>
      <header>
        <div class="header-info">
          <img src="{{ asset('img/logo.png') }}" alt="UAEH">
          <h1>Universidad Autónoma del Estado de Hidalgo</h1>
        </div>
      </header>
      <section class="nombre-dependencia">
        <h1>Dirección de Archivo General</h1>
      </section>
      <section class="form-registro" name="" action="#">
          <h4>Archivo de Trámite</h4>
          <form action="/archivo_tramite" method="POST">
              @csrf
              <label for="dep_o_unid">Dependencia/Unidad Académica</label>
              <select class="controls" name="dep_o_unid" id="seleccionarTipoOrganizacion">
                  <option value="0" selected>Seleccionar</option>
                  <option value="1" data-tipo-organizacion="1">Dependencia</option>
                  <option value="2" data-tipo-organizacion="2">Unidad Académica </option>
              </select>
              <label for="cat_dep_o_unid">Seleccione su dependencia o su unidad</label>
              <select class="controls" name="cat_dep_o_unid" id="dependenciasUnidades">
                <option value="0" selected>Seleccionar</option>
                <option value="1" data-tipo-organizacion="1" data-categoria="1">Rectoría</option>
                <option value="2" data-tipo-organizacion="1" data-categoria="2">Contraloría General</option>
                <option value="3" data-tipo-organizacion="1" data-categoria="3">Dirección General De Planeación</option>
                <option value="4" data-tipo-organizacion="1" data-categoria="4">Dirección General De Comunicación Social</option>
                <option value="5" data-tipo-organizacion="1" data-categoria="5">Secretaria General</option>
                <option value="6" data-tipo-organizacion="1" data-categoria="6">Administraciones</option>
                <option value="7" data-tipo-organizacion="1" data-categoria="7">Coordinación De Investigación, Desarrollo E Innovación</option>
                <option value="8" data-tipo-organizacion="1" data-categoria="8">Coordinación Académica</option>
                <option value="9" data-tipo-organizacion="1" data-categoria="9">Coordinador De Extensión De La Cultura</option>
                <option value="10" data-tipo-organizacion="1" data-categoria="10">Coordinación De Vinculación E Internacionalización</option>
                <option value="11" data-tipo-organizacion="1" data-categoria="11">Coordinación De Administración Y Finanzas</option>
                <option value="12" data-tipo-organizacion="1" data-categoria="12">Patronato Universitario</option>
                <option value="13" data-tipo-organizacion="2" data-categoria="13">Escuelas Preparatorias</option>
                <option value="14" data-tipo-organizacion="2" data-categoria="14">Escuelas Superiores</option>
                <option value="15" data-tipo-organizacion="2" data-categoria="15">Institutos</option>
              </select>
              <label for="subcat_dep_o_unid">Seleccione su dependencia o su unidad </label>
              <select class="controls" name="subcat_dep_o_unid" id="selectSubcategorias">
                <option value="0" selected>Seleccionar</option>
                <option value="value1" data-categoria="1">Rectoría de la UAEH</option>
                <option value="value2" data-categoria="1">Dirección de la Unidad de Transparencia</option>
                <option value="value3" data-categoria="1">Dirección General Jurídica</option>
                <option value="value4" data-categoria="1">Dirección General de Evaluación</option>
                <option value="value5" data-categoria="1">Defensoría Universitaria</option>
                <option value="value6" data-categoria="1">Coordinación de Asesores</option>
                <option value="value7" data-categoria="2">Contraloría General</option>
                <option value="value8" data-categoria="2">Dirección de Control Interno</option>
                <option value="value9" data-categoria="2">Dirección de Auditoría</option>
                <option value="value10" data-categoria="2">
                  Dirección de Responsabilidad Administrativa
                </option>
                <option value="value11" data-categoria="2">Dirección de Supervisión Patrimonial</option>
                <option value="value12" data-categoria="3">Dirección General de Planeación</option>
                <option value="value13" data-categoria="3">Dirección de Información y Sistemas</option>
                <option value="value14" data-categoria="3">Dirección de Gestión de la Calidad</option>
                <option value="value15" data-categoria="3">Dirección de Proyectos y Obras</option>
                <option value="value16" data-categoria="4">
                  Dirección General de Comunicación Social
                </option>
                <option value="value17" data-categoria="4">Dirección de Comunicación Social</option>
                <option value="value18" data-categoria="4">
                  Dirección del Sistema Universitario de Medios Autónomos
                </option>
                <option value="value19" data-categoria="4">Dirección de Radio Universidad Pachuca</option>
                <option value="value20" data-categoria="4">
                  Dirección de Radio Universidad San Bartolo Tutotepec
                </option>
                <option value="value21" data-categoria="4">Dirección de Radio Universidad Zimapán</option>
                <option value="value22" data-categoria="4">Dirección de Radio Universidad Huejutla</option>
                <option value="value23" data-categoria="4">
                  Dirección de Radio Universidad Tulancingo
                </option>
                <option value="value24" data-categoria="4">Dirección de Radio Universidad Actopan</option>
                <option value="value25" data-categoria="5">Secretaría General</option>
                <option value="value26" data-categoria="5">Subsecretaría General</option>
                <option value="value27" data-categoria="5">Dirección del Archivo General</option>
                <option value="value28" data-categoria="5">Dirección de Administración Escolar</option>
                <option value="value29" data-categoria="5">Dirección de Eventos Especiales</option>
                <option value="value30" data-categoria="5">Dirección de Protección Civil</option>
                <option value="value31" data-categoria="5">Dirección de Protección Universitaria</option>
                <option value="value32" data-categoria="5">
                  Dirección de Servicio Médico Universitario
                </option>
                <option value="value33" data-categoria="5">
                  Representante institucional de la Oficina del Estímulo al Desempeño
                  del Personal Docente ante la S.E.P.
                </option>
                <option value="value34" data-categoria="5">
                  Dirección del Centro de Estudios de Opinión
                </option>
                <option value="value35" data-categoria="6">
                  Administración de la Torres de Posgrado "Lic. Gerardo Sosa Castelán"
                </option>
                <option value="value36" data-categoria="6">Administración del CEUNI</option>
                <option value="value37" data-categoria="6">Administración de la Orquesta Sinfónica</option>
                <option value="value38" data-categoria="6">
                  Administración "CARLOS MARTÍNEZ BALMORI"
                </option>
                <option value="value39" data-categoria="6">
                  Administración del Centro Cultural La Garza
                </option>
                <option value="value40" data-categoria="6">
                  Administración de Ciudad del conocimiento
                </option>
                <option value="value41" data-categoria="6">Administración de Torres de Rectoría</option>
                <option value="value42" data-categoria="6">
                  Administración de Centro de Electrónica y Desarrollo de Aplicaciones
                  Inteligentes (CEDAI)
                </option>
                <option value="value43" data-categoria="6">
                  Administración de Club Universitario Real del Monte
                </option>
                <option value="value44" data-categoria="6">
                  Administración de Villa Deportiva Universitaria "Mario Vázquez Raña"
                </option>
                <option value="value45" data-categoria="6">Administración del Museo Casa Grande</option>
                <option value="value46" data-categoria="6">Administración del CEVIDE</option>
                <option value="value47" data-categoria="7">
                  Coordinación de Investigación Desarrollo e Innovación
                </option>
                <option value="value48" data-categoria="7">Dirección de Investigación</option>
                <option value="value49" data-categoria="7">Dirección de Desarrollo e Innovación</option>
                <option value="value50" data-categoria="7">
                  Dirección de Parque Científico y Tecnológico
                </option>
                <option value="value51" data-categoria="7">
                  Dirección del Observatorio Tecnológico de Hidalgo
                </option>
                <option value="value52" data-categoria="7">
                  Dirección de Transferencia de Tecnología
                </option>
                <option value="value53" data-categoria="7">
                  Dirección de Desarrollo de Capital Humano para la Investigación
                </option>
                <option value="value54" data-categoria="7">Dirección de Divulgación de la Ciencia</option>
                <option value="value55" data-categoria="8">Coordinación Académica</option>
                <option value="value56" data-categoria="8">Dirección de Educación Media Superior</option>
                <option value="value57" data-categoria="8">Dirección de Educación Superior</option>
                <option value="value58" data-categoria="8">Dirección de Innovación Académica</option>
                <option value="value59" data-categoria="8">Dirección de Superación Académica</option>
                <option value="value60" data-categoria="8">Dirección del Colegio de Posgrado</option>
                <option value="value61" data-categoria="8">Dirección de Tutorías</option>
                <option value="value62" data-categoria="8">Dirección de Servicios Académicos</option>
                <option value="value63" data-categoria="8">
                  Dirección de Bibliotecas y Centros de Información
                </option>
                <option value="value64" data-categoria="8">Dirección de Laboratorios</option>
                <option value="value65" data-categoria="8">
                  Dirección del Centro de Autoaprendizaje de Idiomas
                </option>
                <option value="value66" data-categoria="8">
                  Dirección del Centro de Cómputo Académico
                </option>
                <option value="value67" data-categoria="8">Dirección de Bioterio</option>
                <option value="value68" data-categoria="8">Dirección del Centro de Lenguas</option>
                <option value="value69" data-categoria="8">Dirección de Becas</option>
                <option value="value70" data-categoria="8">
                  Dirección de Estudios de Pertinencia y Factibilidad
                </option>
                <option value="value71" data-categoria="9">Coordinación de Extensión de la cultura</option>
                <option value="value72" data-categoria="9">Dirección de Promoción Cultural</option>
                <option value="value73" data-categoria="9">Dirección de Ediciones y Publicaciones</option>
                <option value="value74" data-categoria="9">Dirección de Fomento a la Lectura</option>
                <option value="value75" data-categoria="9">Dirección de Promoción Deportiva</option>
                <option value="value76" data-categoria="9">
                  Dirección del Festival Internacional de la Imagen
                </option>
                <option value="value77" data-categoria="9">
                  Dirección de la Feria Universitaria del Libro
                </option>
                <option value="value78" data-categoria="10">
                  Coordinación de Vinculación e Internacionalización
                </option>
                <option value="value79" data-categoria="10">
                  Dirección de Relaciones Internacionales e Intercambio Académico
                </option>
                <option value="value80" data-categoria="10">
                  Dirección de Relaciones Interinstitucionales
                </option>
                <option value="value81" data-categoria="10">Dirección de Relaciones Públicas</option>
                <option value="value82" data-categoria="10">Dirección de Imagen y Mercadotecnia</option>
                <option value="value83" data-categoria="10">
                  Dirección de Servicio Social, Prácticas Profesionales y Vinculación
                  Laboral
                </option>
                <option value="value84" data-categoria="10">Dirección de Vinculación con Egresados</option>
                <option value="value85" data-categoria="10">
                  Dirección de Tecnología Web y Webometría
                </option>
                <option value="value86" data-categoria="10">
                  Dirección del Centro de Educación Continua y a Distancia
                </option>
                <option value="value87" data-categoria="11">
                  Coordinación de Administración y Finanzas
                </option>
                <option value="value88" data-categoria="11">Dirección de Administración de Personal</option>
                <option value="value89" data-categoria="11">
                  Dirección de Recursos Materiales, Adquisiciones, Arrendamientos y
                  Servicios
                </option>
                <option value="value90" data-categoria="11">Dirección de Recursos Financieros</option>
                <option value="value91" data-categoria="11">Dirección de Control Presupuestal</option>
                <option value="value92" data-categoria="11">Dirección de Ahorro para el Retiro</option>
                <option value="value93" data-categoria="11">Dirección de Tesorería</option>
                <option value="value94" data-categoria="11">Dirección de mantenimiento</option>
                <option value="value95" data-categoria="11">Dirección de Transporte</option>
                <option value="value96" data-categoria="12">Presidencia del Patronato Universitario</option>
                <option value="value97" data-categoria="13">Escuela Preparatoria No. 1</option>
                <option value="value98" data-categoria="13">Escuela Preparatoria No. 2</option>
                <option value="value99" data-categoria="13">Escuela Preparatoria No. 3</option>
                <option value="value100" data-categoria="13">Escuela Preparatoria No. 4</option>
                <option value="value101" data-categoria="13">Escuela Preparatoria No. 5</option>
                <option value="value102" data-categoria="13">Escuela Preparatoria No. 6</option>
                <option value="value103" data-categoria="13">Escuela Preparatoria No. 7</option>
                <option value="value104" data-categoria="14">Escuela Superior de Actopan</option>
                <option value="value105" data-categoria="14">Escuela Superior de Apan</option>
                <option value="value106" data-categoria="14">Escuela Superior de Ciudad Sahagún</option>
                <option value="value107" data-categoria="14">Escuela Superior de Huejutla</option>
                <option value="value108" data-categoria="14">Escuela Superior de Tepeji del Rio</option>
                <option value="value109" data-categoria="14">Escuela Superior de Tizayuca</option>
                <option value="value110" data-categoria="14">Escuela Superior de Tlahuelilpan</option>
                <option value="value111" data-categoria="14">Escuela Superior de Zimapán</option>
                <option value="value112" data-categoria="14">Escuela Superior de Atotonilco de Tula</option>
                <option value="value113" data-categoria="15">
                  Instituto de Ciencias Básicas e Ingeniería
                </option>
                <option value="value114" data-categoria="15">
                  Instituto de Ciencias Económico Administrativas
                </option>
                <option value="value115" data-categoria="15">
                  Instituto de Ciencias Sociales y Humanidades
                </option>
                <option value="value116" data-categoria="15">Instituto de Ciencias Agropecuarias</option>
                <option value="value117" data-categoria="15">Instituto de Ciencias de la Salud</option>
                <option value="value118" data-categoria="15">Instituto de Artes</option>
              </select>
              <label for="area_generadora">Área Generadora</label>
              <select class="controls" id="" name="area_generadora">
                <option value="" selected>Seleccionar</option>
                <option value="1">Área</option>
                <option value="2">Coordinación</option>
                <option value="3">Departamento</option>
                <option value="4">Oficina</option>
              </select>
              <label for="generadora">Generadora</label>
              <input class="controls" type="text" name="generadora" id="Gene">
              <label for="seccion">Sección</label>
              <select class="controls" id="selectSeccion" name="seccion">
                <option value="0" selected>Seleccionar</option>
                <option value="1">Gobierno</option>
                <option value="2">Docencia</option>
                <option value="3">Investigación</option>
                <option value="4">Extensión</option>
                <option value="5">Vinculación</option>
                <option value="6">Gestión</option>
                <option value="7">Control</option>
                <option value="8">Apoyo Académico	</option>
              </select>
              <label for="serie">Serie</label>
              <select class="controls" id="selectSeries" name="serie">
                <option value="0" selected>Seleccionar</option>
                <option value="1" data-seccion="1">Actas de Calificaciones</option>
                <option value="2" data-seccion="1">Actos Jurídicos Institucionales</option>
                <option value="3" data-seccion="1">Acuerdos de la Secretaría General</option>
                <option value="4" data-seccion="1">Acuerdos de los Consejos Técnicos de Escuelas e Institutos</option>
                <option value="5" data-seccion="1">Acuerdos del Honorable Consejo Universitario</option>
                <option value="6" data-seccion="1">Acuerdos Rectorales</option>
                <option value="7" data-seccion="1">Adquisiciones de Acervo Documental</option>
                <option value="8" data-seccion="1">Agenda de la Secretaría General</option>
                <option value="9" data-seccion="1">Agenda Rectoral</option>
                <option value="10" data-seccion="1">Alineación Internacional de los Programas Educativos</option>
                <option value="11" data-seccion="1">Análisis de Información Estratégica</option>
                <option value="12" data-seccion="1">Asesoría de Proyectos Institucionales</option>
                <option value="13" data-seccion="1">Atención de Contingencias</option>
                <option value="14" data-seccion="1">Autorizaciones y Seguimiento del Estatus Laboral</option>
                <option value="15" data-seccion="1">Catálogo de Patrimonio Artístico y Cultural</option>
                <option value="16" data-seccion="1">Ceremonias Solemnes y Protocolarias Académicas</option>
                <option value="17" data-seccion="1">Certificaciones de Documentos Institucionales</option>
                <option value="18" data-seccion="1">Comisiones del Honorable Consejo Universitario</option>
                <option value="19" data-seccion="1">Conservación y Restauración Documental</option>
                <option value="20" data-seccion="1">Consulta y Préstamo De Expedientes</option>
                <option value="21" data-seccion="1">Control de Acervos Documentales</option>
                <option value="22" data-seccion="1">Control de Certificaciones y Firmas</option>
                <option value="23" data-seccion="1">Control de Correspondencia Oficial</option>
                <option value="24" data-seccion="1">Control de Seguridad De Las Instalaciones y Personal de Vigilancia</option>
                <option value="25" data-seccion="1">Convocatorias Académicas</option>
                <option value="26" data-seccion="1">Credencialización Institucional</option>
                <option value="27" data-seccion="1">Cuerpos Colegiados y Comisiones Institucionales</option>
                <option value="28" data-seccion="1">Difusión y Promoción de los Derechos Humanos</option>
                <option value="29" data-seccion="1">Discursos, Diálogos y Mensajes de la Rectoría</option>
                <option value="30" data-seccion="1">Discursos, Diálogos y Mensajes de la Secretaría General</option>
                <option value="31" data-seccion="1">Estudios de Opinión</option>
                <option value="32" data-seccion="1">Expediente de alumno</option>
                <option value="33" data-seccion="1">Fideicomiso de Movilidad</option>
                <option value="34" data-seccion="1">Formación académica internacional</option>
                <option value="35" data-seccion="1">Gestión de contenidos páginas web</option>
                <option value="36" data-seccion="1">Imagen e identidad institucional</option>
                <option value="37" data-seccion="1">Incorporación de estudios</option>
                <option value="38" data-seccion="1">Informe de la Administración Universitaria</option>
                <option value="39" data-seccion="1">Instrumentos de control y consulta</option>
                <option value="40" data-seccion="1">Integración de Consejos Técnicos de Escuelas e Institutos</option>
                <option value="41" data-seccion="1">Integración del Honorable Consejo Universitario</option>
                <option value="42" data-seccion="1">Investiduras y otorgamiento de grados</option>
                <option value="43" data-seccion="1">Matrícula escolar</option>
                <option value="44" data-seccion="1">Movilidad Internacional</option>
                <option value="45" data-seccion="1">Movilidad Nacional</option>
                <option value="46" data-seccion="1">Normatividad Universitaria</option>
                <option value="47" data-seccion="1">Plataformas de intercambio de conocimiento en la Web</option>
                <option value="48" data-seccion="1">Políticas de internacionalización</option>
                <option value="49" data-seccion="1">Proceso de egreso</option>
                <option value="50" data-seccion="1">Proceso de ingreso a la UAEH</option>
                <option value="51" data-seccion="1">Proceso de Titulación</option>
                <option value="52" data-seccion="1">Programa de Estímulos al Desempeño del Personal Docente</option>
                <option value="53" data-seccion="1">Programación y apoyo logístico de eventos institucionales</option>
                <option value="54" data-seccion="1">Programas de Vinculación Internacional</option>
                <option value="55" data-seccion="1">Programas nacionales e internacionales de intercambio académico</option>
                <option value="56" data-seccion="1">Protección y defensa de los Derechos Humanos entre la comunidad universitaria</option>
                <option value="57" data-seccion="1">Proyectos de Diseño Gráfico Institucional</option>
                <option value="58" data-seccion="1">Proyectos y comisiones especiales</option>
                <option value="59" data-seccion="1">Rankings internacionales</option>
                <option value="60" data-seccion="1">Registro de programas de estudios ante la Dirección General de Profesiones</option>
                <option value="61" data-seccion="1">Relaciones con organizaciones representativas</option>
                <option value="62" data-seccion="1">Representatividad y/o relaciones ante organismos y entidades estatales, nacionales e internacionales</option>
                <option value="63" data-seccion="1">Reproducción de acervos</option>
                <option value="64" data-seccion="1">Revalidación de estudios</option>
                <option value="65" data-seccion="1">Revisión de proyectos especiales institucionales</option>
                <option value="66" data-seccion="1">Revisión y signa de acuerdos, convenios y contratos</option>
                <option value="67" data-seccion="1">Sesiones de los Consejos Técnicos de Escuelas e Institutos</option>
                <option value="68" data-seccion="1">Sesiones del Honorable Consejo Universitario</option>
                <option value="69" data-seccion="1">Sistema de Información de Administración Escolar</option>
                <option value="70" data-seccion="1">Sistema de Protección Civil Universitario</option>
                <option value="71" data-seccion="1">Sistema Institucional de Gestión de Equidad de Género</option>
                <option value="72" data-seccion="1">Sistema Institucional Gestión documental, administración de Archivos y Transparencia</option>
                <option value="73" data-seccion="1">Transferencias documentales</option>
                <option value="74" data-seccion="1">Valoración Documental</option>
                <option value="75" data-seccion="1">Webometría</option>
                <option value="76" data-seccion="2">Academia de programas institucionales de Educación Superior</option>
                <option value="77" data-seccion="2">Asesorías académicas</option>
                <option value="78" data-seccion="2">Atención psicopedagógica</option>
                <option value="79" data-seccion="2">Cargas del trabajo Académico</option>
                <option value="80" data-seccion="2">Certificación del nivel de dominio del idioma</option>
                <option value="81" data-seccion="2">Certificación docente</option>
                <option value="82" data-seccion="2">Concursos, encuentros y competencias de conocimientos</option>
                <option value="83" data-seccion="2">Desarrollo y seguimiento de programas educativos de idiomas</option>
                <option value="84" data-seccion="2">Diseño Curricular</option>
                <option value="85" data-seccion="2">Diseño de programas y asignaturas institucionales</option> 
                <option value="86" data-seccion="2">Edición de materiales didácticos</option>
                <option value="87" data-seccion="2">Estudios de factibilidad y pertinencia</option>
                <option value="88" data-seccion="2">Formación y Actualización Docente</option>
                <option value="89" data-seccion="2">Gestión de la Plataforma Educativa</option>
                <option value="90" data-seccion="2">Implementación y operación de programas educativos</option>
                <option value="91" data-seccion="2">Mediaciones pedagógicas para la enseñanza- aprendizaje de idiomas</option>
                <option value="92" data-seccion="2">Oferta educativa</option>
                <option value="93" data-seccion="2">Planeación académica</option>
                <option value="94" data-seccion="2">Programa de Desarrollo de   Dependencias de Educación Superior</option>
                <option value="95" data-seccion="2">Programa de Tutorías /Sistema Institucional de Tutorías</option>
                <option value="96" data-seccion="2">Programas de Formación y Actualización Docente.</option>
                <option value="97" data-seccion="2">Programas educativos de la UAEH</option>
                <option value="98" data-seccion="2">Programas y Asignaturas Institucionales</option>
                <option value="99" data-seccion="2">Promoción y asesoría de la oferta educativa</option>
                <option value="100" data-seccion="2">Redes de colaboración académica y científica</option>
                <option value="101" data-seccion="2">Rediseño Curricular</option>
                <option value="102" data-seccion="2">Reuniones de Academia</option>
                <option value="103" data-seccion="2">Reuniones de planeación de la docencia</option>
                <option value="104" data-seccion="2">Seguimiento a la Formación y Actualización Docente</option>
                <option value="105" data-seccion="2">Sistema de Administración de Programas Educativos</option>
                <option value="106" data-seccion="2">Trayectoria escolar docente</option>
                <option value="107" data-seccion="2">Ubicación y acreditación del nivel de idioma</option>
                <option value="108" data-seccion="3">Becas de posgrado</option>
                <option value="109" data-seccion="3">Cátedras Patrimoniales</option>
                <option value="110" data-seccion="3">Cuerpos académicos</option>
                <option value="111" data-seccion="3">Diseño de Programas Educativos de Posgrado</option>
                <option value="112" data-seccion="3">Divulgación de la ciencia</option>
                <option value="113" data-seccion="3">Estancias sabáticas y posdoctorales</option>
                <option value="114" data-seccion="3">Expedientes del Programa de Mejoramiento del Profesorado</option>
                <option value="115" data-seccion="3">Financiamiento externo para la investigación</option>
                <option value="116" data-seccion="3">Gestión de la propiedad intelectual</option>
                <option value="117" data-seccion="3">Grupos de investigación</option>
                <option value="118" data-seccion="3">Informes financieros de programas de apoyo a la investigación y profesorado</option>
                <option value="119" data-seccion="3">Líneas de generación y aplicación del conocimiento</option>
                <option value="120" data-seccion="3">Padrón del Registro Nacional de Instituciones y Empresas Científicas y Tecnológicas</option>
                <option value="121" data-seccion="3">Portafolio de comercialización de investigación</option>
                <option value="122" data-seccion="3">Producción Científica</option>
                <option value="123" data-seccion="3">Programa Anual de Investigación (PAI)</option>
                <option value="124" data-seccion="3">Programa Nacional de Posgrados de Calidad (PNPC)</option>
                <option value="125" data-seccion="3">Proyectos de Investigación del Consejo Nacional de Ciencia y Tecnología</option>
                <option value="126" data-seccion="3">Proyectos de Transferencia Tecnológica</option>
                <option value="127" data-seccion="3">Sistema Nacional de Creadores</option>
                <option value="128" data-seccion="3">Sistema Nacional de Investigadores</option>
                <option value="129" data-seccion="4">Adquisiciones de patrimonio artístico</option>
                <option value="130" data-seccion="4">Consejo Editorial y comités editoriales</option>
                <option value="131" data-seccion="4">Deporte profesional</option>
                <option value="132" data-seccion="4">Deporte selectivo y representativo</option>
                <option value="133" data-seccion="4">Difusión de actividades de extensión</option>
                <option value="134" data-seccion="4">Difusión editorial</option>
                <option value="135" data-seccion="4">Distribución y comercialización de material editorial</option>
                <option value="136" data-seccion="4">Enlace con Escuelas e Institutos</option>
                <option value="137" data-seccion="4">Eventos Institucionales de Extensión Cultural</option>
                <option value="138" data-seccion="4">Grupos Representativos Culturales</option>
                <option value="139" data-seccion="4">Informe y memoria del evento</option>
                <option value="140" data-seccion="4">Invitación y gestión de expositores</option>
                <option value="141" data-seccion="4">Muestras y Exposiciones</option>
                <option value="142" data-seccion="4">Organización y participación en Ferias del Libro</option>
                <option value="143" data-seccion="4">Planeación y gestión de actividades</option>
                <option value="144" data-seccion="4">Planeación y gestión de participantes e invitados</option>
                <option value="145" data-seccion="4">Proceso Editorial</option>
                <option value="146" data-seccion="4">Programa de Activación física</option>
                <option value="147" data-seccion="4">Programa oficial de actividades</option>
                <option value="148" data-seccion="4">Programas de fomento a la lectura</option>
                <option value="149" data-seccion="4">Programas institucionales de promoción cultural</option>
                <option value="150" data-seccion="4">Programas institucionales de promoción deportiva</option>
                <option value="151" data-seccion="4">Registro de homenajes, reconocimientos y constancias de participación</option>
                <option value="152" data-seccion="4">Servicios de Salud Deportiva</option>
                <option value="153" data-seccion="4">Talleres culturales</option>
                <option value="154" data-seccion="5">Actividades académicas para incentivar la innovación y el emprendurismo</option> 
                <option value="155" data-seccion="5">Actividades de fortalecimiento a la cultura de la vinculación</option>
                <option value="156" data-seccion="5">Actividades y proyectos para la vinculación universitaria</option>
                <option value="157" data-seccion="5">Administración escolar de actividades de educación continua</option>
                <option value="158" data-seccion="5">Catálogo de servicios de la UAEH</option>
                <option value="159" data-seccion="5">Catálogo de unidades receptoras de Servicio Social</option>
                <option value="160" data-seccion="5">Centro incubador de empresas de la UAEH</option>
                <option value="161" data-seccion="5">Prácticas Profesionales</option>
                <option value="162" data-seccion="5">Programa PERAJ Adopta un Amig@</option>
                <option value="163" data-seccion="5">Programas de Educación Continua</option>
                <option value="164" data-seccion="5">Programas de vinculación</option>
                <option value="165" data-seccion="5">Programas de vinculación con el empleo</option> 
                <option value="166" data-seccion="5">Programas institucionales de promoción de servicio social</option>
                <option value="167" data-seccion="5">Programas institucionales de vinculación con el sector social y productivo</option>
                <option value="168" data-seccion="5">Programas y servicios asistenciales</option>
                <option value="169" data-seccion="5">Red Institucional de Educación continua</option>
                <option value="170" data-seccion="5">Red Institucional de Vinculación</option>
                <option value="171" data-seccion="5">Servicio Social Universitario</option>
                <option value="172" data-seccion="5">Servicio Social Voluntario</option>
                <option value="173" data-seccion="5">Vinculación con los sectores social y productivo</option>
                <option value="174" data-seccion="6">Administración de los espacios físicos universitarios</option>
                <option value="175" data-seccion="6">Administración de servidores y bases de datos institucionales</option>
                <option value="176" data-seccion="6">Administración del módulo de finanzas del SIIA</option>
                <option value="177" data-seccion="6">Administración y control de empresas universitarias</option>
                <option value="178" data-seccion="6">Adquisiciones por adjudicación directa</option>
                <option value="179" data-seccion="6">Adquisiciones por invitación a cuando menos tres</option>
                <option value="180" data-seccion="6">Adquisiciones por licitación</option>
                <option value="181" data-seccion="6">Agenda institucional</option>
                <option value="182" data-seccion="6">Almacén de materiales</option>
                <option value="183" data-seccion="6">Asistencia, asesorías y opiniones jurídicas</option>
                <option value="184" data-seccion="6">Asuntos administrativos</option>
                <option value="185" data-seccion="6">Asuntos agrarios</option>
                <option value="186" data-seccion="6">Asuntos civiles</option>
                <option value="187" data-seccion="6">Asuntos fiscales</option>
                <option value="188" data-seccion="6">Asuntos laborales</option>
                <option value="189" data-seccion="6">Asuntos mercantiles</option>
                <option value="190" data-seccion="6">Asuntos penales</option>
                <option value="191" data-seccion="6">Atención a visitantes</option>
                <option value="192" data-seccion="6">Boletines Informativos</option>
                <option value="193" data-seccion="6">Capacitación de personal</option>
                <option value="194" data-seccion="6">Cobertura, protocolo y difusión de actividades institucionales</option>
                <option value="195" data-seccion="6">Comunicaciones oficiales</option>
                <option value="196" data-seccion="6">Concesión y permisos de transmisión de Radio UAEH</option>
                <option value="197" data-seccion="6">Condonaciones de servicios educativos</option>
                <option value="198" data-seccion="6">Control de asistencias</option>
                <option value="199" data-seccion="6">Control de insumos</option>
                <option value="200" data-seccion="6">Control de Inventarios de activo fijo</option>
                <option value="201" data-seccion="6">Control de la programación</option>
                <option value="202" data-seccion="6">Desarrollo de la infraestructura de tecnológica de información</option>
                <option value="203" data-seccion="6">Desarrollo informático de sistemas y aplicaciones</option>
                <option value="204" data-seccion="6">Directorio externo</option>
                <option value="205" data-seccion="6">Directorio institucional</option>
                <option value="206" data-seccion="6">Discoteca</option>
                <option value="207" data-seccion="6">Diseño de proyectos arquitectónicos</option>
                <option value="208" data-seccion="6">Ejercicio presupuestal</option>
                <option value="209" data-seccion="6">Estadísticas institucionales</option>
                <option value="210" data-seccion="6">Estados Financieros</option>
                <option value="211" data-seccion="6">Estudios estratégicos</option>
                <option value="212" data-seccion="6">Expediente de personal</option>
                <option value="213" data-seccion="6">Fondos Extraordinarios</option>
                <option value="214" data-seccion="6">Informes Financieros</option>
                <option value="215" data-seccion="6">Juicios de amparo</option>
                <option value="216" data-seccion="6">Licencias, concesiones y permisos</option>
                <option value="217" data-seccion="6">Mantenimiento preventivo y correctivo de las instalaciones</option>
                <option value="218" data-seccion="6">Mantenimiento preventivo y correctivo de software y hardware</option>
                <option value="219" data-seccion="6">Monitoreo de la imagen institucional en medios</option>
                <option value="220" data-seccion="6">Movimientos ante el Instituto Mexicano del Seguro Social</option>
                <option value="221" data-seccion="6">Nómina de pago de personal</option>
                <option value="222" data-seccion="6">Obligaciones fiscales</option>
                <option value="223" data-seccion="6">Obras arquitectónicas</option>
                <option value="224" data-seccion="6">Organización y Métodos</option>
                <option value="225" data-seccion="6">Órgano informativo oficial</option> 
                <option value="226" data-seccion="6">Padrón de proveedores</option>
                <option value="227" data-seccion="6">Pagos de nómina</option>
                <option value="228" data-seccion="6">Parque vehicular</option>
                <option value="229" data-seccion="6">Pautas e inserción en medios de comunicación</option>
                <option value="230" data-seccion="6">Plan de Desarrollo Institucional</option>
                <option value="231" data-seccion="6">Plan maestro de construcción e infraestructura física</option>
                <option value="232" data-seccion="6">Planes de negocio</option>
                <option value="233" data-seccion="6">Pólizas y auxiliares contables</option>
                <option value="234" data-seccion="6">Prestaciones Contractuales</option>
                <option value="235" data-seccion="6">Presupuesto Anual Universitario (PAU)</option> 
                <option value="236" data-seccion="6">Presupuesto de Ingresos y Egresos</option>
                <option value="237" data-seccion="6">Producción de Radio UAEH</option>
                <option value="238" data-seccion="6">Producciones Videográficas Universitarias</option>
                <option value="239" data-seccion="6">Propiedad intelectual de Empresas Universitarias</option>
                <option value="240" data-seccion="6">Propiedades y terrenos</option>
                <option value="241" data-seccion="6">Protección legal de derechos</option>
                <option value="242" data-seccion="6">Protocolo institucional</option>
                <option value="243" data-seccion="6">Proyectos en materia de…</option>
                <option value="244" data-seccion="6">Red Institucional de Telecomunicaciones</option>
                <option value="245" data-seccion="6">Registro y legalización de contratos institucionales</option>
                <option value="246" data-seccion="6">Registro y legalización de convenios institucionales</option>
                <option value="247" data-seccion="6">Seguridad e Higiene en el Trabajo</option>
                <option value="248" data-seccion="6">Seguridad Social Obrero Patronal e INFONAVIT</option>
                <option value="249" data-seccion="6">Selección y contratación de personal académico</option>
                <option value="250" data-seccion="6">Selección y contratación de personal administrativo</option>
                <option value="251" data-seccion="6">Selección y contratación por honorarios</option>
                <option value="252" data-seccion="6">Síntesis Informativa</option>
                <option value="253" data-seccion="6">Sistema Institucional de Gestión Ambiental y Responsabilidad Social</option>
                <option value="254" data-seccion="6">Sistema Institucional de Gestión de la Calidad</option>
                <option value="255" data-seccion="6">Sistema Integral de Administración de Personal</option>
                <option value="256" data-seccion="6">Transmisión de Radio UAEH</option>
                <option value="257" data-seccion="6">Transmisión de Radio UAEH</option>
                <option value="258" data-seccion="7">Acreditación de programas educativos</option>
                <option value="259" data-seccion="7">Comité de Transparencia y Acceso a la Información Publica</option> 
                <option value="260" data-seccion="7">Evaluación de Proyectos y comisiones especiales</option>
                <option value="261" data-seccion="7">Evaluación de Cuerpos Académicos (CCAA)</option>
                <option value="262" data-seccion="7">Evaluación de estudio de seguimiento de egresados y empleadores</option>
                <option value="263" data-seccion="7">Evaluación de Indicadores Institucionales del PDI</option>
                <option value="264" data-seccion="7">Evaluación de Líneas de Investigación (LGAIC)</option>
                <option value="265" data-seccion="7">Evaluación de programas educativos</option>
                <option value="266" data-seccion="7">Evaluación de Trayectorias Escolares y laborales</option>
                <option value="267" data-seccion="7">Evaluación del Clima Institucional</option>
                <option value="268" data-seccion="7">Evaluación del personal académico no docente</option>
                <option value="269" data-seccion="7">Evaluación del personal administrativo</option>
                <option value="270" data-seccion="7">Evaluación del personal directivo</option>
                <option value="271" data-seccion="7">Evaluación del personal docente</option>
                <option value="272" data-seccion="7">Examen General para el Egreso de Licenciatura</option>
                <option value="273" data-seccion="7">Informes de auditorías externas bajo convenio con la Asociación Mexicana de Órganos de control y vigilancia en Instituciones de Educación Superior</option>
                <option value="274" data-seccion="7">Informes internos de auditorías, revisiones y seguimientos</option>
                <option value="275" data-seccion="7">Solicitudes de acceso a la información pública</option>
                <option value="276" data-seccion="8">Adquisiciones bibliohemerográficas</option>
                <option value="277" data-seccion="8">Acciones Preventivas Universitarias en materia de salud</option>
                <option value="278" data-seccion="8">Administración de producción de animales de laboratorio</option>
                <option value="279" data-seccion="8">Afiliación al IMSS</option>
                <option value="280" data-seccion="8">Becas externas</option>
                <option value="281" data-seccion="8">Becas internas</option>
                <option value="282" data-seccion="8">Biblioteca digital</option>
                <option value="283" data-seccion="8">Bitácoras de mantenimiento de equipos y materiales específicos para los servicios académicos</option>
                <option value="284" data-seccion="8">Control de usuarios de los servicios académicos</option>
                <option value="285" data-seccion="8">Cursos de Inducción</option>
                <option value="286" data-seccion="8">Estudios socioeconómicos</option>
                <option value="287" data-seccion="8">Examen médico</option>
                <option value="288" data-seccion="8">Expedientes de alumnos sometidos al Honorable Consejo Técnico</option>
                <option value="289" data-seccion="8">Procesos Técnicos bibliohemerográficos</option>
                <option value="290" data-seccion="8">Programa de manejo de residuos químicos y biológicos</option>
                <option value="291" data-seccion="8">Red institucional servicios académicos</option>
                <option value="292" data-seccion="8">Reuniones Familia UAEH</option>
                <option value="293" data-seccion="8">Servicios diagnósticos médicos</option>
                <option value="294" data-seccion="8">Vigilancia epidemiológica</option>
              </select>
              <!--el numero consecutivo es automatico-->
              <label for="no_consecutivo">Número consecutivo</label>
              <input class="controls" type="number" name="no_consecutivo" id="NCon" min="0">
              <label for="titulo_expediente">Título Expediente</label>
              <input class="controls" type="text" name="titulo_expediente" id="TituExpe">
              <label for="tipo_archivo">Tipo de Archivo</label>
              <select class="controls" id="" name="tipo_archivo">
                <option value="" selected>Seleccionar</option>
                <option value="value1">Físico</option>
                <option value="value2">Electrónico</option>
              </select>
              <label for="f_apertura">Fecha de apertura</label>
              <input class="controls" type="date" name="f_apertura" id="FAper">
              <label for="f_cierre">Fecha de cierre</label>
              <input class="controls" type="date" name="f_cierre" id="FCie">
              <label for="n_legajos">Número Legajos</label>
              <input class="controls" type="number" name="n_legajos" id="FAper" min="1">
              <label for="a_guarda">Años Guarda</label>
              <input class="controls" type="number" name="a_guarda" id="AGAC" min="1">
              <label for="u_topografia">Ubicación Topográfica</label>
              <input class="controls" type="text" name="u_topografia" id="UTopo">
              <label for="observaciones">Observaciones</label>
              <input class="controls" type="text" name="observaciones" id="Obse">
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
      <script src="{{ asset('js/archivo_tramite.js') }}"></script>  
    </body>
</html>