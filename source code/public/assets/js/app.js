$("a").on('click', function (event) {
    event.preventDefault();
    if ($('#' + $(this).parents()[1].id + ' input').attr("type") == "text") {
      $('#' + $(this).parents()[1].id + ' input').attr('type', 'password');
      $('#' + $(this).parents()[1].id + ' i').addClass("fa-eye-slash");
      $('#' + $(this).parents()[1].id + ' i').removeClass("fa-eye");
    } else if ($('#' + $(this).parents()[1].id + ' input').attr("type") == "password") {
      $('#' + $(this).parents()[1].id + ' input').attr('type', 'text');
      $('#' + $(this).parents()[1].id + ' i').removeClass("fa-eye-slash");
      $('#' + $(this).parents()[1].id + ' i').addClass("fa-eye");
    }

  });

  $('#RetypePassword, #Password').on('keyup', function (e) {

    if ($('#Password').val().length > 0 && $('#RetypePassword').val().length > 0) {
      if ($('#Password').val() == $('#RetypePassword').val()) {
        $("#submitBtn").prop('disabled', false);
      } else {
        $("#submitBtn").prop('disabled', true);
      }
    }
  });

  function validatePassword(event) {
    event.preventDefault();
    var regexCapitalLetter = new RegExp("[A-Z]"); //Uppercase Alphabet.

    var regexDigit = new RegExp("[0-9]"); //Uppercase Alphabet.

    var regexSpecialLetter = new RegExp("[$@$!%*#?&^<>_]"); //Uppercase Alphabet.

    var pwdR = $("#Password").val();
    var RpwdR = $("#RetypePassword").val();

        if (regexCapitalLetter.test(pwdR) && regexDigit.test(pwdR) && regexSpecialLetter.test(pwdR)) {
          if (pwdR != RpwdR) {
        alert("The password you entered does not match.");
       
      }
      else{

       $(".loader").removeClass("display-none");
      $.ajax({
        type: "POST",
         url: "/update/password",
         data:{UserID:  $("#UserID").val(), PasswordToken: $("#PasswordToken").val(), Password:  $("#RetypePassword").val() },
        }).done(function( result ) {  
                      $(".form-group, .loader").addClass("display-none");
            $("#resetPasswordMsg").text(result.message).removeClass("display-none");
        });	      
      }
    } else {
      alert("Password criteria did not match.");
    }
  }



  function verifyemail(event) {
    event.preventDefault();  

      $.ajax({
        type: "POST",
         url: "/verify/email",
         data:{UserID:  $("#UserID").val() },
        }).done(function( result ) {  
         
          $("#resetPasswordMsg").text(result.message).removeClass("display-none");

          $("#resetPasswordMsg").removeClass("color-red").addClass("color-green");
        });	         
    
  }