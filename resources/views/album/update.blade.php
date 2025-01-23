<x-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 d-flex justify-content-center align-items-center">
                <h1>Modifica album</h1>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 d-flex justify-content-center align-items-center">
                <form method="POST" action="{{ route('album.edit', compact('album')) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <h2>Crea il tuo album</h2>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nome album</label>
                        <input type="text" class="form-control" name="name" value="{{$album->name}}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Descrizione</label>
                        <textarea name="description" id="" cols="30" rows="10" class="form-control">{{$album->description}}</textarea>
                    </div>
                    <div class="mb-3">
                        <p class="text-muted">Immagine inserita prima</p>
                        <img src="{{Storage::url($album->img)}}" class="img-precedente" alt="">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Cover</label>
                        <input type="file" class="form-control" name="img">
                    </div>
                    


                    <button type="submit" class="btn btn-primary">Crea</button>

                </form>
            </div>
        </div>
    </div>
</x-layout>
