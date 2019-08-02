<?php
require_once("../autoload.php");
$bots = new formDefault();
$bots->titulo = $_POST["titulo"];
$bots->linhaFina = $_POST["linhaFina"];
$bots->link = $_POST["link"];
$bots->imagem = $_POST["imagem"];

$conteudo = '

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//BR-pt" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/><title>Seminário BOTs e IA</title><meta name="viewport" content="width=device-width, initial-scale=1.0"/><style>body{background-color:#ccc}table.container{margin:10px auto 0px auto;font-size:16px;line-height:25px;font-family:Arial,sans-serif}table.footer a{display:inline-block;width:auto}a,img{border:0}table.columns img{display:block}.table-lateral{width:280px}.imgCONAREC{width:245px}.depoimentoCONAREC{width:197px}.tituloCentral{padding:5px 80px 5px 80px}.linhaCentral{padding:0 80px 0 80px}.redesCentral{padding:0 80px 0 80px}.tituloCom a{color:#000;font-size:18px;text-decoration:none}.tituloDef a{color:#000;font-size:18px;text-decoration:none}.tituloExp a{color:#000;font-size:18px;text-decoration:none}.tituloIno a{color:#000;font-size:18px;text-decoration:none}.tituloCon a{color:#000;font-size:18px;text-decoration:none}.experiencia{height:5px;background-color:#BD4CBC}.inovacao{height:5px;background-color:#F6EE26}.comportamento{height:5px;background-color:#F7941E}.defesa{height:5px;background-color:#3B94C4}.consumo{height:5px;background-color:#6EC5A0}.tv{height:5px;background-color:#ef0b0b}.conarec{height:5px;background-color:#C0F20F}.summit{height:5px;background-color:#323F83}@media only screen and (max-width: 600px){table.container{margin:0}table.container, table.container img, table.columns td, table.footer table, table.footer table tbody, table.footer tr, table.footer td{width:100%;height:auto}table.columns td{margin-bottom:10px}.materias-nv{text-align:center;float:none;width:100%}.publicacoes-center{width:50%}table.footer{text-align:center}table.footer td table{text-align:center}.logo-nv{margin-top:25%}.materias-conarec{padding:0;width:100%}.table-lateral{width:100%}.imgCONAREC{width:100%}.depoimentoCONAREC{width:100%}.tituloCentral{padding:10px 20px 10px 20px}.linhaCentral{padding:0 20px 0 20px}.redesCentral{padding:0 20px 0 20px}}@media only screen and (max-width: 540px){.txt-right{width:100%}.texto-alinhamento-right{text-align:center !important}.img-left{width:100%}.txt-left{width:100%}.texto-alinhamento-left{text-align:center !important}.img-right{width:100%}.participe-left{width:100%}.patrocine-right{width:100%}.txt-chat{width:100%}.img-chat{width:60%}.materias-conarec{padding:0;width:100%}.table-lateral{width:100%}.imgCONAREC{width:100%}.img-nota-media{width:100% !important}} </style></head><body style="margin: 0; padding: 0; background-color:#cccccc;" bgcolor="#cccccc">
<table summary="text" border="0" cellpadding="0" cellspacing="0" width="100%" style="background: #cccccc;">
	<tr>
		<td>
			<table summary="text" class="container" align="center" border="0" cellpadding="0" cellspacing="0" width="600">
				<tr>
					<td bgcolor="#ffffff" style="font-family:Arial; font-size:14px; color:#000000; text-align:right; padding:10px 40px">
						<center style="font-family: Arial,Helvetica,sans-serif; font-size: 10px;">Caso n&atilde;o esteja visualizando corretamente esta mensagem, <a target="_blank" href="{{__view}}">acesse este link</a>
						</center>
					</td>
				</tr>
				<tr>
					<td bgcolor="#FFFFFF" width="600" style="padding: 0px 0 0px 0px;" class="logo">
						<div align="center">
							<a target="_blank" href="http://www.seminariodebots.com.br/">
								<img border="0" alt="Seminário de Bots e IA" style="display:block; border:none; outline:none; text-decoration:none;" src="http://s3.amazonaws.com/newsletter-gpadrao/seminarios/bots/elementos/topo-s-bots.jpg" class="img-nota" />
							</a>
						</div>
					</td>
				</tr>
				<tr>
					<td bgcolor="#ffffff" height="30" style="background-color: #ffffff;"></td>
				</tr>
				<tr>
					<td bgcolor="#FFFFFF" align="center" width="600" style="padding: 0px 0 0px 0px;" class="logo">
						<div align="center">
							<a target="_blank" href="'.$bots->link[0].'">
								<img border="0" alt="'.$bots->titulo[0].'" style="display:block; border:none; outline:none; text-decoration:none; width:95%; text-align:center; margin:0 auto;" src="'.$bots->imagem[0].'" class="img-nota" />
							</a>
						</div>
					</td>
				</tr>
				<tr>
					<td bgcolor="#ffffff" style="font-family: Helvetica, arial, sans-serif; color: #000000; text-align:left;line-height:20px; padding: 0px 20px">
						<div class="tituloDef" style="color: #000000;">
							<a target="_blank" href="https://www.seminariodebots.com.br/2019/05/06/educar-ias-facebook/">
								<b>
								'.$bots->titulo[0].'
								</b>
							</a>
						</div>
					</td>
				</tr>
				<tr>
					<td bgcolor="#fff" align="left" style="font-family: helvetica, arial, sans-serif; font-size: 14px; text-align:left; line-height: 20px; padding: 5px 20px;color:#000;background-color:#fff;">'.$bots->linhaFina[0].'</td>
				</tr>
				<tr>
					<td align="left" style=" background-color:#ffffff; background-clip: padding-box; color:#ffffff;padding: 0px 0 0px 15px ">   <span style="color:#ffffff;">
						<a target="_blank" href="'.$bots->link[0].'" style="color:#ffffff; font-size:14px; text-decoration:none;">
							<img src="https://s3.amazonaws.com/newsletter-gpadrao/seminarios/bots/elementos/botao.jpg" width="141" style="width: 141px!important;">
						</a>                                                                                                                                                </span>
					</td>
				</tr>
				<tr>
					<td align="left" style=" background-color:#fff; background-clip: padding-box; color:#ffffff; padding: 0px 20px">    <span style="color:#ffffff;background-color:#fff;">
						<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u='.$bots->link[0].'" style="text-decoration:none;">                                                                                                    <img src="http://www.seminariodebots.com.br/ns/2019/02-Fevereiro/14-02/news-do-dia/images/icon-facebook.png" alt="Compartilhe no Facebook" width="30" border="0" style="padding-left:1px; width:30px!important" />                                                                                              </a>                                                                                                <a target="_blank" href="http://twitter.com/share?text='.$bots->titulo[0].'&url='.$bots->link[0].'" style="text-decoration:none;">                                                                                  <img src="http://www.seminariodebots.com.br/ns/2019/02-Fevereiro/14-02/news-do-dia/images/icon-twitter.png" alt="Compartilhe no Twitter" width="30" border="0" style=" width:30px!important;"/>
					</a>
					<a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url='.$bots->link[0].'" style="text-decoration:none;">                                                                                                  <img src="http://www.seminariodebots.com.br/ns/2019/02-Fevereiro/14-02/news-do-dia/images/icon-linkedin.png" alt="Compartilhe no Linkedin" width="30" border="0" style="padding-left:1px; width:30px!important" />                                                                                              </a>
					
					
				</span>
			</td>
		</tr>
		<tr>
			<td bgcolor="#ffffff" height="30" style="background-color: #ffffff;"></td>
		</tr>
		<tr>
			<td bgcolor="#FFFFFF" align="center" width="600" style="padding: 0px 0 0px 0px;" class="logo">
				<div align="center">
					<a target="_blank" href="'.$bots->link[1].'">
						<img border="0" alt="'.$bots->titulo[1].'" style="display:block; border:none; outline:none; text-decoration:none; width:95%; text-align:center; margin:0 auto;" src="'.$bots->imagem[1].'" class="img-nota" />
					</a>
				</div>
			</td>
		</tr>
		<tr>
			<td bgcolor="#ffffff" style="font-family: Helvetica, arial, sans-serif; color: #000000; text-align:left;line-height:20px; padding: 0px 20px">
				<div class="tituloDef" style="color: #000000;">
					<a target="_blank" href="'.$bots->link[1].'">
						<b>
						'.$bots->titulo[1].'
						</b>
					</a>
				</div>
			</td>
		</tr>
		<tr>
			<td bgcolor="#fff" align="left" style="font-family: helvetica, arial, sans-serif; font-size: 14px; text-align:left; line-height: 20px; padding: 5px 20px;color:#000; background-color:#fff">'.$bots->linhaFina[1].'</td>
		</tr>
		<tr>
			<td align="left" style=" background-color:#ffffff; background-clip: padding-box; color:#ffffff;padding: 0px 0 0px 15px ">   <span style="color:#ffffff;">
				<a target="_blank" href="'.$bots->link[1].'" style="color:#ffffff; font-size:14px; text-decoration:none;">
					<img src="https://s3.amazonaws.com/newsletter-gpadrao/seminarios/bots/elementos/botao.jpg" width="141" style="width: 141px!important;">
				</a>                                                                                                                                                </span>
			</td>
		</tr>
		<tr>
			<td align="left" style=" background-color:#fff; background-clip: padding-box; color:#ffffff; padding: 0px 20px">    <span style="color:#ffffff;background-color:#fff;">
				<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u='.$bots->link[1].'" style="text-decoration:none;">                                                                                                    <img src="http://www.seminariodebots.com.br/ns/2019/02-Fevereiro/14-02/news-do-dia/images/icon-facebook.png" alt="Compartilhe no Facebook" width="30" border="0" style="padding-left:1px; width:30px!important" />                                                                                              </a>                                                                                                <a target="_blank" href="http://twitter.com/share?text='.$bots->titulo[1].'&url='.$bots->link[1].'" style="text-decoration:none;">                                                                                  <img src="http://www.seminariodebots.com.br/ns/2019/02-Fevereiro/14-02/news-do-dia/images/icon-twitter.png" alt="Compartilhe no Twitter" width="30" border="0" style=" width:30px!important;"/>
			</a>
			<a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url='.$bots->link[1].'" style="text-decoration:none;">                                                                                                  <img src="http://www.seminariodebots.com.br/ns/2019/02-Fevereiro/14-02/news-do-dia/images/icon-linkedin.png" alt="Compartilhe no Linkedin" width="30" border="0" style="padding-left:1px; width:30px!important" />                                                                                              </a>
		</span>
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
									<td width="280" height="180" align="center" class="devicewidth" bgcolor="#ffffff">
										<a target="_blank" href="'.$bots->link[2].'">
											<img class="img-nota-media" alt="'.$bots->titulo[2].'" border="0" src="'.$bots->imagem[2].'" style="width:90%; display: inline-block; text-align:left;" title="Seminário de Bots e IA" />
										</a>
									</td>
								</tr>
								<tr>
									<td>
										<table summary="text" width="280" align="center" border="0" cellpadding="0" cellspacing="0" class="devicewidthinner table-lateral">
											<tbody>
												<tr>
													<td bgcolor="#ffffff" style="font-family: Helvetica, arial, sans-serif; font-size: 1px; text-align:left;line-height:20px; padding: 0px 0px; background-color:#ffffff">
														<div class="tituloCon" style="padding: 5px 10px">
															<a target="_blank" href="'.$bots->link[2].'">
															<b>'.$bots->titulo[2].'</b></a>
														</div>
													</td>
												</tr>
												<tr>
													<td style="font-family: Helvetica, arial, sans-serif; font-size: 14px; text-align:left;line-height: 20px; padding: 0px 10px; color:#000" bgcolor="#ffffff">'.$bots->linhaFina[2].'</td>
												</tr>
												<tr>
													<td width="100%" height="10" bgcolor="#ffffff"></td>
												</tr>
												<tr>
													<td bgcolor="#ffffff">
														<table align="left" border="0" cellpadding="0" cellspacing="0" class="tablet-button" summary="text" bgcolor="#2c2c2c">
															<tbody>
																<tr>
																	<td align="center" height="30" style=" background-color:#fff; background-clip: padding-box; color:#ffffff; padding: 0 0px 0px 7px"> <span style="color:#ffffff;">
																		<a target="_blank" href="'.$bots->link[2].'" style="color:#fff; font-size:14px; text-decoration:none;">
																			<img src="https://s3.amazonaws.com/newsletter-gpadrao/seminarios/bots/elementos/botao.jpg" width="141" style="width: 141px!important;" title="LEIA MAIS">
																		</a>                                                                                                                                                                                            </span>
																	</td>
																</tr>
																<tr>
																	<td align="left" style=" background-color:#fff; background-clip: padding-box; color:#ffffff; padding: 0px 7px;">    <span style="color:#ffffff;background-color:#fff;">
																		<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u='.$bots->link[2].'" style="text-decoration:none;">                                                                                                    <img src="http://www.seminariodebots.com.br/ns/2019/02-Fevereiro/14-02/news-do-dia/images/icon-facebook.png" alt="Compartilhe no Facebook" width="30" border="0" style="padding-left:1px; width:30px!important" />                                                                                              </a>                                                                                                <a target="_blank" href="http://twitter.com/share?text='.$bots->titulo[2].'&url='.$bots->link[2].'" style="text-decoration:none;">                                                                                  <img src="http://www.seminariodebots.com.br/ns/2019/02-Fevereiro/14-02/news-do-dia/images/icon-twitter.png" alt="Compartilhe no Twitter" width="30" border="0" style=" width:30px!important;"/>
																	</a>
																	<a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url='.$bots->link[2].'" style="text-decoration:none;">                                                                                                  <img src="http://www.seminariodebots.com.br/ns/2019/02-Fevereiro/14-02/news-do-dia/images/icon-linkedin.png" alt="Compartilhe no Linkedin" width="30" border="0" style="padding-left:1px; width:30px!important" />                                                                                              </a>
																	
																	
																</span>
															</td>
														</tr>
													</tbody>
												</table>
											</td>
										</tr>
										<tr>
											<td width="100%" height="10" bgcolor="#ffffff"></td>
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
							<td width="280" height="180" align="center" class="devicewidth" bgcolor="#ffffff">
								<a target="_blank" href="'.$bots->link[3].'">
									<img class="img-nota-media" alt="'.$bots->titulo[3].'" border="0" src="'.$bots->imagem[3].'" style="width:90%; display: inline-block; text-align:left;" title="Seminário de Bots e IA" />
								</a>
							</td>
						</tr>
						<tr>
							<td>
								<table summary="text" width="280" align="center" border="0" cellpadding="0" cellspacing="0" class="devicewidthinner materias-nv">
									<tbody>
										<tr>
											<td bgcolor="#ffffff" style="font-family: Helvetica, arial, sans-serif; font-size: 15px; text-align:left;line-height:20px; padding: 0px 0px; background-color:#ffffff">
												<div class="tituloDef" style="padding: 5px 10px">
													<a target="_blank" href="'.$bots->link[3].'">
													<b>'.$bots->titulo[3].' </b></a>
												</div>
											</td>
										</tr>
										<tr>
											<td style="font-family: Helvetica, arial, sans-serif; font-size: 14px; text-align:left;line-height: 20px; padding: 0px 10px; color:#000" bgcolor="#ffffff">'.$bots->linhaFina[3].'</td>
										</tr>
										<tr>
											<td width="100%" height="10" bgcolor="#ffffff"></td>
										</tr>
										<tr>
											<td bgcolor="#ffffff">
												<table align="left" border="0" cellpadding="0" cellspacing="0" class="tablet-button" summary="text" bgcolor="#2c2c2c">
													<tbody>
														<tr>
															<td align="center" height="30" style=" background-color:#fff; background-clip: padding-box; color:#ffffff; padding: 0 0px 0px 7px"> <span style="color:#ffffff;">
																<a target="_blank" href="'.$bots->link[3].'" style="color:#fff; font-size:14px; text-decoration:none;">
																	<img src="https://s3.amazonaws.com/newsletter-gpadrao/seminarios/bots/elementos/botao.jpg" width="141" style="width: 141px!important;" title="LEIA MAIS">
																</a>                                                                                                                                                                                            </span>
															</td>
														</tr>
														<tr>
															<td align="left" style=" background-color:#fff; background-clip: padding-box; color:#ffffff; padding: 0px 7px;">    <span style="color:#ffffff;background-color:#fff;">
																<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u='.$bots->link[3].'" style="text-decoration:none;">                                                                                                    <img src="http://www.seminariodebots.com.br/ns/2019/02-Fevereiro/14-02/news-do-dia/images/icon-facebook.png" alt="Compartilhe no Facebook" width="30" border="0" style="padding-left:1px; width:30px!important" />                                                                                              </a>                                                                                                <a target="_blank" href="http://twitter.com/share?text='.$bots->titulo[3].'&url='.$bots->link[3].'" style="text-decoration:none;">                                                                                  <img src="http://www.seminariodebots.com.br/ns/2019/02-Fevereiro/14-02/news-do-dia/images/icon-twitter.png" alt="Compartilhe no Twitter" width="30" border="0" style=" width:30px!important;"/>
															</a>
															<a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url='.$bots->link[3].'" style="text-decoration:none;">                                                                                                  <img src="http://www.seminariodebots.com.br/ns/2019/02-Fevereiro/14-02/news-do-dia/images/icon-linkedin.png" alt="Compartilhe no Linkedin" width="30" border="0" style="padding-left:1px; width:30px!important" />                                                                                              </a>
															
														</span>
													</td>
												</tr>
											</tbody>
										</table>
									</td>
								</tr>
								<tr>
									<td width="100%" height="10" bgcolor="#ffffff"></td>
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
					<td bgcolor="#ffffff" height="20" style="background-color: #ffffff;"></td>
				</tr>
				
				<tr>
					<td bgcolor="#16d4fe" style="padding:30px 0;">
						<div>
							<p style="font-family: Helvetica, arial, sans-serif; font-size: 12px; text-align:center;">
								<a target="_blank" href="https://www.facebook.com/grupopadrao/" style="text-decoration:none">
									<img src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/branco/icon-facebook.png
									" alt="Siga no Facebook" title="Siga no Facebook" border="0" style="width: 49px !important" />
								</a>
								<a target="_blank" href="https://twitter.com/grupopadrao" style="text-decoration:none">
									<img src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/branco/icon-twitter.png
									" alt="Siga no Twitter" title="Siga no Twitter" style="width: 49px !important;padding-left:5px" border="0" />
								</a>
								<a target="_blank" href="https://www.linkedin.com/company/grupo-padr-o" style="text-decoration:none">
									<img src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/branco/icon-linkedin.png
									" alt="Grupo no Linkedin" title="Grupo no Linkedin" style="width: 49px !important; padding-left:5px" border="0" />
								</a>
								<a target="_blank" href="https://www.youtube.com/user/consumidormoderno" style="text-decoration:none">
									<img src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/branco/icon-youtube.png
									" alt="Siga no YouTube" title="Siga no YouTube" style="width: 49px !important; padding-left:2px" border="0" />
								</a>
								<a target="_blank" href="https://www.instagram.com/consumidormoderno/" style="text-decoration:none">
									<img src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/branco/icon-instagram.png
									" alt="Siga no Instagram" title="Siga no Instagram" style="width: 49px !important; padding-left:5px" border="0" />
								</a>
							</p>
						</div>
					</td>
				</tr>
				<tr>
					<td bgcolor="#16d4fe" style="background-color: #16d4fe;">
						<img src="https://s3.amazonaws.com/newsletter-gpadrao/seminarios/bots/elementos/elemento-barra.jpg" width="600" style="width:100%;">
					</td>
				</tr>
				<tr>
					<td bgcolor="#ffffff" height="10" style="background-color: #ffffff;"></td>
				</tr>
				<tr>
					<td colspan="4" align="center" height="100">
						<a target="_blank" href="http://gpadrao.com.br/">
							<img alt="Padrão Eletrônico" style="width: 198px !important; margin-top:10px;" src="https://s3.amazonaws.com/newsletter-gpadrao/seminarios/bots/elementos/logo-padrao.jpg" />
						</a>
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
</body></html>';

echo $conteudo;

$bots->salvaArquivo($conteudo);