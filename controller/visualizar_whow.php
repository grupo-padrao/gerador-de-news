<?php
require_once("../autoload.php");

$whow = new formDefault();
$whow->titulo = $_POST["titulo"];
$whow->linhaFina = $_POST["linhaFina"];
$whow->link = $_POST["link"];
$whow->imagem = $_POST["imagem"];

$conteudo = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />
	<title>WHOW! Festival de Inovação</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<style type="text/css">body{
			 background-color: #ccc;	
			}
			
			table.container {
			margin: 0px auto 0px auto;
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
			
			.txtConarec{
				padding:0px 40px 0px 40px;
			}
			
			.img-hover-palestrantes {
				line-height: 125%;
				font-size: 16px;
				display: inline-block;
				cursor: pointer;
				padding: 2px 2px;
				-webkit-transition: all 0.5s ease;  
				transition: all 0.5s ease;  
			}
			.img-hover-palestrantes:hover {
				-webkit-transform: scale(1.2);  
				-ms-transform: scale(1.2);  
				transform: scale(1.2);
				background-color #FFFFFF);
				-webkit-transition: all 0.2s ease;  
				transition: all 0.2s ease;  
			}
			
			.marginLeft{
				margin: 0 0 0 30px;
			}
			
			.marginRight{
				margin: 0 30px 0 0px;
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
			
			.menu{
				width: 100%;
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
			
			.txtConarec{
				padding:0px 20px 0px 20px
			}
			
			.palestranteSolo{
				width:50% !important; 
			}
			
			.barraPalestras{
				display: none;
			}
			
			.marginLeft{
				margin: 0 auto;
			}
			
			.marginRight{
				margin: 0 auto;
			}
			
		
		
			}
	</style>
</head>
<body bgcolor="#ccc" style="margin: 0; padding: 0; background-color:#ccc;">

<table border="0" cellpadding="0" cellspacing="0" style="background: #a7a6a6;" width="100%">
	<tbody>
		<tr>
		  <td>
			<table align="center" border="0" cellpadding="0" cellspacing="0" class="container" width="600">
				<tbody>
					
<tr>
<td bgcolor="#000" style="font-family:Arial; font-size:10px; color:#ffffff;background:#000; text-align:center; padding:10px 10px; text-transform:uppercase;">

 <a style="color:#ffffff;" target="_blank" href="{{__view}}">Visualize</a> no navegador
</td>
</tr>

								



<tr>
<td bgcolor="#fff" style="text-align:center;padding: 0px 0px 0px 0; background-color: #fff;">
									
 <a href="http://www.whow.com.br/" style="text-decoration:none" target="_blank">
 <img border="0" src="https://s3.amazonaws.com/newsletter-gpadrao/whow/2019/02-Fevereiro/13-02/news-do-dia/img_01.jpg" style=" display: inline-block; width:600px !important;" title="WHOW! Festival de inovação"> </a>
                                    
                                
	</td>
</tr>


<tr>
<td bgcolor="#fff" height="20" style="background-color: #fff;">
</td>
</tr>


 
 
 <tr>
<td bgcolor="#ffffff" style="font-family: Helvetica, arial, sans-serif; font-size: 16px; text-align:center;background-color: #ffffff;text-transform: uppercase;">

<b>23, 24 e 25 julho 2019 - são paulo - ARCA</b>
 
 </td>
</tr>

  

  
 <tr>
<td bgcolor="#ffffff" height="25" style="background-color: #ffffff;">
</td>
</tr> 


                      


<!-- START LAYOUT-7 -->
<tr>
<td align="center" bgcolor="#fff" class="fix-box" valign="top">
<!-- start  container width 600px -->
									<table align="center" bgcolor="#fff" border="0" cellpadding="0" cellspacing="0" class="container" style="background-color: #fff;padding: 0 30px" width="100%">
<tbody>
<tr>
<td valign="top"><!-- start container width 560px -->
<table align="center" bgcolor="#fff" border="0" cellpadding="0" cellspacing="0" class="full-width img-right" style="background-color:#fff;" width="100%"><!--start space height -->
	<tbody>
    <!--end space height --><!-- start image content -->
	<tr>
															<td bgcolor="#fff" valign="top" width="100%"><!-- start content left -->
															<table align="left" bgcolor="#fff" border="0" cellpadding="0" cellspacing="0" class="full-width txt-left" width="45%"><!-- start text content -->
<tbody>
<tr>
<td bgcolor="#fff" valign="middle">
																		<table align="center" border="0" cellpadding="0" cellspacing="0" >
																			<tbody>
																				<tr>
																					<td style="font-size: 14px; line-height: 40px; font-family:Roboto,Open Sans, Arial,Tahoma, Helvetica, sans-serif; color:#555555; font-weight:normal; text-align:left;">
																					<table>
																						<tbody>
																							<tr>
<td  style="background-color: #fff;padding: 0px 5px 0px 0px; color: #21304f; font-family: Arial, sans-serif;  text-align:left; line-height:20px"><a href="'.$whow->link[0].'" target="_blank"><img src="'.$whow->imagem[0].'" alt="'.$whow->titulo[0].'" width="250" border="0" style="display: inline-block;max-width: 250px;" title="Cm nota 01" /></a></td>
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
															<!-- end content left --><!-- start content left -->


<table align="right" bgcolor="#fff" border="0" cellpadding="0" cellspacing="0" class="full-width txt-right" width="45%">
<!-- start text content -->
<tbody>
<tr>


<td style="background-color: #fff;padding: 0px 10px 0px 0px; color: #000; font-family: Arial, sans-serif;  text-align:left; line-height:20px; font-size:14px">
                                		
<div>
<br>
<b><a style="color:#000; font-size:14px; text-decoration:none; text-transform:uppercase;padding-bottom: 15px; display: block" href="
'.$whow->link[0].'" target="_blank">
'.$whow->titulo[0].'</a>
</b>
'.$whow->linhaFina[0].'</div>
</td>
</tr>

<tr>
<td height="10" bgcolor="#fff"  style="background-color:#fff;">
</td>
</tr>

<tr>
<td bgcolor="#fff" style="padding-top:5px; padding-bottom:5px;" class="tablet-sociais"> 
<table summary="text" align="left" border="0" cellpadding="0" cellspacing="0" >
<tbody>
<tr>


<td style="padding-left:2px;">
<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=
'.$whow->link[0].' ">
<img src="https://s3.amazonaws.com/newsletter-gpadrao/whow/2019/02-Fevereiro/13-02/news-do-dia/rede-fb.png" border="0"  style="width:17px;display:block; border:none; outline:none; text-decoration:none;"/>
</a>
</td>
<td style="padding-left:2px;">
 <a target="_blank" href="https://twitter.com/home?status=
'.$whow->link[0].'">
<img src="https://s3.amazonaws.com/newsletter-gpadrao/whow/2019/02-Fevereiro/13-02/news-do-dia/rede-tw.png" border="0" style="width: 29px; display:block; border:none; outline:none; text-decoration:none;"/>
</a>
</td>
<td style="padding-left:2px;">
<a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=
'.$whow->link[0].'">
<img src="https://s3.amazonaws.com/newsletter-gpadrao/whow/2019/02-Fevereiro/13-02/news-do-dia/refe-link.png" border="0" style="width: 28px;display:block; border:none; outline:none; text-decoration:none;"/></a>
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
												<!-- end container width 560px --></td>
											</tr>
										</tbody>
									</table>
									<!-- end  container width 600px --></td>
								</tr>
								<!-- END LAYOUT-7 -->    
                                
 

<tr>
<td height="20" bgcolor="#ffffff" class="txtConarec" style="background-color:#ffffff;">
</td>
</tr>

 

<!-- START LAYOUT-7 -->
								<tr>
<td align="center" bgcolor="#fff" class="fix-box" valign="top">
<!-- start  container width 600px -->
<table align="center" bgcolor="#fff" border="0" cellpadding="0" cellspacing="0" class="container" style="background-color: #fff;" width="100%">
	<tbody>
		<tr>
<td valign="top"><!-- start container width 560px -->
<table align="center" bgcolor="#fff" border="0" cellpadding="0" cellspacing="0" class="full-width img-right" style="background-color:#ffff; padding-top: 30px;padding-bottom:30px;" width="100%">
<!--start space height -->
<tbody><!--end space height --><!-- start image content -->


	<tr>
															<td bgcolor="#fff" valign="top" width="100%"><!-- start content left -->
															<table align="right" bgcolor="#fff" border="0" cellpadding="0" cellspacing="0" class="full-width txt-left" width="45%"><!-- start text content -->
<tbody>
<tr>
<td bgcolor="#fff" valign="middle">
																		<table align="center" border="0" cellpadding="0" cellspacing="0" >
																			<tbody>
																				<tr>
																					<td style="font-size: 14px; line-height: 40px; font-family:Roboto,Open Sans, Arial,Tahoma, Helvetica, sans-serif; color:#555555; font-weight:normal; text-align:left; background:#fff">
																					<table style="background-color: #fff">
																						<tbody>
																							<tr>



<td  style="background-color: #fff;color: #21304f; font-family: Arial, sans-serif;  text-align:left; line-height:20px;padding-right: 20px; padding-left: 10px;"><a href="'.$whow->link[1].'" target="_blank"><img src="'.$whow->imagem[1].'" alt="'.$whow->titulo[1].'" width="250" border="0" style="display: inline-block;max-width: 250px;" title="Cm nota 04" /></a></td>


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
															<!-- end content left --><!-- start content left -->


<table align="right" bgcolor="#fff" border="0" cellpadding="0" cellspacing="0" class="full-width txt-right" width="50%">
<!-- start text content -->
<tbody>

<tr>


<td style="background-color: #fff; color: #000; font-family: Arial, sans-serif;  text-align:left; line-height:20px; font-size:14px;    padding-right: 10px;padding-left: 20px;">
                                		
<div style="padding-right: 30px;">
<br />
<b><a style="color:#000; font-size:14px; text-decoration:none; text-transform:uppercase;padding-bottom: 15px; display: block" href="'.$whow->link[1].'" target="_blank">

'.$whow->titulo[1].' </a></b>

'.$whow->linhaFina[1].'</div>




</td>


</tr>

<tr>
<td height="10" bgcolor="#fff"  style="background-color:#fff;">
</td>
</tr>

<tr>
<td bgcolor="#fff" style="padding-top:5px; padding-bottom:5px; padding-left:30px;padding-right:30px;" class="tablet-sociais"> 
<table summary="text" align="left" border="0" cellpadding="0" cellspacing="0" >
<tbody>
<tr>


<td style="padding-left:2px;">
<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u='.$whow->link[1].'">
<img src="https://s3.amazonaws.com/newsletter-gpadrao/whow/2019/02-Fevereiro/13-02/news-do-dia/rede-fb.png" border="0"  style="width:17px;display:block; border:none; outline:none; text-decoration:none;"/>
</a>
</td>
<td style="padding-left:2px;">
 <a target="_blank" href="https://twitter.com/home?status='.$whow->link[1].'">
<img src="https://s3.amazonaws.com/newsletter-gpadrao/whow/2019/02-Fevereiro/13-02/news-do-dia/rede-tw.png" border="0" style="width: 29px; display:block; border:none; outline:none; text-decoration:none;"/>
</a>
</td>
<td style="padding-left:2px;">
<a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url='.$whow->link[1].'">
<img src="https://s3.amazonaws.com/newsletter-gpadrao/whow/2019/02-Fevereiro/13-02/news-do-dia/refe-link.png" border="0" style="width: 28px;display:block; border:none; outline:none; text-decoration:none;"/></a>
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
												<!-- end container width 560px --></td>
											</tr>
										</tbody>
									</table>
									<!-- end  container width 600px --></td>
								</tr>
								<!-- END LAYOUT-7 -->    
                                


<tr>
<td height="20" bgcolor="#ffffff" class="txtConarec" style="background-color:#ffffff;">
</td>
</tr>



<!-- START LAYOUT-7 -->
<tr>
<td align="center" bgcolor="#fff" class="fix-box" valign="top">
<!-- start  container width 600px -->
									<table align="center" bgcolor="#fff" border="0" cellpadding="0" cellspacing="0" class="container" style="background-color: #fff;" width="100%">
										<tbody>
											<tr>
												<td valign="top"><!-- start container width 560px -->
												<table align="center" bgcolor="#fff" border="0" cellpadding="0" cellspacing="0" class="full-width img-right" style="background-color:#fff;" width="100%"><!--start space height -->
													<tbody><!--end space height --><!-- start image content -->
														<tr>
															
															
															
														</tr>
														<!-- end image content -->
													</tbody>
												</table>
												<!-- end container width 560px --></td>
											</tr>
										</tbody>
									</table>
									<!-- end  container width 600px --></td>
								</tr>
								<!-- END LAYOUT-7 -->    
                                
 

<tr>
<td bgcolor="#fff" style="text-align:center;padding: 0px 30px 0px 30px; background-color: #fff;">
									
 <a href="'.$whow->link[2].'" style="text-decoration:none" target="_blank">
 <img src="'.$whow->imagem[2].'" width="540" border="0" style=" display: inline-block;  max-width:540px;width:100%;" alt="'.$whow->titulo[2].'" title=""> </a>
                                    
                                
	</td>
</tr>

<tr>
<td bgcolor="#fff" style="text-align:left;padding: 10px 30px 0px 30px; background-color: #fff;font-family: Arial, sans-serif;  text-align:left; line-height:20px; font-size:14px">
<div style="padding-right: 30px;">

<b><a style="color:#000; font-size:14px; text-decoration:none;text-transform:uppercase;padding-bottom: 15px; display: block" href="'.$whow->link[2].'" target="_blank">

'.$whow->titulo[2].'

</a></b>

'.$whow->linhaFina[2].'


</div>
<br>
<a href="https://www.facebook.com/sharer/sharer.php?u='.$whow->link[2].'"><img src="https://s3.amazonaws.com/newsletter-gpadrao/whow/2019/02-Fevereiro/13-02/news-do-dia/rede-fb.png" border="0" style="width:17px; display:inline-block; border:none; outline:none; text-decoration:none;"/></a>


<a href="https://twitter.com/home?status='.$whow->link[2].'"><img src="https://s3.amazonaws.com/newsletter-gpadrao/whow/2019/02-Fevereiro/13-02/news-do-dia/rede-tw.png" border="0" style="width: 29px; display:inline-block; border:none; outline:none; text-decoration:none;"/></a>

<a href="https://www.linkedin.com/shareArticle?mini=true&amp;url='.$whow->link[2].'"><img src="https://s3.amazonaws.com/newsletter-gpadrao/whow/2019/02-Fevereiro/13-02/news-do-dia/refe-link.png" border="0" style="width: 28px; display:inline-block; border:none; outline:none; text-decoration:none;"/></a>


</td>
</tr>


<!-- START LAYOUT-7 -->
<tr>
<td align="center" bgcolor="#fff" class="fix-box" valign="top">
<!-- start  container width 600px -->
									<table align="center" bgcolor="#fff" border="0" cellpadding="0" cellspacing="0" class="container" style="background-color: #fff;" width="100%">
<tbody>
	<tr>
<td valign="top"><!-- start container width 560px -->
<table align="center" bgcolor="#fff" border="0" cellpadding="0" cellspacing="0" class="full-width img-right" style="background-color:#fff;" width="100%"><!--start space height -->
<tbody><!--end space height --><!-- start image content -->

														<!-- end image content -->
													</tbody>
												</table>
												<!-- end container width 560px --></td>
											</tr>
										</tbody>
									</table>
									<!-- end  container width 600px --></td>
								</tr>
								<!-- END LAYOUT-7 -->    
                                
                                                            <tr>
<td width="100%" height="50" bgcolor="#ffffff" style="color:#ffffff"></td>
</tr>	
        						
<!-- START LAYOUT-7 -->
<tr>
<td align="center" bgcolor="#fff" class="fix-box" valign="top">
<!-- start  container width 600px -->
									<table align="center" bgcolor="#fff" border="0" cellpadding="0" cellspacing="0" class="container" style="background-color: #fff;padding: 0 30px" width="100%">
<tbody>
<tr>
<td valign="top"><!-- start container width 560px -->
<table align="center" bgcolor="#fff" border="0" cellpadding="0" cellspacing="0" class="full-width img-right" style="background-color:#fff;" width="100%"><!--start space height -->
	<tbody>
    <!--end space height --><!-- start image content -->
	<tr>
															<td bgcolor="#fff" valign="top" width="100%"><!-- start content left -->
															<table align="left" bgcolor="#fff" border="0" cellpadding="0" cellspacing="0" class="full-width txt-left" width="45%"><!-- start text content -->
<tbody>
<tr>
<td bgcolor="#fff" valign="middle">
																		<table align="center" border="0" cellpadding="0" cellspacing="0" >
																			<tbody>
																				<tr>
																					<td style="font-size: 14px; line-height: 40px; font-family:Roboto,Open Sans, Arial,Tahoma, Helvetica, sans-serif; color:#555555; font-weight:normal; text-align:left;">
																					<table>
																						<tbody>
																							<tr>
<td  style="background-color: #fff;padding: 0px 5px 0px 0px; color: #21304f; font-family: Arial, sans-serif;  text-align:left; line-height:20px"><a href="'.$whow->link[3].'" target="_blank"><img src="'.$whow->imagem[3].'" alt="'.$whow->titulo[3].'" width="250" border="0" style="display: inline-block;max-width: 250px;" title="" /></a></td>
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
															<!-- end content left --><!-- start content left -->


<table align="right" bgcolor="#fff" border="0" cellpadding="0" cellspacing="0" class="full-width txt-right" width="45%">
<!-- start text content -->
<tbody>
<tr>


<td style="background-color: #fff;padding: 0px 10px 0px 0px; color: #000; font-family: Arial, sans-serif;  text-align:left; line-height:20px; font-size:14px">
                                		
<div>
<br />
<b><a style="color:#000; font-size:14px; text-decoration:none; text-transform:uppercase; padding-bottom: 15px; display: block" href="'.$whow->link[3].'" target="_blank">
'.$whow->titulo[3].'
</a>
</b>
'.$whow->linhaFina[3].'</div>
</td>
</tr>

<tr>
<td height="10" bgcolor="#fff"  style="background-color:#fff;">
</td>
</tr>

<tr>
<td bgcolor="#fff" style="padding-top:5px; padding-bottom:5px;" class="tablet-sociais"> 
<table summary="text" align="left" border="0" cellpadding="0" cellspacing="0" >
<tbody>
<tr>


<td style="padding-left:2px;">
<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u='.$whow->link[3].'">
<img src="https://s3.amazonaws.com/newsletter-gpadrao/whow/2019/02-Fevereiro/13-02/news-do-dia/rede-fb.png" border="0"  style="width:17px;display:block; border:none; outline:none; text-decoration:none;"/>
</a>
</td>
<td style="padding-left:2px;">
 <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u='.$whow->link[3].'">
<img src="https://s3.amazonaws.com/newsletter-gpadrao/whow/2019/02-Fevereiro/13-02/news-do-dia/rede-tw.png" border="0" style="width: 29px; display:block; border:none; outline:none; text-decoration:none;"/>
</a>
</td>
<td style="padding-left:2px;">
<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u='.$whow->link[3].'">
<img src="https://s3.amazonaws.com/newsletter-gpadrao/whow/2019/02-Fevereiro/13-02/news-do-dia/refe-link.png" border="0" style="width: 28px;display:block; border:none; outline:none; text-decoration:none;"/></a>
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
												<!-- end container width 560px --></td>
											</tr>
										</tbody>
									</table>
									<!-- end  container width 600px --></td>
								</tr>
								<!-- END LAYOUT-7 -->  
      
      
                       
<tr>
<td height="50" bgcolor="#fff" class="txtConarec" style="background-color:#fff;">
</td>
</tr>

<tr>

<td style="padding: 30px 30px; background:#000;text-align: center;color:#FFF">
Em caso de dúvidas ou para mais informações, entre em contato: <a href="mailto:eventos@gpadrao.com.br" target="_blank" style="text-decoration:none;color:white">eventos@gpadrao.com.br</a> ou <a href="tel:+1131252215" target="_blank" style="text-decoration:none;color:white">(11) 3125-2215</a>. </td>

</tr>
                                                                        
 <tr>
<td bgcolor="#e0fb00" style="padding:5px 0; background:#e0fb00">
<div >
<p style="font-family: Helvetica, arial, sans-serif; font-size: 12px; text-align:center;">
<a target="_blank" href="https://www.facebook.com/whowfestival" style="text-decoration:none"><img src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/preto/icon-facebook.png
" alt="Siga no Facebook" title="Siga no Facebook" border="0" style="width: 40px !important"/> </a>

<a target="_blank" href="https://twitter.com/whowfestival" style="text-decoration:none"><img src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/preto/icon-twitter.png
" alt="Siga no Twitter" title="Siga no Twitter" style="width: 44px !important;padding-left:5px" border="0"/></a>
               
<a target="_blank" href="https://www.instagram.com/whowfestival/" style="text-decoration:none"><img src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/preto/icon-instagram.png
" alt="Grupo no Linkedin" title="Grupo no Linkedin" style="width: 41px !important; padding-left:5px" border="0"/></a>   

<a target="_blank" href="https://www.linkedin.com/showcase/whow---festival-de-inova%C3%A7%C3%A3o/" style="text-decoration:none"><img src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/preto/icon-linkedin.png
" alt="Siga no YouTube" title="Siga no YouTube" style="width: 42px !important; padding-left:2px" border="0"/></a>                     
                        
                           
<a target="_blank" href="https://www.youtube.com/channel/UCtxlmt8Ggyyq-XOCPbFA-bg" style="text-decoration:none"><img src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/preto/icon-youtube.png
" alt="Siga no Instagram" title="Siga no Instagram" style="width: 41px !important; padding-left:5px" border="0"/></a>

</p>
</div>  
 </td>
</tr>                                                               
<tr>
<td style="padding: 5px 0; color: #000; font-family: Arial, sans-serif; font-size:12px; text-align:left; background-color:#e0fb00;line-height:15px">
	
<Center>									
<b>Enviado por <a style="color:#000; text-decoration:none;" href="http://www.gpadrao.com.br/" target="_blank">Grupo Padrão</a></b><br />
<a style="color:#000; text-decoration:none;" href="https://www.google.com.br/maps/place/Grupo+Padr%C3%A3o/@-23.5405435,-46.6639209,15z/data=!4m2!3m1!1s0x0:0xf303e20b80be2358?ved=2ahUKEwiYiZqnwc_eAhWBHJAKHX1BD-QQ_BIwCnoECAMQCA" target="_blank">Av. Pacaembu, 1.613 – Pacaembu | São Paulo-SP | CEP 01234-001</a> | <a style="color:#000; text-decoration:none;" href="tel:1131252244">+55 11 31252244</a>
</Center>

  </td>
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
</body>
</html>';

echo $conteudo;
