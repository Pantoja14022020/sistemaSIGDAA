//Selecciono el select que pide el tipo de usuario (dependencia o unidad)
const selectTipoUsuario = document.getElementById('tipo-usuario');


//Seleccionar el select que tienen los dieferentes tipos de dependencias o unidades
const selectUnidadesDependenciasRegistro = document.getElementById('selectUnidadesDependenciasRegistro');
const registroUnidadesDependencias = [...selectUnidadesDependenciasRegistro.children];
selectUnidadesDependenciasRegistro.innerHTML = `<option value="0" selected>Seleccionar</option>`;



selectTipoUsuario.addEventListener('change', e => {
    const tipoOrganizacionSeleccionado = parseInt(e.target.value);
    selectUnidadesDependenciasRegistro.innerHTML = ``;
    selectUnidadesDependenciasRegistro.innerHTML = `<option value="0" selected>Seleccionar</option>`;
    selectSetUnidadesDep.innerHTML = ``;
    selectSetUnidadesDep.innerHTML = `<option value="0" selected>Seleccionar</option>`;

    const opcionesElegidas = filtrarOpciones(registroUnidadesDependencias,tipoOrganizacionSeleccionado,'data-tipo');
    opcionesElegidas.forEach(opcion => {
        selectUnidadesDependenciasRegistro.appendChild(opcion);
    })

    selectUnidadesDependenciasRegistro.selectedIndex = 0;
});















//Seleccionar el select de todas las dependencias y unidades
const selectSetUnidadesDep = document.getElementById('selectSetUnidadesDep');
const setUnidadesDependencias = [...selectSetUnidadesDep.children];
selectSetUnidadesDep.innerHTML = `<option value="0" selected>Seleccionar</option>`;

selectUnidadesDependenciasRegistro.addEventListener('change', e => {
    const tipoOrganizacionSeleccionado = parseInt(e.target.value);
    selectSetUnidadesDep.innerHTML = ``;
    selectSetUnidadesDep.innerHTML = `<option value="0" selected>Seleccionar</option>`;

    const opcionesElegidas = filtrarOpciones(setUnidadesDependencias,tipoOrganizacionSeleccionado,'data-categoria');
    opcionesElegidas.forEach(opcion => {
        selectSetUnidadesDep.appendChild(opcion);
    })

    selectSetUnidadesDep.selectedIndex = 0;
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