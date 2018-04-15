<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
		<meta charset="utf-8">
		<title>Reset Forgotten Password</title>
		<?php include 'header.php';?>

		<?php include 'topNav.php';?>

		<div class="qam-ask-search-box"><div class="qam-ask-mobile"><a href="#" class="turquoise">Ask a Question</a></div><div class="qam-search-mobile turquoise" id="qam-search-mobile"></div></div>
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
						
						
						Reset Forgotten Password
						
					</h1>
					<div class="qa-part-form">
						<form method="post" action="#">
							<table class="qa-form-tall-table">
								<tr>
									<td class="qa-form-tall-label">
										Email or Username:
									</td>
								</tr>
								<tr>
									<td class="qa-form-tall-data">
										<input name="emailhandle" id="emailhandle" type="text" value="" class="qa-form-tall-text">
										<div class="qa-form-tall-note">A message will be sent to your email address with instructions.</div>
									</td>
								</tr>
								
								<tr>
									<td colspan="1" class="qa-form-tall-buttons">
										<input value="Send Reset Password Email" title="" type="submit" class="qa-form-tall-button qa-form-tall-button-send">
									</td>
								</tr>
							</table>
							<input type="hidden" name="doforgot" value="1">
							<input type="hidden" name="code" value="0-1520528034-d1b4ee34c494133452701b1d4305a8a6a6a63bed">
						</form>
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
					
				</div>
				
			</div> <!-- END main-wrapper -->
		</div> <!-- END body-wrapper -->
		<?php include 'footer.php';?>
	</body>
</html>
