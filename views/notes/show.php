<?php
require base_path("views/partials/head.php");
require base_path("views/partials/nav.php");
require base_path("views/partials/banner.php");
?>

<main>
  <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <p class="mb-6">
      <a href="/notes" class="text-blue-500 hover:underline">Go back</a>
    </p>
    <p><?= htmlspecialchars($note['body']) ?></p>
    <form class="mt-6" method="post">
      <input type="hidden" name="id" value="<?= $note['id'] ?>">
      <button class="text-sm text-red-500">Delete</button>
    </form>
  </div>
</main>

<?php require base_path("views/partials/footer.php"); ?>