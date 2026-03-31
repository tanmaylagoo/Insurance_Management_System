<?php include '../db.php'; ?>

<table border="1">
<tr><th>Policy</th><th>Customer</th><th>Provider</th><th>Type</th><th>Amount</th></tr>

<?php
$q="
SELECT p.Policy_Number,c.Customer_ID,pr.Provider_ID,i.Description,p.Amount_Requested
FROM Insurance_Policy p
JOIN Customer c ON p.Customer_ID=c.Customer_ID
JOIN Insurance_Provider pr ON p.Provider_ID=pr.Provider_ID
JOIN Insurance_Of i ON p.Government_Code=i.Government_Code
";

$r=pg_query($conn,$q);

while($row=pg_fetch_assoc($r)){
echo "<tr>
<td>{$row['policy_number']}</td>
<td>{$row['customer_id']}</td>
<td>{$row['provider_id']}</td>
<td>{$row['description']}</td>
<td>{$row['amount_requested']}</td>
<td><a href='../php/policy_delete.php?id={$row['policy_number']}'>Delete</a></td>
</tr>";
}
?>
</table>