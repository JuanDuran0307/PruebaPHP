const urlDepartamentos = "http://localhost/ArTeM01-055/PruebaPHP/Backend/controllers/controllerDepartamentos.php?op=GetAll"

export const getDepartamentos = async ()=>{
    try {
        const campers = await fetch(urlDepartamentos);
        const datosCampers = campers.json();
        return datosCampers;
        
    } catch (error) {
        console.log(error);
    }

}