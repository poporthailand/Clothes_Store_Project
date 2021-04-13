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
    <div class="container">

        <div class="header">
        <pre style="font-size:0px"> </pre>
            <h1>Vscreen004</h1>
        </div>

        <div class="menu">
        <a href="../../main_page/main.php"><button>Main</button></a>
            <a href="../../shop_page/shop_shirt.php"><button>Shop</button></a>
            <a href="../manage.php"><button>Manage</button></a>
            <button>Report</button>
            <button>Contact</button>
        </div>

        <div class="Body">
        <a href="../manage.php">
        <button class="btnn" style="float:left;margin-top:40px;float:left;font-size:18px;font-weight: bold;border-radius: 35px;cursor: pointer;font-weight: bold;box-shadow:0 2px rgba(0, 0, 0, 0.2);border: 1px solid #111;width:150px;height:50px;">Backs</button></a>
        <pre style="font-size:0px;"> </pre>
        <p style="margin-left:820px;cursor: default;font-size:50px;font-weight:bold;">Insert Customer</p>
            
            <table align=center style="font-size:25px;font-weight:bold;">
                
                <tr>
                    <td>รหัสลูกค้า :</td>
                    <td>
                    <input type=text >
                    </td>
                </tr>

                <tr>
                    <td>ชื่อลูกค้า :</td>
                    <td>
                    <input type=text >
                    </td>
                </tr>

                <tr>
                    <td>เพศ :</td>
                    <td style="text-align:left;">
                   <input type=radio name=gender> <label >ชาย</label>
                   <input type=radio name=gender> <label >หญิง</label>
                    </td>
                </tr>

                <tr>
                    <td>เบอร์โทรศัพท์ :</td>
                    <td>
                    <input type=number>
                    </td>
                </tr>

                

            </table>
            <br>
            <center><input class="btnn" type="submit" value=Submit style="font-size:18px;font-weight: bold;border-radius: 35px;cursor: pointer;font-weight: bold;box-shadow:0 2px rgba(0, 0, 0, 0.2);border: 1px solid #111;width:150px;height:50px;"></center>
            
        </div>

    </div>
</body>

</html>