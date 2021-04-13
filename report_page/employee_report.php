<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td{
            cursor: default;
            padding: 10px 10px;
            background: #ddd4cb;
            font-size:18px;
            border: 1px solid #111;
        }
        tr{
            
        }
        th{
            cursor: default;
            padding: 10px 10px;
            background:#b6afa7  ;
            border: 1px solid #111;
        }
        input {
            margin-left:4px;
            margin-top: 8px;
        }
        label {
            font-weight: normal;
            font-size: 20px;
            
        }
        .btnn {
            background-color: #d8d8d8;
        }
        .btnn:hover {
            background: #a1a1a1;;
        }
        table {
            border: 1px solid #111;
            border-collapse: collapse;
            
        }

        .btnn1 {
            background: #787e8b;
        }
        .btnn1:hover {
            background: #666b76;
        }
        
    </style>
    <link rel="stylesheet" href="../stylesheets/report.css">
</head>

<body>
    <?php 
        error_reporting(0);
        $conn = mysqli_connect('localhost', 'root', '', 'clothes_store_project');
        if(!$conn) {
            die('Connection fail');
        }

        $sql = "SELECT * FROM employee";
        $fetch = mysqli_query($conn, $sql);

        for ($x=0; $x < mysqli_num_rows($fetch); $x++) {
            $result[] = mysqli_fetch_array($fetch)   ;
        }
        
        


      
        
    ?>
    <div class="container">

        <div class="header" style="background:#212832;">
        <pre style="font-size:0px"> </pre>
            <h1>Vscreen004</h1>
        </div>

        <div class="menu" style="background:#393d46;">
        <a href="../main_page/main.php"><button>Main</button></a>
            <a href="../shop_page/shop_shirt.php"><button>Shop</button></a>
            <a href="../manage_page/manage.php"><button>Manage</button></a>
            <a href="./report.php"><button>Report</button></a>
            <button>Contact</button>
        </div>

        <div class="Body" style="background:#00adb4;">
        <a href="report.php">
        <button class="btnn1" style="float:left;margin-top:40px;float:left;font-size:18px;font-weight: bold;border-radius: 35px;cursor: pointer;font-weight: bold;box-shadow:0 2px rgba(0, 0, 0, 0.2);border: 1px solid #111;width:150px;height:50px;">Backs</button></a>
        <pre style="font-size:0px;"> </pre>
        <p style="margin-left:780px;cursor: default;font-size:50px;font-weight:bold;">Employee Report</p>
            
            <table  align=center style= "width: 1000px;">
                <tr style="font-size:25px;font-weight:bold;">
                    <th>#</th>
                    <th>Id_Employee</th>
                    <th>Firstname_Employee</th>
                    <th>Lastname_Employee</th>
                    <th>Gender_Employee</th>
                    <th>Tel_Employee</th>
                    <th>Salary_Employee</th>
                    
                </tr>

                
            
                <?php 
                    $x = 0;
                    while($x < count($result)){
                        
                    echo "<tr>
                    <td style=\"text-align:center;\">".($x+1)."</td>
                    <td>".$result[$x][0]."</td>
                    <td>".$result[$x][1]."</td>
                    <td>".$result[$x][2]."</td>
                    <td>".$result[$x][3]."</td>
                    <td>".$result[$x][4]."</td>
                    <td>".$result[$x][5]."</td>
                    
                </tr>"; 
                        $x++;
                    }
                ?>

                

            </table>
            
            

            
        </div>

    </div>
</body>

</html>