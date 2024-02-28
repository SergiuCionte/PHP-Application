
<!DOCTYPE html>
<html>
    <head>
        <title>Exercitiul 6.b</title>
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
				
				
				<th>MIN(CANTITATE)</th>
				<th>AVG(CANTITATE)</th>
				<th>MAX(CANTITATE)</th>
			</tr>
				
			
			<tbody>
				<?php
					$query="SELECT MIN(CANTITATE),AVG(CANTITATE),MAX(CANTITATE)
FROM Livrari
WHERE IDC='C1'
GROUP BY um
";
					$data=mysqli_query($con,$query);
					$result=mysqli_num_rows($data);

					if($result){
					while ($row=mysqli_fetch_array($data)) {
						// code...
						
							?>

								<tr>
						
									<td><?php echo $row['MIN(CANTITATE)']; ?></td>
									<td><?php echo $row['AVG(CANTITATE)']; ?></td>
									<td><?php echo $row['MAX(CANTITATE)']; ?></td>


									
									



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