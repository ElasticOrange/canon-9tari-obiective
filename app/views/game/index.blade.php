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
            <span class="circle-boy-text">ŽELITE LI PRIĆI BLIŽE?</span>
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
        <span class="grey-text">ŽELITE LI VIŠE SADRŽAJA U KADRU?/ŽELITE LI ŠIRI KADAR?</span>
        <img class="arrow-left" src="/img/op-arrowleft.png" />
        <img class="arrow-right" src="/img/op-arrowright.png" />
    </div>

    <img class="obiectiv-kit" id="obiectiv-kit" src="/img/Obiective/obiectiv2.png">
    <img class="obiectiv-kit" id="obiectiv-wide" src="/img/Obiective/obiectiv1.png">
    <img class="obiectiv-kit" id="obiectiv-portrait" src="/img/Obiective/obiectiv4.png">
    <img class="obiectiv-kit" id="obiectiv-tele" src="/img/Obiective/obiectiv3.png">
    <div class="text-container">
    </div>

    <script type="text/template" id="display_lens_1">
        <div class="preview-lens1 preview-lens2"></div>
        <div class="preview-title">Canon<br /> EF-S 18-135mm f/3.5-5.6 IS STM</div>
        <div class="preview-content">Kliknite za izoštravanje objektivom 18-135 mm i započnite svoje putovanje kroz Canonovu aplikaciju.</div>
    </script>

    <script type="text/template" id="display_lens_2">
        <div class="preview-lens1 preview-lens1"></div>
        <div class="preview-title">Canon<br /> EF-S 10-18mm f/4.5-5.6 IS STM</div>
        <div class="preview-content">Objektivom 10-18 mm možete postići širi kadar za svoje omiljene motive.</div>
    </script>

    <script type="text/template" id="display_lens_3">
        <div class="preview-lens1 preview-lens3"></div>
        <div class="preview-title">Canon<br /> EF 50mm f/1.8 II </div>
        <div class="preview-content">Objektiv EF 50 mm idealan je za portrete. Može zamutiti pozadinu i izoštriti najvažniji element snimke – glavni motiv.</div>
    </script>

    <script type="text/template" id="display_lens_4">
        <div class="preview-lens1 preview-lens4"></div>
        <div class="preview-title">Canon<br /> EF-S 55-250mm f/4-5.6 IS STM </div>
        <div class="preview-content">Kad se ne možete fizički približiti predmetu snimanja, objektiv EF-S 55-250 mm dovodi ga u prednji plan.</div>
    </script>

    <script type="text/template" id="texts-kit">
        <span class="text-container-title">
            Canon EF-S 18-135mm f/3.5-5.6 IS STM
        </span><br />
        <p class="text-container-description">
            Canonov objektiv za opću namjenu EF-S 18-135 mm f/3,5-5,6 IS STM, savršen za početnike, pruža veći zum nego standardni objektiv, tako da se udaljeni predmeti doimaju bližima pa možete snimati zanimljive detalje ili krajolike koji oduzimaju dah. Želite diskretno i tiho izoštravanje pri snimanju videozapisa? Ništa lakše! Objektiv ima tehnologiju STM.<br />
            Pokušajte namjestiti objektiv na najmanju žarišnu duljinu (18 mm), približite se predmetu snimanja i fotografija će odražavati vašu izravnu uključenost u događanje.
        </p>
    </script>

    <script type="text/template" id="texts-wide">
        <span class="text-container-title">
            Canon EF-S 10-18mm f/4.5-5.6 IS STM
        </span><br />
        <p class="text-container-description">
            Ponekad se više ne možete odmaknuti ni korak! Objektiv EF-S 10-18 mm f/4,5-5,6 IS STM, koji ima širokokutni zum i raspon izoštravanja 10 – 18 mm, pomoći će vam da kadrom obuhvatite veće područje čak i kad ste blizu motiva, kako biste u svaku snimku uključili više sadržaja bez odmicanja od predmeta snimanja. Uz to, fotografije će vam uvijek biti oštrije zahvaljujući stabilizatoru slike.<br />
            Pri snimanju krajolika savjetujemo vam da pokušate fotoaparat usmjeriti malo prema dolje kako biste dobili efekt “usmjeravanja promatračeva pogleda”.
        </p>
    </script>

    <script type="text/template" id="texts-portrait">
        <span class="text-container-title">
            Canon EF 50mm f/1.8 II
        </span><br />
        <p class="text-container-description">
            Objektivom EF 50mm f/1.8 STM možete ostvariti vizualni dojam kakav je potreban pri svakom portretu. Idealan je za zamućivanje pozadine budući da ima 3,5 puta veći otvor blende nego standardni zum-objektiv EF-S 18-55 mm f/3,5-5,6 IS STM. Zamućivanjem pozadine fotografije ističe se najvažniji element u kadru – osoba koju fotografirate. Pokušajte podesiti fotoaparat u način rada Av kako biste mogli podesiti željeni otvor blende (ne zaboravite – što je vrijednost niža, otvor je veći), zatim prije samog okidanja izoštrite željeno područje pritiskom okidača dopola.
        </p>
    </script>

    <script type="text/template" id="texts-tele">
        <span class="text-container-title">
            Canon EF-S 55-250mm f/4-5.6 IS STM
        </span><br />
        <p class="text-container-description">
            Zamijetili ste neko zanimljivo događanje, ali ste predaleko? Objektiv EF-S 55-250 mm f/4- 5,6 IS STM pomoći će vam kad se trebate približiti radnji, a ne možete. Ovaj telefoto zum-objektiv omogućuje vam približavanje udaljenih objekata kako biste se približili akciji. Idealan je za snimanje scena pri kojima se ne možete fizički približiti objektu.
        </p>
    </script>
@stop

@section('js')
    <script src="/js/game/index.js"></script>
@stop
