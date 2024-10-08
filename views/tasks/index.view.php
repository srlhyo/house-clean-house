<?php require('views/partials/head.php') ?>
<?php require('views/partials/nav.php') ?>  
<?php require('views/partials/banner.php'); ?> 

<!-- Main content -->
<main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <ul>
            <?php foreach($tasks as $task) : ?>
                <li>
                    <a href="/task?id=<?= $task['id'] ?>" class="text-blue-500 underline"><?= htmlspecialchars($task['description']) ?></a>
                </li>
            <?php endforeach;?>
        </ul>
        <div class="pt-6">
            <a href="/tasks/create" class="hover:underline hover:text-blue-500">Create Task</a>
        </div>
    </div>
</main>

<?php require('views/partials/nav-profile.php') ?>
<?php require('views/partials/footer.php') ?>
