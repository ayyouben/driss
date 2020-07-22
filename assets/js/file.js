



function navigate(link){

  //var link=$(this).val();
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
}

/*$(document).ready(function(){

    $('.hh').click(function(){
      var link=$(this).val();
 
     $.ajax({
       url: 'admin/'+link+'.php',
       type: 'post',
       
       success: function(response){ 
        
         $('#content').html(response);
       }
     });
        
    });
   })*/
   function showNotification(from, align , message,type){

    jQuery.notify({
        icon: "add_alert",
        message: message
  
    },{
      type: type,
        timer: 4000,
        placement: {
            from: from,
            align: align
        }
    });
  }
// -------- Ajax login function ------------------>

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
          showNotification('top','center','Votre Email ou Mot de passe ne sont pas correcte .','danger');
         }
       }
     });
        
    });
   });
  