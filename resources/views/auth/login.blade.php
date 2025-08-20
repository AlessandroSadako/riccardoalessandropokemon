
<x-layout>
    <div class="contaier-fluid">
        <div class="row justify-content-center">
            <div class="w-50 my-5 pt-5">
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
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input name="password" type="password" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Accedi</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>