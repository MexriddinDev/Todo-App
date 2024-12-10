<?php
$todos=(new \App\Todo());
/** @var TYPE_NAME $todoId */
$getTodo = $todos->getTodo($todoId);
view('edit', [
    'todos' => $getTodo

]);