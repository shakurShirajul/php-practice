<?php require 'partials/head.php' ?>
<?php require 'partials/nav.php' ?>
<?php require 'partials/banner.php' ?>
<main class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <form method="post">
        <label for="body">Note Description</label>
        <div>
            <textarea name='body' class="border-2 rounded-xl">Create</textarea>
        </div>
        <p>
            <button type="submit" class="p-2 border rounded uppercase ">Create</button>
        </p>
    </form>
</main>
<?php require 'partials/footer.php' ?>