<?php 

    class sql{

        private $bd;

        public function __construct() {
            $this->bd = new mysqli(SERVIDOR, USUARIO, CLAVE, BDD);
            $this-> bd-> set_charset('utf8');
        }

        #Funcion para Agregar Usuarios
        public function ConsultarUsuarios(){
            $resultado = $this->bd->query("SELECT * FROM usuarios");
            return $resultado;
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
        public function EliminarClientes($id){
            $resultado = $this->bd->query("DELETE FROM cliente WHERE CLIENTE_ID = '$id'");
            return true;
        }



        public function EliminarAlquiler($id){
            $resultado = $this->bd->query("DELETE FROM alquiler WHERE ALQUILER_CODIGO = '$id'");
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

        #Funcion para Alquilar Vehiculos
        public function AlquilarVehiculos($alquiler_fecha, $alquiler_dias, $alquiler_total, $alquiler_cliente, $alquiler_vehiculo){
            $resultado = $this->bd->query("INSERT INTO alquiler(ALQUILER_CODIGO, ALQUILER_FECHA, ALQUILER_DIAS, ALQUILER_TOTAL, CLIENTE_CLIENTE_CEDULA, VEHICULOS_VEHICULO_PLACA) VALUES (0, '$alquiler_fecha', '$alquiler_dias', '$alquiler_total', '$alquiler_cliente', '$alquiler_vehiculo')");
            return true;
        }

        #Consultar Clave Usuario
        public function ConsultaUsuarioClave($usuario_nombre, $usuario_cedula, $usuario_contrasena){
            $resultado = $this->bd->query("SELECT * FROM usuarios  
                                            WHERE USUARIO_NOMBRE='$usuario_nombre' 
                                            AND USUARIO_CEDULA='$usuario_cedula' 
                                            AND USUARIO_CONTRASENA='$usuario_contrasena'");
            return $resultado;
              
        }

        #Consultar ID Clientes
        public function ConsultarClienteID($id){
            $resultado = $this->bd->query("SELECT * FROM cliente WHERE CLIENTE_ID = '$id'");
            return $resultado;
        }

        #Actualizar Clientes
        public function UpdateClientes($cliente_id, $cliente_nombre, $cliente_correo, $cliente_celular,$cliente_direccion, $cliente_tipo){
            $resultado = $this->bd->query("UPDATE cliente SET CLIENTE_ID='$cliente_id', CLIENTE_NOMBRE='$cliente_nombre', CLIENTE_CORREO='$cliente_correo', CLIENTE_CELULAR='$cliente_celular', CLIENTE_DIRECCION='$cliente_direccion', TIPO_CLIENTE_TIPO_CLIENTE_ID='$cliente_tipo' WHERE CLIENTE_ID = '$cliente_id'");
            return $resultado;
        }

        #Actualizar Vehiculos
        public function UpdateVehiculos($vehiculo_placa, $vehiculo_marca, $vehiculo_modelo, $vehiculo_color, $vehiculo_aaa, $vehiculo_precio){
            $resultado = $this->bd->query("UPDATE vehiculos SET VEHICULO_PLACA='$vehiculo_placa', VEHICULO_MODELO='$vehiculo_modelo', VEHICULO_COLOR='$vehiculo_color', VEHICULO_MARCA='$vehiculo_marca', VEHICULO_AAA='$vehiculo_aaa', VEHICULO_PRECIO='$vehiculo_precio' WHERE VEHICULO_PLACA = '$vehiculo_placa'");
            return $resultado;
        }
    }

?>