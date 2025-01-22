
<x-layout>
    <div>
        <x-header title="List of the Instruments"></x-header>
    </div>
    
    <div class="container my-5">
        <div class="row justify-content-center align-items-center">
            @foreach ($instruments as $instrument)
            <div class="col-12 col-md-4 my-2 d-flex justify-content-center">
                <a href="{{route('instrument.show', $instrument)}}" class="text-decoration-none text-dark">
                    <div class="card" style="width: 18rem;">
                    
                        <img src="{{Storage::url($instrument->image)}}" class="card-img-top img-fluid" alt="...">
                        <div class="card-body">
                            
                            <h5 class="card-title">{{$instrument->brand}}</h5>
                            
                            <p class="card-text">{{$instrument->model}}</p>
                            <p class="card-text">€ {{$instrument->price}}</p>
                            <p><a href="{{route('instrument.byUser', $instrument->user)}}" class="text-decoration-none text-dark">{{$instrument->user->name}}'s Instrument</a></p>
                           <a href="{{route('instrument.show', $instrument)}}"> <button class="btn btn-primary rounded-pill">Details</button></a>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
    
</x-layout>

