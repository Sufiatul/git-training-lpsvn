<?php
/**
 * server.php
 *
 * Sets up a simple PHP development server
 */

// Set the document root to the current directory
$docRoot = __DIR__;

// Set the port number to 8000 (or any other available port)
$port = 8000;

// Set the server to run indefinitely
$infinite = true;

// Run the server
$command = "php -S localhost:$port -