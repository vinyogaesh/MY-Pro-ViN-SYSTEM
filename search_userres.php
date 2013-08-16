<?php
include_once("conf.vani");
// Inialize session
session_start();

// Check, if username session is NOT set then this page will jump to login page
if(!isset($_SESSION['username']))
{
	 header('Location: index.php');
}
//checkadm();
/**
 * @author Vinoth K S
 * @copyright 2012
	$url=$_SERVER['search_userres.php'];
	header("Refresh: 5; URL=$url"); // redirect in 5 seconds
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
										<li><a href="user_landing.php"  class="active"><span class="l"> </span><span class="r"> </span><span class="t">Files</span></a></li>
										<li><a href="logout.php" ><span class="l"> </span><span class="r"> </span><span class="t">Logout</span></a></li>


									</ul>
								</div>
								<div class="art-content-layout">
									<div class="art-content-layout-row">
										<div class="art-layout-cell art-content">
											<div class="art-post">
												<div class="art-post-body">
													<div class="art-post-inner art-article"><p align="left"><b>Welcome <?php echo $_SESSION['username']; ?></b></p><p align="right"><a href="#" onClick="MyWindow=window.open('updatepass.php','MyWindow','toolbar=no,location=no,directories=no,status=no, menubar=no,scrollbars=no,resizable=no,width=600,height=800,');
             if (MyWindow)
			 {
                MyWindow.focus(5);
        	 }
         return false;">Change Password</a></p>
														<h2 class="art-postheader">Android Materials</h2>
														<div class="art-postcontent">
															
											<?php				
											include_once("conf.vani");
$sql="select * from upload WHERE deleted='N' and block='N' ORDER BY id";
$ans=mysql_query($sql);
while($row=mysql_fetch_array($ans))
   {
   
   	  #$row=$id;
	  echo"<h1>".$row['title']."</h1>";
	  echo"<p>".$row['abstract']."</p>";
   	   echo "Example:-<a href='click.php?id=".$row['id']."'>Download</a>";
$sqla="select clicks from banner_clicks WHERE id='$row[id]'";
$ansa=mysql_query($sqla);
while($rowa=mysql_fetch_array($ansa))
   {
   echo"<br><br><b>". $rowa['clicks']." Downloads </b>";
}	   
	   
	  
  }
  
  
  
  $sqlaa="select * from message ORDER BY id";
$ansaa=mysql_query($sqlaa);
while($rowaa=mysql_fetch_array($ansaa))
   {
   
   	  #$row=$id;
	  echo"<h3>".$rowaa['user']."</h3>";
	  echo"<p>".$rowaa['message']."</p>";
   }
?>



        <form  name="form1" method="post" action="save.php">
          <div class="comment">
            <textarea name="message" cols="45" rows="2" id="message" onclick="this.value='';">Share Your Comments...........</textarea>
          </div>
          <div class="button">
            <input type="submit" name="btnlog" value="Post" class="greenButton" />
          </div>
        </form>
		
		
		




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
