<x-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 d-flex justify-content-center align-items-center">
                <h1>Registrati</h1>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 d-flex justify-content-center align-items-center">
              <form method="POST" action="{{route('register')}}">
                @csrf
                <div class="mb-3">
                  <label class="form-label">Nome</label>
                  <input type="text" class="form-control" name="name">
                </div>
                <div class="mb-3">
                  <label class="form-label">Email</label>
                  <input type="email" class="form-control" name="email">
                </div>
                <div class="mb-3 form-label">
                  <label class="form-label">Password</label>
                  <input type="password" class="form-control" name="password">
                </div>
                <div class="mb-3 form-label">
                  <label class="form-label">Conferma Password</label>
                  <input type="password" class="form-control" name="password_confirmation">
                </div>
                <button type="submit" class="btn btn-primary">Registrati</button>
                <p>Hai già un account? <a href="{{route('login')}}">Accedi</a></p>
              </form>
            </div>
        </div>
    </div>
</x-layout>