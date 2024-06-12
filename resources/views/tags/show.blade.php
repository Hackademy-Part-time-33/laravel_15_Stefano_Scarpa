<x-main>

    <section class="py-5">
        <div class="container px-5 my-5">
            <div class="row gx-5">
                <div class="col-lg-3">
                    <div class="d-flex align-items-center mt-lg-5 mb-4">
                        <img class="img-fluid rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." />
                        <div class="ms-3">
                            <div class="fw-bold">{{$post->user->name}}</div>
                            <div class="text-muted">News, Business</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <!-- Post content-->
                    <article>
                        <!-- Post header-->
                        <header class="mb-4">
                            <!-- Post title-->
                            <h1 class="fw-bolder mb-1">{{ $post->title }}</h1>
                            <!-- Post meta content-->
                            <div class="text-muted fst-italic mb-2">{{ $post->created_at }}</div>
                            <!-- Post categories-->
                            @foreach ($post->tags as $tag)
                            <a class="badge bg-secondary text-decoration-none link-light" href="#!">{{$tag->name}}</a>
                            @endforeach
                            
                        </header>
                        <!-- Preview image figure-->
                        <figure class="mb-4"><img class="img-fluid rounded" src="{{ Storage::url( $post->image ) }}" alt="..." /></figure>
                        <!-- Post content-->
                        <section class="mb-5">
                            <p class="fs-5 mb-4">{{ $post->body }}</p>
                        </section>
                    </article>
                </div>
            </div>
        </div>
    </section>

</x-main>