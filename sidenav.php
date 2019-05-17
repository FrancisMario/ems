<?php
$navbar = '

<nav class="navbar navbar-default top-navbar" role="navigation">
<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#"><strong>My Real Estates</strong></a>
</div>

<ul class="nav navbar-top-links navbar-right">
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="true">
            <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
        </a>
        <ul class="dropdown-menu dropdown-user">
            <li><a href="profile.html"><i class="fa fa-user fa-fw"></i> User Profile</a>
            </li>
            <li><a href="settings.html"><i class="fa fa-gear fa-fw"></i> Settings</a>
            </li>
            <li class="divider"></li>
            <li id="logout"><a href="backend/logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
            </li>
        </ul>
        <!-- /.dropdown-user -->
    </li>
    <!-- /.dropdown -->
</ul>
</nav>';

$sideNavOpenning = ' <nav class="navbar-default navbar-side" style="overflow: visible;"  role="navigation">
                        <div id="sideNav" href=""><i class="fa fa-caret-right"></i></div>
                            <div class="sidebar-collapse">
                                <ul class="nav" id="main-menu">';
$sideNavClosing = '</ul> </div> </div> </ nav>';

$dashboard = '<li>
<a class="active-menu " id="dashboard" href="#"><i class="fa fa-dashboard"></i> Dashboard</a>
</li>';

$personel_settings = '<li>
<a href="#" ><i class="fa fa-sitemap"></i> Personel<span class="fa arrow"></span></a>
<!-- <ul class="nav nav-second-level">
    <li>
        <a class="active-menu " id="personnel_list" href="#"> Personel List</a>
    </li>
    <li>
        <a  id="add_personnel" href="#"> Add new personel</a>
    </li>
</ul> -->
</li>';

$clients =
 '<li>
<a class="a" id="client-list" href="#"><i class="fa fa-sitemap"></i> Clients<span class="fa arrow"></span></a>
<!-- <ul class="nav nav-second-level">
    <li>
        <a class="a" id="client-list"  href="#"> Clients List</a>
    </li>
    <li><a class="a" id="add_client"  href="#"> Add new Clients</a>
    </li>
 </ul> -->
</li>';

$estates  = '<li>
<a class="a" id="estates_list"  href="#"><i class="fa fa-qrcode"></i> Estates</a>
</li>';

$motage = '<li>
<a  href="#" class="a" id="aggreements"><i class="fa fa-sitemap"></i> Mortage<span class="fa arrow"></span></a>
<!-- <ul class="nav nav-second-level">
    <li>
        <a  href="#">Agreements</a>
    </li>
    <li>
        <a class="a" id="mottage_records" href="#">Records</a>
    </li>
    <li>
        <a class="a" id="mottage_payments" href="#">Payments</a>
    </li>
</ul> -->
</li>';

$rents = ' <li>
<a  href="#" class="a" id="rent_records"><i class="fa fa-sitemap"></i> Rents<span class="fa arrow"></span></a>
<!-- <ul class="nav nav-second-level">
    <li>
        <a class="a" id="rent_records" href="#">Rentals</a>
    </li>
    <li>
        <a class="a" id="rent_payments" href="#">Payments</a>
    </li>
</ul> -->
</li>';

$personel = '<li>
<a href="#" class="a" id="personel_list" ><i class="fa fa-sitemap"></i> Personel<span class="fa arrow"></span></a>
<!-- <ul class="nav nav-second-level">
    <li>
        <a class="a" id="personnel_list" href="#"> Personel List</a>
    </li>
    <li>
        <a class="a" id="add_personnel" href="#"> Add new personel</a>
    </li>
</ul> -->
</li>';

$approvals = '<li>
<a href="#"><i class="fa fa-sitemap"></i>Approvals<span class="fa arrow"></span></a>
<!-- <ul class="nav nav-second-level">
    <li>
        <a class="a" id="approve_aggreements" href="#">Approve Aggreement</a>
    </li>
    <li>
        <a class="a" id="approve_personel" href="">Personel Approvals</a>
    </li>
    <!--<li>
        <a class="a" href="">Personel Approvals</a>
     </li> -->
</ul> -->
</li>';

$admin_acc_control = '<li>
<a class="a" id="manage_admin_activities" href="#"><i class="fa fa-sitemap"></i>Admin Accounts<span class="fa arrow"></span></a>
<!-- <ul class="nav nav-second-level">
    <li >
        <a class="a" id="manage_admin_activities" href="#">Manage Admin Activities</a>
    </li>
    <li id="agent_profile">
        <a class="a" id="add_accounts" href="#">Add Admin Account</a>
    </li>
    
</ul> -->
</li>';

$agent_portal = '<li id="agent_portal">
<a class="a" id="agents_portal"><i class="fa fa-sitemap"></i>Add Client<span class="fa arrow"></span></a>
</li>';

$agent_profile = '<li id="agent_profile">
<a class="a" id="agents_profile" ><i class="fa fa-sitemap"></i>My Profile<span class="fa arrow"></span></a>
</li>';






session_start();
$access_level =  $_SESSION['access_level'];

  if($access_level === '2') {  //Default user
    echo $navbar;
    echo $sideNavOpenning;


    echo $sideNavClosing;
  }
  elseif ($access_level === '4') { //Finance Management
      echo $navbar;
    echo $sideNavOpenning;
    // EveryThing Else in here
 

// EveryThing Else in here
    
    echo $sideNavClosing;
  } 
  elseif ($access_level === '6') { //Estate Management
    echo $navbar;
    echo $sideNavOpenning;
    echo $clients;
    echo $rents;
    echo $admin_acc_control;
    echo $personel;
    
    echo $sideNavClosing;
} 
elseif ($access_level === '8') { //Admin Management
    echo $navbar;
    echo $sideNavOpenning;
    echo $clients;
    echo $rents;
    echo $admin_acc_control;
    echo $personel;
    
    echo $sideNavClosing;
} 
elseif ($access_level === '10') {   //CEO Management
    echo $navbar;
    echo $sideNavOpenning;
// EveryThing Else in here
    echo $dashboard;
    echo $clients;
    echo $estates;
    echo $rents;
    echo $admin_acc_control;
    echo $personel;

// EveryThing Else in here
    echo $sideNavClosing;
} 

  
