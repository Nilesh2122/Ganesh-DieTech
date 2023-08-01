<style>
    .card-outline-info .card-header{
        background: #daa046;
        border-color: #daa046;
    }
    .add-btn{
        background: #daa046;
        color:#fff;
        width: 20%;
    }
    .toggle-password,.toggle-password-confirm{
        position: absolute;
        right: 5%;
        bottom: 38%;
    }
    .swal2-popup .swal2-styled.swal2-confirm{
        background: #daa046;
    }
    .add-client ,.select-btn{
        height: calc(2.25rem + 2px);
        padding: 0px 30px;
        background: #323232;
        color: #fff;
    }
    .die-img {
        background: white;
        text-align: center;
        padding: 20px;
        border-radius: 10px;
        margin: 0 auto;
        margin-bottom: 20px;
        min-height: 250px;
        max-height: 250px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .die-img img{
        width: 80%;
    }
    .custom-select{
        background-color: #fff;
    }
    
    .form-calc{
        background-color: #ffffff;
        padding: 30px 50px;
        border-radius: 20px;
    }
    
    .custom-card{
        background-color: #ffffff;
        padding: 40px 20px;
        margin: 10px;
        border-radius: 20px;
    }
    .first-row .custom-card{
        margin-top:0px;
    }
    .custom-card p{
        text-align: center;
    }
    .information-block{
       /*  padding: 10px; */
    }
    .output-heading{
        font-size: 14px;
        font-weight: 600;
        margin-bottom: 0;
    }
    .output-value{
        font-size: 30px;
        font-weight: bold;
        margin-bottom: 0;
    }

    .total-amount{
        background-color: #28C92E;
        color: #ffffff;
    }
    #client-section{
        width: 40%;
        margin: 20px auto;
    }
    .cal-btn,.reset-btn{
        width: 100%;
        margin: 5px;
        padding: 12px;
        color:#fff;
    }
    .cal-btn{
        background:#DAA046;
    }
    .reset-btn{
        background:#243062;
    }
</style>
<div class="container-fluid">
   
    <!-- <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Add Quotations</h3>
        </div>
    </div> -->
    <div class="row">
        <div class="col-lg-12">
            <div class="">
                <!-- <div class="card-header">
                    <h4 class="m-b-0 text-white">Add Client</h4>
                </div> -->
                <div class="card-body">
                        <div class="form-body">
                            <form action="" id="client_selection" method="Post" enctype="multipart/form-data">
                                <div id="client-section">
                                    <div class="">
                                        <div class="form-group">
                                            <label class="control-label">Client Name</label>
                                            <div class="form-group row">
                                                <div class="col-10">
                                                    <select class="custom-select col-12" id="select_client" required>
                                                        <option value="">Select</option>
                                                        <?php foreach($client as $row){?>
                                                        <option value="<?php echo $row['client_id'];?>"><?php echo $row['name'];?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                                <label for="example-month-input" class=""><button type="button" class="btn add-client" data-toggle="modal" data-target="#responsive-modal">Add</button></label>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/row-->
                                    
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group text-center">
                                                <div class="die-img">
                                                    <img src="<?php echo base_url(); ?>assets/images/flat-die.jpg" alt="homepage" class="dark-logo" />
                                                </div>
                                                <label class="control-label">Flat Die</label><br>
                                                <button type="submit" class="btn select-btn" value="Flat" name="Flat"> Select</button>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group  text-center">
                                                <div class="die-img">
                                                    <img src="<?php echo base_url(); ?>assets/images/rotary-die.jpg" alt="homepage" class="dark-logo" />
                                                </div>
                                                <label class="control-label">Rotary Die</label><br>
                                                <button type="submit" class="btn select-btn" value="Rotary" name="Rotary"> Select</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <div class="row" id="calculator-section" style="display:none"> <!-- style="display:none" -->
                                <div class="col-lg-6 col-sm-12">
                                    <div class="form-calc">
                                        <h3 style="text-align: center; padding-bottom: 20px;font-weight: 600;">Calculator</h3>
                                        <form action="" id="total_amount" method="Post" enctype="multipart/form-data">
                                            <input type="hidden" name="" value="" id="temp">
                                            <?php
                                            foreach($data['wood_price'] as $row){
                                            ?>
                                            <input type="hidden" name="<?php echo $row['wood_price']; ?>" value='<?php echo $row['wood_value']; ?>' id="<?php echo $row['wood_price']; ?>">
                                            <?php } ?>
                                            <input type="hidden" name="customvalue" value='<?php echo $data['customvalue']; ?>' id="customvalue">
                                            <input type="hidden" id="discount" name="discount">
                                            <input type="hidden" id="die_type" name="die_type">
                                            <input type="hidden" id="stripping_input" name="stripping_input">
                                            <input type="hidden" id="totalCutting_input" name="totalCutting_input">
                                            <input type="hidden" id="totalCreasing_input" name="totalCreasing_input">
                                            <input type="hidden" id="alluminiumSlug_input" name="alluminiumSlug_input">
                                            <input type="hidden" id="rubber_input" name="rubber_input">
                                            <input type="hidden" id="welding_input" name="welding_input">
                                            <input type="hidden" id="fitting_input" name="fitting_input">
                                            <input type="hidden" id="lasercutting_input" name="lasercutting_input">
                                            <input type="hidden" id="totalamount_input" name="totalamount_input">
                                            <div class="form-group">
                                                <label class="control-label">Client Name</label>
                                                <div class="form-group row">
                                                    <div class="col-12">
                                                        <select id="duplicate_select_client" name="duplicate_select_client" class="custom-select col-12" required>
                                                            <option value="">Select</option>
                                                            <?php foreach($client as $row){?>
                                                            <option value="<?php echo $row['client_id'];?>"><?php echo $row['name'];?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Wood Diameter</label>
                                                <div class="form-group row">
                                                    <div class="col-12">
                                                        <select class="custom-select col-12" id="wood-diameter" name="wood-diameter" onchange="getSelectedDiameter();" required>
                                                            <option value="">Select diameter</option>
                                                            <option value="170">170</option>
                                                            <option value="260">260</option>
                                                            <option value="360">360</option>
                                                            <option value="370">370</option>
                                                            <option value="390">390</option>
                                                            <option value="410">410</option>
                                                            <option value="432">432</option>
                                                            <option value="450">450</option>
                                                            <option value="476">476</option>
                                                            <option value="487">487</option>
                                                            <option value="502">502</option>
                                                            <option value="550">550</option>
                                                            <option value="650">650</option>
                                                            <option value="692">692</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Cutting</label>
                                                <input type="textbox" class="form-control" id="cutting" name="cutting" placeholder="Enter value" required oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Creasing</label>
                                                <input type="textbox" class="form-control" id="creasing" name="creasing" placeholder="Enter value" required oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Length</label>
                                                <input type="textbox" class="form-control" id="length" name="length" placeholder="Enter value" required oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Width</label>
                                                <input type="textbox" class="form-control" id="width" name="width" placeholder="Enter value" required oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                            </div>
                                            
                                            <div class="form-group" style="display: flex;justify-content: space-around;margin: 0;">
                                                <button type="submit" class="btn cal-btn">Calculate</button>
                                                <button type="button" class="btn reset-btn" onclick="resetForm()">Reset</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12 information-block">
                                    <div class="row first-row">
                                        <div class="col custom-card">
                                            <p class="output-heading">STRIPPING</p>
                                            <p class="output-value" id="stripping">0</p>
                                        </div>
                                        <div class="col custom-card">
                                            <p class="output-heading">Total Cutting</p>
                                            <p class="output-value" id="totalCutting">0</p>
                                        </div>
                                        <div class="col custom-card">
                                            <p class="output-heading">Total Creasing</p>
                                            <p class="output-value" id="totalCreasing">0</p>
                                        </div>


                                    </div>
                                    <div class="row second-row">
                                        <div class="col custom-card">
                                            <p class="output-heading">ALLUMINIUM SLUG</p>
                                            <p class="output-value" id="alluminiumSlug">0</p>
                                        </div>
                                        <div class="col custom-card">
                                            <p class="output-heading">RUBBER</p>
                                            <p class="output-value" id="rubber">0</p>
                                        </div>
                                        <div class="col custom-card">
                                            <p class="output-heading">WELDING</p>
                                            <p class="output-value" id="welding">0</p>
                                        </div>


                                    </div>
                                    <div class="row third-row">
                                        <div class="col custom-card">
                                            <p class="output-heading">FITTING</p>
                                            <p class="output-value" id="fitting">0</p>
                                        </div>
                                        <div class="col custom-card">
                                            <p class="output-heading">LASER CUTTING</p>
                                            <p class="output-value" id="lasercutting">0</p>
                                        </div>
                                        <div class="col custom-card total-amount">
                                            <p class="output-heading">TOTAL AMOUNT</p>
                                            <p class="output-value" id="totalamount">0</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!--/row-->
                            
                        <!-- <div class="form-actions">
                            <button type="submit" class="btn add-btn"> Save</button>
                        </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
<div id="responsive-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Client</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form action="" id="add_client_designer" method="Post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Client Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">City</label>
                        <input type="text" class="form-control" id="city" name="city" required>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Die Type</label>
                        <div class="form-check">
                            <input type="checkbox" id="basic_checkbox_2" name="die_type[]" class="filled-in m-r-3" value="Rotary"/>
                            <label for="basic_checkbox_2" class="mr-4">Rotary Die</label>

                            <input type="checkbox" id="basic_checkbox_3" name="die_type[]" value="Flat" class="filled-in" />
                            <label for="basic_checkbox_3">Flat Die</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Drum Sizes</label>
                        <div class="form-group">
                        <div class="d-inline-block" style="width:30%">
                            <input type="text" class="form-control" placeholder="Enter" name="drumsize[]" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required>
                        </div>
                        <div class="d-inline-block" style="width:30%">
                            <input type="text" class="form-control" placeholder="Enter" name="drumsize[]" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                        </div>
                        <div class="d-inline-block" style="width:30%">
                            <input type="text" class="form-control" placeholder="Enter" name="drumsize[]" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                        </div>
                        <input type="hidden" id="discount" name="discount" value="0">
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" style="width:100%" class="btn add-btn">Save</button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</div>
