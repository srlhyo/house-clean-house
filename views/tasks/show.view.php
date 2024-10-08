<?php require('views/partials/head.php') ?>
<?php require('views/partials/nav.php') ?>  
<?php require('views/partials/banner.php') ?> 

<!-- Main content -->
<main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <p><?= htmlspecialchars($task['description']) ?></p>
    </div>
</main>

<?php require('views/partials/nav-profile.php') ?>
<?php require('views/partials/footer.php') ?>               
