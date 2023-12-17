<?php
$con = new mysqli( 'localhost', 'root','','Blog' );
$bool=true;
// var_dump($con);
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
 $title = $_POST[ 'title' ]??'';
$subTitle = $_POST[ 'subTitle' ]??'';
$content = $_POST[ 'content' ]??'';
$publishedDate = $_POST[ 'publishedDate' ]??'';

$insertSql = "INSERT INTO posts (id,title,subTitle,content,author,publishedDate ) VALUES ('', '".$title."','".$subTitle."','".$content."','Ahmed','".$publishedDate."')";
$con->query($insertSql);
if($con->affected_rows ==1)
{
    header("location: index.php");

}
else
{
    echo "failed to insert to database";
 
}

}

?>

<!DOCTYPE html>
<html lang = 'en'>
<head>
<meta charset = 'UTF-8'>
<meta name = 'viewport' content = 'width=device-width, initial-scale=1.0'>
<link href = 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css' rel = 'stylesheet' integrity = 'sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN' crossorigin = 'anonymous'>
<link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="../../css/styles.css" rel="stylesheet" />

<title>Document</title>
</head>
<body style="margin-top:100px; margin-left: 10%; margin-right: 10%;" >
<?php include '../../mainMenu.php' ?>

<form method = 'post'>
    <h2 class="text-center mb-5">Adding Post</h2>
<div class = 'mb-3'>
<label for = 'exampleInputEmail1' class = 'form-label'>title Post</label>
<input name = 'title' type = 'text' class = 'form-control'>
<?php
    if($bool)
    {
        echo'<p class="text-danger m-0 p-0">message Error</p>';
    }

?>
</div>
<div class = 'mb-3'>
<label for = 'exampleInputEmail1' class = 'form-label'>subTitle Post</label>
<input name = 'subTitle' type = 'text' class = 'form-control'>
</div>
<div class = 'mb-3'>
<label class = 'form-label'> published Date</label>
<input name = 'publishedDate' type = 'date' class = 'form-control'>
</div>
<div class = 'form-floating'>
<textarea name = 'content' class = 'form-control' placeholder = 'Leave a comment here' id = 'floatingTextarea2' style = 'height: 100px'></textarea>
<label for = 'floatingTextarea2'>Contents</label>
</div>

<button type = 'submit' class = 'btn btn-primary'>Submit</button>
</form>

<?php include '../../footer.php' ?>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<!-- * *                               SB Forms JS                               * *-->
<!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

</body>
</html>