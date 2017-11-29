<!DOCTYPE html>
<html>
  <head>
    <title><?=$title?></title>
    <meta charset="utf8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>css/bootstrap-responsive.min.css" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
	        rel="stylesheet">
	<link href="<?php echo base_url(); ?>css/font-awesome.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>css/pages/dashboard.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>css/pages/signin.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url(); ?>js/guidely/guidely.css" rel="stylesheet"> 

 
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	    <![endif]-->
  </head>
  <body style="margin-bottom: 50px;">
  <div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span
                class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span> </a><a class="brand" href="<?php echo base_url(); ?>"><i class="icon-home"></i> <?=HOTEL_NAME?></a>
    <?
      if(UID){?>
        <div type="text" style="text-align:right; color: black; margin-top:10px;">Welcome, <?echo $full_name?>
        </div>
      <? } ?>

      <?
        if(UID){?>

          <!--/.nav-collapse --> 
      <? } ?>

    </div>
    <!-- /container --> 
  </div>
  <!-- /navbar-inner --> 
</div>
<!-- /navbar -->
<?
  if(!UID) // Can just move this out of an if statement
{?>
      <div class="subnavbar">
        <div class="subnavbar-inner">
          <div class="container">
            <ul class="mainnav">
              <li <? if($page == "dashboard"){ echo 'class="active"'; } ?>><a href="<?php echo base_url(); ?>"><i class="icon-dashboard"></i><span>Home</span> </a> </li>
              
              <li <? if($page == "reservation"){ echo 'class="active"'; } ?>><a href="<?php echo base_url('reservation'); ?>"><i class="icon-list-alt"></i><span>Reservation</span> </a> </li>
              
              <li <? if($page == "room"){ echo 'class="active"'; } ?>><a href="<?php echo base_url('room'); ?>"><i class="icon-home"></i><span>Rooms</span> </a> </li>
              <!--
              <li class="dropdown <? if($page == 'room' || $page == 'room_type'){ echo 'active'; } ?>"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-home"></i><span>Rooms</span> <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="<?php echo base_url('room'); ?>">Rooms</a></li>
                  <li><a href="<?php echo base_url('room_type'); ?>">Room Types</a></li>
                </ul>
              </li>
              -->

              <li <? if($page == "restaurant"){ echo 'class="active"'; } ?>><a href="<?php echo base_url('restaurant'); ?>"><i class="icon-fire"></i><span>Restaurant</span> </a> </li>
              
              <li <? if($page == "hikes"){ echo 'class="active"'; } ?>><a href="<?php echo base_url('hikes'); ?>"><i class="icon-retweet"></i><span>Hikes and Rentals</span> </a> </li>

              <li></li> <!-- This is to add a bar at the end of the last item for the tabs-->
            </ul>
          </div>
          <!-- /container --> 
        </div>
        <!-- /subnavbar-inner --> 
      </div>
<? } elseif(UID)
{ ?>
        <div class="subnavbar">
        <div class="subnavbar-inner">
          <div class="container">
            <ul class="mainnav">
              <li <? if($page == "dashboard"){ echo 'class="active"'; } ?>><a href="<?php echo base_url(); ?>"><i class="icon-dashboard"></i><span>Home</span> </a> </li>
              <li <? if($page == "customer_dashboard"){ echo 'class="active"'; } ?>><a href="<?php echo base_url('customer_dashboard'); ?>"><i class="icon-user"></i><span>Customer Dashboard</span> </a> </li>
              

              <li <? if($page == "reservation"){ echo 'class="active"'; } ?>><a href="<?php echo base_url('reservation'); ?>"><i class="icon-list-alt"></i><span>Reservation</span> </a> </li>

              <li <? if($page == "room"){ echo 'class="active"'; } ?>><a href="<?php echo base_url('room'); ?>"><i class="icon-home"></i><span>Rooms</span> </a> </li>

              <!--
              <li class="dropdown <? if($page == 'room' || $page == 'room_type'){ echo 'active'; } ?>"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-home"></i><span>Rooms</span> <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="<?php echo base_url('room'); ?>">Rooms</a></li>
                  <li><a href="<?php echo base_url('room_type'); ?>">Room Types</a></li>
                </ul>
              </li>
              -->

              <li <? if($page == "restaurant"){ echo 'class="active"'; } ?>><a href="<?php echo base_url('restaurant'); ?>"><i class="icon-fire"></i><span>Restaurant</span> </a> </li>
              
              <li <? if($page == "hikes"){ echo 'class="active"'; } ?>><a href="<?php echo base_url('hikes'); ?>"><i class="icon-retweet"></i><span>Hikes and Rentals</span> </a> </li>

			        <li <? if($page == "help"){ echo 'class="active"'; } ?>><a href="<?php echo base_url('login/logout'); ?>"><i class="icon-power-off"></i><span>Logout</span> </a> </li>

              <li></li> <!-- This is to add a bar at the end of the last item for the tabs-->
            </ul>
          </div>
          <!-- /container --> 
        </div>
        <!-- /subnavbar-inner --> 
      </div>
 <? } ?>
<!-- /subnavbar -->