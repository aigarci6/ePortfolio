<?php 
$title = "Contact Me";
$color = "#FF0000";
require_once "includes/header.php";
if (isset($_GET['success'])) {
    if ($_GET['success'] == 1) {
        echo '<h1>Your email has been sent</h1>';
    } else {
        echo '<h1>Your email failed to send. Please try again</h1>';
    }
} else {
    ?>
    <h3 class="mt-3 text-center">Please look at <a href="pdfView.php?pdf=documents/GarciaAxitResumeFall2022Public.pdf">my resume</a> and feel free to contact me if I am the leader or computer scientist you are looking for.</h3>
    <?php
}
?>

<div class="text-center mt-5 mb-5" style="width: 70vw; margin-left: 15vw;">
    <form action="db/email.php" method="post">
        <h1 mb-2>Contact Me</h1>
        <label for="firstName" hidden>First Name</label>
        <input type="text" class="form-control mt-3 mb-3" name="firstName" maxlength="50" id="firstName" class="form-control" required autofocus placeholder="First Name*">
        <label for="lastName" hidden>Last Name</label>
        <input type="text" class="form-control mt-3 mb-3" name="lastName" maxlength="50" id="lastName" class="form-control" required placeholder="Last Name*">
        <label for="email" hidden>Email</label>
        <input type="email" class="form-control mt-3 mb-3" name="email" maxlength="75" id="email" class="form-control" required placeholder="Email*">
        <label for="org" hidden>Phone Number</label>
        <input type="text" class="form-control mt-3 mb-3" name="org" id="org" maxlength="75" class="form-control" placeholder="Organization">
        <label for="additionalInfo" class="form-label" hidden>Additional Info</label>
        <textarea type="text" class="form-control mt-3 mb-3" id="additionalInfo" required name="additionalInfo" placeholder="Comments*"></textarea>
        <div class="mt-3">
            <button class="btn btn-secondary" style="width: 50%; height: 7vh; font-size: 1.5vw;" name='submit' type="submit">Submit</button>
        </div>
    </form>
</div>
    
<?php require_once "includes/footer.php"; ?>