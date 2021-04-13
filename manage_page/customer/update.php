<?php 

    $id_customer = $_GET["id_customer"];
    $firstname_customer = $_GET["firstname_customer"];
    $lastname_customer = $_GET["lastname_customer"];
    $tel_customer = $_GET["tel_customer"];

        
    $conn = mysqli_connect('localhost', 'root', '', 'clothes_store_project');
        if(!$conn) {
            die('Connection fail');
        }
    

    $sql = "UPDATE customer SET firstname_customer = '$firstname_customer' ,lastname_customer = '$lastname_customer' , tel_customer = '$tel_customer'  WHERE id_customer = '$id_customer'";
    
    mysqli_query($conn, $sql);
    
    
    header("Location: up&de_customer.php");
?>