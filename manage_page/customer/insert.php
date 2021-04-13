<?php 
    

    $id_customer = $_GET["id_customer"];
    $firstname_customer = $_GET["firstname_customer"];
    $lastname_customer = $_GET["lastname_customer"];
    $gender_customer = $_GET["gender_customer"];
    $tel_customer = $_GET["tel_customer"];
   
    
    $conn = mysqli_connect('localhost', 'root', '', 'clothes_store_project');
        if(!$conn) {
            die('Connection fail');
        }
        
        $sql = "INSERT INTO `customer` (`id_customer`, `firstname_customer`, `lastname_customer`, `gender_customer`, `tel_customer`) VALUES ('$id_customer', '$firstname_customer', '$lastname_customer', '$gender_customer', '$tel_customer');";
        mysqli_query($conn, $sql);

        

        header("Location: insert_customer.php"); 
        

   
?>