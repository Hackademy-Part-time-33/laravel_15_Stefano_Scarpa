<x-main>

    <div class="container-fluid py-5 d-flex justify-content-center align-items-center flex-column mx-auto">

        <h2 class="h2 fw-bolder">Registrati</h2>
        <p class="">Compila il form e registati per accedere</p>

        <div class="border p-5 form-auth">
            
            <form id="contactForm" action="{{route('register')}}" method="POST">
                @csrf
               
                <div class="form-floating mb-3">
                    <input class="form-control" id="name" name="name" type="text"/>
                    <label for="name">Full name</label>
                </div>
               
                <div class="form-floating mb-3">
                    <input class="form-control" id="email" name="email" type="email"/>
                    <label for="email">Email address</label>
                </div>
    
                <div class="form-floating mb-3">
                    <input class="form-control" id="password" name="password" type="password"/>
                    <label for="email">Password</label>
                </div>
    
                <div class="form-floating mb-3">
                    <input class="form-control" id="password" name="password_confirmation" type="password"/>
                    <label for="email">Password</label>
                </div>
    
                <div class="d-grid"><button class="btn btn-primary btn-md mb-3" type="submit">Registrati</button>
                    <a class="" type="submit" href="{{route('login')}}">Sei già iscritto? Accedi!</a>
                </div>
                
            </form>

        </div>

    </div>

</x-main>