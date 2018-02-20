/*-----------------------------------------------------------------

 NEWS BLOCK JS

 -------------------------------------------------------------------*/
$('div').click(function () {
    $('.searchResultPad').addClass('hidden');
});

function searchResult(string) {
    var resultLines = '';
    $.ajax({
        type: 'GET',
        url: '../../../helpers/ajax/searchResult.php',
        data: {id: string},
        dataType: 'json',
        cache: false,
        success: function (result) {
            $('.searchResultPad').removeClass('hidden');

            result.forEach(function (item) {

                resultLines += '<li class="soughtItem list-group-item" style="cursor: pointer" id="' + item.id + '">' + '<a href="?newsID='+ item.id +'">' +
                    '<h5 style="color: #d62728;" class="title">' + item.category+ '-' + item.title + '</h5>' +
                    '<p>' + item.content.substring(0, 100) + '</p>' +
                    '</a></li>';

            });

        },
        error: function () {

            resultLines = '<li class="list-group-item" style="color: red"><h5>No Results Found ...!</h5></li>';

        },
        complete: function () {
            $('.searchResultPad ul').html(resultLines);
        }
    });
}





function getBeforeTime(time) {
    //Date Object Creation
    var t = new Date();

    var diff = (t.getTime() / 1000) - time;


    //Creating Array Object
    var timeValues = new Array();

    t.setTime(1000 * time);

    //Posted Timestamp
    timeValues.push(t.toDateString());

    var minute = 60;
    var hour = 3600;
    var day = 86400;
    var month = 2678400;
    var year = 32140800;


    if (diff < 60) {
        timeValues.push('<h6 style="color: maroon">Just Now</h6>');
    } else if (diff > 60 && diff < 3600) {
        timeValues.push('<span style="color: maroon">' + Math.round(diff / minute) + ' min ' + Math.ceil(diff % minute) + ' s Ago</span>');
    } else if (diff > 3600 && diff < 3600 * 24) {
        timeValues.push('<span style="color: maroon">' + Math.round(diff / hour) + ' hours ' + Math.ceil((diff % hour) / minute) + ' min Ago</span>');
    } else if (diff > 3600 * 24 && diff < 3600 * 24 * 31) {
        timeValues.push('<span style="color: maroon">' + Math.round(diff / day) + ' days ' + Math.ceil(diff % day / hour) + ' hours Ago</span>');
    } else if (diff > 3600 * 24 * 31 && diff < 3600 * 24 * 31 * 12) {
        timeValues.push('<span style="color: maroon">' + Math.round(diff / month) + ' months ' + Math.ceil((diff % month) / day) + ' days Ago</span>');
    } else if (diff > 3600 * 24 * 31 * 12) {
        timeValues.push('<span style="color: maroon">' + Math.round(diff / year) + ' years ' + Math.ceil((diff % year) / month) + ' months Ago</span>');
    }

    return timeValues;


}
function viewThisNew(id) {
    $('.newsBox::before').css('borderRight', 'none');
    window.location = './?newsID=' + id;
}
function compact(news) {
    return news.substr(0, 150) + '<strong>...</strong>';
}



function commentToggle(){
    if($('div.comment-view').hasClass('opayed')){
            $('div.comment-view').removeClass('opayed');
    }else{
            $('div.comment-view').addClass('opayed');
    }
}

function comment(){

var success = 1;

    var inputs = $("div.comment-section").find("input");

    var newsID = $("div.comment-section").find("input#newsID").val();


    //email validation

    var pattern_email = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    var email = inputs.filter("#email").val();

    if(!pattern_email.test(email) || email == ''){
        $("#email").css('border','2px solid red');
        $("#email").focus();
        success = 0;
    }else {
        $("#email").css('border','2px solid green');
    }

    //telephone validation
    var pattern_number = /([^a-z])/;

    var number =  inputs.filter("#number").val();

    if(!pattern_number.test(number) || number == '' || number.length < 10 || number.length >13 || number.lastIndexOf('+') !== number.indexOf('+')){
        $("#number").css('border','2px solid red');
        $("#number").focus();
        success = 0;
    }else {
        $("#number").css('border','2px solid green');
    }


    //name validation
    var pattern_name = /([^0-9])/;

    var name = inputs.filter("#name").val();

    if(name == ''){
        $("#name").css('border','2px solid red');
        $("#name").focus();
        success = 0;

    }else if(name.charAt(0) == ' '){
        $("#name").css('border','2px solid red');
        $("#name").focus();
        success = 0;
    }else{
        if(!pattern_name.test(name)){
            $("#name").css('border','2px solid red');
            $("#name").focus();
            success = 0;
        }else{
            $("#name").css('border','2px solid green');
        }
    }

    //Message Restrictions

    var message = $("div.comment-section").find('textarea').val();
    if(message.length < 1) {
        $("#message").css('border','2px solid red');
        $("#message").focus();
        success = 0;
    }else{
        $("#message").css('border','2px solid green');
    }

    var subject = $("div.comment-section").find('input#subject').val();


    if(success == 1){

            $("div.comment-section").find('button').html('Sending . . .');

            $.ajax({
                type: "post",
                url: "http://localhost/cmb/helpers/news/comment.php",
                data: {newsID: newsID, name: name,email: email,number: number,message : message, subject: subject},
                success: function(data){                                   
                },
                error: function(){

                },
                complete: function(){
                    $("div.comment-section").find('input, textarea').css('border','1px solid #ccc');
                    $("div.comment-section").find('button').html('Comment posted');

                    syncComment(newsID);

                    setTimeout(function(){

                       $("div.comment-section").find('input, textarea').val(''); 

                       $("div.comment-section").find('button').html('Send Message');


                    }, 2000);
                }
            });
        }
        else {
        }


}

function syncComment(newsID){

    $('td.syncable').addClass(' sync');

    var count = 0;
    var comments = '';

    $.ajax({
                type: "get",
                url: "http://localhost/cmb/helpers/news/commentSync.php",
                data: {newsID: newsID},
                dataType: 'json',
                success: function(data){ 
                    data.forEach(function(item){

                        comments = comments + '<tr><td><span style="padding-left: 10px !important">'+ item.comment +'</span><div><hr/><ul class="list-unstyled list-inline" style="padding-left: 10px !important;background: grey;color: white"><li><i class="fa fa-user" aria-hidden="true"></i> '+ item.name +'</li><li><i class="fa fa-envelope" aria-hidden="true"></i> '+ item.email +'</li><li><i class="fa fa-clock-o" aria-hidden="true"></i> '+ item.timestamp +'</li></ul></div></td></tr>';
                     
                        count++;
                    });
                },
                error: function(){

                },
                complete: function(){
                    $('div.comment-view table').html(comments);
                    $('td.syncable').text('(' + count + ')');
                    $('td.syncable').removeClass(' sync');
                }
    });
}