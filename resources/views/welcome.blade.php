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


            <div class="content-content">
                <h1 class=" text-center display-1">{{ Auth::user()->name }}</h1>

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

                <div class="d-flex gap-5">
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
                </div>

            </div>

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
