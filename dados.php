<?php

error_reporting( error_reporting() & ~E_NOTICE );

list($yyI, $mmI, $ddI) = explode('-', $_POST['dataInicial']);
list($yyF, $mmF, $ddF) = explode('-', $_POST['dataFinal']);

$nPublicacoes		  = $_POST['nPublicacoes'];
$ingredientesNaturais = $_POST['ingredientesNaturais'];
$vaiBemComida		  = $_POST['vaiBemComida'];
$estiloVidaBalanceado = $_POST['estiloVidaBalanceado'];
$ehParaHomensMulheres = $_POST['ehParaHomensMulheres'];

$esforcoFSB = $_POST['esforcoFSB'];

// https://s3-sa-east-1.amazonaws.com/fsb-ambev/email-2015-10-26/materia1.gif
$urlIMG1 = $_POST['urlImagem1'];
$urlIMG2 = $_POST['urlImagem2'];

$titMateria1 =  $_POST['titMateria1'];
$titMateria2 =  $_POST['titMateria2'];

$txtMateria1 =  $_POST['txtMateria1'];
$txtMateria2 =  $_POST['txtMateria2'];

$urlMateria1 = $_POST['urlMateria1'];
$urlMateria2 = $_POST['urlMateria2'];

if ($urlMateria1 == '') $urlMateria1 = '#';
if ($urlMateria2 == '') $urlMateria2 = '#';

$qtd = $_POST['qtd'];
$qtdN = $_POST['qtdN'];
$qtdY = $_POST['qtdY'];
$qtdZ = $_POST['qtdZ'];

if ($qtd == ''){
	$qtd = 1;
}

if ($qtdN == ''){
	$qtdN = 1;
}

if ($qtdY == ''){
	$qtdY = 1;
}

if ($qtdZ == ''){
	$qtdZ = 1;
}

$qtdMaterias 	= $_POST['qtdMaterias'];
$totalMaterias 	= $_POST['totalMaterias'];

function addhttp($url) {
    if (!preg_match("~^(?:f|ht)tps?://~i", $url)) {
        $url = "http://" . $url;
    }
    return $url;
}

$urlMateria1 = addhttp($urlMateria1);
$urlMateria2 = addhttp($urlMateria2);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body leftmargin="0" topmargin="0">
<table width="616" border="0" align="center" cellpadding="0" cellspacing="0">
	<tbody>
		<tr>
			<td><img src="https://s3-sa-east-1.amazonaws.com/fsb-ambev/email-2015-06-23/3938_Ambev_HTML_150623/EMAIL_BEER_CATEGORY_150623_01.jpg" alt="" width="616" height="329" style="display:block;"></td>
		</tr>
		<tr>
			<td bgcolor="#fff9ea"><table width="100%" border="0" cellspacing="0" cellpadding="0">
				<tbody>
					<tr>
						<td width="61" align="center" valign="middle" bgcolor="#402b18"><img src="https://s3-sa-east-1.amazonaws.com/fsb-ambev/email-2015-06-23/3938_Ambev_HTML_150623/EMAIL_BEER_CATEGORY_150623_16.jpg" width="42" height="200" alt="" style="display:block;"></td>
							<td><table width="489" border="0" align="center" cellpadding="0" cellspacing="0" style="font-family:arial, helvetica, sans-serif; color:#514a4a;">
									<tbody>
										<tr>
											<td colspan="2" align="right">&nbsp;</td>
										</tr>
										<tr>
											<td colspan="2" align="right"><span style="font-size:15px;"><em><?php echo $ddI."/".$mmI;?> a <?php echo $ddF."/".$mmF;?></em></span></td>
										</tr>
										<tr>
											<td width="118" height="34" align="center"><span style="font-size:95px;"><?php echo $nPublicacoes; ?></span></td>
											<td width="371">
												<span style="font-size:18px;"><strong>publicações trouxeram mensagens contempladas pelos atributos de trabalho do projeto.</strong></span></td>
										</tr>
										<tr>
											<td height="34" align="center">&nbsp;</td>
											<td>&nbsp;</td>
										</tr>
									</tbody>
								</table>
								
								<?php if (($ingredientesNaturais != '') && ($vaiBemComida != '') && ($estiloVidaBalanceado != '') && ($ehParaHomensMulheres != '')){ ?>
									<table width="489" border="0" align="center" cellpadding="0" cellspacing="0" style="font-family:arial, helvetica, sans-serif; color:#514a4a;">
										<tbody>
											<tr>
												<td width="122" align="center"><img src="https://s3-sa-east-1.amazonaws.com/fsb-ambev/email-2015-06-23/3938_Ambev_HTML_150623/EMAIL_BEER_CATEGORY_150623_10.jpg" alt="" width="58" height="87" style="display:block;"></td>
												<td width="122" align="center"><img src="https://s3-sa-east-1.amazonaws.com/fsb-ambev/email-2015-06-23/3938_Ambev_HTML_150623/EMAIL_BEER_CATEGORY_150623_08.jpg" alt="" width="95" height="87" style="display:block;"></td>
												<td width="122" align="center"><img src="https://s3-sa-east-1.amazonaws.com/fsb-ambev/email-2015-06-23/3938_Ambev_HTML_150623/EMAIL_BEER_CATEGORY_150623_04.jpg" alt="" width="79" height="87" style="display:block;"></td>
												<td width="123" align="center"><img src="https://s3-sa-east-1.amazonaws.com/fsb-ambev/email-2015-10-05/EMAIL_BEER_CATEGORY_150623_10" alt="" width="79" height="87" style="display:block;"></td>
											</tr>
											<tr>
												<td width="122" align="center"><strong style="font-size:40px;text-align:center;display:block"><?php echo $ingredientesNaturais; ?>%</strong></td>
												<td width="122" align="center"><strong style="font-size:40px;"><?php echo $vaiBemComida; ?>%</strong></td>
												<td width="122" align="center"><strong style="font-size:40px;"><?php echo $estiloVidaBalanceado; ?>%</strong></td>
												<td width="123" align="center"><strong style="font-size:40px;"><?php echo $ehParaHomensMulheres; ?>%</strong></td>
											</tr>
											<tr>
												<td width="122" align="center"><strong><span style="font-size:18px;">Ingredientes<br>Naturais</span></strong></td>
												<td width="122" align="center"><strong><span style="font-size:18px;">Vai bem <br>com comida</span></strong></td>
												<td width="122" align="center"><strong><span style="font-size:18px;">Estilo de Vida Balanceado</span></strong></td>
												<td width="123" align="center"><strong><span style="font-size:18px;">É para homens e mulheres</span></strong></td>
											</tr>
										</tbody>
									</table>
								<?php } elseif (($ingredientesNaturais != '') && ($vaiBemComida != '') && ($estiloVidaBalanceado != '')){ ?>
									<table width="489" border="0" align="center" cellpadding="0" cellspacing="0" style="font-family:arial, helvetica, sans-serif; color:#514a4a;">
										<tbody>
											<tr>
												<td width="163" align="center"><img src="https://s3-sa-east-1.amazonaws.com/fsb-ambev/email-2015-06-23/3938_Ambev_HTML_150623/EMAIL_BEER_CATEGORY_150623_10.jpg" alt="" width="58" height="87" style="display:block;"></td>
												<td width="163" align="center"><img src="https://s3-sa-east-1.amazonaws.com/fsb-ambev/email-2015-06-23/3938_Ambev_HTML_150623/EMAIL_BEER_CATEGORY_150623_08.jpg" alt="" width="95" height="87" style="display:block;"></td>
												<td width="163" align="center"><img src="https://s3-sa-east-1.amazonaws.com/fsb-ambev/email-2015-06-23/3938_Ambev_HTML_150623/EMAIL_BEER_CATEGORY_150623_04.jpg" alt="" width="79" height="87" style="display:block;"></td>
											</tr>
											<tr>
												<td width="163" align="center"><strong style="font-size:40px;text-align:center;display:block"><?php echo $ingredientesNaturais; ?></strong></td>
												<td width="163" align="center"><strong style="font-size:40px;"><?php echo $vaiBemComida; ?></strong></td>
												<td width="163" align="center"><strong style="font-size:40px;"><?php echo $estiloVidaBalanceado; ?></strong></td>
											</tr>
											<tr>
												<td width="163" align="center"><strong><span style="font-size:18px;">Ingredientes<br>Naturais</span></strong></td>
												<td width="163" align="center"><strong><span style="font-size:18px;">Vai bem <br>com comida</span></strong></td>
												<td width="163" align="center"><strong><span style="font-size:18px;">Estilo de Vida Balanceado</span></strong></td>
											</tr>
										</tbody>
									</table>
								<?php } elseif (($vaiBemComida != '') && ($estiloVidaBalanceado != '')){ ?>
									<table width="489" border="0" align="center" cellpadding="0" cellspacing="0" style="font-family:arial, helvetica, sans-serif; color:#514a4a;">
										<tbody>
											<tr>
												<td width="244" align="center"><img src="https://s3-sa-east-1.amazonaws.com/fsb-ambev/email-2015-06-23/3938_Ambev_HTML_150623/EMAIL_BEER_CATEGORY_150623_08.jpg" alt="" width="95" height="87" style="display:block;"></td>
												<td width="245" align="center"><img src="https://s3-sa-east-1.amazonaws.com/fsb-ambev/email-2015-06-23/3938_Ambev_HTML_150623/EMAIL_BEER_CATEGORY_150623_04.jpg" alt="" width="79" height="87" style="display:block;"></td>
											</tr>
											<tr>
												<td width="244" align="center"><strong style="font-size:40px;"><?php echo $vaiBemComida; ?></strong></td>
												<td width="245" align="center"><strong style="font-size:40px;"><?php echo $estiloVidaBalanceado; ?></strong></td>
											</tr>
											<tr>
												<td width="244" align="center"><strong><span style="font-size:18px;">Vai bem com comida</span></strong></td>
												<td width="245" align="center"><strong><span style="font-size:18px;">Estilo de Vida Balanceado</span></strong></td>
											</tr>
										</tbody>
									</table>
								<?php } ?>

								<table width="489" border="0" align="center" cellpadding="0" cellspacing="0" style="font-family:arial, helvetica, sans-serif; color:#514a4a;">
									<tbody>
										<tr>
											<td height="50">&nbsp;</td>
										</tr>
										<tr>
											<td><span style="text-transform:uppercase; font-weight:600; font-size:17px;">O esforço da FSB resultou em <?php echo $esforcoFSB; ?> das matérias que contribuem para os atributos chave de Beer Category</span></td>
										</tr>
										<tr>
											<td height="25">&nbsp;</td>
										</tr>
									</tbody>
								</table>

								<?php if (($titMateria1 !='') && ($titMateria2 !='')) {?>
									<table width="489" border="0" align="center" cellpadding="0" cellspacing="0" style="font-family:arial, helvetica, sans-serif; color:#514a4a;">
										<tbody>
											<tr>
												<td><img src="<?php echo $urlIMG1; ?>" alt="" width="231" height="133" style="display:block;"></td>
												<td>&nbsp;</td>
												<td><img src="<?php echo $urlIMG2; ?>" alt="" width="231" height="133" style="display:block;"></td>
											</tr>
											<tr>
												<td width="231" height="8"></td>
												<td width="27" height="8"></td>
												<td width="231" height="8"></td>
											</tr>
											<tr>
												<td valign="top" style="font-size:14px;"><strong><?php echo $titMateria1; ?></strong><br>
													<p><?php echo $txtMateria1; ?><br>
													<a href="<?php echo $urlMateria1; ?>" target="_blank" style="color:#514A4A">Matéria completa</a></p>
												</td>
												<td valign="top" style="font-size:14px;">&nbsp;</td>
												<td valign="top" style="font-size:14px;"><strong><?php echo $titMateria2; ?></strong><br>
													<p><?php echo $txtMateria2; ?><br>
													<a href="<?php echo addhttp($urlMateria2); ?>" target="_blank" style="color:#514A4A">Matéria completa</a></p>
												</td>
											</tr>
										</tbody>
									</table>
								<?php } elseif ($titMateria2 =='') { ?>
									<table width="489" border="0" align="center" cellpadding="0" cellspacing="0" style="font-family:arial, helvetica, sans-serif; color:#514a4a;">
										<tbody>
											<tr>
												<td><img src="<?php echo $urlIMG1; ?>" alt="" width="231" height="133" style="display:block;"></td>
												<td>&nbsp;</td>
												<td><img src="<?php echo $urlIMG2; ?>" alt="" width="231" height="133" style="display:block;"></td>
											</tr>
											<tr>
												<td width="231" height="8"></td>
												<td width="27" height="8"></td>
												<td width="231" height="8"></td>
											</tr>
											<tr>
												<td colspan="3" valign="top" style="font-size:14px;"><strong><?php echo $titMateria1; ?></strong><br>
													<p><?php echo $txtMateria1; ?></p>
												</td>
											</tr>
										</tbody>
									</table>
								<?php } ?>

								<table width="489" border="0" align="center" cellpadding="0" cellspacing="0" style="font-family:arial, helvetica, sans-serif; color:#514a4a; font-size:14px;">
									<tbody>
										<tr>
											<td width="10" height="30">&nbsp;</td>
											<td width="479" height="30">&nbsp;</td>
										</tr>
										<?php 

											for ($i=1; $i <= $qtd; $i++) {

												echo '<tr>
														<td width="10" height="5" valign="top"></td>
														<td rowspan="2"><span style="font-style:italic; font-weight:600;">' . $_POST['veiculoMateria'.$i] . '</span> <a href="' . addhttp($_POST['linkMateria'.$i]) . '" target="_blank" style="color:#514A4A">' . $_POST['tituloMateria'.$i] . '</a></td>
													</tr>
													<tr>
														<td width="10" valign="top">&nbsp;</td>
													</tr>
													<tr>
														<td width="10">&nbsp;</td>
														<td>&nbsp;</td>
													</tr>';
											}
										?>
									</tbody>
								</table>
								<table width="489" border="0" align="center" cellpadding="0" cellspacing="0" style="font-family:arial, helvetica, sans-serif; color:#514a4a;">
									<tbody>
										<tr>
											<td>&nbsp;</td>
										</tr>
										<tr>
											<td><span style="font-size:17px;">Os demais atributos foram destacados em <strong><?php echo $qtdMaterias; ?></strong>, totalizando <strong><?php echo $totalMaterias; ?></strong> de Beer Category</span></td>
										</tr>
										<tr>
											<td height="50">&nbsp;</td>
										</tr>
									</tbody>
								</table>
							</td>
						</tr>
					</tbody>
				</table>
			</td>
		</tr>
		<tr>
			<td bgcolor="#ffede0">
				<table width="100%" border="0" cellspacing="0" cellpadding="0">
					<tbody>
						<tr>
							<td width="61" align="center" valign="middle" bgcolor="#ed6e21">
								<img src="https://s3-sa-east-1.amazonaws.com/fsb-ambev/email-2015-06-23/3938_Ambev_HTML_150623/EMAIL_BEER_CATEGORY_150623_30.jpg" width="56" height="102" alt="" style="display:block;">
							</td>
							<td>
								<table width="489" border="0" align="center" cellpadding="0" cellspacing="0" style="font-size:14px; font-family:arial, helvetica, sans-serif; color:#514a4a;">
									<tbody>
										<tr>
											<td height="30" colspan="3" valign="bottom">&nbsp;</td>
										</tr>
										<tr>
											<td valign="top"><img src="https://s3-sa-east-1.amazonaws.com/fsb-ambev/email-2015-06-23/3938_Ambev_HTML_150623/EMAIL_BEER_CATEGORY_150623_31.jpg" width="48" height="54" alt="" style="display:block;"></td>
											<td width="20">&nbsp;</td>
											<td>
												<strong>Publicações previstas para esta semana:</strong><br><br>
												<?php 
													for ($n=1; $n <= $qtdN; $n++) {

														echo "<strong>". $_POST['tituloPrevSemana'.$n] ." –</strong> ". $_POST['txtMatPrevSemana'.$n] ."<br><br>";
													}
												?>
											</td>
										</tr>
										<tr>
											<td>&nbsp;</td>
											<td width="20">&nbsp;</td>
											<td>&nbsp;</td>
										</tr>
									</tbody>
								</table>
							</td>
						</tr>
					</tbody>
				</table>
			</td>
		</tr>
		<tr>
			<td bgcolor="#fff9ea">
				<table width="100%" border="0" cellspacing="0" cellpadding="0">
					<tbody>
						<tr>
							<td width="61" align="center" valign="middle" bgcolor="#f49c13"><img src="https://s3-sa-east-1.amazonaws.com/fsb-ambev/email-2015-06-23/3938_Ambev_HTML_150623/EMAIL_BEER_CATEGORY_150623_37.jpg" alt="" width="42" height="121" style="display:block;"></td>
							<td>
								<table width="489" border="0" align="center" cellpadding="0" cellspacing="0" style="font-family:arial, helvetica, sans-serif; color:#514a4a; font-size:14px">
									<tbody>
										<tr>
											<td width="10" height="50">&nbsp;</td>
											<td width="479" height="50">&nbsp;</td>
										</tr>
										<?php 

											for ($y=1; $y <= $qtdY; $y++) {

												echo '<tr>
													<td width="10"></td>
													<td valign="top"><span style="font-weight:600;">'. $_POST['tituloACerva'.$y] .' – </span>'. $_POST['txtMatACerva'.$y] .'</td>
												</tr>
												<tr>
													<td width="10" height="30">&nbsp;</td>
													<td height="30">&nbsp;</td>
												</tr>';
											}
										?>
									</tbody>
								</table>
							</td>
						</tr>
					</tbody>
				</table>
			</td>
		</tr>
		<tr>
			<td bgcolor="#e7f4f6">
				<table width="100%" border="0" cellspacing="0" cellpadding="0">
					<tbody>
						<tr>
							<td width="61" height="220" align="center" valign="middle" bgcolor="#3eaabc"><img src="https://s3-sa-east-1.amazonaws.com/fsb-ambev/email-2015-06-23/3938_Ambev_HTML_150623/EMAIL_BEER_CATEGORY_150623_40.jpg" alt="" width="42" height="202" style="display:block;"></td>
							<td>
								<table width="489" border="0" align="center" cellpadding="0" cellspacing="0" style="font-family:arial, helvetica, sans-serif; color:#514a4a; font-size:14px; ">
									<tbody>
										<tr>
											<td width="10" height="50">&nbsp;</td>
											<td width="479" height="50">&nbsp;</td>
										</tr>
										<?php 
											for ($z=1; $z <= $qtdZ; $z++) {

												echo '<tr>
													<td width="10" height="5" valign="top"></td>
													<td valign="top"><span style="font-weight:600;">'. $_POST['tituloMarcas'.$z] .' – </span>'. $_POST['txtMatMarcas'.$z] .'</td>
												</tr>
												<tr>
													<td width="10" height="30" valign="top">&nbsp;</td>
													<td height="30" valign="top">&nbsp;</td>
												</tr>';
											}
										?>										
									</tbody>
								</table>
							</td>
						</tr>
					</tbody>
				</table>
			</td>
		</tr>
		<tr>
			<td bgcolor="#fff9ea">
				<table width="100%" border="0" cellspacing="0" cellpadding="0">
					<tbody>
						<tr>
							<td height="25">&nbsp;</td>
							<td height="25">&nbsp;</td>
						</tr>
						<tr>
							<td width="9">&nbsp;</td>
							<td><img src="https://s3-sa-east-1.amazonaws.com/fsb-ambev/email-2015-06-23/3938_Ambev_HTML_150623/EMAIL_BEER_CATEGORY_150623_42.jpg" alt="" style="display:block;"></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
						</tr>
					</tbody>
				</table>
				<table width="100%" border="0" cellspacing="0" cellpadding="0" style="font-family:arial, helvetica, sans-serif; color:#514a4a;">
					<tbody>
						<tr>
							<td width="41%" height="40" valign="middle" bgcolor="#f6edd5"><span style="font-size:17px; font-weight:600;">&nbsp;&nbsp;Título</span></td>
							<td width="28%" height="40" valign="middle" bgcolor="#f6edd5"><span style="font-size:17px; font-weight:600;">Veículo</span></td>
							<td width="31%" height="40" valign="middle" bgcolor="#f6edd5"><span style="font-size:17px; font-weight:600;">Atributo</span></td>
						</tr>
					</tbody>
				</table>
				<table width="99%" border="0" align="center" cellpadding="0" cellspacing="0" style="font-size:10px; font-family:arial, helvetica, sans-serif; color:#514a4a;">
					<col width="246">
					<col width="9">
					<col width="153">
					<col width="10">
					<col width="192">
					<tr>
						<td>&nbsp;</td>
						<td></td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
				<td height="50" valign="middle"><table width="570" border="0" align="center" cellpadding="0" cellspacing="0">
						<tbody>
								<tr>
										<td><img src="https://s3-sa-east-1.amazonaws.com/fsb-ambev/email-2015-06-23/3938_Ambev_HTML_150623/EMAIL_BEER_CATEGORY_150623_46.jpg" alt="" width="88" height="25" style="display:block;"></td>
										<td align="right"><img src="https://s3-sa-east-1.amazonaws.com/fsb-ambev/email-2015-06-23/3938_Ambev_HTML_150623/EMAIL_BEER_CATEGORY_150623_32.jpg" alt="" width="150" height="25" style="display:block;"></td>
								</tr>
						</tbody>
				</table></td>
		</tr>
	</tbody>
</table>
</body>
</html>