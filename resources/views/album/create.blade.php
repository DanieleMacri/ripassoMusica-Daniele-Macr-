<x-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 d-flex justify-content-center align-items-center">
                <h1>Crea album</h1>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 d-flex justify-content-center align-items-center">
                <form method="POST" action="{{ route('album.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <h2>Crea il tuo album</h2>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nome album</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Descrizione</label>
                        <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Cover</label>
                        <input type="file" class="form-control" name="img">
                    </div>
                    <div class="mb-3">
                        <select class="form-control" aria-label="Default select example" name="genres[]" multiple>
                            @foreach ($genres as $genre)
                                <option value="{{$genre->id}}">{{$genre->name}}</option>
                            @endforeach

                        </select>
                    </div>


                    <button type="submit" class="btn btn-primary">Crea</button>

                </form>
            </div>
        </div>
    </div>
</x-layout>
