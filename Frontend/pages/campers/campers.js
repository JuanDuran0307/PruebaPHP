import { getCampers}  from "./API.js";

addEventListener('DOMContentLoaded',()=>{
    cargarCampers();

})

async function cargarCampers(){


    const campers = await getCampers();
    const tablaCampers = document.querySelector('#datosClientes');
    campers.forEach(element => {
        const {id,nombreCamper,apellidoCamper,fechaNacimiento,idRegion}=element ;
        tablaCampers.innerHTML += `
        <tr>
            <th scope="row">${id}</th>
            <td>${nombreCamper} </td>
            <td>${apellidoCamper} </td>
            <td>${fechaNacimiento} </td>
            <td>${idRegion} </td>
        </tr>
        `
        
    });
    console.log(campers);

}