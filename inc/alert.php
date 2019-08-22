<!-- Alert -->
<?php if (isset($_SESSION["message"])) : ?>
  <div class="msg">
    <?php
      echo $_SESSION["message"];
      unset($_SESSION["message"]);
      ?>
  </div>
<?php endif ?>