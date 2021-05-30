$(document).ready(function(){

    $("#username").keyup(function(){
 
       var username = $(this).val().trim();
 
       if(username != ''){
 
          $.ajax({
             url: '../views/ajax.php',
             type: 'post',
             data: {username: username},
             success: function(response){
 
                 $('#uname_response').html(response);
                 console.log("off");
              }
          });
       }else{
          $("#uname_response").html("");
          console.log("else");
       }
 
     });
 
  });