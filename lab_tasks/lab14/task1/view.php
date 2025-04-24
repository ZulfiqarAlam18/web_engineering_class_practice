<!DOCTYPE html>
<html>
<head><title>News Headlines</title></head>
<body>
  <h2>Latest News</h2>
  <ul>
    <?php foreach ($headlines as $news): ?>
      <li><?= $news ?></li>
    <?php endforeach; ?>
  </ul>
</body>
</html>
