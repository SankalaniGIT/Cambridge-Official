$(document).ready(function () {
    $(window).load(function () {
        setTimeout('hideStatus()',5000);
    });
});
  function hideStatus() {
      $("#form_status").addClass('fade');
  }

  function validateForm() {

        var success = 1;

        var inputs = $("form").find("input");


        //email validation

        var pattern_email = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

        var email = inputs.filter("#email").val();

      if(!pattern_email.test(email) || email == ''){
          $("#email").prop('placeholder','Wrong Email Format');
          $("#email").css('borderLeft','5px solid red');
          $("#email").focus();
          success = 0;
      }else {
          $("#email").val(email);
          $("#email").css('borderLeft','5px solid green');
      }


      //name validation
      var pattern_name = /([^0-9])/;

      var name = inputs.filter("#name").val();

      if(name == ''){
          $("#name").prop('placeholder','Name Cannot Be Empty');
          $("#name").css('borderLeft','5px solid red');
          $("#name").focus();
          success = 0;

      }else if(name.charAt(0) == ' '){
          $("#name").prop('placeholder','Cannot start with spaces,special chars');
          $("#name").css('borderLeft','5px solid red');
          $("#name").focus();
          success = 0;
      }else{
          if(!pattern_name.test(name)){
              $("#name").prop('placeholder','Only Letters are allowed, No Numbers');
              $("#name").css('borderLeft','5px solid red');
              $("#name").focus();
              success = 0;
          }else{
              $("#name").val(name);
              $("#name").css('borderLeft','5px solid green');
          }
      }

      //Message Restrictions

      var message = $("form").find('textarea').val();
      if(message.length > 250) {
          $("#messageError").html("<b>* Maximum 250 characters are allowed</b>");
          $("#message").css('border','1px solid red');
          $("#message").focus();
          success = 0;
      }else{
          $("#messageError").html('&nbsp;');
          $("#message").css('border','1px solid green');
      }


      if(success == 1){
          $("#subjectError").html('&nbsp;');
          return true;
      }
      else {
          $("#subjectError").html('&nbsp;');
          return (false);
      }


  }
