
<x-layout>
    <div class="caveimg min-vh-100">
        <div class="container-fluid">
            <div class="row justify-content-center">
                {{-- inizio form --}}
                <div class="col-9 formslog">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    <form method="POST" action="{{route("login")}}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Email address</label>
                        <input name="name" type="email" class="form-control">
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Password</label>
                        <input name="password" type="password" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Accedi</button>
                    </form>
                </div>
                {{-- fine form --}}
                <div class="col-3 d-flex justify-center martes">
                    <img src="./immagini/Martes.webp" alt="">
                </div>
            </div>
        </div>
    </div>



</x-layout>