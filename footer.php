		
				</div>
				<div class="clearfix"></div>
			</div>
			<!-- Side bar -->
			<div class="col-md-4 col-sm-4 skills">
				<div id="about-us" class="parallax">
				<div style="border-left:1px solid #000000;border-bottom:1px solid #000000;border-right:1px solid #000000;">
					<?php	include_once ("side_bar.php"); ?>
					<?php	include_once ("search.php"); ?>
					<br />
				</div>
				<br />
				</div>
			</div>
			<!-- //Side bar -->
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- //Content -->
	<!-- Copyright & Contact -->
	<div class="copyright">
		<p style="padding:20px"><a href="page1.php">Page 1</a> | <a href="page2.php">Page 2</a> | <a href="page3.php">Page 3</a> | <a  href="">Page 4</a> | <a href="index.php">HOME</a>
		</p>
		<p><a href="yourfacebookurlhere" class="facebook" title="Go to My Facebook Page"><img src="images/fb.jpg"></a>
		</p>
		<p>Email: <a href="mailto:youremail@email.com">youremail@email.com</a>
		</p>
		<p>&copy; 2022 YourDomain.com	
	</div>
	<!-- //Copyright -->
	<!-- Custom-JavaScript-File-Links -->
		<!-- Supportive-JavaScript --> 			 <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
		<!-- Necessary-JS-File-For-Bootstrap --> <script type="text/javascript" src="js/bootstrap.min.js"></script>
		<!-- Sliding-Menu-JavaScript -->
			<script src="js/ytmenu.js"></script>
		<!-- //Sliding-Menu-JavaScript -->
		<!-- Slide-To-Top JavaScript (No-Need-To-Change) -->
			<script type="text/javascript">
				$(document).ready(function() {
					var defaults = {
						containerID: 'toTop', // fading element id
						containerHoverID: 'toTopHover', // fading element hover id
						scrollSpeed: 100,
						easingType: 'linear'
					};
					$().UItoTop({ easingType: 'easeOutQuart' });
				});
			</script>
			<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 0;"> </span></a>
		<!-- //Slide-To-Top JavaScript -->
		<!-- Smooth-Scrolling-JavaScript -->
			<script type="text/javascript" src="js/move-top.js"></script>
			<script type="text/javascript" src="js/easing.js"></script>
			<script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".scroll, .navbar li a, .footer li a").click(function(event){
							$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
						});
					});
			</script>
		<!-- //Smooth-Scrolling-JavaScript -->
	<!-- //Custom-JavaScript-File-Links -->
Modified Layout <a href="http://www.routeonestudio.com">RouteOneStudio.com</a><br />
Original Layout <a href="http://www.w3layouts.com">w3layouts.com</a><br />
</body>
<!-- //Body -->
</html>
