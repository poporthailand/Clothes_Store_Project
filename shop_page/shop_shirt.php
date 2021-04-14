<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../stylesheets/shop.css">
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
        //print_r($result);
    
        
    ?>

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
            <a href="https://web.facebook.com/VScreen_304-540283122716828/" target="_blank"><button>Contact</button></a>
        </div>

        <div class="Body">
            <div class="Bodyleft">
                <a href="#">
                <button class="btn"
                    style="background: #dc81a3;margin-top: 120px; background-image: url('../Image/shop/shirt.png');">
                    
                </button>
                </a>
                <a href="shop_pant.php">
                <button class="btn" style=" background-image: url('../Image/shop/pant.png');"></button></a>
                <a href="shop_etc.php">
                <button class="btn" style=" background-image: url('../Image/shop/etc.png');"></button></a>
                <a href="shop_order.php">
                <button class="btn" style=" background-image: url('../Image/shop/record.png');"></button></a>
            </div>

            <div class="Bodyright">
                <div class="block">
                        <img src="../Image/shop/lisa1.png" >

                        <table align=center border=0 style="margin-top: 10px">
                            <tr>
                                <td><h3 >ชื่อ :</h3></td>
                                <td><p style="cursor:default;font-size:25px;margin:5px 0px 0px 0px;"><?php echo $result[0][1]; ?></p></td>
                            </tr>
                            <tr>
                                <td><h3 >จำนวน :</h3></td>
                                <td><p style="cursor:default;font-size:25px;margin:5px 0px 0px 0px;"><?php echo $result[0][3]; ?></p></td>
                            </tr>
                            <tr>
                                <td><h3 >ราคา :</h3></td>
                                <td><p style="cursor:default;font-size:25px;margin:5px 0px 0px 0px;"><?php echo $result[0][2]; ?></p></td>
                            </tr>
                        </table>
                        
                        
                </div>

                <div class="block" >
                        <img src="../Image/shop/lisa1.png" >

                        <table align=center border=0 style="margin-top: 10px">
                            <tr>
                                <td><h3 >ชื่อ :</h3></td>
                                <td><p style="cursor:default;font-size:25px;margin:5px 0px 0px 0px;"><?php echo $result[1][1]; ?></p></td>
                            </tr>
                            <tr>
                                <td><h3 >จำนวน :</h3></td>
                                <td><p style="cursor:default;font-size:25px;margin:5px 0px 0px 0px;"><?php echo $result[1][3]; ?></p></td>
                            </tr>
                            <tr>
                                <td><h3 >ราคา :</h3></td>
                                <td><p style="cursor:default;font-size:25px;margin:5px 0px 0px 0px;"><?php echo $result[1][2]; ?></p></td>
                            </tr>
                        </table>
                </div>

                <div class="block">
                        <img src="../Image/shop/lisa1.png" >

                        <table align=center border=0 style="margin-top: 10px">
                            <tr>
                                <td><h3 >ชื่อ :</h3></td>
                                <td><p style="cursor:default;font-size:25px;margin:5px 0px 0px 0px;"><?php echo $result[2][1]; ?></p></td>
                            </tr>
                            <tr>
                                <td><h3 >จำนวน :</h3></td>
                                <td><p style="cursor:default;font-size:25px;margin:5px 0px 0px 0px;"><?php echo $result[2][3]; ?></p></td>
                            </tr>
                            <tr>
                                <td><h3 >ราคา :</h3></td>
                                <td><p style="cursor:default;font-size:25px;margin:5px 0px 0px 0px;"><?php echo $result[2][2]; ?></p></td>
                            </tr>
                        </table>
                </div>

                <div class="block">
                        <img src="../Image/shop/lisa1.png" >

                        <table align=center border=0 style="margin-top: 10px">
                            <tr>
                                <td><h3 >ชื่อ :</h3></td>
                                <td><p style="cursor:default;font-size:25px;margin:5px 0px 0px 0px;"><?php echo $result[3][1]; ?></p></td>
                            </tr>
                            <tr>
                                <td><h3 >จำนวน :</h3></td>
                                <td><p style="cursor:default;font-size:25px;margin:5px 0px 0px 0px;"><?php echo $result[3][3]; ?></p></td>
                            </tr>
                            <tr>
                                <td><h3 >ราคา :</h3></td>
                                <td><p style="cursor:default;font-size:25px;margin:5px 0px 0px 0px;"><?php echo $result[3][2]; ?></p></td>
                            </tr>
                        </table>
                </div>

                
                

            </div>
        </div>
        

    </div>
</body>

</html>