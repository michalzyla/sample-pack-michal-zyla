$(document).ready(function() {
  $('#submit').click(function(e){
    e.preventDefault();

    var name = $("#name").val();
    var email = $("#email").val();
    var phone = $("#phone").val();
    var message = $("#message").val();

    $.ajax({
      type: "POST",
      url: "post.php",
      dataType: "json",
      data: {name:name, email:email, phone:phone, message:message},
      success : function(data){
        if (data.code == "200"){
          $(".contact_message").html("<p class='success'>"+data.msg+"</p>");
        } else {
          $(".contact_message").html("<p class='error'>"+data.msg+"</p>");
        }
      }
    });
  });
});