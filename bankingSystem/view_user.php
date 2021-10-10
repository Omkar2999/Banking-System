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
  <caption>User's Detail</caption>
   <Tr>
    <Td><b>Id</td>
    <Td><b>User Name</td>
    <Td><b>User Email</td>
    <Td><b>Balance</td>
    <Td><b>View Profile</td>
  </tr>
<?php

      $q=mysqli_query($conn,"Select * from tbluser");
      while($r=mysqli_fetch_array($q))
      {
        extract($_POST);
        ?>

         
            <Tr>
              <Td>
                <?php echo $r["uid"];?>
              </td>

              <Td>
                <?php echo $r["uname"];?>
              </td>

              <Td>
                  <?php echo $r["email"];?>
              </td>

              <Td>
                <?php echo $r["balance"];?>
              </td>

              <Td>
                <a href="profile.php?id=<?php echo $r["uid"];?>"><i class='fas fa-user-alt' style='font-size:24px'></i>
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
