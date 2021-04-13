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
            text-align:right;
        
        }
        input {
            margin-left:4px;
            margin-top: 8px;
       
            font-size:20px;
        }
        label {
            font-weight: normal;
            font-size: 20px;
            
        }
        .btnn {
            background: #ffa9a5;
        }
        .btnn:hover {
            background: #b67a77;;
        }
        
        
    </style>
    <link rel="stylesheet" href="../../stylesheets/manage.css">
</head>

<body>
<?php 
    $id_customer = $_GET["id_customer"];
    
    $conn = mysqli_connect('localhost', 'root', '', 'clothes_store_project');
        if(!$conn) {
            die('Connection fail');
        }

        $sql = "SELECT * FROM customer WHERE id_customer='$id_customer'";
        $fetch = mysqli_query($conn, $sql);
        $result = mysqli_fetch_array($fetch);
        
?>
    <div class="container">

        <div class="header">
        <pre style="font-size:0px"> </pre>
            <h1>Vscreen004</h1>
        </div>

        <div class="menu">
        <a href="../../main_page/main.php"><button>Main</button></a>
            <a href="../../shop_page/shop_shirt.php"><button>Shop</button></a>
            <a href="../manage.php"><button>Manage</button></a>
            <a href="../../report_page/report.php"><button>Report</button></a>
            <button>Contact</button>
        </div>

        <div class="Body">
        <a href="up&de_customer.php">
        <button class="btnn" style="float:left;margin-top:40px;float:left;font-size:18px;font-weight: bold;border-radius: 35px;cursor: pointer;font-weight: bold;box-shadow:0 2px rgba(0, 0, 0, 0.2);border: 1px solid #111;width:150px;height:50px;">Backs</button></a>
        <pre style="font-size:0px;"> </pre>
        <p style="margin-left:800px;cursor: default;font-size:50px;font-weight:bold;">Update Customer</p>
            <form action="update.php" method="get">
                <table border="0" align=center style="font-size:25px;font-weight:bold;">
                    
                    <tr>
                        <td>รหัสลูกค้า :</td>
                        <td>
                        <input type=text readonly name=id_customer value="<?php echo $result[0]?>">
                        </td>
                    </tr>

                    <tr>
                        <td>ชื่อ :</td>
                        <td>
                        <input type=text name=firstname_customer value="<?php echo $result[1]?>">
                        </td>
                    </tr>

                    <tr>
                        <td>นามสกุล :</td>
                        <td>
                        <input type=text name=lastname_customer value="<?php echo $result[2]?>">
                        </td>
                    </tr>

                    <tr>
                        <td>เพศ :</td>
                        <td>
                        <input type=text readonly name=gender_customer value="<?php echo $result[3]?>">
                        </td>
                    </tr>

                    <tr>
                        <td>เบอร์โทรศัพท์ :</td>
                        <td>
                        <input type=text maxlength="10" name=tel_customer value="<?php echo $result[4]?>">
                        </td>
                    </tr>

                    

                </table>
                <br>
                <table align="center">
                    <tr>
                        

                        <td>
                    
                        <input type=submit value=Submit  class="btnn" style="float:left;font-size:18px;font-weight: bold;border-radius: 35px;cursor: pointer;font-weight: bold;box-shadow:0 2px rgba(0, 0, 0, 0.2);border: 1px solid #111;width:150px;height:50px;"></input>
                        </td>
                    </tr>
                </table>
                    
            </form>
                        
            
        </div>

    </div>
</body>

</html>