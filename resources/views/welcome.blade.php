<x-layout>
    <div class="container-fluid header my-5 ">
        <div class="header-content" id="text-box">

        </div>
    </div>
    <div class=" content">
        <div class="content-content">
            <h1 class=" text-center">Alessandro pederiva Gay</h1>
        </div>
    </div>
    <script>
        const text =
            `Salve allenatore, ho bisogno del tuo aiuto per sconfiggere Giratina!
            Registrati per scoprire come fare!
            `;
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
