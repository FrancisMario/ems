<?php 


// add estate Modal
echo '
<!-- Add Estate Modal -->







        <!-- Add Client Modal -->
<div class="modal fade add_client" id="add_client" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
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
        <!-- Add Client Modal-->
        ';
       