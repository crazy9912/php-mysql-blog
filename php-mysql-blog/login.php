<?php session_start();
if ($_POST['user'] == 'admin' && $_POST['pass'] == 'admin@123') {
    $_SESSION['loggedin'] = true; header('Location: dashboard.php'); exit;
}
?>
<form method='post'>
    <input name='user' placeholder='Username'><br>
    <input name='pass' type='password' placeholder='Password'><br>
    <input type='submit' value='Login'>
</form>