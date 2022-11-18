<?php $this->layout('layout', ['title' => 'Error']); ?>
<div class="flex min-h-full flex-col pt-16 pb-12">
	<main class="mx-auto flex w-full max-w-7xl flex-grow flex-col justify-center px-4 sm:px-6 lg:px-8">
		<div class="flex flex-shrink-0 justify-center">
			<a href="/" class="inline-flex">
				<span class="sr-only">Auvoriaprime</span>
				<img class="mx-auto h-16 w-auto" src="https://auvoriaprime.com/app/uploads/2020/01/AP-Logo_Horizontal-Black-with-padding.png" alt="Auvoriaprime Logo">
			</a>
		</div>
		<div class="py-16">
			<div class="text-center">
				<h1 class="mt-2 text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl"><?= $error ?></h1>
				<p class="mt-2 text-base text-gray-500"><?= $error_description ?></p>
			</div>
		</div>
	</main>
</div>
