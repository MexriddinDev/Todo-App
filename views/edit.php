<?php
 require 'views/components/header.php';
?>
<div class="edit-container">
    <h2 class="edit-header">Edit Task</h2>
    <form method="POST" action="/todos/<?= $todos['id'] ?>/update">
        <input hidden="" type="text" name="_method" value="PUT" id="">
        <div class="form-group">
            <label for="taskName" class="form-label">Task Name</label>
            <input type="text" id="taskName" class="form-control" placeholder="Enter task name" name="title" value="<?= $todos['title'];?>">
        </div>
        <div class="form-group">
            <label for="taskStatus" class="form-label">Status</label>
            <select id="taskStatus" name="status" class="form-select">
                <option value="Pending"<?= $todos['status']=='pending'? 'selected' : '' ?>>Pending</option>
                <option value="Pending"<?= $todos['status']=='in_progress' ? 'selected' : '' ?>>In Progress</option>
                <option value="Completed"<?= $todos['status']=='completed' ? 'selected' : '' ?>>Completed</option>
            </select>
        </div>
        <div class="form-group">
            <label for="taskDueDate" class="form-label">Due Date</label>
            <input type="datetime-local" id="taskDueDate" class="form-control" name="due_date" value="<?= $todos['due_date'] ?>">
        </div>
        <div class="btn-actions">
            <button type="submit" class="btn btn-primary">Save Changes</button>
            <a href="index.html" class="btn btn-secondary">Back to Todo list</a>
        </div>
    </form>
</div>
<div style="position: fixed; width: 100%; bottom: 0; ">
    <?php
    require 'views/components/footer.php';
    ?>
</div>

