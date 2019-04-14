<?php
session_start();
?>
    <html>
    <body>
    <form method="POST">
        <input type="text" name="login">
        <input type="password" name="password">
        <input type="submit" value="login" name="">
    </form>
    </body>
    </html>

    <a href = >

<?php
if ($_POST['login'] == 'admin' && $_POST['password'] == '123') {
    $_SESSION['ver'] = true;
} else {
    if (isset($_POST['login']))
        echo "неверный логин";
}
?>