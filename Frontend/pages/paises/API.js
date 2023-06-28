const urlpais = "http://localhost/ArTeM01-055/PruebaPHP/Backend/controllers/controllerPaises.php?op=GetAll";

export const getPaises = async ()=>{
    try {
        const paises = await fetch(urlpais);
        const datospaises = paises.json();
        return datospaises;
        
    } catch (error) {
        console.log(error);
    }

}