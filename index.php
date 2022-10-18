<?php
	$bookingId = 12345;
	$apiKeyId = 'abc';
	$apiKeySecret = 'TEST123secret456';
	$variant = 'compact'; // possible other values: 'vertical' and 'horizontal'

	$timestamp = time();
	$auth = hash_hmac('sha256', $apiKeyId . $variant . $bookingId . $timestamp, $apiKeySecret);

	$isTest = true;
?><!doctype html>
<html>
	<head>
		<title>Widget test</title>
	</head>
	<body>
		<div class="adventure-waivers-widget"
			data-api-key="<?php echo htmlspecialchars($apiKeyId); ?>"
			data-auth="<?php echo htmlspecialchars($auth); ?>"
			data-booking="<?php echo htmlspecialchars($bookingId); ?>"
			data-time="<?php echo htmlspecialchars($timestamp); ?>"
			data-variant="<?php echo htmlspecialchars($variant); ?>"
			<?php if ($isTest) { echo 'data-test="1"'; } ?>
		></div>
		<script src="https://waivers.adventures.tech/widgets/embed"></script>
	</body>
</html>
