<x-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 d-flex justify-content-center align-items-center">
                <h1>Tutti gli album</h1>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 d-flex justify-content-center align-items-center">
                @foreach ($albums as $album)
                    
                <div class="card rounded-5" style="width: 18rem;">
                    <img src="{{Storage::url($album->img)}}" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                      <h5 class="card-title">{{$album->name}}</h5>
                      <p class="card-text">{{$album->description}}</p>
                      <a href="{{route('album.show', compact('album'))}}" class="btn btn-primary">Dettaglio</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-layout>
