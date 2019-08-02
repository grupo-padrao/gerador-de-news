<?php
require_once("../autoload.php");

$nvEspecial = new formDefault();
$nvEspecial->titulo = $_POST["titulo"];
$nvEspecial->linhaFina = $_POST["linhaFina"];
$nvEspecial->link = $_POST["link"];
$nvEspecial->imagem = $_POST["imagem"];
$nvEspecial->topo = $_POST["topo"];


$conteudo = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//BR-pt" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
		<html xmlns="http://www.w3.org/1999/xhtml">
		<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Portal NOVAREJO</title>
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
		margin: 10px auto;
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

		<tr><td bgcolor="#FFFFFF" width="600" style="padding: 00px 0 0px 0px;" class="logo"><div align="center"><a target="_blank" href="https://portalnovarejo.com.br"><img border="0" alt="Portal NOVAREJO" style="display:block; border:none; outline:none; text-decoration:none;" src="'.$nvEspecial->topo.'" class="img-nota"></a></div></td></tr>

		<tr>
		<td bgcolor="#ffffff" height="30" style="background-color: #ffffff;"></td>
		</tr>
		<tr>
		<td width="280" height="3" align="center" class="devicewidth" style="background-color:#2c2c2c;" bgcolor="#2c2c2c"></td>
		</tr>
		<tr>
		<td bgcolor="#FFFFFF" width="600" style="padding: 0px 0 0px 0px;" class="logo">
		<div align="center">
		<a target="_blank" href="'.$nvEspecial->link[0].'"><img border="0" alt="'. $nvEspecial->titulo[0] .'" style="display:block; border:none; outline:none; text-decoration:none;" src="' . $nvEspecial->imagem[0] . '" class="img-nota" /></a>
		</div>
		</td>
		</tr>
		<tr>
		<td bgcolor="#2c2c2c" style="font-family: Helvetica, arial, sans-serif; #fff; text-align:left;line-height:20px; padding: 5px 20px">
			<div class="titulo" style="padding: 5px 5px;">
				<a target="_blank" style="color:#fff;font-family: Helvetica, arial, sans-serif; text-align:left;line-height:20px;font-size: 18px;text-decoration: none;" href="'. $nvEspecial->link[0] . '">'. $nvEspecial->titulo[0] . '
				</a>
			</div>
		</td>
		</tr>
		<tr>
		<td bgcolor="#2c2c2c" align="left" style="font-family: helvetica, arial, sans-serif; font-size: 14px; text-align:left; line-height: 20px; padding: 5px 20px;color:#ffffff">' . $nvEspecial->linhaFina[0] . '</td>
		</tr>
		<tr>
		<td bgcolor="#2c2c2c">
		<table align="left" border="0" cellpadding="0" cellspacing="0" class="tablet-button" summary="text" bgcolor="#2c2c2c">
		<tbody>
		<tr>
			<td align="center" height="30" style=" background-color:#2c2c2c; background-clip: padding-box; color:#ffffff;padding: 5px 0 5px 15px ">
				<span style="color:#ffffff;">
					<a target="_blank" href="'.$nvEspecial->link[0].'" style="color:#ffffff; font-size:14px; text-decoration:none;"><b>Leia mais</b>
					</a>&nbsp;&nbsp;
					<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u='.$nvEspecial->link[0].'" style="text-decoration:none;">
						<img style="padding-left:1px; width:36px !important" border="0" src="https://s3.amazonaws.com/newsletter-gpadrao/icons/novarejo/2018/face_nota.jpg" alt="Compartilhe no Facebook"/>
					</a>
					<a target="_blank" href="https://twitter.com/home?status='.$nvEspecial->link[0].'" style="text-decoration:none;">
						<img border="0" src="https://s3.amazonaws.com/newsletter-gpadrao/icons/novarejo/2018/twitter_nota.jpg" style=" width:36px !important" alt="Compartilhe no Twitter"/>
					</a>
					<a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url='.$nvEspecial->link[0].'" style="text-decoration:none;">
						<img style="padding-left:1px; width:36px !important" border="0" src="https://s3.amazonaws.com/newsletter-gpadrao/icons/novarejo/2018/linkedin_nota.jpg" alt="Compartilhe no Linkedin"/>
					</a>
				</span>
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
		<td width="280" height="3" align="center" class="devicewidth" style="background-color:#2c2c2c;" bgcolor="#2c2c2c"></td>
		</tr>
		<tr>
		<td width="280" height="180" align="center" class="devicewidth" bgcolor="#fff">
		<a target="_blank" href="'.$nvEspecial->link[1].'"><img alt="'.$nvEspecial->titulo[1].'" border="0" src="'.$nvEspecial->imagem[1].'" style="width:100%; display: inline-block;" title="Portal NOVAREJO" /></a>
		</td>
		</tr>
		<tr>
		<td>
		<table summary="text" width="280" align="center" border="0" cellpadding="0" cellspacing="0" class="devicewidthinner table-lateral">
		<tbody>
		<tr>
		<td bgcolor="#2c2c2c" style="font-family: Helvetica, arial, sans-serif; font-size: 1px; text-align:left;line-height:20px; padding: 5px 5px; background-color:#2c2c2c">
		<div class="titulo"><a target="_blank" style="color:#ffffff;font-family: Helvetica, arial, sans-serif; text-align:left;line-height:20px;font-size: 18px;text-decoration: none;" href="'.$nvEspecial->link[1].'">'.$nvEspecial->titulo[1].'</a></div>
		</td>
		</tr>
		<tr>
		<td style="font-family: Helvetica, arial, sans-serif; font-size: 14px; text-align:left;line-height: 20px; padding: 0px 10px; color:#ffffff" bgcolor="#2c2c2c">'.$nvEspecial->linhaFina[1].'</td>
		</tr>
		<tr>
		<td width="100%" height="10" bgcolor="#2c2c2c"></td>
		</tr>
		<tr>
		<td bgcolor="#2c2c2c">
		<table align="left" border="0" cellpadding="0" cellspacing="0" class="tablet-button" summary="text" bgcolor="#2c2c2c">
		<tbody>
		<tr>
			<td align="center" height="30" style=" background-color:#2c2c2c; background-clip: padding-box; color:#ffffff;padding: 5px 0 5px 15px ">
				<span style="color:#ffffff;">
					<a target="_blank" href="'.$nvEspecial->link[1].'" style="color:#ffffff; font-size:14px; text-decoration:none;"><b>Leia mais</b>
					</a>&nbsp;&nbsp;
					<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u='.$nvEspecial->link[1].'" style="text-decoration:none;">
						<img style="padding-left:1px; width:36px !important" border="0" src="https://s3.amazonaws.com/newsletter-gpadrao/icons/novarejo/2018/face_nota.jpg" alt="Compartilhe no Facebook"/>
					</a>
					<a target="_blank" href="https://twitter.com/home?status='.$nvEspecial->link[1].'" style="text-decoration:none;">
						<img border="0" src="https://s3.amazonaws.com/newsletter-gpadrao/icons/novarejo/2018/twitter_nota.jpg" style=" width:36px !important" alt="Compartilhe no Twitter"/>
					</a>
					<a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url='.$nvEspecial->link[1].'" style="text-decoration:none;">
						<img style="padding-left:1px; width:36px !important" border="0" src="https://s3.amazonaws.com/newsletter-gpadrao/icons/novarejo/2018/linkedin_nota.jpg" alt="Compartilhe no Linkedin"/>
					</a>
				</span>
			</td>
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
		<td width="280" height="3" align="center" class="devicewidth" style="background-color:#2c2c2c;" bgcolor="#2c2c2c"></td>
		</tr>
		<tr>
		<td width="280" height="180" align="center" class="devicewidth" bgcolor="#fff">
		<a target="_blank" href="'.$nvEspecial->link[2].'"><img alt="'.$nvEspecial->titulo[2].'" border="0" src="'.$nvEspecial->imagem[2].'" style="width:100%; display: inline-block;" title="Portal NOVAREJO" /></a>
		</td>
		</tr>
		<tr>
		<td>
		<table summary="text" width="280" align="center" border="0" cellpadding="0" cellspacing="0" class="devicewidthinner table-lateral">
		<tbody>
		<tr>
		<td bgcolor="#2c2c2c" style="font-family: Helvetica, arial, sans-serif; font-size: 1px; text-align:left;line-height:20px; padding: 5px 5px; background-color:#2c2c2c">
		<div class="titulo"><a target="_blank" style="color:#ffffff;font-family: Helvetica, arial, sans-serif; text-align:left;line-height:20px;font-size: 18px;text-decoration: none;" href="'.$nvEspecial->link[2].'">'.$nvEspecial->titulo[2].'</a></div>
		</td>
		</tr>
		<tr>
		<td style="font-family: Helvetica, arial, sans-serif; font-size: 14px; text-align:left;line-height: 20px; padding: 0px 10px; color:#ffffff" bgcolor="#2c2c2c">'.$nvEspecial->linhaFina[2].'</td>
		</tr>
		<tr>
		<td width="100%" height="10" bgcolor="#2c2c2c"></td>
		</tr>
		<tr>
		<td bgcolor="#2c2c2c">
		<table align="left" border="0" cellpadding="0" cellspacing="0" class="tablet-button" summary="text" bgcolor="#2c2c2c">
		<tbody>
		<tr>
			<td align="center" height="30" style=" background-color:#2c2c2c; background-clip: padding-box; color:#ffffff;padding: 5px 0 5px 15px ">
				<span style="color:#ffffff;">
					<a target="_blank" href="'.$nvEspecial->link[2].'" style="color:#ffffff; font-size:14px; text-decoration:none;"><b>Leia mais</b>
					</a>&nbsp;&nbsp;
					<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u='.$nvEspecial->link[2].'" style="text-decoration:none;">
						<img style="padding-left:1px; width:36px !important" border="0" src="https://s3.amazonaws.com/newsletter-gpadrao/icons/novarejo/2018/face_nota.jpg" alt="Compartilhe no Facebook"/>
					</a>
					<a target="_blank" href="https://twitter.com/home?status='.$nvEspecial->link[2].'" style="text-decoration:none;">
						<img border="0" src="https://s3.amazonaws.com/newsletter-gpadrao/icons/novarejo/2018/twitter_nota.jpg" style=" width:36px !important" alt="Compartilhe no Twitter"/>
					</a>
					<a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url='.$nvEspecial->link[2].'" style="text-decoration:none;">
						<img style="padding-left:1px; width:36px !important" border="0" src="https://s3.amazonaws.com/newsletter-gpadrao/icons/novarejo/2018/linkedin_nota.jpg" alt="Compartilhe no Linkedin"/>
					</a>
				</span>
			</td>
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
		<td width="280" height="3" align="center" class="devicewidth" style="background-color:#2c2c2c;" bgcolor="#2c2c2c"></td>
		</tr>
		<tr>
		<td width="280" height="180" align="center" class="devicewidth" bgcolor="#fff">
		<a target="_blank" href="'.$nvEspecial->link[3].'"><img alt="'.$nvEspecial->titulo[3].'" border="0" src="'.$nvEspecial->imagem[3].'" style="width:100%; display: inline-block;" title="Portal NOVAREJO" /></a>
		</td>
		</tr>
		<tr>
		<td>
		<table summary="text" width="280" align="center" border="0" cellpadding="0" cellspacing="0" class="devicewidthinner table-lateral">
		<tbody>
		<tr>
		<td bgcolor="#2c2c2c" style="font-family: Helvetica, arial, sans-serif; font-size: 1px; text-align:left;line-height:20px; padding: 5px 5px; background-color:#2c2c2c">
		<div class="titulo"><a target="_blank" style="color:#ffffff;font-family: Helvetica, arial, sans-serif; text-align:left;line-height:20px;font-size: 18px;text-decoration: none;" href="'.$nvEspecial->link[3].'">'.$nvEspecial->titulo[3].'</a></div>
		</td>
		</tr>
		<tr>
		<td style="font-family: Helvetica, arial, sans-serif; font-size: 14px; text-align:left;line-height: 20px; padding: 0px 10px; color:#ffffff" bgcolor="#2c2c2c">'.$nvEspecial->linhaFina[3].'</td>
		</tr>
		<tr>
		<td width="100%" height="10" bgcolor="#2c2c2c"></td>
		</tr>
		<tr>
		<td bgcolor="#2c2c2c">
		<table align="left" border="0" cellpadding="0" cellspacing="0" class="tablet-button" summary="text" bgcolor="#2c2c2c">
		<tbody>
		<tr>
			<td align="center" height="30" style=" background-color:#2c2c2c; background-clip: padding-box; color:#ffffff;padding: 5px 0 5px 15px ">
				<span style="color:#ffffff;">
					<a target="_blank" href="'.$nvEspecial->link[3].'" style="color:#ffffff; font-size:14px; text-decoration:none;"><b>Leia mais</b>
					</a>&nbsp;&nbsp;
					<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u='.$nvEspecial->link[3].'" style="text-decoration:none;">
						<img style="padding-left:1px; width:36px !important" border="0" src="https://s3.amazonaws.com/newsletter-gpadrao/icons/novarejo/2018/face_nota.jpg" alt="Compartilhe no Facebook"/>
					</a>
					<a target="_blank" href="https://twitter.com/home?status='.$nvEspecial->link[3].'" style="text-decoration:none;">
						<img border="0" src="https://s3.amazonaws.com/newsletter-gpadrao/icons/novarejo/2018/twitter_nota.jpg" style=" width:36px !important" alt="Compartilhe no Twitter"/>
					</a>
					<a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url='.$nvEspecial->link[3].'" style="text-decoration:none;">
						<img style="padding-left:1px; width:36px !important" border="0" src="https://s3.amazonaws.com/newsletter-gpadrao/icons/novarejo/2018/linkedin_nota.jpg" alt="Compartilhe no Linkedin"/>
					</a>
				</span>
			</td>
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
		<td width="280" height="3" align="center" class="devicewidth" style="background-color:#2c2c2c;" bgcolor="#2c2c2c"></td>
		</tr>
		<tr>
		<td width="280" height="180" align="center" class="devicewidth" bgcolor="#fff">
		<a target="_blank" href="'.$nvEspecial->link[4].'"><img alt="'.$nvEspecial->titulo[4].'" border="0" src="'.$nvEspecial->imagem[4].'" style="width:100%; display: inline-block;" title="Portal NOVAREJO" /></a>
		</td>
		</tr>
		<tr>
		<td>
		<table summary="text" width="280" align="center" border="0" cellpadding="0" cellspacing="0" class="devicewidthinner table-lateral">
		<tbody>
		<tr>
		<td bgcolor="#2c2c2c" style="font-family: Helvetica, arial, sans-serif; font-size: 1px; text-align:left;line-height:20px; padding: 5px 5px; background-color:#2c2c2c">
		<div class="titulo"><a target="_blank" style="color:#ffffff;font-family: Helvetica, arial, sans-serif; text-align:left;line-height:20px;font-size: 18px;text-decoration: none;" href="'.$nvEspecial->link[4].'">'.$nvEspecial->titulo[4].'</a></div>
		</td>
		</tr>
		<tr>
		<td style="font-family: Helvetica, arial, sans-serif; font-size: 14px; text-align:left;line-height: 20px; padding: 0px 10px; color:#ffffff" bgcolor="#2c2c2c">'.$nvEspecial->linhaFina[4].'</td>
		</tr>
		<tr>
		<td width="100%" height="10" bgcolor="#2c2c2c"></td>
		</tr>
		<tr>
		<td bgcolor="#2c2c2c">
		<table align="left" border="0" cellpadding="0" cellspacing="0" class="tablet-button" summary="text" bgcolor="#2c2c2c">
		<tbody>
		<tr>
			<td align="center" height="30" style=" background-color:#2c2c2c; background-clip: padding-box; color:#ffffff;padding: 5px 0 5px 15px ">
				<span style="color:#ffffff;">
					<a target="_blank" href="'.$nvEspecial->link[4].'" style="color:#ffffff; font-size:14px; text-decoration:none;"><b>Leia mais</b>
					</a>&nbsp;&nbsp;
					<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u='.$nvEspecial->link[4].'" style="text-decoration:none;">
						<img style="padding-left:1px; width:36px !important" border="0" src="https://s3.amazonaws.com/newsletter-gpadrao/icons/novarejo/2018/face_nota.jpg" alt="Compartilhe no Facebook"/>
					</a>
					<a target="_blank" href="https://twitter.com/home?status='.$nvEspecial->link[4].'" style="text-decoration:none;">
						<img border="0" src="https://s3.amazonaws.com/newsletter-gpadrao/icons/novarejo/2018/twitter_nota.jpg" style=" width:36px !important" alt="Compartilhe no Twitter"/>
					</a>
					<a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url='.$nvEspecial->link[4].'" style="text-decoration:none;">
						<img style="padding-left:1px; width:36px !important" border="0" src="https://s3.amazonaws.com/newsletter-gpadrao/icons/novarejo/2018/linkedin_nota.jpg" alt="Compartilhe no Linkedin"/>
					</a>
				</span>
			</td>
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
		<td class="texto-alinhamento-right" style="font-size: 16px; line-height: 20px; font-family:Arial, Helvetica, sans-serif; color:#555555; font-weight:normal; padding:0 10px 20 10px; color: #000000; display:block; text-align: center; text-transform:uppercase;"><b>
		Quer mais conteúdo? <br>
		Então conheça os eventos do Grupo Padrão 2019:</a></b></td>
		</tr>
		<tr>
		<td bgcolor="#fff" style="padding: 0px 0 30px;background:#fff;">
		<div>
		<p style="font-family: Helvetica, arial, sans-serif; font-size: 12px; text-align:center;">

		<a target="_blank" href="https://www.whow.com.br/" style="text-decoration:none"><img src="http://padraoeditorial.com.br/OLD-news-gpadrao/images/logos/whow.jpg" alt="Logo Whow!" title="Logo Whow!" style="width: 182px !important;" border="0" /></a>
		<a target="_blank" href="https://www.conarec.com.br/" style="text-decoration:none"><img src="http://padraoeditorial.com.br/OLD-news-gpadrao/images/logos/conarec.jpg" alt="Logo Conarec" title="Logo Conarec" style="width: 182px !important;" border="0" /></a>
		</p>
		</div>
		</td>
		</tr>
		<tr>
		<td bgcolor="#2c2c2c" style="padding:15px 0;">
		<div>
		<p style="font-family: Helvetica, arial, sans-serif; font-size: 12px; text-align:center;">
		<a target="_blank" href="https://www.facebook.com/novarejo" style="text-decoration:none"><img src="https://s3.amazonaws.com/newsletter-gpadrao/icons/novarejo/2018/face_rodape.jpg" alt="Siga no Facebook" title="Siga no Facebook" border="0" style="width: 49px !important" /></a>
		<a target="_blank" href="https://twitter.com/NOVAREJO" style="text-decoration:none"><img src="https://s3.amazonaws.com/newsletter-gpadrao/icons/novarejo/2018/twitter_rodape.jpg" alt="Siga no Twitter" title="Siga no Twitter" style="width: 49px !important;padding-left:5px" border="0" /></a>
		<a target="_blank" href="https://www.linkedin.com/showcase/novarejo/" style="text-decoration:none"><img src="https://s3.amazonaws.com/newsletter-gpadrao/icons/novarejo/2018/linkedin_rodape.jpg" alt="Grupo no Linkedin" title="Grupo no Linkedin" style="width: 49px !important; padding-left:5px" border="0" /></a>
		<a target="_blank" href="https://www.youtube.com/novarejo" style="text-decoration:none"><img src="https://s3.amazonaws.com/newsletter-gpadrao/icons/novarejo/2018/youtube_rodape.jpg" alt="Siga no YouTube" title="Siga no YouTube" style="width: 49px !important; padding-left:2px" border="0" /></a>
		<a target="_blank" href="https://plus.google.com/107242578347752765766" style="text-decoration:none"><img src="https://s3.amazonaws.com/newsletter-gpadrao/icons/novarejo/2018/gplus_rodape.jpg" alt="Siga no Google+" title="Siga no Google+" style="width: 49px !important; padding-left:2px" border="0" /></a>
		<a target="_blank" href="https://www.instagram.com/novarejo/" style="text-decoration:none"><img src="https://s3.amazonaws.com/newsletter-gpadrao/icons/novarejo/2018/instagram_rodape.jpg" alt="Siga no Instagram" title="Siga no Instagram" style="width: 49px !important; padding-left:5px" border="0" /></a>
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
$nvEspecial->salvaArquivo($conteudo);



