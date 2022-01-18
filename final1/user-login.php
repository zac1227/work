<?php
    
    include("dblink.php");
    if(isset($_SESSION["ac_name_nor"])){
        header("Location: user_sr_lr.php");
    }
    if(isset($_POST['account'])){
                $id=$_POST['account'];
                $password=$_POST['password'];
                $sql = "SELECT * FROM account WHERE account = '$id'AND categories=1";
                $result = mysqli_query($link, $sql);
                while($row = mysqli_fetch_array($result)){
                    if($row["password"] == $password){
                        $_SESSION["ac_name_nor"] = $row["name"];
                        $_SESSION["ac_level"] = $row["categories"];
                        $_SESSION["ac_nor"] = $row["account"];
                        header("Location: user_sr_lr.php");
                        die;
                    }
                }
                if(mysqli_num_rows($result)==0){
                    $error = "<p><font color='red' size='6'>no this account</font></p>";
                }
                else{
                    $error = "<p><font color='red' size='6'>password is wrong</font></p>";
                }
                mysqli_close($link);
            }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>User Login...</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<link rel="stylesheet" href="css/jquery-ui.css" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
<!--fonts-->
<link href="http://fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Federo" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
<!--//fonts-->
</head>
<body>
<!-- header -->


				<!-- Collect the nav links, forms, and other content for toggling -->

    <!--sevices-->
     
<div class="advantages">
	<div class="container">
		<div class="advantages-main">
				<h3 class="title-w3-agileits" style="text-align:left"><strong>User Login...</strong></h3>
		   <div class="advantage-bottom">
			 <div class="col-md-6 advantage-grid left-w3ls wow bounceInLeft" data-wow-delay="0.3s">
			 	<div class="advantage-block ">
					<i class="fa fa-credit-card" aria-hidden="true"></i>
			 		<h4>登入 User Login</h4>
			 		<form action="#" method="post" name="sentMessage" id="contactForm" novalidate>
					<div class="control-group form-group">
                        <div class="controls">
                            <label class="contact-p1" style="color: aliceblue ">帳號:</label>
                            <input type="text" class="form-control" name="account"  required data-validation-required-message="請輸入帳號...">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    
                    <div class="control-group form-group">
                        <div class="controls">
                            <label class="contact-p1" style="color: aliceblue">密碼:</label>
                            <input type="password" class="form-control" name="password" required data-validation-required-message="請輸入密碼...">
							<p class="help-block"></p>
						</div>
                    </div>
                    
                    <div id="success"></div>
                  
                        <button type="submit" class="btn btn-primary" style="color: aliceblue" >登入Login </button>
						<a class="btn btn-primary" href="man_login.php" type="button">管理者登入</a>
                        <?php echo $error; ?>
          
          <?php
		  	
            if(isset($_POST['account'])){
                $id=$_POST['account'];
                $password=$_POST['password'];
                $sql1 = "SELECT * FROM account WHERE account = '$id'AND categories>0";
                $result1 = mysqli_query($link, $sql1);
                while($row = mysqli_fetch_array($result1)){
                    if($row["password"] == $password){
                        $_SESSION["ac_name_ma"] = $row["name"];
                        $_SESSION["ac_level"] = $row["categories"];
                        header("Location:user_sr_lr.php");
                    }
                }
                if(mysqli_num_rows($result1)==0){
                    $error = "<p><font color='red' size='6'>no this account</font></p>";
                }
                else{
                    $error = "<p><font color='red' size='6'>password is wrong</font></p>";
                }
                mysqli_close($link);
        
            }      
        ?>	
				</form>
					
			 	</div>
			 </div>
			
			
			<div class="clearfix"> </div>
			</div>
		</div>
	</div>
</div>
<!--//sevices-->

<!-- js -->

</body>
	</html>