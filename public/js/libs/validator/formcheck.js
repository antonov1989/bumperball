(function( $ ){
    
  //// ---> Check issue element
    jQuery.fn.exists = function() {
       return jQuery(this).length;
    };
  
    $(function() {
    
    //if(!is_mobile()){
      
      if( $('.phonefield').exists()){
        $('.phonefield').mask('38 (999) 999-99-99');
      }
      
      if( $('#checkout-form').exists()){
      
        $('#checkout-form').each(function(){
        
          var form = $(this),
              btn = form.find('[type="submit"]');


          form.find('.rfield').addClass('empty_field').parents('.rline').append('<span class="rfield_error">Заполните это поле</span>');
          btn.addClass('disabled');
          
          // Функция проверки полей формы      
          function checkInput(){
            
            form.find('.rfield').each(function(){
              
              if($(this).hasClass('phonefield')){
              
                var pmc = $(this);
                if ( (pmc.val().indexOf("_") != -1) || pmc.val() == '' ) {
                  pmc.addClass('empty_field');
                } else {
                  pmc.removeClass('empty_field');
                }
                
              } else if($(this).hasClass('mailfield')) {
              
                var mailfield = $(this);
                var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
                if(pattern.test(mailfield.val())){
                  mailfield.removeClass('empty_field');
                } else {
                  mailfield.addClass('empty_field');
                }
              
              } else if($(this).is(':checkbox')) {
                var checkBox = $(this);
                if(checkBox.is(':checked')){
                  checkBox.removeClass('empty_field');

                } else {
                  checkBox.addClass('empty_field')
                }
              } else if($(this).val() != '') {

                $(this).removeClass('empty_field');

              } else {

                $(this).addClass('empty_field');
              }

            });
          }
          
          // Функция подсветки незаполненных полей
          function lightEmpty(){
            form.find('.empty_field').addClass('rf_error');
            form.find('.empty_field').parents('.rline').find('.rfield_error').css({'visibility':'visible'});
            setTimeout(function(){
              form.find('.empty_field').removeClass('rf_error');
              form.find('.empty_field').parents('.rline').find('.rfield_error').css({'visibility':'hidden'});
            },10000);
          }

          form.find('.empty_field').blur(function(){
            validateInput($(this));
          });

          form.find('.empty_field').keyup(function(){
            validateInput($(this));

          });

          function validateInput(input){
            if(input.val() == ''){
              input.addClass("rf_error").removeClass("rf_val");
            }else{
              input.removeClass("rf_error").addClass("rf_val");
            }
          }

          //  Полсекундная проверка
          setInterval(function(){
            checkInput();
            var sizeEmpty = form.find('input.empty_field').length;
            if(sizeEmpty > 0){
              if(btn.hasClass('disabled')){
                return false
              } else {
                btn.addClass('disabled')
              }
            } else {
              btn.removeClass('disabled')
            }
          },1000);
          
          //  Клик по кнопке
          btn.click(function(){
            if($(this).hasClass('disabled')){
              lightEmpty();
              return false
            } else {
              form.submit();
            }
          });
          
        });
      
      }
    //}
    
    });

})( jQuery );