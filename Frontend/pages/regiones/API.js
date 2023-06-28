const urlRegion = "http://localhost/ArTeM01-055/PruebaPHP/Backend/controllers/controllerRegiones.php?op=GetAll";

export const getRegiones = async ()=>{
    try {
        const regiones = await fetch(urlRegion);
        const datosregiones = regiones.json();
        return datosregiones;
        
    } catch (error) {
        console.log(error);
    }

}