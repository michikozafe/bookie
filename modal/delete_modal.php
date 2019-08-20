 <!-- Delete Modal -->
 <div id="delete<?php echo $book["id"]; ?>" class="modal">
    <div class="modal-header">
      <h2 class="modal-title"><span class="deleteCloseBtn<?php echo $book["id"]; ?> close">&times;</span></h2>
    </div>
    <div class="modal-body">
    <form action="./controllers/delete_book.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $book["id"]; ?>">
        <input type="hidden" name="title" value="<?php echo $book["title"]; ?>">
        <h3 class="confirmText">Are you sure you want to delete <?php echo $book["title"]; ?></h3>
        <button type="submit" id="deleteBookBtn">Delete <?php echo $book["title"]; ?></button>
      </form>
    </div>
  </div>