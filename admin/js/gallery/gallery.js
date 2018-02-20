function galleryPager(id) {

    var checkIfToDisable = function () {
        if (parseInt($('.galleryPager li.active > a').prop('id')) === ($('.galleryPager li').length - 1)) {
            $('button#prev').prop('disabled', false);
            $('button#next').prop('disabled', true);
        }
        else if (parseInt($('.galleryPager li.active > a').prop('id')) === 0) {
            $('button#prev').prop('disabled', true);
            $('button#next').prop('disabled', false);
        } else {
            $('button#prev').prop('disabled', false);
            $('button#next').prop('disabled', false);
        }
    }


    if (!(id == 'next' || id == 'prev')) {
        $('.galleryPager li').removeClass('active');
        $('#' + id).parent().addClass('active');
    }

    var limit = id;


    if (id == 'next') {

        limit = parseInt($('.galleryPager li.active > a').prop('id')) + 1;

        $('.galleryPager li').removeClass('active');
        $('.galleryPager li a#' + limit).parent().addClass('active');


        checkIfToDisable();
    }

    if (id == 'prev') {
        limit = parseInt($('.galleryPager li.active > a').prop('id')) - 1;

        $('.galleryPager li').removeClass('active');
        $('.galleryPager li a#' + limit).parent().addClass('active');

        checkIfToDisable();

    }


    var tbody = '';

    $.ajax({
        type: 'GET',
        url: 'ajax/gallery/page',
        data: {limit: limit},
        dataType: 'json',
        cache: false,
        success: function (data) {
            data.forEach(function (item) {
                tbody += '<tr>';
                tbody += '<td>' + '<input onclick="checkIfBulk()" name="galleryId' + item.id + '" type="checkbox" value="true" class="checkBulk"/>' + '</td>';
                tbody += '<td>' + item.id + '</td>';
                tbody += '<td>' + item.category + '</td>';
                tbody += '<td>' + item.description + '</td>';
                tbody += '<td>' + '<a href="./gallery/delete/' + item.id + '" title="Click to Delete" class="btn">Delete</a>' + '</td>';
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


$('#cat_check').change(function () {
    if ($(this).is(':checked')) {
        $(this).parents('tr').next().find('select').prop('disabled', true);
    } else {
        $(this).parents('tr').next().find('select').removeAttr('disabled');
    }
});

$('#alt_check').change(function () {
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
        $(this).parents('tr').next().find('input').prop('disabled', true);
    } else {
        $(this).parents('tr').next().find('input').removeAttr('disabled');
    }
});


var dialog_cat = $("#dialog-form-category").dialog({
    autoOpen: false,
    height: 400,
    width: 350,
    modal: true,
    buttons: {
        Cancel: function () {
            dialog_cat.dialog("close");
        }
    }
});

var dialog_grp = $("#dialog-form-group").dialog({
    autoOpen: false,
    height: 400,
    width: 350,
    modal: true,
    buttons: {
        Cancel: function () {
            dialog_grp.dialog("close");
        }
    }
});

$("#openAddCategoryDialog").click(function () {
    dialog_cat.dialog('open');
});

$("#openAddGroupDialog").click(function () {
    dialog_grp.dialog('open');
});
