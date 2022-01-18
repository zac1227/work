
<!DOCTYPE php>
<php lang="en">
<head>
<title>Class</title>
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
<?php
    session_start();
    include("dblink.php");
?>
<div class="banner-bottom">
		<div class="container">	
		<h3 class="title-w3-agileits title-black-wthree">學期預借紀錄Class Reservation</h3>
			<div class="w3ls_banner_bottom_grids">
                  <table name='tbl' id="tbl" class="table table-striped">
                    <thead>
                        <tr>
                              <th scope="col" style="text-align: center">預約大樓</th>
                              <th scope="col" style="text-align: center">日期</th>
                              <th scope="col" style="text-align: center">開始時段</th>
                              <th scope="col" style="text-align: center">結束時段</th>
							  <th scope="col" style="text-align: center">刪除</th>
                        </tr>
                    </thead>
                    <tbody>
                       <?php
                            include "dblink.php";
                            $sql = "SELECT * FROM semesterrecord ";
                            $result = mysqli_query($link, $sql);
                        ?>
                        <?php
                           while($row = mysqli_fetch_array($result)){
                        ?>
                        <tr>
                           
                            <td scope="col" style="text-align: center"><?php echo $row["building"]?></td>
                            <td scope="col" style="text-align: center"><?php echo $row["room_day"]?></td>
                            <td scope="col" style="text-align: center"><?php echo $row["room_avail_start"]?></td>
                            <td scope="col" style="text-align: center"><?php echo $row["room_avail_end"]?></td>
							<td scope="col" style="text-align: center"><a href="deleterentse.php?rent_id=<?php echo $row["rent_id"]?>"><button type="button"  class="btn btn-danger">刪除</button></a></td>
                        </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>
                
			</div>
		</div>
	</div>
	<div class="container">	
		<h3 class="title-w3-agileits title-black-wthree">平時預借紀錄Class Reservation</h3>
			<div class="w3ls_banner_bottom_grids">
                  <table name='tbl' id="tbl" class="table table-striped">
                    <thead>
                        <tr>
                              <th scope="col" style="text-align: center">預約大樓</th>
                              <th scope="col" style="text-align: center">日期</th>
                              <th scope="col" style="text-align: center">開始時段</th>
                              <th scope="col" style="text-align: center">結束時段</th>
							  <th scope="col" style="text-align: center">刪除</th>
                             
                        </tr>
                    </thead>
                    <tbody>
                       <?php
                            include "dblink.php";
                            $sql = "SELECT * FROM `normalrecord` ";
                            $result = mysqli_query($link, $sql);
                        ?>
                        <?php
                           while($row = mysqli_fetch_array($result)){
                        ?>
                        <tr>
                            
                            <td scope="col" style="text-align: center"><?php echo $row["building"]?></td>
                            <td scope="col" style="text-align: center"><?php echo $row["normal_date"]?></td>
                            <td scope="col" style="text-align: center"><?php echo $row["room_avail_start"]?></td>
                            <td scope="col" style="text-align: center"><?php echo $row["room_avail_end"]?></td>
							<td scope="col" style="text-align: center"><a href="deleterent.php?rent_id=<?php echo $row["rent_id"]?>"><button type="button"  class="btn btn-danger">刪除</button></a></td>
                  
                        </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>
                
			</div>
		</div>
	</div>
	

<!-- //banner-bottom -->


<!-- team -->
	
<!-- //team -->

<!-- //gallery -->
	 
<!-- contact -->

<!-- /contact -->
			<div class="copy">
		        <p>Copyright &copy;2012. College of Management,
Fu Jen Catholic University</p>
		    </div>
<!--/footer -->
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- contact form -->
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>	
<!-- /contact form -->	
<!-- Calendar -->
		<script src="js/jquery-ui.js"></script>
		<script>
				$(function() {
				$( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
				});
		</script>
<!-- //Calendar -->
<!-- gallery popup -->
<link rel="stylesheet" href="css/swipebox.css">
				<script src="js/jquery.swipebox.min.js"></script> 
					<script type="text/javascript">
						jQuery(function($) {
							$(".swipebox").swipebox();
						});
					</script>
<!-- //gallery popup -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('php,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- flexSlider -->
				<script defer src="js/jquery.flexslider.js"></script>
				<script type="text/javascript">
				$(window).load(function(){
				  $('.flexslider').flexslider({
					animation: "slide",
					start: function(slider){
					  $('body').removeClass('loading');
					}
				  });
				});
			  </script>
			<!-- //flexSlider -->
<script src="js/responsiveslides.min.js"></script>
			<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 4
						  $("#slider4").responsiveSlides({
							auto: true,
							pager:true,
							nav:false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
							  $('.events').append("<li>before event fired.</li>");
							},
							after: function () {
							  $('.events').append("<li>after event fired.</li>");
							}
						  });
					
						});
			</script>
		<!--search-bar-->
		<script src="js/main.js"></script>	
<!--//search-bar-->
<!--tabs-->
<script src="js/easy-responsive-tabs.js"></script>
<script>
$(document).ready(function () {
$('#horizontalTab').easyResponsiveTabs({
type: 'default', //Types: default, vertical, accordion           
width: 'auto', //auto or any width like 600px
fit: true,   // 100% fit in a container
closed: 'accordion', // Start closed if in accordion view
activate: function(event) { // Callback function if tab is switched
var $tab = $(this);
var $info = $('#tabInfo');
var $name = $('span', $info);
$name.text($tab.text());
$info.show();
}
});
$('#verticalTab').easyResponsiveTabs({
type: 'vertical',
width: 'auto',
fit: true
});
});
</script>
<!--//tabs-->
<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	
	<div class="arr-w3ls">
	<a href="#home" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	</div>
<!-- //smooth scrolling -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
</body>
</php>