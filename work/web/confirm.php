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

  <div class="buttons">
    <button type="button" class="btn submit form-item">
      <a href="index.php" class="btn-text">修正</a>
    </button>
    
    <button type="button" class="btn submit form-item">
      <a href="complete.php" class="btn-text">送信</a>
    </button>
  </div>

</div>

<?php

include('../app/components/shared/_footer.php');

