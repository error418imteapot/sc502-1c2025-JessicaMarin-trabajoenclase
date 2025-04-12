document.addEventListener('DOMContentLoaded', function(){
    const form = document.getElementById('loginForm');
    const loginError = document.getElementById('login-error');
 
    form.addEventListener('submit', async function(e){
        e.preventDefault();
 
        const email = document.getElementById('email').value;
        const password = document.getElementById('password').value;
 
        //llamamos al servidor
        const response = await fetch('backend/login.php',{
            method: 'POST',
            headers:{
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            body: new URLSearchParams({email: email, password: password})
        });
        //obtenemos la respuesta del servidor en json y se guarda en una variable
        const result = response.json();
 
        if(response.ok){
            //login exitoso
            window.location.href ='dashboard.html';
        }else{
            loginError.style.display = 'block';
            loginError.textContent = result.error;
        }

        // if(email === 'test@example.com' && password === 'password123'){
        //     window.location.href ='dashboard.html';
        // }else{
        //     loginError.style.display = 'block';
        // }

    });
})