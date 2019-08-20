 <!-- Edit Modal -->
 <div id="edit<?php echo $book["id"]; ?>" class="modal">
    <div class="modal-header">
      <h2 class="modal-title">Edit <?php echo $book["title"]; ?><span class="editCloseBtn<?php echo $book["id"]; ?> close">&times;</span></h2>
    </div>
    <div class="modal-body">
      <form action="./controllers/edit_book.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $book["id"]; ?>">
        <input type="text" placeholder="Title" name="title" value="<?php echo $book["title"]; ?>" required>
        <input type="text" placeholder="ISBN" name="isbn" value="<?php echo $book["isbn"]; ?>" required>
        <input type="text" placeholder="Author" name="author" value="<?php echo $book["author"]; ?>" required>
        <input type="text" placeholder="Genre" name="genre" value="<?php echo $book["genre"]; ?>" required>
        <input type="number" placeholder="Year" min="1" name="year" value="<?php echo $book["year"]; ?>" required>
        <button type="submit" id="editBookBtn">Edit <?php echo $book["title"]; ?></button>
      </form>
    </div>
  </div>