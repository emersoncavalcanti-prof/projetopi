<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body>

    <div class="login-container">

        <div class="box">       


        <div class="animation-box"><script src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs" type="module"></script> 
            <dotlottie-player src="animations/login.json" background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay></dotlottie-player> <script src="animations/login.json"></script>
        </div>

        <div class="login-box">
          <h1>Login</h1>
        
    
          <form action="#" wire:submit='login'>
            <div class="d-flex justify-content-between mb-1">
            @error('email')
            <span class="text text-danger text-start ts-6">{{$message}}</span>
            @enderror
            </div>

            <div class="mb-3">
              <input type="email" class="form-control" placeholder="Email" wire:model='email'>
            </div>
            <div class="d-flex justify-content-between mb-2">
            @error('password')
            <span class="text text-danger text-start ts-6">{{$message}}</span>
            @enderror  
            </div>
            <div class="mb-2">
              <input type="password" class="form-control" placeholder="Senha" wire:model='password'>
            </div>
            <div class="d-flex justify-content-between mb-2">
              <a href="#" class="text text-secondary fs-6 text-decoration-none">Esqueceu a senha?</a>
           </div>
              <button type="submit" class="btn w-100" style="background:#4caf50;color:#FFF">Entrar</button>
              
              <div class="mt-3">
                  @if(session()->has('error'))
                  <span class="text text-danger text-start">{{session()->get('error')}}</span>
                  @endif
              </div>

              <div class="d-block mx-auto text-center">
                <div wire:loading>                 
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" width="41" height=41" style="shape-rendering: auto; display: block; background: transparent;" xmlns:xlink="http://www.w3.org/1999/xlink"><g><g>
                        <path stroke-width="12" stroke="#4caf50" fill="none" d="M50 15A35 35 0 1 0 74.74873734152916 25.251262658470843"></path>
                        <path fill="#4caf50" d="M49 3L49 27L61 15L49 3"></path>
                        <animateTransform keyTimes="0;1" values="0 50 50;360 50 50" dur="1s" repeatCount="indefinite" type="rotate" attributeName="transform"></animateTransform>
                    </g><g></g></g></svg>
                </div>
            </div>
            
          </form>
          

       
        </div>
        </div>
      </div>
   

   
  


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
   @livewireScripts
</body>
</html>