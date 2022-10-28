  page reservé aux admin
  <?php

    use App\Auth;

    if ($_SESSION['auth'])
        $auth = new Auth($pdo);

    $id = $auth->identifiant;
    dump($user);

    if ($id !== 1) {
        header('Location: /admin.php?login=1');
        exit();
    }
    ?>