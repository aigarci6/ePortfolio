<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="includes/style.css">
    <title><?php echo $title ?></title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light position-static">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="images/potentialLogo.jpeg" style="width: 8vw;" alt="Axit Garcia"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link <?php if ($title == "Home") {echo 'active';}?>" <?php if ($title == "Home") {echo 'aria-current="page"';} ?> href="index.php">Home</a> _
        <a class="nav-link <?php if ($title == "About Me") {echo 'active';}?>" <?php if ($title == "About Me") {echo 'aria-current="page"';} ?> href="aboutMe.php">About Me</a> _
        <a class="nav-link <?php if ($title == "Professional") {echo 'active';}?>" <?php if ($title == "Professional") {echo 'aria-current="page"';} ?> href="professional.php">Professional</a> _
        <a class="nav-link <?php if ($title == "Academics") {echo 'active';}?>" <?php if ($title == "Academics") {echo 'aria-current="page"';} ?> href="academics.php">Academics</a> _
        <a class="nav-link <?php if ($title == "Community") {echo 'active';}?>" <?php if ($title == "Community") {echo 'aria-current="page"';} ?> href="community.php">Community</a> _
        <a class="nav-link <?php if ($title == "Special Events") {echo 'active';}?>" <?php if ($title == "Special Events") {echo 'aria-current="page"';} ?> href="specialEvents.php">Special Events</a> _
        <a class="nav-link <?php if ($title == "Contact Me") {echo 'active';}?>" <?php if ($title == "Contact Me") {echo 'aria-current="page"';} ?> href="contactMe.php">Contact Me</a>
        <a hidden class="nav-link <?php if ($title == "Skills & Hobbies") {echo 'active';}?>" <?php if ($title == "Skills & Hobbies") {echo 'aria-current="page"';} ?> href="skillsAndHobbies.php">Skills & Hobbies</a>
        <a hidden class="nav-link <?php if ($title == "Blog") {echo 'active';}?>" <?php if ($title == "Blog") {echo 'aria-current="page"';} ?> href="blog.php">Blog</a>
      </div>
    </div>
  </div>
</nav>