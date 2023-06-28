const urlCamper = "http://localhost/ArTeM01-055/PruebaPHP/Backend/controllers/controllerCampers.php?op=GetAll";

export const getCampers = async ()=>{
    try {
        const campers = await fetch(urlCamper);
        const datosCampers = campers.json();
        return datosCampers;
        
    } catch (error) {
        console.log(error);
    }

}