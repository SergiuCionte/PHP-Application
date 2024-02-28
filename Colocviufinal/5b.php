

<!DOCTYPE html>
<html>
    <head>
        <title>Exercitiul 5.b</title>
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
				
				<th>NUMEP</th>
				
			</tr>
				
			
			<tbody>
				<?php
					$query="SELECT Proiecte.NUMEP
FROM Livrari JOIN Componente ON(Livrari.IDC=Componente.IDC) JOIN Proiecte ON (Proiecte.IDP=Livrari.IDP)
WHERE Componente.CULOARE=ANY(SELECT Componente.CULOARE FROM Componente WHERE Componente.CULOARE IN ('rosu') );
";
					$data=mysqli_query($con,$query);
					$result=mysqli_num_rows($data);

					if($result){
					while ($row=mysqli_fetch_array($data)) {
						// code...
						
							?>

								<tr>
							
									<td><?php echo $row['NUMEP']; ?></td>
									



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