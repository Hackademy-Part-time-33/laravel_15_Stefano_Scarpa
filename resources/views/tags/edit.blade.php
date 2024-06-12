<x-main>

    <div class="container my-5 py-5">
        
        <h2 class="h1">Modifica l'articolo</h2>
        <p class="mb-5">Per modificare l'articolo entra nei cambi e fai le tue modifiche e poi clicca su salva</p>
        <form action="{{route('tags.update', compact('tag'))}}" method="POST">
            @method('PUT')
            @csrf
            <div class="form-floating mb-3">
                <input class="form-control" id="name" value="{{ $tag->name }}" name="name"
                type="text">
                <label for="name">Nome categoria</label>
                @error('name')
                {{ $message }}
                @enderror
            </div>
            <div class="d-grid">
                <button class="btn btn-primary btn-lg" type="submit">Aggiorna</button>
            </div>
        </form>
    </div>

</x-main>