<<?php 
    session_start();

 ?>


 <!doctype html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

  
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>

<!-- //body starts here -->

<body>
    <nav class="navbar navbar-expand-lg-4 bg-body-warning bg-dark border-bottom-top border-body" data-bs-theme="dark">
</nav>

<nav class="navbar bg-warning" data-bs-theme="dark">

</nav>

<nav class="navbar" style="background-color: #f8f9fa;">     

    <div class="card col-lg-4 m-auto my-4">
    <div class="card-header">
        <legend>Library Data entry form</legend>
    </div>

<!-- title form -->

    <div class="card-body">


<!-- form action -->
        <form action="./cntr/controll.php" method="POST">

      <label for="title" class="form-label">Title</label>
      <input name="title"  
      value= "<?= isset($_SESSION['userData']['title']) ? $_SESSION['userData']['title'] : " " ?>"
      type="text" class="form-control my-3" placeholder="Enter the title of the Book">

      <?php
        if (isset($_SESSION['form_error']['title_error'])) {
           ?>
      <span class="text-danger"><?= $_SESSION['form_error']['title_error']?><br><br></span>
        <?php
            }
        ?>

<!-- //detail form -->

        <label for="detail" class="form-label">Detail</label>
      <input name="detail"  
      value= "<?= isset($_SESSION['userData']['detail']) ? $_SESSION['userData']['detail'] : " " ?>"
      type="text" class="form-control my-3" placeholder="Details of the Book">

      <?php
        if (isset($_SESSION['form_error']['detail_error'])) {
           ?>
      <span class="text-danger"><?= $_SESSION['form_error']['detail_error']?><br><br></span>
        <?php
            }
        ?>


<!-- //author form -->

        <label for="author" class="form-label">Author's Name</label>
      <input name="author"  
      value= "<?= isset($_SESSION['userData']['author']) ? $_SESSION['userData']['author'] : " " ?>"
      type="text" class="form-control my-3" placeholder="Author's Name">

      <?php
        if (isset($_SESSION['form_error']['author_error'])) {
           ?>
      <span class="text-danger"><?= $_SESSION['form_error']['author_error']?><br><br></span>
        <?php
            }
        ?>
 
  <!-- form ends here  -->
    
        <button type="submit" class="btn btn-success">Submit</button>
    </div>
</form>
</nav>


<div class="card">
  <div class="card-header">
    Quote of the Day
  </div>
  <div class="card-body">
    <!-- <div class="p-3 mb-2 bg-light text-dark">A well-known quote, contained in a blockquote element.</div> -->
    <blockquote class="blockquote mb-0">
      <p>A well-known quote, contained in a blockquote element.</p>
      <footer class="blockquote-footer">Someone famous on <cite title="Source Title">the Earth</cite></footer>
    </blockquote>
  </div>
</div>