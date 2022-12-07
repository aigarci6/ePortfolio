<?php
$title = "Home";
$color = "#FF0000";
require_once "includes/header.php";
?>
<h1 class="mt-3 mb-2 appear1">Axit Garcia</h1>
<h1 class="mt-3 mb-2 text-center appear2">Welcome to my E-Portfolio</h1>

<div class="variableDiv reveal reveallevel">
    <div class="imgDiv reveal revealleft">
        <span class="helper"></span>
        <img src="images/tempHeadshot.JPG" alt="Axit Garcia Headshot">
    </div>
    <div class="textDiv reveal revealright">
        <div>
            I am a student at the University of Houston studying computer science, honors leadership studies, and Air Force Leadership studies. <br><br>
            As a cadet in the Air Force Reserve Officer Training Corps (AFROTC), I have earned great experience in leadership and grown in my appreciation for team work, public speaking, and initiative.
            <br><br>As a computer science student, I have gained technical insight into the virtual world of computers and have worked with a wide array of languages and computer science fields.
        </div>
    </div>
</div>
<div class="variableDiv reveal revealup">
    <span class="" style="width: 70%; text-align:center">
    As you look through my E-portfolio, I hope to portray the passion I have, as well as give you insight into the person I am and life I lead. If you are interested in what I do or think I can serve you in any way, feel free to reach out on the <a href="contactMe.php">contact page</a>. <br>
    </span>
</div>

<div id="carouselExampleSlidesOnly" class="carousel slide mt-5 mb-5" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="2000">
            <img src="images/diningInPOWMIA.JPEG" class="d-block w-100 carImg" alt="POW/MIA Ceremony">
        </div>
        <div class="carousel-item" data-bs-interval="2000">
            <img src="images/freeFallPlaneSide.PNG" class="d-block w-100 carImg" alt="Hanging off grounded plane at the Air Force Academy">
        </div>
        <div class="carousel-item" data-bs-interval="2000">
            <img src="images/announcingAwards.jpg" class="d-block w-100 carImg" alt="Announcing Awards">
        </div>
    </div>
</div>

<?php require_once "includes/footer.php"; ?>