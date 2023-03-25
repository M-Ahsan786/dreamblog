  function checkPassword() {
            var password = document.getElementById('pass');
            var repassword = document.getElementById('repass');
            
            if(password.value == repassword.value) {
                
                pass.style.color = 'green';
                
                
            } else {
               
                pass.style.color = 'red';
                
            }
        }
