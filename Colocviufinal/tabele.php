<!DOCTYPE html>
<html>
    <head>
        <title>Exercitiul 3.a</title>
                <style>
table {
    text-align:center;

}
th {
    background-color: #66ff99;
    color: black;
    border: 3px;
}
td{
    border: solid 1px;
    border-color: black;
    width: 500px;
}

body {
    background-image:url("/Colocviufinal/galaxy.jpg") ;
}
div {
   
    padding: 0px;
   color: #66ff99;
   
    text-align: center;
}

</style>   
    </head>
<body>
    <div> 

<?php include "Connection.php"; ?>

<h2>Componente</h2>
		<table border="1px" cellpadding="10px" cellspacing="0">
			
			<tr>
				<th>IDC</th>
				<th>NUMEC</th>
				<th>CULOARE</th>
				<th>MASA</th>
				<th>ORAS</th>
			</tr>
				
			
			<tbody>
				<?php
					$query="SELECT * FROM componente";
					$data=mysqli_query($con,$query);
					$result=mysqli_num_rows($data);

					if($result){
					while ($row=mysqli_fetch_array($data)) {
						// code...
						
							?>

								<tr>
									<td><?php echo $row['IDC']; ?></td>
									<td><?php echo $row['NUMEC']; ?></td>
									<td><?php echo $row['CULOARE']; ?></td>
									<td><?php echo $row['MASA']; ?></td>
									<td><?php echo $row['ORAS']; ?></td>



								</tr>





							<?php

						}
					}


				?>



			</tbody>



		</table>
<h2>Furnizori</h2>

		<table border="1px" cellpadding="10px" cellspacing="0">
			
			<tr>
				<th>IDF</th>
				<th>NUMEF</th>
				<th>STARE</th>
				<th>ORAS</th>
			</tr>
				
			
			<tbody>
				<?php
					$query="SELECT * FROM furnizori";
					$data=mysqli_query($con,$query);
					$result=mysqli_num_rows($data);

					if($result){
					while ($row=mysqli_fetch_array($data)) {
						// code...
						
							?>

								<tr>
									<td><?php echo $row['IDF']; ?></td>
									<td><?php echo $row['NUMEF']; ?></td>
									<td><?php echo $row['STARE']; ?></td>
									<td><?php echo $row['ORAS']; ?></td>



								</tr>





							<?php

						}
					}


				?>



			</tbody>



		</table>
		<h2>Proiecte</h2>

		<table border="1px" cellpadding="10px" cellspacing="0">
			
			<tr>
				<th>IDP</th>
				<th>NUMEP</th>
				<th>ORAS</th>
			</tr>
				
			
			<tbody>
				<?php
					$query="SELECT * FROM proiecte";
					$data=mysqli_query($con,$query);
					$result=mysqli_num_rows($data);

					if($result){
					while ($row=mysqli_fetch_array($data)) {
						// code...
						
							?>

								<tr>
									<td><?php echo $row['IDP']; ?></td>
									<td><?php echo $row['NUMEP']; ?></td>
									<td><?php echo $row['ORAS']; ?></td>



								</tr>





							<?php

						}
					}


				?>



			</tbody>



		</table>
<h2>Livrari</h2>

		<table border="1px" cellpadding="10px" cellspacing="0">
			
			<tr>
				<th>IDF</th>
				<th>IDP</th>
				<th>IDC</th>
				<th>CANTITATE</th>
				<th>um</th>
			</tr>
				
			
			<tbody>
				<?php
					$query1="SELECT * FROM livrari";
					$data1=mysqli_query($con,$query1);
					$result=mysqli_num_rows($data1);

					if($result){
					while ($row=mysqli_fetch_array($data1)) {
						// code...
						
							?>

								<tr>
									<td><?php echo $row['IDF']; ?></td>
									<td><?php echo $row['IDP']; ?></td>
									<td><?php echo $row['IDC']; ?></td>
									<td><?php echo $row['CANTITATE']; ?></td>
									<td><?php echo $row['um']; ?></td>



								</tr>





							<?php

						}
					}


				?>



			</tbody>



		</table>


				   </div>
</body>
</html>
