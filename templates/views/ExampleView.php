<?php
$class = $args['class'] ?? '';
$id = $args['id'] ?? '';
$title = $args['title'] ?? '';
$text = $args['text'] ?? '';
?>
<div class="ExampleView <?= $class ?>" id="<?= $id ?>">

	<?php if ( $title ): ?>
		<h2 class="pt-8 text-2xl font-extrabold text-white sm:text-3xl"><?= $title ?></h2>
	<?php endif; ?>

	<?php if ( $text ): ?>
		<p class="mt-4 text-lg leading-6 text-indigo-200"><?= $text ?></p>
	<?php endif; ?>

</div>