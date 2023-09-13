<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  </head>
  <body>

    

    <div class="container mt-5">

        <div class="row justify-content-center">
            <div class="col-md-5">
    
                @if(session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">                   
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
    
                @if(session()->has('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">                   
                        {{ session('loginError') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
            
    
    
                <main class="form-signin w-100 m-auto">
                    <h1 class="h3 mb-3 fw-normal text-center fs-1">Login Puh</h1>
     
                    <form action="/login" method="post">
                        @csrf
                    <div class="form-floating">
                        <input type="text" name="username" class="form-control @error('username')is-invalid
                        @enderror" id="username" placeholder="Username" autofocus required value="{{ old('username') }}">
                        <label for="username">Username</label>
                    @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                        <label for="password">Password</label>
                    </div>
                
                    <button class="btn btn-primary w-100 py-2" type="submit">Login</button>
                    </form>
                    <small class="d-block text-center mt-2">Kamu pemula? <a href="/register">register</a> untuk jadi Sepuh</small>
                </main>
            </div>
        </div>
        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

  </body>



</html>