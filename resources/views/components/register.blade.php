<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
      <!-- Boxicons -->
      <link href='https://cdn.boxicons.com/fonts/brands/boxicons-brands.min.css' rel='stylesheet'></head>
    <title>Document</title>
</head>
<body>
    @include('components.header')
      <div class="container mt-4">
            <label class="text-start ">REGISTER-VOUS</label><hr>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="{{route('register.process')}}"  method="post" class="form-control d-flex  flex-column align-item-center ">
                     @csrf
                     <div class="col-md-8 mb-3 w-75 mx-auto">
                        <input type="text" name="name" class="form-control  text-center  border-2  px-2 py-2 me-2"  placeholder="enter votre nom" value="{{old('name')}}">
                        @error('name')
                    <div class="alert alert-danger">
                         {{$message}}
                    </div>
                    @enderror
                      </div>
                      <div class="col-md-6 col-sm-12 mb-3 w-75 mx-auto">
                        <input type="text" name="prenom" class="form-control  text-center  border-2  px-2 py-2 me-2"  placeholder="enter votre prénom" value="{{old('prenom')}}">
                    @error('prenom')
                    <div class="alert alert-danger">
                         {{$message}}
                    </div>
                    @enderror
                      </div>
                     <div class="col-md-6 col-sm-12 mb-3  w-75 mx-auto">
                        <input type="text" name="email" class="form-control text-center  border-2  px-2 py-2 me-2"  placeholder="enter votre mail" value="{{old('email')}}">
                      @error('email')
                      <div class="alert alert-danger">
                        {{$message}}
                      </div>
                      @enderror
                      </div>
                     <div class="col-md-6 col-sm-12 mb-3  w-75 mx-auto">
                        <input type="password" name="password" class="form-control text-center   border-2  px-2 py-2 me-2"  placeholder="enter votre mot de passe" value="{{old('password')}}">
                     @error('password')
                     <div class="alert alert-danger">
                      {{$message}}
                     </div>
                     @enderror
                      </div>
                       <div class="col-md-6 col-sm-12 mb-3  w-75 mx-auto">
                        <input type="password" name="password_confirmation" class="form-control text-center   border-2  px-2 py-2 me-2"  placeholder="confirmer le  mot de passe" value="{{old('confimer')}}">
                     @error('confirmer')
                     <div class="alert alert-danger">
                      {{$message}}
                     </div>
                     @enderror
                      </div>
                     <input type="submit" name="role" value="login"  class="btn btn-dark text-white w-100" id="login" >
                </form>
                <div class="text-center mb-2 mt-3">
                  <a href="/login" class="text-black">Already have an account? Log in</a>
                </div>
            </div>
        </div>
    </div>
    @include('components.footer')
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>