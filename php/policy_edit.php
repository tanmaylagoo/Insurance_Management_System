<?php
include '../db.php';

$id = $_GET['id'];

$query = "SELECT * FROM Insurance_Policy WHERE Policy_Number = $id";
$result = pg_query($conn, $query);
$row = pg_fetch_assoc($result);
?>

<h2>Edit Policy</h2>

<form action="policy_update.php" method="POST">

<input type="hidden" name="pno" value="<?php echo $row['policy_number']; ?>">

Customer ID:
<input name="cid" value="<?php echo $row['customer_id']; ?>"><br><br>

Provider ID:
<input name="pid" value="<?php echo $row['provider_id']; ?>"><br><br>

Gov Code:
<input name="gcode" value="<?php echo $row['government_code']; ?>"><br><br>

Amount:
<input name="amount" value="<?php echo $row['amount_requested']; ?>"><br><br>

<button type="submit">Update</button>

</form>