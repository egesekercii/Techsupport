<?php

require('../Connection/connection.php');

$sql = "SELECT * FROM requests";

$data = $conn->query($sql);

foreach ($data as $rows) {
?>
<tr>
	<td><?php echo $rows['user_name']?></td>
	<td><?php echo $rows['user_location']?></td>
	<td><?php echo $rows['yazici']?></td>
	<td><?php echo $rows['sistem']?></td>
	<td><?php echo $rows['monitor']?></td>
	<td><?php echo $rows['kartus']?></td>
	<td><?php echo $rows['diger']?></td>
	<td><a href="delData.php?id=<?php echo $rows['ID']; ?>">Sil</a></td>
</tr>
<?php
}
?>

