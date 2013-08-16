<?php
include_once("conf.vani");
include_once("checkadm.php");
// Inialize session
session_start();

// Check, if username session is NOT set then this page will jump to login page
if(!isset($_SESSION['username']))
{
	 header('Location: index.php');
}
checkadm();
/**
 * @author Vinoth K S
 * @copyright 2012
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
										<li><a href="user_landing.php"><span class="l"> </span><span class="r"> </span><span class="t">Files</span></a></li>
										<li><a href="search_userres.php"  ><span class="l"> </span><span class="r"> </span><span class="t">View Files</span></a></li>
										<li><a href="ctrl_file.php" class="active"><span class="l"> </span><span class="r"> </span><span class="t">Control Files</span></a></li>
										<li><a href="logout.php" ><span class="l"> </span><span class="r"> </span><span class="t">Logout</span></a></li>


									</ul>
								</div>
								<div class="art-content-layout">
									<div class="art-content-layout-row">
										<div class="art-layout-cell art-content">
											<div class="art-post">
												<div class="art-post-body">
													<div class="art-post-inner art-article">
													
														<div class="art-postcontent">
														<strong><a href="delfile.php"><b></b>Delete File</a></strong>&nbsp;&nbsp;&nbsp;<strong><a href="retfile.php"><b></b>Retrive File</a></strong>
	<table>													

<form action="retdfile.php" method="post">
<?php

echo"<tr><th>Title</th><th>Added By</th><th>Select</th><th>Retrive</th>";

include_once("conf.vani");

$sql="select * from upload WHERE deleted='Y' and block='N'";
$ans=mysql_query($sql);
while($row=mysql_fetch_array($ans))
   {?>
   
   <tr><td><?php echo $row['title']; ?></td><td><?php echo $row['createdby'];?></td><td><input type="radio" name="delname" value="<?php echo $row[id]; ?>"></td><td><input type="submit" name="del" value="Retrive"></td></tr>
   
<?php
}
?>
</form>
</table>
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
