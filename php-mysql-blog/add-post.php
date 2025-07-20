<?php include 'db.php';
if ($_POST) {
    $stmt = $conn->prepare('INSERT INTO posts (title, content) VALUES (?, ?)');
    $stmt->bind_param('ss', $_POST['title'], $_POST['content']);
    $stmt->execute(); header('Location: dashboard.php');
}
?>
<form method='post'>
    <input name='title' placeholder='Post Title'><br>
    <textarea name='content' placeholder='Content'></textarea><br>
    <input type='submit' value='Add Post'>
</form>