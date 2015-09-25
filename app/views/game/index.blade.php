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
            <span class="circle-girl-text">ИСКАТЕ ПЕРФЕКТНАТА ПОРТРЕТНА СНИМКА?</span>
        </div>
        <!-- /Portrait -->

        <!-- Tele -->
        <div class="boy-head"></div>
        <div class="circle-boy-container">
            <img class="cerc-trotineta" src="/img/trotineta.png" />
            <img class="circle-boy" src="/img/bulina_rosie.png" />
            <span class="circle-boy-text">ИСКАТЕ ЛИ ДА СЕ ПРИБЛИЖИТЕ ОЩЕ?</span>
        </div>
        <!-- /Tele -->
    </div>




    <div class="preview-box"></div>

    <div class="picture-portrait">
        <div class="back-button-container">
            <img src="/img/back-button.png" /><br />
            <span>Продължение</span>
        </div>
    </div>

    <div class="picture-tele">
        <div class="back-button-container">
            <img src="/img/back-button.png" /><br />
            <span>Продължение</span>
        </div>
    </div>

    <div class="grey-container">
        <img class="grey-overlay" src="/img/op-greylayer.png" />
        <span class="grey-text">ИСКАТЕ ЛИ ОЩЕ В КАДЪРА?/ИСКАТЕ ЛИ ПО-ШИРОК КАДЪР?</span>
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
        <div class="preview-content">Щракнете тук, за да фокусирате с обектив 18-135mm и започнете своето пътешествие в приложението на Canon.</div>
    </script>

    <script type="text/template" id="display_lens_2">
        <div class="preview-lens1 preview-lens1"></div>
        <div class="preview-title">Canon<br /> EF-S 10-18mm f/4.5-5.6 IS STM</div>
        <div class="preview-content">С обектив с фокусно разстояние 10-18mm можете да постигнете по-широк зрителен ъгъл за любимите си снимки.</div>
    </script>

    <script type="text/template" id="display_lens_3">
        <div class="preview-lens1 preview-lens3"></div>
        <div class="preview-title">Canon<br /> EF 50mm f/1.8 II </div>
        <div class="preview-content">Обективът EF 50mm е идеален за портретни снимки, разфокусиране на фона и акцентиране върху най-важния елемент от снимката – лицето.</div>
    </script>

    <script type="text/template" id="display_lens_4">
        <div class="preview-lens1 preview-lens4"></div>
        <div class="preview-title">Canon<br /> EF-S 55-250mm f/4-5.6 IS STM </div>
        <div class="preview-content">Когато не можете да се приближите колкото ви се иска, използвайте обектив EF-S 55-250mm, за да заснемете повече детайли.</div>
    </script>

    <script type="text/template" id="texts-kit">
        <span class="text-container-title">
            Canon EF-S 18-135mm f/3.5-5.6 IS STM
        </span><br />
        <p class="text-container-description">
            Перфектен за начинаещи, Canon EF-S 18-135mm f/3.5-5.6 IS STM е обектив с общо предназначение, който ви предлага по-голямо увеличение от стандартния обектив, доставен с фотоапарата, така че далечните обекти изглеждат близки и можете да заснемате интересни подробности или спиращи дъха пейзажи. Искате дискретно и тихо фокусиране при запис на видео? Няма проблем – обектива използва технология със стъпков мотор (STM).<br />
            Задайте настройка за минимално фокусно разстояние (18mm) на обектива, приближете се физически до заснемания обект и снимката ще пресъздаде вашето пряко участие в сцената.
        </p>
    </script>

    <script type="text/template" id="texts-wide">
        <span class="text-container-title">
            Canon EF-S 10-18mm f/4.5-5.6 IS STM
        </span><br />
        <p class="text-container-description">
            Понякога не можете да отстъпите още една крачка! Широкоъгълният вариообектив EF-S 10-18mm f/4.5- 5.6 IS STM с фокусно разстояние 10-18 mm ще ви помогне да вместите повече в кадъра дори когато обектът е близо, така че можете да заснемате по-широка сцена, без да се налага да отстъпвате назад. Наред с това, снимките ви винаги ще бъдат по-ясни със стабилизатора на образа.<br />
            Когато снимате пейзаж, нашият съвет е да наклоните фотоапарата малко надолу, така че да постигнете т.нар. “ефект на насочване”, за да насочите окото на зрителя.
        </p>
    </script>

    <script type="text/template" id="texts-portrait">
        <span class="text-container-title">
            Canon EF 50mm f/1.8 II
        </span><br />
        <p class="text-container-description">
            С обектив EF 50mm f/1.8 STM можете да създадете естествената визуална емоция, необходима за всеки портрет. Той е идеален за разфокусиране на фона, тъй като отворът на диафрагмата му е 3,5 пъти по-широк от този на стандартния вариообектив EF-S 18-55mm f/3.5-5.6 IS STM. Разфокусирането на фона подчертава най-важния елемент в кадъра – човекът, който заснемате. Поставете фотоапарата в режим Av, за да можете да зададете ръчно желания отвор на диафрагмата (не забравяйте, че голям отвор на диафрагмата означава малко f-число), и след това фокусирайте обекта чрез натискане на спусъка наполовина, преди да заснемете.
        </p>
    </script>

    <script type="text/template" id="texts-tele">
        <span class="text-container-title">
            Canon EF-S 55-250mm f/4-5.6 IS STM
        </span><br />
        <p class="text-container-description">
            Забелязали сте интересно действие, но стоите твърде далеч? Обективът EF-S 55-250mm f/4- 5.6 IS STM ще ви помогне, когато трябва да се приближите. Този варио-телеобектив приближава всички далечни обекти, така че можете да заснемете действието в детайли. Идеален е за заснемане на сцени, в които не можете физически да се приближите до обекта.
        </p>
    </script>
@stop

@section('js')
    <script src="/js/game/index.js"></script>
@stop
