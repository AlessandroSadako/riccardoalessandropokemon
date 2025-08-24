<x-layout>
    <div class="container-fluid header my-5 ">
        <div class="header-content" id="text-box">

        </div>
    </div>
    @auth
        <main>
            <div class="arrows">
                <i class="fa-solid fa-chevron-down"></i>
                <i class="fa-solid fa-chevron-down"></i>
                <i class="fa-solid fa-chevron-down"></i>
                <i class="fa-solid fa-chevron-down"></i>
                <i class="fa-solid fa-chevron-down"></i>
                <i class="fa-solid fa-chevron-down"></i>
                <i class="fa-solid fa-chevron-down"></i>
                <i class="fa-solid fa-chevron-down"></i>
                <i class="fa-solid fa-chevron-down"></i>
                <i class="fa-solid fa-chevron-down"></i>
            </div>


            <div class="content-content my-5">
                <h2 class="display-1 text-center">Scegli il tuo team!</h2>
            </div>

            {{-- @foreach ($allenatori as $trainer)
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $trainer['nome'] }}</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">{{ $trainer['ruolo'] }}</h6>
                            <ul>
                                @foreach ($trainer['squadra'] as $team)
                                    <li>{{ $team }}</li>
                                @endforeach
                            </ul>
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                    </div>
                @endforeach --}}













            {{-- <div class="container d-flex justify-content-center gap-5 border border-danger">
                @foreach ($allenatori as $trainer)
                    <div class="d-flex flex-column mx-5">
                        <h6 class="pgName title text-center p-3 rounded text-white">{{ $trainer['nome'] }}</h6>
                        <div class="pg">
                            <img src="{{ $trainer['img'] }}" alt="">
                        </div>
                    </div>
                @endforeach
                <div class="d-flex flex-column mx-5">
                    <h6 class="pgName title text-center p-3 rounded text-white">Personalizza...</h6>
                    <div class="pg d-flex justify-content-center align-items-center">
                        <i class="fa-solid fa-plus text-white display-1"></i>
                    </div>
                </div>
            </div> --}}


            <div class="row justify-content-center selection">
                @foreach ($allenatori as $trainer)
                    <div class="col-12 col-md-4 pg resizer bg-danger">
                        <img src="{{ $trainer['img'] }}" alt="">
                    </div>
                    <div class="col-12 col-md-8 text-center resizer">
                        <h2 class="display-1 title">{{ $trainer['nome'] }}</h2>
                        {{-- <ul class="info w-75 m-auto list-unstyled fs-3">
                            @foreach ($trainer['squadra'] as $team)
                                <li class=" my-5">{{ $team }}</li>
                            @endforeach
                        </ul> --}}
                        <div class="info rounded w-75 m-auto p-3  mt-5">
                            <h6 class="display-5">Team:</h6>
                            @foreach ($trainer['squadra'] as $team)
                                <span class=" my-5 spacing fs-3">{{ $team }} |
                                </span>
                            @endforeach
                            <p class=" d-flex align-self-start ps-4 fs-3 spacing">Titolo: {{ $trainer['ruolo'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>














            {{-- <div class="d-flex gap-5">
                    <div class="pg">
                        <img src="{{ $allenatori[0]['img'] }}" alt="">
                    </div>
                    <div class="pg">
                        <img src="{{ $allenatori[1]['img'] }}" alt="">
                    </div>
                    <div class="pg">
                        <img src="{{ $allenatori[2]['img'] }}" alt="">
                    </div>
                    <div class="pg">
                        <img src="{{ $allenatori[3]['img'] }}" alt="">
                    </div>
                    <div class="pg">
                        <img src="{{ $allenatori[4]['img'] }}" alt="">
                    </div>
                </div> --}}

        </main>

    @endauth















    <script>
        // const text =
        //     `Salve allenatore, ho bisogno del tuo aiuto per sconfiggere Giratina!
    //     Registrati per scoprire come fare!
    //     `;
        @auth
        const text = `Bentornato, {{ Auth::user()->name }}!
        Presto, scegli il tuo team personalizzato e aiutami a sconfiggere Giratina!
        `;
        @else
            const text = `Presto allenatore, ho bisogno del tuo aiuto per sconfiggere Giratina!
                        Registrati e costruisci la squadra piu forte possibile!
                    `;
        @endauth
        const box = document.getElementById("text-box");

        let i = 0;

        function typeWriter() {
            if (i < text.length) {
                if (text[i] === "\n") {
                    box.innerHTML += "<br>";
                } else {
                    box.innerHTML += text[i];
                }

                i++;
                setTimeout(typeWriter, 50); // velocità
            }

        }


        typeWriter();
    </script>
</x-layout>
