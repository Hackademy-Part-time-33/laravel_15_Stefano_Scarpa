<x-main>

    <div class="container vh-100 my-5">

        <div class="p-3">
            <h2 class="h2">Lista Post</h2>
            <p>questa è la lista</p>
        </div>

        <div class="container p-3">
            <a href="{{ route('posts.create')}}"
            class="mb-3 btn btn-outline-success me-md-2 rounded-0">
            <i class="bi bi-file-earmark-plus h5"></i>
            Nuovo post
        </a>

            <table class="table border mt-2">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Immagine</th>
                        <th scope="col">Autore</th>
                        <th scope="col">Titolo</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <th scope="row">#{{ $post->id }}</th>
                            <td>
                                <img class="card-img-top" style="width:3rem" src="{{ Storage::url($post->image) }}"
                                    alt="..." />
                            </td>
                            <td>{{$post->user->name}}</td>
                            <td>{{ $post->title }}</td>
                            
                            <td>
    
                                <div class="d-grid gap-1 d-md-flex justify-content-md-end">
    
                                    @if ($post->id === Auth::user()->id)    
                                    <a href="{{ route('posts.edit', ['post' => $post->id]) }}"
                                        class="btn me-md-2">
                                        <span class="material-symbols-outlined">edit_square</span>
                                    </a>
                                    @else
                                    
                                    @endif
                                    <a href="{{ route('posts.show', ['post' => $post->id]) }}"
                                        class="btn me-md-2">
                                        <span class="material-symbols-outlined">description</span>
                                    </a>
                                    
                                    <form action="{{ route('posts.destroy', ['post' => $post->id]) }}" method="POST">
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