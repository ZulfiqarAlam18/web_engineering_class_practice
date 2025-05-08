<?php
header('Content-Type: application/json');

// In a real application, you would save to database here
// For demonstration, we'll just simulate the save operation

// Get form data
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$phone = $_POST['phone'] ?? '';

// Validate input
if (empty($name) || empty($email)) {
    echo json_encode([
        'success' => false,
        'message' => 'Name and email are required fields.'
    ]);
    exit;
}

// Simulate successful save
$success = true; // In real app, this would be based on actual save operation

if ($success) {
    echo json_encode([
        'success' => true,
        'message' => 'Record saved successfully!'
    ]);
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Failed to save record. Please try again.'
    ]);
}