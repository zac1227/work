<?php
    session_start();
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

<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container">	
		<h3 class="title-w3-agileits title-black-wthree">教職員帳號管理 User Account management</h3>
			
			<div class="w3ls_banner_bottom_grids">
                  <table name='tbl' id="tbl" class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">姓名</th>
                            <th scope="col">帳號</th>
                            <th scope="col">密碼</th>
                            <th scope="col">權限類別</th>
                            <th scope="col">編輯</th>
                            <th scope="col">刪除</th>
                        </tr>
                    </thead>
                    <tbody>
                       <?php
                            include "dblink.php";
                            $sql = "SELECT * FROM account WHERE categories=1";
                            $result = mysqli_query($link, $sql);
                        ?>
                        <?php
                        
                           while($row = mysqli_fetch_array($result)){
                        ?>
                        <tr>
                            <td scope="row"><?php echo $row["id"]?></td>
                            <td><?php echo $row["name"]?></td>
                            <td><?php echo $row["account"]?></td>
                            <td><?php echo $row["password"]?></td>
                            <?php if($row["categories"]==1 ){
                        ?>
                            <td>教職員</td>
                            <?php
                            
                        }
                        ?>
                           
                            <td width="100"><a href="edit_tea.php?id=<?php echo $row["id"]?>& name=<?php echo $row["name"]?>& account=<?php echo $row["account"]?>& password=<?php echo $row["password"] ?>& categories=<?php echo $row["categories"]?>"><button type="button" class="btn btn-danger">修改</button></a></td>
                            <td width="100"><a href="del_tea.php?id=<?php echo $row["id"]?>"><button type="button" class="btn btn-danger">刪除</button></a></td>
                        </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>
                <div align="center">
                    <a href="sign_tea.php"><button class="btn btn-success">新增教職員</button></a>
                </div>


			</div>
		</div>
	</div>
<!-- //banner-bottom -->


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