//password show
function myFunction() {
        var x = document.getElementById("password");
        if (x.type === "password") {
          x.type = "text";
        } else {
          x.type = "password";
        }
      }


//active invesment box
      $(document).ready(function(){
        $('.active-user').click(function(){
          $('.active-user').removeClass("in-active");
          $(this).addClass("in-active");
      });

        $('.event-click').click(function(){
        	$('.event-click').removeClass('forgotactive');
        	$(this).addClass('forgotactive');
        });

        $('.ac-border').click(function(){
          $(this).addClass('borderactive');
        });
      });


//input file signature page
      $("#FileInput").on('change',function (e) {
            var labelVal = $(".title").text();
            var oldfileName = $(this).val();
                fileName = e.target.value.split( '\\' ).pop();

                if (oldfileName == fileName) {return false;}
                var extension = fileName.split('.').pop();

            if ($.inArray(extension,['jpg','jpeg','png']) >= 0) {
                $(".filelabel i").removeClass().addClass('fa fa-file-image-o bgyellow-gradiant textclip');
                $(".filelabel i, .filelabel .title").css({'color':'#208440'});
                $(".filelabel").css({'border':' 1px solid #208440'});
            }
            else if(extension == 'pdf'){
                $(".filelabel i").removeClass().addClass('fa fa-file-pdf-o bgyellow-gradiant textclip');
                $(".filelabel i, .filelabel .title").css({'color':'red'});
                $(".filelabel").css({'border':' 1px solid red'});

            }
  else if(extension == 'doc' || extension == 'docx'){
            $(".filelabel i").removeClass().addClass('fa fa-file-word-o bgyellow-gradiant textclip');
            $(".filelabel i, .filelabel .title").css({'color':'#2388df'});
            $(".filelabel").css({'border':' 1px solid #2388df'});
        }
            else{
                $(".filelabel i").removeClass().addClass('fa fa-paperclip bgyellow-gradiant textclip');
                $(".filelabel i, .filelabel .title").css({'color':'black'});
                $(".filelabel").css({'border':' 1px solid black'});
            }

            if(fileName ){
                if (fileName.length > 14){
                    $(".filelabel .title").text(fileName.slice(0,10)+'...'+extension);
                }
                else{
                    $(".filelabel .title").text(fileName);
                }
            }
            else{
                $(".filelabel .title").text(labelVal);
            }
        });

//password file input
 $("#passport").on('change',function (e) {
            var labelVal = $(".title").text();
            var oldfileName = $(this).val();
                fileName = e.target.value.split( '\\' ).pop();

                if (oldfileName == fileName) {return false;}
                var extension = fileName.split('.').pop();

            if ($.inArray(extension,['jpg','jpeg','png']) >= 0) {
                $(".passlabel i").removeClass().addClass('fa fa-file-image-o bgyellow-gradiant textclip');
                $(".passlabel i, .passlabel .title").css({'color':'#208440'});
                $(".passlabel").css({'border':' 1px solid #208440'});
            }
            else if(extension == 'pdf'){
                $(".passlabel i").removeClass().addClass('fa fa-file-pdf-o bgyellow-gradiant textclip');
                $(".passlabel i, .passlabel .title").css({'color':'red'});
                $(".passlabel").css({'border':' 1px solid red'});

            }
  else if(extension == 'doc' || extension == 'docx'){
            $(".passlabel i").removeClass().addClass('fa fa-file-word-o bgyellow-gradiant textclip');
            $(".passlabel i, .passlabel .title").css({'color':'#2388df'});
            $(".passlabel").css({'border':' 1px solid #2388df'});
        }
            else{
                $(".passlabel i").removeClass().addClass('fa fa-paperclip bgyellow-gradiant textclip');
                $(".passlabel i, .passlabel .title").css({'color':'black'});
                $(".passlabel").css({'border':' 1px solid black'});
            }

            if(fileName ){
                if (fileName.length > 14){
                    $(".passlabel .title").text(fileName.slice(0,10)+'...'+extension);
                }
                else{
                    $(".passlabel .title").text(fileName);
                }
            }
            else{
                $(".passlabel .title").text(labelVal);
            }
        });



 //second ID Copy file input
 $("#secondcopy").on('change',function (e) {
            var labelVal = $(".title").text();
            var oldfileName = $(this).val();
                fileName = e.target.value.split( '\\' ).pop();

                if (oldfileName == fileName) {return false;}
                var extension = fileName.split('.').pop();

            if ($.inArray(extension,['jpg','jpeg','png']) >= 0) {
                $(".secondcopy i").removeClass().addClass('fa fa-file-image-o bgyellow-gradiant textclip');
                $(".secondcopy i, .secondcopy .title").css({'color':'#208440'});
                $(".secondcopy").css({'border':' 1px solid #208440'});
            }
            else if(extension == 'pdf'){
                $(".secondcopy i").removeClass().addClass('fa fa-file-pdf-o bgyellow-gradiant textclip');
                $(".secondcopy i, .secondcopy .title").css({'color':'red'});
                $(".secondcopy").css({'border':' 1px solid red'});

            }
  else if(extension == 'doc' || extension == 'docx'){
            $(".secondcopy i").removeClass().addClass('fa fa-file-word-o bgyellow-gradiant textclip');
            $(".secondcopy i, .secondcopy .title").css({'color':'#2388df'});
            $(".secondcopy").css({'border':' 1px solid #2388df'});
        }
            else{
                $(".secondcopy i").removeClass().addClass('fa fa-paperclip bgyellow-gradiant textclip');
                $(".secondcopy i, .secondcopy .title").css({'color':'black'});
                $(".secondcopy").css({'border':' 1px solid black'});
            }

            if(fileName ){
                if (fileName.length > 14){
                    $(".secondcopy .title").text(fileName.slice(0,10)+'...'+extension);
                }
                else{
                    $(".secondcopy .title").text(fileName);
                }
            }
            else{
                $(".secondcopy .title").text(labelVal);
            }
        });



//picture file input
 $("#picture").on('change',function (e) {
            var labelVal = $(".title").text();
            var oldfileName = $(this).val();
                fileName = e.target.value.split( '\\' ).pop();

                if (oldfileName == fileName) {return false;}
                var extension = fileName.split('.').pop();

            if ($.inArray(extension,['jpg','jpeg','png']) >= 0) {
                $(".picture i").removeClass().addClass('fa fa-file-image-o bgyellow-gradiant textclip');
                $(".picture i, .picture .title").css({'color':'#208440'});
                $(".picture").css({'border':' 1px solid #208440'});
            }
            else if(extension == 'pdf'){
                $(".picture i").removeClass().addClass('fa fa-file-pdf-o bgyellow-gradiant textclip');
                $(".picture i, .picture .title").css({'color':'red'});
                $(".picture").css({'border':' 1px solid red'});

            }

            else{
                $(".picture i").removeClass().addClass('fa fa-paperclip bgyellow-gradiant textclip');
                $(".picture i, .picture .title").css({'color':'black'});
                $(".picture").css({'border':' 1px solid black'});
            }

            if(fileName ){
                if (fileName.length > 14){
                    $(".picture .title").text(fileName.slice(0,10)+'...'+extension);
                }
                else{
                    $(".picture .title").text(fileName);
                }
            }
            else{
                $(".picture .title").text(labelVal);
            }
        });



//picture file input
 $("#proofadd").on('change',function (e) {
            var labelVal = $(".title").text();
            var oldfileName = $(this).val();
                fileName = e.target.value.split( '\\' ).pop();

                if (oldfileName == fileName) {return false;}
                var extension = fileName.split('.').pop();

            if ($.inArray(extension,['jpg','jpeg','png']) >= 0) {
                $(".proofadd i").removeClass().addClass('fa fa-file-image-o bgyellow-gradiant textclip');
                $(".proofadd i, .proofadd .title").css({'color':'#208440'});
                $(".proofadd").css({'border':' 1px solid #208440'});
            }
            else if(extension == 'pdf'){
                $(".proofadd i").removeClass().addClass('fa fa-file-pdf-o bgyellow-gradiant textclip');
                $(".proofadd i, .proofadd .title").css({'color':'red'});
                $(".proofadd").css({'border':' 1px solid red'});

            }

            else{
                $(".proofadd i").removeClass().addClass('fa fa-paperclip bgyellow-gradiant textclip');
                $(".proofadd i, .proofadd .title").css({'color':'black'});
                $(".proofadd").css({'border':' 1px solid black'});
            }

            if(fileName ){
                if (fileName.length > 14){
                    $(".proofadd .title").text(fileName.slice(0,10)+'...'+extension);
                }
                else{
                    $(".proofadd .title").text(fileName);
                }
            }
            else{
                $(".proofadd .title").text(labelVal);
            }
        });




 // stepby step
  $(document).ready(function () {
              var navListItems = $('div.setup-panel div a'),
                      allWells = $('.setup-content'),
                      allNextBtn = $('.nextBtn');

              allWells.hide();

              navListItems.click(function (e) {
                  e.preventDefault();
                  var $target = $($(this).attr('href')),
                          $item = $(this);

                  if (!$item.hasClass('disabled')) {
                      navListItems.removeClass('bgyellow-gradiant').addClass('btn-default');
                      $item.addClass('bgyellow-gradiant');
                      allWells.hide();
                      $target.show();
                      $target.find('input:eq(0)').focus();
                  }
              });

              allNextBtn.click(function(){
                  var curStep = $(this).closest(".setup-content"),
                      curStepBtn = curStep.attr("id"),
                      nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
                      curInputs = curStep.find("input[type='text'],input[type='url'],input[type='date'],input[type='number'],input[type='email'], input[type='file']"),number
                      isValid = true;

                  $(".form-group").removeClass("has-error");
                  for(var i=0; i<curInputs.length; i++){
                      if (!curInputs[i].validity.valid){
                          isValid = false;
                          $(curInputs[i]).closest(".form-group").addClass("has-error");
                      }
                  }

                  if (isValid)
                      nextStepWizard.removeAttr('disabled').trigger('click');
              });

              $('div.setup-panel div a.btn-primary').trigger('click');
            });







