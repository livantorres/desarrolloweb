

<?php




// username and password sent from form 
$myusername=$_POST['usuario'];
$mypassword=$_POST['password'];

try {
    // Connect to server and select database.
    $db = new PDO("mysql:host=localhost;dbname=uaes", $username, $password);
    $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

    $stmt = $db->("SELECT *, COUNT(*) as count FROM usuario WHERE usuario = :usuario AND pass= :password");
    $stmt->bindParam(':usuario', $myusername);
    $stmt->bindParam(':password', $mypassword);

    if ($row = $sth->fetch(PDO::FETCH_ASSOC)) {
        $count = $row['count'];

        // If result matched $myusername and $mypassword, table must be 1 row
        if ($count == 1) {        
            switch( $row['role'] ){

                case 'Admin':
                    header("location:index.php");
                    exit();

                case 'Trainer':
                    header("location:index1.php");
                    exit();

                case 'Line Manager':
                    header("location:index2.php");
                    exit();

                case 'Client':
                    header("location:client.php");
                    exit();

                default:
                    echo "Usuario o Contraseña Incorrecta";
            }
        }
    }

    $db = null;
    require 'vista/login.php';
}

catch(PDOException $e) {  
    echo $e->getMessage();  
}

?>