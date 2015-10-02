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
            <span class="circle-girl-text">Хотите сделать идеальный портрет?</span>
        </div>
        <!-- /Portrait -->

        <!-- Tele -->
        <div class="boy-head"></div>
        <div class="circle-boy-container">
            <img class="cerc-trotineta" src="/img/trotineta.png" />
            <img class="circle-boy" src="/img/bulina_rosie.png" />
            <span class="circle-boy-text">Хотите приблизиться?</span>
        </div>
        <!-- /Tele -->
    </div>




    <div class="preview-box"></div>

    <div class="picture-portrait">
        <div class="back-button-container">
            <img src="/img/back-button.png" /><br />
            <span>Продолжить</span>
        </div>
    </div>

    <div class="picture-tele">
        <div class="back-button-container">
            <img src="/img/back-button.png" /><br />
            <span>Продолжить</span>
        </div>
    </div>

    <div class="grey-container">
        <img class="grey-overlay" src="/img/op-greylayer.png" />
        <span class="grey-text">Хотите поместить больше объектов в кадр? Нужен более широкий кадр?</span>
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
        <div class="preview-content">Нажмите, чтобы навести фокус с помощью объектива 18-135мм и начать путешествие по приложению Canon</div>
    </script>

    <script type="text/template" id="display_lens_2">
        <div class="preview-lens1 preview-lens1"></div>
        <div class="preview-title">Canon<br /> EF-S 10-18mm f/4.5-5.6 IS STM</div>
        <div class="preview-content">Используя объектив 10-18mm, Вы сможете поместить в свой любимый кадр больше деталей </div>
    </script>

    <script type="text/template" id="display_lens_3">
        <div class="preview-lens1 preview-lens3"></div>
        <div class="preview-title">Canon<br /> EF 50mm f/1.8 II </div>
        <div class="preview-content">Объектив EF 50mm идеален для портретов, он создает размытие заднего плана, выделяя самый важный элемент - объект съемки.</div>
    </script>

    <script type="text/template" id="display_lens_4">
        <div class="preview-lens1 preview-lens4"></div>
        <div class="preview-title">Canon<br /> EF-S 55-250mm f/4-5.6 IS STM </div>
        <div class="preview-content">Когда встать ближе невозможно, объектив EF-S 55-250mm переносит объект съемки на передний план.</div>
    </script>

    <script type="text/template" id="texts-kit">
        <span class="text-container-title">
            Canon EF-S 18-135mm f/3.5-5.6 IS STM
        </span><br />
        <p class="text-container-description">Идеально для начинающих, Canon EF-S 18-135mm f/3.5-5.6 IS STM - это объектив общего назначения, который предлагает более мощный зум по сравнению со стандартными комплектами, с ним удаленные предметы становятся ближе, так что Вы сможете снять интересные детали или пейзажи, от которых захватывает дух. Нужна плавная и бесшумная фокусировка во время съемки видео? Без проблем, данный объектив использует технологию STM. Попробуйте установить Ваш объектив на минимальное расстояние фокусировки (18мм), приблизьтесь к объекту и фотография создаст впечатление непосредственного участия в сцене.</p>
    </script>

    <script type="text/template" id="texts-wide">
        <span class="text-container-title">
            Canon EF-S 10-18mm f/4.5-5.6 IS STM
        </span><br />
        <p class="text-container-description">Иногда отойти назад невозможно! Объектив  EF-S 10-18mm f/4.5- 5.6 IS STM с широкоугольным зумом и фокусным расстоянием 10-18мм поможет Вам поместить в кадр больше объектов - даже при съемке с близкого расстояния, поэтому вы можете запечатлеть больше деталей, не отходя назад. Ваши снимки будут четкими, благодаря стабилизатору изображения. При фотографировании пейзажа, наш совет - наведите камеру немного вниз, чтобы получить так называемый эффект "горизонтальной линии", который будут вести взгляд зрителя.</p>
    </script>

    <script type="text/template" id="texts-portrait">
        <span class="text-container-title">
            Canon EF 50mm f/1.8 II
        </span><br />С объективом  EF 50mm f/1.8 STM Вы сможете запечатлеть настроение момента, необходимое для любого портрета. Он идеален для размытого фона, так как его диафрагма в 3.5 раза больше, чем на стандартном зум-объективе EF-S 18-55mm f/3.5-5.6 IS STM. Размытие заднего плана выделяет самый важный элемент кадра - человека, которого Вы фотографируете. Установите Вашу камеру в режим AV, чтобы выбрать нужное значение диафрагмы (не забудьте, что большое значение диафрагмы подразумевает большую глубину резкости), нажатием кнопки затвора наполовину сфокусируйтесь на области, которую Вы хотите выделить и снимайте.</p>
    </script>

    <script type="text/template" id="texts-tele">
        <span class="text-container-title">
            Canon EF-S 55-250mm f/4-5.6 IS STM
        </span><br />
        <p class="text-container-description">Заметили что-то интересное, но Вы находитесь слишком далеко? Объектив EF-S 55-250mm f/4- 5.6 IS STM поможет Вам стать ближе, когда это невозможно. Этот зум-телеобъектив приближает все удаленные предметы, так что Вы всегда будете в центре событий. Идеален для съемки сцен, когда Вы не можете подойти к объекту ближе.</p>
    </script>
@stop

@section('js')
    <script src="/js/game/index.js"></script>
@stop
