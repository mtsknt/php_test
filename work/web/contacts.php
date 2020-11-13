<?php

try{

  $dsn = "mysql:host=mysql;dbname=skillcheck;";
  $db = new PDO($dsn, 'root', 'root');

  $sql = "SELECT * FROM contacts";
  $stmt = $db->prepare($sql);
  $stmt->execute();
  $results = $stmt->fetchALL(PDO::FETCH_ASSOC);
  $results = array_reverse($results);

} catch (PDOException $e) {

  echo $e->getMessage();
  exit;

}

include('../app/components/shared/_header.php');

?>

<div class="contacts">
  <?php foreach($results as $contact): ?>
    <div class="contacts-item">
      <p><strong>お問い合わせNo.</strong> <?= h($contact['id']) ?></p>
      <p><strong>件名:</strong> <?= h($contact['subject']) ?></p>
      <p><strong>名前:</strong> <?= h($contact['name']) ?></p>
      <p><strong>メールアドレス:</strong> <?= h($contact['email']) ?></p>
      <p><strong>電話番号:</strong> <?= h($contact['phone']) ?></p>
      <p><strong>お問い合わせ内容:</strong> <?= h($contact['message']) ?></p>
    </div>
  <?php endforeach; ?>
</div>

<div style="text-align:center; margin:50px 0;">
  <a href="<?= $prefix . $domain . '/index.php' ?>">top page</a>
</div>
<?php

include('../app/components/shared/_footer.php');