<!DOCTYPE html>
<html>
    <head>
        <title>Exercitiul 3.b</title>
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
					$query="SELECT * FROM Componente WHERE CULOARE IN('alb','negru','galben')ORDER BY MASA DESC";
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


		 </div>
</body>
</html>