import { getDepartamentos}  from "./API.js";

addEventListener('DOMContentLoaded',()=>{
    cargarDepartamentos();

})

async function cargarDepartamentos(){


    const departamento = await getDepartamentos();
    const tabladepartamento = document.querySelector('#datosClientes');
    departamento.forEach(element => {
        const {id,nombreDepartamento,idPais}=element ;
        tabladepartamento.innerHTML += `
        <tr>
            <th scope="row">${id}</th>
            <td>${nombreDepartamento} </td>
            <td>${idPais} </td>

        </tr>
        `
        
    });
    console.log(departamento);

}