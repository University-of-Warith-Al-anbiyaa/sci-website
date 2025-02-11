<?php
session_start();
require_once 'includes/config.php';

$id = isset($_GET['id']) ? $_GET['id'] : null;
$newsData = isset($_SESSION['newsdata']) ? $_SESSION['newsdata'] : null;

$newsItem = null;
if ($newsData && isset($newsData['data'])) {
    foreach ($newsData['data'] as $item) {
        if ($item['id'] == $id) {
            $newsItem = $item;
            break;
        }
    }
}

if (!$newsItem) {
    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title><?php echo htmlspecialchars($newsItem['arttitle']); ?></title>
    <link href="s/style.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <article class="news-detail">
            <h1><?php echo htmlspecialchars($newsItem['arttitle']); ?></h1>
            <?php if (!empty($newsItem['photo'])): ?>
                <img src="https://uowa.edu.iq/store/filestorage/file_<?php echo htmlspecialchars($newsItem['photo']); ?>" 
                     alt="<?php echo htmlspecialchars($newsItem['arttitle']); ?>"
                     onerror="this.src='store/default-news.jpg'">
            <?php endif; ?>
            <div class="meta">
                <time datetime="<?php echo $newsItem['created']; ?>">
                    <?php echo date('Y-m-d', strtotime($newsItem['created'])); ?>
                </time>
            </div>
            <div class="content">
                <?php echo $newsItem['content']; ?>
            </div>
            <a href="index.php" class="back-button">العودة للرئيسية</a>
        </article>
    </div>
</body>
</html>
