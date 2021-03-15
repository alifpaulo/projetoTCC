<?php 
$strcon = mysqli_connect('sql10.freesqldatabase.com','sql10398989','IQ8vg1RESx','sql10398989') or die('Erro ao conectar ao banco de dados'); 
$tipo = $_POST['tipo']; 


?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Table V04</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/css/tables/util.css">
	<link rel="stylesheet" type="text/css" href="assets/css/tables/main.css">
	<!--===============================================================================================-->

<style type="text/css">

	*{
     font-family: 'Open Sans', sans-serif!important;
		
	}

</style>

</head>



<body>

	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver1 m-b-110">
					<div class="table100-head">
						<table>
							<thead>
								<tr class="row100 head">
									<th class="cell100 column1">Nome do serviço</th>
									<th class="cell100 column2">Descrição</th>
									<th class="cell100 column3">Tipo</th>
								</tr>
							</thead>
						</table>
					</div>

					<div class="table100-body js-pscroll">
						<table>
							<tbody>

								<?php
								$SQL = "SELECT * from servico where tipo = '$tipo'";
								$query = mysqli_query($strcon, $SQL,) or die("Erro ao tentar exibir");
								while($exibir = mysqli_fetch_array($query)){
						   
							?>
									<tr class="row100 body">
											<td class="cell100 column1"><?php echo $exibir["nome"]; ?></td>
											<td class="cell100 column2"><?php echo $exibir["descr"]; ?></td>
											<td class="cell100 column3"><?php echo $exibir["tipo"]; ?></td>
										</tr>
										<?php
								}
							?>
									


					</div>
				</div>
			</div>
		</div>
	</div>


	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function () {
			var ps = new PerfectScrollbar(this);

			$(window).on('resize', function () {
				ps.update();
			})
		});


	</script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>

</html>