function careerPager(id) {

    var checkIfToDisable = function () {
        if (parseInt($('.careerPager li.active > a').prop('id')) === ($('.careerPager li').length - 1)) {
            $('button#prev').prop('disabled', false);
            $('button#next').prop('disabled', true);
        }
        else if (parseInt($('.careerPager li.active > a').prop('id')) === 0) {
            $('button#prev').prop('disabled', true);
            $('button#next').prop('disabled', false);
        } else {
            $('button#prev').prop('disabled', false);
            $('button#next').prop('disabled', false);
        }
    }


    if (!(id == 'next' || id == 'prev')) {
        $('.careerPager li').removeClass('active');
        $('#' + id).parent().addClass('active');
    }

    var limit = id;


    if (id == 'next') {

        limit = parseInt($('.careerPager li.active > a').prop('id')) + 1;

        $('.careerPager li').removeClass('active');
        $('.careerPager li a#' + limit).parent().addClass('active');


        checkIfToDisable();
    }

    if (id == 'prev') {
        limit = parseInt($('.careerPager li.active > a').prop('id')) - 1;

        $('.careerPager li').removeClass('active');
        $('.careerPager li a#' + limit).parent().addClass('active');

        checkIfToDisable();

    }


    var tbody = '';

    $.ajax({
        type: 'GET',
        url: 'ajax/career/page',
        data: {limit: limit},
        dataType: 'json',
        cache: false,
        success: function (data) {
            data.forEach(function (item) {
                tbody += '<tr>';
                tbody += '<td>' + '<input onclick="checkIfBulk()" name="careerId' + item.id + '" type="checkbox" value="true" class="checkBulk"/>' + '</td>';
                tbody += '<td>' + item.id + '</td>';
                tbody += '<td>' + item.position + '</td>';
                tbody += '<td>' + '<a href="./career/delete/' + item.id + '" title="Click to Delete" class="btn">Delete</a>' + '</td>';
                tbody += '</tr>';
            });

        },
        error: function () {

        },
        complete: function () {
            $('tbody#deletable').html(tbody);
        }
    });

    checkIfToDisable();

}


function checkIfBulk() {
    var x = false;

    $('.checkBulk').each(function () {
        x += $(this).is(':checked');
    });

    if (!x) {
        $('#checkBulk').prop('disabled', true);
    } else {
        $('#checkBulk').prop('disabled', false);
    }
}


function addMoreQualification(id) {

    var i = $('.qualificationSet .row:last-child input').prop('name').split('qualification')[1];

    var lastId = parseInt(i) + 1;

    var row = '<div class="row" id="row' + lastId + '">' +
        '<div class="col-lg-11">' +
        '<input name="qualification' + lastId + '" type="text" class="form-control" style="margin-top: 10px">' +
        '</div> ' +
        '<div class="col-md-1">' +
        '<a href="javascript: void(0)" style="position: relative;top: 10px;float: left" id="' + lastId + '" onclick="deleteThisQualification(this.id)"><img width="30" src="//localhost/cmb/admin/images/careers/minus.png"></a>' +
        '</div> ' +
        '</div>'

    $('#' + id).parents('.row').parent().append(row);

    //Finding Total Number Of Qualification FieldsExist
    findCountOfField();
}

function deleteThisQualification(id) {
    var x = 0;

    $('#row' + id).remove();

    $('.qualificationSet .row').each(function () {
        $(this).find('input').prop('name', 'qualification' + x);

        $(this).find('a').prop('id', x);

        $(this).prop('id', 'row' + x);

        x++;
    });
    //Finding Total Number Of Qualification FieldsExist
    findCountOfField();
}

function findCountOfField() {
    var i = 0;

    $('.qualificationSet .row').each(function () {
        i++;
    });


    $('input#totalQualification').val(i)

}

$('#desc_check').change(function () {
    if ($(this).is(':checked')) {
        $(this).parents('tr').next().find('input').prop('disabled', true);
    } else {
        $(this).parents('tr').next().find('input').removeAttr('disabled');
    }
});

$('#exp_check').change(function () {
    if ($(this).is(':checked')) {
        $(this).parents('tr').next().find('input').prop('disabled', true);
    } else {
        $(this).parents('tr').next().find('input').removeAttr('disabled');
    }
});

$('#noVacant_check').change(function () {
    if ($(this).is(':checked')) {
        $(this).parents('tr').next().find('input').prop('disabled', true);
    } else {
        $(this).parents('tr').next().find('input').removeAttr('disabled');
    }
});

$('#qualification_check').change(function () {
    if ($(this).is(':checked')) {
        $(this).parents('tr').next().find('input').prop('disabled', true);
    } else {
        $(this).parents('tr').next().find('input').removeAttr('disabled');
    }
});

$('#priority_check').change(function () {
    if ($(this).is(':checked')) {
        $(this).parents('tr').next().find('input').prop('disabled', true);
    } else {
        $(this).parents('tr').next().find('input').removeAttr('disabled');
    }
});


function getCareerInfo(id) {
    var position = $('#' + id).val();

    var rest = new Array();

    $.ajax({
        type: 'GET',
        url: 'ajax/career/getInfo',
        data: {id: position},
        dataType: 'json',
        cache: false,
        success: function (data) {
            data.forEach(function (item) {
                rest.push(item);
            });
        },
        error: function () {

        },
        complete: function () {

            var x = $('#updateCareer');


            x.find('#description').val(rest[0]); //Description
            x.find('#noOfVacantUpdate').val(rest[1]); //Description
            x.find('#expiresIn').val(rest[2]); //Expires In

            var Q = rest[3].split('</li>');

            $('input#totalQualificationUpdate').val(Q.length - 1);

            var y = '';
            for (var p = 0; p < (Q.length - 1); p++) {
                if (p == 0) {
                    y = '<div class="row" id="rowUpdate0"><div class="col-md-11"><input type="text" name="qualificationUpdate' + p + '" value="' + Q[p].replace('<li>', '') + '" class="form-control"></div>';
                    y += '<div class="col-md-1"><a style="position: relative;float: left;" id="addMoreQualificationUpdate" href="javascript: void(0)" onclick="addMoreQualificationUpdate(this.id)">';
                    y += '<img src="http://localhost/cmb/admin/images/careers/plus.svg" width="30"/></a></div></div>';

                    continue;
                } else {
                    y += '<div style="margin-top: 10px" class="row" id="rowUpdate' + p + '"><div class="col-md-11"><input type="text" name="qualificationUpdate' + p + '" value="' + Q[p].replace('<li>', '') + '" class="form-control"></div>';
                    y += '<div class="col-md-1" style="margin-left: -8.5px"><a href="javascript: void(0)" style="" id="' + p + '" onclick="deleteThisQualificationUpdate(this.id)">' +
                        '<img width="30" src="http://localhost/cmb/admin/images/careers/minus.png"></a></div></div>';
                }
            }

            $('#qualificationsToBeUpdated').html(y);

            x.find('#qualification').text(rest[3]); //qualification
            x.find('#priority').val(rest[4]); //priority

        }
    });
}

function addMoreQualificationUpdate(id) {

    var i = $('.qualificationsToBeUpdated .row:last-child input').prop('name').split('qualificationUpdate')[1];

    var lastId = parseInt(i) + 1;

    var row = '<div class="row" id="rowUpdate' + lastId + '">' +
        '<div class="col-lg-11">' +
        '<input name="qualificationUpdate' + lastId + '" type="text" class="form-control" style="margin-top: 10px">' +
        '</div> ' +
        '<div class="col-md-1">' +
        '<a href="javascript: void(0)" style="position: relative;top: 10px;float: left" id="' + lastId + '" onclick="deleteThisQualificationUpdate(this.id)"><img width="30" src="//localhost/cmb/admin/images/careers/minus.png"></a>' +
        '</div> ' +
        '</div>'

    $('#' + id).parents('.row').parent().append(row);

    //Finding Total Number Of Qualification FieldsExist
    findCountOfFieldUpdate();
}

function deleteThisQualificationUpdate(id) {
    var x = 0;

    $('#rowUpdate' + id).remove();

    $('.qualificationSet .row').each(function () {
        $(this).find('input').prop('name', 'qualification' + x);

        $(this).find('a').prop('id', x);

        $(this).prop('id', 'row' + x);

        x++;
    });
    //Finding Total Number Of Qualification FieldsExist
    findCountOfFieldUpdate();
}

function findCountOfFieldUpdate() {
    var i = 0;

    $('.qualificationsToBeUpdated .row').each(function () {
        i++;
    });


    $('input#totalQualificationUpdate').val(i);

}