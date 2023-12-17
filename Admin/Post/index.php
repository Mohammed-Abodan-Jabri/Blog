<?php 
//  include '../../mainMenu.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $id = $_POST['id']; 
    $con = new mysqli( 'localhost', 'root','','Blog' );
    $result=$con->query("DELETE FROM posts WHERE id = '$id'");

    // header('Location: ./index.php');
    // exit();

}

$con = new mysqli( 'localhost', 'root','','Blog' );
$result=$con->query("SELECT * FROM posts");



?>
<!DOCTYPE html>
<html lang="en">
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
    <h2 class="display-3 mt-4 mb-5">Blog -List</h2>
    <table class="table table-striped border-0">
        <thead>
          <tr>
            <th >Number</th>
            <th >Title</th>
            <th >published Date</th>
            <th >action</th>
          </tr>
        </thead>
        <tbody>
          
            <?php 
           foreach ($result as $row) {
            echo'<tr>';
            echo '<td scope="row">'.$row['id'].'</td>';
            echo '<td scope="row">'.$row['title'].'</td>';
            echo '<td scope="row">'.$row['publishedDate'].'</td>';
            ?>
         <?php echo '<td scope="row">'?> <a class="btn btn-primary" href="./edit.php?id=<?php echo$row['id']?>" role="button">Edit</a></td>
         <?php echo '<td scope="row">'?> <a class="btn btn-info" href="../../post.php?id=<?php echo$row['id']?>" role="button">details</a></td>
         
         <?php echo '<td scope="row">' ?>
         <form action="./index.php" method="post">
         <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
         <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this post?')">Delete</button>
         </form>
         </td>
          <?php  echo'</tr>';
           }
            ?>
           
      
       
        </tbody>
      </table>
      <a class="btn btn-primary" href="./Add.php" >Create</a>
      
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