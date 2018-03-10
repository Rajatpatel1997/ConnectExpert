<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
		<meta charset="utf-8">
		<title>Departments</title>
		
		<!-- <script>
		var qa_root = '.html\/';
		var qa_request = 'tags';
		var qa_oldonload = window.onload;
		window.onload = function() {
			if (typeof qa_oldonload == 'function')
				qa_oldonload();
			
			qa_reveal(document.getElementById('notice_visitor'), 'notice');
		};
		</script> -->
		<?php include 'header.php';?>

		<div id="qam-topbar" class="clearfix">
			<div class="qam-main-nav-wrapper clearfix">
				<div class="sb-toggle-left qam-menu-toggle"><i class="icon-th-list"></i></div>
				<div class="qam-account-items-wrapper">
					<div id="qam-account-toggle" class="qam-logged-out">
						<i class="icon-key qam-auth-key"></i>
						<div class="qam-account-handle">Login</div>
					</div>
					<div class="qam-account-items clearfix">
						<form action="http://www.question2answer.org/qa/login?to=login" method="post">
							<input type="text" name="emailhandle" dir="auto" placeholder="Email or Username">
							<input type="password" name="password" dir="auto" placeholder="Password">
							<div><input type="checkbox" name="remember" id="qam-rememberme" value="1">
							<label for="qam-rememberme">Remember</label></div>
							<input type="hidden" name="code" value="0-1520521573-4e173d77c71c908b3a415f9b07133cae9c4ad257">
							<input type="submit" value="Login" class="qa-form-tall-button qa-form-tall-button-login" name="dologin">
						</form>
						<div class="qa-nav-user">
							<ul class="qa-nav-user-list">
								<!-- <li class="qa-nav-user-item qa-nav-user-facebook-login">
									<span class="qa-nav-user-nolink">	
										<div id="fb-root" style="display:inline;"></div>
											<script>
											window.fbAsyncInit = function() {
												FB.init({
													appId  : '158644244176280',
													status : true,
													cookie : true,
													xfbml  : true,
													oauth  : true
												});

												FB.Event.subscribe('auth.login', function(response) {
													setTimeout("window.location='http:\/\/www.question2answer.org\/qa\/facebook-login?to=http%3A%2F%2Fwww.question2answer.org%2Fqa%2Flogin'", 100);
												});
											};
											(function(d){
												var js, id = 'facebook-jssdk'; if (d.getElementById(id)) {return;}
												js = d.createElement('script'); js.id = id; js.async = true;
												js.src = "../../connect.facebook.net/en_US/all.js";
												d.getElementsByTagName('head')[0].appendChild(js);
											}(document));
											</script>
											<div class="fb-login-button" style="display:inline; vertical-align:middle;" size="medium" scope="email,user_about_me,user_location,user_website">
											</div>
									</span>
								</li> -->
								<li class="qa-nav-user-item qa-nav-user-register">
									<a href="register.php" class="qa-nav-user-link">Register</a>
								</li>
							</ul>
							<!-- <div class="qa-nav-user-clear">
							</div> -->
						</div>
					</div> <!-- END qam-account-items -->
				</div> <!-- END qam-account-items-wrapper -->
				<div class="qa-logo">
					<a href="index.php" class="qa-logo-link" title="Solvo"><img src="images/logo.png" width="454" height="40" border="0" alt="Solvo"></a>
				</div>
				<div class="qa-nav-main">
					<ul class="qa-nav-main-list">
						<!-- <li class="qa-nav-main-item qa-nav-main-activity">
							<a href="activity.html" class="qa-nav-main-link">All Activity</a>
						</li> -->
						<li class="qa-nav-main-item qa-nav-main-questions">
							<a href="questions.php" class="qa-nav-main-link">Questions</a>
						</li>
						<li class="qa-nav-main-item qa-nav-main-hot">
							<a href="hot.php" class="qa-nav-main-link">Hot!</a>
						</li>
						<li class="qa-nav-main-item qa-nav-main-unanswered">
							<a href="unanswered.php" class="qa-nav-main-link">Unanswered</a>
						</li>
						<li class="qa-nav-main-item qa-nav-main-tag">
							<a href="departments.php" class="qa-nav-main-link qa-nav-main-selected">Departments</a>
						</li>
						<!-- <li class="qa-nav-main-item qa-nav-main-user">
							<a href="users.php" class="qa-nav-main-link">Users</a>
						</li> -->
						<li class="qa-nav-main-item qa-nav-main-ask">
							<a href="ask.php" class="qa-nav-main-link">Ask a Question</a>
						</li>
						<li class="qa-nav-main-item-opp qa-nav-main-custom-1">
							<a href="index.php" class="qa-nav-main-link">About</a>
						</li>
					</ul>
					<div class="qa-nav-main-clear">
					</div>
				</div>
			</div> <!-- END qam-main-nav-wrapper -->
		</div> <!-- END qam-topbar -->

		<div class="qam-ask-search-box"><div class="qam-ask-mobile"><a href="ask.php" class="turquoise">Ask a Question</a></div><div class="qam-search-mobile turquoise" id="qam-search-mobile"></div></div>
		<div class="qam-search turquoise the-top" id="the-top-search">
			<div class="qa-search">
				<form method="get" action="http://www.question2answer.org/qa/search">
					
					<input type="text" name="q" value="" class="qa-search-field">
					<input type="submit" value="Search" class="qa-search-button">
				</form>
			</div>
		</div>
		<div class="qa-body-wrapper">
			
			<div class="qa-main-wrapper">
				
				<div class="qa-main">
					<h1>
						
						
						Departments
						
					</h1>
					<div class="qa-part-ranking">
						<table class="depart-table qa-top-tags-table">
							<tr>
								<!-- <td class="qa-top-tags-count">1,277 &#215;</td> -->
								<td class=""><a href="computerDepart.php" class="depart_btn btn btn-primary">Computer/IT Department</a></td>
								<td class="qa-top-tags-spacer">&nbsp;</td>
								<!-- <td class="qa-top-tags-count">152 &#215;</td> -->
								<td class=""><a href="electrical.php" class="depart_btn btn btn-primary">Electrical and Electronics</a></td>
								<td class="qa-top-tags-spacer">&nbsp;</td>
								<!-- <td class="qa-top-tags-count">111 &#215;</td> -->
								<td class=""><a href="mechanical.php" class="depart_btn btn btn-primary">Mechanical / Automobile</a></td>
							</tr>
							<tr>
								<!-- <td class="qa-top-tags-count">469 &#215;</td> -->
								<td class=""><a href="civil.php" class="depart_btn btn btn-primary">Civil</a></td>
								<td class="qa-top-tags-spacer">&nbsp;</td>
								<!-- <td class="qa-top-tags-count">151 &#215;</td> -->
								<td class=""><a href="mechatronics.php" class="depart_btn btn btn-primary">Mechatronics</a></td>
								<td class="qa-top-tags-spacer">&nbsp;</td>
								<!-- <td class="qa-top-tags-count">107 &#215;</td> -->
								<td class=""><a href="aeronautical.php" class="depart_btn btn btn-primary">Aeronautical</a></td>
							</tr>
							
						</table>
					</div>
					
				</div> <!-- END qa-main -->
				
				<div id="qam-sidepanel-toggle"><i class="icon-left-open-big"></i></div>
				<div class="qa-sidepanel" id="qam-sidepanel-mobile">
					<div class="qam-search turquoise ">
						<div class="qa-search">
							<form method="get" action="http://www.question2answer.org/qa/search">	
								<input type="text" name="q" value="" class="qa-search-field">
								<input type="submit" value="Search" class="qa-search-button">
							</form>
						</div>
					</div>
					<div class="qa-sidebar wet-asphalt">
						<div style="font-size:13px;">
							Welcome to the WhizzKid!
							<BR><BR>
							Got a question? Ask it 
							<A HREF="ask.html">Here</A>.
							<BR><BR>
							Become an Expert!
							<a href="tag/bug.html"  style="margin:0 1px;"></a>
							<BR><BR>
						</div>	
				    </div>
					
				</div>
				
			</div> <!-- END main-wrapper -->
		</div> <!-- END body-wrapper -->
		<?php include 'footer.php';?>
		<!-- <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-1165533-8']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script> -->
		<div style="position:absolute; left:-9999px; top:-9999px;">
			<span id="qa-waiting-template" class="qa-waiting">...</span>
		</div>
	</body>
</html>
