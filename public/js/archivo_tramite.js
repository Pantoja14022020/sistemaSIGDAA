//Selecciono el select que solicita el tipo de organizacion: unidad academica o unidad academica ----SELECT
const selectTipoOrganizacion = document.getElementById('seleccionarTipoOrganizacion');


//Selecciono el select que tiene todas las categorias de unidades y dependencias
const selectDependenciasUnidades = document.getElementById('dependenciasUnidades'); //----SELECT
//Genero un arreglo y guardo sus opciones que son las categorias de unidades y las dependencias
const dependenciasUnidades = [...selectDependenciasUnidades.children];
//Ahora borro las options del select que tiene las categorias de dependencias y unidades, de todos modos ya las guarde
selectDependenciasUnidades.innerHTML = `<option value="0" selected>Seleccionar</option>`;



selectTipoOrganizacion.addEventListener('change', e => {//Seleccino el select que pide elegir entre unidad o dependencia y escuchamos el evento cuando cambia la opcion
    const tipoOrganizacionSeleccionado = parseInt(e.target.value);//Selecciono el valor de la opcion elegida
    //Hago el filtrado con una funcion  los parametros que pide son:     arreglo de las opciones, numero de la opcion seleccionada, atributo para la cual vamos a comparar
    selectDependenciasUnidades.innerHTML = ``;
    selectDependenciasUnidades.innerHTML = `<option value="0" selected>Seleccionar</option>`;
    selectCategoriasDependenciasUnidades.innerHTML = ``;
    selectCategoriasDependenciasUnidades.innerHTML = `<option value="0" selected>Seleccionar</option>`;
    
    const opcionesElegidas = filtrarOpciones(dependenciasUnidades,tipoOrganizacionSeleccionado,'data-tipo-organizacion');
    opcionesElegidas.forEach(opcion => {
        selectDependenciasUnidades.appendChild(opcion);
    })
    selectDependenciasUnidades.selectedIndex = 0;
    selectCategoriasDependenciasUnidades.selectedIndex = 0;
});






//Selecciono el select que tiene las unidades y dependencias
const selectCategoriasDependenciasUnidades = document.getElementById('selectSubcategorias');
//Genero un arreglo y guardo sus opciones que son las unidades y las dependencias
const categoriasDependenciasUnidades = [...selectCategoriasDependenciasUnidades.children];
//Ahora borro las options del select que tiene las dependencias y unidades, de todos modos ya las guarde
selectCategoriasDependenciasUnidades.innerHTML = `<option value="0" selected>Seleccionar</option>`;

selectDependenciasUnidades.addEventListener('change', e => {
    const categoriaUnidadDependenciaSeleccionado = parseInt(e.target.value);//Selecciono el valor de la opcion elegida (dependencia o unidad)
    const opcionesElegidas = filtrarOpciones(categoriasDependenciasUnidades,categoriaUnidadDependenciaSeleccionado,'data-categoria');
    selectCategoriasDependenciasUnidades.innerHTML = ``;
    selectCategoriasDependenciasUnidades.innerHTML = `<option value="0" selected>Seleccionar</option>`;
    opcionesElegidas.forEach(opcion => {
        selectCategoriasDependenciasUnidades.appendChild(opcion);
    })
    selectCategoriasDependenciasUnidades.selectedIndex = 0;
});








//Selecciono el select que tiene todas las series
const selectSeries = document.getElementById('selectSeries');
//Genero un arreglo y guardo sus opciones que son las series
const series = [...selectSeries.children];
//Ahora borro las options del select que tienen las series, de todos ya las guarde en un arreglo
selectSeries.innerHTML = `<option value="0" selected>Seleccionar</option>`;

const selectSeccion = document.getElementById('selectSeccion');//Selecciono el select que tiene las diferentes secciones
selectSeccion.addEventListener('change', e => {//Escucho el evento de este select cuando se cambia de opcion
    const seccionSeleccionado = parseInt(e.target.value);//Selecciono el valor de la opcion elegida (seccion)
    const opcionesElegidas = filtrarOpciones(series,seccionSeleccionado,'data-seccion');
    selectSeries.innerHTML = ``;
    selectSeries.innerHTML = `<option value="0" selected>Seleccionar</option>`;
    opcionesElegidas.forEach(opcion => {
        selectSeries.appendChild(opcion);
    })
    selectSeries.selectedIndex = 0;
});










//ESTA FUNCION ES LA QUE HACE LA MAGIA DE FILTRAR
function filtrarOpciones(opciones,opcionElegida,atributoHTML){
    let optionsElegidos = [];
    for(let i = 0; i < opciones.length; i++){
        if(parseInt(opciones[i].getAttribute(atributoHTML)) == opcionElegida){
            optionsElegidos.push(opciones[i]);
        }
    }
    return optionsElegidos;
}