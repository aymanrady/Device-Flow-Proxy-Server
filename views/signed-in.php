<?php $this->layout('layout', ['title' => $title]); ?>

<main class="min-h-full bg-cover bg-top sm:bg-top" style="background-image: url('https://images.unsplash.com/photo-1545972154-9bb223aac798?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=3050&q=80&exp=8&con=-15&sat=-75')">
	<div class="mx-auto max-w-7xl px-4 py-16 text-center sm:px-6 sm:py-24 lg:px-8 lg:py-48">
		<h1 class="mt-2 text-4xl font-bold tracking-tight text-white sm:text-5xl">You successfully signed in! Now return to your device to finish</h1>
		<div class="mt-6">
			<a href="/device" class="inline-flex items-center rounded-md border border-transparent bg-white bg-opacity-75 px-4 py-2 text-sm font-medium text-black text-opacity-75 sm:bg-opacity-25 sm:hover:bg-opacity-50">Go back home</a>
		</div>
	</div>
</main>

<script>
window.history.replaceState({}, false, '/auth/redirect');
</script>
