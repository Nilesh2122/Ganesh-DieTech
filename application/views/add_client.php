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
            <h3 class="text-themecolor m-b-0 m-t-0">Add Client</h3>
            <!-- <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Form</li>
            </ol> -->
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-outline-info">
                <!-- <div class="card-header">
                    <h4 class="m-b-0 text-white">Add Client</h4>
                </div> -->
                <div class="card-body">
                    <form action="" id="add_client" method="Post" enctype="multipart/form-data">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Client Name</label>
                                        <input type="text" id="name" name="name" class="form-control" placeholder="Enter" required>
                                        <!-- <small class="form-control-feedback"> This is inline help </small> --> 
                                    </div>
                                </div>
                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">City</label>
                                        <input type="text" id="city" name="city" class="form-control" placeholder="Enter" required>
                                        <!-- <small class="form-control-feedback"> This field has error. </small> --> 
                                    </div>
                                </div>
                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Die Type</label>
                                        <div class="form-check">
                                            <input type="checkbox" id="basic_checkbox_2" name="die_type[]" class="filled-in m-r-3" value="Rotary"/>
                                            <label for="basic_checkbox_2" class="mr-4">Rotary Die</label>

                                            <input type="checkbox" id="basic_checkbox_3" name="die_type[]" value="Flat" class="filled-in" />
                                            <label for="basic_checkbox_3">Flat Die</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col-md-9">
                                        <label>Drum Sizes</label>
                                        <div class="form-group">
                                        <div class="d-inline-block" style="width:22%">
                                            <input type="text" class="form-control" placeholder="Enter" name="drumsize[]" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required>
                                        </div>
                                        <div class="d-inline-block" style="width:22%">
                                            <input type="text" class="form-control" placeholder="Enter" name="drumsize[]" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                        </div>
                                        <div class="d-inline-block" style="width:22%">
                                            <input type="text" class="form-control" placeholder="Enter" name="drumsize[]" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                        </div>
                                        </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Discount</label>
                                        <input type="text" id="discount" name="discount" class="form-control" placeholder="Enter" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required>
                                        <!-- <small class="form-control-feedback"> This field has error. </small> --> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn add-btn"> Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>