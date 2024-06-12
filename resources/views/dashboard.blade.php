<x-main>

    <div class="container py-4 my-5"> 
        <div class="p-5 mb-4 bg-tertiary rounded border">
            <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold">Benvenuto {{Auth::user()->name}}</h1>
                <p class="col-md-8 fs-4">Qui puoi creare nuovi
                    post, clicca sul pulsante in basso per
                    accedere alla sezione dedicata </p>
                    <a class="btn btn-primary btn-lg rounded"
                    type="button" href="#">Nuovo post</a>
                </div>
            </div>
            <div class="row align-items-md-stretch">
                <div class="col-md-4">
                    <div class="h-100 p-5 text-bg-dark rounded">
                        <h2>Amministra i post</h2>
                        
                        <a class="btn btn-outline-light rounded"
                        type="button" href="{{route('posts.index')}}">Vedi post</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div
                    class="h-100 p-5 bg-body-tertiary border rounded">
                    <h2>Gestione Categorie</h2>
                    
                    <a class="btn btn-outline-dark rounded"
                        type="button" href="{{route('tags.index')}}">Vedi categorie</a>
                </div>
            </div>
            <div class="col-md-4">
                <div
                class="h-100 p-5  border rounded">
                <h2>Gestione Autori</h2>
                
                <a class="btn btn-outline-dark rounded"
                        type="button" href="#">Vedi autori</a>
            </div>
            </div>
        </div>
    </div>

</x-main>