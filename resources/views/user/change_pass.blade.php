<script>
  window.addEventListener('load', function load() {
    $('#btn_change_pass').click(function(e){
      e.preventDefault();

      var password = prompt("Please enter new password: ");
      if(password != null && password != '')
      {
        if(password.length > 5 && password.length <= 10)
        {
          var confirm = prompt("Confirm password :");
          if(confirm == password)
          {
            (async function () {
              var response = await axios.post("{{url('/change-password')}}", {
              password: password,
              completed: true
              });
              
              if(response.data =='success')
                alert('Password is changed.');
              
            })()

          }
          else
          {
            alert('Password not matched. Try Again');
          }
        }
        else 
          alert('Password is '+password.length+' word(s). Password should be more then 5 and less then or equal to 10 words');
      }

      
    });
  });
</script>