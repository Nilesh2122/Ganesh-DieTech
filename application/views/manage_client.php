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
            <h3 class="text-themecolor m-b-0 m-t-0">Manage Client</h3>
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
                    <h4 class="card-title d-inline-block">Client List</h4>
                    <a href="<?php echo base_url(); ?>clients/add_client"><button class="btn d-inline-block float-right add-btn"> Add Client</button></a>
                    <div class="table-responsive m-t-10">
                        <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Sr. No.</th>
                                    <th>Client Name</th>
                                    <th>City</th>
                                    <th>Die Type</th>
                                    <th>Drum Size</th>
                                    <th>Discount</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach($client as $row){?>
                                <tr>
                                    <td><?php echo $row['client_id'];?></td>
                                    <td><?php echo $row['name'];?></td>
                                    <td><?php echo $row['city'];?></td>
                                    <td><?php echo $row['die_type'];?></td>
                                    <td><?php echo $row['drum_size'];?></td>
                                    <td><?php echo $row['discount'];?></td>
                                    <td>
                                        <a href="<?php echo base_url(); ?>clients/edit_client/<?php echo $row['client_id'];?>"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                        <a class="pl-2" style="cursor:pointer;color:red" onclick="delete_client(<?php echo $row['client_id']; ?>)"><i class="fa fa-trash" aria-hidden="true"></i></a>
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
            