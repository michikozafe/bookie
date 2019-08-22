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
          <a href="./index.php?sort=title">Title</a>
          <a href="./index.php?sort=isbn">ISBN</a>
          <a href="./index.php?sort=author">Author</a>
          <a href="./index.php?sort=genre">Genre</a>
          <a href="./index.php?sort=year">Year</a>
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
          <a href="./index.php?filter=<?php echo $book["genre"]; ?>"><?php echo $book["genre"]; ?></a>
          <?php } ?>
        </div>
      </li>
    </ul>
  </div>
  <div class="search nav-section">
    <form action="./index.php" method="GET">
      <input type="text" placeholder="Search books..." name="search" required/>
      <button type="submit"><i class="fas fa-search"></i></button>
    </form>
  </div>
</nav>