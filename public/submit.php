<?php
require_once '../config/database.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];

    $name = trim($_POST['name'] ?? '');
    if ($name === '') {
        $errors[] = 'Name is required';
    } elseif (strlen($name) < 3) {
        $errors[] = 'Name must be at least 3 characters long';
    } elseif (!preg_match('/^[a-zA-Z\s]+$/', $name)) {
        $errors[] = 'Enter a valid name';
    } else {
        echo htmlspecialchars($name) . '<br>';
    }

    $email = trim($_POST['email'] ?? '');
    if ($email === '') {
        $errors[] = 'Email is required';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Invalid email format';
    } else {
        echo htmlspecialchars($email) . '<br>';
    }

    $phone = trim($_POST['phone'] ?? '');
    if ($phone === '') {
        $errors[] = 'Phone number is required';
    } elseif (!preg_match('/^[+0-9\s()-]{7,20}$/', $phone)) {
        $errors[] = 'Invalid phone number format';
    } else {
        echo htmlspecialchars($phone) . '<br>';
    }

    $service = trim($_POST['service'] ?? '');

    $allowed_services = ['web_design', 'seo', 'digital_marketing', 'branding'];
    if ($service === '') {
        $errors[] = 'Choose a service';
    } elseif (!in_array($service, $allowed_services, true)) {
        $errors[] = 'Invalid service selected';
    } else {

        echo htmlspecialchars($service) . '<br>';
    }

    $budget = trim($_POST['budget'] ?? '');
    if ($budget === '') {
        $errors[] = 'Budget is required';
    } elseif (!is_numeric($budget) || (float) $budget <= 0) {
        $errors[] = 'Budget must be a positive number';
    } else {
        echo htmlspecialchars($budget) . '<br>';
    }

    $message = trim($_POST['message'] ?? '');
    if ($message === '') {
        $errors[] = 'Message is required';
    } else {
        echo htmlspecialchars($message) . '<br>';
    }



    if(!empty($errors)) {
        foreach ($errors as $error) {
            echo $error . '<br>';
        }

    }else{
        $sql = "INSERT INTO leads (name, email, phone, service, budget, message)
        VALUES (:name, :email, :phone, :service, :budget, :message)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':name' => $name,
            ':email' => $email,
            ':phone' => $phone,
            ':service' => $service,
            ':budget' => (float) $budget,
            ':message' => $message
        ]);
        echo "Lead submitted successfully!";
    }
}
else {
    echo 'Invalid request method. Please submit the form using POST.';
}