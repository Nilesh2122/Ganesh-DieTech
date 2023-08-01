<style>
    .dt-buttons .dt-button{
        background: #daa046;
    }
    .add-btn{
        background: #daa046;
        color:#fff;
    }
    .dataTables_wrapper .dataTables_paginate .paginate_button.current, .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover{
        background-color: #daa046;
        border: 1px solid #daa046;
    }
</style>
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Manage Designer</h3>
           <!--  <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Table Data table</li>
            </ol> -->
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title d-inline-block">Designer List</h4>
                    <a href="<?php echo base_url(); ?>designers/add_designer"><button class="btn d-inline-block float-right add-btn"> Add Designer</button></a>
                    <div class="table-responsive m-t-10">
                        <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Sr. No.</th>
                                    <th>Designer Name</th>
                                    <th>Email Id</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach($designer as $row){?>
                                <tr>
                                    <td><?php echo $row['user_id'];?></td>
                                    <td><?php echo $row['name'];?></td>
                                    <td><?php echo $row['email'];?></td>
                                    <td>
                                        <a href="<?php echo base_url(); ?>designers/edit_designer/<?php echo $row['user_id'];?>"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                        <a class="pl-2" style="cursor:pointer;color:red" onclick="delete_designer(<?php echo $row['user_id']; ?>)"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
            