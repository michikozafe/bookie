<?php
require_once "./controllers/connection.php";
?>

<!DOCTYPE html>
<html>

<head>
  <?php include "./inc/head.php"; ?>
</head>

<body>
  <?php include "./inc/nav.php"; ?>
  <?php include "./inc/alert.php"; ?>

  <!-- Book Lists -->
  <div class="book-lists">
    <?php
    $bookListsQuery = "SELECT * FROM books";
    include "./controllers/sort.php";
    include "./controllers/filter.php";
    include "./controllers/search.php";
    $bookListsResult = mysqli_query($conn, $bookListsQuery);
    // Pagination
    $resultsPerPage = 3;
    $totalNoOfBooks = mysqli_num_rows($bookListsResult);
    $lastPage = ceil($totalNoOfBooks / $resultsPerPage);
    if ($lastPage < 1) {
      $lastPage = 1;
    }
    $page = isset($_GET["page"]) ? $_GET["page"] : 1;
    if ($page > $lastPage) {
      $page = 1;
    }
    $offset = ($page - 1) * $resultsPerPage;
    $bookListsQuery .= " LIMIT " . $offset . "," . $resultsPerPage;
    // echo $bookListsQuery;
    $bookListsResult = mysqli_query($conn, $bookListsQuery);
    while ($book = mysqli_fetch_array($bookListsResult)) : ?>
      <div class="book-item">
        <div class="img-container">
          <img src="<?= $book['img'];?>">
        </div>
        <h3>
          <?php echo $book["title"]; ?>
        </h3>
        <p>by <?php echo $book["author"]; ?></p>
        <p>published in <?php echo $book["year"]; ?></p>
        <p>ISBN: <?php echo $book["isbn"]; ?></p>
        <p>Genre: <?php echo $book["genre"]; ?></p>
        <div>
          <a href="#" onclick=editModal(<?php echo $book["id"]; ?>)><i class="fas fa-pencil-alt"></i></a>
          <a href="#" onclick=deleteModal(<?php echo $book["id"]; ?>)><i class="fas fa-trash"></i></a>
        </div>
      </div>
      <?php include './inc/modal/edit_modal.php'; ?>
      <?php include './inc/modal/delete_modal.php'; ?>
    <?php endwhile; ?>
  </div>
  
  <div class="pagination-container">
    <?php include './controllers/pagination_pages.php'; ?>
  </div>

  <?php if(!$totalNoOfBooks): ?>
    <h1 class="no-books-found">No Books Found!</h1>
    <script>document.querySelector('.pagination-container').style.display = "none";</script>
  <?php endif; ?>

  <?php include "./inc/modal/add_modal.php"; ?>

  <script src="./assets/js/script.js"></script>
</body>

</html>