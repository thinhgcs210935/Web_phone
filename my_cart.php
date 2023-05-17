<?php 
include("layout_head.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> My Cart</title>
</head>
<body>
    <?php include 'layout_header.php';?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-light my-5">
                <h1>My Cart</h1>
            </div>
            <div class="col-lg-9">
                <table class="table text-center">
                <thead>
                    <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Item_Name</th>
                    <th scope="col">Item_Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $total=0;
                        if(isset($_SESSION['cart']))
                        {
                            foreach($_SESSION['cart']as $key => $value)
                            {
                                $sr=$key+1;
                                $total=$value['Price'];
                                echo"
                                    <tr>
                                        <td>$sr</td>
                                        <td> $value[Item_Name]</td>
                                        <td> $value[Price]</td>
                                        <td><input class='text-center' type='number'value='$value[Quantity]' min='1' max='10'></td>
                                        <td>
                                            <form acction='manage_cart.php'method='POST'>
                                                <button name='Remove_Item' class='btn btn-sm btn-outline-danger'>REMOVE</button>
                                                <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                                            </from>
                                        </td>
                                    </tr>
                                ";
                            } 
                        }
                    ?>
                </tbody>
                </table>
            </div>
            <div class="col-lg-3">
                <div class="border bg-light rounded p-4">
                    <h4>Total:</h4>
                    <h5><?php echo $total ?></h5>
                    <br>
                    <form>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                Cash on Delivery
                            </label>
                        </div>
                        <br>
                        <button href='./payment.php' class="btn btn-primary btn-block">Cash</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>