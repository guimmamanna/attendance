<html>
<head>
<title>Display records</title>
</head>
 
<body>
<table width="600" border="1" cellspacing="5" cellpadding="5">
  <tr style="background:#CCC">
    <th>Sr No</th>
    <th>student_id</th>
    <th>First_name</th>
    <th>Last_name</th>
    <th>Email Id</th>
  </tr>
  <?php
  $i=1;
  foreach($data as $row)
  {
  echo "<tr>";
  echo "<td>".$i."</td>";
  echo "<td>".$row->Student_Id."</td>";
  echo "<td>".$row->FirstName."</td>";
  echo "<td>".$row->LastName."</td>";
  echo "<td>".$row->Email."</td>";
  echo "</tr>";
  $i++;
  }
   ?>
</table>