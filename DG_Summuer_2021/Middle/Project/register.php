<?php
require_once 'layouts/header.php';
require_once 'models/User.php';
require_once 'library/Auth.php';

$user = new User();

if (empty($_POST)) {
    $message = null;
} else {
    $message = [];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];
    $name = $_POST['name'];

    if (!$email) {
        $message['email'] = "Email kiriting";
    } elseif ($user->isEmailExist($email)) {
        $message['email'] = "Bu email band";
    }

    if (!$name) {
        $message['name'] = "Ismingizni kiriting";
    }

    if (!$password) {
        $message['password'] = "Parol yarating";
    } elseif (strlen($password) < 8) {
        $message['password'] = "Parol kamida 8 ta belgidan iborat bo'lishi kerak";
    }

    if (!$password_confirm) {
        $message['password_confirm'] = "Parolni takrorlang";
    } elseif ($password != $password_confirm) {
        $message['password_confirm'] = "Parollar mos kelmadi";
    }
}

if (empty($message))
    if ($user->register($name, $email, $password)) {
        Auth::login($user->findByEmail($email));
        header('Location:/index.php');
    }
?>

<div class="card mt-5">
    <h5 class="card-header">Registratsiya</h5>
    <div class="card-body">
        <form action="register.php" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Ism</label>
                <input type="text" name="name" value="<?= $_POST['name'] ?>"
                       class="form-control <?= (is_array($message)) ? ((isset($message['name'])) ? 'is-invalid' : 'is-valid') : '' ?>"
                       id="exampleInputEmail1" aria-describedby="emailHelp">
                <?php if (isset($message['name'])): ?>
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        <?= $message['name'] ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" name="email"  value="<?= $_POST['email'] ?>"
                       class="form-control <?= (is_array($message)) ? ((isset($message['email'])) ? 'is-invalid' : 'is-valid') : '' ?>" id="exampleInputEmail1"
                       aria-describedby="emailHelp">
                <?php if (isset($message['email'])): ?>
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        <?= $message['email'] ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Parol</label>
                <input type="password" name="password" value="<?= $_POST['password'] ?>"
                       class="form-control <?= (is_array($message)) ? ((isset($message['password'])) ? 'is-invalid' : 'is-valid') : '' ?>" id="exampleInputPassword1">
                <?php if (isset($message['password'])): ?>
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        <?= $message['password'] ?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Parolni takrorlang</label>
                <input type="password" name="password_confirm" value="<?= $_POST['password_confirm'] ?>"
                       class="form-control <?= (is_array($message)) ? ((isset($message['password_confirm'])) ? 'is-invalid' : 'is-valid') : '' ?>" id="exampleInputPassword1">
                <?php if (isset($message['password_confirm'])): ?>
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        <?= $message['password_confirm'] ?>
                    </div>
                <?php endif; ?>
            </div>
            <button type="submit" class="btn btn-primary">Royxatdan o'tish</button>
        </form>

    </div>
</div>


<?php require 'layouts/footer.php' ?>

