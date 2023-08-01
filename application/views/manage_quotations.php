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
            <h3 class="text-themecolor m-b-0 m-t-0">Manage Quotations</h3>
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
                    <h4 class="card-title d-inline-block">Quotations List</h4>
                    <div class="table-responsive m-t-10">
                        <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Sr. No.</th>
                                    <th>Client Name</th>
                                    <th>Total Amount</th>
                                    <th>Created At </th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach($quotations as $row){?>
                                <tr>
                                    <td><?php echo $row['quotation_id'];?></td>
                                    <td><?php echo $row['name'];?></td>
                                    <td><?php echo $row['total_amount'];?></td>
                                    <td><?php echo $row['created_at'];?></td>
                                    <td>
                                        <a style="cursor:pointer" data-toggle="modal" data-target="#view_quotation_<?php echo $row['quotation_id'];?>"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        <a class="pl-2" style="cursor:pointer;color:red" onclick="delete_quotation(<?php echo $row['quotation_id']; ?>)"><i class="fa fa-trash" aria-hidden="true"></i></a>
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

<?php foreach($quotations as $row){?>
<div id="view_quotation_<?php echo $row['quotation_id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content" style="color: #000;">
            <div class="modal-header">
                <h4 class="modal-title" style="color: #DAA046;font-weight: 500;"><?php echo $row['name'];?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body" style="border-bottom:1px solid #e9ecef;">
                <h5 style="color: #DAA046;padding-bottom: 15px;">Input Parameter</h5>
                <div class="row">
                    <div class="col-4">
                        <p style="margin: 0px !important;">Wood Diameter</p>
                        <p style="font-weight: 600;margin-bottom: 15px !important;"><?php echo $row['wood_diameter']; ?></p>
                    </div>
                    <div class="col-4">
                        <p style="margin: 0px !important;">Cutting</p>
                        <p style="font-weight: 600;margin-bottom: 15px !important;"><?php echo $row['cutting']; ?></p>
                    </div>
                    <div class="col-4">
                        <p style="margin: 0px !important;">Creasing</p>
                        <p style="font-weight: 600;margin-bottom: 15px !important;"><?php echo $row['creasing']; ?></p>
                    </div>
                    <div class="col-4">
                        <p style="margin: 0px !important;">Length</p>
                        <p style="font-weight: 600;margin-bottom: 15px !important;"><?php echo $row['length']; ?></p>
                    </div>
                    <div class="col-4">
                        <p style="margin: 0px !important;">Width</p>
                        <p style="font-weight: 600;margin-bottom: 15px !important;"><?php echo $row['width']; ?></p>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <h5 style="color: #DAA046;padding-bottom: 15px;">Output</h5>
                <div class="row">
                    <div class="col-4">
                        <p style="margin: 0px !important;">STRIPPING</p>
                        <p style="font-weight: 600;margin-bottom: 15px !important;"><?php echo $row['stripping']; ?></p>
                    </div>
                    <div class="col-4">
                        <p style="margin: 0px !important;">Total Cutting</p>
                        <p style="font-weight: 600;margin-bottom: 15px !important;"><?php echo $row['totalcutting']; ?></p>
                    </div>
                    <div class="col-4">
                        <p style="margin: 0px !important;">Total Creasing</p>
                        <p style="font-weight: 600;margin-bottom: 15px !important;"><?php echo $row['totalcreasing']; ?></p>
                    </div>
                    <div class="col-4">
                        <p style="margin: 0px !important;">ALLUMINIUM SLUG</p>
                        <p style="font-weight: 600;margin-bottom: 15px !important;"><?php echo $row['alluminiumslug']; ?></p>
                    </div>
                    <div class="col-4">
                        <p style="margin: 0px !important;">RUBBER</p>
                        <p style="font-weight: 600;margin-bottom: 15px !important;"><?php echo $row['rubber']; ?></p>
                    </div>
                    <div class="col-4">
                        <p style="margin: 0px !important;">WELDING</p>
                        <p style="font-weight: 600;margin-bottom: 15px !important;"><?php echo $row['welding']; ?></p>
                    </div>
                    <div class="col-4">
                        <p style="margin: 0px !important;">FITTING</p>
                        <p style="font-weight: 600;margin-bottom: 15px !important;"><?php echo $row['fitting']; ?></p>
                    </div>
                    <div class="col-4">
                        <p style="margin: 0px !important;">LASER CUTTING</p>
                        <p style="font-weight: 600;margin-bottom: 15px !important;"><?php echo $row['lasercutting']; ?></p>
                    </div>
                    <div class="col-4">
                        <p style="margin: 0px !important;">TOTAL AMOUNT</p>
                        <p style="font-weight: 600;margin-bottom: 15px !important;"><?php echo $row['total_amount']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>