<?php

$listNavLink = [
    [
        "text" => "Introduzione",
        "url" => "#Introduzione"
    ],
    [
        "text" => "Termini di Servizio",
        "url" => "#Termini_di_Servizio"
    ],
    [
        "text" => "Norme sulla Privacy",
        "url" => "#Norme_sulla_Privacy"
    ],
    [
        "text" => "Tecnologie",
        "url" => "#Tecnologie"
    ],
    [
        "text" => "Domande frequenti",
        "url" => "#Domande frequenti"
    ],
];

$currentLinkNav = (count($listNavLink) - 1);

$mainData = [
    [
        "title" => "<h2 class='m_bottom'>Come state implementando la recente decisione della Corte di giustizia dell'Unione europea (CGUE) relativa al diritto all'oblio?</h2>",
        "paragraph" => [
            "<p class='m_bottom_plus'>La recente <a href='#'>decisione della Corte di giustizia dell'Unione europea</a> ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi.</p>",
            "<p class='m_bottom_plus'>Da quando questa decisione è stata pubblicata il 13 maggio 2014, abbiamo lavorato incessantemente per uniformarci a essa. Si tratta di una procedura complessa perché dobbiamo valutare ogni singola richiesta e effettuare un bilanciamento tra il diritto dell'individuo a controllare i suoi dati personali ed il diritto di tutti di conoscere e distribuire le informazioni.</p>",
            "<p class='m_bottom_plus'>Per presentare una richiesta di rimozione, compila questo <a href='#'>modulo web.</a> Riceverai una risposta automatica che conferma la ricezione della tua richiesta. Dopodiché valuteremo il tuo caso (tieni presente che potrebbe occorrere un po' di tempo perché abbiamo già ricevuto tante richieste simili). Nel valutare la richiesta, considereremo se i risultati includono informazioni obsolete relative alla tua vita privata. Considereremo inoltre se vi è un interesse pubblico a che le informazioni rimangano nei nostri risultati delle ricerche, ad esempio se riguardano frodi finanziarie, negligenza professionale, condanne penali o la tua condotta pubblica in relazione a un pubblico ufficio (eletto o non eletto). Queste valutazioni sono complesse e, in quanto organizzazione privata, potremmo non essere nella posizione giusta per prendere decisioni in merito al tuo caso. Se non sei d'accordo con la nostra valutazione, puoi rivolgerti all'Autorità garante per la protezione dei dati personali nel tuo paese.</p>",
            "<p class='m_bottom_plus'>Nei prossimi mesi lavoreremo a stretto contatto con le autorità per la protezione dei dati e con altre autorità per perfezionare il nostro approccio. La decisione della CGUE rappresenta un cambiamento significativo per i motori di ricerca. Siamo preoccupati per le sue conseguenze, ma riteniamo anche che sia importante rispettare la decisione della Corte e ci stiamo adoperando per predisporre una procedura conforme alla legge.</p>",
            "<p class='m_bottom_plus'>Quando cerchi un nome, potresti trovare una notifica in cui viene spiegato che i risultati potrebbero essere stati modificati nel rispetto delle leggi europee per la protezione dei dati. Mostriamo questa notifica agli utenti europei quando cercano la maggior parte dei nomi, non soltanto le pagine che sono state soggette a una rimozione.</p>",
        ],
    ],
    [
        "title" => "<h2 class='m_bottom'>Come fa Google a proteggere la mia privacy e a tenere le mie informazioni al sicuro?</h2>",
        "paragraph" => [
            "<p class='m_bottom_plus'>Sappiamo che la sicurezza e la privacy sono importanti per te e lo sono anche per noi. Per noi è imperativo offrire un'elevata sicurezza e assicurarti che le tue informazioni sono al sicuro e accessibili quando ne hai bisogno.</p>",
            "<p class='m_bottom_plus'>Siamo costantemente al lavoro per garantire un'elevata sicurezza, proteggere la tua privacy e rendere Google ancora più efficace ed efficiente per te. Spendiamo centinaia di milioni di dollari ogni anno per la sicurezza e ci avvaliamo di esperti di fama mondiale in materia di sicurezza dei dati per mantenere le tue informazioni al sicuro. Abbiamo inoltre sviluppato strumenti per la sicurezza e la privacy di facile utilizzo come Google Dashboard, la verifica in due passaggi e Impostazioni annunci. Così, per quanto riguarda le informazioni che condividi con Google, hai il massimo controllo.</p>",
            "<p class='m_bottom_plus'>Puoi leggere ulteriori informazioni sulla sicurezza online, incluso come proteggere te e la tua famiglia online, nel <a href='#'>Centro Google per la sicurezza online.</a></p>",
            "<p class='m_bottom_plus'><a href='#'>Scopri</a> quali misure adottiamo per garantire protezione e sicurezza alle tue informazioni personali, lasciando a te il controllo.</p>",
        ],
    ],
]

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link GOOGLE FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Link FONTAWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Mio CSS -->
    <link rel="stylesheet" href="styles/main.css">

    <title>Google - FAQ</title>
</head>

<body>

    <header>
        <nav>
            <div class="nav_top">
                <div class="nav_top_logo align_center">
                    <img src="img/logo_google.svg" alt="Logo Google">
                    <h2>Privacy e termini</h2>
                </div>
                <div class="nav_top_user align_center">
                    <i class="fas fa-bars"></i>
                    <span>U</span>
                </div>
            </div>
            <div class="nav_bottom">
                <ul class="nav_link_container">
                    <?php

                    foreach ($listNavLink as $index => $link) {

                        $linkActive = null;

                        if ($index === $currentLinkNav) {
                            $linkActive = "active";
                        }

                        echo "<li><a class='" . $linkActive . "' href='" . $link["url"] . "'>" . $link["text"] . "</a></li>";
                    }

                    ?>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <div class="main_container">
            <?php

            foreach ($mainData as $data) {
                echo "<div class='help_section'>";

                foreach ($data as $info) {
                    echo $info["title"];
                }

                echo "</div>";
            }

            ?>
        </div>
    </main>

    <footer></footer>

</body>

</html>