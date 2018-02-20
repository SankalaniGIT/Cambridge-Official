function deleteComment(id, newsID) {
    $.ajax({
        type: 'GET',
        url: 'ajax/comments/delete',
        data: {commentID: id},
        success: function (data) {
            if (data === '1') {
                $('a#deleteButton' + id).html('Deleted');
            }
        },
        error: function () {

        },
        complete: function () {
            setTimeout(syncComment(newsID), 5000);
        }
    });
}

function syncComment(newsID) {

    var count = 0;
    var comments = '';

    $.ajax({
        type: 'GET',
        url: 'ajax/comments/view',
        data: {newsID: newsID},
        dataType: 'json',
        cache: false,
        success: function (data) {
            data.forEach(function (item) {
                comments += '<tr><td>' + item.fullname + '</td><td>' + item.number + '</td><td>' + item.email + '</td><td>' + item.comment.substr(0, 50) + '</td><td>' + item.timestamp + '</td><td>' + '<a href="javascript: void(0)" class="btn btn-danger" id="deleteButton' + item.id + '" onclick="deleteComment(' + item.id + ', ' + newsID + ')">Delete</a>' + '</td></tr>'
                count++;
            });

        },
        error: function () {

        },
        complete: function () {
            var empty = '<tr><td colspan="6">No comments found</td></tr>';
            if (count < 1) {
                $('table#comment-view tbody').html(empty);
            } else {
                $('table#comment-view tbody').html(comments);
            }

            $('div span#noOfComments').text(count);
        }
    });
}

