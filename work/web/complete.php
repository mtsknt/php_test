<?php

include('../app/components/shared/_header.php');

?>

<div class="container" style="text-align:center">
  <?php foreach($_SESSION['notice'] as $notice): ?>
    <p><?= $notice ?></p>
  <?php endforeach; ?>

  <a href="<?= $prefix . $domain . '/contacts_list.php' ?>">お問い合わせ一覧(DB)</a>
  <a href="<?= $prefix . $domain . '/index.php' ?>" style="margin-left: 15px">top page</a>
</div>

<?php

include('../app/components/shared/_footer.php');
