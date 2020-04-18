<?php
function generateLinkItem(
    $title,
    $location,
    $description
) {
    include('link.php');
}
?>

<html>

<?php
include 'head.php'
?>

<body>
    <?php
    include 'header.php'
    ?>
    <main>
        <article>
            <ul>
                <?php generateLinkItem("TRAEFIK", "https://traefik.konradmelzer.de", "The reverse proxy used for routing and encryption of docker swarm") ?>
                <?php generateLinkItem("PORTAINER", "https://portainer.konradmelzer.de", "The docker management tool used for docker swarm") ?>
                <?php generateLinkItem("REGISTRY", "https://registry.konradmelzer.de", "The docker registry used for serving docker images") ?>
            </ul>
        </article>
    </main>

    <?php
    include 'footer.php'
    ?>
</body>

</html>