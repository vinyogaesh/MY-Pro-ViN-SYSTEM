<?php
include_once("conf.vani");
include_once("checkadm.php");
/**
 * @author Vinoth K S
 * @copyright 2013
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Android Learners</title>
		<link rel="stylesheet" href="./style.css" type="text/css" media="screen" />
		<!--[if IE 6]><link rel="stylesheet" href="./style.ie6.css" type="text/css" media="screen" /><![endif]-->
		<!--[if IE 7]><link rel="stylesheet" href="./style.ie7.css" type="text/css" media="screen" /><![endif]-->
		<link rel="stylesheet" type="text/css" href="engine1/style.css" />
		<script type="text/javascript" src="jquery.js"></script>
		<script type="text/javascript" src="script.js"></script>
		<script type="text/javascript" src="engine1/jquery.js"></script>
		
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$("#username").keyup(function (e) {
	
		//removes spaces from username
		$(this).val($(this).val().replace(/\s/g, ''));
		
		var username = $(this).val();
		if(username.length < 4){$("#user-result").html('');return;}
		
		if(username.length >= 4){
			$("#user-result").html('<img src="imgs/ajax-loader.gif" />');
			$.post('check_username.php', {'username':username}, function(data) {
			  $("#user-result").html(data);
			});
		}
	});	
});
</script>
<style type="text/css">
#registration-form {background: #FDFDFD;width: 350px;padding: 20px;margin-right: auto;margin-left: auto;border: 1px solid #E9E9E9;border-radius: 10px;}
</style>
		</head>
	<body>
		<div id="art-page-background-middle-texture">
			<div id="art-page-background-glare">
				<div id="art-page-background-glare-image">
					<div id="art-main">
						<div class="art-sheet">
							<div class="art-sheet-cc"></div>
							<div class="art-sheet-body">
								<div class="art-header">
									<div id="wowslider-container1">
	
									<div class="ws_images"><ul><li><img src="data1/images/androidhdwallpapers16.jpg" alt="Android Developer" title="Android Developer" id="wows1_0"/></li>
<li><img src="data1/images/22482_549544641738933_2001580661_n.jpg" alt="Android Developer" title="Android Developer" id="wows1_2"/></li>
<li><img src="data1/images/305485_569899653036765_399122908_n.jpg" alt="Android Developer" title="Android Developer" id="wows1_3"/></li>
<li><img src="data1/images/fondsdecranandroidhdwallpapers.jpg" alt="Android Developer" title="Android Developer" id="wows1_4"/></li>
<li><img src="data1/images/outofspaceandroid.jpg" alt="Android Developer" title="Android Developer" id="wows1_5"/></li>
</ul></div>
<div class="ws_bullets"><div>
<a href="#" title="Android Developer"><img src="data1/tooltips/androidhdwallpapers16.jpg" alt="Android Developer"/>1</a>
<a href="#" title="Android Developer"><img src="data1/tooltips/22482_549544641738933_2001580661_n.jpg" alt="Android Developer"/>2</a>
<a href="#" title="Android Developer"><img src="data1/tooltips/305485_569899653036765_399122908_n.jpg" alt="Android Developer"/>3</a>
<a href="#" title="Android Developer"><img src="data1/tooltips/fondsdecranandroidhdwallpapers.jpg" alt="Android Developer"/>4</a>
<a href="#" title="Android Developer"><img src="data1/tooltips/outofspaceandroid.jpg" alt="Android Developer"/>5</a></div>
</div>
								</div><script type="text/javascript" src="engine1/wowslider.js"></script>
	<script type="text/javascript" src="engine1/script.js"></script>
																</div>
								<div class="art-nav">
									<div class="l"></div>
									<div class="r"></div>
									<ul class="art-menu">
										<li><a href="index.php"><span class="l"> </span><span class="r"> </span><span class="t">Home</span></a></li>
										<li><a href="user_landing.php" ><span class="l"> </span><span class="r"> </span><span class="t">Files</span></a></li>
										<li><a href="search_userres.php"  ><span class="l"> </span><span class="r"> </span><span class="t">View Files</span></a></li>
										

									</ul>
								</div>
								<div class="art-content-layout">
									<div class="art-content-layout-row">
										<div class="art-layout-cell art-content">
											<div class="art-post">
												<div class="art-post-body">
													<div class="art-post-inner art-article">
														<p align="left"><b>Welcome Guest</b></p>										<h2 class="art-postheader">Create Account</h2>
														<div class="art-postcontent">

							    <h2 class="art-postheader" align="center">Member Details</h2>
 <div id="registration-form">
 <table border="0" align="center">
<form action="signsucess.php" method="post">

 <tr><td>Enter Username :</td><td>
  <input name="username" type="text" id="username" maxlength="15" autocomplete="off">
    </td><td><span id="user-result"></span></td></tr>
<tr><td>Enter Password:-</td><td><input type="password" name="password"  /></td></tr>
<tr><td>Enter Member Name :-</td><td><input type="text" name="name" ></td></tr>
<tr><td>Enter Address :-</td><td><textarea name="address"></textarea></td></tr>
<tr><td>Enter Mobile No:-</td><td><input type="text" name="mobile"  /></td></tr>
<tr><td>Enter E-Mail Id:-</td><td><input type="text" name="mail"  /></td></tr>
<tr><td></td><td><input type="submit" name="add" value="Signup" /></td></tr>

</form>
</table>
</div>
</div>
														<div class="cleared"></div>
													</div>
													<div class="cleared"></div>
												</div>
											</div>
											<div class="cleared"></div>
										</div>
									</div>
								</div>
								<div class="cleared"></div>
								<div class="art-footer">
									<div class="art-footer-t"></div>
									<div class="art-footer-b"></div>
									<div class="art-footer-body"><a href="./#" class="art-rss-tag-icon" title="RSS"></a>
										<div class="art-footer-text">
											<p><a href="./#">Link1</a> | <a href="./#">Link2</a> | <a href="./#">Link3</a></p>
											<p>Copyright &copy; 2013. All Rights Reserved.</p>
										</div>
										<div class="cleared"></div>
									</div>
								</div>
								<div class="cleared"></div>
							</div>
						</div>
						<div class="cleared"></div>
						<p class="art-page-footer">Created by Vani Reddy.</p>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
