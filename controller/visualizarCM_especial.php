<?php
require_once("../autoload.php");

$cmEspecial = new formDefault();
$cmEspecial->titulo = $_POST["titulo"];
$cmEspecial->linhaFina = $_POST["linhaFina"];
$cmEspecial->link = $_POST["link"];
$cmEspecial->imagem = $_POST["imagem"];
$cmEspecial->topo = $_POST["topo"];

$conteudo = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//BR-pt" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Consumidor Moderno</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<style>
		.conarec,
		.consumo,
		.defesa,
		.experiencia,
		.inovacao,
		.summit,
		.tv {
			height: 5px
		}
		
		body {
			background-color: #ccc
		}
		
		table.container {
			margin: 10px auto 0;
			font-size: 16px;
			line-height: 25px;
			font-family: Arial, sans-serif
		}
		
		.tituloCan a,
		.tituloCot a,
		.tituloEmp a,
		.tituloGen a,
		.tituloGes a,
		.tituloRev a,
		.tituloTec a {
			font-size: 18px;
			text-decoration: none
		}
		
		table.footer a {
			display: inline-block;
			width: auto
		}
		
		a,
		img {
			border: 0
		}
		
		table.columns img {
			display: block
		}
		
		.table-lateral {
			width: 280px
		}
		
		.imgCONAREC {
			width: 245px
		}
		
		.depoimentoCONAREC {
			width: 197px
		}
		
		.tituloCentral {
			padding: 5px 80px
		}
		
		.linhaCentral,
		.redesCentral {
			padding: 0 80px
		}
		
		.tituloGen a {
			color: #e4202b
		}
		
		.tituloCan a {
			color: #bd4cbc
		}
		
		.tituloRev a,
		.tituloTec a {
			color: #2898d0
		}
		
		.tituloEmp a {
			color: #f19225
		}
		
		.tituloGes a {
			color: #faeb00
		}
		
		.tituloCot a {
			color: #56d600
		}
		
		.experiencia {
			background-color: #BD4CBC
		}
		
		.inovacao {
			background-color: #F6EE26
		}
		
		.comportamento {
			height: 5px;
			background-color: #F7941E
		}
		
		.defesa {
			background-color: #3B94C4
		}
		
		.consumo {
			background-color: #6EC5A0
		}
		
		.tv {
			background-color: #ef0b0b
		}
		
		.conarec {
			background-color: #C0F20F
		}
		
		.summit {
			background-color: #323F83
		}
		
		@media only screen and (max-width:600px) {
			.materias-nv,
			table.footer,
			table.footer td table {
				text-align: center
			}
			table.container {
				margin: 0
			}
			table.columns td,
			table.container,
			table.container img,
			table.footer table,
			table.footer table tbody,
			table.footer td,
			table.footer tr {
				width: 100%;
				height: auto
			}
			table.columns td {
				margin-bottom: 10px
			}
			.materias-nv {
				float: none;
				width: 100%
			}
			.publicacoes-center {
				width: 50%
			}
			.logo-nv {
				margin-top: 25%
			}
			.materias-conarec {
				padding: 0;
				width: 100%
			}
			.depoimentoCONAREC,
			.imgCONAREC,
			.table-lateral {
				width: 100%
			}
			.tituloCentral {
				padding: 10px 20px
			}
			.linhaCentral,
			.redesCentral {
				padding: 0 20px
			}
		}
		
		@media only screen and (max-width:540px) {
			.texto-alinhamento-left,
			.texto-alinhamento-right {
				text-align: center!important
			}
			.img-left,
			.img-right,
			.participe-left,
			.patrocine-right,
			.txt-chat,
			.txt-left,
			.txt-right {
				width: 100%
			}
			.img-chat {
				width: 60%
			}
			.materias-conarec {
				padding: 0;
				width: 100%
			}
			.imgCONAREC,
			.table-lateral {
				width: 100%
			}
		}
	</style>
</head>
<body style="margin: 0; padding: 0; background-color:#cccccc;" bgcolor="#cccccc">
	<table summary="text" border="0" cellpadding="0" cellspacing="0" width="100%" style="background: #cccccc;">
		<tr>
			<td>
				<table summary="text" class="container" align="center" border="0" cellpadding="0" cellspacing="0" width="600">
					<tr>
						<td bgcolor="#ffffff" style="font-family:Arial; font-size:14px; color:#000000; text-align:right; padding:10px 40px">
							<center style="font-family: Arial,Helvetica,sans-serif; font-size: 10px;">Caso n&atilde;o esteja visualizando corretamente esta mensagem, <a target="_blank" href="{{__view}}">acesse este link</a></center>
						</td>
					</tr>
					<tr>
						<td bgcolor="#2c2c2c" height="15" style="background-color: #2c2c2c;"></td>
					</tr>
					<tr><td bgcolor="#2c2c2c" style="font-family: Helvetica, arial, sans-serif; font-size: 12px; text-align:center;"> <a target="_blank" href="https://www.consumidormoderno.com.br" style="text-decoration:none"><img src="https://s3.amazonaws.com/newsletter-gpadrao/icons/cm/cmnews_03.jpg" alt="Consumidor Moderno" title="Consumidor Moderno" border="0" style="width: 130px !important"> </a></td></tr>
					<tr><td bgcolor="#2c2c2c" height="10" style="background-color: #2c2c2c;"></td></tr>
					<tr>
<td bgcolor="#FFFFFF" width="600" style="padding: 0px 0 0px 0px;" class="logo"><div align="center"><a target="_blank" href="https://www.consumidormoderno.com.br"><img border="0" alt="Consumidor Moderno" style="display:block; border:none; outline:none; text-decoration:none;" src="'.$cmEspecial->topo.'" class="img-nota"></a></div></td></tr>
					<tr>
						<td bgcolor="#2c2c2c" height="15" style="background-color: #2c2c2c;"></td>
					</tr>

					<tr>
						<td bgcolor="#ffffff" height="30" style="background-color: #ffffff;"></td>
					</tr>
					<tr>
						<td bgcolor="#2c2c2c" align="center" style="width:100%; height:3px; background-color:#2c2c2c;"></td>
					</tr>
					<tr>
						<td bgcolor="#FFFFFF" width="600" style="padding: 0px 0 0px 0px;" class="logo">
							<div align="center">
								<a target="_blank" href="'.$cmEspecial->link[0].'"><img border="0" alt="'.$cmEspecial->titulo[0].'" style="display:block; border:none; outline:none; text-decoration:none;" src="'.$cmEspecial->imagem[0].'" class="img-nota" /></a>
							</div>
						</td>
					</tr>
					<tr>
						<td bgcolor="#2c2c2c" style="font-family: Helvetica, arial, sans-serif; text-align:left;line-height:20px; padding: 5px 20px">
							<div class="titulo" style="padding: 5px 5px;"><a target="_blank" style="color: #fff;font-family: Helvetica, arial, sans-serif; text-align:left;line-height:20px;font-size: 18px;text-decoration: none; " href="'.$cmEspecial->link[0].'">'.$cmEspecial->titulo[0].'</a></div>
						</td>
					</tr>
					<tr>
						<td bgcolor="#2c2c2c" align="left" style="font-family: helvetica, arial, sans-serif; font-size: 14px; text-align:left; line-height: 20px; padding: 5px 20px;color:#ffffff">'.$cmEspecial->linhaFina[0].'</td>
					</tr>
					<tr>
						<td bgcolor="#2c2c2c">
							<table align="left" border="0" cellpadding="0" cellspacing="0" class="tablet-button" summary="text" bgcolor="#2c2c2c">
								<tbody>
									<tr>
										<td align="center" height="30" style=" background-color:#2c2c2c; background-clip: padding-box; color:#ffffff; padding: 0 10px "><span style="color:#ffffff;"><a target="_blank" href="'.$cmEspecial->link[0].'" style="color:#ffffff; font-size:14px; text-decoration:none;"><b>Leia mais</b></a>&nbsp;&nbsp;<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u='.$cmEspecial->link[0].'" style="text-decoration:none;"><img style="padding-left:1px; width:36px !important" border="0" src="https://s3.amazonaws.com/newsletter-gpadrao/icons/novarejo/2018/face_nota.jpg" alt="Compartilhe no Facebook"/></a><a target="_blank" href="http://twitter.com/share?text='.$cmEspecial->titulo[0].'&url='.$cmEspecial->link[0].'" style="text-decoration:none;"><img border="0" src="https://s3.amazonaws.com/newsletter-gpadrao/icons/novarejo/2018/twitter_nota.jpg" style=" width:36px !important" alt="Compartilhe no Twitter"/></a><a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url='.$cmEspecial->link[0].'&title='.$cmEspecial->titulo[0].'&source=News No Varejo" style="text-decoration:none;"><img style="padding-left:1px; width:36px !important" border="0" src="https://s3.amazonaws.com/newsletter-gpadrao/icons/cm/linkedin_nota.jpg" alt="Compartilhe no Linkedin"/></a></span></td>
									</tr>
								</tbody>
							</table>
						</td>
					</tr>
					<tr>
						<td bgcolor="#ffffff" height="30" style="background-color: #ffffff;"></td>
					</tr>
					<tr>
						<td bgcolor="#ffffff">
							<table summary="text" width="100%" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
								<tbody>
									<tr>
										<td>
											<table summary="text" width="280" align="left" border="0" cellpadding="0" cellspacing="0" class="devicewidth materias-conarec">
												<tbody>
													<tr>
														<td bgcolor="#2c2c2c" align="center" style="width:100%; height:3px; background-color:#2c2c2c;"></td>
													</tr>
													<tr>
														<td width="280" height="180" align="center" class="devicewidth" bgcolor="#ffffff">
															<a target="_blank" href="'.$cmEspecial->link[1].'"><img alt="'.$cmEspecial->titulo[1].'" border="0" src="'.$cmEspecial->imagem[1].'" style="width:100%; display: inline-block;" title="Consumidor Moderno" /></a>
														</td>
													</tr>
													<tr>
														<td>
															<table summary="text" width="280" align="center" border="0" cellpadding="0" cellspacing="0" class="devicewidthinner table-lateral">
																<tbody>
																	<tr>
																		<td bgcolor="#2c2c2c" style="font-family: Helvetica, arial, sans-serif; font-size: 1px; text-align:left;line-height:20px; padding: 5px 5px; background-color:#2c2c2c">
																			<div class="titulo"><a target="_blank" style="color: #fff;font-size: 18px;text-decoration: none;" href="'.$cmEspecial->link[1].'">'.$cmEspecial->titulo[1].'</a></div>
																		</td>
																	</tr>
																	<tr>
																		<td style="font-family: Helvetica, arial, sans-serif; font-size: 14px; text-align:left;line-height: 20px; padding: 0px 10px; color:#ffffff" bgcolor="#2c2c2c">'.$cmEspecial->linhaFina[1].'</td>
																	</tr>
																	<tr>
																		<td width="100%" height="10" bgcolor="#2c2c2c"></td>
																	</tr>
																	<tr>
																		<td bgcolor="#2c2c2c">
																			<table align="left" border="0" cellpadding="0" cellspacing="0" class="tablet-button" summary="text" bgcolor="#2c2c2c">
																				<tbody>
																					<tr>
																						<td align="center" height="30" style=" background-color:#2c2c2c; background-clip: padding-box; color:#ffffff;padding: 5px 0 5px 15px "><span style="color:#ffffff;"><a target="_blank" href="'.$cmEspecial->link[1].'" style="color:#ffffff; font-size:14px; text-decoration:none;"><b>Leia mais</b></a>&nbsp;&nbsp;<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u='.$cmEspecial->link[1].'" style="text-decoration:none;"><img style="padding-left:1px; width:36px !important" border="0" src="https://s3.amazonaws.com/newsletter-gpadrao/icons/novarejo/2018/face_nota.jpg" alt="Compartilhe no Facebook"/></a><a target="_blank" href="http://twitter.com/share?text='.$cmEspecial->titulo[1].'&url='.$cmEspecial->link[1].'" style="text-decoration:none;"><img border="0" src="https://s3.amazonaws.com/newsletter-gpadrao/icons/novarejo/2018/twitter_nota.jpg" style=" width:36px !important" alt="Compartilhe no Twitter"/></a><a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url='.$cmEspecial->link[1].'&title='.$cmEspecial->titulo[1].'&source=News No Varejo" style="text-decoration:none;"><img style="padding-left:1px; width:36px !important" border="0" src="https://s3.amazonaws.com/newsletter-gpadrao/icons/cm/linkedin_nota.jpg" alt="Compartilhe no Linkedin"/></a></span></td>
																					</tr>
																				</tbody>
																			</table>
																		</td>
																	</tr>
																	<tr>
																		<td width="100%" height="10" bgcolor="#2c2c2c"></td>
																	</tr>
																</tbody>
															</table>
														</td>
													</tr>
												</tbody>
											</table>
											<table summary="text" width="280" align="right" border="0" cellpadding="0" cellspacing="0" class="devicewidth materias-conarec">
												<tbody>
													<tr>
														<td bgcolor="#2c2c2c" align="center" style="width:100%; height:3px; background-color:#2c2c2c;"></td>
													</tr>
													<tr>
														<td width="280" height="180" align="center" class="devicewidth" bgcolor="#ffffff">
															<a target="_blank" href="'.$cmEspecial->link[2].'"><img alt="'.$cmEspecial->titulo[2].'" border="0" src="'.$cmEspecial->imagem[2].'" style="width:100%; display: inline-block;" title="Consumidor Moderno" /></a>
														</td>
													</tr>
													<tr>
														<td>
															<table summary="text" width="280" align="center" border="0" cellpadding="0" cellspacing="0" class="devicewidthinner materias-nv">
																<tbody>
																	<tr>
																		<td bgcolor="#2c2c2c" style="font-family: Helvetica, arial, sans-serif; font-size: 15px; text-align:left;line-height:20px; padding: 5px 5px; background-color:#2c2c2c">
																			<div class="titulo" style="padding: 5px 5px;"><a target="_blank" style="color: #fff;font-size: 18px;text-decoration: none;" href="'.$cmEspecial->link[2].'">'.$cmEspecial->titulo[2].'</a></div>
																		</td>
																	</tr>
																	<tr>
																		<td style="font-family: Helvetica, arial, sans-serif; font-size: 14px; text-align:left;line-height: 20px; padding: 0px 10px; color:#ffffff" bgcolor="#2c2c2c">'.$cmEspecial->linhaFina[2].'</td>
																	</tr>
																	<tr>
																		<td width="100%" height="10" bgcolor="#2c2c2c"></td>
																	</tr>
																	<tr>
																		<td bgcolor="#2c2c2c">
																			<table align="left" border="0" cellpadding="0" cellspacing="0" class="tablet-button" summary="text" bgcolor="#2c2c2c">
																				<tbody>
																					<tr>
																						<td align="center" height="30" style=" background-color:#2c2c2c; background-clip: padding-box; color:#ffffff; padding: 0 10px"><span style="color:#ffffff;"><a target="_blank" href="'.$cmEspecial->link[2].'" style="color:#ffffff; font-size:14px; text-decoration:none;"><b>Leia mais</b></a>&nbsp;&nbsp;<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u='.$cmEspecial->link[2].'" style="text-decoration:none;"><img style="padding-left:1px; width:36px !important" border="0" src="https://s3.amazonaws.com/newsletter-gpadrao/icons/novarejo/2018/face_nota.jpg" alt="Compartilhe no Facebook"/></a><a target="_blank" href="http://twitter.com/share?text='.$cmEspecial->titulo[2].'&url='.$cmEspecial->link[2].'" style="text-decoration:none;"><img border="0" src="https://s3.amazonaws.com/newsletter-gpadrao/icons/novarejo/2018/twitter_nota.jpg" style=" width:36px !important" alt="Compartilhe no Twitter"/></a><a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url='.$cmEspecial->link[2].'&title='.$cmEspecial->titulo[2].'&source=News No Varejo" style="text-decoration:none;"><img style="padding-left:1px; width:36px !important" border="0" src="https://s3.amazonaws.com/newsletter-gpadrao/icons/cm/linkedin_nota.jpg" alt="Compartilhe no Linkedin"/></a></span></td>
																					</tr>
																				</tbody>
																			</table>
																		</td>
																	</tr>
																	<tr>
																		<td width="100%" height="10" bgcolor="#2c2c2c"></td>
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
										<td bgcolor="#ffffff" height="30" style="background-color: #ffffff;"></td>
									</tr>
									<tr>
										<td bgcolor="#ffffff">
											<table summary="text" width="100%" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
												<tbody>
													<tr>
														<td>
															<table summary="text" width="280" align="left" border="0" cellpadding="0" cellspacing="0" class="devicewidth materias-conarec">
												<tbody>
													<tr>
														<td bgcolor="#2c2c2c" align="center" style="width:100%; height:3px; background-color:#2c2c2c;"></td>
													</tr>
													<tr>
														<td width="280" height="180" align="center" class="devicewidth" bgcolor="#ffffff">
															<a target="_blank" href="'.$cmEspecial->link[3].'"><img alt="'.$cmEspecial->titulo[3].'" border="0" src="'.$cmEspecial->imagem[3].'" style="width:100%; display: inline-block;" title="Consumidor Moderno" /></a>
														</td>
													</tr>
													<tr>
														<td>
															<table summary="text" width="280" align="center" border="0" cellpadding="0" cellspacing="0" class="devicewidthinner table-lateral">
																<tbody>
																	<tr>
																		<td bgcolor="#2c2c2c" style="font-family: Helvetica, arial, sans-serif; font-size: 1px; text-align:left;line-height:20px; padding: 5px 5px; background-color:#2c2c2c">
																			<div class="titulo"><a target="_blank" style="color: #fff;font-size: 18px;text-decoration: none;" href="'.$cmEspecial->link[3].'">'.$cmEspecial->titulo[3].'</a></div>
																		</td>
																	</tr>
																	<tr>
																		<td style="font-family: Helvetica, arial, sans-serif; font-size: 14px; text-align:left;line-height: 20px; padding: 0px 10px; color:#ffffff" bgcolor="#2c2c2c">'.$cmEspecial->linhaFina[3].'</td>
																	</tr>
																	<tr>
																		<td width="100%" height="10" bgcolor="#2c2c2c"></td>
																	</tr>
																	<tr>
																		<td bgcolor="#2c2c2c">
																			<table align="left" border="0" cellpadding="0" cellspacing="0" class="tablet-button" summary="text" bgcolor="#2c2c2c">
																				<tbody>
																					<tr>
																						<td align="center" height="30" style=" background-color:#2c2c2c; background-clip: padding-box; color:#ffffff;padding: 5px 0 5px 15px "><span style="color:#ffffff;"><a target="_blank" href="'.$cmEspecial->link[3].'" style="color:#ffffff; font-size:14px; text-decoration:none;"><b>Leia mais</b></a>&nbsp;&nbsp;<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u='.$cmEspecial->link[3].'" style="text-decoration:none;"><img style="padding-left:1px; width:36px !important" border="0" src="https://s3.amazonaws.com/newsletter-gpadrao/icons/novarejo/2018/face_nota.jpg" alt="Compartilhe no Facebook"/></a><a target="_blank" href="http://twitter.com/share?text='.$cmEspecial->titulo[3].'&url='.$cmEspecial->link[3].'" style="text-decoration:none;"><img border="0" src="https://s3.amazonaws.com/newsletter-gpadrao/icons/novarejo/2018/twitter_nota.jpg" style=" width:36px !important" alt="Compartilhe no Twitter"/></a><a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url='.$cmEspecial->link[3].'&title='.$cmEspecial->titulo[3].'&source=News No Varejo" style="text-decoration:none;"><img style="padding-left:1px; width:36px !important" border="0" src="https://s3.amazonaws.com/newsletter-gpadrao/icons/cm/linkedin_nota.jpg" alt="Compartilhe no Linkedin"/></a></span></td>
																					</tr>
																				</tbody>
																			</table>
																		</td>
																	</tr>
																	<tr>
																		<td width="100%" height="10" bgcolor="#2c2c2c"></td>
																	</tr>
																</tbody>
															</table>
														</td>
													</tr>
												</tbody>
											</table>
															<table summary="text" width="280" align="right" border="0" cellpadding="0" cellspacing="0" class="devicewidth materias-conarec">
												<tbody>
													<tr>
														<td bgcolor="#2c2c2c" align="center" style="width:100%; height:3px; background-color:#2c2c2c;"></td>
													</tr>
													<tr>
														<td width="280" height="180" align="center" class="devicewidth" bgcolor="#ffffff">
															<a target="_blank" href="'.$cmEspecial->link[4].'"><img alt="'.$cmEspecial->titulo[4].'" border="0" src="'.$cmEspecial->imagem[4].'" style="width:100%; display: inline-block;" title="Consumidor Moderno" /></a>
														</td>
													</tr>
													<tr>
														<td>
															<table summary="text" width="280" align="center" border="0" cellpadding="0" cellspacing="0" class="devicewidthinner materias-nv">
																<tbody>
																	<tr>
																		<td bgcolor="#2c2c2c" style="font-family: Helvetica, arial, sans-serif; font-size: 15px; text-align:left;line-height:20px; padding: 5px 5px; background-color:#2c2c2c">
																			<div class="titulo" style="padding: 5px 5px;"><a target="_blank" style="color: #fff;font-size: 18px;text-decoration: none;" href="'.$cmEspecial->link[4].'">'.$cmEspecial->titulo[4].'</a></div>
																		</td>
																	</tr>
																	<tr>
																		<td style="font-family: Helvetica, arial, sans-serif; font-size: 14px; text-align:left;line-height: 20px; padding: 0px 10px; color:#ffffff" bgcolor="#2c2c2c">'.$cmEspecial->linhaFina[4].'</td>
																	</tr>
																	<tr>
																		<td width="100%" height="10" bgcolor="#2c2c2c"></td>
																	</tr>
																	<tr>
																		<td bgcolor="#2c2c2c">
																			<table align="left" border="0" cellpadding="0" cellspacing="0" class="tablet-button" summary="text" bgcolor="#2c2c2c">
																				<tbody>
																					<tr>
																						<td align="center" height="30" style=" background-color:#2c2c2c; background-clip: padding-box; color:#ffffff; padding: 0 10px"><span style="color:#ffffff;"><a target="_blank" href="'.$cmEspecial->link[4].'" style="color:#ffffff; font-size:14px; text-decoration:none;"><b>Leia mais</b></a>&nbsp;&nbsp;<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u='.$cmEspecial->link[4].'" style="text-decoration:none;"><img style="padding-left:1px; width:36px !important" border="0" src="https://s3.amazonaws.com/newsletter-gpadrao/icons/novarejo/2018/face_nota.jpg" alt="Compartilhe no Facebook"/></a><a target="_blank" href="http://twitter.com/share?text='.$cmEspecial->titulo[4].'&url='.$cmEspecial->link[4].'" style="text-decoration:none;"><img border="0" src="https://s3.amazonaws.com/newsletter-gpadrao/icons/novarejo/2018/twitter_nota.jpg" style=" width:36px !important" alt="Compartilhe no Twitter"/></a><a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url='.$cmEspecial->link[4].'&title='.$cmEspecial->titulo[4].'&source=News No Varejo" style="text-decoration:none;"><img style="padding-left:1px; width:36px !important" border="0" src="https://s3.amazonaws.com/newsletter-gpadrao/icons/cm/linkedin_nota.jpg" alt="Compartilhe no Linkedin"/></a></span></td>
																					</tr>
																				</tbody>
																			</table>
																		</td>
																	</tr>
																	<tr>
																		<td width="100%" height="10" bgcolor="#2c2c2c"></td>
																	</tr>
																</tbody>
															</table>
														</td>
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
										<td bgcolor="#ffffff" height="50" style="background-color: #ffffff;"></td>
									</tr>
									<tr>
										<td bgcolor="#ffffff">
											<table summary="text" width="100%" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
												<tbody>
													<tr>
														<td class="texto-alinhamento-right" style="font-size: 15px; line-height: 20px; font-family:Roboto,Open Sans, Arial,Tahoma, Helvetica, sans-serif; color:#555555; font-weight:normal; padding:0 10px 0 10px; color: #000000; display:block;">
															<center><b><a href="https://digital.consumidormoderno.com.br/" target="_blank"><img alt="Revista CONSUMIDOR MODERNO" src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/capas/cm/capaCM.png" style=" width: 180px !important "/></a></b></center>
														</td>
													</tr>
													<tr>
														<td class="texto-alinhamento-right" style="font-size: 14px; line-height: 20px; font-family:Arial, Helvetica, sans-serif; color:#555555; font-weight:normal; padding:0 10px 0 10px; color: #000000; display:block; text-align: center; text-transform:uppercase;"><b><a style="color:#000" href="https://digital.consumidormoderno.com.br/" target="_blank">CONFIRA A EDIÇÃO DIGITAL DA<br/>Revista CONSUMIDOR MODERNO</a></b></td>
													</tr>
													<tr>
														<td bgcolor="#ffffff" height="50" style="background-color: #ffffff;"></td>
													</tr>
													
													
													<tr>
														<td bgcolor="#2c2c2c" style="padding:15px 0;">
															<div>
																<p style="font-family: Helvetica, arial, sans-serif; font-size: 12px; text-align:center;">
																	<a target="_blank" href="https://www.facebook.com/consumidormoderno" style="text-decoration:none"><img src="https://s3.amazonaws.com/newsletter-gpadrao/icons/cm/face_rodape.jpg" alt="Siga no Facebook" title="Siga no Facebook" border="0" style="width: 49px !important" /> </a>
																	<a target="_blank" href="https://www.twitter.com/cmoderno" style="text-decoration:none"><img src="https://s3.amazonaws.com/newsletter-gpadrao/icons/cm/twitter_rodape.jpg" alt="Siga no Twitter" title="Siga no Twitter" style="width: 49px !important;padding-left:5px" border="0" /></a>
																	<a target="_blank" href="https://www.linkedin.com/showcase/consumidor-moderno/" style="text-decoration:none"><img src="https://s3.amazonaws.com/newsletter-gpadrao/icons/cm/linkedin_rodape.jpg" alt="Grupo no Linkedin" title="Grupo no Linkedin" style="width: 49px !important; padding-left:5px" border="0" /></a>
																	<a target="_blank" href="https://www.youtube.com/consumidormoderno" style="text-decoration:none"><img src="https://s3.amazonaws.com/newsletter-gpadrao/icons/cm/youtube_rodape.jpg" alt="Siga no YouTube" title="Siga no YouTube" style="width: 49px !important; padding-left:2px" border="0" /></a>
																	<a target="_blank" href="https://plus.google.com/+consumidormoderno" style="text-decoration:none"><img src="https://s3.amazonaws.com/newsletter-gpadrao/icons/cm/gplus_rodape.jpg" alt="Siga no Google+" title="Siga no Google+" style="width: 49px !important; padding-left:2px" border="0" /></a>
																	<a target="_blank" href="https://www.instagram.com/consumidormoderno" style="text-decoration:none"><img src="https://s3.amazonaws.com/newsletter-gpadrao/icons/cm/instagram_rodape.jpg" alt="Siga no Instagram" title="Siga no Instagram" style="width: 49px !important; padding-left:5px" border="0" /></a>
																</p>
															</div>
														</td>
													</tr>
													<tr>
														<td bgcolor="#ffffff" height="10" style="background-color: #ffffff;"></td>
													</tr>
													<tr>
														<td colspan="4" align="center" height="100">
															<a target="_blank" href="http://gpadrao.com.br/"><img alt="Padrão Eletrônico" style="width: 198px !important; margin-top:10px;" src="https://s3.amazonaws.com/newsletter-gpadrao/icons/novarejo/2018/logo-padrao.jpg" /></a>
														</td>
													</tr>
													<tr>
														<td bgcolor="#ffffff" height="20" style="background-color: #ffffff;"></td>
													</tr>
												</tbody>
											</table>
										</td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
				</body>
			</html>';

echo $conteudo;
$cmEspecial->salvaArquivo($conteudo);