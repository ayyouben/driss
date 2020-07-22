
$(document).ready(function(){

    $('.hh').click(function(){
      var link=$(this).val();
     // var userid = $(this).data('id');
   
      // AJAX request
     $.ajax({
       url: 'admin/'+link+'.php',
       type: 'post',
       
       success: function(response){ 
         // Add response in Modal body
         $('#content').html(response);
       }
     });
        
    });
   });
   function showNotification(from, align){

    jQuery.notify({
        icon: "add_alert",
        message: "Welcome to <b>Material Dashboard</b> - a beautiful freebie for every web developer."
  
    },{
        type: 'danger',
        timer: 4000,
        placement: {
            from: from,
            align: align
        }
    });
  }

  $(document).ready(function(){

    $('#logine').click(function(){
      
     // var userid = $(this).data('id');
   
      // AJAX request
     $.ajax({
       url: '././login.php',
       type: 'POST',
       data:{
         email:$('#email').val(),
         password:$('#password').val()

       },
       success: function(response){ 
      
         if(response==1){
         
         window.location='tamplate.php';
         }else{
          showNotification('top','center');
         }
       }
     });
        
    });
   });
  