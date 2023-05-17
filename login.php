<?php
// Start the session
session_start();

if (isset($_SESSION["status"]) && ($_SESSION["status"] == "LogedIn"))
{
    header("Location:./index.php");
    exit;
}
?>
<!doctype html>
<html lang="en">
  <head>
  	<?php include 'layout_head.php';?>
    <title>Phonewoodcase</title>
  </head>
  <body>
  	<?php include 'layout_header.php';?>
	<div class="container-fluid">
            <div class="Log"><h1 class="textlogin">Log in</h1>
                <div class="AC" >
                    <label for="username" class="ACtext">Account</label>
                    <div class="col-sm-10">
                        <input type="text" id="username" name="username">
                    </div>
                </div>
                <div class="PW">
                    <label for="inputPassword" class="PWtext">Password</label>
                    <div class="col-sm-10">
                        <input type="password" id="inputPassword"  name="inputPassword">
                    </div>
                </div>
                <div class="ER">
                    <button type="submit" class="l-in"><span>Enter</span></button>
                </div>
            </div>
        </form>
	</div>
    <style>
        .Log{
            background:#F5F5F5;
            border-radius: 0.5em;
            position: absolute;
            border: 1px solid;
            padding: 10px;
            box-shadow: 5px 10px 8px #888888;
            left: 30%;
            top: 30%;
            height: 300px;
            width: 500px;
        }
        .textlogin{
            position: relative;
            top: 20px;
            font-size: 32px;
            font-style: bold;
            color:#FF8C00;
            text-shadow: 1px 1.5px 3px #0000007a;
            text-align: center;
        }
        .AC{
            position:relative;
            top: 8%;
            left: 23%;
            font-family: Optima;
            font-size: 20px;
            color:#FF6347;
        }   
        .PW{
            position:relative;
            top: 8%;
            left: 23%;
            font-family: Optima;
            font-size: 20px;
            color:#FF6347;
        }
        .ER{
            position:relative;
            top: 13%;
            left: 40%;
        }

        /* From uiverse.io by @Ali-Tahmazi99 */
        button {
            position: absolute;
            left: -5.5%;
            display: inline-block;
            width: 150px;
            height: 50px;
            border-radius: 10px;
            border: 1px solid #03045e;
            position: relative;
            overflow: hidden;
            transition: all 0.5s ease-in;
            z-index: 1;
            border: 1px solid;
            padding: 10px;
            box-shadow: 5px 10px 8px #888888;
        }
        button::before,
        button::after {
            content: '';
            position: absolute;
            top: 0;
            width: 0;
            height: 100%;
            transform: skew(15deg);
            transition: all 0.5s;
            overflow: hidden;
            z-index: -1;
        }
        button::before {
            left: -10px;
            background: #FF8C00;
        }
        button::after {
            right: -10px;
            background: #DC143C;
        }
        button:hover::before,
        button:hover::after {
            width: 58%;
        }
        button:hover span {
            color: #00008B;
            transition: 0.3s;
        }
        button span {
            color: #03045e;
            font-size: 18px;
            transition: all 0.3s ease-in;
        }
    </style>
    <?php 
        include "./config/dbconfig.php";
        if (isset($_POST["username"]) && isset($_POST["inputPassword"])) {
            var_dump(  $_POST );
            $querySTM = "Select * from account where "
            . "username='" . $_POST["username"]  . "'"
            . " and password='" . $_POST["inputPassword"] . "'";
            echo "<br> ". $querySTM;
            $results = mysqli_query( $dbconnect, $querySTM);
            var_dump($results);
            $row = mysqli_fetch_row($results);
            /////////
            if ($row) {
                echo "Successful login";
                $_SESSION["User"] = $row[0];
                $_SESSION["username"] = $row[1];
                $_SESSION["status"] = "LogedIn";
                header("Location: ./index.php");
                exit;
            } else {
                echo "Login again";
            }
        }
    ?> 
    <script>
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
        crossorigin="anonymous"
    </script>
  </body>
</html>