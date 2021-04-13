<?php 

    $id_employee = $_GET["id_employee"];
    $firstname_employee = $_GET["firstname_employee"];
    $lastname_employee = $_GET["lastname_employee"];
    $tel_employee = $_GET["tel_employee"];
    $salary_employee = $_GET["salary_employee"];

        
    $conn = mysqli_connect('localhost', 'root', '', 'clothes_store_project');
        if(!$conn) {
            die('Connection fail');
        }
    

    $sql = "UPDATE employee SET firstname_employee = '$firstname_employee' ,lastname_employee = '$lastname_employee' , tel_employee = '$tel_employee' , salary_employee = '$salary_employee' WHERE id_employee = '$id_employee'";
    
    mysqli_query($conn, $sql);
    
    
    header("Location: up&de_employee.php");
?>