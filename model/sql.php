<?php 

    class sql{

        private $bd;

        public function __construct() {
            $this $bd = new mysqli(SERVIDOR, USUARIO, CLAVE, BDD);
            $this-> bd-> set_charset('utf8');
        }

        #Funcion para Agregar Usuarios
        public function AgregarUsuarios(){
            $resultado = $this->bd->query();
            return;
        }

        #Funcion para Agregar Vehiculos
        public function AgregarVehiculos($vehiculo_placa, $vehiculo_modelo, $vehiculo_color, $vehiculo_marca, $vehiculo_aaa){
            $resultado = $this->bd->query("INSERT INTO vehiculos (VEHICULO_PLACA, VEHICULO_MODELO, VEHICULO_COLOR, VEHICULO_MARCA, VEHICULO_AAA) VALUES ('$vehiculo_placa', '$vehiculo_modelo', '$vehiculo_color', '$vehiculo_marca', '$vehiculo_aaa')");
            return true;
        }

        #Funcion para Consultar Vehiculos
        public function ConsultarVehiculos(){
            $resultado = $this->bd->query("SELECT * FROM vehiculos");
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
        public function AgregarClientes($cliente_cedula, $cliente_nombre, $cliente_apellido, $cliente_correo, $cliente_celular, $cliente_direccion, $cliente_licencia){
            $resultado = $this->bd->query("INSERT INTO cliente (CLIENTE_CEDULA, CLIENTE_NOMBRE, CLIENTE_APELLIDO, CLIENTE_CORREO, CLIENTE_CELULAR, CLIENTE_DIRECCION, CLIENTE_LICENCIA) VALUES ('$cliente_cedula', '$cliente_nombre', '$cliente_apellido', '$cliente_correo', '$cliente_celular', '$cliente_direccion', '$cliente_licencia')");
            return true;
        }

        #Funcion para Consultar Clientes
        public function ConsultarClientes(){
            $resultado = $this->bd->query("SELECT * FROM cliente");
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

        #Funcion para Agregar Empresa
        public function AgregarEmpresa($empresa_ruc, $empresa_nombre, $empresa_direccion, $empresa_detalle, $empresa_correo, $empresa_telefono){
            $resultado = $this->bd->query("INSERT INTO empresa(EMPRESA_RUC, EMPRESA_NOMBRE, EMPRESA_DIRECCION, EMPRESA_DETALLE, EMPRESA_CORREO, EMPRESA_TELEFONO) VALUES ('$empresa_ruc', '$empresa_nombre', '$empresa_direccion', '$empresa_detalle', '$empresa_correo', '$empresa_correo', '$empresa_telefono')");
            return true;
        }

        #Funcion para Consultar Empresa
        public function ConsultarEmpresa(){
            $resultado = $this->bd->query("SELECT * FROM empresa");
            return $resultado;
        }

        #Funcion para Editar Empresa
        public function UpdateEmpresa(){
            $resultado = $this->bd->query();
            return;
        }

        #Funcion para Eliminar Empresa
        public function EliminarEmpresa($empresa_ruc){
            $resultado = $this->bd->query("DELETE FROM empresa WHERE EMPRESA_RUC = '$empresa_ruc'");
            return true;
        }


    }

?>