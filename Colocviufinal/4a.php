
<!DOCTYPE html>
<html>
    <head>
        <title>Exercitiul 4.a</title>
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
				
				<th>NUMEF</th>
				<th>NUMEP</th>
				<th>NUMEC</th>
				<th>ORAS</th>
			</tr>
				
			
			<tbody>
				<?php
					$query="SELECT Furnizori.NUMEF,Proiecte.NUMEP,Componente.NUMEC,Furnizori.ORAS FROM Livrari JOIN Furnizori  ON(Livrari.IDF=Furnizori.IDF) JOIN Proiecte  ON (Proiecte.IDP=Livrari.IDP) JOIN Componente  ON (Componente.IDC=Livrari.IDC)WHERE Componente.ORAS=Furnizori.ORAS AND Furnizori.ORAS=Proiecte.ORAS";
					$data=mysqli_query($con,$query);
					$result=mysqli_num_rows($data);

					if($result){
					while ($row=mysqli_fetch_array($data)) {
						// code...
						
							?>

								<tr>
									
									<td><?php echo $row['NUMEF']; ?></td>
									<td><?php echo $row['NUMEP']; ?></td>
									<td><?php echo $row['NUMEC']; ?></td>
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