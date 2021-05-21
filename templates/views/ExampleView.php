<?php
$class = $args['class'] ?? '';
$id = $args['id'] ?? '';
$title = $args['title'] ?? '';
$text = $args['text'] ?? '';
?>
<div class="ExampleView border-t border-gray-200 <?= $class ?>" id="<?= $id ?>">

	<?php if ( $title ): ?>
		<h2 class="pt-8 text-2xl"><?= $title ?></h2>
	<?php endif; ?>

	<?php if ( $text ): ?>
		<p class="text-gray-700"><?= $text ?></p>
	<?php endif; ?>

</div>