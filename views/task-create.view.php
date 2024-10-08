<?php require('partials/head.php') ?>
<?php require('partials/nav.php') ?>  
<?php require('partials/banner.php') ?> 

<!-- Main content -->
<main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100">
      <form action="" method="POST" class="m-6">
         <textarea name="description" placeholder="create a tasks here"></textarea>

         <div>
            <button type="submit" class="mt-6">Submit</button>
         </div>
      </form>
</main>

<?php require('partials/nav-profile.php') ?>
<?php require('partials/footer.php') ?>
