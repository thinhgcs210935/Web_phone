<!doctype html>
<html lang="en">
  <head>
  	<?php include 'layout_head.php';?>
    <title>Phonewoodcase</title>
  </head>
  <body>
  	<?php include 'layout_header.php';?>
	
	<div class="container-fluid">
    <h1 class="h_1">Catalog page</h1>

		 <?php
      // Tham số
      $server = "localhost";
      $dbUsername = "Thinh1";
      $dbPassword = "123456";
      $dbName = "web_phone";
      // Kết nối
      $dbconnect = mysqli_connect( $server , 
        $dbUsername , $dbPassword);
      mysqli_select_db( $dbconnect,  $dbName);
      // Truy vấn
      $results = mysqli_query( $dbconnect, "Select * from product");
      while ($row = mysqli_fetch_row($results)){
      ?>
        <div class="card" style="width: 15rem;">
          <img src="<?=$row[7]?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="ProductProductname"><?=$row[1]?></h5>
            <p class="Productdescription"><?=$row[2]?></p>
            <h6 class="Unilprice"><?=$row[4]?></h6>
            <a href="./cart.php" class="btn btn-primary"><?=$row[0]?></a>
          </div>
        </div>
        <style>
          .h_1{
            position: relative;
            top: 20px;
            background:#FFFACD;
            border: 1px solid;
            padding: 10px;
            box-shadow: 5px 10px 8px #888888;
            font-family: copperplate;
            font-size: 28px;
            color: #191970;
            text-align: center;
          }
          .card{
            position: relative;
            top: 15px;
            left:60px;
            text-align: center;
            justify-content: center;
            display: inline-block;
            background: white;
            margin-top:1.5rem;
            margin-left:1.5rem;
          }
          .card-body{
            background: #E0FFFF;
            height: 250px;
          }
          .card-img-top{
            position:relative;
            width: 15rem;
            height: 250px;
            object-fit: cover;
          }
          .Unilprice{
            position: relative;
            left:1%;
            top: 1px;
            font-size: 20px;
          }
          .btn-primary{
            position: relative;
            left:.7%;
            top: -7%;
            display: inline-block;
            margin-top: 1.5rem;
            border-radius: .5rem;
            border:.2rem solid var(--black);
            font-weight: bolder;
            font-size: 1rem;
            color:var(--black);
            background:#fff;
            padding:.5rem 3rem;
          }
          .btn-primary:hover{
            background:var(--orange);
            color:var(--black);
          }
        </style>
      <?php
      }
      ?>
	</div>
    <script>
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
      crossorigin="anonymous"
  </script>
  </body>
</html>