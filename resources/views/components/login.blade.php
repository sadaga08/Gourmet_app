<div>
     @include('components.header')
   
    <div class="container mt-4">
            <label class="text-start ">CONNECTEZ-VOUS</label><hr>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="{{route('login.process')}}"  method="post" class="form-control d-flex  flex-column align-item-center ">
                     @csrf
                     <div class="col-md-6 col-sm-12  w-75 mx-auto">
                        <input type="text" name="email" class="form-control text-center  border-2  px-2 py-2 me-2"  placeholder="enter votre mail" value="{{old('email')}}">
                     @error('email')
                     <div class="alert alert-danger">
                        {{$message}}
                     </div>
                     @enderror
                    </div>
                     <div class="col-md-6 col-sm-12 mb-3  w-75 mx-auto">
                        <input type="password" name="password" class="form-control text-center   border-2  px-2 py-2 me-2" required placeholder="enter votre mot de passe">
                     @error('password')
                     <div class="alert alert-danger">
                        {{$message}}
                     </div>
                     @enderror
                    </div>
                    <div class="col-md-6 col-sm-12 mb-3  w-75 mx-auto">
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} id="">
                        remember me
                    </div>
                     <input type="submit" name="role" value="login"  class="btn btn-dark text-white w-100" id="login" >
                </form>
                <div class="text-center mb-2 mt-3">
                  <a href="/register" class="text-black">Create an account</a>
                </div>
            </div>
        </div>
    </div>
        @include('components.footer')

</div>