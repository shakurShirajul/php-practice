<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>
<main class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <form method="POST">
        <div class="space-y-12">
            <div class="border-b border-gray-900/10">
                <div class="mt-5 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="col-span-full">
                        <label for="about" class="block text-sm/6 font-medium text-gray-900">Note Descritption</label>
                        <div class="mt-2">
                            <textarea id="about" name="body" rows="3" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                <?= isset($_POST['body']) ?? '' ?>
                            </textarea>
                            <?php if (isset($errors['body'])): ?>
                                <p class="text-red-500 text-xs"><?= $errors['body'] ?></p>
                            <?php endif; ?>
                        </div>
                        <p class="mt-3 text-sm/6 text-gray-600">Write a few sentences about yourself.</p>
                    </div>

                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
        </div>
    </form>

</main>
<?php require base_path('views/partials/footer.php') ?>