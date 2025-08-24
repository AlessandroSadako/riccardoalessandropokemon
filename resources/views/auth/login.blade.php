<x-layout>
    <div class="caveimg min-vh-100">
        <div class="container-fluid">
            <div class="row justify-content-center">
                {{-- immagine --}}
                <div class="col-4 d-flex justify-center saturn">
                    <img src="./immagini/saturnogiusto.png" alt="">
                </div>
                {{-- inizio form --}}
                <div class=" position-absolute allertpositionlog">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
                <div class="col-8 formslog">
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        @method('POST')
                        <div class="mb-3">
                            <label class="form-label">Email address</label>
                            <input name="email" type="email" class="form-control">
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Password</label>
                            <input name="password" type="password" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Accedi</button>
                    </form>
                </div>
                {{-- fine form --}}
            </div>
        </div>
    </div>

</x-layout>