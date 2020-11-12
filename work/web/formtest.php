<?php

include('../app/components/shared/_header.php');

?>

<p>subject: <?= h($_SESSION['subject']) ?></p>
<p>name: <?= h($_SESSION['name']) ?></p>
<p>email: <?= h($_SESSION['email']) ?></p>
<p>phone: <?= h($_SESSION['phone']) ?></p>
<p>message: <?= h($_SESSION['message']) ?></p>
<a href="index.php">back</a>

<?php
include('../app/components/shared/_footer.php');
