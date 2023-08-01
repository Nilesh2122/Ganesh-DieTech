var base_url = $('#base_url').val();
$(document).ready(function() {
    $('#example23').DataTable({
        order: [[ 0, "desc" ]],
        lengthMenu: [
            [10, 25, 50, -1],
            [10, 25, 50, 'All'],
        ],
        dom: 'Blfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
});
//console.log(base_url);
$(document).on('click', '.toggle-password', function() {
    $(this).toggleClass("fa-eye fa-eye-slash");
    var input = $("#password");
    input.attr('type') === 'password' ? input.attr('type','text') : input.attr('type','password')
});

$(document).on('click', '.toggle-password-confirm', function() {
    $(this).toggleClass("fa-eye fa-eye-slash");
    var input = $("#cpassword");
    input.attr('type') === 'password' ? input.attr('type','text') : input.attr('type','password')
});
$('#add_designer').on('submit', function(e)
{
    var password = document.getElementById('password').value;
    var cpassword = document.getElementById('cpassword').value;

    if(password != cpassword)
    {
        $('.feedback-cpassword').html("Password not match. Please try again!").fadeIn().delay(3000).fadeOut();
        $('#cpassword').focus();
        return false;
    }
    else 
    {
        e.preventDefault();
        $.ajax({
            url: base_url+"designers/add_designer_process", 
            method:"POST",
            dataType : "json",
            data:new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            beforeSend: function() 
            {
                $('.submit-btn').css('display','none');
                $('.loading-btn').css('display','block');
            },
            success:function(json)
            {
                console.log(json);
                if(json.status_code == '1')
                {
                    swal({
                    title: "Success!",
                    text: json.message,
                    type: "success",
                    confirmButtonText: "OK"
                    }).then(function(isConfirm) 
                    {
                    if (isConfirm) 
                    {
                        window.location.href = base_url+"designers";
                    }
                    });
                }
                else
                {
                    swal({
                    title: "Errors!",
                    text: json.message,
                    type: "error",
                    confirmButtonText: "OK"
                    }).then(function(isConfirm) 
                    {
                    if (isConfirm) 
                    {
                        location.reload(true);
                    }
                    });
                }
            },
            complete: function() 
            {
                $('.submit-btn').css('display','inline');
                $('.loading-btn').css('display','none');         
            }
        });
    }
});
$('#edit_designer').on('submit', function(e)
{
    var password = document.getElementById('password').value;
    var cpassword = document.getElementById('cpassword').value;
    if(password != cpassword)
    {
        $('.feedback-cpassword').html("Password not match. Please try again!").fadeIn().delay(3000).fadeOut();
        $('#cpassword').focus();
        return false;
    }
    else 
    {
        e.preventDefault();
        $.ajax({
            url: base_url+"designers/edit_designer_process", 
            method:"POST",
            dataType : "json",
            data:new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            beforeSend: function() 
            {
                $('.submit-btn').css('display','none');
                $('.loading-btn').css('display','block');
            },
            success:function(json)
            {
                console.log(json);
                if(json.status_code == '1')
                {
                    swal({
                    title: "Success!",
                    text: json.message,
                    type: "success",
                    confirmButtonText: "OK"
                    }).then(function(isConfirm) 
                    {
                    if (isConfirm) 
                    {
                        window.location.href = base_url+"designers";
                    }
                    });
                }
                else
                {
                    swal({
                    title: "Errors!",
                    text: json.message,
                    type: "error",
                    confirmButtonText: "OK"
                    }).then(function(isConfirm) 
                    {
                    if (isConfirm) 
                    {
                        location.reload(true);
                    }
                    });
                }
            },
            complete: function() 
            {
                $('.submit-btn').css('display','inline');
                $('.loading-btn').css('display','none');         
            }
        });
    }
});
function delete_designer(e)
{
    swal({
        title: "Are you sure?",
        text: "",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Yes, delete it!",
        cancelButtonText: "No, cancel it!",
        closeOnConfirm: false,
        closeOnCancel: false
    }).then(function(isConfirm) 
            {
        if (isConfirm.value == true) 
        {
            window.location.href =  base_url+"designers/delete_designer/"+e;
        }
        else {
            swal("Cancelled", "", "error");
        }
    });
}


$('#add_client').on('submit', function(e)
{
    e.preventDefault();
    $.ajax({
        url: base_url+"Clients/add_client_process", 
        method:"POST",
        dataType : "json",
        data:new FormData(this),
        contentType: false,
        cache: false,
        processData:false,
        beforeSend: function() 
        {
            $('.submit-btn').css('display','none');
            $('.loading-btn').css('display','block');
        },
        success:function(json)
        {
            console.log(json);
            if(json.status_code == '1')
            {
                swal({
                title: "Success!",
                text: json.message,
                type: "success",
                confirmButtonText: "OK"
                }).then(function(isConfirm) 
                {
                if (isConfirm) 
                {
                    window.location.href = base_url+"clients";
                }
                });
            }
            else
            {
                swal({
                title: "Errors!",
                text: json.message,
                type: "error",
                confirmButtonText: "OK"
                }).then(function(isConfirm) 
                {
                if (isConfirm) 
                {
                    location.reload(true);
                }
                });
            }
        },
        complete: function() 
        {
            $('.submit-btn').css('display','inline');
            $('.loading-btn').css('display','none');         
        }
    });
});

$('#edit_client').on('submit', function(e)
{
    e.preventDefault();
    $.ajax({
        url: base_url+"Clients/edit_client_process", 
        method:"POST",
        dataType : "json",
        data:new FormData(this),
        contentType: false,
        cache: false,
        processData:false,
        beforeSend: function() 
        {
            $('.submit-btn').css('display','none');
            $('.loading-btn').css('display','block');
        },
        success:function(json)
        {
            console.log(json);
            if(json.status_code == '1')
            {
                swal({
                title: "Success!",
                text: json.message,
                type: "success",
                confirmButtonText: "OK"
                }).then(function(isConfirm) 
                {
                if (isConfirm) 
                {
                    window.location.href = base_url+"clients";
                }
                });
            }
            else
            {
                swal({
                title: "Errors!",
                text: json.message,
                type: "error",
                confirmButtonText: "OK"
                }).then(function(isConfirm) 
                {
                if (isConfirm) 
                {
                    location.reload(true);
                }
                });
            }
        },
        complete: function() 
        {
            $('.submit-btn').css('display','inline');
            $('.loading-btn').css('display','none');         
        }
    });
});

$('#add_client_designer').on('submit', function(e)
{
    e.preventDefault();
    $.ajax({
        url: base_url+"Clients/add_client_process", 
        method:"POST",
        dataType : "json",
        data:new FormData(this),
        contentType: false,
        cache: false,
        processData:false,
        success:function(json)
        {
            console.log(json);
            if(json.status_code == '1')
            {
                swal({
                title: "Success!",
                text: json.message,
                type: "success",
                confirmButtonText: "OK"
                }).then(function(isConfirm) 
                {
                if (isConfirm) 
                {
                    location.reload(true);
                }
                });
            }
            else
            {
                swal({
                title: "Errors!",
                text: json.message,
                type: "error",
                confirmButtonText: "OK"
                }).then(function(isConfirm) 
                {
                if (isConfirm) 
                {
                    location.reload(true);
                }
                });
            }
        }
    });
});

$('#custom_value').on('submit', function(e)
{
    e.preventDefault();
    $.ajax({
        url: base_url+"Customvalue/add_customvalue_process", 
        method:"POST",
        dataType : "json",
        data:new FormData(this),
        contentType: false,
        cache: false,
        processData:false,
        beforeSend: function() 
        {
            $('.submit-btn').css('display','none');
            $('.loading-btn').css('display','block');
        },
        success:function(json)
        {
            console.log(json);
            if(json.status_code == '1')
            {
                swal({
                title: "Success!",
                text: json.message,
                type: "success",
                confirmButtonText: "OK"
                }).then(function(isConfirm) 
                {
                if (isConfirm) 
                {
                    location.reload(true);
                }
                });
            }
            else
            {
                swal({
                title: "Errors!",
                text: json.message,
                type: "error",
                confirmButtonText: "OK"
                }).then(function(isConfirm) 
                {
                if (isConfirm) 
                {
                    location.reload(true);
                }
                });
            }
        },
        complete: function() 
        {
            $('.submit-btn').css('display','inline');
            $('.loading-btn').css('display','none');         
        }
    });
});

$('#wood_price').on('submit', function(e)
{
    e.preventDefault();
    $.ajax({
        url: base_url+"Customvalue/add_woodprice_process", 
        method:"POST",
        dataType : "json",
        data:new FormData(this),
        contentType: false,
        cache: false,
        processData:false,
        beforeSend: function() 
        {
            $('.submit-btn').css('display','none');
            $('.loading-btn').css('display','block');
        },
        success:function(json)
        {
            console.log(json);
            if(json.status_code == '1')
            {
                swal({
                title: "Success!",
                text: json.message,
                type: "success",
                confirmButtonText: "OK"
                }).then(function(isConfirm) 
                {
                if (isConfirm) 
                {
                    location.reload(true);
                }
                });
            }
            else
            {
                swal({
                title: "Errors!",
                text: json.message,
                type: "error",
                confirmButtonText: "OK"
                }).then(function(isConfirm) 
                {
                if (isConfirm) 
                {
                    location.reload(true);
                }
                });
            }
        },
        complete: function() 
        {
            $('.submit-btn').css('display','inline');
            $('.loading-btn').css('display','none');         
        }
    });
});
$('#select_client').on('change', function() {
    selectedValue = this.value;
    $("#duplicate_select_client").val(selectedValue);
    get_client_discount(selectedValue);
});
$('#duplicate_select_client').on('change', function() {
    selectedValue = this.value;
    get_client_discount(selectedValue);
});
function get_client_discount(selectedValue)
{
    $.ajax({
        type: "POST",
        dataType: "json",
        url: base_url+"Createquotations/get_client_discount", 
        async: false,
        data: "client_id=" + encodeURIComponent(selectedValue),
        beforeSend: function() {},
        success: function(json) {
            console.log(json);
            $("#discount").val(json.discount);
        }
    });
}



$('#total_amount').on('submit', function(e)
{
    var wooddie = document.getElementById('wooddie').value;
    var wooddie = $.parseJSON(wooddie);
    const woodDiaPrice = wooddie;

    var woodworkhalfperi = document.getElementById('woodworkhalfperi').value;
    var woodworkhalfperi = $.parseJSON(woodworkhalfperi);
    const woodWorkHalfPeri = woodworkhalfperi;
  
    var woodworksemiperi_input = document.getElementById('woodworksemiperi').value;
    var woodworksemiperi_array = $.parseJSON(woodworksemiperi_input);
    const woodworksemiperia = woodworksemiperi_array;
    
  
    const cutting = Number(document.getElementById('cutting').value);
    const creasing = Number(document.getElementById('creasing').value);
    const width = Number(document.getElementById('width').value);
    const length = Number(document.getElementById('length').value);
    const discount = Number(document.getElementById('discount').value);
    const totalWidth = width + 120;
    const totalLength = length + 250;
    // Total Wood Calculation

    const tempDiaValue = Number(document.getElementById('temp').value);
    //console.log(tempDiaValue);
    //console.log(woodWorkHalfPeri[tempDiaValue]);

    if( totalWidth < woodWorkHalfPeri[tempDiaValue] ){
    var woodPrice = (woodDiaPrice[tempDiaValue] * 1)*(totalLength/1000);
    console.log(woodPrice);
    }else if ( totalWidth >= woodWorkHalfPeri[tempDiaValue] && totalWidth <= woodworksemiperia[tempDiaValue] ) {
    var woodPrice = (woodDiaPrice[tempDiaValue] * 1.5)*(totalLength/1000);
    console.log(woodPrice);
    }else if ( totalWidth > woodworksemiperia[tempDiaValue]) {
    var woodPrice = (woodDiaPrice[tempDiaValue] * 2)*(totalLength/1000);
    console.log(woodPrice);
    }

    var customvalue_input = document.getElementById('customvalue').value;
    var customvalue_array = $.parseJSON(customvalue_input);
    console.log(customvalue_array['creasing_price']);

    const stripping = Math.round(cutting * customvalue_array['stripping_per']);
    document.getElementById('stripping').innerText = stripping;
    $('#stripping_input').val(stripping);

    // Total Cutting Calculation
    const totalCutting = Math.round(((cutting+stripping)/1000)*customvalue_array['cutting_price']);
    document.getElementById('totalCutting').innerText = totalCutting;
    $('#totalCutting_input').val(totalCutting);

    // Total Creasing Calculation
    const totalCreasing = Math.round((creasing/1000)*customvalue_array['creasing_price']);
    document.getElementById('totalCreasing').innerText = totalCreasing;
    $('#totalCreasing_input').val(totalCreasing);

    // ALLUMINIUM SLUG Calculation
    const alluminiumSlug = Math.round(((length/100) * (width/100)) * customvalue_array['slug_price']);
    document.getElementById('alluminiumSlug').innerText = alluminiumSlug;
    $('#alluminiumSlug_input').val(alluminiumSlug);

    // RUBBER SLUG Calculation
    const rubberCalc = Math.round(((cutting/1000) + (creasing/1000))*customvalue_array['rubber_price']);
    document.getElementById('rubber').innerText = rubberCalc;
    $('#rubber_input').val(rubberCalc);

    // Welding Calculation
    const weldingCalc = Math.round((totalCutting/1000)*customvalue_array['welding_price']);
    document.getElementById('welding').innerText = weldingCalc;
    $('#welding_input').val(weldingCalc);
    
    // FITTING Calculation
    const fittingCalc = Math.round(((cutting + creasing)/1000) * customvalue_array['fitting_price']);
    document.getElementById('fitting').innerText = fittingCalc;
    $('#fitting_input').val(fittingCalc);

    // LASER CUTTING Calculation
    const laserCutting = Math.round(((totalCutting + totalCreasing)/1000)*customvalue_array['laser_price']);
    document.getElementById('lasercutting').innerText = laserCutting;
    $('#lasercutting_input').val(fittingCalc);

    // Total Amount Calculation  
    const totalAmount = Math.round((totalCutting + totalCreasing + alluminiumSlug + rubberCalc + weldingCalc + fittingCalc + laserCutting + woodPrice) - discount);
    $('#totalamount_input').val(totalAmount);
    console.log(totalAmount);
    document.getElementById('totalamount').innerText = totalAmount;

    e.preventDefault();
    $.ajax({
        url: base_url+"Createquotations/add_quotations_process", 
        method:"POST",
        dataType : "json",
        data:new FormData(this),
        contentType: false,
        cache: false,
        processData:false,
        beforeSend: function() 
        {
            $('.submit-btn').css('display','none');
            $('.loading-btn').css('display','block');
        },
        success:function(json)
        {
            console.log(json);
            if(json.status_code == '1')
            {
                swal({
                title: "Success!",
                text: json.message,
                type: "success",
                confirmButtonText: "OK"
                });/* .then(function(isConfirm) 
                {
                if (isConfirm) 
                {
                    location.reload(true);
                }
                }); */
            }
            else
            {
                swal({
                title: "Errors!",
                text: json.message,
                type: "error",
                confirmButtonText: "OK"
                }).then(function(isConfirm) 
                {
                if (isConfirm) 
                {
                    location.reload(true);
                }
                });
            }
        },
        complete: function() 
        {
            $('.submit-btn').css('display','inline');
            $('.loading-btn').css('display','none');         
        }
    });
});

function getSelectedDiameter(){
    var selectedDiameter = document.getElementById("wood-diameter").value;
    //console.log(selectedDiameter);
    document.getElementById("temp").value = selectedDiameter;
}
function getSelectwoodprice(){
    var woodprice = document.getElementById("wood-price").value;
    $.ajax({
        type: "POST",
        dataType: "json",
        url: base_url+"Customvalue/get_wood_price", 
        async: false,
        data: "woodprice=" + encodeURIComponent(woodprice),
        beforeSend: function() {},
        success: function(json) {
            console.log(json);
            $("#170").val(json['wood_price']['wood_value']['170']);
            $("#260").val(json['wood_price']['wood_value']['260']);
            $("#360").val(json['wood_price']['wood_value']['360']);
            $("#370").val(json['wood_price']['wood_value']['370']);
            $("#390").val(json['wood_price']['wood_value']['390']);
            $("#410").val(json['wood_price']['wood_value']['410']);
            $("#432").val(json['wood_price']['wood_value']['432']);
            $("#450").val(json['wood_price']['wood_value']['450']);
            $("#476").val(json['wood_price']['wood_value']['476']);
            $("#487").val(json['wood_price']['wood_value']['487']);
            $("#502").val(json['wood_price']['wood_value']['502']);
            $("#550").val(json['wood_price']['wood_value']['550']);
            $("#650").val(json['wood_price']['wood_value']['650']);
            $("#170").val(json['wood_price']['wood_value']['170']);
            $("#692").val(json['wood_price']['wood_value']['692']);
        }
    });
}
  
function delete_quotation(e)
{
    swal({
        title: "Are you sure?",
        text: "",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Yes, delete it!",
        cancelButtonText: "No, cancel it!",
        closeOnConfirm: false,
        closeOnCancel: false
    }).then(function(isConfirm) 
            {
        if (isConfirm.value == true) 
        {
            window.location.href =  base_url+"Quotations/delete_quotations/"+e;
        }
        else {
            swal("Cancelled", "", "error");
        }
    });
}
function resetForm(){
    document.getElementById("total_amount").reset();
}
$('#edit_profile').on('submit', function(e)
{
    e.preventDefault();
    $.ajax({
        url: base_url+"Account/edit_profile_process", 
        method:"POST",
        dataType : "json",
        data:new FormData(this),
        contentType: false,
        cache: false,
        processData:false,
        beforeSend: function() 
        {
            $('.submit-btn').css('display','none');
            $('.loading-btn').css('display','block');
        },
        success:function(json)
        {
            console.log(json);
            if(json.status_code == '1')
            {
                swal({
                title: "Success!",
                text: json.message,
                type: "success",
                confirmButtonText: "OK"
                }).then(function(isConfirm) 
                {
                if (isConfirm) 
                {
                    location.reload(true);
                }
                });
            }
            else
            {
                swal({
                title: "Errors!",
                text: json.message,
                type: "error",
                confirmButtonText: "OK"
                }).then(function(isConfirm) 
                {
                if (isConfirm) 
                {
                    location.reload(true);
                }
                });
            }
        },
        complete: function() 
        {
            $('.submit-btn').css('display','inline');
            $('.loading-btn').css('display','none');         
        }
    });
});

document.getElementById('client_selection').addEventListener('submit', function (event) {
    // Prevent the default form submission
    $('#client-section').hide();
    $('#calculator-section').show();
    event.preventDefault();
    const clickedButton = event.submitter;
    if (clickedButton.name === 'Flat') {
        $('#die_type').val('Flat');
    }else {
        $('#die_type').val('Rotary');
    }
});