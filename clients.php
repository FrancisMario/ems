<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Estate Management System</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    
     
</head>

<body>
    <div id="wrapper">
       <?php include 'sidenav.php'; ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">


                <div class="row">
                    <div class="col-md-12">
                        <h3 class="page-header">
                           <span id="page_header"> Dashboard </span>
                        </h3>
                    </div>
                </div>
				
				
                <!-- /. ROW  -->
				<div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Quick Estate Stats.
                            </div>
                            <div class="panel-body">
                                <div id="morris-bar-chart"></div>
                            </div>
                        </div>
                    </div>
                </div>
				<div class="row">
				<div class="col-md-12">
				
					</div>		
				</div> 	
                <!-- /. ROW  -->

                <div class="row">

                    <div class="col-md-12 col-sm-12 col-xs-12">

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <span id="">Most Recent Customers</span>
                            </div> 
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        

                                        <thead>
                                            <tr>
                                                <th>C ID</th>
                                                <th>Full Name</th>
                                                <th>Phone Number</th>
                                                <th>Prop. Location</th>
                                                <th>Prop. Dimension</th>
                                                <th>Prop. Number</th>
                                                <th>Payment Method</th>
                                            </tr>
                                        </thead>
                                         <?php include "request/getClients.php" ?>    
                                            <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>

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
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
	 
    <!-- Metis Menu Js -->
    <script src="assets/js/Main.js"></script>
    <!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
	
	
	<script src="assets/js/easypiechart.js"></script>
	<script src="assets/js/easypiechart-data.js"></script>
	
	 <script src="assets/js/Lightweight-Chart/jquery.chart.js"></script>
	
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    <script>
            console.log("hello world");
    document.getElementById("logout").addEventListener("click", function(){
    makeRequest();
    rewriteContents();

});

function makeRequest() {
httpRequest = new XMLHttpRequest();


if (!httpRequest) {
  alert('Giving up :( Cannot create an XMLHTTP instance, Contact Admin for help');
}

var data = "asda";

httpRequest.onreadystatechange = alertContents;
httpRequest.open('GET', 'backend/logout.php');
httpRequest.send(data);
console.log(data);
}

function alertContents() {
if (httpRequest.readyState === XMLHttpRequest.DONE) {
  if (httpRequest.status === 200) {
    if(httpRequest.responseText){

    alert(httpRequest.responseText);
    window.location = "index.html";

    }
  } else {
    alert('There was a problem with the request.');
    alert(httpRequest.responseText);
  }
}

}
</script>


 

</body>

</html>