<?php
    if(isset($_POST["normal_date"])){
		$normal_date = $_POST["normal_date"];
		$building = $_POST["building"];
        $room_avail_start = $_POST["room_avail_start"];
        $room_avail_end= $_POST["room_avail_end"];
        include("dblink.php");
        $sql = "INSERT INTO `normalrecord` (`building`,`normal_date`, `room_avail_start`, `room_avail_end`) VALUES ('$building','$normal_date','$room_avail_start', '$room_avail_end');";
        $result = mysqli_query($link, $sql);
		header("Location: user-recordlist.php");
        mysqli_close($link);
         
        
        }
?>
<!DOCTYPE php>
<php lang="en">
<head>
<title>School of Management</title>
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
					<h1><a class="navbar-brand" href="index.php">Class <span>RSV</span><p class="logo_w3l_agile_caption">Class Reservation </p></a></h1>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="menu menu--iris">
						<ul class="nav navbar-nav menu__list">
						
						<li class="menu__item menu__item--current"><a href="user_sr_lr.php" class="menu__link">首頁</a></li>
							<li class="menu__item"><a href="classroom.php">教室預覽</a></li>
							<li class="menu__item"><a href="user-recordlist.php">預借紀錄</a></li>
							<li class="menu__item"><a href="contact.php">聯絡我們</a></li>
							<li class="menu__item"><a class="menu__link scroll">您好 </a></li>
							
							<li class="menu__item"><a href="user-logout.php">登出</a></li>
					
						</ul>
					</nav>
				</div>
			</nav>

		</div>
	</div>
<!-- //header -->

<!-- contact -->
<section class="contact-w3ls" id="contact">
	<div class="container">
		<div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile2" data-aos="flip-left">
			<div class="contact-agileits">
				<h4>管理學院</h4>
				<p class="contact-agile2">School of Law and Management</p>
				<form action="#" method="post" name="sentMessage" id="contactForm" novalidate>
					<img src="images/管理學院.jpg" style="width:400px ; height: 350px;margin-left: 39px;margin-right: 39px" t="">	
				</form>            
			</div>
		</div>
		
		<div class="col-lg-6 col-md-6  contact-w3-agile1" data-aos="flip-right">
			<h4>預借教室</h4>
			
			<form action="#" method="post">
				
					<div class=" form-date-w3-agileits">
                           <p style="color: white">教室</p>
                            <select name="building" style="width: 200px">
                        
                            <option value="利瑪竇大樓LM101">利瑪竇大樓LM101</option>
                            <option value="博達樓BS440">博達樓BS440</option>
                            <option value="樹德樓LW110">樹德樓LW110</option>
                            <option value="進修部大樓ES101">進修部大樓ES101</option>
                            <option value="羅耀拉大樓SL440">羅耀拉大樓SL440</option>
                            
                            
                            </select>

							
                           </div> 
                           <div>
						        <p style="color: white ;style=width: 200px">租借日期</p>
								<input  name="normal_date" type="date">
								
								<p style="color: white">選擇開始時段</p>
                                    <select name="room_avail_start" style="width: 200px">
                                    <option value="D1">D1</option>
                                    <option value="D2">D2</option>
                                    <option value="D3">D3</option>
                                    <option value="D4">D4</option>
                                    <option value="D5">D5</option>
                                    <option value="D6">D6</option>
                                    <option value="D7">D7</option>
                                    <option value="D8">D8</option>

                                    </select>
                                    <p style="color: white">選擇結束時段</p>
                                    <select name="room_avail_end" style="width: 200px">
                                    <option value="D1">D1</option>
                                    <option value="D2">D2</option>
                                    <option value="D3">D3</option>
                                    <option value="D4">D4</option>
                                    <option value="D5">D5</option>
                                    <option value="D6">D6</option>
                                    <option value="D7">D7</option>
                                    <option value="D8">D8</option>

                                    </select>
								</div>
						</div>
					<div style="margin-top: 30px">
						  <input type="submit" value="預借">
					</div>
				</form>
			
			<div class="clearfix"> </div>

			<!---<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3074.7905052320443!2d-77.84987248482734!3d39.586871613613056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c9f6a80ccf0661%3A0x7210426c67abc40!2sVirginia+Welcome+Center%2FSafety+Rest+Area!5e0!3m2!1sen!2sin!4v1485760915662" ></iframe>--->
		</div>
		<div class="clearfix"></div>
	</div>
</section>
<!-- /contact -->
			<div class="copy">
		        <p>Copyright &copy;2012. College of Management,
Fu Jen Catholic University</p>
		    </div>
<!--/footer -->
<!-- js -->

</body>
</php>