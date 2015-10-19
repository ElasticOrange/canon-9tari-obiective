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
            <span class="circle-girl-text">ДАЛИ САКАТЕ СОВРШЕН ПОРТРЕТ?</span>
        </div>
        <!-- /Portrait -->

        <!-- Tele -->
        <div class="boy-head"></div>
        <div class="circle-boy-container">
            <img class="cerc-trotineta" src="/img/trotineta.png" />
            <img class="circle-boy" src="/img/bulina_rosie.png" />
            <span class="circle-boy-text">ДАЛИ САКАТЕ ДА СЕ ДОБЛИЖИТЕ?</span>
        </div>
        <!-- /Tele -->
    </div>




    <div class="preview-box"></div>

    <div class="picture-portrait">
        <div class="back-button-container">
            <img src="/img/back-button.png" /><br />
            <span>Продолжете</span>
        </div>
    </div>

    <div class="picture-tele">
        <div class="back-button-container">
            <img src="/img/back-button.png" /><br />
            <span>Продолжете</span>
        </div>
    </div>

    <div class="grey-container">
        <img class="grey-overlay" src="/img/op-greylayer.png" />
        <span class="grey-text">ДАЛИ САКАТЕ ПОВЕЌЕ СОДРЖИНА ВО ВАШИОТ КАДАР?/ДАЛИ САКАТЕ ПОШИРОК КАДАР?</span>
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
        <div class="preview-content">Кликнете за изострен фокус со 18-135mm објектив и започнете го вашето патување низ апликацијата на Canon.</div>
    </script>

    <script type="text/template" id="display_lens_2">
        <div class="preview-lens1 preview-lens1"></div>
        <div class="preview-title">Canon<br /> EF-S 10-18mm f/4.5-5.6 IS STM</div>
        <div class="preview-content">Со објективите од 10-18mm можете да постигнете пошироки кадри за вашите најомилени снимки.</div>
    </script>

    <script type="text/template" id="display_lens_3">
        <div class="preview-lens1 preview-lens3"></div>
        <div class="preview-title">Canon<br /> EF 50mm f/1.8 STM </div>
        <div class="preview-content">Објективот EF 50mm е совршен за портрети, при што ја заматува позадината и се фокусира на најважниот елемент од снимката - субјектот.</div>
    </script>

    <script type="text/template" id="display_lens_4">
        <div class="preview-lens1 preview-lens4"></div>
        <div class="preview-title">Canon<br /> EF-S 55-250mm f/4-5.6 IS STM </div>
        <div class="preview-content">Кога е невозможно да се приближите, објективот EF-S 55-250mm ви го донесува субјектот во преден план.</div>
    </script>

    <script type="text/template" id="texts-kit">
        <span class="text-container-title">
            Canon EF-S 18-135mm f/3.5-5.6 IS STM
        </span><br />
        <p class="text-container-description">
            Совршен за почетници, EF-S 18-135mm f/3.5-5.6 IS STM на Canon е објектив за општа употреба кој 
            ви нуди поголем зум од стандардните објективи кои доаѓаат со комплетот, така што далечните предмети 
            изгледаат како да се поблиску и можете да доловите интересни детали или пејзажи кои ќе ви го одземат 
            здивот. Сакате дискретно и тивко изострено фокусирање кога снимате видео записи? Нема проблем! Овој 
            објектив поседува STM технологија. Обидете се да го подесите вашиот објектив на минимална фокална 
            далечина (18mm), доближете се до предметот што го сликате и фотографијата ќе ја одржува вашата 
            директна вклученост во случувањата.
        </p>
    </script>

    <script type="text/template" id="texts-wide">
        <span class="text-container-title">
            Canon EF-S 10-18mm f/4.5-5.6 IS STM
        </span><br />
        <p class="text-container-description">
            Понекогаш не можете да се вратите ни еден чекор! Објективот EF-S 10-18mm f/4.5- 5.6 IS STM кој поседува 
            можност за зумирање од широк агол и фокусен опсег од 10-18 mm, ќе ви помогне да опфатите многу повеќе во 
            вашиот кадар, дури и кога сте близу до субјектот кој го сликате па ќе можете да доловите повеќе со секоја 
            снимка без да се оддалечувате од самиот субјект. Исто така, вашите фотографии секогаш ќе бидат поостри со 
            стабилизаторот за слики. 
            Кога сликате пејзажи, наш совет е да го насочите вашиот фотоапарат малку надолу, за да го добиете таканаречениот 
            ефект "насочување на погледот на набљудувачот".
        </p>
    </script>

    <script type="text/template" id="texts-portrait">
        <span class="text-container-title">
            Canon EF 50mm f/1.8 STM
        </span><br />
        <p class="text-container-description">
            Со објективот EF 50mm f/1.8 STM можете да креирате посебно визуелно чувство неопходно за секој 
            вид на портрет. Тој е идеален за заматување на позадини, бидејќи отворот на неговата бленда е 
            3.5 пати поголем од таа на стандардниот зум-објектив EF-S 18-55mm f/3.5-5.6 IS STM. Со заматувањето 
            на позадината на фотографијата, се нагласува најважниот елемент во кадарот – личноста која ја 
            фотографирате. 
            Обидете се и подесете го фотоапаратот на Av режим за да го поставите посакуваниот отвор на бленда 
            (не заборавајте, поголем отвор, помала вредност), потоа фокусирајте се на областа чија снимка сакате 
            да е изострена со тоа што делумно ќе го притиснете копчето на блендата пред да сликате.
        </p>
    </script>

    <script type="text/template" id="texts-tele">
        <span class="text-container-title">
            Canon EF-S 55-250mm f/4-5.6 IS STM
        </span><br />
        <p class="text-container-description">
            Забележавте некоја интересна случка, но сте предалеку? Објективот EF-S 55-250 mm f/4- 5,6 IS STM 
            ќе ви помогне кога треба да се приближите а не можете. Овој телефото зум-објектив ви овозможува 
            приближување на оддалечени објекти за да се приближите на акцијата. Идеален за снимање сцени кога 
            не можете физички да се приближите до објектот. 
        </p>
    </script>
@stop

@section('js')
    <script src="/js/game/index.js"></script>
@stop
