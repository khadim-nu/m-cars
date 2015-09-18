/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function myDateFormatter() {
    var d = new Date(dateObject);
    var day = d.getDate();
    var month = d.getMonth() + 1;
    var year = d.getFullYear();
    if (day < 10) {
        day = "0" + day;
    }
    if (month < 10) {
        month = "0" + month;
    }
    var date = day + "/" + month + "/" + year;

    return date;
}


function  today_date() {
    var todayTimeStamp = new Date; // Unix timestamp in milliseconds
    var diff = todayTimeStamp;
    var todaydayDate = new Date();
    var month = todaydayDate.getMonth() + 1;
    var day = todaydayDate.getDate();
    if (day < 10) {
        day = "0" + day;
    }
    if (month < 10) {
        month = "0" + month;
    }
    var todaydayDate = todaydayDate.getFullYear() + '-' + (month) + '-' + day;
    return todaydayDate;
}

function CompareDate(startDate, endDate) {
    var start = new Date(startDate);
    var end = new Date(endDate);
    var dateOne = new Date(start.getFullYear(), start.getMonth(), start.getDay()); //Year, Month, Date
    var dateTwo = new Date(end.getFullYear(), end.getMonth(), end.getDay()); //Year, Month, Date
    if (startDate > endDate) {
        return 1;
    } else {
        return 0;
    }
}
function  get_month(month) {
    switch (month) {
        case 1:
            return "Jan";
            break;
        case 2:
            return "Feb";
            break;
        case 3:
            return "Mar";
            break;
        case 4:
            return "Apr";
            break;
        case 5:
            return "May";
            break;
        case 6:
            return "Jun";
            break;
        case 7:
            return "Jul";
            break;
        case 8:
            return "Aug";
            break;
        case 9:
            return "Sep";
            break;
        case 10:
            return "Oct";
            break;
        case 11:
            return "Nov";
            break;
        case 12:
            return "Dec";
            break;
            Default:
                    return "";

    }
}

$(document).ready(function () {


    $("#password-reset").parsley({trigger: "keypress"});
    $("#login").parsley({trigger: "keypress"});
    $("#register").parsley({trigger: "keypress"});
    $("#admin-register").parsley({trigger: "keypress"});
    $("#dev-uploadgame").parsley({trigger: "keypress"});
    $("#admin-create-comeptiton").parsley({trigger: "keypress"});
    $("#searchform").parsley({trigger: "keypress"});
    $("#send-message").parsley({trigger: "keypress"});
    $("#withdraw").parsley({trigger: "keypress"});

    $(function () {
        $.datepicker.setDefaults({
            beforeShow: customRange,
            dateFormat: 'yy-mm-dd',
            firstDay: 1,
            changeFirstDay: false,
            onSelect: function () {
                this.onchange();
                this.onblur();
            }
        });
    });
///////////////////////////////////////////////////////////
    function customRange(input) {
        var min = null, // Set this to your absolute minimum date
                dateMin = min,
                dateMax = null,
                dayRange = 365; // Restrict the number of days for the date range
        if (input.id === "datepicker") {
            if ($("#datepicker1").datepicker("getDate") != null) {
                dateMax = $("#datepicker1").datepicker("getDate");
                dateMin = new Date();
                if (dateMin < min) {
                    dateMin = min;
                }
            }
            else
            {
                dateMin = new Date();
                dateMax = new Date(dateMin.getFullYear(), dateMin.getMonth(), dateMin.getDate() + dayRange);
                if (dateMin < min) {
                    dateMin = min;
                }
            }
        } else if (input.id === "datepicker1") {

            if ($('#datepicker').datepicker('getDate') != null) {
                dateMin = $('#datepicker').datepicker('getDate');
                var ajj_Date = new Date();
                if (CompareDate(dateMin, ajj_Date) === 0) {
                    dateMin = new Date();
                }
                dateMax = new Date(dateMin.getFullYear(), dateMin.getMonth(), dateMin.getDate() + dayRange);
            }
            else {
                dateMin = new Date();
                dateMax = new Date(dateMin.getFullYear(), dateMin.getMonth(), dateMin.getDate() + dayRange);
            }
        }
        else if (input.id === "datepicker2") {
            dateMax = new Date();
        }
        return {
            minDate: dateMin,
            maxDate: dateMax
        };
    }
/////////// fading error message/////////////////////////////////////////////
    setTimeout(function () {
        $('.errormsg,.successmsg').fadeOut('slow');
    }, 4000); // <-- time in milliseconds

////////////////////////

    // Jquery UI modal Window

    $("input[type='number']").keypress(function (e) {
        //if the letter is not digit then display error and don't type anything

        if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
            $(this).prev("#err").html("<span>Digits Only</span>").show().delay(1000).fadeOut(200);
            return false;
        }
    });

    $('#add_feature').click(function () {
        var feature_count = $("#feature_count").val();
        feature_count = parseInt(feature_count);
        feature_count = feature_count + 1;
        var feature2 = feature_count + 1;
        var html = '<div class="row" >';
        html += '<div class="input-wrap">';
        html += '<input type="text" name="feature_' + feature_count + '"';
        html += 'placeholder="Feature ' + feature_count + '" data-trigger="change" data-parsley-minlength="0" data-parsley-maxlength="200">';
        html += '</div>';
        html += '<div class="input-wrap">';
        html += '<input type="text" name="feature_' + feature2 + '"';
        html += 'placeholder="Feature ' + feature2 + '" data-trigger="change" data-parsley-minlength="0" data-parsley-maxlength="200">';
        html += '</div>';
        html += '</div>';
        $('#features_list').append(html);
        $("#feature_count").val(feature2);
    });

    $('body').on('click', '.remove_emails', function () {
        $(this).parent('.parent_div').remove();
    });

    ///////////////////
    $("#profileImage").on("change", function ()
    {
        $('.dp-img').attr("src", URL.createObjectURL(this.files[0]));
    });
    //////////////////
    $(".delete_item").on('click', function () {
        var url = $(this).data("url");
        swal({title: "Are you sure?", text: "You will not be able to recover this!", type: "warning", showCancelButton: true, confirmButtonColor: "#DD6B55", confirmButtonText: "Yes, delete it!", closeOnConfirm: false}, function ()
        {
            window.location.href = url;
        });

    });
});
