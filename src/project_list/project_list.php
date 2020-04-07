<?php
function action(
    $title,
    $href
) {
    return array(
        'title' => $title,
        'href' => $href
    );
}

function generateListItem(
    $title,
    $resource,
    $year,
    $description,
    $actions
) {
    include('project_template.php');
}
?>

<article>
    <h1 class="Text Heading Text-Wrapper">Games</h1>
    <ul>
        <?php generateListItem(
            $title = "DotGameReloaded",
            $resource = "/res/dotgameRemastered_screenshot.png",
            $year = "2018",
            $description = "A multiplayer game about circle cannibalism... Made with Typescript and Node",
            $actions = [
                action("Try it!", "https://games4u.uber.space/"),
                action("Code", "https://gitlab.com/games4u/dotagame-client/")
            ]
        ) ?>
    </ul>
</article>

<article>
    <h1 class="Text Heading Text-Wrapper">Apps</h1>
    <ul>
        <?php generateListItem(
            $title = "Pfandrechner",
            $resource = "/res/Pfandrechner_screenshot.png",
            $year = "2019",
            $description = "Crossplatform App for calculating deposit. Made with Flutter",
            $actions = [
                action("PlayStore", "https://play.google.com/store/apps/details?id=de.konradmelzer.pfandrechner&hl=de"),
                action("AppStore", "https://itunes.apple.com/de/app/pfand-rechner/id1467253790?mt=8")
            ]
        ) ?>
    </ul>
</article>