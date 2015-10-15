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
            <span class="circle-girl-text">ALI ŽELITE POPOLN PORTRET?</span>
        </div>
        <!-- /Portrait -->

        <!-- Tele -->
        <div class="boy-head"></div>
        <div class="circle-boy-container">
            <img class="cerc-trotineta" src="/img/trotineta.png" />
            <img class="circle-boy" src="/img/bulina_rosie.png" />
            <span class="circle-boy-text">ALI SE ŽELITE PRIBLIŽATI?</span>
        </div>
        <!-- /Tele -->
    </div>




    <div class="preview-box"></div>

    <div class="picture-portrait">
        <div class="back-button-container">
            <img src="/img/back-button.png" /><br />
            <span>Nadaljujte</span>
        </div>
    </div>

    <div class="picture-tele">
        <div class="back-button-container">
            <img src="/img/back-button.png" /><br />
            <span>Nadaljujte</span>
        </div>
    </div>

    <div class="grey-container">
        <img class="grey-overlay" src="/img/op-greylayer.png" />
        <span class="grey-text">ALI ŽELITE V KADER ZAJETI VEČ?<br>ALI ŽELITE ŠIRŠI KADER?</span>
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
        <div class="preview-content">Kliknite za ostrenje z objektivom 18-135 mm ter začnite svoje potovanje skozi Canonovo aplikacijo.</div>
    </script>

    <script type="text/template" id="display_lens_2">
        <div class="preview-lens1 preview-lens1"></div>
        <div class="preview-title">Canon<br /> EF-S 10-18mm f/4.5-5.6 IS STM</div>
        <div class="preview-content">Z objektivom 10–18mm lahko dobite širši okvir za svoje najljubše motive.</div>
    </script>

    <script type="text/template" id="display_lens_3">
        <div class="preview-lens1 preview-lens3"></div>
        <div class="preview-title">Canon<br /> EF 50mm f/1.8 STM </div>
        <div class="preview-content">Objektiv EF 50 mm je idealen za portrete. Zamegli ozadje in se osredotoča na najpomembnejši element posnetka – na glavni motiv.</div>
    </script>

    <script type="text/template" id="display_lens_4">
        <div class="preview-lens1 preview-lens4"></div>
        <div class="preview-title">Canon<br /> EF-S 55-250mm f/4-5.6 IS STM </div>
        <div class="preview-content">Ko ne morete priti bližje, vam objektiv EF-S 55–250 mm postavi predmet v ospredje.</div>
    </script>

    <script type="text/template" id="texts-kit">
        <span class="text-container-title">
            Canon EF-S 18-135mm f/3.5-5.6 IS STM
        </span><br />
        <p class="text-container-description">
            Canonov objektiv za splošno rabo EF-S 18–135mm f/3.5–5.6 IS STM, ki je kot nalašč za začetnike, vam ponuja večjo povečavo kot standardni objektiv, tako da se oddaljeni predmeti zdijo bližje ter lahko zajamete zanimive podrobnosti ali dih jemajoče posnetke pokrajine. Ali bi želeli diskretno in tiho ostrenje med snemanjem videa? Nič lažjega! Objektiv se ponaša s tehnologijo STM.<br />
            Poskusite nastaviti objektiv na najmanjšo goriščno razdaljo (18 mm) ter se približajte motivu in fotografija bo izrazila vašo neposredno vpletenost v dogajanje.
        </p>
    </script>

    <script type="text/template" id="texts-wide">
        <span class="text-container-title">
            Canon EF-S 10-18mm f/4.5-5.6 IS STM
        </span><br />
        <p class="text-container-description">
            Včasih se ne morete odmakniti niti koraka več! EF-S 10–18mm f/4.5–5.6 IS STM je širokokotni objektiv s povečavo in od 10- do 18-milimetrsko goriščno razdaljo, ki vam bo pomagal, da boste na vašo sliko dobili širši kader tudi takrat, ko ste blizu motiva. Tako lahko zajamete več na vsakem posnetku, ne da bi se za to morali oddaljiti od predmeta. Poleg tega bodo vaše fotografije s pomočjo stabilizatorja slike vedno ostre.<br />
            Pri fotografiranju pokrajine vam svetujemo, da poskusite in usmerite svoj fotoaparat rahlo navzdol, tako da boste lahko dobili tako imenovani "učinek usmerjanja" za vodenje gledalčevega pogleda.
        </p>
    </script>

    <script type="text/template" id="texts-portrait">
        <span class="text-container-title">
            Canon EF 50mm f/1.8 STM
        </span><br />
        <p class="text-container-description">
            Z objektivom EF 50mm f/1.8 STM lahko ustvarite posebno vizualno čustvo, potrebno za vsak portret. Ta objektiv je idealen za ustvarjanje zamegljenih ozadij, saj je njegova odprtina 3,5-krat večja od tiste na standardnem objektivu s povečavo EF-S 18–55mm f/3.5–5.6 IS STM. Zameglitev ozadja fotografije poudarja najpomembnejši element v kadru – osebo, ki jo fotografirate. 
            Poskusite fotoaparat nastaviti v način Av, tako da lahko izberete poljubno zaslonko (ne pozabite, velika odprtina pomeni nizko vrednost), nato izostrite območje, ki ga želite ostrega tako, da gumb sprožilca pritisnete do polovice, nato fotografirajte.
        </p>
    </script>

    <script type="text/template" id="texts-tele">
        <span class="text-container-title">
            Canon EF-S 55-250mm f/4-5.6 IS STM
        </span><br />
        <p class="text-container-description">
            Opazili ste zanimivo dogajanje, vendar ste predaleč stran? Objektiv EF-S 55–250mm f/4-5.6 IS STM vam bo pomagal, ko bi želeli priti bližje, vendar ne morete. Ta objektiv s telefoto povečavo prikaže oddaljene predmete bližje in vas tako približa dogajanju. Idealno za fotografiranje scen, ko se ne morete fizično približati predmetu.
        </p>
    </script>
@stop

@section('js')
    <script src="/js/game/index.js"></script>
@stop
