<?php
// Create a minimal valid 1x1 JPEG
$jpeg = base64_decode('/9j/4AAQSkZJRgABAQEASABIAAD/2wBDAAgGBgcGBQgHBwcJCQgKDBQNDAsLDBkSEw8UHRofHh0aHBwgJC4nICIsIxwcKDcpLDAxNDQ0Hyc5PTgyPC4zNDL/wAARCAABAAEDASIAAhEBAxEB/8QAFAABAAAAAAAAAAAAAAAAAAAACf/EABQQAQAAAAAAAAAAAAAAAAAAAAD/xAAUAQEAAAAAAAAAAAAAAAAAAAAA/8QAFBEBAAAAAAAAAAAAAAAAAAAAAP/aAAwDAQACEQMRAD8AJQAB/9k=');
$dest = __DIR__ . '/public/uploads/test_real.jpg';
file_put_contents($dest, $jpeg);
echo 'Created: ' . $dest . PHP_EOL;
echo 'Size: ' . filesize($dest) . ' bytes' . PHP_EOL;
