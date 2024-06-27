<?php 
session_start();

  include("connection.php");
  include("function.php");

  $user_data = check_login($conn);

?>

<?php include("connection.php")?>
<!--
<!DOCTYPE html>
<html>
<head>
  <title>admin Panel suraksha</title>
</head>
<body>

   <?php// echo "welcome:".  $_SESSION['id']; ?>
   <a href="adminLogout.php"><button class="btnHome">logout</button></a>

</body>
</html>

-->


<!DOCTYPE html>
<html>
<head>
  <title>user payment deytails updated</title>
  <!--cdn icon library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="cssfile/sidebar.css">
<link rel="stylesheet" href="cssfile/signUp.css">
  <style type="text/css">

      body{

      background-image: url("image/20.jpg");
      background-position: center;
      background-size: cover;
      height: 700px;
      background-repeat: no-repeat;
      background-attachment: fixed;

    }
    .adminTopic{
      text-align: center;
      color: #fff;
      

    }
/*
table
{
    width:99%;
    border-collapse: separate !important;
    margin:auto;
    
    text-align:center;
    margin-top:50px;
    background-color: rgb(255, 255, 255);
    border-radius: 10px 10px 0px 0px;

}
table th
{
    border-bottom:2px solid rgb(187, 187, 187);
    padding:10px 0px 10px 0px;
    font-family: "balsamiq_sansitalic" !important;
}
table tr td
{
    border-right: 2px solid rgb(187, 187, 187);
    height: 58px;
    padding: 22px 0px 0px 0px;
    font-family: "monospace;" !important;
    border-bottom: 2px solid rgb(187, 187, 187);
    font-size: 20px;
}*/
table tr td a
{
    /*background-color: rgb(255, 196, 0);*/
    /*
    color: white;
    border-radius: 5px;
    padding: 6px;
    text-decoration: none;
    margin: 10px;
    font-weight: 700;*/
}

table tr td button:hover
{

  /*
    background: rgb(255, 255, 255);
    text-decoration:underline;
    color:tomato;
    padding: 4px;
    border:2px solid tomato;
    transition:background-color 0.2s;*/
/*
    padding: 5px 5px 5px 5px;
  border: 2px solid yellow;
    border-radius: 7px;
    background-color: red;
    color: white;
    cursor: pointer;*/
}
button 
{
   /* padding: 5px 5px 5px 5x;*/
}/*
.btnPolicy{

  padding: 5px 5px 5px 5px;
  border: 2px solid yellow;
    border-radius: 7px;
    background-color: red;
    color: white;
    margin-left: 20px;
}

.btnPolicy:hover{

  background:red;
    padding: 7px 7px 7px 7px;
    cursor: pointer;

}*/
.idclass{

      width: 100%;
      border-radius: 3px;
      border: 1px solid #9597a6;
      padding: 10px;
      outline: none;
      color: black;

    }



  </style>
</head>
<body>
  <input type="checkbox" id="check">

  <label for="check">
<i class="fa fa-bars" id="btn"></i>
<i class="fa fa-times" id="cancle"></i>


  </label>
  <div class="sidebar">
<header><img src="image/17.jpg">
<p><?php echo $user_data['username'];?></p>
</header>
<ul>


    <li><a href="packges_feedback.php">Our Packages</a></li>
    <li><a href="feedback.php">Give FeedBack</a></li>
    <li><a href="profile.php">Profile</a></li>
    
    <li><a href="Logout.php">logout</a></li>
  <!--  <li><a href="#">Event</a></li>
    <li><a href="#">About</a></li>
    <li><a href="#">Service</a></li>
    <li><a href="#">Contact</a></li>-->
    </ul>
 <!--  <li>
      <div class="social-links">
        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
        <a href="#" class="google-plus"><i class="fa fa-youtube"></i></a>
        
      </div>
    </li>-->
   

</div>



<div class="sidebar2">


    <h1 class="adminTopic">Payment Update Here</h1>


    <?php 


      

       if(isset($_POST['paymentUpdate'])){

       $id=$_POST['id'];
       $card_type=$_POST['card_type'];
       $owner=$_POST['card_owner'];
       $number=$_POST['card_number'];
       $date=$_POST['datee'];
       

       $query="UPDATE `payment` SET card_type='$card_type',owner_name='$owner',card_number='$number',datee='$date' where id=$id";


       $query_run=mysqli_query($conn,$query);

      
  

         if($query_run){

            
      
                    //redirect to your profile page//

                    header("Location: pay.php");
       
                    die;

                 

           echo '<script type="text/javascript">alert("card details updated sucessfully!!!")</script>';


          }

          else{

               echo '<script type="text/javascript">alert("card not updated!!!")</script>';
           }

           

     }

?>

<div class="sidebar2">



          <div class="wrapper">
  <div class="registration_form">
    <div class="title">
      Payment Update
    </div>

    <form action="#" method="POST">
      <div class="form_wrap">

        <div class="input_wrap">
          <label for="title">Id</label>
          <input type="number" id="title" name="id" class="idclass" value="<?php echo $_GET['id'];?>">
        </div>
        
        <div class="input_wrap">
          <label for="title">card type</label>
          <input type="text" id="title" name="card_type" placeholder="card type">
        </div>

       <!--
        <div class="input_wrap">
          <label for="description">Package decription</label>
          <textarea id="decription" name="pdescription" rows="15" cols="100" placeholder="description"></textarea>
        </div>-->

        <div class="input_wrap">
          <label for="title">card owner name</label>
          <input type="text" id="title" name="card_owner" placeholder="owner name">
        </div>

        <div class="input_wrap">
          <label for="title">card number</label>
          <input type="text" id="title" name="card_number" placeholder="card number">
        </div>
        
        <div class="input_wrap">
          <label for="title">date</label>
          <input type="date" id="title" name="datee" placeholder="expire date" class="idclass">
        </div>


        
        <div class="input_wrap">

          <input type="submit" value="Update card details Now" class="submit_btn" name="paymentUpdate">

        </div>



      </div>
    </form>
  </div>
</div>




</div>











</div>

</body>
</html>