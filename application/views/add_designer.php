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
            <h3 class="text-themecolor m-b-0 m-t-0">Add Designer</h3>
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
                    <form action="" id="add_designer" method="Post" enctype="multipart/form-data">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Designer Name</label>
                                        <input type="text" id="name" name="name" class="form-control" placeholder="Enter Name" required>
                                        <!-- <small class="form-control-feedback"> This is inline help </small> --> 
                                    </div>
                                </div>
                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Email Id</label>
                                        <input type="email" id="email" name="email" class="form-control" placeholder="Enter Email Id" autocomplete="off" required>
                                        <!-- <small class="form-control-feedback"> This field has error. </small> --> 
                                    </div>
                                </div>
                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Password</label>
                                        <input type="password" id="password" name="password" class="form-control position-relative" placeholder="Enter password" autocomplete="off" required>
                                        <span toggle="#password-field" class="fa fa-fw fa-eye field_icon toggle-password"></span> 
                                        <!-- <small class="form-control-feedback"> This field has error. </small> --> 
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Confirm Password</label>
                                        <input type="password" id="cpassword" name="cpassword" class="form-control position-relative" placeholder="Enter Confirm Password" required>
                                        <span toggle="#password-field" class="fa fa-fw fa-eye field_icon toggle-password-confirm"></span>
                                        <small class="feedback-cpassword" style="color:red"> </small> 
                                        <!-- <small class="form-control-feedback"> This field has error. </small> --> 
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
