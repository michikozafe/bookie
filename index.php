<?php
require_once "./controllers/connection.php";
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bookie</title>
  <link href="https://fonts.googleapis.com/css?family=Lexend+Deca|Lexend+Peta&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/363e153008.js"></script>
  <link rel="stylesheet" href="./assets/css/style.css">
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
          <a href="./index.php"><i class="fas fa-book-reader"></i> Library</a>
        </li>
        <li>
          <a href="#" id="addModalBtn"><i class="fas fa-plus-circle"></i> Add Book</a>
        </li>
        <li class="sort-container">
          <a href="#"><i class="fas fa-sort"></i> Sort</a>
          <div class="sort-content">
            <a href="./controllers/sort.php?sort=title">Title</a>
            <a href="./controllers/sort.php?sort=isbn">ISBN</a>
            <a href="./controllers/sort.php?sort=author">Author</a>
            <a href="./controllers/sort.php?sort=genre">Genre</a>
            <a href="./controllers/sort.php?sort=year">Year</a>
          </div>
        </li>
        <li class="filter-container">
          <a href="#"><i class="fas fa-filter"></i> Genre</a>
          <div class="filter-content">
            <?php
            $bookQuery = "SELECT DISTINCT genre FROM books";
            $bookList = mysqli_query($conn, $bookQuery);
            while ($book = mysqli_fetch_array($bookList)) {
              ?>
            <a href="./controllers/filter.php?genre=<?php echo $book["genre"]; ?>"><?php echo $book["genre"]; ?></a>
            <?php } ?>
          </div>
        </li>
      </ul>
    </div>
    <div class="search nav-section">
      <form action="./controllers/search.php" method="GET">
        <input type="text" placeholder="Search books..." name="search" required />
        <button type="submit"><i class="fas fa-search"></i></button>
      </form>
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
    $bookListsQuery = "SELECT * FROM books";
    if (isset($_SESSION["sort"])) {
      $bookListsQuery .= $_SESSION["sort"];
      unset($_SESSION["sort"]);
    }
    if (isset($_SESSION["search"])) {
      $bookListsQuery .= $_SESSION["search"];
      unset($_SESSION["search"]);
    }
    if (isset($_SESSION["filter"])) {
      $bookListsQuery .= $_SESSION["filter"];
      unset($_SESSION["filter"]); 
    }
    $bookListsResult = mysqli_query($conn, $bookListsQuery);
    while ($book = mysqli_fetch_array($bookListsResult)) {
      ?>
    <div class="book-item">
      <h3>
        <?php echo $book["title"]; ?>
      </h3>
      <p>by <?php echo $book["author"]; ?> in <?php echo $book["year"]; ?></p>
      <p>ISBN: <?php echo $book["isbn"]; ?></p>
      <p>Genre: <?php echo $book["genre"]; ?></p>
      <div>
        <a href="#" onclick=editModal(<?php echo $book["id"]; ?>)><i class="fas fa-pencil-alt"></i></a>
        <a href="#" onclick=deleteModal(<?php echo $book["id"]; ?>)><i class="fas fa-trash"></i></a>
      </div>
    </div>
    <?php include './modal/edit_modal.php';?>
    <?php include './modal/delete_modal.php';?>
    <?php } ?>
  </div>

  <!-- Add Modal -->
  <div id="addModal" class="modal">
    <div class="modal-header">
      <h2 class="modal-title">Add Book<span class="addCloseBtn close">&times;</span></h2>
    </div>
    <div class="modal-body">
      <form action="./controllers/add_book.php" method="POST">
        <input type="text" placeholder="Title" name="title" required>
        <input type="text" placeholder="ISBN" name="isbn" required>
        <input type="text" placeholder="Author" name="author" required>
        <input type="text" placeholder="Genre" name="genre" required>
        <input type="number" placeholder="Year" min="1" name="year" required>
        <button type="submit" id="addBookBtn">ADD BOOK</button>
      </form>
    </div>
  </div>

  <script src="./assets/js/script.js"></script>
</body>

</html>