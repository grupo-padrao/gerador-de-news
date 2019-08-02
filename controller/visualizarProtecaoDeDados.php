<?php
require_once("../autoload.php");

$protecaoDeDados = new formDefault();
$protecaoDeDados->titulo = $_POST["titulo"];
$protecaoDeDados->linhaFina = $_POST["linhaFina"];
$protecaoDeDados->link = $_POST["link"];
$protecaoDeDados->imagem = $_POST["imagem"];


$conteudo = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//BR-pt" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/><title>Seminario de Proteção de Dados</title><meta name="viewport" content="width=device-width, initial-scale=1.0"/><style>body{background-color:#ccc}table.container{margin:10px auto 0px auto;font-size:16px;line-height:25px;font-family:Arial,sans-serif}table.footer a{display:inline-block;width:auto}a,img{border:0}table.columns img{display:block}.table-lateral{width:280px}.imgCONAREC{width:245px}.depoimentoCONAREC{width:197px}.tituloCentral{padding:5px 80px 5px 80px}.linhaCentral{padding:0 80px 0 80px}.redesCentral{padding:0 80px 0 80px}.tituloCom a{color:#000;font-size:18px;text-decoration:none}.tituloDef a{color:#000;font-size:18px;text-decoration:none}.tituloExp a{color:#000;font-size:18px;text-decoration:none}.tituloIno a{color:#000;font-size:18px;text-decoration:none}.tituloCon a{color:#000;font-size:18px;text-decoration:none}.experiencia{height:5px;background-color:#BD4CBC}.inovacao{height:5px;background-color:#F6EE26}.comportamento{height:5px;background-color:#F7941E}.defesa{height:5px;background-color:#3B94C4}.consumo{height:5px;background-color:#6EC5A0}.tv{height:5px;background-color:#ef0b0b}.conarec{height:5px;background-color:#C0F20F}.summit{height:5px;background-color:#323F83}@media only screen and (max-width: 600px){table.container{margin:0}table.container, table.container img, table.columns td, table.footer table, table.footer table tbody, table.footer tr, table.footer td{width:100%;height:auto}table.columns td{margin-bottom:10px}.materias-nv{text-align:center;float:none;width:100%}.publicacoes-center{width:50%}table.footer{text-align:center}table.footer td table{text-align:center}.logo-nv{margin-top:25%}.materias-conarec{padding:0;width:100%}.table-lateral{width:100%}.imgCONAREC{width:100%}.depoimentoCONAREC{width:100%}.tituloCentral{padding:10px 20px 10px 20px}.linhaCentral{padding:0 20px 0 20px}.redesCentral{padding:0 20px 0 20px}}@media only screen and (max-width: 540px){.txt-right{width:100%}.texto-alinhamento-right{text-align:center !important}.img-left{width:100%}.txt-left{width:100%}.texto-alinhamento-left{text-align:center !important}.img-right{width:100%}.participe-left{width:100%}.patrocine-right{width:100%}.txt-chat{width:100%}.img-chat{width:60%}.materias-conarec{padding:0;width:100%}.table-lateral{width:100%}.imgCONAREC{width:100%}.img-nota-media{width:100% !important}} </style></head><body style="margin: 0; padding: 0; background-color:#cccccc;" bgcolor="#cccccc">
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
                            <a target="_blank" href="https://www.seminarioprotecaodedados.com.br/">
                                <img border="0" alt="Seminário de Bots e IA" style="display:block; border:none; outline:none; text-decoration:none;" src="https://s3.amazonaws.com/newsletter-gpadrao/seminarios/protecaodedados/2019/04_Abril/22-04/topo_01.jpg" class="img-nota" />
                            </a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td bgcolor="#efefef" height="30" style="background-color: #efefef;"></td>
                </tr>
                

                <tr>
                    <td bgcolor="#efefef">
                        <table summary="text" width="100%" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                            <tbody>
                                <tr>
                                    <td>
                                        <table summary="text" width="290" align="left" border="0" cellpadding="0" cellspacing="0" class="devicewidth materias-conarec">
                                            <tbody>
                                                <tr>
                                                    <td width="295" height="180" align="center" class="devicewidth" bgcolor="#efefef">
                                                        <a target="_blank" href="'.$protecaoDeDados->link[0].'">
                                                            <img src="'.$protecaoDeDados->imagem[0].'" alt="'.$protecaoDeDados->titulo[0].'" width="250" height="251" border="0" class="img-nota-media" style="max-width:250px; display: inline-block; text-align:left;" title="Seminário de Bots e IA" />
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table summary="text" width="280" align="center" border="0" cellpadding="0" cellspacing="0" class="devicewidthinner table-lateral">
                                                            <tbody>
                                                                <tr>
                                                                    <td bgcolor="#efefef" style="font-family: Helvetica, arial, sans-serif; font-size: 1px; text-align:center;line-height:20px; padding: 0px 5px; background-color:#efefef">
                                                                        <div class="tituloCon" style="padding: 5px 10px;text-transform:uppercase">
<a target="_blank" href="'.$protecaoDeDados->link[0].'">

<b>'.$protecaoDeDados->titulo[0].'</b> </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="font-family: Helvetica, arial, sans-serif; font-size: 14px; text-align:center;line-height: 20px; padding: 0px 20px; color:#000;background:#efefef" bgcolor="#efefef">'.$protecaoDeDados->linhaFina[0].'</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="font-family: Helvetica, arial, sans-serif; font-size: 14px; text-align:center;line-height: 20px; padding: 10px 10px; color:#000;background:#efefef" bgcolor="#efefef"><a href="'.$protecaoDeDados->link[0].'" target="_blank" style="color:#00d8ff;text-transform:uppercase;"><b>>> Leia Mais</b></a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td width="100%" height="10" bgcolor="#efefef" style=" text-align:center">
                                                                    
       <span style="color:#ffffff;background-color:#efefef;">
<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u='.$protecaoDeDados->link[0].'" style="text-decoration:none;">                                                                                                    <img src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/cinza/icon-facebook.png" alt="Compartilhe no Facebook" width="30" border="0" style="padding-left:1px; width:30px!important" />                                                                                              </a>                                                                                                <a target="_blank" href="https://twitter.com/home?status='.$protecaoDeDados->link[0].'" style="text-decoration:none;">                                                                                  <img src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/cinza/icon-twitter.png" alt="Compartilhe no Twitter" width="30" border="0" style=" width:30px!important;"/>
</a>
<a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url='.$protecaoDeDados->link[0].'" style="text-decoration:none;">                                                                                                  <img src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/cinza/icon-linkedin.png" alt="Compartilhe no Linkedin" width="30" border="0" style="padding-left:1px; width:30px!important" />                                                                                              </a>
                                                                                                    
                                                                                                    
                                                                                                </span>
                                                                    
                                                                    
                                                                    
                                                                    
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td bgcolor="#ffffff">
                                                                        <table align="left" border="0" cellpadding="0" cellspacing="0" class="tablet-button" summary="text" bgcolor="#2c2c2c">
                                                                            <tbody>
                                                                               
                                                                                
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td width="100%" height="10" bgcolor="#efefef"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <table summary="text" width="290" align="right" border="0" cellpadding="0" cellspacing="0" class="devicewidth materias-conarec">
                                            <tbody>
                                                <tr>
                                                    <td width="295" height="180" align="center" class="devicewidth" bgcolor="#efefef">
                                                        <a target="_blank" href="'.$protecaoDeDados->link[1].'">
                                                            <img src="'.$protecaoDeDados->imagem[1].'" alt="'.$protecaoDeDados->titulo[1].'" width="250" height="251" border="0" class="img-nota-media" style="max-width:250px; display: inline-block; text-align:left;" title="Seminário de Bots e IA" />
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table summary="text" width="280" align="center" border="0" cellpadding="0" cellspacing="0" class="devicewidthinner table-lateral">
                                                            <tbody>
                                                                <tr>
                                                                    <td bgcolor="#efefef" style="font-family: Helvetica, arial, sans-serif; font-size: 1px; text-align:center;line-height:20px; padding: 0px 5px; background-color:#efefef">
                                                                        <div class="tituloCon" style="padding: 5px 10px;text-transform:uppercase">
<a target="_blank" href="'.$protecaoDeDados->link[1].'">

<b>'.$protecaoDeDados->titulo[1].'</b> </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="font-family: Helvetica, arial, sans-serif; font-size: 14px; text-align:center;line-height: 20px; padding: 0px 20px; color:#000;background:#efefef" bgcolor="#efefef">'.$protecaoDeDados->linhaFina[1].'</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="font-family: Helvetica, arial, sans-serif; font-size: 14px; text-align:center;line-height: 20px; padding: 10px 10px; color:#000;background:#efefef" bgcolor="#efefef"><a href="'.$protecaoDeDados->link[1].'" target="_blank" style="color:#00d8ff;text-transform:uppercase;"><b>>> Leia Mais</b></a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td width="100%" height="10" bgcolor="#efefef" style=" text-align:center">
                                                                    
       <span style="color:#ffffff;background-color:#efefef;">
<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u='.$protecaoDeDados->link[1].'" style="text-decoration:none;">                                                                                                    <img src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/cinza/icon-facebook.png" alt="Compartilhe no Facebook" width="30" border="0" style="padding-left:1px; width:30px!important" />                                                                                              </a>                                                                                                <a target="_blank" href="https://twitter.com/home?status='.$protecaoDeDados->link[1].'" style="text-decoration:none;">                                                                                  <img src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/cinza/icon-twitter.png" alt="Compartilhe no Twitter" width="30" border="0" style=" width:30px!important;"/>
</a>
<a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url='.$protecaoDeDados->link[1].'" style="text-decoration:none;">                                                                                                  <img src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/cinza/icon-linkedin.png" alt="Compartilhe no Linkedin" width="30" border="0" style="padding-left:1px; width:30px!important" />                                                                                              </a>
                                                                                                    
                                                                                                    
                                                                                                </span>
                                                                    
                                                                    
                                                                    
                                                                    
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td bgcolor="#ffffff">
                                                                        <table align="left" border="0" cellpadding="0" cellspacing="0" class="tablet-button" summary="text" bgcolor="#2c2c2c">
                                                                            <tbody>
                                                                               
                                                                                
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td width="100%" height="10" bgcolor="#efefef"></td>
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
                                    <td bgcolor="#efefef" height="30" style="background-color: #efefef;"></td>
                                </tr>
                               
                                <tr>
                    <td bgcolor="#efefef" style="background-color:##efefef">
                        <table summary="text" width="100%" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                            <tbody>
                                <tr>
                                    <td>
                                        <table summary="text" width="290" align="left" border="0" cellpadding="0" cellspacing="0" class="devicewidth materias-conarec">
                                            <tbody>
                                                <tr>
                                                    <td width="295" height="180" align="center" class="devicewidth" bgcolor="#efefef">
                                                        <a target="_blank" href="'.$protecaoDeDados->link[2].'">
                                                            <img src="'.$protecaoDeDados->imagem[2].'" alt="'.$protecaoDeDados->titulo[2].'" width="250" height="251" border="0" class="img-nota-media" style="max-width:250px; display: inline-block; text-align:left;" title="Seminário de Bots e IA" />
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table summary="text" width="280" align="center" border="0" cellpadding="0" cellspacing="0" class="devicewidthinner table-lateral">
                                                            <tbody>
                                                                <tr>
                                                                    <td bgcolor="#efefef" style="font-family: Helvetica, arial, sans-serif; font-size: 1px; text-align:center;line-height:20px; padding: 0px 5px; background-color:#efefef">
                                                                        <div class="tituloCon" style="padding: 5px 10px;text-transform:uppercase">
<a target="_blank" href="'.$protecaoDeDados->link[2].'">

<b>'.$protecaoDeDados->titulo[2].'</b> </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="font-family: Helvetica, arial, sans-serif; font-size: 14px; text-align:center;line-height: 20px; padding: 0px 20px; color:#000;background:#efefef" bgcolor="#efefef">'.$protecaoDeDados->linhaFina[2].'</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="font-family: Helvetica, arial, sans-serif; font-size: 14px; text-align:center;line-height: 20px; padding: 10px 10px; color:#000;background:#efefef" bgcolor="#efefef"><a href="'.$protecaoDeDados->link[2].'" target="_blank" style="color:#00d8ff;text-transform:uppercase;"><b>>> Leia Mais</b></a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td width="100%" height="10" bgcolor="#efefef" style=" text-align:center">
                                                                    
       <span style="color:#ffffff;background-color:#efefef;">
<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u='.$protecaoDeDados->link[2].'" style="text-decoration:none;">                                                                                                    <img src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/cinza/icon-facebook.png" alt="Compartilhe no Facebook" width="30" border="0" style="padding-left:1px; width:30px!important" />                                                                                              </a>                                                                                                <a target="_blank" href="https://twitter.com/home?status='.$protecaoDeDados->link[2].'" style="text-decoration:none;">                                                                                  <img src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/cinza/icon-twitter.png" alt="Compartilhe no Twitter" width="30" border="0" style=" width:30px!important;"/>
</a>
<a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url='.$protecaoDeDados->link[2].'" style="text-decoration:none;">                                                                                                  <img src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/cinza/icon-linkedin.png" alt="Compartilhe no Linkedin" width="30" border="0" style="padding-left:1px; width:30px!important" />                                                                                              </a>
                                                                                                    
                                                                                                    
                                                                                                </span>
                                                                    
                                                                    
                                                                    
                                                                    
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td bgcolor="#ffffff">
                                                                        <table align="left" border="0" cellpadding="0" cellspacing="0" class="tablet-button" summary="text" bgcolor="#2c2c2c">
                                                                            <tbody>
                                                                               
                                                                                
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td width="100%" height="10" bgcolor="#efefef"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <table summary="text" width="290" align="right" border="0" cellpadding="0" cellspacing="0" class="devicewidth materias-conarec">
                                            <tbody>
                                                <tr>
                                                    <td width="295" height="180" align="center" class="devicewidth" bgcolor="#efefef">
                                                        <a target="_blank" href="'.$protecaoDeDados->link[3].'">
                                                            <img src="'.$protecaoDeDados->imagem[1].'" alt="'.$protecaoDeDados->titulo[3].'" width="250" height="251" border="0" class="img-nota-media" style="max-width:250px; display: inline-block; text-align:left;" title="Seminário de Bots e IA" />
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table summary="text" width="280" align="center" border="0" cellpadding="0" cellspacing="0" class="devicewidthinner table-lateral">
                                                            <tbody>
                                                                <tr>
                                                                    <td bgcolor="#efefef" style="font-family: Helvetica, arial, sans-serif; font-size: 1px; text-align:center;line-height:20px; padding: 0px 5px; background-color:#efefef">
                                                                        <div class="tituloCon" style="padding: 5px 10px;text-transform:uppercase">
<a target="_blank" href="'.$protecaoDeDados->link[3].'">

<b>'.$protecaoDeDados->titulo[3].'</b> </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="font-family: Helvetica, arial, sans-serif; font-size: 14px; text-align:center;line-height: 20px; padding: 0px 20px; color:#000;background:#efefef" bgcolor="#efefef">'.$protecaoDeDados->linhaFina[3].'</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="font-family: Helvetica, arial, sans-serif; font-size: 14px; text-align:center;line-height: 20px; padding: 10px 10px; color:#000;background:#efefef" bgcolor="#efefef"><a href="'.$protecaoDeDados->link[3].'" target="_blank" style="color:#00d8ff;text-transform:uppercase;"><b>>> Leia Mais</b></a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td width="100%" height="10" bgcolor="#efefef" style=" text-align:center">
                                                                    
       <span style="color:#ffffff;background-color:#efefef;">
<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u='.$protecaoDeDados->link[3].'" style="text-decoration:none;">                                                                                                    <img src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/cinza/icon-facebook.png" alt="Compartilhe no Facebook" width="30" border="0" style="padding-left:1px; width:30px!important" />                                                                                              </a>                                                                                                <a target="_blank" href="https://twitter.com/home?status='.$protecaoDeDados->link[3].'" style="text-decoration:none;">                                                                                  <img src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/cinza/icon-twitter.png" alt="Compartilhe no Twitter" width="30" border="0" style=" width:30px!important;"/>
</a>
<a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url='.$protecaoDeDados->link[3].'" style="text-decoration:none;">                                                                                                  <img src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/cinza/icon-linkedin.png" alt="Compartilhe no Linkedin" width="30" border="0" style="padding-left:1px; width:30px!important" />                                                                                              </a>
                                                                                                    
                                                                                                    
                                                                                                </span>
                                                                    
                                                                    
                                                                    
                                                                    
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td bgcolor="#ffffff">
                                                                        <table align="left" border="0" cellpadding="0" cellspacing="0" class="tablet-button" summary="text" bgcolor="#2c2c2c">
                                                                            <tbody>
                                                                               
                                                                                
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td width="100%" height="10" bgcolor="#efefef"></td>
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
                                    <td bgcolor="#efefef" height="30" style="background-color: #efefef;"></td>
                                </tr>
                                
                                <tr>
                                    <td bgcolor="#ffffff" height="30" style="background-color: #ffffff;"></td>
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
                                    <td bgcolor="#ffffff">
                                        <table summary="text" width="100%" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                                            <tbody>
                                                
                                               
                                                <tr>
                                                    <td bgcolor="#fff" style="background:#fff;">
                                                        <div>
                                                            <p style="font-family: Helvetica, arial, sans-serif; font-size: 12px; text-align:center;">
                                                                <a target="_blank" href="https://www.facebook.com/grupopadrao/" style="text-decoration:none">
                                                                    <img src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/preto/icon-facebook.png
" alt="Siga no Facebook" title="Siga no Facebook" border="0" style="width: 49px !important" />
                                                                </a>
                                                                <a target="_blank" href="https://twitter.com/grupopadrao" style="text-decoration:none">
                                                                    <img src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/preto/icon-twitter.png
" alt="Siga no Twitter" title="Siga no Twitter" style="width: 49px !important;padding-left:5px" border="0" />
                                                                </a>
                                                                <a target="_blank" href="https://www.linkedin.com/company/grupo-padr-o" style="text-decoration:none">
                                                                    <img src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/preto/icon-linkedin.png
" alt="Grupo no Linkedin" title="Grupo no Linkedin" style="width: 49px !important; padding-left:5px" border="0" />
                                                                </a>
                                                                <a target="_blank" href="https://www.youtube.com/user/consumidormoderno" style="text-decoration:none">
                                                                    <img src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/preto/icon-youtube.png
" alt="Siga no YouTube" title="Siga no YouTube" style="width: 49px !important; padding-left:2px" border="0" />
                                                            </a>
                                                            
                                                            <a target="_blank" href="https://www.instagram.com/consumidormoderno/" style="text-decoration:none">
                                                                                                                       <png
" alt="Siga no Instagram" title="Siga no Instagram" style="width: 49px !important; padding-left:5px" border="0" /></a></p>
                                                        </div>
                                                    </td>
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
$protecaoDeDados->salvaArquivo($conteudo);