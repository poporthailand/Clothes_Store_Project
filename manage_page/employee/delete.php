<?php 
    

    $id_employee = $_GET["id_employee"];
    
    $conn = mysqli_connect('localhost', 'root', '', 'clothes_store_project');
        if(!$conn) {
            die('Connection fail');
        }
        
        $sql = "DELETE FROM employee WHERE id_employee='$id_employee'";
        mysqli_query($conn, $sql);

        

        header("Location: up&de_employee.php"); 
        

   
?>