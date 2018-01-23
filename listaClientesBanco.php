	<?php

	$host = "localhost";
	$user = "root";
	$pass = "senha";
	$db = "teste";

	$conn = new mysqli($host, $user, $pass, $db);


	if ($conn->connect_error) {
	    die("Deu ruim: " . $conn->connect_error);
	}


	$sql 	= "SELECT nome, email FROM user";
	$result = $conn->query($sql);

	echo "<table border='1'>
	<tr>
	<th>Nome</th>
	<th>Email</th>
	</tr>";
	if ($result->num_rows > 0) {
	    while($row = $result->fetch_assoc()) {

					echo "<tr>";
					echo "<td>" .$row["nome"]. "</td>";
					echo "<td>" .$row["email"]. "</td>";
					echo "</tr>";



	    }
			echo "</table>";
	}
