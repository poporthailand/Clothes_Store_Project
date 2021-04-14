<?php 

    $id_product = $_GET["id_product"];
    $name_product = $_GET["name_product"];
    $unitprice_product = $_GET["unitprice_product"];
    $quantity_product = $_GET["quantity_product"];
    

        
    $conn = mysqli_connect('localhost', 'root', '', 'clothes_store_project');
        if(!$conn) {
            die('Connection fail');
        }
    

    $sql = "UPDATE `etc_product` SET `name_product` = '$name_product', `unitprice_product` = '$unitprice_product', `quantity_product` = '$quantity_product' WHERE `id_product` = '$id_product';";
    
    mysqli_query($conn, $sql);
    
    
    header("Location: ../up&de_product.php");
?>