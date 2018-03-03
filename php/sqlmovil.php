<div id="text_dia">Ofertas del día <?=muestra_fecha($dia_actual);?></div>
  <div data-role="content" style="background:#f3f3f3; padding:20px 0; overflow:hidden; height:auto;">
  	<?
    $sqls=mysql_query("select * from ofertas where fecha='".sql_fecha($dia_actual)."' and activo='si'");
	if($rows=mysql_fetch_array($sqls)){
		$sql=mysql_query("select * from ofertas where fecha='".sql_fecha($dia_actual)."'  and activo='si' order by id");
		$n=1;
		while($row=mysql_fetch_array($sql)){
			if($n!="1"){?><div class="sep_nar"></div><? }
		?>
        <table cellpadding="0" cellspacing="0" border="0" align="center" width="85%" class="tbl_of_mov">      
          <tr>
          	<td width="90" valign="middle"><img src="images/logos/movil_<?=$row[img]?>"></td>
            <td>
			<span><?=$row[nombre]?></span><br />
			<?=$row[descr]?></td>
          </tr>
         </table>
        <?
		
		$n++;
		}mysql_free_result($sql);
	}else{
		echo "<center>No hay ninguna oferta para este día.</center>";
	}mysql_free_result($sqls);
	?>
        
	</div>