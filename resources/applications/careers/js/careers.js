function showThisVacant(id) {
    $.ajax({
        type: 'POST',
        url: '../../../helpers/ajax/showSpecificVacant.php',
        data: {id: id},
        dataType: 'json',
        cache: false,
        success: function (data) {

            data.forEach(function (item) {
                var x = $('#vacant');
                x.find('.modal-title').html('A Vacant For ' + item.position);
                x.find('.banner a').prop('href', '../../../' + item.banner);
                x.find('.banner img').prop('src', '../../../' + item.banner);
                x.find('.description').html(item.description);
                x.find('.qualification').html('<h3>Qualifications</h3><ol>' + item.qualification + '</ol>');
                x.find('.datePosted').html('<h3>Posted On</h3>' + getRealDateString(item.datePosted));
                x.find('.expiresIn').html('<h3>Expires In</h3>' + item.expiresIn + 'days');
                x.find('.priority').html('<h3>Priority</h3>' + '<span style="color: red"><strong>' + item.priority + '</strong></span>');
            });

        },
        error: function (error) {

        }

        ,
        complete: function () {
            $('#vacant').modal('show');
        }
    });
}

function getRealDateString(t) {
    var d = new Date(1000 * t);

    return d.toDateString();
}


$(function () {
    $('ul.careerPages li').click(function () {
        $(this).parent().find('li').removeClass('currentPage');
        $(this).addClass('currentPage');

        $('.vacantBlock').prepend('<div class="blockLoader"><div class="status"></div></div>');

        var id = $(this).text();


        var stream = '';
        $.ajax({
            type: 'POST',
            url: '../../../helpers/ajax/getPartialCareer.php',
            data: {id: id},
            dataType: 'json',
            cache: false,
            success: function (data) {

                data.forEach(function (item) {
                    stream += '<div class="eachVacancy"><table>';
                    stream += '<tr><td><h6><strong>Position </strong></h6></td><td><span>' + item.position + '</span> <span><strong>(' + item.noOfVacant + ' vacant/s)</strong></span></td></tr>';
                    stream += '<tr><td><h6><strong>Description </strong></h6></td><td><span>' + item.description + '</span></td></tr>';
                    stream += '<tr><td><h6><strong>Date Posted </strong></h6></td><td><span>' + item.datePosted + '</span></td></tr>';
                    stream += '<tr><td><h6><strong>Expires In </strong></h6></td><td><span>' + item.postDuration + '</span></td></tr>';
                    stream += '<tr><td><h6><strong>Priority </strong></h6></td><td><span>' + item.priority + '</span></td></tr>';
                    stream += '<tr><td colspan="2"><button id="' + item.id + '" class="btn" onclick="javascrpt: showThisVacant(this.id)" value="submit">View Job</button></td><td></tr>';
                    stream += '</table></div>';
                });

            },
            error: function (error) {

            }

            ,
            complete: function () {
                $('.vacantBlock').html(stream);

                $(".blockLoader").fadeOut("slow");
                $(".blockLoader .status").delay(1000).fadeOut("slow");


            }
        });


        function expire(id) {
            $.ajax({
                type: 'POST',
                url: '../../../helpers/ajax/autoDeleteExpiredVacancies.php',
                data: {id: id},
                success: function (data) {
                },
                error: function () {
                },
                complete: function () {
                }

            });

        }

    });

})