

<?php
    class Camper extends Conectar{

        public function get_Campers(){
            try {
                $conectar=parent::Conexion();
                parent::set_name();
                $stm = $conectar -> prepare("SELECT * FROM campers");
                $stm->execute();
                return $stm->fetchAll(PDO::FETCH_ASSOC);
            } catch (Exception $e){
                return $e->getMessage(); 
            }
        }

        public function insert_campers($id,$nombreCamper,$apellidoCamper,$fechaNacimiento,$idRegion){
            $conectar = parent::Conexion();
            parent::set_name();
            $stm = "INSERT INTO campers(id,nombreCamper,apellidoCamper,fechaNacimiento,idRegion) VALUES (?,?,?,?,?)";
            $stm = $conectar->prepare($stm);
            $stm = bindValue(1,$id);
            $stm = bindValue(2,$nombreCamper);
            $stm = bindValue(3,$apellidoCamper);
            $stm = bindValue(4,$fechaNacimiento);
            $stm = bindValue(5,$idRegion);
            $stm->execute();

            return $stm->fetchAll(PDO::FETCH_ASSOC);

        }
    }

?>



<?php
    class Pais extends Conectar{

        public function get_paises(){
            try {
                $conectar=parent::Conexion();
                parent::set_name();
                $stm = $conectar -> prepare("SELECT * FROM paises");
                $stm->execute();
                return $stm->fetchAll(PDO::FETCH_ASSOC);
            } catch (Exception $e){
                return $e->getMessage(); 
            }
        }

        public function insert_paises($id,$nombrePais){
            $conectar = parent::Conexion();
            parent::set_name();
            $stm = "INSERT INTO paises (id,nombrePais) VALUES (?,?)";
            $stm = $conectar->prepare($stm);
            $stm = bindValue(1,$id);
            $stm->execute();

            return $stm->fetchAll(PDO::FETCH_ASSOC);

        }
    }

?>
<?php
    class Departamento extends Conectar{

        public function get_departamentos(){
            try {
                $conectar=parent::Conexion();
                parent::set_name();
                $stm = $conectar -> prepare("SELECT * FROM departamentos");
                $stm->execute();
                return $stm->fetchAll(PDO::FETCH_ASSOC);
            } catch (Exception $e){
                return $e->getMessage(); 
            }
        }

        public function insert_departamentos($id,$nombreDepartamento,$idPais){
            $conectar = parent::Conexion();
            parent::set_name();
            $stm = "INSERT INTO departamentos (id,nombreDepartamento,idPais) VALUES (?,?,?)";
            $stm = $conectar->prepare($stm);
            $stm = bindValue(1,$id);
            $stm = bindValue(2,$nombreDepartamento);
            $stm = bindValue(3,$idPais);
            $stm->execute();

            return $stm->fetchAll(PDO::FETCH_ASSOC);

        }
    }

?>
<?php
    class Region extends Conectar{

        public function get_regiones(){
            try {
                $conectar=parent::Conexion();
                parent::set_name();
                $stm = $conectar -> prepare("SELECT * FROM regiones");
                $stm->execute();
                return $stm->fetchAll(PDO::FETCH_ASSOC);
            } catch (Exception $e){
                return $e->getMessage(); 
            }
        }

        public function insert_regiones($id,$nombreRegion,$idDepartamento){
            $conectar = parent::Conexion();
            parent::set_name();
            $stm = "INSERT INTO regiones (id,nombreRegion,idDepartamento) VALUES (?,?,?)";
            $stm = $conectar->prepare($stm);
            $stm = bindValue(1,$id);
            $stm = bindValue(2,$nombreRegion);
            $stm = bindValue(3,$idDepartamento);
            $stm->execute();

            return $stm->fetchAll(PDO::FETCH_ASSOC);

        }
    }

?>