<!DOCTYPE html>
<html>

<?php
include 'src/head.php'
?>

<body>
    <?php
    include 'src/header.php'
    ?>
    <main>
        <article class="Text-Wrapper">
            <h1 class="Text Common">
                <span class="Text Heading">Hey my name is Konrad</span>
                <br><br>
                You found my website where I  <span class="Text Link">collect</span> and <span class="Text Link">document</span> my work<br><br>Hope you find something interesting
            </h1>
        </article>

        <div class="Banner">
            <img class="Logo" src="assets/logo.png">
        </div>

        <article class="Text-Wrapper">
            <h1 class="Text Heading">About me<br><br>
                <span class="Text Common">
                    I studied Computer Science at the <a class="Text Keyword" href="https://www.fhws.de" target="_blank">FHWS</a>
                    in Würzburg, Germany and am now working as a <br/>Software Developer
                </span>
            </h1>
        </article>

        <div class="Banner">
            <img class="Logo" src="assets/world.svg">
        </div>
    </main>

    <?php
    include 'src/footer.php'
    ?>
</body>

</html>