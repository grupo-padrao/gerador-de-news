<?php
require_once("../autoload.php");

$cm7 = new formDefault();
$cm7->titulo = $_POST["titulo"];
$cm7->linhaFina = $_POST["linhaFina"];
$cm7->link = $_POST["link"];
$cm7->imagem = $_POST["imagem"];
$cm7->categoria = $_POST["categoria"];


$conteudo = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//BR-pt" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Consumidor Moderno</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<style>
		body{
		background-color: #cccccc;
		}
		table.container {
		margin: 10px auto 0px auto;
		font-size: 16px;
		line-height: 25px;
		font-family: Arial, sans-serif;
		}
		table.footer a {
		display: inline-block;
		width: auto;
		}
		a, img {
		border: 0;
		}
		table.columns img {
		display: block;
		}
		.table-lateral{
		width: 280px;
		}
		.imgCONAREC{
		width: 245px
		}
		.depoimentoCONAREC{
		width: 197px;
		}
		.tituloCentral{
		padding: 5px 80px 5px 80px;
		}
		.linhaCentral{
		padding: 0 80px 0 80px;
		}
		.redesCentral{
		padding: 0 80px 0 80px;
		}
		.tituloCom a{
		color: #ff9500;
		font-size: 18px;
		text-decoration: none
		}
		.tituloDef a{
		color: #000;
		font-size: 18px;
		text-decoration: none
		}
		.tituloExp a{
		color: #000;
		font-size: 18px;
		text-decoration: none
		}
		.tituloIno a{
		color: #000;
		font-size: 19px;
		line-height: 22px;
		text-decoration: none
		}
		.tituloCon a{
		color: #000;
		font-size: 18px;
		text-decoration: none
		}
		.experiencia{
		height: 5px;
		background-color:#BD4CBC
		}
		.inovacao{
		height: 5px;
		background-color:#F6EE26
		}
		.comportamento{
		height: 5px;
		background-color:#F7941E
		}
		.defesa{
		height: 5px;
		background-color:#3B94C4
		}
		.consumo{
		height: 5px;
		background-color:#6EC5A0
		}
		.tv{
		height: 5px;
		background-color:#ef0b0b
		}
		.conarec{
		height: 5px;
		background-color:#C0F20F
		}
		.summit{
		height: 5px;
		background-color:#323F83;
		}
		/*  Media Queries */
		@media only screen and (max-width: 600px) {
		table.container {
		margin: 0;
		}
		table.container,
		table.container img,
		table.columns td,
		table.footer table,
		table.footer table tbody,
		table.footer tr,
		table.footer td {
		width: 100%;
		height: auto;
		}
		table.columns td {
		margin-bottom: 10px;
		}
		.materias-nv{
		text-align: center;
		float: none;
		width: 100%;
		}
		.publicacoes-center{
		width: 50%;
		}
		table.footer {
		text-align: center;
		}
		table.footer td table {
		text-align: center;
		}
		.logo-nv{
		margin-top: 25%;
		}
		.materias-conarec{
		padding: 0;
		width: 100%;
		}
		.table-lateral{
		width: 100%;
		}
		.imgCONAREC{
		width: 100%
		}
		.depoimentoCONAREC{
		width: 100%;
		}
		.tituloCentral{
		padding: 10px 20px 10px 20px;
		}
		.linhaCentral{
		padding: 0 20px 0 20px;
		}
		.redesCentral{
		padding: 0 20px 0 20px;
		}
		}
		@media only screen and (max-width: 540px) {
		.txt-right{
		width: 100%;
		}
		.texto-alinhamento-right{
		text-align: center !important;
		}
		.img-left{
		width: 100%;
		}
		.txt-left{
		width: 100%;
		}
		.texto-alinhamento-left{
		text-align: center !important;
		}
		.img-right{
		width: 100%;
		}
		.participe-left{
		width:100%
		}
		.patrocine-right{
		width:100%
		}
		.txt-chat{
		width:100%
		}
		.img-chat{
		width:60%
		}
		.materias-conarec{
		padding: 0;
		width: 100%;
		}
		.table-lateral{
		width: 100%;
		}
		.imgCONAREC{
		width: 100%
		}
		linhaFina {
		padding: 10px 20px 20px 20px!important;
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
							<td bgcolor="#ffffff" height="20" style="padding: 0 20px; background-color: #ffffff;">
							</td>
						</tr>
						<tr>
							<td bgcolor="#ffffff" style="font-family: Arial,Helvetica,sans-serif; font-size:10px; color:#616161; text-align:right; padding:10px 0px; text-transform:uppercase;">
								<center>
								CASO NÃO ESTEJA VISUALIZANDO CORRETAMENTE ESTA MENSAGEM, <a target="_blank" style="color:#616161; text-decoration:none;" href="{{__view}}">ACESSE ESTE LINK</a></center>
							</td>
						</tr>
						<tr>
							<td bgcolor="#ffffff" height="20" style="padding: 0 20px; background-color: #ffffff;">
							</td>
						</tr>
						<tr>
							<td align="center" bgcolor="#ffffff" style="background-color: #ffffff;"><a href="https://www.consumidormoderno.com.br/" target="_blank"><img width="197" style="width:197px; height:95px; margin:0 auto!important; display:block;" src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/elementos/cm-quinzenal/topo-cm.jpg"></a>
						</td>
					</tr>
					<tr>
						<td bgcolor="#ffffff" height="20" style="padding: 0 20px; background-color: #ffffff;">
						</td>
					</tr>
					<tr>
						<td bgcolor="#FFFFFF" width="600" align="center" style="padding:0px 0px 0px 0px;" class="logo">
							<center>
							<a target="_blank" href="'.$cm7->link[0].'">
								<img src="'.$cm7->imagem[0].'" alt="Consumidor Moderno" width="487" border="0" class="img-nota" style="width:487px; display:block; border:none; outline:none; text-decoration:none; margin:0 auto!important;"/>
							</a>
							</center>
						</td>
					</tr>
					<tr>
						<td bgcolor="#ffffff" align="left" style="font-family: Arial,Helvetica,sans-serif; font-size: 14px; text-align:left; line-height: 20px; padding: 5px 55px;color:#545454;" >
							<b>'.$cm7->categoria[0].'</b>
						</td>
					</tr>
					<tr>
						<td bgcolor="#ffffff" style="font-family:Arial,Helvetica,sans-serif; color: #000000; text-align:left;line-height:20px; padding: 0px 20px 0px  55px;" >
							<div class="tituloDef" style="color: #000000;">
								<a target="_blank" href="'.$cm7->link[0].'" >
									<b>
									'.$cm7->titulo[0].'
									</b>
								</a>
							</div>																		</td>
						</tr>
						<tr>
							<td bgcolor="#ffffff" align="left" style="font-family: Arial,Helvetica,sans-serif; font-size: 14px; text-align:left; line-height: 20px; padding: 5px 20px 0px 55px;color:#000000" >
								'.$cm7->linhaFina[0].'
							</td>
						</tr>
						<tr>
							<td bgcolor="#ffffff" height="20" style="padding: 0 20px; background-color: #ffffff;">
							</td>
						</tr>
						<tr>
							<td bgcolor="#ffffff" style="font-family: helvetica, arial, sans-serif; font-size:14px; text-align:left; line-height: 20px; padding:0px 0px 0px 55px;color:#545454;">
								<table align="left" border="0" cellpadding="0" cellspacing="0" class="tablet-button" summary="text" bgcolor="#ffffff"><tbody>
									<tr>
										<td align="center" height="30" style=" background-color:#ffffff; background-clip: padding-box; color:#ffffff; padding: 0 0px ">
											<a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url='.$cm7->link[0].'" style="text-decoration:none;"><img src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/quadrado-preto/icon-linkedin.png" alt="Compartilhe no Linkedin" width="30" border="0" style="width:30px !important"/></a>
											&nbsp;
											<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u='.$cm7->link[0].'" style="text-decoration:none;"><img src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/quadrado-preto/icon-facebook.png" alt="Compartilhe no Facebook" width="30"  border="0" style=" width:30px !important; margin-left:7px; margin-right:7px;"/></a>
											&nbsp;
											<a target="_blank" href="http://twitter.com/share?url='.$cm7->link[0].'" style="text-decoration:none;"><img src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/quadrado-preto/icon-twitter.png" alt="Compartilhe no Twitter" width="30" border="0" style=" width:30px !important; margin-right:7px;"/></a>
											&nbsp;
											<a target="_blank" href="https://api.whatsapp.com/send?text=Veja esta matéria:'.$cm7->link[0].'" style="text-decoration:none;"><img src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/quadrado-preto/icon-whatsapp.png" alt="Compartilhe no Twitter" width="30" border="0" style=" width:30px !important"/></a>
										</td>
									</tr>
								</tbody>
							</table>
						</td>
					</tr>
					<tr>
						<td bgcolor="#ffffff" height="20" style="padding: 0 20px; background-color: #ffffff;">
						</td>
					</tr>
					<tr>
						<td bgcolor="#FFFFFF" width="600" align="center" style="padding:0px 0px 0px 0px;" class="logo">
							<center>
							<a target="_blank" href="'.$cm7->link[1].'">
								<img src="'.$cm7->imagem[1].'" alt="Consumidor Moderno" width="487" border="0" class="img-nota" style="width:487px; display:block; border:none; outline:none; text-decoration:none; margin:0 auto!important;"/>
							</a>
							</center>
						</td>
					</tr>
					<tr>
						<td bgcolor="#ffffff" align="left" style="font-family: Arial,Helvetica,sans-serif; font-size: 14px; text-align:left; line-height: 20px; padding: 5px 55px;color:#545454;" >
							<b>'.$cm7->categoria[1].'</b>
						</td>
					</tr>
					<tr>
						<td bgcolor="#ffffff" style="font-family:Arial,Helvetica,sans-serif; color: #000000; text-align:left;line-height:20px; padding: 0px 20px 0px  55px;" >
							<div class="tituloDef" style="color: #000000;">
								<a target="_blank" href="'.$cm7->link[1].'" >
									<b>
									'.$cm7->titulo[1].'
									</b>
								</a>
							</div>																		</td>
						</tr>
						<tr>
							<td bgcolor="#ffffff" align="left" style="font-family: Arial,Helvetica,sans-serif; font-size: 14px; text-align:left; line-height: 20px; padding: 5px 20px 0px 55px;color:#000000" >
								'.$cm7->linhaFina[1].'
							</td>
						</tr>
						<tr>
							<td bgcolor="#ffffff" height="20" style="padding: 0 20px; background-color: #ffffff;">
							</td>
						</tr>
						<tr>
							<td bgcolor="#ffffff" style="font-family: helvetica, arial, sans-serif; font-size:14px; text-align:left; line-height: 20px; padding:0px 0px 0px 55px;color:#545454;">
								<table align="left" border="0" cellpadding="0" cellspacing="0" class="tablet-button" summary="text" bgcolor="#ffffff"><tbody>
									<tr>
										<td align="center" height="30" style=" background-color:#ffffff; background-clip: padding-box; color:#ffffff; padding: 0 0px ">
											<a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url='.$cm7->link[1].'" style="text-decoration:none;"><img src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/quadrado-preto/icon-linkedin.png" alt="Compartilhe no Linkedin" width="30" border="0" style="width:30px !important"/></a>
											&nbsp;
											<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u='.$cm7->link[1].'" style="text-decoration:none;"><img src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/quadrado-preto/icon-facebook.png" alt="Compartilhe no Facebook" width="30"  border="0" style=" width:30px !important; margin-left:7px; margin-right:7px;"/></a>
											&nbsp;
											<a target="_blank" href="http://twitter.com/share?url='.$cm7->link[1].'" style="text-decoration:none;"><img src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/quadrado-preto/icon-twitter.png" alt="Compartilhe no Twitter" width="30" border="0" style=" width:30px !important; margin-right:7px;"/></a>
											&nbsp;
											<a target="_blank" href="https://api.whatsapp.com/send?text=Veja esta matéria:'.$cm7->link[1].'" style="text-decoration:none;"><img src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/quadrado-preto/icon-whatsapp.png" alt="Compartilhe no Twitter" width="30" border="0" style=" width:30px !important"/></a>
										</td>
									</tr>
								</tbody>
							</table>
						</td>
					</tr>
					<tr>
						<td bgcolor="#ffffff" height="20" style="padding: 0 20px; background-color: #ffffff;">
						</td>
					</tr>
					<tr>
						<td bgcolor="#FFFFFF" width="600" align="center" style="padding:0px 0px 0px 0px;" class="logo">
							<center>
							<a target="_blank" href="'.$cm7->link[2].'">
								<img src="'.$cm7->imagem[2].'" alt="Consumidor Moderno" width="487" border="0" class="img-nota" style="width:487px; display:block; border:none; outline:none; text-decoration:none; margin:0 auto!important;"/>
							</a>
							</center>
						</td>
					</tr>
					<tr>
						<td bgcolor="#ffffff" align="left" style="font-family: Arial,Helvetica,sans-serif; font-size: 14px; text-align:left; line-height: 20px; padding: 5px 55px;color:#545454;" >
							<b>'.$cm7->categoria[2].'</b>
						</td>
					</tr>
					<tr>
						<td bgcolor="#ffffff" style="font-family:Arial,Helvetica,sans-serif; color: #000000; text-align:left;line-height:20px; padding: 0px 20px 0px  55px;" >
							<div class="tituloDef" style="color: #000000;">
								<a target="_blank" href="'.$cm7->link[2].'" >
									<b>
									'.$cm7->titulo[2].'
									</b>
								</a>
							</div>																		</td>
						</tr>
						<tr>
							<td bgcolor="#ffffff" align="left" style="font-family: Arial,Helvetica,sans-serif; font-size: 14px; text-align:left; line-height: 20px; padding: 5px 20px 0px 55px;color:#000000" >
								'.$cm7->linhaFina[2].'
							</td>
						</tr>
						<tr>
							<td bgcolor="#ffffff" height="20" style="padding: 0 20px; background-color: #ffffff;">
							</td>
						</tr>
						<tr>
							<td bgcolor="#ffffff" style="font-family: helvetica, arial, sans-serif; font-size:14px; text-align:left; line-height: 20px; padding:0px 0px 0px 55px;color:#545454;">
								<table align="left" border="0" cellpadding="0" cellspacing="0" class="tablet-button" summary="text" bgcolor="#ffffff"><tbody>
									<tr>
										<td align="center" height="30" style=" background-color:#ffffff; background-clip: padding-box; color:#ffffff; padding: 0 0px ">
											<a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url='.$cm7->link[2].'" style="text-decoration:none;"><img src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/quadrado-preto/icon-linkedin.png" alt="Compartilhe no Linkedin" width="30" border="0" style="width:30px !important"/></a>
											&nbsp;
											<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u='.$cm7->link[2].'" style="text-decoration:none;"><img src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/quadrado-preto/icon-facebook.png" alt="Compartilhe no Facebook" width="30"  border="0" style=" width:30px !important; margin-left:7px; margin-right:7px;"/></a>
											&nbsp;
											<a target="_blank" href="http://twitter.com/share?url='.$cm7->link[2].'" style="text-decoration:none;"><img src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/quadrado-preto/icon-twitter.png" alt="Compartilhe no Twitter" width="30" border="0" style=" width:30px !important; margin-right:7px;"/></a>
											&nbsp;
											<a target="_blank" href="https://api.whatsapp.com/send?text=Veja esta matéria:'.$cm7->link[2].'" style="text-decoration:none;"><img src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/quadrado-preto/icon-whatsapp.png" alt="Compartilhe no Twitter" width="30" border="0" style=" width:30px !important"/></a>
										</td>
									</tr>
								</tbody>
							</table>
						</td>
					</tr>
					<tr>
						<td bgcolor="#ffffff" height="20" style="padding: 0 20px; background-color: #ffffff;">
						</td>
					</tr>
					<tr>
						<td bgcolor="#ffffff">
							<table align="left" border="0" cellpadding="0" cellspacing="0" class="tablet-button" summary="text" bgcolor="#ffffff">																					<tbody>
							</tbody>																			</table>																		</td>																		</tr>
							<tr>
								<td bgcolor="#ffffff" style="padding: 0 50px;">
									<table summary="text" width="100%" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
										<tbody>
											<tr>
												<td>
													<table summary="text" width="230" align="left" border="0" cellpadding="0" cellspacing="0" class="devicewidth materias-conarec">
														<tbody>
															<tr>
																<td width="230" align="center" class="devicewidth" bgcolor="#ffffff" style="">																		<a target="_blank" href="'.$cm7->link[3].'">																<img alt="Consumidor Moderno" border="0" src="'.$cm7->imagem[3].'" style="width:100%; display: inline-block;" title="Consumidor Moderno" /></a>															</td>														</tr>
																<tr>
																	<td>
																		<table summary="text" width="230" align="center" border="0" cellpadding="0" cellspacing="0" class="devicewidthinner materias-nv">
																			<tbody>
																				<tr>
																					<td bgcolor="#ffffff" align="left" style="font-family: Arial,Helvetica,sans-serif; font-size: 14px; text-align:left; line-height: 20px; padding: 5px 5px;color:#545454;" >
																						<b>'.$cm7->categoria[3].'</b>
																					</td>
																				</tr>
																				<tr>																			<td bgcolor="#fff" style="font-family: Helvetica, arial, sans-serif; font-size:15px; text-align:left;line-height:20px; padding-left: 0px; background-color:#fff" >
																					<div class="tituloIno" style="">																				<a target="_blank" href="'.$cm7->link[3].'" >																					<b>'.$cm7->titulo[3].'</b>
																					</a>																				</div>
																				</td>																		</tr>
																				<tr>
																					<td bgcolor="#ffffff" height="10" style="padding: 0 20px; background-color: #ffffff;">
																					</td>
																				</tr>
																				<tr>																			<td style="font-family: Helvetica, arial, sans-serif; font-size: 14px; text-align:left;line-height: 20px; padding-left:0; padding: 0px 0px; color:#000" bgcolor="#fff">															 '.$cm7->linhaFina[3].'</td>																	</tr>
																				<tr>																			<td width="100%" height="10" bgcolor="#fff"></td>																		</tr>
																				<tr>																			<td bgcolor="#fff">
																					<table align="left" border="0" cellpadding="0" cellspacing="0" class="tablet-button" summary="text" bgcolor="#fff" style="padding: 5px 0; background-color:#fff">																				<tbody>																						<tr>
																						<td  align="center" style=" background-color:#fff; background-clip: padding-box; color:#ffffff; padding: 0px; padding:5px 0 5px 5px;line-height: 15px;">
																							<span style="color:#ffffff;background-color:#fff;">																							<a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url='.$cm7->link[3].'" style="text-decoration:none;"><img src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/quadrado-preto/icon-linkedin.png" alt="Compartilhe no Linkedin" width="29" border="0" style="width:29px!important"/></a>
																							&nbsp;
																							<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u='.$cm7->link[3].'" style="text-decoration:none;"><img src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/quadrado-preto/icon-facebook.png" alt="Compartilhe no Facebook" width="29" border="0" style=" width:29px!important; margin-left:0px; margin-right:0px;"/></a>
																							&nbsp;
																							<a target="_blank" href="http://twitter.com/share?text='.$cm7->titulo[3].'url='.$cm7->link[3].'" style="text-decoration:none;"><img src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/quadrado-preto/icon-twitter.png" alt="Compartilhe no Twitter" width="29" border="0" style=" width:29px!important; margin-right:1px;"/></a>
																							&nbsp;
																							<a target="_blank" href="https://api.whatsapp.com/send?text=Veja esta matéria:'.$cm7->link[3].'" style="text-decoration:none;"><img src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/quadrado-preto/icon-whatsapp.png" alt="Compartilhe no Twitter" width="29" border="0" style=" width:29px!important"/></a>
																						</span>
																					</td>
																				</tr>
																			</tbody>																				</table>
																		</td>																		</tr>
																		<tr>
																			<td width="100%" height="10" bgcolor="#fff"></td>
																		</tr>
																	</tbody>														</table>
																</td>
															</tr>
														</tbody>
													</table>
													<table summary="text" width="230" align="right" border="0" cellpadding="0" cellspacing="0" class="devicewidth materias-conarec">
														<tbody>
															<tr>
																<td width="230" align="center" class="devicewidth" bgcolor="#ffffff" style="">																												<a target="_blank" href="'.$cm7->link[4].'">																<img alt="Consumidor Moderno" border="0" src="'.$cm7->imagem[4].'" style="width:100%; display: inline-block;" title="Consumidor Moderno" /></a>															</td>
															</tr>
															<tr>
																<td>
																	<table summary="text" width="230" align="center" border="0" cellpadding="0" cellspacing="0" class="devicewidthinner materias-nv">
																		<tbody>
																			<tr>
																				<td bgcolor="#ffffff" align="left" style="font-family: Arial,Helvetica,sans-serif; font-size: 14px; text-align:left; line-height: 20px; padding: 5px 5px;color:#545454;" >
																						<b>'.$cm7->categoria[4].'</b>
																					</td>
																				</tr>
																				<tr>																			<td bgcolor="#fff" style="font-family: Helvetica, arial, sans-serif; font-size:15px; text-align:left;line-height:20px; padding-left: 0px; background-color:#fff" >
																					<div class="tituloIno" style="">																				<a target="_blank" href="'.$cm7->link[4].'" >																			<b>'.$cm7->titulo[4].'</b>
																					</a>																				</div>
																				</td>																		</tr>
																				<tr>
																					<td bgcolor="#ffffff" height="10" style="padding: 0 20px; background-color: #ffffff;">
																					</td>
																				</tr>
																				<tr>																			<td style="font-family: Helvetica, arial, sans-serif; font-size: 14px; text-align:left;line-height: 20px; padding-left:0; padding: 0px 0px; color:#000" bgcolor="#fff">															'.$cm7->linhaFina[4].'</td>																	</tr>
																				<tr>																			<td width="100%" height="10" bgcolor="#fff"></td>																		</tr>
																				<tr>																			<td bgcolor="#fff">
																					<table align="left" border="0" cellpadding="0" cellspacing="0" class="tablet-button" summary="text" bgcolor="#fff" style="padding: 5px 0; background-color:#fff">																				<tbody>																						<tr>
																						<td  align="center" style=" background-color:#fff; background-clip: padding-box; color:#ffffff; padding: 0px; padding:5px 0 5px 5px;line-height: 15px;">
																							<span style="color:#ffffff;background-color:#fff;">																							<a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url='.$cm7->link[4].'" style="text-decoration:none;"><img src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/quadrado-preto/icon-linkedin.png" alt="Compartilhe no Linkedin" width="29" border="0" style="width:29px!important"/></a>
																							&nbsp;
																							<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u='.$cm7->link[4].'" style="text-decoration:none;"><img src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/quadrado-preto/icon-facebook.png" alt="Compartilhe no Facebook" width="29" border="0" style=" width:29px!important; margin-left:0px; margin-right:0px;"/></a>
																							&nbsp;
																							<a target="_blank" href="http://twitter.com/share?text=url='.$cm7->link[4].'" style="text-decoration:none;"><img src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/quadrado-preto/icon-twitter.png" alt="Compartilhe no Twitter" width="29" border="0" style=" width:29px!important; margin-right:1px;"/></a>
																							&nbsp;
																							<a target="_blank" href="https://api.whatsapp.com/send?text=Veja esta matéria:'.$cm7->link[4].'" style="text-decoration:none;"><img src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/quadrado-preto/icon-whatsapp.png" alt="Compartilhe no Twitter" width="29" border="0" style=" width:29px!important"/></a>
																						</span>
																					</td>
																				</tr>
																			</tbody>																				</table>
																		</td>																		</tr>
																			<tr>
																				<td width="100%" height="10" bgcolor="#fff"></td>
																			</tr>
																		</tbody>														</table>
																	</td>
																</tr>
															</tbody>
														</table>
													</td>
												</tr>
													<tr>
														<td bgcolor="#ffffff">
															<table summary="text" width="100%" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
																<tbody>
																</tbody>
															</table>
														</td>
													</tr>
												</table>
											</td>
										</tr>
										<tr>
											<td bgcolor="#ffffff" height="30" style="padding: 0 20px; background-color: #ffffff;">
											</td>
										</tr>
										<tr>
											<td bgcolor="#FFFFFF" width="600" align="center" style="padding:0px 0px 0px 0px;" class="logo">
							<center>
							<a target="_blank" href="'.$cm7->link[5].'">
								<img src="'.$cm7->imagem[5].'" alt="Consumidor Moderno" width="487" border="0" class="img-nota" style="width:487px; display:block; border:none; outline:none; text-decoration:none; margin:0 auto!important;"/>
							</a>
							</center>
						</td>
					</tr>
					<tr>
						<td bgcolor="#ffffff" align="left" style="font-family: Arial,Helvetica,sans-serif; font-size: 14px; text-align:left; line-height: 20px; padding: 5px 55px;color:#545454;" >
							<b>'.$cm7->categoria[5].'</b>
						</td>
					</tr>
					<tr>
						<td bgcolor="#ffffff" style="font-family:Arial,Helvetica,sans-serif; color: #000000; text-align:left;line-height:20px; padding: 0px 20px 0px  55px;" >
							<div class="tituloDef" style="color: #000000;">
								<a target="_blank" href="'.$cm7->link[5].'" >
									<b>
									'.$cm7->titulo[5].'
									</b>
								</a>
							</div>																		</td>
						</tr>
						<tr>
							<td bgcolor="#ffffff" align="left" style="font-family: Arial,Helvetica,sans-serif; font-size: 14px; text-align:left; line-height: 20px; padding: 5px 20px 0px 55px;color:#000000" >
								'.$cm7->linhaFina[5].'
							</td>
						</tr>
						<tr>
							<td bgcolor="#ffffff" height="20" style="padding: 0 20px; background-color: #ffffff;">
							</td>
						</tr>
						<tr>
							<td bgcolor="#ffffff" style="font-family: helvetica, arial, sans-serif; font-size:14px; text-align:left; line-height: 20px; padding:0px 0px 0px 55px;color:#545454;">
								<table align="left" border="0" cellpadding="0" cellspacing="0" class="tablet-button" summary="text" bgcolor="#ffffff"><tbody>
									<tr>
										<td align="center" height="30" style=" background-color:#ffffff; background-clip: padding-box; color:#ffffff; padding: 0 0px ">
											<a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url='.$cm7->link[5].'" style="text-decoration:none;"><img src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/quadrado-preto/icon-linkedin.png" alt="Compartilhe no Linkedin" width="30" border="0" style="width:30px !important"/></a>
											&nbsp;
											<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u='.$cm7->link[5].'" style="text-decoration:none;"><img src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/quadrado-preto/icon-facebook.png" alt="Compartilhe no Facebook" width="30"  border="0" style=" width:30px !important; margin-left:7px; margin-right:7px;"/></a>
											&nbsp;
											<a target="_blank" href="http://twitter.com/share?url='.$cm7->link[5].'" style="text-decoration:none;"><img src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/quadrado-preto/icon-twitter.png" alt="Compartilhe no Twitter" width="30" border="0" style=" width:30px !important; margin-right:7px;"/></a>
											&nbsp;
											<a target="_blank" href="https://api.whatsapp.com/send?text=Veja esta matéria:'.$cm7->link[5].'" style="text-decoration:none;"><img src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/quadrado-preto/icon-whatsapp.png" alt="Compartilhe no Twitter" width="30" border="0" style=" width:30px !important"/></a>
										</td>
									</tr>
								</tbody>
							</table>
						</td>
										</tr>
										<tr>
											<td bgcolor="#ffffff" height="30" style="padding: 0 20px; background-color: #ffffff;">
											</td>
										</tr>
										<tr>
											<td bgcolor="#FFFFFF" width="600" align="center" style="padding:0px 0px 0px 0px;" class="logo">
							<center>
							<a target="_blank" href="'.$cm7->link[6].'">
								<img src="'.$cm7->imagem[6].'" alt="Consumidor Moderno" width="487" border="0" class="img-nota" style="width:487px; display:block; border:none; outline:none; text-decoration:none; margin:0 auto!important;"/>
							</a>
							</center>
						</td>
					</tr>
					<tr>
						<td bgcolor="#ffffff" align="left" style="font-family: Arial,Helvetica,sans-serif; font-size: 14px; text-align:left; line-height: 20px; padding: 5px 55px;color:#545454;" >
							<b>'.$cm7->categoria[6].'</b>
						</td>
					</tr>
					<tr>
						<td bgcolor="#ffffff" style="font-family:Arial,Helvetica,sans-serif; color: #000000; text-align:left;line-height:20px; padding: 0px 20px 0px  55px;" >
							<div class="tituloDef" style="color: #000000;">
								<a target="_blank" href="'.$cm7->link[6].'" >
									<b>
									'.$cm7->titulo[6].'
									</b>
								</a>
							</div>																		</td>
						</tr>
						<tr>
							<td bgcolor="#ffffff" align="left" style="font-family: Arial,Helvetica,sans-serif; font-size: 14px; text-align:left; line-height: 20px; padding: 5px 20px 0px 55px;color:#000000" >
								'.$cm7->linhaFina[6].'
							</td>
						</tr>
						<tr>
							<td bgcolor="#ffffff" height="20" style="padding: 0 20px; background-color: #ffffff;">
							</td>
						</tr>
						<tr>
							<td bgcolor="#ffffff" style="font-family: helvetica, arial, sans-serif; font-size:14px; text-align:left; line-height: 20px; padding:0px 0px 0px 55px;color:#545454;">
								<table align="left" border="0" cellpadding="0" cellspacing="0" class="tablet-button" summary="text" bgcolor="#ffffff"><tbody>
									<tr>
										<td align="center" height="30" style=" background-color:#ffffff; background-clip: padding-box; color:#ffffff; padding: 0 0px ">
											<a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url='.$cm7->link[6].'" style="text-decoration:none;"><img src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/quadrado-preto/icon-linkedin.png" alt="Compartilhe no Linkedin" width="30" border="0" style="width:30px !important"/></a>
											&nbsp;
											<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u='.$cm7->link[6].'" style="text-decoration:none;"><img src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/quadrado-preto/icon-facebook.png" alt="Compartilhe no Facebook" width="30"  border="0" style=" width:30px !important; margin-left:7px; margin-right:7px;"/></a>
											&nbsp;
											<a target="_blank" href="http://twitter.com/share?url='.$cm7->link[6].'" style="text-decoration:none;"><img src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/quadrado-preto/icon-twitter.png" alt="Compartilhe no Twitter" width="30" border="0" style=" width:30px !important; margin-right:7px;"/></a>
											&nbsp;
											<a target="_blank" href="https://api.whatsapp.com/send?text=Veja esta matéria:'.$cm7->link[6].'" style="text-decoration:none;"><img src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/quadrado-preto/icon-whatsapp.png" alt="Compartilhe no Twitter" width="30" border="0" style=" width:30px !important"/></a>
										</td>
									</tr>
								</tbody>
							</table>
						</td>
									</tr>
									<tr>
										<td bgcolor="#ffffff" height="30" style="padding: 0 20px; background-color: #ffffff;">
										</td>
									</tr>
									<tr>
										<td bgcolor="#000000" height="30" style="padding: 0 20px; background-color: #000000;">
										</td>
									</tr>
									<tr>
										<td bgcolor="#000000" align="left" style="font-family: helvetica, arial, sans-serif; font-size: 20px; text-align:center; line-height: 20px; padding:10px 0px;color:#fff; background:#000000" >
											<a href="https://www.consumidormoderno.com.br/" style="color:#FFF; text-decoration:none;" target="_blank">
												<b>www.consumidormoderno.com.br</b>
											</a>
										</td>
									</tr>
									<tr>
										<td bgcolor="#000000" height="20" style="padding: 0 20px; background-color: #000000;">
										</td>
									</tr>
									<tr>
										<td bgcolor="#000000" style="padding:0px 0px;background:#000000;">
											<div>
												<p style="font-family: Helvetica, arial, sans-serif; font-size: 12px; text-align:center;"><a target="_blank" href="https://www.facebook.com/consumidormoderno" style="text-decoration:none"><img src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/quadrado-branco-1/icon-facebook.png" alt="Siga no Facebook" title="Siga no Facebook" border="0" style="width: 30px !important"/> </a>
												&nbsp;
												<a target="_blank" href="https://www.twitter.com/cmoderno" style="text-decoration:none"><img src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/quadrado-branco-1/icon-twitter.png" alt="Siga no Twitter" title="Siga no Twitter" style="width: 30px !important;padding-left:5px" border="0"/></a>
												&nbsp;
												<a target="_blank" href="https://www.linkedin.com/showcase/consumidor-moderno/" style="text-decoration:none"><img src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/quadrado-branco-1/icon-linkedin.png" alt="Grupo no Linkedin" title="Grupo no Linkedin" style="width: 30px !important; padding-left:5px" border="0"/></a>
												&nbsp;                                                             <a target="_blank" href="https://www.youtube.com/consumidormoderno" style="text-decoration:none"><img src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/quadrado-branco-1/icon-youtube.png" alt="Siga no YouTube" title="Siga no YouTube" style="width: 30px !important; padding-left:2px" border="0"/></a>
												&nbsp;
												<a target="_blank" href="https://www.instagram.com/consumidormoderno" style="text-decoration:none"><img src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/quadrado-branco-1/icon-instagram.png" alt="Siga no Instagram" title="Siga no Instagram" style="width: 30px !important; padding-left:5px" border="0"/></a>
											</p>
										</div>
									</td>
								</tr>
									<tr>
										<td bgcolor="#000000" height="20" style="padding: 0 20px; background-color: #000000;">
										</td>
									</tr>
									<tr>
										<td colspan="4" align="center" bgcolor="#000000" style="background:#000000;padding:0px 0">
											<a target="_blank" href="http://gpadrao.com.br/">
											<img src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/elementos/cm-quinzenal/logo-gpadrao.jpg" alt="Padrão Eletrônico" width="130" height="65" style="width:130px!important;   margin-top:10px;"  /></a></td>
										</tr>
										<tr>
											<td bgcolor="#000000" height="30" style="padding: 0 20px; background-color: #000000;">
											</td>
										</tr>
										<tr>
											<td bgcolor="#000000" style="font-family:Arial; font-size:10px; color:#ffffff; text-align:center; padding:15px 10px; text-transform:uppercase;">
												<a target="_BLANK" style="color:#ffffff;font-family: Arial,Helvetica,sans-serif; font-size: 10px;" href="{{__optout}}">DESCADASTRE-SE</a> CASO NÃO QUEIRA RECEBER MAIS E-MAILS
											</td>
										</tr>
									</table>
								</body>
							</html>';


echo $conteudo;
$cm7->salvaArquivo($conteudo);