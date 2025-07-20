<?php include 'db.php'; $id = (int)$_GET['id'];
if ($_POST) {
    $stmt = $conn->prepare('UPDATE posts SET title=?, content=? WHERE id=?');
    $stmt->bind_param('ssi', $_POST['title'], $_POST['content'], $id);
    $stmt->execute(); header('Location: dashboard.php');
}
$result = $conn->query('SELECT * FROM posts WHERE id=' . $id);
$post = $result->fetch_assoc();
?>
<form method='post'>
    <input name='title' value='<?=htmlspecialchars($post["title"])?>'><br>
    <textarea name='content'><?=htmlspecialchars($post["content"])?></textarea><br>
    <input type='submit' value='Update Post'>
</form>