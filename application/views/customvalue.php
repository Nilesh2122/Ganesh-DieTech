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
</style>
<div class="container-fluid">
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Custom value</h3>
            <!-- <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Form</li>
            </ol> -->
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="card card-outline-info">
                <div class="card-body">
                    <form action="" id="custom_value" method="Post" enctype="multipart/form-data">
                        <input type="hidden" name="value_id" value="<?php echo $data['customvalue']['value_id']; ?>" id="value_id">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Stripping Percentage</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" id="str_per" name="str_per" class="form-control" placeholder="Enter Value" min="0" max="100" value="<?php echo $data['customvalue']['stripping_per']; ?>" required oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Cutting Price</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="number" id="cut_price" name="cut_price" class="form-control" placeholder="Enter Value" value="<?php echo $data['customvalue']['cutting_price']; ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Creasing Price</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="number" id="creas_price" name="creas_price" class="form-control" placeholder="Enter Value" value="<?php echo $data['customvalue']['creasing_price']; ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Alluminium Slug Price</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="number" id="slug_price" name="slug_price" class="form-control" placeholder="Enter Value" value="<?php echo $data['customvalue']['slug_price']; ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Rubber Price</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="number" id="rubber_price" name="rubber_price" class="form-control" placeholder="Enter Value" value="<?php echo $data['customvalue']['rubber_price']; ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Welding Price</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="number" id="welding_price" name="welding_price" class="form-control" placeholder="Enter Value" value="<?php echo $data['customvalue']['welding_price']; ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Fitting Price</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="number" id="fitting_price" name="fitting_price" class="form-control" placeholder="Enter Value" value="<?php echo $data['customvalue']['fitting_price']; ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Laser Cutting Price</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="number" id="laser_price" name="laser_price" class="form-control" placeholder="Enter Value" value="<?php echo $data['customvalue']['laser_price']; ?>" required>
                                    </div>
                                </div>
                            </div>
                            
                        <div class="form-actions">
                            <button type="submit" class="btn add-btn" style="width:100%"> Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
        
        <div class="col-lg-6">
            <div class="card card-outline-info">
                <div class="card-body">
                    <form action="" id="wood_price" method="Post" enctype="multipart/form-data">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <h3 class=" m-b-20 m-t-0">Wood Price</h3>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <select class="custom-select col-12" id="wood-price" name="wood-price" required onchange="getSelectwoodprice();" >
                                            <option value="wooddie">Wood Die Price</option>
                                            <option value="woodworkhalfperi">Wood Work Half Peri</option>
                                            <option value="woodworksemiperi">wood Work Semi Peri</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-1">
                                    <div class="form-group">
                                        <label class="control-label">170</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="number" id="170" name="170" class="form-control" placeholder="Enter Value" value="<?php echo ($data['wood_price'] != '') ? $data['wood_price']['wood_value']['170'] : ''; ?>" required>
                                    </div>
                                </div>
                                <div class="col-md-2"></div>
                                <div class="col-md-1">
                                    <div class="form-group">
                                        <label class="control-label">260</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="number" id="260" name="260" class="form-control" placeholder="Enter Value" value="<?php echo ($data['wood_price'] != '') ? $data['wood_price']['wood_value']['260'] : ''; ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-1">
                                    <div class="form-group">
                                        <label class="control-label">360</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="number" id="360" name="360" class="form-control" placeholder="Enter Value" value="<?php echo ($data['wood_price'] != '') ? $data['wood_price']['wood_value']['360'] : ''; ?>" required>
                                    </div>
                                </div>
                                <div class="col-md-2"></div>
                                <div class="col-md-1">
                                    <div class="form-group">
                                        <label class="control-label">370</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="number" id="370" name="370" class="form-control" placeholder="Enter Value" value="<?php echo ($data['wood_price'] != '') ? $data['wood_price']['wood_value']['370'] : ''; ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-1">
                                    <div class="form-group">
                                        <label class="control-label">390</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="number" id="390" name="390" class="form-control" placeholder="Enter Value" value="<?php echo ($data['wood_price'] != '') ? $data['wood_price']['wood_value']['390'] : ''; ?>" required>
                                    </div>
                                </div>
                                <div class="col-md-2"></div>
                                <div class="col-md-1">
                                    <div class="form-group">
                                        <label class="control-label">410</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="number" id="410" name="410" class="form-control" placeholder="Enter Value" value="<?php echo ($data['wood_price'] != '') ? $data['wood_price']['wood_value']['410'] : ''; ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-1">
                                    <div class="form-group">
                                        <label class="control-label">432</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="number" id="432" name="432" class="form-control" placeholder="Enter Value" value="<?php echo ($data['wood_price'] != '') ? $data['wood_price']['wood_value']['432'] : ''; ?>" required>
                                    </div>
                                </div>
                                <div class="col-md-2"></div>
                                <div class="col-md-1">
                                    <div class="form-group">
                                        <label class="control-label">450</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="number" id="450" name="450" class="form-control" placeholder="Enter Value" value="<?php echo ($data['wood_price'] != '') ? $data['wood_price']['wood_value']['450'] : ''; ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-1">
                                    <div class="form-group">
                                        <label class="control-label">476</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="number" id="476" name="476" class="form-control" placeholder="Enter Value" value="<?php echo ($data['wood_price'] != '') ? $data['wood_price']['wood_value']['476'] : ''; ?>" required>
                                    </div>
                                </div>
                                <div class="col-md-2"></div>
                                <div class="col-md-1">
                                    <div class="form-group">
                                        <label class="control-label">487</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="number" id="487" name="487" class="form-control" placeholder="Enter Value" value="<?php echo ($data['wood_price'] != '') ? $data['wood_price']['wood_value']['487'] : ''; ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-1">
                                    <div class="form-group">
                                        <label class="control-label">502</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="number" id="502" name="502" class="form-control" placeholder="Enter Value" value="<?php echo ($data['wood_price'] != '') ? $data['wood_price']['wood_value']['502'] : ''; ?>" required>
                                    </div>
                                </div>
                                <div class="col-md-2"></div>
                                <div class="col-md-1">
                                    <div class="form-group">
                                        <label class="control-label">550</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="number" id="550" name="550" class="form-control" placeholder="Enter Value" value="<?php echo ($data['wood_price'] != '') ? $data['wood_price']['wood_value']['550'] : ''; ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-1">
                                    <div class="form-group">
                                        <label class="control-label">650</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="number" id="650" name="650" class="form-control" placeholder="Enter Value" value="<?php echo ($data['wood_price'] != '') ? $data['wood_price']['wood_value']['650'] : ''; ?>" required>
                                    </div>
                                </div>
                                <div class="col-md-2"></div>
                                <div class="col-md-1">
                                    <div class="form-group">
                                        <label class="control-label">692</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="number" id="692" name="692" class="form-control" placeholder="Enter Value" value="<?php echo ($data['wood_price'] != '') ? $data['wood_price']['wood_value']['692'] : ''; ?>" required>
                                    </div>
                                </div>
                            </div>
                            
                        <div class="form-actions">
                            <button type="submit" class="btn add-btn" style="width:100%"> Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
