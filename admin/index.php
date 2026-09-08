<?php

require_once '../config/database.php';

$sql = "SELECT * FROM leads";

$stmt = $pdo->prepare($sql);

$stmt->execute();

$leads = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<link rel="stylesheet" href="../assets/style.css">

<div class="admin-header">
    <h1>Admin Dashboard</h1>
    <p>Manage and track your incoming project leads.</p>
</div>

<div class="table-wrapper">

<table class="leads-table">

    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Service</th>
        <th>Budget</th>
        <th>Message</th>
        <th>Status</th>
        <th>Created At</th>
        <th>Actions</th>
    </tr>

    <?php foreach ($leads as $lead) { ?>

        <tr>
            <td><?php echo $lead['id']; ?></td>
            <td><?php echo $lead['name']; ?></td>
            <td><?php echo $lead['email']; ?></td>
            <td><?php echo $lead['phone']; ?></td>
            <td><?php echo $lead['service']; ?></td>
            <td><?php echo $lead['budget']; ?></td>
            <td><?php echo $lead['message']; ?></td>
            <td>
    <span class="status-badge">
        <?php echo htmlspecialchars($lead['status']); ?>
    </span>
</td>
            <td><?php echo $lead['created_at']; ?></td>
            <td>
    <a href="edit.php?id=<?php echo $lead['id']; ?>">Edit</a>
</td>
        </tr>

    <?php } ?>

</table>
</div>