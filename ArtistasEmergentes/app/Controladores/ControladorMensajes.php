<<?php
    class ControladorMensajes
    {
        public function ver()
        {

            //Creamos la conexión utilizando la clase que hemos creado
            $connexionDB = new ConnexionDB(MYSQL_USER, MYSQL_PASS, MYSQL_HOST, MYSQL_DB);
            $conn = $connexionDB->getConnexion();

            //Creamos el objeto MensajesDAO para acceder a BBDD a través de este objeto
            $mensajesDAO = new MensajesDAO($conn);

            //Obtener el mensaje
            $idMensaje = htmlspecialchars($_GET['id']);
            $mensaje = $mensajesDAO->getById($idMensaje);
            //Incluyo la vista
            require 'app/Vistas/ver_mensaje.php';
        }
        public function inicio()
        {
            //Creamos la conexion utitlizando la clase que hecoms creasdo
            //Creamos la conexión utilizando la clase que hemos creado
            $connexionDB = new ConnexionDB(MYSQL_USER, MYSQL_PASS, MYSQL_HOST, MYSQL_DB);
            $conn = $connexionDB->getConnexion();

            //Creamos el objeto MensajesDAO para acceder a BBDD a través de este objeto
            $mensajeDAO = new MensajesDAO($conn);
            $mensajes = $mensajeDAO->getAll();
            //Incluyo la vista
            require 'app/Vistas/inicio.php';
        }
        public function borrar()
        {
            //Creamos la conexión utilizando la clase que hemos creado
            $connexionDB = new ConnexionDB(MYSQL_USER, MYSQL_PASS, MYSQL_HOST, MYSQL_DB);
            $conn = $connexionDB->getConnexion();
            //Creamos el objeto MensajesDAO para acceder a BBDD a través de este objeto
            $mensajesDAO = new MensajesDAO($conn);

            //Obtener el mensaje
            $idMensaje = htmlspecialchars($_GET['id']);
            $mensaje = $mensajesDAO->getById($idMensaje);

            //Comprobamos que mensaje pertenece al usuario conectado
            if ($_SESSION['id'] == $mensaje->getIdUsuario()) {
                $mensajesDAO->delete($idMensaje);
            } else {
                guardarMensaje("No puedes borrar este mensaje");
            }

            header('location: index.php');
        }
        public function editar()
        {
        }
        public function isertar()
        {

            //¡¡Página privada!! Esto impide que puedan ver esta página
            //si no han iniciado sesión
            if (!isset($_SESSION['email'])) {
                header("location: index.php");
                guardarMensaje("No puedes insertar mensajes si no estás indentificado");
                die();
            }



            $error = '';

            //Creamos la conexión utilizando la clase que hemos creado
            $connexionDB = new ConnexionDB(MYSQL_USER, MYSQL_PASS, MYSQL_HOST, MYSQL_DB);
            $conn = $connexionDB->getConnexion();

            $usuariosDAO = new UsuariosDAO($conn);
            $usuarios = $usuariosDAO->getAll();


            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                //Limpiamos los datos que vienen del usuario
                $titulo = htmlspecialchars($_POST['titulo']);
                $texto =  htmlspecialchars($_POST['texto']);
                //$idUsuario = htmlspecialchars($_POST['idUsuario']);   //Solo necesario si queremos seleccionar usuario en el desplegable

                //Validamos los datos
                if (empty($titulo) || empty($texto)) {
                    $error = "Los dos campos son obligatorios";
                } else {
                    //Creamos el objeto MensajesDAO para acceder a BBDD a través de este objeto
                    $mensajesDAO = new MensajesDAO($conn);
                    $mensaje = new Mensaje();
                    $mensaje->setTitulo($titulo);
                    $mensaje->setTexto($texto);
                    //$mensaje->setIdUsuario($idUSuario) //Metía el usuario seleccionado en el desplegable
                    $mensaje->setIdUsuario($_SESSION['id']); //El id del usuario conectado (en la sesión)
                    $mensajesDAO->insert($mensaje);
                    header('location: index.php');
                    die();
                    
                }
            }
            require 'app/Vistas/insertar_mensaje.php';
        }
    }
