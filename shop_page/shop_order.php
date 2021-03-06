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
    .make {
        background:#E4D1A7;
    }
    .make:hover {
        background:#E5C78B;
    }
    </style>
</head>

<body>

    <?php 
        error_reporting(0);
        $conn = mysqli_connect('localhost', 'root', '', 'clothes_store_project');
        if(!$conn) {
            die('Connection fail');
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

            <div class="Bodyright" align=center style="background: #fffed3;">
           <pre> </pre>
            <div style="border-radius:20px;margin-top:60px;background:#E3DBC8;width:550px;height:450px;">
            <pre> </pre>
            <p align=center style="margin-top:20px;cursor: default;font-size:50px;font-weight:bold;">Make Order</pre>

            <form action="make_order.php" method=get>

            <table align=center style="font-size:25px;font-weight:bold;">

                
                <?php 
                    
                    $sql = "SELECT * FROM shirt_product";
                    $fetch = mysqli_query($conn, $sql);

                    for ($x=0; $x < mysqli_num_rows($fetch); $x++) {
                        $result[] = mysqli_fetch_array($fetch)   ;
                    }  

                    $sql = "SELECT * FROM pant_product";
                    $fetch = mysqli_query($conn, $sql);

                    for ($x=0; $x < mysqli_num_rows($fetch); $x++) {
                        $result[] = mysqli_fetch_array($fetch)   ;
                    }  

                    $sql = "SELECT * FROM etc_product";
                    $fetch = mysqli_query($conn, $sql);

                    for ($x=0; $x < mysqli_num_rows($fetch); $x++) {
                        $result[] = mysqli_fetch_array($fetch)   ;
                    }  
                ?>
                <tr>
                    <td>?????????????????? :</td>
                    <td style="text-align:center;">
                        <select name=id_product style="width: 120px;">
                          <?php for($x = 0 ; $x < count($result) ; $x++){ ?>
                             <option value=<?php echo $result[$x][0]; ?> > <?php echo $result[$x][1]; ?> </option>
                            <?php } ?>

                         </select>
                    </td>
                </tr>

                <?php 
                
                    $sql = "SELECT * FROM employee";
                    $fetch = mysqli_query($conn, $sql);

                    for ($x=0; $x < mysqli_num_rows($fetch); $x++) {
                        $result1[] = mysqli_fetch_array($fetch)   ;
                    }  
                ?>

                <tr>
                    <td>????????????????????????????????? :</td>
                    <td style="text-align:center;">
                        <select name=id_employee style="width: 120px;">
                        <?php for($x = 0 ; $x < count($result1) ; $x++){ ?>
                            <option value=<?php echo $result1[$x][0]; ?> > <?php echo $result1[$x][0]; ?> </option>
                            <?php } ?>
                        </select>
                    </td>
                </tr>

                <?php 
                
                    $sql = "SELECT * FROM customer";
                    $fetch = mysqli_query($conn, $sql);

                    for ($x=0; $x < mysqli_num_rows($fetch); $x++) {
                        $result2[] = mysqli_fetch_array($fetch)   ;
                    }  
                    
                ?>

                <tr>
                    <td>?????????????????????????????? :</td>
                    <td style="text-align:center;">
                    <select name=id_customer style="width: 120px;">
                        <?php for($x = 0 ; $x < count($result2) ; $x++){ ?>
                            <option value=<?php echo $result2[$x][0]; ?> > <?php echo $result2[$x][0]; ?> </option>
                            <?php } ?>
                        </select>
                    </td>
                </tr>


                <tr>
                    <td>????????????????????????????????? :</td>
                    <td>
                    <input name=quantity_product type=number style="width:120px;" max=10 min=1>
                    </td>
                </tr>


            </table>
            <br>
            <center><input class="make" type="submit" value=Make style="font-size:18px;border-radius:20px;cursor: pointer;font-weight: bold;box-shadow:0 2px rgba(0, 0, 0, 0.2);border: 1px solid #111;width:150px;height:50px;"></center>
                           
            </form>
           
            </div>
            </div>
        </div>
        

    </div>

</body>


</html>