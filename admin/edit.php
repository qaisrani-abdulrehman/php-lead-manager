<?php

require_once '../config/database.php';

$id = $_GET['id'] ?? null;

if (!$id) {
    die("Lead ID is missing.");
}


/* =========================================================
   UPDATE LEAD
========================================================= */

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $service = $_POST['service'];
    $budget = $_POST['budget'];
    $message = $_POST['message'];
    $status = $_POST['status'];

    $sql = "UPDATE leads SET
        name = :name,
        email = :email,
        phone = :phone,
        service = :service,
        budget = :budget,
        message = :message,
        status = :status
        WHERE id = :id";

    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        ':name' => $name,
        ':email' => $email,
        ':phone' => $phone,
        ':service' => $service,
        ':budget' => $budget,
        ':message' => $message,
        ':status' => $status,
        ':id' => $id
    ]);

    header("Location: index.php");
    exit;
}


/* =========================================================
   GET LEAD
========================================================= */

$sql = "SELECT * FROM leads WHERE id = :id";

$stmt = $pdo->prepare($sql);

$stmt->execute([
    ':id' => $id
]);

$lead = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$lead) {
    die("Lead not found.");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Lead</title>

    <link rel="stylesheet" href="../assets/style.css">

</head>

<body>

    <h1>Edit Lead</h1>

    <form method="POST" class="quote-form">

        <label for="name">Name</label>

        <input
            type="text"
            id="name"
            name="name"
            value="<?php echo htmlspecialchars($lead['name']); ?>"
            required
        >


        <label for="email">Email</label>

        <input
            type="email"
            id="email"
            name="email"
            value="<?php echo htmlspecialchars($lead['email']); ?>"
            required
        >


        <label for="phone">Phone</label>

        <input
            type="text"
            id="phone"
            name="phone"
            value="<?php echo htmlspecialchars($lead['phone']); ?>"
        >


        <label for="service">Service</label>

        <select name="service" id="service">

            <option
                value="web_design"
                <?php if ($lead['service'] === 'web_design') echo 'selected'; ?>
            >
                Web Design
            </option>

            <option
                value="seo"
                <?php if ($lead['service'] === 'seo') echo 'selected'; ?>
            >
                SEO
            </option>

            <option
                value="digital_marketing"
                <?php if ($lead['service'] === 'digital_marketing') echo 'selected'; ?>
            >
                Digital Marketing
            </option>

            <option
                value="branding"
                <?php if ($lead['service'] === 'branding') echo 'selected'; ?>
            >
                Branding
            </option>

        </select>


        <label for="budget">Budget</label>

        <input
            type="number"
            id="budget"
            name="budget"
            value="<?php echo htmlspecialchars($lead['budget']); ?>"
        >


        <label for="message">Message</label>

        <textarea
            id="message"
            name="message"
        ><?php echo htmlspecialchars($lead['message']); ?></textarea>


        <label for="status">Status</label>

        <input
            type="text"
            id="status"
            name="status"
            value="<?php echo htmlspecialchars($lead['status']); ?>"
        >


        <button type="submit">
            Update Lead
        </button>

    </form>

</body>

</html>