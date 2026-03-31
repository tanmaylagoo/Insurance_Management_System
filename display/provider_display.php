<?php include '../db.php'; ?>

<table border="1">
<?php
$r=pg_query($conn,"SELECT * FROM Insurance_Provider");

while($row=pg_fetch_assoc($r)){
echo "<tr>
<td>{$row['provider_id']}</td>
<td>{$row['contact_email']}</td>
<td>{$row['settlement_ratio']}</td>
<td><a href='../php/provider_delete.php?id={$row['provider_id']}'>Delete</a></td>
</tr>";
}
?>
</table>