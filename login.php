<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
		<meta charset="utf-8">
		<title>Login</title>
		
<?php include 'header.php';?>
<?php include 'topNav.php';?>
		<div class="qam-ask-search-box"><div class="qam-ask-mobile"><a href="ask.php" class="turquoise">Ask a Question</a></div><div class="qam-search-mobile turquoise" id="qam-search-mobile"></div></div>
		<div class="qam-search turquoise the-top" id="the-top-search">
			<div class="qa-search">
				<form method="get" action="#">
					
					<input type="text" name="q" value="" class="qa-search-field">
					<input type="submit" value="Search" class="qa-search-button">
				</form>
			</div>
		</div>
		<div class="qa-body-wrapper">
			
			<div class="qa-main-wrapper">
				
				<div class="qa-main">
					<h1>
						Log in
						
					</h1>
					<div class="qa-part-form">
						<form method="post" action="php/login.php">
							<table class="qa-form-tall-table">
								<tr>
									<td class="qa-form-tall-label">
										Email or Username:
									</td>
								</tr>
								<tr>
									<td class="qa-form-tall-data">
										<input name="uname" id="emailhandle" dir="auto" type="text" value="" class="qa-form-tall-text">
									</td>
								</tr>
								<tr>
									<td class="qa-form-tall-label">
										Password:
									</td>
								</tr>
								<tr>
									<td class="qa-form-tall-data">
										<input name="password" id="password" dir="auto" type="password" value="" class="qa-form-tall-text">
										<div class="qa-form-tall-note"><a href="forgot.html">I forgot my password</a></div>
									</td>
								</tr>
								<tr>
									<td class="qa-form-tall-label">
										<label>
											<input name="remember" type="checkbox" value="1" class="qa-form-tall-checkbox">
											Remember me on this computer
										</label>
									</td>
								</tr>
								<tr>
									<td colspan="1" class="qa-form-tall-buttons">
										<input value="Log In" title="" type="submit" class="qa-form-tall-button qa-form-tall-button-login">
									</td>
								</tr>
							</table>
							<input type="hidden" name="dologin" value="1">
							<input type="hidden" name="code" value="0-1520521573-4e173d77c71c908b3a415f9b07133cae9c4ad257">
						</form>
					</div>
					<div class="qa-part-custom">
						<br>	<div id="fb-root" style="display:inline;"></div>

	<div class="fb-login-button" style="display:inline; vertical-align:middle;" size="large" scope="email,user_about_me,user_location,user_website">
	</div>
<br>
					</div>
				</div> <!-- END qa-main -->
				
				<div id="qam-sidepanel-toggle"><i class="icon-left-open-big"></i></div>
				<div class="qa-sidepanel" id="qam-sidepanel-mobile">
					<div class="qam-search turquoise ">
						<div class="qa-search">
							<form method="get" action="#">
								
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
							<A HREF="ask.php">Here</A>.
							<BR><BR>
							Become an Expert!
							<a href="tag/bug.html"  style="margin:0 1px;"></a>
							<BR><BR>
						</div>	
				    </div>
				
			</div> <!-- END main-wrapper -->
		</div> <!-- END body-wrapper -->
		<?php include 'footer.php'; ?>
	</body>
</html>
