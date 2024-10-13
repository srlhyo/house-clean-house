<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>  
<?php require base_path('views/partials/banner.php') ?> 

<!-- Main content -->
<main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <a href="/tasks" class="underline text-blue-500">Go back...</a>
        <p class="pt-6"><?= htmlspecialchars($task['description']) ?></p>
    </div>
</main>

<?php require base_path('views/partials/nav-profile.php') ?>
<?php require base_path('views/partials/footer.php') ?>               
