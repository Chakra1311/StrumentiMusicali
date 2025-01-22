<x-layout>
    <div>
        <x-header title="{{ $instrument->brand}} - {{ $instrument->model}}"></x-header>
    </div>

    <div class="container my-5">
        <div class="row justify-content-start align-items-center">
          
            <div class="col-12 col-md-8">
                <img src="{{Storage::url($instrument->image)}}" class="card-img-top img-fluid" alt="...">
            </div>

            <div class="col-4 d-flex flex-column align-items-start justify-content-center">
                <h2 class="card-title m-3">{{$instrument->brand}} - {{ $instrument->model}}</h2>

                <p class="card-text m-3">{{$instrument->description}}</p>
                
                <p class="card-text m-3">€ {{$instrument->price}}</p>


                <div class="text-center m-1">
                    <a href="{{route('instrument.index')}}" class="btn btn-primary rounded-pill ">Instruments</a>
                  @auth
                      
                  @if ($instrument->user->name == Auth::user()->name)
                  
                  <a href="{{route('instrument.edit', compact('instrument'))}}" class="btn btn-warning text-dark rounded-pill m-1"><i class="bi bi-pencil-square"></i></a>
                  <!-- Bottone che apre la modale -->
                  <button type="button" class="btn btn-danger rounded-pill m-1" data-bs-toggle="modal" data-bs-target="#confirmModal">
                      <i class="bi bi-trash"></i>
                    </button>
                    
                    <!-- Modale Bootstrap -->
                    <div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="confirmModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="confirmModalLabel">Confirm Deletion</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <div class="modal-body">
                                    Are you sure you want to delete this instrument?
                                </div>
                                
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                                    
                                    <!-- Bottone per eliminare -->
                                   <form action="{{ route('instrument.destroy', compact('instrument')) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-danger" onclick="submitDeleteForm()">Delete</button>
                                    </form> 
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Form nascosto -->
                    <form action="{{ route('instrument.destroy', compact('instrument')) }}" class="d-inline" method="POST" id="delete-form">
                        @csrf
                        @method('DELETE')
                    </form>
                    
                    <script>
                        function submitDeleteForm() {
                            document.getElementById('delete-form').submit();
                        }
                        </script>
                    @endif
                    @endauth
                </div>  
            
            </div>
            
        </div>

    </div>

</x-layout>
