<?php
    
    include("dblink.php");

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
					<h1><a class="navbar-brand" href="index.php">Manager <span>RSV</span><p class="logo_w3l_agile_caption">Class    Reservation </p></a></h1>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="menu menu--iris">
						<ul class="nav navbar-nav menu__list">
							
                        <li class="menu__item"><a href="man_acc.php" class="menu__link">帳號管理</a></li>
							<li class="menu__item"><a href="man_recordlist.php" class="menu__link">預借記錄</a></li>
							
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
		<div class="col-lg-4 col-md-4 col-sm-4 contact-w3-agile2" data-aos="flip-left">
			<div class="contact-agileits">
				<h4>註冊管理者</h4>
				<p class="contact-agile2">Registration manager</p>
				
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <a href="sign_man.php"><button type="button"  class="btn btn-primary">註冊</button>	</a>
				</form>            
			</div>
		</div>
        <?php
            include "dblink.php";
            $sql = "SELECT * FROM teacher WHERE categories=0";
            $result = mysqli_query($link, $sql);
?>
		<div class="col-lg-8 col-md-8 col-sm-8 contact-w3-agile1" data-aos="flip-right">
			<div class="w3ls_banner_bottom_grids">
			<h4>編輯管理者</h4>
			<p class="contact-agile2">Edition manager</p><br>
				<table class="table" style="color:white">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col" style="text-align: center;color: #8af3fc">#</th>
                      <th scope="col" style="text-align: center ;color: aliceblue">管理者編號</th>
                      <th scope="col" style="text-align: center;color: aliceblue">教師姓名</th>
                      <th scope="col" style="text-align: center;color: aliceblue">帳號</th>
                      <th scope="col" style="text-align: center;color: aliceblue">密碼</th>
                      <th scope="col" style="text-align: center;color: aliceblue">編輯</th>
                      <th scope="col" style="text-align: center;color: aliceblue">刪除</th>
                    </tr>
                  </thead>
                        <tbody>
                        <?php
       while($row = mysqli_fetch_array($result)){
    ?>
    <tr>
        <th></th>
      <td scope="col" style="text-align: center"><?php echo $row["id"]?></td>
      <td scope="col" style="text-align: center"><?php echo $row["manager_name"]?></td>
      <td scope="col" style="text-align: center"><?php echo $row["account"]?></td>
      <td scope="col" style="text-align: center"><?php echo $row["manager_pasw"]?></td>
      <td scope="col" style="text-align: center"><a href="manedit1.php?id=<?php echo $row["id"]?>& manager_name=<?php echo $row["manager_name"]?>& account=<?php echo $row["account"]?>& manager_pasw=<?php echo $row["manager_pasw"] ?>& categories=<?php echo $row["categories"]?>"><button type="button" class="btn btn-danger">修改</button></a></td>
      <td scope="col" style="text-align: center"><a href="del_man.php?id=<?php echo $row["id"]?>"><button type="button" class="btn btn-danger">刪除</button></a></td>
                  
      <?php
       }
    ?>
                    
                  </tbody>
                </table>


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