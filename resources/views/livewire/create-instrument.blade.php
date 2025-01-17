<div>
    @auth
        
    <form class="m-3" wire:submit="createInstrument">
        @csrf
        <h3 class="text-center">Add a new Instrument</h3>

        <div class="mb-3">
          <label  class="form-label">Brand</label>
          <input type="text" class="form-control" wire:model.blur="brand" >
          @error('brand')<div class="alert alert-danger"> {{ $message }}</div>@enderror
        </div>

        <div class="mb-3">
            <label  class="form-label">Model</label>
            <input type="text   " class="form-control" wire:model.blur="model">
            @error('model')<div class="alert alert-danger"> {{ $message }}</div>@enderror
        </div>

        <div class="mb-3">
            <label  class="form-label">Price</label>
            <input type="text   " class="form-control" wire:model.blur="price">
            @error('price')<div class="alert alert-danger"> {{ $message }}</div>@enderror
        </div>
        
        <div class="mb-3">
            <label  class="form-label">Description</label>
            <textarea name="description" wire:model.blur="description"  class="form-control" cols="30" rows="1"></textarea>
            @error('description')<div class="alert alert-danger"> {{ $message }}</div>@enderror
        </div>

        <div class="mb-3">
            <label  class="form-label">Image</label>
            <input type="file" class="form-control" wire:model.blur="image" >
            @error('image')<div class="alert alert-danger"> {{ $message }}</div>@enderror
        </div>
        
        <div>
            <a href="{{ route('instrument.index') }}">
                <button type="submit" class="btn btn-primary rounded-pill">Add</button>
            </a>
        </div>

    </form>

    @else
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="d-flex col-12">

                <svg xmlns="http://www.w3.org/2000/svg" class="width-100" >
                    
                    <symbol id="exclamation-triangle-fill" viewBox="0 0 25 25">
                        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                    </symbol>
                </svg>
                
                <div class="alert alert-warning d-flex align-items-center" role="alert">
                    <svg class="bi  me-2 " role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                    <div>
                        <p>
                            Please <a href="{{ route('login') }}" class="alert-link">login</a> or <a href="{{ route('register') }}" class="alert-link">register</a> to add an instrument.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endauth
</div>
