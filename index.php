<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Estate Management System</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><strong>Company Name</strong></a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <div id="page-wrapper">
            <div id="page-inner">


                <div class="row">
                    <div class="col-md-12">
                        <h3 class="page-header">
                            Personnel List
                        </h3>

                
                <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6"  id="form_1">
                                    <form role="form" >

                                            <div class="form-group" id="form-group">
                                                    <label>User ID</label>
                                                    <input class="form-control" id="id" name="id" type="text" required>
                                                    <!-- <p class="help-block">Example block-level help text here.</p> -->
                                                </div>

                                                <div class="form-group">
                                                        <label>User Password</label>
                                                        <input class="form-control" id="password" name="password" type="password" required>
                                                        <p class="help-block">forgot password.</p>
                                                    </div>
                                                </form>
                                                <button class="btn btn-default loginButton" name="loginButton" id="loginButton">Login</button>
                                    
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
                <!-- /. ROW  -->
			
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script>
    
    // document.getElementById("loginButton").value;
    
    document.getElementById("loginButton").addEventListener("click", function(){
        makeRequest();
        alertContents();
 
    });

  function makeRequest() {
    httpRequest1 = new XMLHttpRequest();

    var email = document.getElementById("id").value;
    var password = document.getElementById("password").value;
    if (!httpRequest1) {
      alert('Giving up :( Cannot create an XMLHTTP instance, Contact Admin for help');
      return false;
    }
    var data = "?username="+email+"&password="+password;
    

    httpRequest1.onreadystatechange = alertContents;
    httpRequest1.open('GET', 'backend/authentication.php'+data);
    httpRequest1.send(data);
    console.log(data);
  }

  function alertContents() {
    if (httpRequest1.readyState === XMLHttpRequest.DONE) {
      if (httpRequest1.status === 200) {
        if(httpRequest1.responseText){

            if (httpRequest1.responseText == 404) {
                $("#form_1").append('<div id="report" class="report"><div class="alert alert-danger"><strong>Oh snap!</strong> Change a few things up and try submitting again.</div></div>');
                console.log("addind...");
                setTimeout(function(){
                    $("#report").remove();
                    console.log("removing");
                },5000);

            }else{
                console.log(httpRequest1.responseText);
                window.location = "home.php";
                // alert(httpRequest1.responseText);
            }
                
 
        }
      } else {
        alert('There was a problem with the request.');
        alert(httpRequest1.responseText);
      }
    }
  
}
    </script>
   
    <!-- Main Js -->
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
	 
    <!-- Metis Menu Js -->
    <!-- <script src="assets/js/jquery.metisMenu.js"></script> -->

	
	<!-- <script src="assets/js/easypiechart.js"></script> -->
	<!-- <script src="assets/js/easypiechart-data.js"></script> -->
	
	 <!-- <script src="assets/js/Lightweight-Chart/jquery.chart.js"></script> -->
	
    <!-- Custom Js -->
    <!-- <script src="assets/js/custom-scripts.js"></script> -->
 

</body>

</html>