<x-main>

    <div class="container my-5 py-5">

        <h2 class="h1">Crea l'articolo</h2>
        <p class="mb-5">Compila tutti i campi e crea il tuo articolo</p>
        <form action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-floating mb-3">
                <input class="form-control" id="titles" value="{{ old('title') }}" name="title"
                    type="text">
                <label for="title">Titolo post</label>
                @error('title')
                    {{ $message }}
                @enderror
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control" name="body" id="floatingTextarea2" rows="10" style="height: 300px;">{{old('body')}}</textarea>
                <label for="floatingTextarea2" class="form-label">Inserisci qui il testo</label>
                @error('body')
                    {{ $message }}
                @enderror
            </div>
            <div class=" form-floating mb-3 p-3 border">
                @foreach ($tags as $tag)
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="tags[]"
                            value="{{ $tag->id }}">
                        <label class="form-check-label">{{ $tag->name }}</label>
                    </div>
                @endforeach
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" id="image" name="image" value type="file">
            </div>
            @error('image')
                {{ $message }}
            @enderror

            <div class="d-grid">
                <button class="btn btn-primary btn-lg" type="submit">Crea</button>
            </div>
        </form>
    </div>

</x-main>