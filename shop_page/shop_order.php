<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../stylesheets/shop.css">
    <style>
    td{
        text-align:right;
        cursor: default;
    }
    tr{
        height: 40px;
    }
    </style>
</head>

<body>
    <div class="container">

        <div class="header">
            <pre style="font-size:0px"> </pre>
            <h1>Shop</h1>
        </div>

        <div class="menu">
            <a href="../main_page/main.php"><button>Main</button></a>
            <a href="#"><button>Shop</button></a>
            <a href="../manage_page/manage.php"><button>Manage</button></a>
            <a href="../report_page/report.php"><button>Report</button></a>
            <button>Contact</button>
        </div>

        <div class="Body">
            <div class="Bodyleft">
                <a href="shop_shirt.php">
                <button class="btn"
                    style="margin-top: 120px; background-image: url('../Image/shop/shirt.png');">
                    
                </button>
                </a>
                <a href="shop_pant.php">
                <button class="btn" style=" background-image: url('../Image/shop/pant.png');"></button></a>
                <a href="shop_etc.php">
                <button class="btn" style=" background-image: url('../Image/shop/etc.png');"></button></a>
                <a href="#.php">
                <button class="btn" style="background: #dc81a3; background-image: url('../Image/shop/record.png');"></button></a>
            </div>

            <div class="Bodyright">

            <p align=center style="cursor: default;font-size:50px;font-weight:bold;">Make Order</p>
            
            <table align=center style="font-size:25px;font-weight:bold;">
                
                <tr>
                    <td>รหัสสินค้า :</td>
                    <td>
                    <input type=text style="width:120px;">
                    </td>
                </tr>

                <tr>
                    <td>รหัสพนักงาน :</td>
                    <td>
                    <input type=text style="width:120px;">
                    </td>
                </tr>

                <tr>
                    <td>รหัสลูกค้า :</td>
                    <td>
                    <input type=text style="width:120px;">
                    </td>
                </tr>

                <tr>
                    <td>รหัสสินค้า :</td>
                    <td>
                    <input type=text style="width:120px;">
                    </td>
                </tr>

                <tr>
                    <td>จำนวนสินค้า :</td>
                    <td>
                    <input type=number style="width:120px;">
                    </td>
                </tr>

                <tr>
                    <td>ราคาต่อหน่วย :</td>
                    <td>
                    <input type=number style="width:120px;">
                    </td>
                </tr>

            </table>
            <br>
            <center><input type="submit" value=Make style="cursor: pointer;font-weight: bold;box-shadow:0 2px rgba(0, 0, 0, 0.2);border: 1px solid #111;width:150px;height:50px;background:#a9d8ea;"></center>
            </div>
        </div>
        

    </div>
</body>

</html>