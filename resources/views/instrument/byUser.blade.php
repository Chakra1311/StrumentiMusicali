<x-layout>
    <div>
        <x-header title="{{ $user->name}}'s Instruments"></x-header>


    </div>
    <div class="container my-5">
        <div class="row justify-content-center align-items-center">
            @foreach ($user->instruments as $instrument)
            <div class="col-12 col-md-4 my-2 d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    
                    <a href="{{route('instrument.show', $instrument)}}" class="text-decoration-none text-dark">
                        <img src="{{Storage::url($instrument->image)}}" class="card-img-top img-fluid" alt="...">
                        <div class="card-body">
                            
                            <h5 class="card-title">{{$instrument->brand}}</h5>
                            {{-- <p><a href="{{route('instrument.byUser', $instrument->user)}}" class="text-decoration-none text-dark">{{$instrument->user->name}}</a></p> --}}
                            <p class="card-text">{{$instrument->model}}</p>
                            <p class="card-text">€ {{$instrument->price}}</p>
                            <button class="btn btn-primary rounded-pill">Details</button>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
</x-layout>
