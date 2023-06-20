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
  </div>
</main>

<?php require base_path("views/partials/footer.php"); ?>