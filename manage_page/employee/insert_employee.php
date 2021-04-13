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

        $conn = mysqli_connect('localhost', 'root', '', 'clothes_store_project');
        if(!$conn) {
            die('Connection fail');
        }

        $sql = "SELECT * FROM employee";
        $fetch = mysqli_query($conn, $sql);

        for ($x=0; $x < mysqli_num_rows($fetch); $x++) {
            $result = mysqli_fetch_array($fetch)   ;
        }
        
        $tmp = str_split($result[0]);

        $t = true;
               
        if($tmp[4] == 9){
            $tmp[4] = 0;
            $tmp[3] = $tmp[3]+1;
            if ($tmp[3] == 10) {
                $tmp[3] = 0;
                $tmp[2] = 1;
            }
            $t = false;
        }
        if($tmp[3] == 9 && $tmp[4] == 9){
            $tmp[3] = 0;
            $tmp[2] = $tmp[2]+1;
            if ($tmp[2] == 10) {
                $tmp[2] = 0;
                $tmp[1] = 1;
            }
        }
        if($tmp[2] == 9 && $tmp[3] == 9 && $tmp[4] == 9){
            $tmp[2] = 0;
            $tmp[1] = $tmp[1]+1;
        }
        if($t) $tmp[4]++;
        
        $tmp = join('',$tmp);
        
        
        

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
        <a href="../manage.php">
        <button class="btnn" style="float:left;margin-top:40px;float:left;font-size:18px;font-weight: bold;border-radius: 35px;cursor: pointer;font-weight: bold;box-shadow:0 2px rgba(0, 0, 0, 0.2);border: 1px solid #111;width:150px;height:50px;">Backs</button></a>
        <pre style="font-size:0px;"> </pre>
        <p style="margin-left:820px;cursor: default;font-size:50px;font-weight:bold;">Insert Employee</p>
            <form action="insert.php" method=get>
                <table align=center style="font-size:25px;font-weight:bold;">
                    
                    <tr>
                        <td>รหัสพนักงาน :</td>
                        <td>
                        <input type=text name=id_employee value=<?php echo $tmp ?> >
                        </td>
                    </tr>

                    <tr>
                        <td>ชื่อ :</td>
                        <td>
                        <input type=text name=firstname_employee>
                        </td>
                    </tr>

                    <tr>
                        <td>นามสกุล :</td>
                        <td>
                        <input type=text name=lastname_employee>
                        </td>
                    </tr>

                    <tr>
                        <td>เพศ :</td>
                        <td style="text-align:left;">
                    <input type=radio id=gender_employee name=gender_employee value=ชาย> <label for="gender_employee" >ชาย</label>
                    <input type=radio name=gender_employee value=หญิง> <label >หญิง</label>
                        </td>
                    </tr>

                    <tr>
                        <td>เบอร์โทรศัพท์ :</td>
                        <td>
                        <input type=text  name=tel_employee maxlength=10 >
                        </td>
                    </tr>

                    <tr>
                        <td>เงินเดือน :</td>
                        <td>
                        <input type=text  name=salary_employee maxlength=6 >
                        </td>
                    </tr>

                    

                </table>
                <br>
                <center><input class="btnn" type="submit" value=Submit style="font-size:18px;font-weight: bold;border-radius: 35px;cursor: pointer;font-weight: bold;box-shadow:0 2px rgba(0, 0, 0, 0.2);border: 1px solid #111;width:150px;height:50px;"></center>
            </form>
        </div>

    </div>
</body>

</html>