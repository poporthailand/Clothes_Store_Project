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
            background: #ffa9a5;
        }
        .btnn1:hover {
            background: #b67a77;;
        }
        
    </style>
    <link rel="stylesheet" href="../../stylesheets/manage.css">
</head>

<body>
    <?php 
        error_reporting(0);
        $conn = mysqli_connect('localhost', 'root', '', 'clothes_store_project');
        if(!$conn) {
            die('Connection fail');
        }

        $sql = "SELECT * FROM shirt_product";
        $fetch = mysqli_query($conn, $sql);

        for ($x=0; $x < mysqli_num_rows($fetch); $x++) {
            $result[] = mysqli_fetch_array($fetch)   ;
        }
        
        


      
        
    ?>
    <div class="container" >

        <div class="header" >
        <pre style="font-size:0px"> </pre>
            <h1 >Vscreen004</h1>
        </div>

        <div class="menu">
        <a href="../../main_page/main.php"><button>Main</button></a>
            <a href="../../shop_page/shop_shirt.php"><button>Shop</button></a>
            <a href="../manage.php"><button>Manage</button></a>
            <a href="../../report_page/report.php"><button>Report</button></a>
            <a href="https://web.facebook.com/VScreen_304-540283122716828/" target="_blank"><button>Contact</button></a>
        </div>

        <div class="Body" style="height:1430px;">
        <a href="../manage.php">
        <button class="btnn1" style="float:left;margin-top:40px;float:left;font-size:18px;font-weight: bold;border-radius: 35px;cursor: pointer;font-weight: bold;box-shadow:0 2px rgba(0, 0, 0, 0.2);border: 1px solid #111;width:150px;height:50px;">Backs</button></a>
        <pre style="font-size:0px;"> </pre>
        <p style="margin-left:710px;cursor: default;font-size:50px;font-weight:bold;">Update&Delete Shirt Product</p>
            
            <table  align=center style= "width: 1000px;">
                <tr style="font-size:25px;font-weight:bold;">
                    <th>#</th>
                    <th>Id_Product</th>
                    <th>Name_Product</th>
                    <th>Unitprice_product</th>
                    <th>Quantity_product</th>
                    <th></th>
                    <th></th>
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
                    <td><a href=\"./shirt/update_product.php?id_product=".$result[$x][0]."\"><button class=btnn style=\"border-radius: 10px;border: 1px solid #111;padding: 0px;
                    margin:0;height:30px;width:80px;font-size: 15px;\">Update</button></a></td>

                    <td><a href=\"./shirt/delete_product.php?id_product=".$result[$x][0]."\"><button class=btnn style=\"border-radius: 10px;border: 1px solid #111;padding: 0px;
                    margin:0;height:30px;width:80px;font-size: 15px;\">Delete</button></a></td>
                </tr>"; 
                        $x++;
                    }

                    
                ?>

            </table>
    <?php

    
    
            $sql = "SELECT * FROM pant_product";
            $fetch = mysqli_query($conn, $sql);

            for ($x=0; $x < mysqli_num_rows($fetch); $x++) {
            $result1[] = mysqli_fetch_array($fetch)   ;
         }
    ?>
            <p style="margin-top:120px;margin-left:710px;cursor: default;font-size:50px;font-weight:bold;">Update&Delete Pant Product</p>
            
            <table  align=center style= "width: 1000px;">
                <tr style="font-size:25px;font-weight:bold;">
                    <th>#</th>
                    <th>Id_Product</th>
                    <th>Name_Product</th>
                    <th>Unitprice_product</th>
                    <th>Quantity_product</th>
                    <th></th>
                    <th></th>
                </tr>

                
            
                <?php 
                    $x = 0;
                    while($x < count($result1)){
                        
                    echo "<tr>
                    <td style=\"text-align:center;\">".($x+1)."</td>
                    <td>".$result1[$x][0]."</td>
                    <td>".$result1[$x][1]."</td>
                    <td>".$result1[$x][2]."</td>
                    <td>".$result1[$x][3]."</td>
                    <td><a href=\"./pant/update_product.php?id_product=".$result1[$x][0]."\"><button class=btnn style=\"border-radius: 10px;border: 1px solid #111;padding: 0px;
                    margin:0;height:30px;width:80px;font-size: 15px;\">Update</button></a></td>

                    <td><a href=\"./pant/delete_product.php?id_product=".$result1[$x][0]."\"><button class=btnn style=\"border-radius: 10px;border: 1px solid #111;padding: 0px;
                    margin:0;height:30px;width:80px;font-size: 15px;\">Delete</button></a></td>
                </tr>"; 
                        $x++;
                    }
                ?>

                

            </table>
            
            <?php
            $sql = "SELECT * FROM etc_product";
            $fetch = mysqli_query($conn, $sql);

            for ($x=0; $x < mysqli_num_rows($fetch); $x++) {
            $result2[] = mysqli_fetch_array($fetch)   ;
         }
    ?>
            <p style="margin-top:120px;margin-left:710px;cursor: default;font-size:50px;font-weight:bold;">Update&Delete Etc Product</p>
            
            <table  align=center style= "width: 1000px;">
                <tr style="font-size:25px;font-weight:bold;">
                    <th>#</th>
                    <th>Id_Product</th>
                    <th>Name_Product</th>
                    <th>Unitprice_product</th>
                    <th>Quantity_product</th>
                    <th></th>
                    <th></th>
                </tr>

                
            
                <?php 
                    $x = 0;
                    while($x < count($result2)){
                        
                    echo "<tr>
                    <td style=\"text-align:center;\">".($x+1)."</td>
                    <td>".$result2[$x][0]."</td>
                    <td>".$result2[$x][1]."</td>
                    <td>".$result2[$x][2]."</td>
                    <td>".$result2[$x][3]."</td>
                    <td><a href=\"./etc/update_product.php?id_product=".$result2[$x][0]."\"><button class=btnn style=\"border-radius: 10px;border: 1px solid #111;padding: 0px;
                    margin:0;height:30px;width:80px;font-size: 15px;\">Update</button></a></td>

                    <td><a href=\"./etc/delete_product.php?id_product=".$result2[$x][0]."\"><button class=btnn style=\"border-radius: 10px;border: 1px solid #111;padding: 0px;
                    margin:0;height:30px;width:80px;font-size: 15px;\">Delete</button></a></td>
                </tr>"; 
                        $x++;
                    }
                ?>

                

            </table>
            
            <pre style="margin-top:50px;"> </pre>

            
        </div>

    </div>
</body>

</html>