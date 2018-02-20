$(function () {

    //Initialising Calender Object
    $("#application").find('#dob').datepicker({
        changeMonth: true,
        changeYear: true,
        maxDate: '+0y',
        yearRange: "-25:+0"
    });

});

function validateApplication() {
    var inputs = $("#application");

    var success = 1;

    var fName = inputs.find('#firstName').val();

    var mName = inputs.find('#middleName').val();

    var lName = inputs.find('#lastName').val();

    var dob = inputs.find('#dob').val();

    var gender = inputs.find('#gender').val();

    var nationality = inputs.find('#nationality').val();

    var bPlace = inputs.find('#bPlace').val();

    var religion = inputs.find('#religion').val();

    var language = inputs.find('#language').val();

    var address1 = inputs.find('#address1').val();

    var address2 = inputs.find('#address2').val();

    var city = inputs.find('#city').val();

    var state = inputs.find('#state').val();

    var country = inputs.find('#country').val();

    var email = inputs.find('#email').val();

    var landLine = inputs.find('#landLine').val();

    var mobile = inputs.find('#mobile').val();


    if (dob == '') {
        $("#dob").prop('placeholder', 'DOB Cannot be empty');
        $("#dob").css('border', '2px solid red');
    } else {
        $("#dob").val(dob);
        $("#dob").css('border', '2px solid green');
    }


    //name validation
    var patternName = /([^0-9])/;

    if (fName == '') {
        $("#firstName").prop('placeholder', 'Cannot be empty');
        $("#firstName").css('border', '2px solid red');
        success = 0;

    } else if (fName.charAt(0) == ' ') {
        $("#firstName").val("<b>Cannot start with spaces,special chars</b>");
        $("#firstName").css('border', '2px solid green');
        success = 0;
    } else {
        if (!patternName.test(fName)) {
            $("#firstName").val("<b>Only Letters are allowed, No Numbers</b>");
            $("#firstName").css('border', '2px solid red');
            success = 0;
        } else {
            $("#firstName").val(fName);
            $("#firstName").css('border', '2px solid green');
        }
    }


    if (lName == '') {
        $("#lastName").prop('placeholder', 'Cannot be empty');
        $("#lastName").css('border', '2px solid red');
        success = 0;

    } else if (lName.charAt(0) == ' ') {
        $("#lastName").val("<b>Cannot start with spaces,special chars</b>");
        $("#lastName").css('border', '2px solid green');
        success = 0;
    } else {
        if (!patternName.test(lName)) {
            $("#lastName").val("<b>Only Letters are allowed, No Numbers</b>");
            $("#lastName").css('border', '2px solid red');
            success = 0;
        } else {
            $("#lastName").val(lName);
            $("#lastName").css('border', '2px solid green');
        }
    }


    //email validation

    var patternEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    if (!patternEmail.test(email) || email == '') {
        $("#email").prop('placeholder', 'Wrong Email Format');
        $("#email").css('border', '2px solid red');
        success = 0;
    } else {
        $("#email").val(email);
        $("#email").css('border', '2px solid green');
    }

    //telephone validation
    var patternTP = /([^a-z])/;

    if (!patternTP.test(landLine) || landLine == '' || landLine.length < 10 || landLine.length > 13 || landLine.lastIndexOf('+') !== landLine.indexOf('+')) {
        $("#landLine").prop('placeholder', "Wrong Number Format");
        $("#landLine").css('border', '2px solid red');
        success = 0;
    } else {
        $("#landLine").val(landLine);
        $("#landLine").css('border', '2px solid green');
    }


    if (!patternTP.test(mobile) || mobile == '' || mobile.length < 10 || mobile.length > 13 || mobile.lastIndexOf('+') !== mobile.indexOf('+')) {
        $("#mobile").prop('placeholder', "Wrong Number Format");
        $("#mobile").css('border', '2px solid red');
        success = 0;
    } else {
        $("#mobile").val(mobile);
        $("#mobile").css('border', '2px solid green');
    }


    if (gender == 'Null') {
        $("#gender").css('border', '2px solid red');
        success = 0;
    } else {
        $("#gender").css('border', '2px solid green');
    }
    if (religion == 'Null') {
        $("#religion").css('border', '2px solid red');
        success = 0;
    } else {
        $("#religion").css('border', '2px solid green');
    }

    if (language == 'Null') {
        $("#language").css('border', '2px solid red');
        success = 0;
    } else {
        $("#language").css('border', '2px solid green');
    }

    if (country == 'Null') {
        $("#country").css('border', '2px solid red');
        success = 0;
    } else {
        $("#country").css('border', '2px solid green');
    }


    if (success == 1) {

        $('.leftNewsBlock').prepend('<div class="blockLoader"><div class="status"></div></div>');
        $.ajax({
            url: "../../../controllers/email/sendApplication.php",
            type: "GET",
            data: {
                fName: fName,
                mName: mName,
                lName: lName,
                dob: dob,
                gender: gender,
                nationality: nationality,
                bPlace: bPlace,
                religion: religion,
                language: language,
                address1: address1,
                address2: address2,
                city: city,
                state: state,
                country: country,
                email: email,
                landLine: landLine,
                mobile: mobile
            },
            success: function (data) {
                if (data) {
                    $('#successAlert').removeClass('hidden');
                } else {
                    $('#failureAlert').removeClass('hidden');
                }

            },
            error: function () {

            },
            complete: function () {
                $(".blockLoader").fadeOut("slow");
                $(".blockLoader .status").delay(1000).fadeOut("slow");

                setTimeout(function () {
                    $('#successAlert').addClass('hidden');
                    $('#failureAlert').addClass('hidden');
                }, 5000);
            }
        });
    } else {
        $('#failureAlert').removeClass('hidden');

        setTimeout(function () {
            $('#successAlert').addClass('hidden');
            $('#failureAlert').addClass('hidden');
        }, 5000);

    }

}