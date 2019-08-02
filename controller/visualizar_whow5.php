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
			 background-color: #FAFAFA;	
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

<table border="0" cellpadding="0" cellspacing="0" style="background:#FAFAFA;" width="100%">
	<tbody>
		<tr>
		  <td>
			<table align="center" border="0" cellpadding="0" cellspacing="0" class="container" width="600" style="border-left: 1px solid #eaeaea;border-right: 1px solid #eaeaea;">
				<tbody>
					
<tr>
<td bgcolor="#000000" style="font-family:Arial, Helvetica, sans-serif;font-size:10px; background:#000000 text-align:right; padding:10px 10px; text-transform:uppercase;color:#ffffff!important;" align="right" >

 <a style="color:#ffffff;" target="_blank" href="{{__view}}">Visualize</a> no navegador
 
</td>
</tr>

								



<tr>
<td bgcolor="#fff" style="text-align:center;padding: 0px 0px 0px 0; background-color: #fff;">
									
 <a href="http://www.whow.com.br/" style="text-decoration:none" target="_blank">
<img alt="WHOW" src="https://newsletter-gpadrao.s3.amazonaws.com/whow/2019/06-junho/05-06/top.jpg" style="display: block; max-width:100%" />  
</a>
                                    
                                
	</td>
</tr>


<tr>
<td bgcolor="#fff" height="20" style="background-color: #fff;">
</td>
</tr>

  
<tr>
<td bgcolor="#fff" style="text-align:center;padding: 0px 23px 0px 23px; background-color: #fff;">
									
 <a href="'.$whow->link[0].'" style="text-decoration:none" target="_blank">
 <img src="'.$whow->imagem[0].'" width="554" border="0" style=" display: inline-block;  max-width:554px; height:auto;width:100%;" alt="WHOW!"> </a>
                                    
                                
	</td>
</tr>
<tr>
<td bgcolor="#fff" style="text-align:left;padding: 7px 26px 0px 26px; background-color: #fff;font-family: Arial, sans-serif;  text-align:left; line-height:20px; font-size:14px;padding-right: 30px;">

<b>
<a style="color:#000000; font-size:20px; text-decoration:none; font-family:Arial, Helvetica, sans-serif;" href="http://www.whow.com.br/alexa-ultrapassa-a-marca-de-80-mil-habilidades-de-comando-de-voz/" target="_blank">

'.$whow->titulo[0].'
</a>
</b>

</td>
</tr>

<tr>
<td bgcolor="#fff" style="text-align:left;padding: 7px 26px 0px 26px;background-color: #fff;font-family: Arial, Helvetica, sans-serif;  text-align:left; font-size:15px; line-height:17px; color:#9A9A9A;">

'.$whow->linhaFina[0].'

</td>
</tr>
<tr>
<td bgcolor="#fff" style="text-align:left;padding: 10px 24px 0px 24px;background-color: #fff;font-family: Arial, Helvetica, sans-serif;  text-align:left; line-height:20px; font-size:17px; color:#9A9A9A;">
<!--<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u='.$whow->link[0].'" style="text-decoration:none;"><img style=" width:30px !important; margin-left:7px; margin-right:7px;" border="0" src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/quadrado-preto/icon-facebook.png" alt="Compartilhe no Facebook"/></a>-->
&nbsp;
<a href="https://www.linkedin.com/shareArticle?mini=true&amp;url='.$whow->link[0].'&amp;title=&amp;summary=&amp;source="><img src="https://newsletter-gpadrao.s3.amazonaws.com/padrao/redes-sociais/quadrado-preto-whow/rede-link-m.png" border="0" style="width:29px!important; display:inline-block; border:none; outline:none; text-decoration:none;"/></a>
&nbsp;
<a href="https://twitter.com/home?status='.$whow->link[0].'"><img src="https://newsletter-gpadrao.s3.amazonaws.com/padrao/redes-sociais/quadrado-preto-whow/rede-tw-m.png" border="0" style="width: 29px!important;margin:0; display:inline-block; border:none; outline:none; text-decoration:none;"/></a>
&nbsp;
<a target="_blank" href="https://api.whatsapp.com/send?text=Veja esta matéria:'.$whow->link[0].'" style="text-decoration:none;"><img src="https://newsletter-gpadrao.s3.amazonaws.com/padrao/redes-sociais/quadrado-preto-whow/rede-whats-m.png" border="0" style="width:29px!important; display:inline-block; border:none; outline:none; text-decoration:none;"/></a>
</td>
</tr>


                      
 <tr>
<td bgcolor="#ffffff" height="25" style="background-color: #ffffff;">
</td>
</tr> 


<tr>
<td bgcolor="#fff" style="text-align:center;padding: 0px 23px 0px 23px; background-color: #fff;">
									
 <a href="'.$whow->link[1].'" style="text-decoration:none" target="_blank">
 <img src="'.$whow->imagem[1].'" width="554" border="0" style=" display: inline-block;  max-width:554px; height:auto;width:100%;" alt="WHOW!"> </a>
                            
	</td>
</tr>

<tr>
<td bgcolor="#fff" style="text-align:left;padding: 7px 26px 0px 26px; background-color: #fff;font-family: Arial, sans-serif;  text-align:left; line-height:20px; font-size:14px;padding-right: 30px;">

<b>
<a style="color:#000000; font-size:20px; text-decoration:none; font-family:Arial, Helvetica, sans-serif;" href="'.$whow->link[1].'" target="_blank">
'.$whow->titulo[1].'
</a>
</b>

</td>
</tr>

<tr>
<td bgcolor="#fff" style="text-align:left;padding: 7px 26px 0px 26px;background-color: #fff;font-family: Arial, Helvetica, sans-serif;  text-align:left; font-size:15px; line-height:17px; color:#9A9A9A;">

'.$whow->linhaFina[1].'

</td>
</tr>
<tr>
<td bgcolor="#fff" style="text-align:left;padding: 10px 24px 0px 24px;background-color: #fff;font-family: Arial, Helvetica, sans-serif;  text-align:left; line-height:20px; font-size:17px; color:#9A9A9A;">
<!--<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u='.$whow->link[1].'" style="text-decoration:none;"><img style=" width:30px !important; margin-left:7px; margin-right:7px;" border="0" src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/quadrado-preto/icon-facebook.png" alt="Compartilhe no Facebook"/></a>-->
&nbsp;
<a href="https://www.linkedin.com/shareArticle?mini=true&amp;url='.$whow->link[1].'&amp;title=&amp;summary=&amp;source="><img src="https://newsletter-gpadrao.s3.amazonaws.com/padrao/redes-sociais/quadrado-preto-whow/rede-link-m.png" border="0" style="width:29px!important; display:inline-block; border:none; outline:none; text-decoration:none;"/></a>
&nbsp;
<a href="https://twitter.com/home?status='.$whow->link[1].'"><img src="https://newsletter-gpadrao.s3.amazonaws.com/padrao/redes-sociais/quadrado-preto-whow/rede-tw-m.png" border="0" style="width: 29px!important;margin:0; display:inline-block; border:none; outline:none; text-decoration:none;"/></a>
&nbsp;
<a target="_blank" href="https://api.whatsapp.com/send?text=Veja esta matéria:'.$whow->link[1].'" style="text-decoration:none;"><img src="https://newsletter-gpadrao.s3.amazonaws.com/padrao/redes-sociais/quadrado-preto-whow/rede-whats-m.png" border="0" style="width:29px!important; display:inline-block; border:none; outline:none; text-decoration:none;"/></a>
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
<table align="center" bgcolor="#fff" border="0" cellpadding="0" cellspacing="0" class="container" style="background-color: #fff;padding: 0 23px;" width="100%">
<tbody>
<tr>
<td valign="top">
<!-- start container width 560px -->
<table align="center" bgcolor="#fff" border="0" cellpadding="0" cellspacing="0" class="full-width img-right" style="background-color:#fff;" width="100%">
<!--start space height -->
<tbody>
<!--end space height --><!-- start image content -->
<tr>															<td bgcolor="#fff" valign="top" width="100%">
<!-- start content left -->
															<table align="left" bgcolor="#fff" border="0" cellpadding="0" cellspacing="0" class="full-width txt-left" width="47%">
 <!-- start text content -->
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
<td  style="background-color: #fff;padding: 0px 5px 0px 0px; color: #21304f; font-family: Arial, sans-serif;  text-align:left; line-height:20px">
<a href="'.$whow->link[2].'" target="_blank"><img src="'.$whow->imagem[2].'" alt="WHOW!" width="277" border="0" style="display: inline-block;max-width:277px;" title="WHOW" /></a>
</td>
</tr>
																						</tbody>																				</table>																				</td>																			</tr>
																		</tbody>																	</table>																	</td>																</tr>
																	<!-- end text content -->															</tbody>														</table>														<!-- end content left --><!-- start content left -->

<table align="right" bgcolor="#fff" border="0" cellpadding="0" cellspacing="0" class="full-width txt-right" width="46%">
<!-- start text content -->
<tbody>
<tr>
<td style="background-color: #fff;padding: 0px 0px 0px 0px; color: #9A9A9A; font-family: Arial, Helvetica, sans-serif;  text-align:left; line-height:17px; font-size:15px">
<b>
<a style="color:#000000; font-size:20px; line-height:25px; text-decoration:none; padding-bottom:5px; display: block" href="'.$whow->link[2].'" target="_blank">
'.$whow->titulo[2].'
</a>
</b>
</td>
</tr>

<tr>
<td style="background-color: #fff;padding: 0px 0px 10px 0px; color: #9A9A9A; font-family: Arial, Helvetica, sans-serif; font-size:15px;text-align:left; line-height:17px;">
'.$whow->linhaFina[2].'
</div>
</td>
</tr>

<tr>
<td height="15" bgcolor="#fff"  style="background-color:#fff;">
</td>
</tr>

<tr>
<td bgcolor="#fff" style="padding-top:5px; padding-bottom:5px;" class="tablet-sociais"> 
<!--<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u='.$whow->link[2].'" style="text-decoration:none;"><img style=" width:30px !important; margin-left:7px; margin-right:7px;" border="0" src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/quadrado-preto/icon-facebook.png" alt="Compartilhe no Facebook"/></a> -->
&nbsp;
<a href="https://www.linkedin.com/shareArticle?mini=true&amp;url='.$whow->link[2].'&amp;title=&amp;summary=&amp;source="><img src="https://newsletter-gpadrao.s3.amazonaws.com/padrao/redes-sociais/quadrado-preto-whow/rede-link-m.png" border="0" style="width:29px!important; display:inline-block; border:none; outline:none; text-decoration:none;"/></a>
&nbsp;
<a href="https://twitter.com/home?status='.$whow->link[2].'"><img src="https://newsletter-gpadrao.s3.amazonaws.com/padrao/redes-sociais/quadrado-preto-whow/rede-tw-m.png" border="0" style="width: 29px!important;margin:0; display:inline-block; border:none; outline:none; text-decoration:none;"/></a>
&nbsp;
<a target="_blank" href="https://api.whatsapp.com/send?text=Veja esta matéria:'.$whow->link[2].'" style="text-decoration:none;"><img src="https://newsletter-gpadrao.s3.amazonaws.com/padrao/redes-sociais/quadrado-preto-whow/rede-whats-m.png" border="0" style="width:29px!important; display:inline-block; border:none; outline:none; text-decoration:none;"/></a>

</td>
</tr>																</tbody>																</table>
</td>													
		</tr><!-- end image content -->
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
<table align="center" bgcolor="#fff" border="0" cellpadding="0" cellspacing="0" class="container" style="background-color: #fff;padding: 0 23px;" width="100%">
<tbody>
<tr>
<td valign="top">
<!-- start container width 560px -->
<table align="center" bgcolor="#fff" border="0" cellpadding="0" cellspacing="0" class="full-width img-right" style="background-color:#fff;" width="100%">
<!--start space height -->
<tbody>
<!--end space height --><!-- start image content -->
<tr>															<td bgcolor="#fff" valign="top" width="100%">
<!-- start content left -->
															<table align="left" bgcolor="#fff" border="0" cellpadding="0" cellspacing="0" class="full-width txt-left" width="47%">
 <!-- start text content -->
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
<td  style="background-color: #fff;padding: 0px 5px 0px 0px; color: #21304f; font-family: Arial, sans-serif;  text-align:left; line-height:20px">
<a href="'.$whow->link[3].'" target="_blank"><img src="'.$whow->imagem[3].'" alt="WHOW!" width="277" border="0" style="display: inline-block;max-width:277px;" title="WHOW" /></a>
</td>
</tr>
																						</tbody>																				</table>																				</td>																			</tr>
																		</tbody>																	</table>																	</td>																</tr>
																	<!-- end text content -->															</tbody>														</table>														<!-- end content left --><!-- start content left -->

<table align="right" bgcolor="#fff" border="0" cellpadding="0" cellspacing="0" class="full-width txt-right" width="46%">
<!-- start text content -->
<tbody>
<tr>
<td style="background-color: #fff;padding: 0px 0px 0px 0px; color: #9A9A9A; font-family: Arial, Helvetica, sans-serif;  text-align:left; line-height:17px; font-size:15px">
<b>
<a style="color:#000000; font-size:20px; line-height:25px; text-decoration:none; padding-bottom:5px; display: block" href="'.$whow->link[3].'" target="_blank">
'.$whow->titulo[3].'
</a>
</b>
</td>
</tr>

<tr>
<td style="background-color: #fff;padding: 0px 0px 10px 0px; color: #9A9A9A; font-family: Arial, Helvetica, sans-serif; font-size:15px;text-align:left; line-height:17px;">
'.$whow->linhaFina[3].'
</div>
</td>
</tr>

<tr>
<td height="15" bgcolor="#fff"  style="background-color:#fff;">
</td>
</tr>

<tr>
<td bgcolor="#fff" style="padding-top:5px; padding-bottom:5px;" class="tablet-sociais"> 
<!--<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u='.$whow->link[3].'" style="text-decoration:none;"><img style=" width:30px !important; margin-left:7px; margin-right:7px;" border="0" src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/quadrado-preto/icon-facebook.png" alt="Compartilhe no Facebook"/></a> -->

&nbsp;
<a href="https://www.linkedin.com/shareArticle?mini=true&amp;url='.$whow->link[3].'&amp;title=&amp;summary=&amp;source="><img src="https://newsletter-gpadrao.s3.amazonaws.com/padrao/redes-sociais/quadrado-preto-whow/rede-link-m.png" border="0" style="width:29px!important; display:inline-block; border:none; outline:none; text-decoration:none;"/></a>
&nbsp;
<a href="https://twitter.com/home?status='.$whow->link[3].'"><img src="https://newsletter-gpadrao.s3.amazonaws.com/padrao/redes-sociais/quadrado-preto-whow/rede-tw-m.png" border="0" style="width: 29px!important;margin:0; display:inline-block; border:none; outline:none; text-decoration:none;"/></a>
&nbsp;
<a target="_blank" href="https://api.whatsapp.com/send?text=Veja esta matéria:'.$whow->link[3].'" style="text-decoration:none;"><img src="https://newsletter-gpadrao.s3.amazonaws.com/padrao/redes-sociais/quadrado-preto-whow/rede-whats-m.png" border="0" style="width:29px!important; display:inline-block; border:none; outline:none; text-decoration:none;"/></a>

</td>
</tr>																</tbody>																</table>
</td>													
		</tr><!-- end image content -->
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
<table align="center" bgcolor="#fff" border="0" cellpadding="0" cellspacing="0" class="container" style="background-color: #fff;padding: 0 23px;" width="100%">
<tbody>
<tr>
<td valign="top">
<!-- start container width 560px -->
<table align="center" bgcolor="#fff" border="0" cellpadding="0" cellspacing="0" class="full-width img-right" style="background-color:#fff;" width="100%">
<!--start space height -->
<tbody>
<!--end space height --><!-- start image content -->
<tr>															<td bgcolor="#fff" valign="top" width="100%">
<!-- start content left -->
															<table align="left" bgcolor="#fff" border="0" cellpadding="0" cellspacing="0" class="full-width txt-left" width="47%">
 <!-- start text content -->
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
<td  style="background-color: #fff;padding: 0px 5px 0px 0px; color: #21304f; font-family: Arial, sans-serif;  text-align:left; line-height:20px">
<a href="'.$whow->link[4].'" target="_blank"><img src="'.$whow->imagem[4].'" alt="WHOW!" width="277" border="0" style="display: inline-block;max-width:277px;" title="WHOW" /></a>
</td>
</tr>
																						</tbody>																				</table>																				</td>																			</tr>
																		</tbody>																	</table>																	</td>																</tr>
																	<!-- end text content -->															</tbody>														</table>														<!-- end content left --><!-- start content left -->

<table align="right" bgcolor="#fff" border="0" cellpadding="0" cellspacing="0" class="full-width txt-right" width="46%">
<!-- start text content -->
<tbody>
<tr>
<td style="background-color: #fff;padding: 0px 0px 0px 0px; color: #9A9A9A; font-family: Arial, Helvetica, sans-serif;  text-align:left; line-height:17px; font-size:15px">
<b>
<a style="color:#000000; font-size:20px; line-height:25px; text-decoration:none; padding-bottom:5px; display: block" href="'.$whow->link[4].'" target="_blank">
'.$whow->titulo[4].'
</a>
</b>
</td>
</tr>

<tr>
<td style="background-color: #fff;padding: 0px 0px 10px 0px; color: #9A9A9A; font-family: Arial, Helvetica, sans-serif; font-size:15px;text-align:left; line-height:17px;">
'.$whow->linhaFina[4].'
</div>
</td>
</tr>

<tr>
<td height="15" bgcolor="#fff"  style="background-color:#fff;">
</td>
</tr>

<tr>
<td bgcolor="#fff" style="padding-top:5px; padding-bottom:5px;" class="tablet-sociais"> 
<!--<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u='.$whow->link[4].'" style="text-decoration:none;"><img style=" width:30px !important; margin-left:7px; margin-right:7px;" border="0" src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/quadrado-preto/icon-facebook.png" alt="Compartilhe no Facebook"/></a> -->

&nbsp;
<a href="https://www.linkedin.com/shareArticle?mini=true&amp;url='.$whow->link[4].'&amp;title=&amp;summary=&amp;source="><img src="https://newsletter-gpadrao.s3.amazonaws.com/padrao/redes-sociais/quadrado-preto-whow/rede-link-m.png" border="0" style="width:29px!important; display:inline-block; border:none; outline:none; text-decoration:none;"/></a>
&nbsp;
<a href="https://twitter.com/home?status='.$whow->link[4].'"><img src="https://newsletter-gpadrao.s3.amazonaws.com/padrao/redes-sociais/quadrado-preto-whow/rede-tw-m.png" border="0" style="width: 29px!important;margin:0; display:inline-block; border:none; outline:none; text-decoration:none;"/></a>
&nbsp;
<a target="_blank" href="https://api.whatsapp.com/send?text=Veja esta matéria:'.$whow->link[4].'" style="text-decoration:none;"><img src="https://newsletter-gpadrao.s3.amazonaws.com/padrao/redes-sociais/quadrado-preto-whow/rede-whats-m.png" border="0" style="width:29px!important; display:inline-block; border:none; outline:none; text-decoration:none;"/></a>

</td>
</tr>																</tbody>																</table>
</td>													
		</tr><!-- end image content -->
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
<td height="20" bgcolor="#fff" class="txtConarec" style="background-color:#fff;">
</td>
</tr>

<tr>

<td style="padding:57px 30px 0px 0; background:#000000;text-align: center;color:#FFF">
 <a href="http://www.whow.com.br/" style="text-decoration:none" target="_blank">
<img alt="WHOW" src="https://newsletter-gpadrao.s3.amazonaws.com/whow/2019/06-junho/05-06/site-whow.jpg" style="display: block; width:220px!important; margin:0 auto;" /> 
</a>
</td>
</tr>
                                                                        
 <tr>
<td bgcolor="#000000" style="padding:5px 0; background:#000000">
<div style="text-align:center;">
<a target="_blank" href="https://www.instagram.com/whowfestival/" style="text-decoration:none"><img src="https://newsletter-gpadrao.s3.amazonaws.com/padrao/redes-sociais/icon-branco/icon-instagram-g.png
" width="25" alt="Grupo no Instagram" title="Grupo no Instagram" style="width:25px!important; padding-left:0px" border="0"/></a><a target="_blank" href="https://www.linkedin.com/showcase/whow---festival-de-inova%C3%A7%C3%A3o/" style="text-decoration:none"><img src="https://newsletter-gpadrao.s3.amazonaws.com/padrao/redes-sociais/icon-branco/icon-linkedin-g.png
" alt="Siga no Linkedin" title="Siga no Linkedin" width="26" style="width:26px!important; padding-left:0px" border="0"/></a> <a target="_blank" href="https://www.facebook.com/whowfestival" style="text-decoration:none"><img src="https://newsletter-gpadrao.s3.amazonaws.com/padrao/redes-sociais/icon-branco/icon-facebook-g.png
" alt="Siga no Facebook" title="Siga no Facebook" border="0" width="17" style="width:17px!important; padding-left:0px"/> </a><a target="_blank" href="https://twitter.com/whowfestival" style="text-decoration:none"><img src="https://newsletter-gpadrao.s3.amazonaws.com/padrao/redes-sociais/icon-branco/icon-twitter-g.png
" alt="Siga no Twitter" title="Siga no Twitter" width="26" style="width:26px !important;padding-left:0px" border="0"/></a>
<!--                         
<a target="_blank" href="https://www.youtube.com/channel/UCtxlmt8Ggyyq-XOCPbFA-bg" style="text-decoration:none"><img src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/preto/icon-youtube.png
" alt="Siga no Instagram" title="Siga no Instagram" style="width: 41px !important; padding-left:5px" border="0"/></a>
-->
</div>  
 </td>
</tr> 
<tr>
<td height="50" bgcolor="#000000"  style="background-color:#000000;">
</td>
</tr>
                                                  
<tr>
<td height="22" bgcolor="#ffffff" class="txtConarec" style="background-color:#ffffff;">
</td>
</tr>
            
<tr>
<td bgcolor="#ffffff"  style="padding: 5px 0; color: #2B2B2B; font-family:Arial, Helvetica, sans-serif; font-size:10px; text-align:left; background-color:#ffffff;line-height:15px">
	
<center>									
<b>Enviado por <a style="color:#2B2B2B; text-decoration:none;" href="http://www.gpadrao.com.br/" target="_blank">Grupo Padrão</a></b><br />
<a style="color:#2B2B2B; text-decoration:none;" href="https://www.google.com.br/maps/place/Grupo+Padr%C3%A3o/@-23.5405435,-46.6639209,15z/data=!4m2!3m1!1s0x0:0xf303e20b80be2358?ved=2ahUKEwiYiZqnwc_eAhWBHJAKHX1BD-QQ_BIwCnoECAMQCA" target="_blank">Av. Pacaembu, 1.613 – Pacaembu | São Paulo-SP | CEP 01234-001</a> | <a style="color:#2B2B2B; text-decoration:none;" href="tel:1131252244">+55 11 31252244</a><br />
 <a  target="_blank" style="color:#2B2B2B;font-family: Arial,Helvetica,sans-serif; font-size: 10px;" href="{{__optout}}">Descadastre-se</a> caso não queira receber mais e-mails
</center>

  </td>
</tr>


<tr>
<td height="26" bgcolor="#ffffff" class="txtConarec" style="background-color:#ffffff;">
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
$whow->salvaArquivo($conteudo);