<?php include '../db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Policy Display</title>
    <style>
        body {
            font-family: Arial;
            background: #f5f7fb;
            padding: 20px;
        }

        h2 {
            text-align: center;
        }

        table {
            border-collapse: collapse;
            width: 80%;
            margin: auto;
            background: white;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
        }

        th {
            background: #4f46e5;
            color: white;
        }

        a {
            text-decoration: none;
            padding: 5px 8px;
            border-radius: 5px;
            color: black;
            font-size: 12px;
        }

        .delete {
            background: red;
        }

        .edit {
            background: green;
        }

        .top-link {
            display: block;
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>

<body>

<h2>Insurance Policies</h2>

<table>
<tr>
    <th>Policy</th>
    <th>Customer</th>
    <th>Provider</th>
    <th>Type</th>
    <th>Amount</th>
    <th>Actions</th>
</tr>

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

<td>
<a class='delete' href='../php/policy_delete.php?id={$row['policy_number']}'>Delete</a>
<a class='edit' href='../php/policy_edit.php?id={$row['policy_number']}'>Edit</a>
</td>

</tr>";
}
?>

</table>

<a class="top-link" href="../policy.html"><b><h3>⬅ Back to Policy Form</h3></b></a>
<a class="top-link" href="../home.php"><b><h3>⬅ Back to Home</h3></b></a>

</body>
</html>