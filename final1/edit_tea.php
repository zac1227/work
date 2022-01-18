<?php
	 $id = $_GET['id'];
	 $account = $_GET['account'];
	 $password = $_GET['password'];
	 $name = $_GET['name'];
	 if(isset($_POST["password"])){
		 $password1 = $_POST["password"];
		 
		 echo $id;
		// echo $password1;
		// echo $categories1;
		 include("dblink.php");
		 
		$sql = "UPDATE `account` SET `password` = '$password1' WHERE `account`.`id` = '$id'";
		 $result = mysqli_query($link, $sql);
		echo "<script>alert('您已修改此筆資料!'); location.href = 'man_acc.php';</script>";
		 mysqli_close($link);
		 }
?>
<!DOCTYPE php>
<php lang="en">
<head>
<title>manageredit</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/php; charset=utf-8" />
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

	<div class="w3_navigation">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<h1><a class="navbar-brand" href="index.php">Manager <span>RSV</span><p class="logo_w3l_agile_caption">Class   Reservation </p></a></h1>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="menu menu--iris">
						<ul class="nav navbar-nav menu__list">
							
						<li class="menu__item"><a href="man_acc.php" class="menu__link">帳號管理</a></li>
							<li class="menu__item"><a href="user-recordlist.php" class="menu__link">預借記錄</a></li>
							
							<li class="menu__item"><a href="manedit.php" class="menu__link">編輯管理者帳號</a></li>
							
							<li class="menu__item"><a href='manager-logout.php' class="menu__link">管理者登出</a></li>
						</ul>
					</nav>
				</div>
			</nav>
		</div>
	</div>
<!-- contact -->

<section class="contact-w3ls" id="contact">
	<div class="container">
		<div class="center" class="col-lg-3 col-md-3 col-sm-3 " class="center" >
			<div class="contact-agileits">
				<h4>修改使用者資料</h4>
				<p class="contact-agile2">Edit manager</p>
				<form action="#" method="post" >
				    <div class="control-group form-group">
                       
                        <div class="controls">
                            <label class="contact-p1">姓名:</label>
                            <input type="text" class="form-control" name="name"  value="<?php echo $name ?>" disabled>
							
						</div>
                       </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label class="contact-p1">使用者ID:</label>
                            <input type="text" class="form-control" name="id"  value="<?php echo $id ?>" disabled>
                            
                        </div>
                        </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label class="contact-p1">帳號:</label>
                            <input type="text" class="form-control" name="account"  value="<?php echo $account ?>" disabled>
                            
                        </div>
                        </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label class="contact-p1">修改密碼:</label>
                            <input type="password" class="form-control" name="password"  value="<?php echo $password ?>">
							<p class="help-block"></p>
						</div>
                    </div>
                    <div class="control-group form-group">
                                             
                       <div class="controls">
                                <label class="contact-p1">輸入使用者類別:</label>
                                <select name="categories" style="width: 200px" disabled>
									
										
							
										<option value="1">教師</option>
							
                                   
                                 </select>
                                <p class="help-block"></p>
                            </div>
                        </div>
                    
                    <!-- For success/fail messages -->
                    <input type="submit" class="btn btn-primary" value="儲存編輯"></input>
				</form>            
			</div>
		</div>
		
              
		<div class="clearfix"></div>
	</div>
</section>
<!-- /contact -->

<!-- team -->
	
<!-- //team -->

<!-- //gallery -->
	 

			<div class="copy">
		        <p>Copyright &copy;2012. College of Management,
Fu Jen Catholic University</p>
		    </div>
<!--/footer -->
<!-- js -->

</body>
</php>