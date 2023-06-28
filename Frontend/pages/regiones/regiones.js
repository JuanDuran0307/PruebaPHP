import { getRegiones}  from "./API.js";

addEventListener('DOMContentLoaded',()=>{
    cargarRegiones();

})

async function cargarRegiones(){


    const regiones = await getRegiones();
    const tablaRegiones = document.querySelector('#datosClientes');
    regiones.forEach(element => {
        const {id,nombreRegion,idDepartamento}=element ;
        tablaRegiones.innerHTML += `
        <tr>
            <th scope="row">${id}</th>
            <td>${nombreRegion} </td>
            <td>${idDepartamento} </td>
        </tr>
        `
        
    });
    console.log(regiones);

}