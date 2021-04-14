<?php 

    $conn = mysqli_connect('localhost', 'root', '', 'clothes_store_project');
    if(!$conn) {
        die('Connection fail');
    }
    
    $sql = "SELECT * FROM sale_history";
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

    echo $tmp;

    $id_product = $_GET["id_product"];
    $id_customer = $_GET["id_customer"];
    $id_employee = $_GET["id_employee"];
    $quantity_product = $_GET["quantity_product"];

    $tmp1 = str_split($id_product);
    $tmp2 = $tmp1[0] . $tmp1[1];
    $tmp3 ;
    

    if ($tmp2 == "PH"){
        $sql = "SELECT * FROM shirt_product";
        $tmp3 = "shirt_product";
    }
    else if ($tmp2 == "PP"){
        $sql = "SELECT * FROM pant_product";
        $tmp3 = "pant_product";
    }
    else if ($tmp2 == "PE"){
        $sql = "SELECT * FROM etc_product";
        $tmp3 = "etc_product";
    }

    $fetch = mysqli_query($conn, $sql);

    while(true){
        $result = mysqli_fetch_array($fetch);
        if($result[0] == $id_product){
            $result[3] -= $quantity_product;
            echo $result[3];
            $sql = "UPDATE `$tmp3` SET `quantity_product` = '$result[3]' WHERE `id_product` = '$id_product'";
            mysqli_query($conn, $sql);
            break;
        }
    }

    
    
    
    
    
    
    
   
        
        $sql = "INSERT INTO `sale_history` (`id_sale`, `id_customer`, `id_employee`, `id_product`, `quantity_product`, `date_time`) VALUES ('$tmp', '$id_customer', '$id_employee', '$id_product', '$quantity_product', current_timestamp());";
        mysqli_query($conn, $sql);

        

        

        header("Location: shop_order.php"); 
        

   
?>