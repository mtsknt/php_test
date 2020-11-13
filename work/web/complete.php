<?php

include('../app/components/shared/_header.php');

mb_send_mail('mtsknt3@gmail.com', 'test', 'this is test');

?>

<div class="container" style="text-align:center">
  <p>お問い合わせが完了しました。(DB)</p>
  <a href="<?= $prefix . $domain . '/contacts.php' ?>">お問い合わせ一覧(DB)</a>
  <a href="<?= $prefix . $domain . '/index.php' ?>" style="margin-left: 15px">top page</a>
</div>

<?php

include('../app/components/shared/_footer.php');
