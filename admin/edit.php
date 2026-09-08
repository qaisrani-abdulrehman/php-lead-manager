<?php

require_once '../config/database.php';

$id = $_GET['id'];

$sql = "SELECT * FROM leads WHERE id = :id";

$stmt = $pdo->prepare($sql);

$stmt->execute([
    ':id' => $id
]);

$lead = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<h1>Edit Lead</h1>

<form method="POST">

    <label>Name</label>
    <input type="text" name="name" value="<?php echo htmlspecialchars($lead['name']); ?>">

    <label>Email</label>
    <input type="email" name="email" value="<?php echo htmlspecialchars($lead['email']); ?>">

    <label>Phone</label>
    <input type="text" name="phone" value="<?php echo htmlspecialchars($lead['phone']); ?>">

    <label>Service</label>
    <input type="text" name="service" value="<?php echo htmlspecialchars($lead['service']); ?>">

    <label>Budget</label>
    <input type="number" name="budget" value="<?php echo htmlspecialchars($lead['budget']); ?>">

    <label>Message</label>
    <textarea name="message"><?php echo htmlspecialchars($lead['message']); ?></textarea>

    <label>Status</label>
    <input type="text" name="status" value="<?php echo htmlspecialchars($lead['status']); ?>">

    <button type="submit">Update Lead</button>

</form>