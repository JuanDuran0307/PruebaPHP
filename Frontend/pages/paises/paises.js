import { getPaises}  from "./API.js";

addEventListener('DOMContentLoaded',()=>{
    cargarPaises();

})

async function cargarPaises(){


    const paises = await getPaises();
    const tablapaises = document.querySelector('#datosClientes');
    paises.forEach(element => {
        const {id,nombrePais}=element ;
        tablapaises.innerHTML += `
        <tr>
            <th scope="row">${id}</th>
            <td>${nombrePais} </td>
        </tr>
        `
        
    });
    console.log(Paises);

}