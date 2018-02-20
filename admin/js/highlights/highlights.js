function bannerPager(id) {

    var checkIfToDisable = function () {
        if (parseInt($('.bannerPager li.active > a').prop('id')) === ($('.bannerPager li').length - 1)) {
            $('button#prev').prop('disabled', false);
            $('button#next').prop('disabled', true);
        }
        else if (parseInt($('.bannerPager li.active > a').prop('id')) === 0) {
            $('button#prev').prop('disabled', true);
            $('button#next').prop('disabled', false);
        } else {
            $('button#prev').prop('disabled', false);
            $('button#next').prop('disabled', false);
        }
    }


    if (!(id == 'next' || id == 'prev')) {
        $('.bannerPager li').removeClass('active');
        $('#' + id).parent().addClass('active');
    }

    var limit = id;


    if (id == 'next') {

        limit = parseInt($('.bannerPager li.active > a').prop('id')) + 1;

        $('.bannerPager li').removeClass('active');
        $('.bannerPager li a#' + limit).parent().addClass('active');


        checkIfToDisable();
    }

    if (id == 'prev') {
        limit = parseInt($('.bannerPager li.active > a').prop('id')) - 1;

        $('.bannerPager li').removeClass('active');
        $('.bannerPager li a#' + limit).parent().addClass('active');

        checkIfToDisable();

    }


    var tbody = '';

    $.ajax({
        type: 'GET',
        url: 'ajax/banner/page',
        data: {limit: limit},
        dataType: 'json',
        cache: false,
        success: function (data) {
            data.forEach(function (item) {
                tbody += '<tr>';
                tbody += '<td>' + '<input onclick="checkIfBulk()" name="bannerId' + item.id + '" type="checkbox" value="true" class="checkBulk"/>' + '</td>';
                tbody += '<td>' + item.id + '</td>';
                tbody += '<td>' + item.title + '</td>';
                tbody += '<td>' + item.description + '</td>';
                tbody += '<td>' + item.image_path.toString().split('/')[3] + '</td>';
                tbody += '<td>' + '<a href="./highlights/delete/' + item.id + '" title="Click to Delete" class="btn">Delete</a>' + '</td>';
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


function setRestColumns(id) {
    $.ajax({
        type: 'get',
        url: 'highlightAjax',
        data: {id: id},
        success: function (data) {
            $('#titleUpdate').val(data.split('%')[0]);
            $('#descriptionUpdate').val(data.split('%')[1]);
        },
        error: function () {

        }
    });
}

$('#title_check').change(function () {
    if ($(this).is(':checked')) {
        $(this).parents('tr').next().find('input').prop('disabled', true);
    } else {
        $(this).parents('tr').next().find('input').removeAttr('disabled');
    }
});

$('#desc_check').change(function () {
    if ($(this).is(':checked')) {
        $(this).parents('tr').next().find('input').prop('disabled', true);
    } else {
        $(this).parents('tr').next().find('input').removeAttr('disabled');
    }
});


$('#pic_check').change(function () {
    if ($(this).is(':checked')) {
        $(this).next().next().prop('disabled', true);
    } else {
        $(this).next().next().removeAttr('disabled');
    }
});


var dialog = $("#dialog-form").dialog({
    autoOpen: false,
    height: 400,
    width: 350,
    modal: true,
    buttons: {
        Cancel: function () {
            dialog.dialog("close");
        }
    }
});

$("#openAddcatDialog").click(function () {
    dialog.dialog('open');
});
