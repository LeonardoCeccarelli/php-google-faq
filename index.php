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

$currentLinkNav = (count($listNavLink) - 1)

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

    <main></main>

    <footer></footer>

</body>

</html>