<x-layout>
   
    <div>
        <x-header title="Edit the Instrument"></x-header>
        
    </div>
    @auth
        
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-8 border shadow rounded-4 ">
                <livewire:edit-instrument
                idInstrument="{{$instrument->id}}"
                />
            </div>
        </div>
    </div>
    @else 
    <div class="container-fluid  m-1">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 ">
                <livewire:create-instrument/>
            </div>
        </div>
    </div>
    @endauth

</x-layout>
