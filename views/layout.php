<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-50">
<head>
	<title><?= $this->e( $title ) ?></title>
	<link href="/assets/styles.css" rel="stylesheet">
	<script src="/assets/script.js"></script>
	<script src="https://cdn.tailwindcss.com"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body class="h-full">
<div id="page-content">
	<?= $this->section( 'content' ) ?>
</div>
</body>
</html>
