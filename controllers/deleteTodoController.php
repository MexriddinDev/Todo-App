<?php
/** @var TYPE_NAME $todoId */
$todos=(new \App\Todo())->destroy($todoId);
redirect(' /todos');

