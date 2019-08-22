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