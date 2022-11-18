<?php $this->layout('layout', ['title' => 'Enter Device Code']); ?>


<div class="flex min-h-full flex-col justify-center py-12 sm:px-6 lg:px-8">
	<div class="sm:mx-auto sm:w-full sm:max-w-md">
		<img class="mx-auto h-18 w-auto" src="https://auvoriaprime.com/app/uploads/2020/01/AP-Logo_Horizontal-Black-with-padding.png" alt="Auvoriaprime Logo">
		<div class="rounded-md bg-blue-50 p-4 mt-10">
			<div class="flex">
				<div class="flex-shrink-0">
					<svg class="h-5 w-5 text-blue-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
						<path fill-rule="evenodd" d="M19 10.5a8.5 8.5 0 11-17 0 8.5 8.5 0 0117 0zM8.25 9.75A.75.75 0 019 9h.253a1.75 1.75 0 011.709 2.13l-.46 2.066a.25.25 0 00.245.304H11a.75.75 0 010 1.5h-.253a1.75 1.75 0 01-1.709-2.13l.46-2.066a.25.25 0 00-.245-.304H9a.75.75 0 01-.75-.75zM10 7a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
					</svg>
				</div>
				<div class="ml-3 flex-1 md:flex md:justify-between">
					<p class="text-sm text-blue-700">
						<?php if($code): ?>
							Confirm the code below matches the code shown on the device.
						<?php else: ?>
							Enter the code shown on your device to continue.
					<?php endif ?>
					</p>
				</div>
			</div>
		</div>
	</div>

	<div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
		<div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
			<form class="space-y-6" action="/auth/verify_code" method="GET">
				<div>
					<label for="user_code" class="block text-sm font-medium text-gray-700">Code</label>
					<div class="mt-1">
						<input id="user_code" name="code" type="text"  maxlength="9" value="<?= $code ?>" autocomplete="off" placeholder="XXXX-XXXX" required class="block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
					</div>
				</div>
				<div>
					<button type="submit" class="flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Submit</button>
				</div>
			</form>
		</div>
	</div>
</div>

<script>
document.getElementById("user_code").focus();
</script>