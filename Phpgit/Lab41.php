<?php

$filename = "file.txt";

// Check if the file exists
if (!file_exists($filename)) {
    echo "File '$filename' does not exist.";
    exit();
}

// Check if the file is readable
if (!is_readable($filename)) {
    echo "File '$filename' is not readable.";
    exit();
}

// Check if the file is writable
if (!is_writable($filename)) {
    echo "File '$filename' is not writable.";
    exit();
}

// Attempt to open the file
$fileHandle = fopen($filename, 'r');

// Check if the file handle is valid
if (!$fileHandle) {
    echo "Failed to open file '$filename'.";
    exit();
}

// Read file contents
$fileContents = fread($fileHandle, filesize($filename));

// Check if read operation was successful
if ($fileContents === false) {
    echo "Failed to read file contents from '$filename'.";
    fclose($fileHandle); // Close the file handle
    exit();
}

// Output file contents
echo "File contents:\n$fileContents";

// Close the file handle
fclose($fileHandle);
?>
