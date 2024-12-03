<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-image: url("https://img.freepik.com/free-photo/top-view-list-written-black-notebook-black-table-free-space_140725-142507.jpg");
            background-size: cover;
            background-position: center;
            height: 100vh;
            margin: 0;
        }

        .todo-body {
            max-width: 700px;
            box-shadow: 0 0 5px #ccc;
            background-color: rgba(192, 192, 192, 0.8);

            border-radius: 10px;

        }

        .completed {
            text-decoration: line-through;
            color: red;

        }

        .in_progress {
            color: blue;

        }

        .pending {
            color: darkgreen;
        }

        .todo-text {
            font-weight: bold;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="todo-body my-5 p-3">
            <h1 class="text-center todo-text">Todo App</h1>
            <p>Todo App – bu foydalanuvchilarga vazifalarni ro‘yxatga kiritish, tahrirlash, belgilangan muddatni
                qo‘shish va
                bajarilganlarini o‘chirish imkonini beruvchi dastur. Bu loyiha foydalanuvchilarga o‘z vaqtini samarali
                boshqarishga yordam beradi.</p>
            <form method="POST" action="/todos">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Recipient's username"
                           aria-label="Recipient's username" aria-describedby="button-addon2"
                           name="title"
                           required
                    >
                    <input type="datetime-local" class="form-control" placeholder="Recipient's username"
                           aria-label="Recipient's username" aria-describedby="button-addon2"
                           name="due_date"
                           required
                    >
                    <button class="btn btn-primary" type="submit" id="button-addon2">Add</button>
                </div>
            </form>
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <?php

                    /** @var TYPE_NAME $todos */
                    foreach ($todos as $todo) {

//                        if ($todo['status'] == 'completed') {

                            echo '<li class=" ' . $todo['status'] . ' list-group-item d-flex justify-content-between align-items-center">
                            ' . $todo['title'] . '
                            <div>
                             <a href="/todos/' . $todo["id"] . '/edit" class="btn btn-outline-success">Edit</a>
                             <a href="/todos/' . $todo["id"] . '/delete" class="btn btn-outline-danger">Delete</a>
                            
                    </div>
                   
                </li>';
//                        } elseif ($todo['status'] == 'pending') {
//                            echo '<li class=" in_progress' . $todo['status'] . ' list-group-item d-flex justify-content-between align-items-center">
//                            ' . $todo['title'] . '
//                            <div>
//                             <a href="/todos/' . $todo["id"] . '/in_progress" class="btn btn-outline-success">In Progress</a>
//                             <a href="/todos/' . $todo["id"] . '/complete " class="btn btn-outline-danger">Complete</a>
//
//                    </div>
//
//                </li>';
//                        } else {
//                            echo '<li class=" ' . $todo['status'] . ' list-group-item d-flex justify-content-between align-items-center">
//                            ' . $todo['title'] . '
//                            <div>
//                             <a href="/todos/' . $todo["id"] . '/pending" class="btn btn-outline-primary">Pending</a>
//                             <a href="/todos/' . $todo["id"] . '/complete " class="btn btn-outline-danger">Complete</a>
//
//
//                    </div>
//
//                </li>';
//                        }
//                        }

                    }
                    ?>

                </li>
            </ul>
        </div>
    </div>
</div>
</body>
</html>
