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
            <span class="circle-girl-text">Бажаєте ідеальний портрет?</span>
        </div>
        <!-- /Portrait -->

        <!-- Tele -->
        <div class="boy-head"></div>
        <div class="circle-boy-container">
            <img class="cerc-trotineta" src="/img/trotineta.png" />
            <img class="circle-boy" src="/img/bulina_rosie.png" />
            <span class="circle-boy-text">Хочете бути ближчим?</span>
        </div>
        <!-- /Tele -->
    </div>




    <div class="preview-box"></div>

    <div class="picture-portrait">
        <div class="back-button-container">
            <img src="/img/back-button.png" /><br />
            <span>Продовжити</span>
        </div>
    </div>

    <div class="picture-tele">
        <div class="back-button-container">
            <img src="/img/back-button.png" /><br />
            <span>Продовжити</span>
        </div>
    </div>

    <div class="grey-container">
        <img class="grey-overlay" src="/img/op-greylayer.png" />
        <span class="grey-text">Хочете більш широкий кут огляду?</span>
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
        <div class="preview-content">Натисніть, щоб сфокусуватися за допомогою об’єктиву 18-135mm  та розпочати свою подорож через додаток Canon.</div>
    </script>

    <script type="text/template" id="display_lens_2">
        <div class="preview-lens1 preview-lens1"></div>
        <div class="preview-title">Canon<br /> EF-S 10-18mm f/4.5-5.6 IS STM</div>
        <div class="preview-content">З об’єктивом 10-18mm ви отримаєте більш широкий кут огляду для своїх улюблених фото.</div>
    </script>

    <script type="text/template" id="display_lens_3">
        <div class="preview-lens1 preview-lens3"></div>
        <div class="preview-title">Canon<br /> EF 50mm f/1.8 II </div>
        <div class="preview-content">Об’єктив EF 50mm ідеальний для портретів завдяки тому, що розмиває тло та фокусується на найважливішому елементі кадру- на об’єкті.</div>
    </script>

    <script type="text/template" id="display_lens_4">
        <div class="preview-lens1 preview-lens4"></div>
        <div class="preview-title">Canon<br /> EF-S 55-250mm f/4-5.6 IS STM </div>
        <div class="preview-content">Коли наблизитися до об’єкту неможливо, об’єктив EF-S 55-250mm допоможе перенести ваш об’єкт зйомки на перший план.</div>
    </script>

    <script type="text/template" id="texts-kit">
        <span class="text-container-title">
            Canon EF-S 18-135mm f/3.5-5.6 IS STM
        </span><br />
        <p class="text-container-description">
            Ідеальній для початківця,  Canon EF-S 18-135mm f/3.5-5.6 IS STM це стандартний об’єктив, який пропонує більший зум у порівнянні зі стандартнім об’єктивом, тому речі які здаються так далеко стають ближчими і ви можете зафіксувати найменші деталі пейзажів, що захоплюють подих. Бажаєте чіткого та безшумного фокусування? Без проблем-цей об’єктив обладнано технологією  STM. <br />
            Спробуйте встановити об’єктив на мінімально фокусну відстань (18mm), підійдіть ближче до об’єкту, який ви знімаєте і фото передасть вашу безпосередню участь у сюжеті.
        </p>
    </script>

    <script type="text/template" id="texts-wide">
        <span class="text-container-title">
            Canon EF-S 10-18mm f/4.5-5.6 IS STM
        </span><br />
        <p class="text-container-description">
            Інколи у вас немає можливості зробити зайвий крок назад. Об’єктив EF-S 10-18mm f/4.5- 5.6 IS STM, який обладнано ширококутним зумом і фокусним діапазоном 10-18 mm допоможе вам помістити більше у ваш кут огляду, навіть якщо ви дуже близько до об’єкту, тому ви можете зафіксувати  більше в кожному знімку без необхідності відходити від об’єкту. На додаток до всього ваші фото будуть чіткими за допомогою стабілізації зображення.<br />
            Коли знімаєте пейзажі, наша порада - спробуйте поступово відвести камеру назад для того щоб отримати так званий ефект “спостерігача”, який керує поглядом того, хто дивиться на зображення.
        </p>
    </script>

    <script type="text/template" id="texts-portrait">
        <span class="text-container-title">
            Canon EF 50mm f/1.8 II
        </span><br />
        <p class="text-container-description">
            З об’єктивом EF 50mm f/1.8 STM ви можете створити весь спектр візуальних емоцій, які необхідні для портрету. Він ідеальний для розмиття тла тому, що  його діафрагма в 3,5 рази ширша за стандартні об’єктиви EF-S 18-55mm f/3.5-5.6 IS STM. Розмиття заднього фону на фото підкреслює найголовніший елемент кадру-людину, яку ви фотографуєте. Спробуйте встановити  вашу камеру в режим Av, в якому ви зможете обирати бажане значення діафрагми (не забувайте, що більша цифра означає менше значення), потім сфокусуйтеся на зоні, яку хочете виділити за допомогою натискання кнопки камери до половини перед тим, як зробити кадр.
        </p>
    </script>

    <script type="text/template" id="texts-tele">
        <span class="text-container-title">
            Canon EF-S 55-250mm f/4-5.6 IS STM
        </span><br />
        <p class="text-container-description">
            Ви помітили щось цікаве, але ви надто далеко від цього? Об’єктив  EF-S 55-250mm f/4- 5.6 IS STM допоможе вам, коли вам треба бути ближче, але ви не можете. Цей телефотооб’єктив робить все далеке ближчим, тому ви можете бути ближчими до подій. Ідеально для зйомки сцен, коли ви не можете фізично досягти об’єкту.
        </p>
    </script>
@stop

@section('js')
    <script src="/js/game/index.js"></script>
@stop
