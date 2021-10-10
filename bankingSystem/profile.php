

<!DOCTYPE html>
<html>
<head>




<script type="text/javascript">
  function myFn() {
    alert("Money Successfully Transfered..!!");
  }
</script>






	<?php include "head.php";?>

  <style>
  .card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    max-width: 300px;
    margin: auto;
    text-align: center;
    font-family: Arial, Helvetica, sans-serif;
  }

  .title {
    color: grey;
    font-size: 18px;
  }

  #input-box{
   border: none;
   outline: 0;
   display: inline-block;
   padding: 8px;
   color: black;
   text-align: center;
   width: 80%;
   font-size: 18px;
 }

 select{
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: black;
  text-align: center;
  width: 80%;
  font-size: 18px;
}

#tsmoney {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

#tsmoney:hover, a:hover {
  opacity: 0.7;
}
</style>
</head>
<body>
  <?php include "header.php";?>


  <div>

    <?php
    $r = mysqli_query($conn,"Select * from tbluser where uid =".$_GET["id"]);
    $u = mysqli_query($conn,"Select * from tbluser");




    $current_user_id=$_GET['id'];
    if(isset($_POST["tsmoney"]))
    {
      extract($_POST);
      $value = $_POST['txtmoney'];
      $getid = $_POST['users'];
      $x = mysqli_query($conn,"Select * from tbluser where uid = $getid");
      $user_balance = mysqli_fetch_array($x);
      $v=$user_balance['balance'];
      $total_balance = $v + (int)$value;
      mysqli_query($conn,"update tbluser set balance='$total_balance' where uid=$getid");

      $y = mysqli_fetch_array($r);
      $current_user_balance=$y['balance'];
      $current_user_balance = (int)$current_user_balance - (int)$value;

      mysqli_query($conn,"update tbluser set balance='$current_user_balance' where uid=$current_user_id"); 


      // history table
        $date = date('Y-m-d H:i:s');
        $sender = $y['uname'];
        $receiver = $user_balance['uname'];
      mysqli_query($conn,"insert into transaction_history(sender,receiver,amount,datetime)values('$sender','$receiver','$value','$date')");
      header("location:view_user.php");
      
    }
    ?>





    <?php


    while($a=mysqli_fetch_array($r)){
     extract($_POST);
     ?>

     <form method="post">
      <h2 style="text-align:center">User Profile</h2>
      <div class="card">
        <i class='fas fa-user-alt' style='font-size:50px'></i>
        <h2><?php echo $a["uname"]?></h2>
        <h2><?php echo $a["email"]?></h2>
        <h2>Balance: <?php echo $a["balance"]?></h2>
        <input type="text" id="input-box" name="txtmoney" placeholder="Enter value to transfer"><br>

        <select name="users">
         <?php
         while($b=mysqli_fetch_array($u)){
           ?>
           <option value="<?php echo $b["uid"]?>"><?php echo $b["uname"]?></option>

           <?php
         }
         ?>
       </select>

       <p><input type="submit" id="tsmoney" name="tsmoney" value="Transfer Money" onclick="myFn()"></p>
     </div>
   </form>
   <?php
 }
 ?>
</div>

</body>
<footer>
  <?php include "footer.php";?>
</footer>
</html>

