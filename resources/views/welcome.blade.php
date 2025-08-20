<x-layout>
    <div class="container-fluid header my-5 ">
        <div class="header-content" id="text-box">

        </div>
    </div>
    @auth

        <div class=" content">
            <div class="content-content">
                <h1 class=" text-center">{{ Auth::user()->name }}</h1>
            </div>
        </div>

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
