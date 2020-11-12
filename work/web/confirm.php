<?php

include('../app/components/shared/_header.php');

?>

<div class="confirm-section">
  <h2>内容の確認</h2>
  
  <p class="title">件名:</p>
  <p> <?= h($_SESSION['subject']) ?></p>

  <p class="title">名前:</p>
  <p> <?= h($_SESSION['name']) ?></p>

  <p class="title">メールアドレス:</p>
  <p> <?= h($_SESSION['email']) ?></p>

  <p class="title">電話番号:</p>
  <p> <?= h($_SESSION['phone']) ?></p>

  <p class="title">お問い合わせ内容:</p>
  <p> <?= h($_SESSION['message']) ?></p>

  <a href="index.php">修正</a>
  <a href="complete.php">送信</a>
</div>

<?php

include('../app/components/shared/_footer.php');

