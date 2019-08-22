<!-- Pagination Pages -->
<?php for ($i = 1; $i <= $lastPage; $i++) : ?>
  <?php if ($i == $page) : ?>
  <div class='pagination'>
    <a class='active page-numbers'><?= $i; ?></a>
  </div>
  <?php else : ?>
  <div class='pagination'>
    <?php if (isset($_GET["sort"])) : ?>
      <a href="<?= $_SERVER['PHP_SELF'] . '?page=' . $i . '&sort=' . $_GET["sort"]; ?>" class='page-numbers'><?= $i; ?></a>
    <?php elseif (isset($_GET["filter"])) : ?>
      <a href="<?= $_SERVER['PHP_SELF'] . '?page=' . $i . '&filter=' . $_GET["filter"]; ?>" class='page-numbers'><?= $i; ?></a>
    <?php elseif (isset($_GET["search"])) : ?>
      <a href="<?= $_SERVER['PHP_SELF'] . '?page=' . $i . '&search=' . $_GET["search"]; ?>" class='page-numbers'><?= $i; ?></a>
    <?php else : ?>
      <a href="<?= $_SERVER['PHP_SELF'] . '?page=' . $i; ?>" class='page-numbers'><?= $i; ?></a>
    <?php endif; ?>
  </div>
  <?php endif; ?>
<?php endfor; ?>