<div class="Example bg-indigo-700 fixed flex inset-0 items-center justify-center">
	<div class="Example__inner max-w-2xl mx-auto text-center py-16 px-4 sm:py-20 sm:px-6 lg:px-8">
		<h2 class="Example__title text-3xl font-extrabold text-white sm:text-4xl">
			<p class="">Tailwind CSS Theme Boilerplate<br> for WordPress</p>
		</h2>
		<p class="mt-4 text-lg leading-6 text-indigo-200">
			This is a just a very minimalistic theme boiler that gets you started with
			<a href="https://tailwindcss.com/" target="_blank" rel="noopener noreferrer">Tailwind CSS v2</a> &
			<a href="https://laravel.com/docs/5.8/mix" target="_blank" rel="noopener noreferrer">Laravel Mix</a> for
			building custom WordPress themes.
		</p>
		<?php get_template_part( 'templates/views/ExampleView', null, [
			'title' => 'Who am I?',
			'text' => 'My name is Phil Kurth and I build themes and plugins for WordPress.<br> You can learn more about me at <a href="https://philkurth.com.au/" target="_blank">philkurth.com.au</a>',
		] ) ?>
		<a href="https://philkurth.com.au/"
		   target="_blank" rel="noopener noreferrer"
		   class="mt-8 w-full inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-indigo-600 bg-white hover:bg-indigo-50 sm:w-auto">
			<!-- HeroIcon: solid-globe -->
			<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" viewBox="0 0 20 20" fill="currentColor">
				<path fill-rule="evenodd"
				      d="M10 18a8 8 0 100-16 8 8 0 000 16zM4.332 8.027a6.012 6.012 0 011.912-2.706C6.512 5.73 6.974 6 7.5 6A1.5 1.5 0 019 7.5V8a2 2 0 004 0 2 2 0 011.523-1.943A5.977 5.977 0 0116 10c0 .34-.028.675-.083 1H15a2 2 0 00-2 2v2.197A5.973 5.973 0 0110 16v-2a2 2 0 00-2-2 2 2 0 01-2-2 2 2 0 00-1.668-1.973z"
				      clip-rule="evenodd"/>
			</svg>
			Visit my website
		</a>
		<a href="https://twitter.com/mishterkurth"
		   target="_blank" rel="noopener noreferrer"
		   class="mt-8 w-full inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-indigo-600 bg-white hover:bg-indigo-50 sm:w-auto">
			<!-- SVG: Twitter bird -->
			<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" viewBox="0 0 24 24" fill="currentColor">
				<path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
			</svg>
			Follow me on Twitter
		</a>
	</div>
</div>