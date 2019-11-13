<?php
$data = isset( $data ) ? $data : new stdClass();
$class = isset( $data->class ) ? $data->class : '';
$id = isset( $data->id ) ? $data->id : '';
$title = isset( $data->title ) ? $data->title : "";
$text = isset( $data->text ) ? $data->text : "";
?>
<div class="ExampleView <?= $class ?>" id="<?= $id ?>">

	<?php if ( $title ): ?>
        <h2><?= $title ?></h2>
	<?php endif; ?>

	<?php if ( $text ): ?>
        <p><?= $text ?></p>
	<?php endif; ?>

</div>