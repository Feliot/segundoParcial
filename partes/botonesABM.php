<?php 

if(validadora::validarSesionActual())
{
	echo "<section class='widget'><center><h2> Bienvenido: ". $_SESSION['registrado']."</h2></center>";

 ?>
		
			<h4 class="widgettitle">Botones ABM</h4>
			<ul>
				<li><a onclick="Mostrar('MostrarGrilla')" class=" btn-lg MiBotonUTN" ><span class="glyphicon glyphicon-th">&nbsp;</span>Grilla CD</a></li>
				<li><a onclick="Mostrar('MostrarFormAlta')" class="btn-lg MiBotonUTN" ><span class="glyphicon glyphicon-plus-sign">&nbsp;</span>Alta CD</a></li>
			
                <li><a onclick="Mostrar('Estadisticas')" class="btn-lg MiBotonUTN" ><span class="glyphicon glyphicon-plus-sign">&nbsp;</span>Estadisticas CDs</a></li>
			</ul>
		</section>

	<?php 
	}else
	{
		echo "<section class='widget'>
			<h4 class='widgettitle'>No estas registrado o has excedido tu tiempo de sesión</h4></section>";
	}

	 ?>