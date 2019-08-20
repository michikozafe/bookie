<?php
require_once "controllers/connection.php";
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bookie</title>
  <link href="https://fonts.googleapis.com/css?family=Lexend+Deca|Lexend+Peta&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/363e153008.js"></script>
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
  <!-- Nav -->
  <nav>
    <div class="logo nav-section">
      <h3><i class="fas fa-book"></i> BOOKIE</h3>
    </div>
    <div class="list nav-section">
      <ul>
        <li>
          <a href="#" id="addModalBtn"><i class="fas fa-plus-circle"></i> Add Book</a>
        </li>
        <li class="sort-container">
          <a href="#"><i class="fas fa-sort"></i> Sort</a>
          <div class="sort-content">
            <a href="#">Title</a>
            <a href="#">ISBN</a>
            <a href="#">Author</a>
            <a href="#">Genre</a>
            <a href="#">Year</a>
          </div>
        </li>
      </ul>
    </div>
    <div class="search nav-section">
      <input type="text" placeholder="Search books...">
      <button><i class="fas fa-search"></i></button>
    </div>
  </nav>

  <!-- Alert -->
  <?php if (isset($_SESSION["message"])) : ?>
  <div class="msg">
    <?php
      echo $_SESSION["message"];
      unset($_SESSION["message"]);
      ?>
  </div>
  <?php endif ?>

  <!-- Book Lists -->
  <div class="book-lists">
    <?php
      $bookListsQuery = "SELECT * from books"; 
      $bookListsResult = mysqli_query($conn, $bookListsQuery);
      while($book = mysqli_fetch_array($bookListsResult)){
    ?>
      <div class="book-item">
        <h3>
          <?php echo $book["title"]; ?>
        </h3>
        <p>by <?php echo $book["author"]; ?> in <?php echo $book["year"]; ?></p>
        <p>ISBN: <?php echo $book["isbn"]; ?></p>
        <p>Genre: <?php echo $book["genre"]; ?></p>
        <div>
          <a href="#" id="edit<?php echo $book["id"]; ?>" onclick=openModal(<?php echo $book["genre"]; ?>)><i class="fas fa-pencil-alt"></i></a>
          <a href="#"><i class="fas fa-trash"></i></a>
          <?php include 'modal/edit_modal.php'?>
        </div>
      </div>
    <?php } ?>
  </div>

  <!-- Add Modal -->
  <div id="addModal" class="modal">
    <div class="modal-header">
      <h2 class="modal-title">Add Book<span class="addCloseBtn close">&times;</span></h2>
    </div>
    <div class="modal-body">
      <form action="controllers/add_book.php" method="POST">
        <input type="text" placeholder="Title" name="title" required>
        <input type="text" placeholder="ISBN" name="isbn" required>
        <input type="text" placeholder="Author" name="author" required>
        <input type="text" placeholder="Genre" name="genre" required>
        <input type="number" placeholder="Year" min="1" name="year" required>
        <button type="submit" id="addBookBtn">ADD BOOK</button>
      </form>
    </div>
  </div>

  <script src="assets/js/script.js"></script>
</body>

</html>