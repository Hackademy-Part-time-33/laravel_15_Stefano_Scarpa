<x-main>

    <div class="container my-5 py-5">

        <h2 class="h1">Crea l'articolo</h2>
        <p class="mb-5">Compila tutti i campi e crea il tuo articolo</p>
        <form action="{{route('tags.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-floating mb-3">
                <input class="form-control" id="name" value="{{ old('name') }}" name="name"
                    type="text">
                <label for="name">Nome categoria</label>
                @error('name')
                    {{ $message }}
                @enderror
            </div>
            
            <div class="d-grid">
                <button class="btn btn-primary btn-lg" type="submit">Crea</button>
            </div>
        </form>
    </div>

</x-main>