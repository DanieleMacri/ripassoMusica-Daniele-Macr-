<x-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 d-flex justify-content-center align-items-center">
                <h1>Dettagli album selezionato</h1>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 d-flex justify-content-center align-items-center">
                    
                <div class="card rounded-5" style="width: 18rem;">
                    <img src="{{Storage::url($album->img)}}" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                      <h5 class="card-title">{{$album->name}}</h5>
                      <p class="card-text">{{$album->description}}</p>
                      <a href="{{route('album.update', compact('album'))}}" class="btn btn-warning">Modifica</a>
                      <form action="{{route('album.destroy', compact('album'))}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Elimina</button>
                      </form>
                      
                    </div>
                </div>
              
            </div>
        </div>
    </div>
</x-layout>
