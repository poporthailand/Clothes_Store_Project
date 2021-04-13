<?php 
    

    $id_customer = $_GET["id_customer"];
    
    $conn = mysqli_connect('localhost', 'root', '', 'clothes_store_project');
        if(!$conn) {
            die('Connection fail');
        }
        
        $sql = "DELETE FROM customer WHERE id_customer='$id_customer'";
        mysqli_query($conn, $sql);

        

        header("Location: up&de_customer.php"); 
        

   
?>