<?php
require 'views/components/header.php';
require 'views/components/navbar.php';

?>
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
<div style="position: fixed; width: 100%; bottom: 0; ">
    <?php
    require 'views/components/footer.php';
    ?>
</div>
