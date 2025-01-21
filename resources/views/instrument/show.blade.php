<x-layout>
    <div>
        <x-header title="{{ $instrument->brand}} - {{ $instrument->model}}"></x-header>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center align-items-center">
          
            <div class="col-6">
                <img src="{{Storage::url($instrument->image)}}" class="card-img-top img-fluid" alt="...">
            </div>

            <div class="col-6 d-flex flex-column align-items-start justify-content-center">
                <h2 class="card-title m-3">{{$instrument->brand}} - {{ $instrument->model}}</h2>

                <p class="card-text m-3">{{$instrument->description}}</p>
                
                <p class="card-text m-3">€ {{$instrument->price}}</p>
                <div class="text-center m-1">
                    <a href="{{route('instrument.index')}}" class="btn btn-primary rounded-pill">List of the instruments</a>
                    <a href="{{route('instrument.edit', compact('instrument'))}}" class="btn btn-warning text-dark rounded-pill">Edit</a>
                </div>  
            
            </div>
            
        </div>

    </div>

</x-layout>
