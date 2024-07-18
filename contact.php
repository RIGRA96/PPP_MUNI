<?php
include_once('ppp/include/config.php');
if(isset($_POST['submit']))
{
$name=$_POST['fullname'];
$email=$_POST['emailid'];
$mobileno=$_POST['mobileno'];
$dscrption=$_POST['description'];
$query=mysqli_query($con,"insert into tblcontactus(fullname,email,contactno,message) value('$name','$email','$mobileno','$dscrption')");
echo "<script>alert('Su información fue enviada exitosamente');</script>";
echo "<script>window.location.href ='contact.php'</script>";

}


?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>M.P.F | Contacta con nosotros</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<!--start-wrap-->
		
			<!--start-header-->
			<div class="header">
				<div class="wrap">
				<!--start-top-nav-->
				<div class="clear"> </div>
				<!--end-top-nav-->
			</div>
			<!--end-header-->
		</div>

		<div class="clear"> </div>
		
		<div class="wrap">
			<div class="contact">
		   		<div class="section group">							
					<div class="col span_2_of_3">
						<div class="contact-form">
						<h2>Contact Us</h2>
							<form name="contactus" method="post">
								<div>
									<span><label>Nombre</label></span>
									<span><input type="text" name="fullname" required="true" value=""></span>
								</div>
								<div>
									<span><label>Correo electrónico</label></span>
									<span><input type="email" name="emailid" required="ture" value=""></span>
								</div>
								<div>
									<span><label>Número de teléfono</label></span>
									<span><input type="text" name="mobileno" required="true" value=""></span>
								</div>
								<div>
									<span><label>Descripción</label></span>
									<span><textarea name="description" required="true"> </textarea></span>
								</div>
								<div>
									<span><input type="submit" name="submit" value="Enviar"></span>
								</div>
							</form>
						</div>
					</div>
					<div class="col span_1_of_3">
      					<div class="company_address">
							<p>----------------------------------------------------------------</p>
							<h2>Dirección del local  :</h2>
							<p>----------------------------------------------------------------</p>
							<p>Nicanor Carmona 436, Ferreñafe 14311</p>
							<p>Municipalidad Provincial de Ferreñafe</p>
							<p>Provincia de Ferreñafe</p>
							<p>----------------------------------------------------------------</p>
							<p>Telefono:(074) 267870</p>
							<p>Anexo: 600</p>
							<p>Correo Electrónico: <span>municipalidad@muniferrenafe.gob.pe</span></p>
							<p>----------------------------------------------------------------</p>
							<p>Cualquier consulta pueden contactarse con la información, 
								que se encuentra en la parte izquierda y escribir el detalle 
								en el formulario de su consulta.Muchas Gracias...</p>
							<p>----------------------------------------------------------------</p>
							<p>CARLO JAIR RIOS GRAUS - INGENIERÍA DE SISTEMAS</p>
							<p>Muchas Gracias...</p>
				   		</div>
					</div>					
			</div>
		<div class="clear"> </div>
	</div>

	<div class="clear"> </div>
			</div>
	      <div class="clear"> </div>
		   <div class="footer">
		   	 <div class="wrap">
		   	<div class="footer-left">
		   			<ul>
						<li><a href="index.html">Bienvenidos</a></li>
						
						<li><a href="contact.php">Contactos</a></li>
					</ul>
		   	</div>
		  
		   	<div class="clear"> </div>
		   </div>
		   </div>
		<!--end-wrap-->
	</body>
</html>

