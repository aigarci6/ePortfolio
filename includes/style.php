<?php 
    header('Content-type: text/css; charset:UTF-8'); 
    $primaryColor =  $_GET['color'];
?>
<!-- navigation area -->
.navbar {
    font-size: 2vw;
}
.active {
    font-weight: 600;
}
<!-- general body -->
h1 {
    text-align: center;
    text-transform: uppercase;
    margin: 5vw;
}

<!-- sections -->
.mainDiv {
    background-color: green;
}
.imgElement {
    background-color: grey;
}
.imgElements img {
    max-width: 90%;
    height: 90%;
    object-fit: cover;
}
.paraElement {
    background-color: green;
}