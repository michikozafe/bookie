 <!-- Edit Modal -->
 <div id="edit<?php echo $book["id"]; ?>" class="modal">
    <div class="modal-header">
      <h2 class="modal-title">Edit <?php echo $book["title"]; ?><span class="addCloseBtn close">&times;</span></h2>
    </div>
    <div class="modal-body">
      <form action="controllers/add_book.php" method="POST">
        <input type="text" placeholder="Title" name="title" required>
        <input type="text" placeholder="ISBN" name="isbn" required>
        <input type="text" placeholder="Author" name="author" required>
        <input type="text" placeholder="Genre" name="genre" required>
        <input type="number" placeholder="Year" min="1" name="year" required>
        <button type="submit" id="addBookBtn">EDIT <?php echo $book["title"]; ?></button>
      </form>
    </div>
  </div>