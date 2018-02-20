function newsPager(id) {

    var checkIfToDisable = function () {
        if (parseInt($('.newsPager li.active > a').prop('id')) === ($('.newsPager li').length - 1)) {
            $('button#prev').prop('disabled', false);
            $('button#next').prop('disabled', true);
        }
        else if (parseInt($('.newsPager li.active > a').prop('id')) === 0) {
            $('button#prev').prop('disabled', true);
            $('button#next').prop('disabled', false);
        } else {
            $('button#prev').prop('disabled', false);
            $('button#next').prop('disabled', false);
        }
    }


    if (!(id == 'next' || id == 'prev')) {
        $('.newsPager li').removeClass('active');
        $('#' + id).parent().addClass('active');
    }

    var limit = id;


    if (id == 'next') {

        limit = parseInt($('.newsPager li.active > a').prop('id')) + 1;

        $('.newsPager li').removeClass('active');
        $('.newsPager li a#' + limit).parent().addClass('active');


        checkIfToDisable();
    }

    if (id == 'prev') {
        limit = parseInt($('.newsPager li.active > a').prop('id')) - 1;

        $('.newsPager li').removeClass('active');
        $('.newsPager li a#' + limit).parent().addClass('active');

        checkIfToDisable();

    }


    var tbody = '';

    $.ajax({
        type: 'GET',
        url: 'ajax/news/page',
        data: {limit: limit},
        dataType: 'json',
        cache: false,
        success: function (data) {
            data.forEach(function (item) {
                tbody += '<tr>';
                tbody += '<td>' + '<input onclick="checkIfBulk()" name="newsId' + item.id + '" type="checkbox" value="true" class="checkBulk"/>' + '</td>';
                tbody += '<td>' + item.id + '</td>';
                tbody += '<td>' + item.title + '</td>';
                tbody += '<td>' + new Date(item.posted_on * 1000).toDateString() + '</td>';
                tbody += '<td>' + '<a href="./news/delete/' + item.id + '" title="Click to Delete" class="btn">Delete</a>' + '</td>';
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


$('#t_check').change(function () {
    if ($(this).is(':checked')) {
        $(this).parents('tr').next().find('input').prop('disabled', true);
    } else {
        $(this).parents('tr').next().find('input').removeAttr('disabled');
    }
});

$('#cat_check').change(function () {
    if ($(this).is(':checked')) {
        $(this).parents('tr').next().find('select').prop('disabled', true);
    } else {
        $(this).parents('tr').next().find('select').removeAttr('disabled');
    }
});

$('#st_check').change(function () {
    if ($(this).is(':checked')) {
        $(this).parents('tr').next().find('input').prop('disabled', true);
    } else {
        $(this).parents('tr').next().find('input').removeAttr('disabled');
    }
});

$('#c_check').change(function () {
    if ($(this).is(':checked')) {
        $(this).parents('tr').next().find('input').prop('disabled', true);
    } else {
        $(this).parents('tr').next().find('input').removeAttr('disabled');
    }
});

$('#nc_check').change(function () {
    if ($(this).is(':checked')) {
        $(this).parents('tr').next().find('input').prop('disabled', true);
    } else {
        $(this).parents('tr').next().find('input').removeAttr('disabled');
    }
});

$('#p_check').change(function () {
    if ($(this).is(':checked')) {
        $(this).parents('tr').next().find('input').prop('disabled', true);
    } else {
        $(this).parents('tr').next().find('input').removeAttr('disabled');
    }
});


var dialog_category = $("#dialog-form-category").dialog({
    autoOpen: false,
    height: 400,
    width: 350,
    modal: true,
    buttons: {
        Cancel: function () {
            dialog_category.dialog("close");
        }
    }
});

$("#openAddNewsCategoryDialog").click(function () {
    dialog_category.dialog('open');
});