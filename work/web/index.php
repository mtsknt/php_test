<?php

include('../app/components/shared/_header.php');

$error_messages = $_SESSION['error'] ?? [];

$url_from = $_SERVER['HTTP_REFERER'] ?? NULL;
$flag = ($_SESSION['flag'] ?? false) || preg_match('/confirm.php/i', $url_from);
$_SESSION['flag'] = false;

$subject = ($flag === true) ? $_SESSION['subject'] : 'ご意見';
$name    = ($flag === true) ? $_SESSION['name'] : '';
$email   = ($flag === true) ? $_SESSION['email'] : '';
$phone   = ($flag === true) ? $_SESSION['phone'] : '';
$message = ($flag === true) ? $_SESSION['message'] : '';

?>

<section class="form-section">
  <?php if($error_messages !== []): ?>
    <div class="error red">
      <?php foreach($error_messages as $error_message): ?>
        <p><?= h($error_message) ?></p>
      <?php endforeach; ?>
    </div>
  <?php endif; ?>
  
  <form action="<?= $prefix . $domain . '/validation.php' ?>" method='post'>
    <div class="form-group">
      <label for="subject"><span class="red">*</span>件名</label>
      <select class="form-item" name="subject">
        <option value="ご意見" <?php if($subject === 'ご意見') echo 'selected' ?> >
          ご意見
        </option>
        <option value="ご感想" <?php if($subject === 'ご感想') echo 'selected' ?>>
          ご感想
        </option>
        <option value="その他" <?php if($subject === 'その他') echo 'selected' ?>>
          その他
        </option>
      </select>
    </div>

    <div class="form-group">
      <label for="name"><span class="red">*</span>名前</label>
      <input type="text" class="form-item" name="name" placeholder="yamada taro" value="<?= h($name) ?>">
    </div>

    <div class="form-group">
      <label for="email"><span class="red">*</span>メールアドレス</label>
      <input type="email" class="form-item" name="email" placeholder="test@example.com" value="<?= h($email) ?>">
    </div>
    
    <div class="form-group">
      <label for="phoneNumber"><span class="red">*</span>電話番号</label>
      <input type="number" class="form-item" name="phoneNumber" placeholder="09012341234" min="0" step="1" value="<?= h($phone) ?>">
    </div>
    
    <div class="form-group">
      <label for="message"><span class="red">*</span>お問い合わせ内容</label>
      <textarea class="form-item" name="message"rows="5"><?= h($message) ?></textarea>
    </div>

    <button type="submit" class="btn submit form-item">送信</button>
  </form>
</section>

<?php

include('../app/components/shared/_footer.php');