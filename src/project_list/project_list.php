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
    $resource = null,
    $year,
    $description,
    $with,
    $tech,
    $actions
) {
    include('project_template.php');
}
?>

<article>
    <h1 class="Text Heading Text-Wrapper">Applications</h1>
    <ul>
        <?php generateListItem(
            $title = "FHWS@IoT Device Finder",
            $resource = null,
            $year = "2020",
            $description = "A device ip traking system, that helps by finding a devices ip address in a restrictive network where DHCP is enabled. Consisting of IoT devices and a webfrontend.",
            $with = ["Julian Z."],
            $tech = ["Angular", ".NET Core", "Python"],
            $actions = [
                // action("Github", "https://github.com/Konrad97/View")
            ]
        ) ?>

        <?php generateListItem(
            $title = "View",
            $resource = "/res/View_screenshot.png",
            $year = "2018",
            $description = "A realtime room occupancy traking system. Consisting of IoT devices and a webfrontend.",
            $with = ["Julian Z.", "Achim W.", "Lars W."],
            $tech = ["Angular", ".NET Core", "C++"],
            $actions = [
                action("Github", "https://github.com/Konrad97/View")
            ]
        ) ?>
    </ul>
</article>

<article>
    <h1 class="Text Heading Text-Wrapper">Mobile-Apps</h1>
    <ul>
        <?php generateListItem(
            $title = "Pfandrechner",
            $resource = "/res/Pfandrechner_screenshot.png",
            $year = "2019",
            $description = "Crossplatform App for calculating deposit.",
            $with = [],
            $tech = ["Flutter"],
            $actions = [
                action("PlayStore", "https://play.google.com/store/apps/details?id=de.konradmelzer.pfandrechner&hl=de"),
                action("AppStore", "https://itunes.apple.com/de/app/pfand-rechner/id1467253790?mt=8")
            ]
        ) ?>
    </ul>
</article>

<article>
    <h1 class="Text Heading Text-Wrapper">Games</h1>
    <ul>
        <?php generateListItem(
            $title = "DotGameReloaded",
            $resource = "/res/dotgameRemastered_screenshot.png",
            $year = "2018",
            $description = "A multiplayer game about circle cannibalism...",
            $with = [],
            $tech = ["Typescript", "Node.js"],
            $actions = [
                action("Try it!", "https://games4u.uber.space/"),
                // TODO action("Code", "https://gitlab.com/games4u/dotagame-client/")
            ]
        ) ?>
    </ul>
</article>