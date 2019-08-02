<?php
require_once("../autoload.php");
$aed = new formDefault();
$aed->titulo = $_POST["titulo"];
$aed->linhaFina = $_POST["linhaFina"];
$aed->link = $_POST["link"];
$aed->imagem = $_POST["imagem"];


$conteudo = '

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta content="text/html; charset=UTF-8" http-equiv="Content-Type" /><title>A ERA DO DIÁLOGO</title><meta content="width=device-width, initial-scale=1.0" name="viewport" /><style type="text/css">body{background-color:#ccc}table.container{margin:0px auto 0px auto;font-size:16px;line-height:25px;font-family:Arial,sans-serif}table.footer a{display:inline-block;width:auto}a,img{border:0}table.columns img{display:block}.txtConarec{padding:0px 40px 0px 40px}.img-hover-palestrantes{line-height:125%;font-size:16px;display:inline-block;cursor:pointer;padding:2px 2px;-webkit-transition:all 0.5s ease;transition:all 0.5s ease}.img-hover-palestrantes:hover{-webkit-transform:scale(1.2);-ms-transform:scale(1.2);transform:scale(1.2);background-color #FFFFFF);-webkit-transition:all 0.2s ease;transition:all 0.2s ease}.marginLeft{margin:0 0 0 30px}.marginRight{margin:0 30px 0 0px}@media only screen and (max-width: 600px){table.container{margin:0}table.container, table.container img, table.columns td, table.footer table, table.footer table tbody, table.footer tr, table.footer td{width:100%;height:auto}table.columns td{margin-bottom:10px}.materias-nv{text-align:center;float:none;width:100%}.publicacoes-center{width:50%}table.footer{text-align:center}table.footer td table{text-align:center}.menu{width:100%}}@media only screen and (max-width: 540px){.txt-right{width:100%}.texto-alinhamento-right{text-align:center !important}.img-left{width:100%}.txt-left{width:100%}.texto-alinhamento-left{text-align:center !important}.img-right{width:100%}.participe-left{width:100%}.patrocine-right{width:100%}.txt-chat{width:100%}.img-chat{width:60%}.txtConarec{padding:0px 20px 0px 20px}.palestranteSolo{width:50% !important}.barraPalestras{display:none}.marginLeft{margin:0 auto}.marginRight{margin:0 auto}} </style></head><body style="margin: 0; padding: 0; background-color:#cccccc;" bgcolor="#cccccc">
<table border="0" cellpadding="0" cellspacing="0" style="background: #a7a6a6;" width="100%">
	<tbody>
		<tr>
			<td>
				<table align="center" border="0" cellpadding="0" cellspacing="0" class="container" width="600">
					<tbody>
						<tr>
							<td bgcolor="#000" style="font-family:Arial; font-size:10px; color:#ffffff; text-align:center; padding:10px 10px; text-transform:uppercase;background-color: #000;"> <a style="color:#ffffff;" target="_blank" href="{{__view}}">Visualize</a> no navegador</td>
						</tr>
						<tr>
							<td bgcolor="#322731" style="text-align:center;padding: 0px 0px 0px 0; background-color: #322731;">
								<a href="https://www.aeradodialogo.com.br/" style="text-decoration:none" target="_blank">
									<img border="0" src="http://www.aeradodialogo.com.br/ns/2019/02-Fevereiro/14-02/images/img_01.jpg" width="600" style=" display: inline-block; max-width:600px; width:100% !important;" title="A Era do Diálogo">
								</a>
							</td>
						</tr>
						<tr>
							<td bgcolor="#322731" height="20" style="background-color: #322731;"></td>
						</tr>
						<!-- START LAYOUT-7 -->
						<tr>
							<td align="center" bgcolor="#fff" class="fix-box" valign="top">
								<!-- start  container width 600px -->
								<table align="center" bgcolor="#fff" border="0" cellpadding="0" cellspacing="0" class="container" style="background-color: #322731;padding: 0 10px" width="100%">
									<tbody>
										<tr>
											<td valign="top">
												<!-- start container width 560px -->
												<table align="center" bgcolor="#fff" border="0" cellpadding="0" cellspacing="0" class="full-width img-right" style="background-color:#322731;" width="100%">
													<!--start space height -->
													<tbody>
														<!--end space height -->
														<!-- start image content -->
														<tr>
															<td bgcolor="#fff" valign="top" width="100%" style="background-color: #fff;">
																<!-- start content left -->
																<table align="left" bgcolor="#fff" border="0" cellpadding="0" cellspacing="0" class="full-width txt-left" width="45%" style="background:#fff;">
																	<!-- start text content -->
																	<tbody>
																		<tr>
																			<td bgcolor="#fff" valign="middle" style="background:#fff;padding: 15px 15px">
																				<table align="center" border="0" cellpadding="0" cellspacing="0" style="background-color: #fff;">
																					<tbody>
																						<tr>
																							<td style="background:#fff;font-size: 14px; line-height: 40px; font-family:Roboto,Open Sans, Arial,Tahoma, Helvetica, sans-serif; color:#555555; font-weight:normal; text-align:left;">
					<table>
						<tbody>
							<tr>
								<td style="background-color: #fff;padding: 0px 5px 0px 0px; color: #21304f; font-family: Arial, sans-serif;  text-align:left; line-height:20px">
									<a href="'.$aed->link[0].'" target="_blank">
										<img alt="'.$aed->titulo[0].'" border="0" src="'.$aed->imagem[0].'" style="display: inline-block;height: 261px;
										width: 258px;" title="EUROPA REGISTRA 59 MIL QUEIXAS COM BASE NA LEI DE PROTEÇÃO DE DADOS" />
									</a>
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
												<!-- end text content -->
											</tbody>
										</table>
										<!-- end content left -->
										<!-- start content left -->
										<table align="right" bgcolor="#fff" border="0" cellpadding="0" cellspacing="0" class="full-width txt-right" width="45%" style="background:#fff;">
											<!-- start text content -->
											<tbody>
												<tr>
													<td style="background-color: #fff;padding: 0px 10px 0px 5px; color: #000; font-family: Arial, sans-serif;  text-align:left; line-height:20px;">
														<div style="padding-bottom: 15px;">
															<br>
															<b><a style="color:#000; font-size:18px; text-decoration:none; text-transform:uppercase; display: block" href="'.$aed->link[0].'" target="_blank">
															'.$aed->titulo[0].'</a>
															</b>
															<!--<i style="color:#0c8325;text-decoration:underline;font-size: 12px;font-weight:bold;">por Autor Autor</i>-->
														</div>
														<div style="font-size: 13px;">'.$aed->linhaFina[0].'
															<a href="'.$aed->link[0].'" target="_blank" style="text-decoration:none; color:#01ffd2 "><b>>>LEIA MAIS</b></a>
														</div>
													</td>
												</tr>
												<tr>
													<td height="10" bgcolor="#fff" style="background-color:#fff;"></td>
												</tr>
												<tr>
													<td bgcolor="#fff" style="background: #fff; padding-top:5px; padding-bottom:5px;" class="tablet-sociais">
														<table summary="text" align="left" border="0" cellpadding="0" cellspacing="0" style="background-color:#fff;">
															<tbody>
																<tr>
																	<td style="padding-left:2px;">
																		<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u='.$aed->link[0].'" style="text-decoration:none;">
																			<img src="http://www.aeradodialogo.com.br/ns/2019/02-Fevereiro/14-02/images/icon-facebook.png" width="27" border="0" style="width:27px!important;display:inline-block; border:none; outline:none; text-decoration:none;" />
																		</a>
																	</td>
																	<td style="padding-left:2px;">
																		<a target="_blank" href="http://twitter.com/share?text='.$aed->titulo[0].'&url='.$aed->link[0].'" style="text-decoration:none;">
																			<img src="http://www.aeradodialogo.com.br/ns/2019/02-Fevereiro/14-02/images/icon-twitter.png" width="27" border="0"   style="width:27px!important;display:inline-block; border:none; outline:none; text-decoration:none;"/>
																		</a>
																	</td>
																	<td style="padding-left:2px;">
																		<a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url='.$aed->link[0].'" style="text-decoration:none;">
																			<img src="http://www.aeradodialogo.com.br/ns/2019/02-Fevereiro/14-02/images/icon-linkedin.png" width="27" border="0" style="width:27px!important;display:inline-block; border:none; outline:none; text-decoration:none;" />
																		</a>
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
								<!-- end image content -->
							</tbody>
						</table>
						<!-- end container width 560px -->
					</td>
				</tr>
			</tbody>
		</table>
		<!-- end  container width 600px -->
	</td>
</tr>
<!-- END LAYOUT-7 -->
<tr>
	<td bgcolor="#322731" height="20" style="background-color: #322731;"></td>
</tr>
<tr>
	<td bgcolor="#322731" height="25" style="background-color: #322731;"></td>
</tr>
<!-- START LAYOUT-7 -->
<tr>
	<td bgcolor="#fff" style="text-align:center; background-color: #fff;">
		<a href="'.$aed->link[1].'" style="text-decoration:none" target="_blank">
			<img alt="“'.$aed->titulo[1].'”" border="0" src="'.$aed->imagem[1].'" style="display:inline-block;  max-width:600px;width:100%;height: 362px;" title="“REDUZIMOS EM 18% O NÚMERO DE RECLAMAÇÕES NOS PROCONS EM 2018”" />
		</a>
	</td>
</tr>
<tr>
	<td style="background-color: #322731;;padding: 0px 10px 0px 10px; color: #fff; font-family: Arial, sans-serif;  text-align:left; line-height:20px;">
		<div style="padding-bottom: 15px;">
			<br>
			<b><a style="color:#fff; font-size:18px; text-decoration:none; text-transform:uppercase; display: inline-block" href="'.$aed->titulo[1].'" target="_blank">'.$aed->titulo[1].'</a><!--<i style="color:#01ffd2;text-decoration:underline;font-size: 12px;font-weight:bold;">por Autor Autor</i>-->
			<br>
			<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u='.$aed->link[1].'" style="text-decoration:none;">                                                                                                    <img src="http://www.aeradodialogo.com.br/ns/2019/02-Fevereiro/14-02/images/icon-facebook.png" width="27" border="0"   style="width:27px!important;display:inline-block; border:none; outline:none; text-decoration:none;"/>                                                                                               </a>
			<a target="_blank" href="http://twitter.com/share?text='.$aed->titulo[1].'&url='.$aed->link[1].'" style="text-decoration:none;">                                                                                  <img src="http://www.aeradodialogo.com.br/ns/2019/02-Fevereiro/14-02/images/icon-twitter.png" width="27" border="0"   style="width:27px!important;display:inline-block; border:none; outline:none; text-decoration:none;"/>
			</a>
			<a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url='.$aed->link[1].'" style="text-decoration:none;">                                                                                                    <img src="http://www.aeradodialogo.com.br/ns/2019/02-Fevereiro/14-02/images/icon-linkedin.png" width="27" border="0"   style="width:27px!important;display:inline-block; border:none; outline:none; text-decoration:none;"/>                                                                                               </a>
			</b>
		</div>
		<div style="font-size: 13px;">'.$aed->linhaFina[1].'<br> <a href="'.$aed->link[1].'" target="_blank" style="text-decoration:none; color:#01ffd2 "><b>>>LEIA MAIS</b></a>
		</div>
	</td>
</tr>
<!-- START LAYOUT-7 -->
<tr>
	<td align="center" bgcolor="#fff" class="fix-box" valign="top">
		<!-- start  container width 600px -->
		<table align="center" bgcolor="#fff" border="0" cellpadding="0" cellspacing="0" class="container" style="background-color: #fff;" width="100%">
			<tbody>
				<tr>
					<td valign="top">
						<!-- start container width 560px -->
						<table align="center" bgcolor="#fff" border="0" cellpadding="0" cellspacing="0" class="full-width img-right" style="background-color:#fff;" width="100%">
							<!--start space height -->
							<tbody>
								<!--end space height -->
								<!-- start image content -->
								<!-- end image content -->
							</tbody>
						</table>
						<!-- end container width 560px -->
					</td>
				</tr>
			</tbody>
		</table>
		<!-- end  container width 600px -->
	</td>
</tr>
<!-- END LAYOUT-7 -->
<tr>
	<td bgcolor="#322731" height="20" style="background-color: #322731;"></td>
</tr>
<tr>
	<td bgcolor="#322731" height="25" style="background-color: #322731;"></td>
</tr>
<!-- START LAYOUT-7 -->
<tr>
	<td align="center" bgcolor="#fff" class="fix-box" valign="top">
		<!-- start  container width 600px -->
		<table align="center" bgcolor="#fff" border="0" cellpadding="0" cellspacing="0" class="container" style="background-color: #322731;padding: 0 10px" width="100%">
			<tbody>
				<tr>
					<td valign="top">
						<!-- start container width 560px -->
						<table align="center" bgcolor="#fff" border="0" cellpadding="0" cellspacing="0" class="full-width img-right" style="background-color:#322731;" width="100%">
							<!--start space height -->
							<tbody>
								<!--end space height -->
								<!-- start image content -->
								<tr>
									<td bgcolor="#fff" valign="top" width="100%" style="background:#fff;">
										<!-- start content left -->
										<table align="left" bgcolor="#fff" border="0" cellpadding="0" cellspacing="0" class="full-width txt-left" width="45%">
											<!-- start text content -->
											<tbody>
												<tr>
													<td bgcolor="#fff" valign="middle" style="background:#fff;padding: 15px 15px">
														<table align="center" border="0" cellpadding="0" cellspacing="0">
															<tbody>
																<tr>
																	<td style="background:#fff;font-size: 14px; line-height: 40px; font-family:Roboto,Open Sans, Arial,Tahoma, Helvetica, sans-serif; color:#555555; font-weight:normal; text-align:left;">
																		<table>
																			<tbody>
																				<tr>
																					<td style="background-color: #fff;padding: 0px 5px 0px 0px; color: #21304f; font-family: Arial, sans-serif;  text-align:left; line-height:20px">
									<a href="'.$aed->link[2].'" target="_blank">
										<img alt="'.$aed->titulo[2].'" border="0" src="'.$aed->imagem[2].'" style="display: inline-block;height: 261px;
										width: 258px;" title="EUROPA REGISTRA 59 MIL QUEIXAS COM BASE NA LEI DE PROTEÇÃO DE DADOS" />
									</a>
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
												<!-- end text content -->
											</tbody>
										</table>
										<!-- end content left -->
										<!-- start content left -->
										<table align="right" bgcolor="#fff" border="0" cellpadding="0" cellspacing="0" class="full-width txt-right" width="45%">
											<!-- start text content -->
											<tbody>
												<tr>
													<td style="background-color: #fff;padding: 0px 10px 0px 5px; color: #000; font-family: Arial, sans-serif;  text-align:left; line-height:20px;">
														<div style="padding-bottom: 15px;">
															<br>
															<b><a style="color:#000; font-size:18px; text-decoration:none; text-transform:uppercase; display: block" href="'.$aed->link[2].'" target="_blank">
		'.$aed->titulo[2].'</a>
															</b>
															<!--<i style="color:#0c8325;text-decoration:underline;font-size: 12px;font-weight:bold;">por Autor Autor</i>-->
														</div>
														<div style="font-size: 13px;">'.$aed->titulo[2].'
															<a href="'.$aed->link[2].'" target="_blank" style="text-decoration:none; color:#01ffd2 "><b>>>LEIA MAIS</b></a>
														</div>
													</td>
												</tr>
												<tr>
													<td height="10" bgcolor="#fff" style="background-color:#fff;"></td>
												</tr>
												<tr>
													<td bgcolor="#fff" style="background-color:#fff;padding-top:5px; padding-bottom:5px;" class="tablet-sociais">
														<table summary="text" align="left" border="0" cellpadding="0" cellspacing="0" style="background-color:#fff;">
															<tbody>
																<tr>
																	<td style="padding-left:2px;">
																		<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u='.$aed->link[2].'" style="text-decoration:none;">
																			<img src="http://www.aeradodialogo.com.br/ns/2019/02-Fevereiro/14-02/images/icon-facebook.png" width="27" border="0" style="width:27px!important;display:inline-block; border:none; outline:none; text-decoration:none;" />
																		</a>
																	</td>
																	<td style="padding-left:2px;">
																		<a target="_blank" href="http://twitter.com/share?text='.$aed->titulo[2].'&url='.$aed->link[2].'" style="text-decoration:none;">
																			<img src="http://www.aeradodialogo.com.br/ns/2019/02-Fevereiro/14-02/images/icon-twitter.png" width="27" border="0"   style="width:27px!important;display:inline-block; border:none; outline:none; text-decoration:none;"/>
																		</a>
																	</td>
																	<td style="padding-left:2px;">
																		<a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url='.$aed->link[2].'" style="text-decoration:none;">
																			<img src="http://www.aeradodialogo.com.br/ns/2019/02-Fevereiro/14-02/images/icon-linkedin.png" width="27" border="0" style="width:27px!important;display:inline-block; border:none; outline:none; text-decoration:none;" />
																		</a>
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
								<!-- end image content -->
							</tbody>
						</table>
						<!-- end container width 560px -->
					</td>
				</tr>
			</tbody>
		</table>
		<!-- end  container width 600px -->
	</td>
</tr>
<!-- END LAYOUT-7 -->
<tr>
	<td bgcolor="#322731" height="20" style="background-color: #322731;"></td>
</tr>
<tr>
	<td bgcolor="#322731" height="25" style="background-color: #322731;"></td>
</tr>
<tr>
	<td style="padding: 30px 30px; background:#00a652;text-align: center;color:#FFF; font-size:15px;text-transform:uppercase;">
		<b style="font-size: 25px;padding-bottom:20px;">QUER MAIS CONTEÚDO?</b>
	<br />ENTÃO CONHEÇA OS EVENTOS DO GRUPO PADRÃO 2019:</td>
</tr>
<tr>
	<td style="padding: 10px 30px; background:#fff;text-align: center;color:#FFF; font-size:15px;text-transform:uppercase;">
		<a href="https://www.whow.com.br/" target="_blank">
			<img src="http://www.aeradodialogo.com.br/ns/2019/02-Fevereiro/14-02/images/whow-logo.png" width="189" style="max-width:189px;">
		</a>
		<a href="https://www.conarec.com.br/" target="_blank">
			<img src="http://www.aeradodialogo.com.br/ns/2019/02-Fevereiro/14-02/images/conarec-logo.png" width="154" style="max-width:154px;">
		</a>
	</td>
</tr>
<tr>
	<td bgcolor="#00a652" height="35" style="background-color: #00a652;"></td>
</tr>
<tr>
	<td bgcolor="#322731" height="25" style="background-color: #322731;"></td>
</tr>
<tr>
	<td style="padding: 20px 0; background:#302630;text-align: center;color:#FFF; text-transform:uppercase;font-size: 13px;font-weight:bold">
		<img src="http://www.aeradodialogo.com.br/ns/2019/02-Fevereiro/14-02/images/aed_newsconteudo_03.jpg" style="width:100%">
		<br>
		<br>Royal Palm Plaza
	<br>Av. Royal Palm, 277 - Campinas – SP  </td>
</tr>
<tr>
	<td bgcolor="#302630" style="padding:5px 0; background:#302630">
		<div>
			<p style="font-family: Helvetica, arial, sans-serif; font-size: 12px; text-align:center;">
				<a target="_blank" href="https://www.facebook.com/AEradoDialogo" style="text-decoration:none">
					<img src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/branco/icon-facebook.png
					" alt="Siga no Facebook" title="Siga no Facebook" border="0" style="width: 40px !important" />
				</a>
				<a target="_blank" href="https://twitter.com/aeradodialogo" style="text-decoration:none">
					<img src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/branco/icon-twitter.png
					" alt="Siga no Twitter" title="Siga no Twitter" style="width: 44px !important;padding-left:5px" border="0" />
				</a>
				<a target="_blank" href="https://www.instagram.com/consumidormoderno/" style="text-decoration:none">
					<img src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/branco/icon-instagram.png
					" alt="Grupo no Linkedin" title="Grupo no Linkedin" style="width: 41px !important; padding-left:5px" border="0" />
				</a>
				<a href="https://www.linkedin.com/showcase/consumidor-moderno/" target="_blank">
					<img src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/branco/icon-linkedin.png
					" alt="Siga no YouTube" title="Siga no YouTube" style="width: 42px !important; padding-left:2px" border="0" />
				</a>
				<a href="https://www.youtube.com/user/consumidormoderno" target="_blank">
					<img src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/branco/icon-youtube.png
					" alt="Siga no Instagram" title="Siga no Instagram" style="width: 41px !important; padding-left:5px" border="0" />
				</a>
			</p>
		</div>
	</td>
</tr>
<tr>
	<td style="padding: 20px 0; background:#302630;text-align: center;color:#FFF; font-size: 30px;font-weight: 100;"> <a href="https://www.aeradodialogo.com.br/" style="text-decoration:none; color:#FFF;">www.eradodialogo.com.br</a>
</td>
</tr>
<tr>
<td bgcolor="#322731" height="25" style="background-color: #322731;"></td>
</tr>
<tr>
<td bgcolor="#FFFFFF">
	<img src="http://www.aeradodialogo.com.br/makt/2019/10_campanha/images/img_12.jpg" width="600" border="0" style="max-width:600px;width:100%;display:inline-block; border:none; outline:none; text-decoration:none;" />
</td>
</tr>
<tr>
<td style="padding: 0px; background:#fff;text-align: center;color:#FFF; text-transform:uppercase;font-size: 13px;font-weight:bold">
	<a href="http://www.gpadrao.com.br" target="_blank">
		<img src="http://www.aeradodialogo.com.br/ns/2019/02-Fevereiro/14-02/images/rodape.jpg" style="width:100%">
	</a> </td>
</tr>
</table>
</table>
</table>
</table>
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
</body></html>';

echo $conteudo;

$aed->salvaArquivo($conteudo);