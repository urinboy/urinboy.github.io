<?php
require_once 'layouts/header.php';
require_once 'models/User.php';
require_once 'library/Auth.php';

$userModel = new User();

if (empty($_POST)) {
    $message = null;
} else {
    $message = [];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!$email) {
        $message['email'] = "Email kiriting";
    }
    if (!$password) {
        $message['password'] = "Parol kiriting";
    } else {
        $user = $userModel->findByEmail($email);
        if (!$user || !password_verify($password, $user['password'])) {
            $message['password'] = "Parol yoki email xato";
        }
    }

}

if (is_array($message) && empty($message)) {
    Auth::login($userModel->findByEmail($email));
    header('Location:/index.php');
}

?>

<div class="card mt-5">
    <h5 class="card-header">Kirish</h5>
    <div class="card-body">
        <form action="" method="post">

            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" name="email" value="<?= $_POST['email'] ?>"
                       class="form-control <?= (is_array($message)) ? ((isset($message['email'])) ? 'is-invalid' : 'is-valid') : '' ?>"
                       id="exampleInputEmail1"
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
                       class="form-control <?= (is_array($message)) ? ((isset($message['password'])) ? 'is-invalid' : 'is-valid') : '' ?>"
                       id="exampleInputPassword1">
                <?php if (isset($message['password'])): ?>
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        <?= $message['password'] ?>
                    </div>
                <?php endif; ?>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
</div>


<?php require 'layouts/footer.php' ?>

