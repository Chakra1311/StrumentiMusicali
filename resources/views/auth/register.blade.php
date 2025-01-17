<x-layout>
    <div>
        <x-header title="Register"></x-header>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-8 text-center border shadow rounded ">
                <form class="m-3" action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                      <label  class="form-label">User name</label>
                      <input type="name" class="form-control" name="name">
                    </div>

                    <div class="mb-3">
                        <label  class="form-label">Email address</label>
                        <input type="email" class="form-control" name="email">
                      </div>
  
                      <div class="mb-3">
                        <label  class="form-label">Password</label>
                        <input type="password" class="form-control" name="password">
                      </div>
                      
                    <div class="mb-3">
                      <label  class="form-label"> Confirm Password</label>
                      <input type="password" class="form-control" name="password_confirmation">
                    </div>
                    
                    <div>
                        <button type="submit" class="btn btn-primary">Register</button>
                        <p>Already have an account? <a href="{{ route('login') }}">Login</a></p>
                    </div>
                  </form>
            </div>
        </div>
    </div>
</x-layout>
