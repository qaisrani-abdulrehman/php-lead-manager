<?php

require_once '../config/database.php';

$sql = "SELECT * FROM leads";

$stmt = $pdo->prepare($sql);
$stmt->execute();

$leads = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Dashboard</title>

    <link rel="stylesheet" href="../assets/style.css">
</head>

<body>

    <h1>Admin Dashboard</h1>

    <p>Manage and track your incoming project leads.</p>

    <div class="table-wrapper">

        <table class="leads-table">

            <thead>
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
            </thead>

            <tbody>

                <?php foreach ($leads as $lead) { ?>

                    <tr>

                        <td>
                            <?php echo htmlspecialchars($lead['id']); ?>
                        </td>

                        <td>
                            <?php echo htmlspecialchars($lead['name']); ?>
                        </td>

                        <td>
                            <?php echo htmlspecialchars($lead['email']); ?>
                        </td>

                        <td>
                            <?php echo htmlspecialchars($lead['phone']); ?>
                        </td>

                        <td>
                            <?php echo htmlspecialchars($lead['service']); ?>
                        </td>

                        <td>
                            <?php echo htmlspecialchars($lead['budget']); ?>
                        </td>

                        <td>
                            <?php echo htmlspecialchars($lead['message']); ?>
                        </td>

                        <td>
                            <span class="status-badge">
                                <?php echo htmlspecialchars($lead['status']); ?>
                            </span>
                        </td>

                        <td>
                            <?php echo htmlspecialchars($lead['created_at']); ?>
                        </td>

                        <td>
                            <a href="edit.php?id=<?php echo urlencode($lead['id']); ?>">
                                Edit
                            </a>
                        </td>

                    </tr>

                <?php } ?>

            </tbody>

        </table>

    </div>

</body>
</html>