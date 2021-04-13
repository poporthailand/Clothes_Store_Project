<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../stylesheets/manage.css">
</head>

<body>
    <div class="container">

        <div class="header">
        <pre style="font-size:0px"> </pre>
            <h1>Vscreen004</h1>
        </div>

        <div class="menu">
        <a href="../main_page/main.php"><button>Main</button></a>
            <a href="../shop_page/shop_shirt.php"><button>Shop</button></a>
            <a href="#"><button>Manage</button></a>
            <a href="../report_page/report.php"><button>Report</button></a>
            <button>Contact</button>
        </div>

        <div class="Body">

            <div class="block" >
                <center><div class="inblock" style="background:#ea989c;"><pre> </pre><h2>Customer</h2></div></center>
                <a href="./customer/insert_customer.php">
                <button class="btn" style="background: #ff959f;margin-left: 120px;">Insert</button></a>
                <a href="./customer/up&de_customer.php">
                <button class="btn" style="background: #ffdebf;">Update & Delete</button></a>
                
            </div>

            <div class="block" >
                <center><div class="inblock" style="background:#ffaaa7;"><pre> </pre><h2>Employee</h2></div></center>
                <a href="./employee/insert_employee.php">
                <button class="btn" style="background: #ff959f;margin-left: 120px;">Insert</button></a>
                <a href="./employee/up&de_employee.php">
                <button class="btn" style="background: #ffdebf;">Update & Delete</button></a>
            </div>

            <div class="block" >
                <center><div class="inblock" style="background:#ffd3b6;"><pre> </pre><h2>Product</h2></div></center>

                <button class="btn" style="background: #ffa8aa;margin-left: 160px;">Delete</button>
                <button class="btn" style="background: #ffdebf;">Update</button>
            </div>

            
        </div>

    </div>
</body>

</html>