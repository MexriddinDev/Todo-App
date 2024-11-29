<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

require 'src/Todo.php';

require 'helpers.php';

$todos = new Todo();

if ($uri == '/') {
    $todos = $todos->get();
    view('home', [
        'todos' => $todos
    ]);

} elseif ($uri == '/store') {
    if (!empty($_POST['title']) && !empty($_POST['due_date'])) {
        $todos->store($_POST['title'], $_POST['due_date']);
        header('Location: /');
        exit();

    }
} elseif ($uri == '/complete') {
    if (!empty($_GET['id'])) {
        $todos->complete($_GET['id']);
        header('Location: /');
        exit();
    }


} elseif ($uri == '/in_progress') {
    if (!empty($_GET['id'])) {
        $todos->in_progress($_GET['id']);
        header('Location: /');
        exit();
    }
} elseif ($uri == '/pending') {
    if (!empty($_GET['id'])) {
        $todos->pending($_GET['id']);
        header('Location: /');
        exit();
    }
} else {
    echo "Kechirasiz bu sahifa topilmadi";
}