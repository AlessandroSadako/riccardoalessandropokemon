<x-layout>
    <div class="caveimg min-vh-100">
        <div class="container-fluid">
            <div class="row justify-content-center">
            {{-- inizio form --}}
                <div class="position-absolute">
                    @if ($errors->any())
                        <div class="alert alert-danger allertpositionreg">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            <div class="col-8 formsreg">
                <form method="POST" action="{{route("register")}}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Username</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email address</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Conferma Password</label>
                        <input type="password" class="form-control" name="password_confirmation">
                    </div>
                    <div class="btn-group" role="group">
                        <input type="radio" class="btn-check" name="gender" id="male" value="male" autocomplete="off">
                        <label class="btn btn-primary" for="male">Male</label>

                        <input type="radio" class="btn-check" name="gender" id="female" value="female" autocomplete="off">
                        <label class="btn btn-primary" for="female">Female</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Registrati</button>
                </form>
            </div>
            {{-- fine form --}}
                <div class="col-4 d-flex justify-center martes">
                    <img src="./immagini/martesgiusta.png" alt="">
                </div>
            </div>
        </div>
    </div>
</x-layout>