<?php

$GLOBALS['client_modals'] = '
<!-- Add Estate Modal-->
<div class="modal fade" id="add_client" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Add New Estate</h4>
    </div>
    <div class="modal-body row">
        <div class="form-group col-md-6">
            <label>Estate Name</label>
                 <input id="estate_name" class="form-control" placeholder="Enter Name">
        </div>

        <div class="form-group col-md-6">
            <label>Estate Location</label>
            <input id="estate_location" class="form-control" placeholder="Enter Location">
        </div>
        <div class="form-group col-md-12">
            <label>Property Type</label>
               <Select id="property_type" class="form-control">
               <option>Select</option>
               <option value="">Estate</option>
               <option value="">Rental</option>
               </Select>
    </div>

    <hr>
    <div  id="dimension_holder" class="col-md-12 row">

    <div class="form-group col-md-6 row">
                
    <span class="col-md-12"> <label>Dimension</label></span>
    
                <div class="form-group col-md-5">
                    <input type="number" class="form-control" placeholder="Enter text">
                 </div>
                 <span class="form-group col-md-2">/i</span>
                 <div class="form-group col-md-5">
                    <input type="number" class="form-control" placeholder="Enter text">
                 </div>

             </div>

        <div class="form-group col-md-6">
            <label>Number of plots</label>
                <input type="number" class="form-control" placeholder="Enter Number of plots">
        </div>

    </div>
    <hr>
   
    
    <div class="modal-footer">
    <button style="float:left;" id="add_dimension" type="button" tooltip="adds a plot with custom dimention" class="btn btn-success">Add custom Plot</button>
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    <button type="button" class="btn btn-primary">Save changes</button>
    </div>
    </div>
    </div>
    <!-- Add Estate Modal-->';


    $GLOBALS['estate_modals'] = '
    <!-- Add Estate Modal-->
<div class="modal fade" id="add_estate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
    <div class="modal-header">
        <button type="button" id="close" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Add New Estate</h4>
    </div>
    <div class="modal-body  row" id="modal-error">
        <div class="form-group col-md-6">
            <label>Estate Name</label>
                 <input id="estate_name" class="form-control" placeholder="Enter Name">
        </div>

        <div class="form-group col-md-6">
            <label>Estate Location</label>
            <input id="estate_location" class="form-control" placeholder="Enter Location">
        </div>
        <div class="form-group col-md-12">
            <label>Property Type</label>
               <Select id="property_type" class="form-control">
               <option>Select</option>
               <option value="estate">Estate</option>
               <option value="rental">Rental</option>
               </Select>
    </div>

    <hr>
    <div  id="dimension_holder" class="col-md-12 row">

    <div class="form-group col-md-6 row">
                
    <span class="col-md-12"> <label>Dimension</label></span>
    
                <div class="form-group col-md-5">
                    <input type="number" id="dimension-X" class="form-control" placeholder="Enter text">
                 </div>
                 <span class="form-group col-md-2">/i</span>
                 <div class="form-group col-md-5">
                    <input type="number" id="dimension-Y" class="form-control" placeholder="Enter text">
                 </div>

             </div>

        <div class="form-group col-md-6">
            <label>Number of plots</label>
                <input type="number" class="form-control" id="number_of_plots" placeholder="Enter Number of plots">
        </div>

    </div>
    <hr>
   
    
    <div class="modal-footer">
    <button style="float:left;" id="add_dimension" type="button" tooltip="adds a plot with custom dimention" class="btn btn-success">Add custom Plot</button>
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    <button type="button" class="btn btn-primary" id="add_estate" >Save changes</button>
    </div>
    </div>
    </div>
    <!-- Add Estate Modal-->';

    $GLOBALS['rent_modals'] = '
<div class="modal fade" id="add_rental" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Add New Estate</h4>
    </div>
    <div class="modal-body row">
        <div class="form-group col-md-6">
            <label>Estate Name</label>
                 <input id="estate_name" class="form-control" placeholder="Enter Name">
        </div>

        <div class="form-group col-md-6">
            <label>Estate Location</label>
            <input id="estate_location" class="form-control" placeholder="Enter Location">
        </div>
        <div class="form-group col-md-12">
            <label>Property Type</label>
               <Select id="property_type" class="form-control">
               <option>Select</option>
               <option value="">Estate</option>
               <option value="">Rental</option>
               </Select>
    </div>

    <hr>
    <div  id="dimension_holder" class="col-md-12 row">

    <div class="form-group col-md-6 row">
                
    <span class="col-md-12"> <label>Dimension</label></span>
    
                <div class="form-group col-md-5">
                    <input type="number" class="form-control" placeholder="Enter text">
                 </div>
                 <span class="form-group col-md-2">/i</span>
                 <div class="form-group col-md-5">
                    <input type="number" class="form-control" placeholder="Enter text">
                 </div>

             </div>

        <div class="form-group col-md-6">
            <label>Number of plots</label>
                <input type="number" class="form-control" placeholder="Enter Number of plots">
        </div>

    </div>
    <hr>
   
    
    <div class="modal-footer">
    <button style="float:left;" id="add_dimension" type="button" tooltip="adds a plot with custom dimention" class="btn btn-success">Add custom Plot</button>
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    <button type="button" class="btn btn-primary" id="add_estate">Save changes</button>
    </div>
    </div>
    </div>
    <!-- Add Estate Modal-->';
$req = $_GET['req'];

switch ($req) {
    case 'cl':
    include 'get_Recent_Clients.php';
    $table = new get_Recent_Clients();
    
        echo '
    
        <div class="col-md-12">
        <button class="btn btn-primary" data-toggle="modal" data-target="#add_client"><i class="fa fa-plus "></i> Add</button>
            <h3 class="page-header">
                <span id="page_header"> Clients </span>
            </h3>
        </div>
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
                        <tbody>
                        ' .$table->getClients(). '    
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>'.$GLOBALS['client_modals'];
        break;

        case "ac":
        
            echo '
           ';
        break;

        case 'maa':
        include 'admin_accounts.php';
        $list = new admin_accounts();
        echo $list->getAccounts();//.$GLOBALS[''];
            break;

        case 'el':
            include 'list_estates.php';
            $list = new estates_list();
            echo $list->getResponse().$GLOBALS['estate_modals'];
            break;

            case 'rr':
            include 'list_rentals.php';
            $list = new rental_list();
            echo $list->getResponse().$GLOBALS['rent_modals'];
            break;

            case 'plist':
            include 'list_personel.php';
            $list = new personel_list();
            echo $list->getResponse();
            break;
    
    default:
       echo 404;
        break;
}