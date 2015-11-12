

<?php 
require_once("clases/validadora.php");

if(validadora::validarSesionActual())
{
	require_once("clases/AccesoDatos.php");
	require_once("clases/cd.php");
	$estadisticas = cd::TraerEstadisticas();
 ?>
<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>


<table class="table" id="datatable" style=" background-color: beige; display:none">
	<thead>
		<tr>
			<th>Cantante</th><th>Cantidad Cds</th>
		</tr>
	</thead>
	<tbody>

		<?php 
foreach ($estadisticas as $row) {
	echo"<tr>
			<td>".$row['Cantante']."</td>
			<td>".$row['CantidadCd']."</td>
		</tr>   ";
}
		 ?>
	</tbody>
</table>


<?php 	}else	{
		echo "<h4 class='widgettitle'>No estas registrado o has excedido tu tiempo de sesión</h4>";
	}

	 ?>

<script type="text/javascript">
    $(function () {
    $('#container').highcharts({
        data: {
            table: 'datatable'
        },
        chart: {
            type: 'column'
        },
        title: {
            text: 'Top 5 Artistas con más Cds'
        },
        yAxis: {
            allowDecimals: false,
            title: {
                text: 'Cantidad'
            }
        },
        tooltip: {
            formatter: function () {
                return '<b>' + this.series.name + '</b><br/>' +
                    this.point.y + ' ' + this.point.name.toLowerCase();
            }
        }
    });
});

</script>