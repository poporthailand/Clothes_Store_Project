<?php 
    

    $id_product = $_GET["id_product"];
    
    
    $conn = mysqli_connect('localhost', 'root', '', 'clothes_store_project');
        if(!$conn) {
            die('Connection fail');
        }
        
        $sql = "DELETE FROM `etc_product` WHERE `id_product` = '$id_product'";
        mysqli_query($conn, $sql);

        

        //header("Location: ../up&de_product.php"); 
        

   
?>