<?php

include('../app/components/shared/_header.php');

$error_messages = $_SESSION['error'] ?? [];

?>

<section class="form-section">
  <?php if($error_messages !== []): ?>
    <div class="error red">
      <?php foreach($error_messages as $error_message): ?>
        <p><?= $error_message ?></p>
      <?php endforeach; ?>
    </div>
  <?php endif; ?>
  
  <form action="validation.php" method='post'>
    <div class="form-group">
      <label for="subject"><span class="red">*</span>subject</label>
      <select class="form-item" name="subject">
        <option value="ご意見">ご意見</option>
        <option value="ご感想">ご感想</option>
        <option value="その他">その他</option>
      </select>
    </div>
    
    <div class="form-group">
      <label for="name"><span class="red">*</span>name</label>
      <input type="text" class="form-item" name="name" required>
    </div>

    <div class="form-group">
      <label for="email"><span class="red">*</span>email</label>
      <input type="text" pattern=".+@.+\..+" class="form-item" name="email" title="xxx@xxx.xxx" required>
    </div>
    
    <div class="form-group">
      <label for="phoneNumber"><span class="red">*</span>phone number</label>
      <input type="tel" pattern="[0-9]+-[0-9]+-[0-9]+" class="form-item" name="phoneNumber" title="xxx-xxx-xxx" required>
    </div>
    
    <div class="form-group">
      <label for="message"><span class="red">*</span>message</label>
      <textarea class="form-item" name="message"rows="5" required></textarea>
    </div>

    <button type="submit" class="btn submit form-item">送信</button>
  </form>
</section>

<?php

include('../app/components/shared/_footer.php');