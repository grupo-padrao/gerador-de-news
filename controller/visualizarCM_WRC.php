<?php 

require_once("../autoload.php");

$cmWRC = new formDefault();
$cmWRC->titulo = $_POST["titulo"];
$cmWRC->linhaFina = $_POST["linhaFina"];
$cmWRC->link = $_POST["link"];
$cmWRC->imagem = $_POST["imagem"];

// echo "<pre>";
// print_r($cmWRC->titulo);
// echo "</pre>";




$conteudo = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//BR-pt" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/><title>Consumidor Moderno WRC</title><meta name="viewport" content="width=device-width, initial-scale=1.0"/><style>body{background-color:#ccc}table.container{margin:10px auto 0px auto;font-size:16px;line-height:25px;font-family:Arial,sans-serif}table.footer a{display:inline-block;width:auto}a,img{border:0}table.columns img{display:block}.table-lateral{width:280px}.imgCONAREC{width:245px}.depoimentoCONAREC{width:197px}.tituloCentral{padding:5px 80px 5px 80px}.linhaCentral{padding:0 80px 0 80px}.redesCentral{padding:0 80px 0 80px}.tituloCom a{color:#000;font-size:18px;text-decoration:none}.tituloDef a{color:#000;font-size:18px;text-decoration:none}.tituloExp a{color:#000;font-size:18px;text-decoration:none}.tituloIno a{color:#000;font-size:18px;text-decoration:none}.tituloCon a{color:#000;font-size:18px;text-decoration:none}.experiencia{height:5px;background-color:#BD4CBC}.inovacao{height:5px;background-color:#F6EE26}.comportamento{height:5px;background-color:#F7941E}.defesa{height:5px;background-color:#3B94C4}.consumo{height:5px;background-color:#6EC5A0}.tv{height:5px;background-color:#ef0b0b}.conarec{height:5px;background-color:#C0F20F}.summit{height:5px;background-color:#323F83}@media only screen and (max-width: 600px){table.container{margin:0}table.container, table.container img, table.columns td, table.footer table, table.footer table tbody, table.footer tr, table.footer td{width:100%;height:auto}table.columns td{margin-bottom:10px}.materias-nv{text-align:center;float:none;width:100%}.publicacoes-center{width:50%}table.footer{text-align:center}table.footer td table{text-align:center}.logo-nv{margin-top:25%}.materias-conarec{padding:0;width:100%}.table-lateral{width:100%}.imgCONAREC{width:100%}.depoimentoCONAREC{width:100%}.tituloCentral{padding:10px 20px 10px 20px}.linhaCentral{padding:0 20px 0 20px}.redesCentral{padding:0 20px 0 20px}}@media only screen and (max-width: 540px){.txt-right{width:100%}.texto-alinhamento-right{text-align:center !important}.img-left{width:100%}.txt-left{width:100%}.texto-alinhamento-left{text-align:center !important}.img-right{width:100%}.participe-left{width:100%}.patrocine-right{width:100%}.txt-chat{width:100%}.img-chat{width:60%}.materias-conarec{padding:0;width:100%}.table-lateral{width:100%}.imgCONAREC{width:100%}.img-nota-media{width:100% !important} }
</style>
</head>
<body style="margin: 0; padding: 0; background-color:#cccccc;" bgcolor="#cccccc">
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
                            <a target="_blank" href="https://www.consumidormoderno.com.br/">
                                <img border="0" alt="Consumidor Moderno" style="display:block; border:none; outline:none; text-decoration:none;" src="https://s3.amazonaws.com/newsletter-gpadrao/cm/2019/05-Maio/17-05/wrc/img_01.jpg" class="img-nota" />
                            </a>
                        </div>
                    </td>
                </tr>
              
                <tr>
                    <td bgcolor="#ffffff" height="30" style="background-color: #ffffff;"></td>
                </tr>
				<tr>
                    <td bgcolor="#ffffff" style="font-family: Helvetica, arial, sans-serif; color: #000000; text-align:left;line-height:40px; padding: 20px 20px; font-size: 40px">
                        <div style="color: #000000;color:#000;">
                            <a target="_blank" href="'.$cmWRC->link[0].'" style="color:#000;">

'.$cmWRC->titulo[0].'

</a>
                        </div>
                    </td>
                </tr>
                
                
                <tr>
                    <td bgcolor="#FFFFFF" align="center" width="600" style="padding: 0px 0 0px 0px;" class="logo">
                        <div align="center">
                            <a target="_blank" href="'.$cmWRC->link[0].'">
                                <img border="0" alt="'.$cmWRC->titulo[0].'" style="display:block; border:none; outline:none; text-decoration:none; width:95%; text-align:center; margin:0 auto;" src="'.$cmWRC->imagem[0].'" class="img-nota" />
                            </a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td bgcolor="#fff" align="left" style="font-family: helvetica, arial, sans-serif; font-size: 15px; text-align:left; line-height: 20px; padding: 10px 20px 20px;color:#696969;background-color:#fff;">'.$cmWRC->linhaFina[0].'</td>
                </tr>
                <tr>
                    <td align="left" style=" background-color:#ffffff; background-clip: padding-box; color:#ffffff;padding: 0px 20px 0px 20px;text-align:left; ">   <span style="color:#ffffff;">                                     
<a target="_blank" href="'.$cmWRC->link[0].'" style="color:#000; font-size:15px; text-decoration:none;">
<b><img src="https://portalnovarejo.com.br/ns/2019/05-Maio/16-05/wrc/images/img_02.jpg" alt="Compartilhe no Facebook" width="97" height="29" border="0" style="padding-left:1px; width:97px!important;vertical-align:bottom" /> </b></a>                            &nbsp; <a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url='.$cmWRC->link[0].'&title=&summary=&source=" style="text-decoration:none;">                                                                                                    <img src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/quadrado-preto/icon-linkedin.png" alt="Compartilhe no Facebook" width="26" border="0" style="padding-left:1px; width:26px!important;vertical-align:bottom" />                                                                                              </a> &nbsp;                                                                                                <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u='.$cmWRC->link[0].'" style="text-decoration:none;">                                                                                  <img src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/quadrado-preto/icon-facebook.png" alt="Compartilhe no Twitter" width="27" border="0" style=" width:27px!important;vertical-align:bottom"/>
</a>
 &nbsp;
<a target="_blank" href="https://twitter.com/home?status='.$cmWRC->link[0].'" style="text-decoration:none;">                                                                                  <img src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/quadrado-preto/icon-twitter.png" alt="Compartilhe no Twitter" width="27" border="0" style=" width:27px!important;vertical-align:bottom"/>
</a> &nbsp;<a target="_blank" href="https://api.whatsapp.com/send?text=Veja esta matéria:'.$cmWRC->link[0].'" style="text-decoration:none;">

<img src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/quadrado-preto/icon-whatsapp.png" alt="Compartilhe no Twitter" width="27" border="0" style=" width:27px!important;vertical-align:bottom"/></a>

</span>  &nbsp;
                    </td>
                </tr>

                <tr>
                    <td bgcolor="#ffffff" height="50" style="background-color: #ffffff;"></td>
                </tr>
				<tr>
                    <td bgcolor="#FFFFFF" width="600" style="padding: 0px 0 0px 0px;" class="logo">
                        <div align="center">
                            
                                <img border="0" alt="Consumidor Moderno" style="display:block; border:none; outline:none; text-decoration:none;" src="https://s3.amazonaws.com/newsletter-gpadrao/cm/2019/05-Maio/17-05/wrc/img_03.jpg" class="img-nota" />
                            
                        </div>
                    </td>
                </tr>
                <tr>
                    <td bgcolor="#343432" height="30" style="background-color: #343432"></td>
                </tr>
                <tr>
                    <td bgcolor="#343432">
                        <table summary="text" width="100%" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                            <tbody>
                                <tr>
                                    <td>
                                        <table summary="text" width="255" align="left" border="0" cellpadding="0" cellspacing="0" class="devicewidth materias-conarec">
                                            <tbody>
											<tr>
                                                    <td width="280" align="center" class="devicewidth" bgcolor="#343432">
           <div style="background:#e7af29;width:252px; height:10px; margin 0 auto;"></div>
                                                        
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="280" height="180" align="center" class="devicewidth" bgcolor="#343432">
                                                        <a target="_blank" href="'.$cmWRC->link[1].'">
                                                            <img class="img-nota-media" alt="Consumidor Moderno" border="0" src="'.$cmWRC->imagem[1].'" style="width:90%; display: inline-block; text-align:left;" title="Consumidor Moderno" />
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table summary="text" width="280" align="center" border="0" cellpadding="0" cellspacing="0" class="devicewidthinner table-lateral">
                                                            <tbody>
                                                                <tr>
                                                                    <td bgcolor="#343432" style="font-family: Helvetica, arial, sans-serif; font-size: 16px; text-align:left;line-height:20px; padding: 0px 0px 0 5px; background-color:#343432">
                                                                        <div class="" style="padding: 5px 10px">
<a target="_blank" href="'.$cmWRC->link[1].'" style="text-transform:uppercase;color:#fff; text-decoration:none;">

<b>'.$cmWRC->titulo[1].'</b></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                               
                                                                <tr>
                                                                    <td style="font-family: Helvetica, arial, sans-serif; font-size: 14px; text-align:left;line-height: 20px; padding: 0px 10px 0; color:#fff" bgcolor="#343432">'.$cmWRC->linhaFina[1].'</td>
                                                                </tr>
                                                                <tr>
                                                                    <td width="100%" height="10" bgcolor="#343432"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td bgcolor="#343432">
                                                                        <table align="left" border="0" cellpadding="0" cellspacing="0" class="tablet-button" summary="text" bgcolor="#2c2c2c">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td width="103" align="left" style=" background-color:#343432; color:#ffffff;padding: 0px 0 0px 15px;text-align:left;font-size:13px; ">   <span style="color:#ffffff;background-color:#343432;">                                     
<a target="_blank" href="'.$cmWRC->link[1].'" style="color:#fff; font-size:13px; text-decoration:none;">

<b><img src="https://portalnovarejo.com.br/ns/2019/05-Maio/16-05/wrc/images/img_04.jpg" alt="Compartilhe no Facebook" width="97" height="29" border="0" style="padding-left:1px; width:97px!important;vertical-align:bottom" /> </b></a>      </b>                                                                                                                                                </span> 
                    </td>
                                                                                    <td width="148" align="left" style=" background-color:#343432; background-clip: padding-box; color:#ffffff; padding: 0px 7px;">    <span style="color:#ffffff;background-color:#343432;">
                               
                          <a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url='.$cmWRC->link[1].'&title=&summary=&source=" style="text-decoration:none;">                                                                                                    <img src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/quadrado-preto/icon-linkedin.png" alt="Compartilhe no Facebook" width="26" border="0" style="padding-left:1px; width:22px!important;vertical-align:bottom" />                           &nbsp;                                                                    </a>                                                                                                <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u='.$cmWRC->link[1].'" style="text-decoration:none;">                                                                                  <img src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/quadrado-preto/icon-facebook.png" alt="Compartilhe no Twitter" width="27" border="0" style=" width:22px!important;vertical-align:bottom;padding-left:3px;"/>
</a>
  &nbsp;
<a target="_blank" href="https://twitter.com/home?status='.$cmWRC->link[1].'" style="text-decoration:none;">                                                                                  <img src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/quadrado-preto/icon-twitter.png" alt="Compartilhe no Twitter" width="27" border="0" style=" width:22px!important;vertical-align:bottom;padding-left:3px;"/>
</a>  &nbsp;<a target="_blank" href="https://api.whatsapp.com/send?text=Veja esta matéria:'.$cmWRC->link[1].'" style="text-decoration:none;">

<img src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/quadrado-preto/icon-whatsapp.png" alt="Compartilhe no Twitter" width="27" border="0" style=" width:22px!important;vertical-align:bottom;padding-left:3px;"/></a>
                                                                                      
                                                                                                </span>
                                                                                    </td>
                                                                                </tr>
                                                                                
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td width="100%" height="10" bgcolor="#343432"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <table summary="text" width="255" align="right" border="0" cellpadding="0" cellspacing="0" class="devicewidth materias-conarec">
                                            <tbody>
											<tr>
                                                    <td width="280" align="center" class="devicewidth" bgcolor="#343432">
           <div style="background:#e7af29;width:252px; height:10px; margin 0 auto;"></div>
                                                        
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="280" height="180" align="center" class="devicewidth" bgcolor="#343432">
                                                        <a target="_blank" href="'.$cmWRC->link[2].'">
                                                            <img class="img-nota-media" alt="Consumidor Moderno" border="0" src="'.$cmWRC->imagem[2].'" style="width:90%; display: inline-block; text-align:left;" title="Consumidor Moderno" />
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table summary="text" width="280" align="center" border="0" cellpadding="0" cellspacing="0" class="devicewidthinner table-lateral">
                                                            <tbody>
                                                                <tr>
                                                                    <td bgcolor="#343432" style="font-family: Helvetica, arial, sans-serif; font-size: 16px; text-align:left;line-height:20px; padding: 0px 0px 0 5px; background-color:#343432">
                                                                        <div class="" style="padding: 5px 10px">
<a target="_blank" href="'.$cmWRC->link[2].'" style="text-transform:uppercase;color:#fff; text-decoration:none;">

<b>'.$cmWRC->titulo[2].'</b></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                               
                                                                <tr>
                                                                    <td style="font-family: Helvetica, arial, sans-serif; font-size: 14px; text-align:left;line-height: 20px; padding: 0px 10px 0; color:#fff" bgcolor="#343432">'.$cmWRC->linhaFina[2].'</td>
                                                                </tr>
                                                                <tr>
                                                                    <td width="100%" height="10" bgcolor="#343432"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td bgcolor="#343432">
                                                                        <table align="left" border="0" cellpadding="0" cellspacing="0" class="tablet-button" summary="text" bgcolor="#2c2c2c">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td width="103" align="left" style=" background-color:#343432; color:#ffffff;padding: 0px 0 0px 15px;text-align:left;font-size:13px; ">   <span style="color:#ffffff;background-color:#343432;">                                     
<a target="_blank" href="'.$cmWRC->link[2].'" style="color:#fff; font-size:13px; text-decoration:none;">

<b><img src="https://portalnovarejo.com.br/ns/2019/05-Maio/16-05/wrc/images/img_04.jpg" alt="Compartilhe no Facebook" width="97" height="29" border="0" style="padding-left:1px; width:97px!important;vertical-align:bottom" /> </b></a>      </b>                                                                                                                                                </span> 
                    </td>
                                                                                    <td width="148" align="left" style=" background-color:#343432; background-clip: padding-box; color:#ffffff; padding: 0px 7px;">    <span style="color:#ffffff;background-color:#343432;">
                               
                          <a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url='.$cmWRC->link[2].'&title=&summary=&source=" style="text-decoration:none;">                                                                                                    <img src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/quadrado-preto/icon-linkedin.png" alt="Compartilhe no Facebook" width="26" border="0" style="padding-left:1px; width:22px!important;vertical-align:bottom" />                           &nbsp;                                                                    </a>                                                                                                <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u='.$cmWRC->link[2].'" style="text-decoration:none;">                                                                                  <img src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/quadrado-preto/icon-facebook.png" alt="Compartilhe no Twitter" width="27" border="0" style=" width:22px!important;vertical-align:bottom;padding-left:3px;"/>
</a>
  &nbsp;
<a target="_blank" href="https://twitter.com/home?status='.$cmWRC->link[2].'" style="text-decoration:none;">                                                                                  <img src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/quadrado-preto/icon-twitter.png" alt="Compartilhe no Twitter" width="27" border="0" style=" width:22px!important;vertical-align:bottom;padding-left:3px;"/>
</a>  &nbsp;<a target="_blank" href="https://api.whatsapp.com/send?text=Veja esta matéria:'.$cmWRC->link[2].'" style="text-decoration:none;">

<img src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/quadrado-preto/icon-whatsapp.png" alt="Compartilhe no Twitter" width="27" border="0" style=" width:22px!important;vertical-align:bottom;padding-left:3px;"/></a>
                                                                                      
                                                                                                </span>
                                                                                    </td>
                                                                                </tr>
                                                                                
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td width="100%" height="10" bgcolor="#343432"></td>
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
                                    <td bgcolor="#343432" height="30" style="background-color: #343432;"></td>
                                </tr>
                                <tr>
                    <td bgcolor="#343432">
                        <table summary="text" width="100%" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                            <tbody>
                                <tr>
                                    <td>
                                        <table summary="text" width="255" align="left" border="0" cellpadding="0" cellspacing="0" class="devicewidth materias-conarec">
                                            <tbody>
											<tr>
                                                    <td width="280" align="center" class="devicewidth" bgcolor="#343432">
           <div style="background:#e7af29;width:252px; height:10px; margin 0 auto;"></div>
                                                        
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="280" height="180" align="center" class="devicewidth" bgcolor="#343432">
                                                        <a target="_blank" href="'.$cmWRC->link[3].'">
                                                            <img class="img-nota-media" alt="Consumidor Moderno" border="0" src="'.$cmWRC->imagem[3].'" style="width:90%; display: inline-block; text-align:left;" title="Consumidor Moderno" />
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table summary="text" width="280" align="center" border="0" cellpadding="0" cellspacing="0" class="devicewidthinner table-lateral">
                                                            <tbody>
                                                                <tr>
                                                                    <td bgcolor="#343432" style="font-family: Helvetica, arial, sans-serif; font-size: 16px; text-align:left;line-height:20px; padding: 0px 0px 0 5px; background-color:#343432">
                                                                        <div class="" style="padding: 5px 10px">
<a target="_blank" href="'.$cmWRC->link[3].'" style="text-transform:uppercase;color:#fff; text-decoration:none;">

<b>'.$cmWRC->titulo[3].'</b></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                               
                                                                <tr>
                                                                    <td style="font-family: Helvetica, arial, sans-serif; font-size: 14px; text-align:left;line-height: 20px; padding: 0px 10px 0; color:#fff" bgcolor="#343432">'.$cmWRC->linhaFina[3].'</td>
                                                                </tr>
                                                                <tr>
                                                                    <td width="100%" height="10" bgcolor="#343432"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td bgcolor="#343432">
                                                                        <table align="left" border="0" cellpadding="0" cellspacing="0" class="tablet-button" summary="text" bgcolor="#2c2c2c">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td width="103" align="left" style=" background-color:#343432; color:#ffffff;padding: 0px 0 0px 15px;text-align:left;font-size:13px; ">   <span style="color:#ffffff;background-color:#343432;">                                     
<a target="_blank" href="'.$cmWRC->link[3].'" style="color:#fff; font-size:13px; text-decoration:none;">

<b><img src="https://portalnovarejo.com.br/ns/2019/05-Maio/16-05/wrc/images/img_04.jpg" alt="Compartilhe no Facebook" width="97" height="29" border="0" style="padding-left:1px; width:97px!important;vertical-align:bottom" /> </b></a>      </b>                                                                                                                                                </span> 
                    </td>
                                                                                    <td width="148" align="left" style=" background-color:#343432; background-clip: padding-box; color:#ffffff; padding: 0px 7px;">    <span style="color:#ffffff;background-color:#343432;">
                               
                          <a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url='.$cmWRC->link[3].'&title=&summary=&source=" style="text-decoration:none;">                                                                                                    <img src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/quadrado-preto/icon-linkedin.png" alt="Compartilhe no Facebook" width="26" border="0" style="padding-left:1px; width:22px!important;vertical-align:bottom" />                           &nbsp;                                                                    </a>                                                                                                <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u='.$cmWRC->link[3].'" style="text-decoration:none;">                                                                                  <img src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/quadrado-preto/icon-facebook.png" alt="Compartilhe no Twitter" width="27" border="0" style=" width:22px!important;vertical-align:bottom;padding-left:3px;"/>
</a>
  &nbsp;
<a target="_blank" href="https://twitter.com/home?status='.$cmWRC->link[3].'" style="text-decoration:none;">                                                                                  <img src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/quadrado-preto/icon-twitter.png" alt="Compartilhe no Twitter" width="27" border="0" style=" width:22px!important;vertical-align:bottom;padding-left:3px;"/>
</a>  &nbsp;<a target="_blank" href="https://api.whatsapp.com/send?text=Veja esta matéria:'.$cmWRC->link[3].'" style="text-decoration:none;">

<img src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/quadrado-preto/icon-whatsapp.png" alt="Compartilhe no Twitter" width="27" border="0" style=" width:22px!important;vertical-align:bottom;padding-left:3px;"/></a>
                                                                                      
                                                                                                </span>
                                                                                    </td>
                                                                                </tr>
                                                                                
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td width="100%" height="10" bgcolor="#343432"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <table summary="text" width="255" align="right" border="0" cellpadding="0" cellspacing="0" class="devicewidth materias-conarec">
                                            <tbody>
											<tr>
                                                    <td width="280" align="center" class="devicewidth" bgcolor="#343432">
           <div style="background:#e7af29;width:252px; height:10px; margin 0 auto;"></div>
                                                        
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="280" height="180" align="center" class="devicewidth" bgcolor="#343432">
                                                        <a target="_blank" href="'.$cmWRC->link[4].'">
                                                            <img class="img-nota-media" alt="Consumidor Moderno" border="0" src="'.$cmWRC->imagem[4].'" style="width:90%; display: inline-block; text-align:left;" title="Consumidor Moderno" />
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table summary="text" width="280" align="center" border="0" cellpadding="0" cellspacing="0" class="devicewidthinner table-lateral">
                                                            <tbody>
                                                                <tr>
                                                                    <td bgcolor="#343432" style="font-family: Helvetica, arial, sans-serif; font-size: 16px; text-align:left;line-height:20px; padding: 0px 0px 0 5px; background-color:#343432">
                                                                        <div class="" style="padding: 5px 10px">
<a target="_blank" href="'.$cmWRC->link[4].'" style="text-transform:uppercase;color:#fff; text-decoration:none;">

<b>'.$cmWRC->titulo[4].'</b></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                               
                                                                <tr>
                                                                    <td style="font-family: Helvetica, arial, sans-serif; font-size: 14px; text-align:left;line-height: 20px; padding: 0px 10px 0; color:#fff" bgcolor="#343432">'.$cmWRC->linhaFina[4].'</td>
                                                                </tr>
                                                                <tr>
                                                                    <td width="100%" height="10" bgcolor="#343432"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td bgcolor="#343432">
                                                                        <table align="left" border="0" cellpadding="0" cellspacing="0" class="tablet-button" summary="text" bgcolor="#2c2c2c">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td width="103" align="left" style=" background-color:#343432; color:#ffffff;padding: 0px 0 0px 15px;text-align:left;font-size:13px; ">   <span style="color:#ffffff;background-color:#343432;">                                     
<a target="_blank" href="'.$cmWRC->link[4].'" style="color:#fff; font-size:13px; text-decoration:none;">

<b><img src="https://portalnovarejo.com.br/ns/2019/05-Maio/16-05/wrc/images/img_04.jpg" alt="Compartilhe no Facebook" width="97" height="29" border="0" style="padding-left:1px; width:97px!important;vertical-align:bottom" /> </b></a>      </b>                                                                                                                                                </span> 
                    </td>
                                                                                    <td width="148" align="left" style=" background-color:#343432; background-clip: padding-box; color:#ffffff; padding: 0px 7px;">    <span style="color:#ffffff;background-color:#343432;">
                               
                          <a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url='.$cmWRC->link[4].'&title=&summary=&source=" style="text-decoration:none;">                                                                                                    <img src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/quadrado-preto/icon-linkedin.png" alt="Compartilhe no Facebook" width="26" border="0" style="padding-left:1px; width:22px!important;vertical-align:bottom" />                           &nbsp;                                                                    </a>                                                                                                <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u='.$cmWRC->link[4].'" style="text-decoration:none;">                                                                                  <img src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/quadrado-preto/icon-facebook.png" alt="Compartilhe no Twitter" width="27" border="0" style=" width:22px!important;vertical-align:bottom;padding-left:3px;"/>
</a>
  &nbsp;
<a target="_blank" href="https://twitter.com/home?status='.$cmWRC->link[4].'" style="text-decoration:none;">                                                                                  <img src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/quadrado-preto/icon-twitter.png" alt="Compartilhe no Twitter" width="27" border="0" style=" width:22px!important;vertical-align:bottom;padding-left:3px;"/>
</a>  &nbsp;<a target="_blank" href="https://api.whatsapp.com/send?text=Veja esta matéria:'.$cmWRC->link[4].'" style="text-decoration:none;">

<img src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/quadrado-preto/icon-whatsapp.png" alt="Compartilhe no Twitter" width="27" border="0" style=" width:22px!important;vertical-align:bottom;padding-left:3px;"/></a>
                                                                                      
                                                                                                </span>
                                                                                    </td>
                                                                                </tr>
                                                                                
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td width="100%" height="10" bgcolor="#343432"></td>
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
                                    <td bgcolor="#343432" height="30" style="background-color: #343432;"></td>
                                </tr>
                                
                                
                        </table>
                    </td>
                </tr>
                                <tr>
                                                    <td bgcolor="#343432" width="600" style="padding: 0px 0 0px 0px;" class="logo">
                        <div align="center"> <a href="https://www.consumidormoderno.com.br/" target="_blank"><img border="0" alt="Consumidor Moderno" style="display:block; border:none; outline:none; text-decoration:none;" src="https://portalnovarejo.com.br/ns/2019/05-Maio/16-05/wrc/images/img_05.jpg" class="img-nota" /></a>
                            
                        </div>
                    </td>
                              </tr>
                                <tr>
                                    <td bgcolor="#000">
                                        <table summary="text" width="100%" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth" style="background:#000000!important;">
                                            <tbody>
                                           
                                                <tr>
                                                    <td bgcolor="#000000" align="left" style="padding: 50px 0 20px; font-family: helvetica, arial, sans-serif; font-size: 20px; text-align:center; line-height: 20px; color:#fff; background:#000000!important;"> 
                                                    
                                                    
                     <b>
                     <a href="https://www.consumidormoderno.com.br" target="_blank" style="text-decoration: none;color:white;">www.consumidormoderno.com.br</a></b></td>
                                                </tr>
                                                <tr>
                                                    <td bgcolor="#000000" style="padding:10px 0;background:#000000!important;">
                                                        
                                                            <p style="font-family: Helvetica, arial, sans-serif; font-size: 12px; text-align:center;">
                                                                <a target="_blank" href="https://www.facebook.com/consumidormoderno" style="text-decoration:none">
                                                                    <img src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/quadrado-branco-1/icon-facebook.png
" alt="Siga no Facebook" width="20" height="20" border="0" style="width: 20px !important" title="Siga no Facebook" />
                                                                </a> &nbsp;
                                                                <a target="_blank" href="https://www.facebook.com/consumidormoderno" style="text-decoration:none">
                                                                    <img src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/quadrado-branco-1/icon-twitter.png
" alt="Siga no Twitter" width="20" height="20" border="0" style="width: 20px !important; padding-left:5px" title="Siga no Twitter" />
                                                                </a> &nbsp;
                                                                <a target="_blank" href="https://www.linkedin.com/showcase/consumidor-moderno/" style="text-decoration:none">
                                                                    <img src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/quadrado-branco-1/icon-linkedin.png
" alt="Grupo no Linkedin" width="20" height="20" border="0" style="width: 20px !important; padding-left:5px" title="Grupo no Linkedin" />
                                                                </a> &nbsp;
                                                                <a target="_blank" href="https://www.youtube.com/user/consumidormoderno" style="text-decoration:none">
                                                                    <img src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/quadrado-branco-1/icon-youtube.png
" alt="Siga no YouTube" width="20" height="20" border="0" style="width: 20px !important; padding-left:5px" title="Siga no YouTube" />
                                                                </a> &nbsp;
                                                                <a target="_blank" href="https://www.instagram.com/consumidormoderno/" style="text-decoration:none">
                                                                    <img src="https://s3.amazonaws.com/newsletter-gpadrao/padrao/redes-sociais/quadrado-branco-1/icon-instagram.png
" alt="Siga no Instagram" width="20" height="20" border="0" style="width:20px !important; padding-left:5px" title="Siga no Instagram" />
                                                                </a>
                                                            </p>
                                                        
                                                    </td>
                                                </tr>
                                                
                                                
                                                <tr>
                                                    <td bgcolor="#0000" height="10" style="background-color: #000;"></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4" align="center" height="100" style="background-color: #000;">
                                                        <a target="_blank" href="http://gpadrao.com.br/">
                                                            <img src="https://portalnovarejo.com.br/ns/2019/03-Marco/08-03/images/img_10.jpg" alt="Padrão Eletrônico" width="155" height="106" style="width: 155px !important; margin-top:10px;" />
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td bgcolor="#000" height="20" style="background-color: #000;"></td>
                                                </tr>
                                                <tr>
                                                  <td bgcolor="#000000" align="center" style="font-family: helvetica, arial, sans-serif; font-size: 13px; text-align:center; line-height: 20px; color:#fff; background:#000000!important;padding: 0 20px 20px; "> 
                                                    
                                                    
                    Av. Pacaembu, 1613 - CEP: 01234-001 | Pacaembu | São Paulo – SP <br>
                    <b>+55 11 31252244 </b>
                    </td>
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

$cmWRC->salvaArquivo( $conteudo );


