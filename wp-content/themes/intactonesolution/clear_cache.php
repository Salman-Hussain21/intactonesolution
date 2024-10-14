<?php
// Define the path to store the timestamp of the last cache clear.
$timestamp_file = __DIR__ . '/last_cache_clear.txt';

// Check if the file exists. If it doesn't, create it and set the initial time.
if (!file_exists($timestamp_file)) {
    file_put_contents($timestamp_file, time());
}

// Get the last cache clear timestamp.
$last_clear = file_get_contents($timestamp_file);

// Calculate if 10 minutes (600 seconds) have passed since the last clear.
if (time() - $last_clear > 5) {
    // Clear the cache (this depends on how your caching works, adjust accordingly).
    // For example, if you're using WP Super Cache:
    if (function_exists('wp_cache_clear_cache')) {
        wp_cache_clear_cache();
    }

    // Update the timestamp.
    file_put_contents($timestamp_file, time());
}


?>
