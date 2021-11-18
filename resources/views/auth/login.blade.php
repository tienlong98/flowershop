<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
	<link rel="stylesheet" type="text/css" href="{{asset('/scss/dn-dk.css')}}">
</head>
<body>
    <div class="form-structor">
        <div class="signup">
            <h2 class="form-title" id="signup"><span>or</span>Sign up</h2>
            <x-jet-validation-errors class="mb-4" />
            <form action="{{route('register')}}" method="POST">
                @csrf
            <div class="form-holder">
               
                <input type="text" name="name" class="input" placeholder="Name" :value="old('name')" required autofocus autocomplete="name" />
                <input type="email" name="email" class="input" placeholder="Email" :value="old('email')" required />
                <input type="password" name="password" class="input" placeholder="Password"  required autocomplete="new-password"  />
                <input type="password" class="input" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password"  />
                
            </div>
            <button type="submit" value="register" class="submit-btn">Sign up</button>
        </form>
        </div>
        <div class="login slide-up">
            
                <div class="center">
                    <h2 class="form-title" id="login"><span>or</span>Log in</h2>
                    <form action="{{route('login')}}" method="POST">
                        @csrf
                    <div class="form-holder">
                        <input type="email" name="email" class="input" placeholder="Email" :value="old('email')" required autofocus />
                        <input type="password" name="password" class="input" placeholder="Password" required autocomplete="current-password" />
                    
                    </div>
                    <button class="submit-btn" type="submit" value="login">Log in</button>
                </form>
                </div>
            
           
        </div>
    </div>
    <script>
        console.clear();

        const loginBtn = document.getElementById('login');
        const signupBtn = document.getElementById('signup');

        loginBtn.addEventListener('click', (e) => {
            let parent = e.target.parentNode.parentNode;
            Array.from(e.target.parentNode.parentNode.classList).find((element) => {
                if (element !== "slide-up") {
                    parent.classList.add('slide-up')
                } else {
                    signupBtn.parentNode.classList.add('slide-up')
                    parent.classList.remove('slide-up')
                }
            });
        });

        signupBtn.addEventListener('click', (e) => {
            let parent = e.target.parentNode;
            Array.from(e.target.parentNode.classList).find((element) => {
                if (element !== "slide-up") {
                    parent.classList.add('slide-up')
                } else {
                    loginBtn.parentNode.parentNode.classList.add('slide-up')
                    parent.classList.remove('slide-up')
                }
            });
        });
    </script>
</body>

</html>