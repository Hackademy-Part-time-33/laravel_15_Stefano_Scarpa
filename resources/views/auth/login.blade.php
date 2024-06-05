<x-main>

    <div class="container-fluid py-5 d-flex justify-content-center align-items-center flex-column mx-auto">

        <h2 class="h2 fw-bolder">Accedi</h2>
        <p class="">Inserisci i dati e accedi</p>

        <div class="border p-5 form-auth">
            
            <form id="contactForm" action="{{route('login')}}" method="POST">
                @csrf
               
                <div class="form-floating mb-3">
                    <input class="form-control" id="email" name="email" type="text"/>
                    <label for="email">Email</label>
                </div>
    
                <div class="form-floating mb-3">
                    <input class="form-control" id="password" name="password" type="password"/>
                    <label for="email">Password</label>
                </div>
                
                <div class="d-grid"><button class="btn btn-primary btn-md mb-3" type="submit">Accedi</button>
                    <a class="" type="submit" href="{{route('register')}}">Non sei registrato? Iscriviti!</a>
                </div>
                
            </form>

        </div>

    </div>
 
</x-main>