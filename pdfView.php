<?php 
$title = "PDF Viewer";
$color = "#FF0000";
require_once "includes/header.php";
if (!isset($_GET['pdf'])) {
    header("Location: professional.php");
}
?>

<iframe src="<?php echo $_GET['pdf'] ?>" style="width: 95vw; height: 90vh; margin: 2.5vw;" frameborder="0"></iframe>

</div>
    
<?php require_once "includes/footer.php"; ?>