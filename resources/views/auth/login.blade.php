<x-layout>
    <div>
        <x-header title="Login"></x-header>
        
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-8 text-center border shadow rounded ">
                <form class="m-3" action="{{ route('login') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label  class="form-label">Email address</label>
                        <input type="email" class="form-control" name="email">
                      </div>
  
                      <div class="mb-3">
                        <label  class="form-label">Password</label>
                        <input type="password" class="form-control" name="password">
                      </div>
                    
                      <div>
                        <button type="submit" class="btn btn-primary">Login</button>
                        <p>Don't have an account? <a href="{{ route('register') }}">Register</a></p>
                    </div>
                  </form>
            </div>
        </div>
    </div>
</x-layout>
