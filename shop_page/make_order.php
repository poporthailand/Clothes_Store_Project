<?php 
    

    $id_employee = $_GET["id_employee"];
    
    
    
    $conn = mysqli_connect('localhost', 'root', '', 'clothes_store_project');
        if(!$conn) {
            die('Connection fail');
        }
        
        $sql = "INSERT INTO `employee` (`id_employee`, `firstname_employee`, `lastname_employee`, `gender_employee`, `tel_employee`, salary_employee) VALUES ('$id_employee', '$firstname_employee', '$lastname_employee', '$gender_employee', '$tel_employee', '$salary_employee');";
       // mysqli_query($conn, $sql);

        

        header("Location: shop_order.php"); 
        

   
?>