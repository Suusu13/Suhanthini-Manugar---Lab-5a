<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q1</title>
</head>
<body>
    <?php
        $name = "Suhanthini D/O Manugar";
        $matric = "CI230031";
        $course = "Degree in Multimedia";
        $yearOfstudy = "3 1/2 Years";
        $address = "No 14, Jalan Hamzah Alang 23, Taman Indah, Kapar";
    ?>
    <table border="1" cellpadding="10">
        <tr>
            <th>Field</th>
            <th>Details</th>
        </tr>
        <tr>
            <td>Name</td>
            <td><?php echo $name; 
			?></td>
        </tr>
        <tr>
            <td>Matric Number</td>
            <td><?php echo $matric; ?></td>
        </tr>
        <tr>
            <td>Course</td>
            <td><?php echo $course; ?></td>
        </tr>
        <tr>
            <td>Year of Study</td>
            <td><?php echo $yearOfstudy; ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo $address; ?></td>
        </tr>
    </table>
</body>
</html>
