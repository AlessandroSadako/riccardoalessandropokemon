<x-layout>
    <div class="">
        <div class="container">
            <div class="row">
                <form class="border-shadow" method="POST" action="{{route("submit")}}">
                    @csrf
                    <div class="mt-5 rounded">
                        <div class="mb-3">
                            <label class="form-label">Username</label>
                            <input type="text" class="form-control" name="username">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" name="email">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Descrivi il problema</label>
                            <textarea name="body" class="form-control" cols="30" rows="10"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-layout>