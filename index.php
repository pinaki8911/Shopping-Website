<!DOCTYPE html>
<html>
    <head>
<?php
error_reporting(1);
include("index1.php");
?>
<title>SD Premium</title>

<meta http-equiv="Content-language" content="cs">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="description" content=" ">
<meta name="keywords" content=" ">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="default.css" title="default">

</head>

<body>
<div id="WholePage">
<div id="Inner">
<div id="Container" style="border:groove;border-color:#00CCFF">
<div id="Head">
<div id="Head_left">
<div id="Leaf_top"><img src="img/shop31.jpg" width="324" /></div>
<div id="Leaf_bottom"> <a class="registration" href="index.php?con=11">REGISTRATION</a> <a class="log-in" href="index.php?con=12">LOG IN</a> </div>
</div>
<div id="Head_right">
<div id="Logo">
<div id="Name"><span class="blue">SD</span>&nbsp;<span>Premium</span> </div>
<div id="Informations">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Latest trends in Leather</div>
</div>
<div id="Top_menu"> <a class="kart" href="?page=home"><span>CART</span></a> <a class="orders" href="index.php?con=3"><span>GALLERY</span></a>
<a class="contact" href="index.php?con=1"><span>CONTACT</span></a>
<a class="help" href="index.php?con=2"><span>ABOUT US</span></a>
<a class="home" href="?page=home"><span>HOME</span></a>
</div>
</div>
</div>
<div id="CentralPart">
<div id="LeftPart">
<div id="Menu">
<div id="Menu_header">
<div class="menu_header_left"> <span class="menu_text"><font face="Georgia, Times New Roman, Times, serif">Search</font></span>
</div>
<div class="menu_header_right"> </div>
<div id="Menu_content"> 
    <span>
        <!-- Start of Page Search -->

		
		    <h5>&nbsp;</h5>
			<form method="post">
		    <input type="text" name="t1" value="search" onfocus="if(this.value=='search'){this.value='';}"onBlur="if(this.value==''){this.value='search';}"/>
            <input name="sear" type="submit" class="button" id="sub" value="Go" />
<!--</form>-->
<?php
extract($_REQUEST);
	if(isset($sear))
	  {
	   $se=$_REQUEST['t1'];
	   if($se!=NULL)
	   {
	   echo "<script>location.href='index.php?se=$se'</script>";
	   }
      }
?>
		  <h5>&nbsp;</h5>
		  </form>
		

		<!-- End of Page Search --></span><br>
</div>
<div class="menu_header_left"> <span class="menu_text">MEN</span>
</div>
<div class="menu_header_right"> </div>
</div>
<div id="Menu_content"> <a class="menu_item" href="index.php?catg=1 & subcatg=BeltM"><span>Belt</span></a><br>
<a class="menu_item" href="index.php?catg=1 & subcatg=Wallet"><span>Wallet</span></a><br>
<a class="menu_item" href="index.php?catg=1 & subcatg=FootwearM"><span>Footwear
</span></a><br>
<a class="menu_item" href="index.php?catg=1 & subcatg=JacketM"><span>Jacket</span></a><br>

</div>

<div class="menu_header_left"> <span class="menu_text">WOMEN</span>
</div>
<div class="menu_header_right"> </div>
<div id="Menu_content"> <a class="menu_item" href="index.php?catg=2 & subcatg=BeltF"><span>Belt</span></a><br>
<a class="menu_item" href="index.php?catg=2 & subcatg=Purse"><span>Purse</span></a><br>
<a class="menu_item" href="index.php?catg=2 & subcatg=Hand Bag"><span>Hand Bag</span></a><br>
<a class="menu_item" href="index.php?catg=2 & subcatg=FootwearF"><span>Footwear</span></a><br>
<a class="menu_item" href="index.php?catg=2 & subcatg=JacketF"><span>Jacket</span></a><br>

</div>

<div class="menu_header_left"> <span class="menu_text">KIDS</span>
</div>
<div class="menu_header_right"> </div>
<div id="Menu_content"> <a class="menu_item" href="index.php?catg=3 & subcatg=FootwearK"><span>Footwear</span></a><br>

</div>
</div>
<img src="usepics/41.jpg" width="228" height="183" /></div>

<div id="RightPart">
<?php
include("config.php");
  if(isset($se))
	    {
		include("search.php");
		}
if($_REQUEST['con']==1)
{
include("contact.php");
}
if($_REQUEST['con']==2)
{
include("about.php");
}
if($_REQUEST['con']==3)
{
include("gallery.php");
}
if($_REQUEST['con']==11)
{
include("register.php");
 }
if($_REQUEST['con']==12)
{
include("login.php");
 }

if($_REQUEST['con']==13)
{
include("welcome.php");
 }
if($_REQUEST['con']==14)
{
include("viewitem.php");
}

if(!(isset($catg))and !(isset($con))and !(isset($se)))
{
include("home.php");
}

if(isset($catg)==1)
{
if($_REQUEST['subcatg']=='BeltM')
{
include("BeltM.php");
}
}
if(isset($catg)==1)
{
if($_REQUEST['subcatg']=='Wallet')
{
include("WalletM.php");
}
}
if(isset($catg)==1)
{
if($_REQUEST['subcatg']=='FootwearM')
{
include("FootwearM.php");
}
}
if(isset($catg)==1)
{
if($_REQUEST['subcatg']=='JacketM')
{
include("JacketM.php");
}
}


if(isset($catg)==2)
{
	if($_REQUEST['subcatg']=='BeltF')
	{
	include("BeltF.php");
	}
}

if(isset($catg)==2)
{
if($_REQUEST['subcatg']=='Purse')
{
include("PurseF.php");
}
}
if(isset($catg)==2)
{
if($_REQUEST['subcatg']=='Hand Bag')
{
include("HandbagF.php");
}
}
if(isset($catg)==2)
{
if($_REQUEST['subcatg']=='FootwearF')
{
include("FootwearF.php");
}
}
if(isset($catg)==2)
{
if($_REQUEST['subcatg']=='JacketF')
{
include("JacketF.php");
}
}

if(isset($catg)==3)
{
if($_REQUEST['subcatg']=='FootwearK')
{
include("FootwearK.php");
}
}
?>

</div>
<div class="cleaner"></div>
</div>
<div id="Bottom">
<p class="down"><b>Copyright &copy; SD Premium, Design by:PDPP</b></p>

</div>
</div>
</div>
</div>

</body></html>