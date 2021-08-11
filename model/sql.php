<?php 

    class sql{

        private $bd;

        public function __construct() {
            $this->bd = new mysqli(SERVIDOR, USUARIO, CLAVE, BDD);
            $this-> bd-> set_charset('utf8');
        }

        #Funcion para Agregar Usuarios
        public function AgregarUsuarios(){
            $resultado = $this->bd->query();
            return;
        }

        #Funcion para Agregar Vehiculos
        public function AgregarVehiculos($vehiculo_placa, $vehiculo_marca, $vehiculo_modelo, $vehiculo_color, $vehiculo_aaa, $vehiculo_precio){
            $resultado = $this->bd->query("INSERT INTO vehiculos (VEHICULO_PLACA, VEHICULO_MARCA, VEHICULO_MODELO, VEHICULO_COLOR, VEHICULO_AAA, VEHICULO_PRECIO) VALUES ('$vehiculo_placa', '$vehiculo_marca', '$vehiculo_modelo', '$vehiculo_color', '$vehiculo_aaa', '$vehiculo_precio')");
            return true;
        }

        #Funcion para Consultar Vehiculos
        public function ConsultarVehiculos(){
            $resultado = $this->bd->query("SELECT * FROM vehiculos");
            return $resultado;
        }

        #Funcion para Contar Vehiculos
        public function ContarVehiculos(){
            $resultado = $this->bd->query("SELECT COUNT(VEHICULO_PLACA) FROM vehiculos");
            return $resultado;
        }

        #Funcion para Editar Vehiculos
        public function UpdateVehiculos(){
            $resultado = $this->bd->query();
            return;
        }

        #Funcion para Eliminar Vehiculos
        public function EliminarVehiculos($vehiculo_placa){
            $resultado = $this->bd->query("DELETE FROM vehiculos WHERE VEHICULO_PLACA = '$vehiculo_placa'");
            return true;
        }

        #Funcion para Agregar Clientes
        public function AgregarClientes($cliente_id, $cliente_nombre, $cliente_correo, $cliente_celular,$cliente_direccion, $cliente_tipo){
            $resultado = $this->bd->query("INSERT INTO cliente (CLIENTE_ID, CLIENTE_NOMBRE, CLIENTE_CORREO, CLIENTE_CELULAR, CLIENTE_DIRECCION, TIPO_CLIENTE_TIPO_CLIENTE_ID) VALUES ('$cliente_id', '$cliente_nombre', '$cliente_correo', '$cliente_celular','$cliente_direccion', '$cliente_tipo')");
            return true;
        }

        

        #Funcion para Consultar Clientes
        public function ConsultarClientes(){
            $resultado = $this->bd->query("SELECT * FROM cliente");
            return $resultado;
        }

        #Funcion para Contar la cantidad de Clientes
        public function ContarClientes(){
            $resultado = $this->bd->query("SELECT COUNT(CLIENTE_ID) FROM cliente");
            return $resultado;
        }

        #Funcion para Editar Clientes
        public function EditarClientes(){
            $resultado = $this->bd->query();
            return;
        }

        #Funcion para Eliminar Clientes
        public function EliminarClientes($cliente_cedula){
            $resultado = $this->bd->query("DELETE FROM clientes WHERE CLIENTE_CEDULA = '$cliente_cedula'");
            return true;
        }

        #Funcion para Consultar Tipo
        public function ConsultarRazonSocial(){
            $resultado = $this->bd->query("SELECT * FROM tipo_cliente");
            return $resultado;
        }
        
        #Funcion para Consultar Alquiler
        public function ConsultarAlquiler(){
            $resultado = $this->bd->query("SELECT * FROM alquiler");
            return $resultado;
        }

        #Funcion para Contar Alquileres
        public function ContarAlquiler(){
            $resultado = $this->bd->query("SELECT COUNT(ALQUILER_CODIGO) FROM alquiler");
            return $resultado;
        }


    }

?>