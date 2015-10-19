@extends('layout.master')

@section('content')
    <div class="whiteness">
    </div>

    <div class="container-picture-2">
        <div class="picture-container-blur hand"></div>
    </div>

    <div class="picture-container">
        <!-- Portrait -->
        <div class="girl-head"></div>
        <div class="circle-girl-container">
            <img class="cerc-profil" src="/img/gif_1_fata.gif" />
            <img class="circle-girl" src="/img/bulina_rosie.png" />
            <span class="circle-girl-text">ŽELITE LI SAVRŠENI PORTRET?</span>
        </div>
        <!-- /Portrait -->

        <!-- Tele -->
        <div class="boy-head"></div>
        <div class="circle-boy-container">
            <img class="cerc-trotineta" src="/img/trotineta.png" />
            <img class="circle-boy" src="/img/bulina_rosie.png" />
            <span class="circle-boy-text">ŽELITE LI DA PRIĐETE BLIŽE?</span>
        </div>
        <!-- /Tele -->
    </div>




    <div class="preview-box"></div>

    <div class="picture-portrait">
        <div class="back-button-container">
            <img src="/img/back-button.png" /><br />
            <span>Nastavite</span>
        </div>
    </div>

    <div class="picture-tele">
        <div class="back-button-container">
            <img src="/img/back-button.png" /><br />
            <span>Nastavite</span>
        </div>
    </div>

    <div class="grey-container">
        <img class="grey-overlay" src="/img/op-greylayer.png" />
        <span class="grey-text">ŽELITE VIŠE SADRŽAJA U KADRU?/ŽELITE LI ŠIRI KADAR?</span>
        <img class="arrow-left" src="/img/op-arrowleft.png" />
        <img class="arrow-right" src="/img/op-arrowright.png" />
    </div>

    <img class="obiectiv-kit" id="obiectiv-kit" src="/img/Obiective/obiectiv2.png">
    <img class="obiectiv-kit" id="obiectiv-wide" src="/img/Obiective/obiectiv1.png">
    <img class="obiectiv-kit" id="obiectiv-portrait" src="/img/Obiective/canon_50mm.png">
    <img class="obiectiv-kit" id="obiectiv-tele" src="/img/Obiective/obiectiv3.png">
    <div class="text-container">
    </div>

    <script type="text/template" id="display_lens_1">
        <div class="preview-lens1 preview-lens2"></div>
        <div class="preview-title">Canon<br /> EF-S 18-135mm f/3.5-5.6 IS STM</div>
        <div class="preview-content">Kliknite za izoštravanje pomoću objektiva 18-135mm i započnite svoje putovanje kroz aplikaciju kompanije Canon.</div>
    </script>

    <script type="text/template" id="display_lens_2">
        <div class="preview-lens1 preview-lens1"></div>
        <div class="preview-title">Canon<br /> EF-S 10-18mm f/4.5-5.6 IS STM</div>
        <div class="preview-content">Pomoću objektiva 10-18mm možete postići širi kadar za svoje omiljene slike.</div>
    </script>

    <script type="text/template" id="display_lens_3">
        <div class="preview-lens1 preview-lens3"></div>
        <div class="preview-title">Canon<br /> EF 50mm f/1.8 STM </div>
        <div class="preview-content">Objektiv EF 50mm je idealan za portrete, jer može da zamuti pozadinu i da izoštri najvažniji element snimka - glavni motiv.</div>
    </script>

    <script type="text/template" id="display_lens_4">
        <div class="preview-lens1 preview-lens4"></div>
        <div class="preview-title">Canon<br /> EF-S 55-250mm f/4-5.6 IS STM </div>
        <div class="preview-content">Kada se možete približiti predmetu snimanja, objektiv EF-S 55-250mm ga dovodi u prednji plan.</div>
    </script>

    <script type="text/template" id="texts-kit">
        <span class="text-container-title">
            Canon EF-S 18-135mm f/3.5-5.6 IS STM
        </span><br />
        <p class="text-container-description">
            Objektiv za opštu namenu kompanije Canon EF-S 18-135mm f/3.5-5.6 IS STM, savršen za početnike, 
            uža veći zum nego standardni kit objektiv, tako da se udaljeni predmeti čine bližim, pa možete 
            snimati zanimljive detalje ili pejzaže koji oduzimaju dah. Želite diskretno i tiho fokusiranje 
            prilikom snimanja videa? Nema problema - ovaj objektiv opremljen je STM tehnologijom. 
            Pokušajte da podesite svoj objektiv na minimalnu žižnu daljinu (18 mm), približite se predmetu 
                snimanja i na fotografiji će biti vidljivo da ste direktno uključeni u zbivanja.
        </p>
    </script>

    <script type="text/template" id="texts-wide">
        <span class="text-container-title">
            Canon EF-S 10-18mm f/4.5-5.6 IS STM
        </span><br />
        <p class="text-container-description">
            Ponekad se više ne možete odmaknuti ni korak! Objektiv EF-S 10-18mm f/4.5- 5.6 IS STM, koji ima
            širokougaoni raspon zuma i raspon izoštravanja 10-18 mm, pomoći će vam da kadrom obuhvatite više 
            sadržaja, čak i kada ste blizu predmeta snimanja, da biste u svaki snimak uključili što više sadržaja, 
            bez odmicanja od predmeta snimanja. Pored toga, vaše fotografije će uvek biti oštrije zahvaljujući 
            stabilizatoru slike.
            Prilikom snimanja pejzaža, savetujemo da pokušate da usmerite fotoaparat malo nadole, da biste dobili 
            efekat "usmeravanja pogleda posmatrača".
        </p>
    </script>

    <script type="text/template" id="texts-portrait">
        <span class="text-container-title">
            Canon EF 50mm f/1.8 STM
        </span><br />
        <p class="text-container-description">
            Pomoću objektiva EF 50mm f/1.8 STM možete ostvariti vizuelni utisak kakav je potreban svakom portretu.
            Idealan je za zamućivanje pozadine, pošto ima 3,5 puta puta veći otvor blendenego standardni zum objektiv 
            EF-S 18-55mm f/3.5-5.6 IS STM. Zamućivanjem pozadine na fotografiji, ističe se najvažniji element u 
            kadru – osoba koju fotografišete. 
            Pokušajte da podesite fotoaparat u režim Av, da biste mogli da podesiti željeni otvor blende 
            (ne zaboravite – što je vrednost niža, otvor je veći), a zatim pre samog okidanja izoštrite željeno područje 
            pritiskom okidača do pola.
        </p>
    </script>

    <script type="text/template" id="texts-tele">
        <span class="text-container-title">
            Canon EF-S 55-250mm f/4-5.6 IS STM
        </span><br />
        <p class="text-container-description">
            Primetili ste neko zanimljivo događanje, ali ste predaleko? Objektiv EF-S 55-250mm f/4- 5.6 IS STM 
            će vam pomoći kada želite da se približite radnji, a ne možete. Ovaj telefoto zum objektiv približava 
            vam sve udaljene objekte, da biste se približili akciji. Idealan je za snimanje scena u kojima ne možete 
            fizički da se približite predmetu snimanja.
        </p>
    </script>
@stop

@section('js')
    <script src="/js/game/index.js"></script>
@stop
