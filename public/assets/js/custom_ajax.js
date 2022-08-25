// CUSTOM AJAX JS CALLS 

 $(".post_subscribe_button").click(function(event){
      event.preventDefault();
      let email = $("input[name=email]").val();
      let _token   = $('meta[name="csrf-token"]').attr('content');

      $.ajax({
        url: "/subscribe",
        type:"POST",
        data:{
          email:email,
          _token: _token
        },
           success:function(data){
                $('.message').text(data.message); 
           }
       });
  });