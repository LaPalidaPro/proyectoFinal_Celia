<<?php
    class ControladorUsuarios
    {
        public function login()
        {

            //Creamos la conexión utilizando la clase que hemos creado
            $connexionDB = new ConnexionDB(MYSQL_USER, MYSQL_PASS, MYSQL_HOST, MYSQL_DB);
            $conn = $connexionDB->getConnexion();

            //limpiamos los datos que vienen del usuario
            $email = htmlspecialchars($_POST['email']);
            $password = htmlspecialchars($_POST['password']);

            //Validamos el usuario
            $usuariosDAO = new UsuariosDAO($conn);
            if ($usuario = $usuariosDAO->getByEmail($email)) {
                if (password_verify($password, $usuario->getPassword())) {
                    //email y password correctos. Inciamos sesión
                    $_SESSION['email'] = $usuario->getEmail();
                    $_SESSION['foto'] = $usuario->getFoto();
                    $_SESSION['id'] = $usuario->getId();

                    //Creamos la cookie para que nos recuerde 1 semana
                    setcookie('sid', $usuario->getSid(), time() + 24 * 60 * 60, '/');
                    //Redirigimos a index.php
                    header('location: index.php');
                    die();
                }
            }
            //email o password incorrectos, redirigir a index.php
            guardarMensaje("Email o password incorrectos");
            header('location: index.php');
        }
        public function logout()
        {

            session_unset();    //Borra todas las variables de sesión
            setcookie('sid', '', 0, '/');
            header('location: index.php');
        }
        public function borrar()
        {
        }
        public function editar()
        {
            print "editar";
        }
        public function isertar()
        {
            print "isertar";
        }
    }
