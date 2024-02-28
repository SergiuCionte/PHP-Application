

<!DOCTYPE html>
<html>
    <head>
        <title>Exercitiul 4.b</title>
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
				<th>IDP</th>
				
				<th>CANTITATE</th>
				<th>um</th>
			</tr>
				
			
			<tbody>
				<?php
					$query="SELECT l1.IDC,l1.IDP,l2.IDP,l1.CANTITATE,l1.um FROM Livrari l1 JOIN Livrari l2 ON(l1.IDC=l2.IDC) WHERE l1.IDF!=l2.IDF AND l1.CANTITATE=l2.CANTITATE AND l1.um=l2.um  ";
					$data=mysqli_query($con,$query);
					$result=mysqli_num_rows($data);

					if($result){
					while ($row=mysqli_fetch_array($data)) {
						// code...
						
							?>

								<tr>
									
									<td><?php echo $row['IDC']; ?></td>
									<td><?php echo $row['IDP']; ?></td>
									
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