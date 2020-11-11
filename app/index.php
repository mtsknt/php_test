<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <title>ContactForm</title>
  <meta name="description" content="ContactFormTest">
  <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
  <header>
    <p>Contact</p>
  </header>

  <section class="form-section">
    <!-- <form method="post"> -->
      <form action="formtest.php">
      <div class="form-group">
        <label for="subject"><span class="red">*</span>subject</label>
        <select class="form-item name="subject" id="subject">
          <option value="null">---</option>
          <option value="ご意見">ご意見</option>
          <option value="ご感想">ご感想</option>
          <option value="その他">その他</option>
        </select>
      </div>
      
      <div class="form-group">
        <label for="name"><span class="red">*</span>name</label>
        <input type="text" class="form-item" name="name" id="name">
      </div>

      <div class="form-group">
        <label for="email"><span class="red">*</span>email</label>
        <input type="text" class="form-item" name="email" id="email">
      </div>
      
      <div class="form-group">
        <label for="phoneNumber"><span class="red">*</span>phone number</label>
        <input type="text" class="form-item" name="phoneNumber" id="phoneNumber">
      </div>
      
      <div class="form-group">
        <label for="message"><span class="red">*</span>message</label>
        <textarea class="form-item" name="message" id="message" rows="5"></textarea>
      </div>

      <button type="submit" class="btn submit form-item">送信</button>
    </form>
  </section>

</body>
</html>
  