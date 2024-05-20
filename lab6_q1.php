<!DOCTYPE html>
<html lang="en">
<head>
  <title>Lab 6 Q1</title>
</head>
<body>
  <?php
    $name = "Muhammad Haziq Aiman bin Mohd Zamzuri";
    $matric_number = "AI220252";
    $course = "Information Technology";
    $year_of_study = "2024";
    $address = "NO 29, Jalan S/S 13, Taman Industri Sri Sulong,83500,Parit Sulong JOhor";
  ?>
  <table border="2">
    <tr>
      <td>Name</td>
      <td><?php echo "$name"; ?></td>
    </tr>
    <tr>
      <td>Matric Number</td>
      <td><?php echo "$matric_number"; ?></td>
    </tr>
    <tr>
      <td>Course</td>
      <td><?php echo "$course"; ?></td>
    </tr>
    <tr>
      <td>Year of Study</td>
      <td><?php echo "$year_of_study"; ?></td>
    </tr>
    <tr>
      <td>Address</td>
      <td><?php echo "$address"; ?></td>
    </tr>
  </table>
</body>
</html>