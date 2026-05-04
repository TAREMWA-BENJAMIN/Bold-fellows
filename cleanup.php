<?php

$dir = __DIR__ . '/resources/views/';
$files = glob($dir . '*.blade.php');

$trainingBlockRegex = '/\s*<li><a[^>]*href="training"[^>]*>Training<\/a>\s*<!-- Second Level \/ Start -->\s*<ul>.*?<\/ul>\s*<!-- Second Level \/ End -->\s*<\/li>/is';
$eventsBlockRegex = '/\s*<li><a[^>]*href="events"[^>]*>Events<\/a>\s*<!-- Second Level \/ Start -->\s*<ul>.*?<\/ul>\s*<!-- Second Level \/ End -->\s*<\/li>/is';

$footerTrainingRegex = '/\s*<li><a[^>]*href="training"[^>]*>Training<\/a><\/li>/i';
$footerEventsRegex = '/\s*<li><a[^>]*href="events"[^>]*>Events<\/a><\/li>/i';

$introTrainingRegex = '/\s*<div class="one-fourth">\s*<div class="item-wrapp">\s*<div class="portfolio-item">\s*<a href="training"[^>]*><i class="icon-link"><\/i><\/a>.*?<\/div>\s*<\/div>\s*<\/div>/is';
$introEventsRegex = '/\s*<div class="one-fourth">\s*<div class="item-wrapp">\s*<div class="portfolio-item">\s*<a href="events"[^>]*><i class="icon-link"><\/i><\/a>.*?<\/div>\s*<\/div>\s*<\/div>/is';

$count = 0;
foreach ($files as $file) {
    $content = file_get_contents($file);
    
    // Check if it has the blocks and remove them
    $newContent = preg_replace($trainingBlockRegex, '', $content);
    $newContent = preg_replace($eventsBlockRegex, '', $newContent);
    $newContent = preg_replace($footerTrainingRegex, '', $newContent);
    $newContent = preg_replace($footerEventsRegex, '', $newContent);
    $newContent = preg_replace($introTrainingRegex, '', $newContent);
    $newContent = preg_replace($introEventsRegex, '', $newContent);
    
    if ($newContent !== $content) {
        file_put_contents($file, $newContent);
        echo "Updated: " . basename($file) . "\n";
        $count++;
    }
}

echo "Total files updated: $count\n";

// Also delete the specific files related to training and events
$filesToDelete = [
    'training.blade.php',
    'linux-training.blade.php',
    'ethical-hacking.blade.php',
    'advanced-ethical-hacking.blade.php',
    'anti-money-laundering.blade.php',
    'events.blade.php',
    'upcoming-events.blade.php',
    'past-events.blade.php',
    'past-event.blade.php',
    'sa-event-proceedings.blade.php',
    '3rd-ethiopia-summit-proceedings.blade.php',
    '5th-ethiopia-summit-proceedings.blade.php',
    '6th-Ethiopia-Banking-ICT-Summit.blade.php',
    '6th-east-africa-banking.blade.php'
];

foreach ($filesToDelete as $fileToDelete) {
    $path = $dir . $fileToDelete;
    if (file_exists($path)) {
        unlink($path);
        echo "Deleted: $fileToDelete\n";
    }
}

echo "Cleanup complete.\n";
