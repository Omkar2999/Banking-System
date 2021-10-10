<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<title></title>
 <?php include "head.php";?>

<style type="text/css">

    table,td,th{
      border: 2px solid black;
      border-collapse: collapse;
      background-color: lightblue;
      font-size: 22px;
    }
    td{
      padding: 6px 35px;
      text-align: center;
    }
    tr{
      padding: 6px 35px;
    }
caption{
      padding: 6px 35px;
      font-size: 25px;

    }

    table{
      margin: 50px auto 0px auto;
    }
  </style>

</head>
<body class="body1">
<?php include "header.php";?>

 <table>
  <!-- <th colspan="5">User's Detail</th> -->
  <caption>Transaction History</caption>
   <Tr>
    <Td><b>Id</td>
    <Td><b>Sender</td>
    <Td><b>Receiver</td>
    <Td><b>Amount</td>
    <Td><b>Date & Time</td>
  </tr>
<?php

      $q=mysqli_query($conn,"Select * from transaction_history");
      while($r=mysqli_fetch_array($q))
      {
        extract($_POST);
        ?>

         
            <Tr>
              <Td>
                <?php echo $r["hid"];?>
              </td>

              <Td>
                <?php echo $r["sender"];?>
              </td>

              <Td>
                  <?php echo $r["receiver"];?>
              </td>

              <Td>
                <?php echo $r["amount"];?>
              </td>

              <Td>
                <?php echo $r["datetime"];?>
              </td>
            </tr>
         
        <?php
      }
    ?>
 </table>
</body>
<footer>
	 <?php include "footer.php";?>
</footer>
</html>
