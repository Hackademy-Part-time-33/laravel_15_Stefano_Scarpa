<x-main>

    <div class="container vh-100 my-5">

        <div class="p-3">
            <h2 class="h2">Lista Categorie</h2>
            <p>questa è la lista</p>
        </div>

        <div class="container p-3">
            <a href="{{ route('tags.create')}}"
            class="mb-3 btn btn-outline-success me-md-2 rounded-0">
            <i class="bi bi-file-earmark-plus h5"></i>
            Nuova Categoria
        </a>

            <table class="table border mt-2">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Titolo</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tags as $tag)
                        <tr>
                            <th scope="row">#{{ $tag->id }}</th>
                            <td>{{ $tag->name }}</td>
                            
                            <td>
    
                                <div class="d-grid gap-1 d-md-flex justify-content-md-end">
 
                                    <a href="{{ route('tags.edit', ['tag' => $tag->id]) }}"
                                        class="btn me-md-2">
                                        <span class="material-symbols-outlined">edit_square</span>
                                    </a>
                                    
                                    
                                    <form action="{{ route('tags.destroy', ['tag' => $tag->id]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn text-danger me-md-2"><span class="material-symbols-outlined">delete</span></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
    
                </tbody>
            </table>
        </div>

    </div>

</x-main>