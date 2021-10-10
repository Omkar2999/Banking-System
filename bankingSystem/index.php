<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="/images/tsf.png" type="image/x-icon"/>
    <link rel="stylesheet" href="index_style.css">
  <link rel="stylesheet" href="style1.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
	<title></title>
 <?php include "head.php";?>
</head>
<body>
<?php include "header.php";?>


  <div class="flex-container-background">
        <div class="flex-container">
            <div class="flex-item-0">
                <h1 id="form_header">Banking System.</h1>
            </div>
        </div>

        <div class="flex-container">
            <div class="flex-item-1">
                
                    <div class="flex-item-login">
                        <h2 style="text-align:center;">Welcome</h2>
                    </div>

                    <div class="flex-item">
                        <form method="get" action="view_user.php">
                           <button type="submit" style="float:right;width:470px;">View User</button>
                        </form>
                    </div>

                    <div class="flex-item">
					    <form method="get" action="transaction_history.php">
                           <button type="submit" style="float: right;width:470px;">Transaction History</button>
						</form>
                    </div>

                    
                    </div>
                </form>
            </div>
        </div>

    </div>









<!-- 
<div class="content">
  <h1></h1>

  <p>-Spark Foundation</p>

</div> -->

</body>
<footer>
	 <?php include "footer.php";?>
</footer>
</html>

