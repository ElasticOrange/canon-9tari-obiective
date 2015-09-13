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
            <span class="circle-girl-text">ΘΕΛΕΤΕ ΤΟ ΤΕΛΕΙΟ ΠΟΡΤΡΑΙΤΟ;</span>
        </div>
        <!-- /Portrait -->

        <!-- Tele -->
        <div class="boy-head"></div>
        <div class="circle-boy-container">
            <img class="cerc-trotineta" src="/img/trotineta.png" />
            <img class="circle-boy" src="/img/bulina_rosie.png" />
            <span class="circle-boy-text">ΘΕΛΕΤΕ ΝΑ ΕΡΘΕΤΕ ΠΙΟ ΚΟΝΤΑ;</span>
        </div>
        <!-- /Tele -->
    </div>




    <div class="preview-box"></div>

    <div class="picture-portrait">
        <div class="back-button-container">
            <img src="/img/back-button.png" /><br />
            <span>Συνέχεια</span>
        </div>
    </div>

    <div class="picture-tele">
        <div class="back-button-container">
            <img src="/img/back-button.png" /><br />
            <span>Συνέχεια</span>
        </div>
    </div>

    <div class="grey-container">
        <img class="grey-overlay" src="/img/op-greylayer.png" />
        <span class="grey-text">ΘΕΛΕΤΕ ΝΑ ΧΩΡΕΣΕΤΕ ΠΕΡΙΣΣΟΤΕΡΑ ΣΤΟ ΚΑΔΡΟ ΣΑΣ;</span>
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
        <div class="preview-content">Κάντε κλικ για να εστιάσετε με τον φακό 18-135mm και να ξεκινήσετε το ταξίδι σας μέσω της εφαρμογής της Canon.</div>
    </script>

    <script type="text/template" id="display_lens_2">
        <div class="preview-lens1 preview-lens1"></div>
        <div class="preview-title">Canon<br /> EF-S 10-18mm f/4.5-5.6 IS STM</div>
        <div class="preview-content">Με τον φακό 10-18mm έχετε στη διάθεσή σας ευρύτερο κάδρο για τις αγαπημένες σας εικόνες.</div>
    </script>

    <script type="text/template" id="display_lens_3">
        <div class="preview-lens1 preview-lens3"></div>
        <div class="preview-title">Canon<br /> EF 50mm f/1.8 II </div>
        <div class="preview-content">Ο φακός EF 50mm είναι ιδανικός για πορτραίτα, καθώς θολώνει το φόντο και εστιάζει στο σημαντικότερο στοιχείο της λήψης: το θέμα.</div>
    </script>

    <script type="text/template" id="display_lens_4">
        <div class="preview-lens1 preview-lens4"></div>
        <div class="preview-title">Canon<br /> EF-S 55-250mm f/4-5.6 IS STM </div>
        <div class="preview-content">Όταν είναι αδύνατον να πλησιάσετε πιο πολύ, ο φακός EF-S 55-250mm φέρνει το θέμα σας στο προσκήνιο.</div>
    </script>

    <script type="text/template" id="texts-kit">
        <span class="text-container-title">
            Canon EF-S 18-135mm f/3.5-5.6 IS STM
        </span><br />
        <p class="text-container-description">
            Ο Canon EF-S 18-135mm f/3.5-5.6 IS STM είναι ένας φακός γενικής χρήσης, ιδανικός για αρχάριους, 
            ο οποίος προσφέρει μεγαλύτερο ζουμ από τον στάνταρ φακό του κιτ. Έτσι, τα μακρινά αντικείμενα έρχονται 
            πιο κοντά και μπορείτε να καταγράψετε το ίδιο εύκολα ενδιαφέρουσες λεπτομέρειες ή μαγευτικά τοπία. Θέλετε 
            διακριτική και αθόρυβη εστίαση κατά τη λήψη βίντεο; Κανένα πρόβλημα: ο φακός διαθέτει τεχνολογία STM. 
            Δοκιμάστε να ρυθμίσετε τον φακό στην ελάχιστη εστιακή απόσταση (18mm), ελάτε πιο κοντά στο θέμα και η 
            φωτογραφία θα αναδεικνύει την άμεση εμπλοκή σας στη σκηνή.
        </p>
    </script>

    <script type="text/template" id="texts-wide">
        <span class="text-container-title">
            Canon EF-S 10-18mm f/4.5-5.6 IS STM
        </span><br />
        <p class="text-container-description">
            Ορισμένες φορές, δεν μπορείτε να κάνετε άλλο ένα βήμα πίσω! Ο ευρυγώνιος φακός ζουμ EF-S 10-18mm f/4.5-5.6 IS STM, 
            με εύρος εστιακών αποστάσεων 10-18 mm, θα σας βοηθήσει να χωρέσετε περισσότερα στοιχεία στο κάδρο, ακόμη κι όταν 
            βρίσκεστε κοντά στο θέμα σας. Έτσι, μπορείτε να συμπεριλάβετε μεγαλύτερο μέρος της σκηνής στο πλάνο χωρίς 
            να χρειάζεται να απομακρυνθείτε από το θέμα. Επιπλέον, οι φωτογραφίες σας θα είναι πάντα πιο καθαρές χάρη στον 
            Σταθεροποιητή εικόνας. Όταν φωτογραφίζετε τοπία, η συμβουλή μας είναι να προσπαθείτε να στρέφετε τη μηχανή ελαφρώς 
            προς τα κάτω, ώστε να δημιουργείτε το λεγόμενο "εφέ κατευθυντήριας γραμμής" για να οδηγείτε το βλέμμα του θεατή.
        </p>
    </script>

    <script type="text/template" id="texts-portrait">
        <span class="text-container-title">
            Canon EF 50mm f/1.8 II
        </span><br />
        <p class="text-container-description">
            Με τον φακό EF 50mm f/1.8 STM μπορείτε να δημιουργήσετε το ανόθευτο οπτικό συναίσθημα που χρειάζεται για κάθε 
            πορτραίτο. Είναι ιδανικός για λήψεις με θόλωμα του φόντου, καθώς το διάφραγμά του είναι 3,5 φορές μεγαλύτερο 
            από αυτό του στάνταρ φακού ζουμ EF-S 18-55mm f/3.5-5.6 IS STM. Το θόλωμα του φόντου μιας φωτογραφίας τονίζει 
            το σημαντικότερο στοιχείο στο κάδρο: το πρόσωπο που φωτογραφίζετε. Δοκιμάστε να επιλέξετε την κατάσταση "Av" 
            στη μηχανή σας, ώστε να μπορέσετε να καθορίσετε το επιθυμητό διάφραγμα (θυμηθείτε ότι μεγάλο διάφραγμα σημαίνει 
            μικρή τιμή ρύθμισης), και κατόπιν εστιάστε στην περιοχή που θέλετε να εμφανίζεται ευκρινής πατώντας το 
            κουμπί του κλείστρου μέχρι το μέσον πριν από τη λήψη.
        </p>
    </script>

    <script type="text/template" id="texts-tele">
        <span class="text-container-title">
            Canon EF-S 55-250mm f/4-5.6 IS STM
        </span><br />
        <p class="text-container-description">
            Παρατηρήσατε κάτι ενδιαφέρον αλλά είστε πολύ μακριά; Ο φακός EF-S 55-250mm f/4-5.6 IS STM θα σας βοηθήσει 
            όταν πρέπει να πλησιάσετε αλλά δεν μπορείτε. Αυτός ο τηλεφακός ζουμ κάνει όλα τα απομακρυσμένα αντικείμενα 
            να δείχνουν εγγύτερα, φέρνοντάς σας πιο κοντά στη δράση. Είναι ιδανικός για σκηνές όπου δεν μπορείτε να 
            πλησιάσετε φυσικά το θέμα.
        </p>
    </script>
@stop

@section('js')
    <script src="/js/game/index.js"></script>
@stop
