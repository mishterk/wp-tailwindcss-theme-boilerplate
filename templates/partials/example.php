<div class="Example bg-blue-100 fixed flex inset-0 items-center justify-center">
    <div class="Example__inner bg-white max-w-2xl p-12 rounded-lg shadow-lg text-center">

        <h1 class="Example__title">WP Tailwind CSS Theme Boilerplate</h1>

        <p class="text-gray-700">This is a just a very minimalistic theme boiler that gets you started with
            <a href="https://tailwindcss.com/" target="_blank" rel="noopener noreferrer">Tailwind CSS</a> &
            <a href="https://laravel.com/docs/5.8/mix" target="_blank" rel="noopener noreferrer">Laravel Mix</a> for
            building custom WordPress themes.</p>

		<?php
		// You may use 'views' to render your UI components. Views are designed for use anywhere as they, ideally, have
		// no context-specific functionality – the simply render data handed to them as follows:
		\WpTailwindCssThemeBoilerplate\View::render( 'ExampleView', [
			'title' => 'Who am I?',
			'text' => 'My name is Phil Kurth and I build themes and plugins for WordPress. You can learn more about me at <a href="https://philkurth.com.au/" target="_blank">philkurth.com.au</a>',
		] ); ?>

    </div>
</div>