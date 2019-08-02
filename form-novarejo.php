<?php 

require_once("includes/header.php");

?>

<style>
            
    #avatar {
    width: 600px; /* This rule is very important, please do not ignore this! */

    }

    #avatar2,
    #avatar3,
    #avatar4,
    #avatar5 {
        width: 280px;

    }
    input{
        color:black;
    }

    .form-group .btn {
        margin-bottom: 0px!important;
    }
</style>
    <!-- /top navigation -->
    <!-- page content -->
    <div class="right_col" role="main">
        <h1>Portal Novarejo</h1>
        <form id="demo-form2" class="form-horizontal form-label-left" method="POST" action="controller/visualizarNV.php" target="_blank">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                            <div class="x_title">
                                <h2>Destaque 01 </h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li>
                                        <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <br>
                            <div class="form-group text-center">
                                <label class="label" data-toggle="tooltip" title="" data-original-title="Selecione imagem">
                                    <img class="rounded" id="avatar" src="img-upload.jpg" alt="avatar">
                                    

                                    <input type="file" class="sr-only" id="input" name="image" accept="image/*">
                                    <input type="hidden" id="imagem1" name="imagem1">
                                </label>

                                <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" style="display: none;" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3 class="modal-title" id="modalLabel">Cortar a imagem 01</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Perto">
                                                <span aria-hidden="true"></span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="img-container">
                                                    <img id="image" src="img-upload.jpg" class="">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                <button type="button" class="btn btn-primary" id="crop">Cortar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-12">Categoria</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <div class="input-group demo2 colorpicker-element">
                                        <span class="input-group-addon">
                                            <span class="fa fa-tags"></span>
                                        </span>
                                        <select name="categoria[]" id="" class="form-control">
                                            <option value="">Selecione uma categoria</option>
                                            <option value="#dc1922" style="background: #dc1922;color:#fff;">Gente</option>
                                            <option value="#b848ba" style="background: #b848ba;color:#fff;">Canais</option>
                                            <option value="#4098d0" style="background: #4098d0;color:#fff;">Tecnologia</option>
                                            <option value="#eb9225" style="background: #eb9225;color:#fff;">Empreenda</option>
                                            <option value="#f7ec22" style="background: #f7ec22;color:#fff;">Gestão</option>
                                            <option value="#64d827" style="background: #64d827;color:#fff;">Cotidiano</option>
                                            <option value="#ec9eb0" style="background: #ec9eb0;color:#fff;">Vídeos</option>
                                            <option value="#0be1f7" style="background: #0be1f7;color:#fff;">Edições</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-12">Título                                </label>

                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <div class="input-group demo2 colorpicker-element">
                                        <span class="input-group-addon">
                                            <span class="fa fa-edit"></span>
                                        </span>
                                        <input type="text" class="form-control" name="titulo[]" required>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-12">Linha Fina</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <div class="input-group demo2 colorpicker-element">
                                        <span class="input-group-addon">
                                            <span class="fa fa-align-left"></span>
                                        </span>
                                        <textarea name="linhaFina[]" cols="30" rows="5" class="form-control" ></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-12">Link</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <div class="input-group demo2 colorpicker-element">
                                        <span class="input-group-addon">
                                            <span class="fa fa-link"></span>
                                        </span>
                                        <input type="text" class="form-control" name="link[]" required >
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="x_panel" >
                        <div class="x_title">
                            <h2>Destaque 02 </h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <br>
                            <div class="form-group text-center">
                                <label class="label" data-toggle="tooltip" title="" data-original-title="Selecione imagem">
                                    <img class="rounded" id="avatar2" src="img-upload-m.jpg" alt="avatar">
                                    <input type="file" class="sr-only" id="input2" name="image2" accept="image/*">
                                    <input type="hidden" id="imagem2" name="imagem2" >
                                </label>
                                
                                <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="modalLabel" style="display: none;" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3 class="modal-title" id="modalLabel">Cortar a imagem 02</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Perto">
                                                <span aria-hidden="true"></span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="img-container">
                                                    <img id="image2" src="img-upload-m.jpg" class="">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                <button type="button" class="btn btn-primary" id="crop2">Cortar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-12">Categoria</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <div class="input-group demo2 colorpicker-element">
                                        <span class="input-group-addon">
                                            <span class="fa fa-tags"></span>
                                        </span>
                                        <select name="categoria[]" id="" class="form-control">
                                            <option value="">Selecione uma categoria</option>
                                            <option value="#dc1922" style="background: #dc1922;color:#fff;">Gente</option>
                                            <option value="#b848ba" style="background: #b848ba;color:#fff;">Canais</option>
                                            <option value="#4098d0" style="background: #4098d0;color:#fff;">Tecnologia</option>
                                            <option value="#eb9225" style="background: #eb9225;color:#fff;">Empreenda</option>
                                            <option value="#f7ec22" style="background: #f7ec22;color:#fff;">Gestão</option>
                                            <option value="#64d827" style="background: #64d827;color:#fff;">Cotidiano</option>
                                            <option value="#ec9eb0" style="background: #ec9eb0;color:#fff;">Vídeos</option>
                                            <option value="#0be1f7" style="background: #0be1f7;color:#fff;">Edições</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-12">Título
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <div class="input-group demo2 colorpicker-element">
                                        <span class="input-group-addon">
                                            <span class="fa fa-edit"></span>
                                            <br>
                                            <span class="caracteres2">104</span>
                                        </span>
                                        <input type="text" id="titulo2" maxlength="104" class="form-control" name="titulo[]" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-12">Linha Fina</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <div class="input-group demo2 colorpicker-element">
                                        <span class="input-group-addon">
                                            <span class="fa fa-align-left"></span>
                                            <br>
                                            <span class="caracter2">179</span>
                                        </span>
                                        <textarea name="linhaFina[]" id="linhaFina2" cols="30" rows="5" class="form-control" maxlength="179" required ></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-12">Link</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <div class="input-group demo2 colorpicker-element">
                                        <span class="input-group-addon">
                                            <span class="fa fa-link"></span>
                                        </span>
                                        <input type="text" class="form-control" name="link[]" required >
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="x_panel" >
                        <div class="x_title">
                            <h2>Destaque 03 </h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <br>
                            <div class="form-group text-center">
                                <label class="label" data-toggle="tooltip" title="" data-original-title="Selecione imagem">
                                    <img class="rounded" id="avatar3" src="img-upload-m.jpg" alt="avatar">
                                    <input type="file" class="sr-only" id="input3" name="image3" accept="image/*">
                                    <input type="hidden" id="imagem3" name="imagem3">
                                </label>
                                
                                <div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="modalLabel" style="display: none;" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3 class="modal-title" id="modalLabel">Cortar a imagem 03</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Perto">
                                                <span aria-hidden="true"></span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="img-container">
                                                    <img id="image3" src="img-upload-m.jpg" class="">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                <button type="button" class="btn btn-primary" id="crop3">Cortar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-12">Categoria</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <div class="input-group demo2 colorpicker-element">
                                        <span class="input-group-addon">
                                            <span class="fa fa-tags"></span>
                                        </span>
                                        <select name="categoria[]" id="" class="form-control">
                                            <option value="">Selecione uma categoria</option>
                                            <option value="#dc1922" style="background: #dc1922;color:#fff;">Gente</option>
                                            <option value="#b848ba" style="background: #b848ba;color:#fff;">Canais</option>
                                            <option value="#4098d0" style="background: #4098d0;color:#fff;">Tecnologia</option>
                                            <option value="#eb9225" style="background: #eb9225;color:#fff;">Empreenda</option>
                                            <option value="#f7ec22" style="background: #f7ec22;color:#fff;">Gestão</option>
                                            <option value="#64d827" style="background: #64d827;color:#fff;">Cotidiano</option>
                                            <option value="#ec9eb0" style="background: #ec9eb0;color:#fff;">Vídeos</option>
                                            <option value="#0be1f7" style="background: #0be1f7;color:#fff;">Edições</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-12">Título</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <div class="input-group demo2 colorpicker-element">
                                        <span class="input-group-addon">
                                            <span class="fa fa-edit"></span>
                                            <br>
                                            <span class="caracteres3">104</span>
                                        </span>
                                        <input type="text" id="titulo3" maxlength="104" class="form-control titulo" name="titulo[]" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-12">Linha Fina</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <div class="input-group demo2 colorpicker-element">
                                        <span class="input-group-addon">
                                            <span class="fa fa-align-left"></span>
                                            <br>
                                            <span class="caracter3">179</span>
                                        </span>
                                        <textarea name="linhaFina[]" id="linhaFina3" cols="30" rows="5" class="form-control" maxlength="179" required ></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-12">Link</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <div class="input-group demo2 colorpicker-element">
                                        <span class="input-group-addon">
                                            <span class="fa fa-link"></span>
                                        </span>
                                        <input type="text" class="form-control" name="link[]" required >
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="x_panel" >
                        <div class="x_title">
                            <h2>Destaque 04 </h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <br>
                            <div class="form-group text-center">
                                <label class="label" data-toggle="tooltip" title="" data-original-title="Selecione imagem">
                                    <img class="rounded" id="avatar4" src="img-upload-m.jpg" alt="avatar">
                                    <input type="file" class="sr-only" id="input4" name="image4" accept="image/*">
                                    <input type="hidden" id="imagem4" name="imagem4">
                                </label>
                                
                                <div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="modalLabel" style="display: none;" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3 class="modal-title" id="modalLabel">Cortar a imagem 04</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Perto">
                                                <span aria-hidden="true"></span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="img-container">
                                                    <img id="image4" src="img-upload-m.jpg" class="">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                <button type="button" class="btn btn-primary" id="crop4">Cortar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-12">Categoria</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <div class="input-group demo2 colorpicker-element">
                                        <span class="input-group-addon">
                                            <span class="fa fa-tags"></span>
                                        </span>
                                        <select name="categoria[]" id="" class="form-control">
                                            <option value="">Selecione uma categoria</option>
                                            <option value="#dc1922" style="background: #dc1922;color:#fff;">Gente</option>
                                            <option value="#b848ba" style="background: #b848ba;color:#fff;">Canais</option>
                                            <option value="#4098d0" style="background: #4098d0;color:#fff;">Tecnologia</option>
                                            <option value="#eb9225" style="background: #eb9225;color:#fff;">Empreenda</option>
                                            <option value="#f7ec22" style="background: #f7ec22;color:#fff;">Gestão</option>
                                            <option value="#64d827" style="background: #64d827;color:#fff;">Cotidiano</option>
                                            <option value="#ec9eb0" style="background: #ec9eb0;color:#fff;">Vídeos</option>
                                            <option value="#0be1f7" style="background: #0be1f7;color:#fff;">Edições</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-12">Título</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <div class="input-group demo2 colorpicker-element">
                                        <span class="input-group-addon">
                                            <span class="fa fa-edit"></span>
                                            <br>
                                            <span class="caracteres4">104</span>
                                        </span>
                                        <input type="text" id="titulo4" maxlength="104" class="form-control titulo" name="titulo[]" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-12">Linha Fina</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <div class="input-group demo2 colorpicker-element">
                                        <span class="input-group-addon">
                                            <span class="fa fa-align-left"></span>
                                            <br>
                                            <span class="caracter4">179</span>
                                        </span>
                                        <textarea name="linhaFina[]" id="linhaFina4" cols="30" rows="5" class="form-control" maxlength="179" required ></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-12">Link</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <div class="input-group demo2 colorpicker-element">
                                        <span class="input-group-addon">
                                            <span class="fa fa-link"></span>
                                        </span>
                                        <input type="text" class="form-control" name="link[]" required >
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="x_panel" >
                        <div class="x_title">
                            <h2>Destaque 05 </h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <br>
                            <div class="form-group text-center">
                                <label class="label" data-toggle="tooltip" title="" data-original-title="Selecione imagem">
                                    <img class="rounded" id="avatar5" src="img-upload-m.jpg" alt="avatar">
                                    <input type="file" class="sr-only" id="input5" name="image5" accept="image/*">
                                    <input type="hidden" id="imagem5" name="imagem5">
                                </label>
                                
                                <div class="modal fade" id="modal5" tabindex="-1" role="dialog" aria-labelledby="modalLabel" style="display: none;" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3 class="modal-title" id="modalLabel">Cortar a imagem 05</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Perto">
                                                <span aria-hidden="true"></span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="img-container">
                                                    <img id="image5" src="img-upload-m.jpg" class="">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                <button type="button" class="btn btn-primary" id="crop5">Cortar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-12">Categoria</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <div class="input-group demo2 colorpicker-element">
                                        <span class="input-group-addon">
                                            <span class="fa fa-tags"></span>
                                        </span>
                                        <select name="categoria[]" id="" class="form-control">
                                            <option value="">Selecione uma categoria</option>
                                            <option value="#dc1922" style="background: #dc1922;color:#fff;">Gente</option>
                                            <option value="#b848ba" style="background: #b848ba;color:#fff;">Canais</option>
                                            <option value="#4098d0" style="background: #4098d0;color:#fff;">Tecnologia</option>
                                            <option value="#eb9225" style="background: #eb9225;color:#fff;">Empreenda</option>
                                            <option value="#f7ec22" style="background: #f7ec22;color:#fff;">Gestão</option>
                                            <option value="#64d827" style="background: #64d827;color:#fff;">Cotidiano</option>
                                            <option value="#ec9eb0" style="background: #ec9eb0;color:#fff;">Vídeos</option>
                                            <option value="#0be1f7" style="background: #0be1f7;color:#fff;">Edições</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-12">Título</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <div class="input-group demo2 colorpicker-element">
                                        <span class="input-group-addon">
                                            <span class="fa fa-edit"></span>
                                            <br>
                                            <span class="caracteres5">104</span>
                                        </span>
                                        <input type="text" id="titulo5" maxlength="104" class="form-control titulo" name="titulo[]" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-12">Linha Fina</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <div class="input-group demo2 colorpicker-element">
                                        <span class="input-group-addon">
                                            <span class="fa fa-align-left"></span>
                                            <br>
                                            <span class="caracter5">179</span>
                                        </span>
                                        <textarea name="linhaFina[]" id="linhaFina5" cols="30" rows="5" class="form-control" maxlength="179" required ></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-12">Link</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <div class="input-group demo2 colorpicker-element">
                                        <span class="input-group-addon">
                                            <span class="fa fa-link"></span>
                                        </span>
                                        <input type="text" class="form-control" name="link[]" required >
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>            
                    
       
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel" >

                        <h2 class="text-center">
                        <button type="submit" class="btn btn-primary btn-lg" target="_blank">Visualizar Newsletter</button></h2>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script>

        window.addEventListener('DOMContentLoaded', function () {
            var avatar = document.getElementById('avatar');
            var image = document.getElementById('image');
            var input = document.getElementById('input');
            //var $progress = $('.progress');
            //var $progressBar = $('.progress-bar');
            var $alert = $('.alert');
            var $modal = $('#modal');
            var cropper;

             $('[data-toggle="tooltip"]').tooltip();

            input.addEventListener('change', function (e) {
                var files = e.target.files;
                var done = function (url) {
                  input.value = '';
                  image.src = url;
                  $alert.hide();
                  $modal.modal('show');
                };
                var reader;
                var file;
                var url;

                if (files && files.length > 0) {
                  file = files[0];

                  if (URL) {
                    done(URL.createObjectURL(file));
                  } else if (FileReader) {
                    reader = new FileReader();
                    reader.onload = function (e) {
                        console.log(e);
                      done(reader.result);
                    };
                    reader.readAsDataURL(file);
                  }
                }
            });

            $modal.on('shown.bs.modal', function () {
                cropper = new Cropper(image, {
                    viewMode: 1,
                    dragMode: 'move',
                    aspectRatio: 21.52 / 9, // 600x251
                    // aspectRatio: 8.8 / 7, // 280x222
                    autoCropArea: 2,
                    restore: false,
                    guides: false,
                    center: false,
                    highlight: false,
                    cropBoxMovable: false,
                    cropBoxResizable: false,
                    toggleDragModeOnDblclick: false
                });
            }).on('hidden.bs.modal', function () {
                cropper.destroy();
                cropper = null;
            });

            document.getElementById('crop').addEventListener('click', function () {
                var initialAvatarURL;
                var canvas;

                $modal.modal('hide');

                if (cropper) {
                    canvas = cropper.getCroppedCanvas({
                        width: 600,
                        height: 255,
                    });
                    initialAvatarURL = avatar.src;
                    avatar.src = canvas.toDataURL();
                    var imagem = $("#avatar").attr('src');
                    $("#imagem1").attr("value", imagem);
                    console.log(imagem);
                    // $progress.show();
                    $alert.removeClass('alert-success alert-warning');
                    canvas.toBlob(function (blob) {
                        var formData = new FormData();
                    });
                }
            });
        });

        window.addEventListener('DOMContentLoaded', function () {
            var avatar = document.getElementById('avatar2');
            var image = document.getElementById('image2');
            var input = document.getElementById('input2');
            //var $progress = $('.progress');
            //var $progressBar = $('.progress-bar');
            var $alert = $('.alert');
            var $modal = $('#modal2');
            var cropper;

             $('[data-toggle="tooltip"]').tooltip();

            input.addEventListener('change', function (e) {
                var files = e.target.files;
                var done = function (url) {
                  input.value = '';
                  image.src = url;
                  $alert.hide();
                  $modal.modal('show');
                };
                var reader;
                var file;
                var url;

                if (files && files.length > 0) {
                  file = files[0];

                  if (URL) {
                    done(URL.createObjectURL(file));
                  } else if (FileReader) {
                    reader = new FileReader();
                    reader.onload = function (e) {
                      done(reader.result);
                    };
                    reader.readAsDataURL(file);
                  }
                }
            });

            $modal.on('shown.bs.modal', function () {
                cropper = new Cropper(image, {
                    viewMode: 1,
                    dragMode: 'move',
                    //aspectRatio: 21.52 / 9, // 600x251
                    aspectRatio: 8.8 / 7, // 280x222
                    autoCropArea: 2,
                    restore: false,
                    guides: false,
                    center: false,
                    highlight: false,
                    cropBoxMovable: false,
                    cropBoxResizable: false,
                    toggleDragModeOnDblclick: false
                });
            }).on('hidden.bs.modal', function () {
                cropper.destroy();
                cropper = null;
            });

            document.getElementById('crop2').addEventListener('click', function () {
                var initialAvatarURL;
                var canvas;

                $modal.modal('hide');

                if (cropper) {
                    canvas = cropper.getCroppedCanvas({
                        width: 280,
                        height: 222,
                    });
                    initialAvatarURL = avatar.src;
                    avatar.src = canvas.toDataURL();
                    var imagem = $("#avatar2").attr('src');
                    $("#imagem2").attr("value", imagem);
                    console.log(imagem);
                    //$progress.show();
                    $alert.removeClass('alert-success alert-warning');
                    canvas.toBlob(function (blob) {
                        var formData = new FormData();
                    });
                }
            });
        });

        window.addEventListener('DOMContentLoaded', function () {
            var avatar = document.getElementById('avatar3');
            var image = document.getElementById('image3');
            var input = document.getElementById('input3');
            //var $progress = $('.progress');
            //var $progressBar = $('.progress-bar');
            var $alert = $('.alert');
            var $modal = $('#modal3');
            var cropper;

             $('[data-toggle="tooltip"]').tooltip();

            input.addEventListener('change', function (e) {
                var files = e.target.files;
                var done = function (url) {
                  input.value = '';
                  image.src = url;
                  $alert.hide();
                  $modal.modal('show');
                };
                var reader;
                var file;
                var url;

                if (files && files.length > 0) {
                  file = files[0];

                  if (URL) {
                    done(URL.createObjectURL(file));
                  } else if (FileReader) {
                    reader = new FileReader();
                    reader.onload = function (e) {
                      done(reader.result);
                    };
                    reader.readAsDataURL(file);
                  }
                }
            });

            $modal.on('shown.bs.modal', function () {
                cropper = new Cropper(image, {
                    viewMode: 1,
                    dragMode: 'move',
                    //aspectRatio: 21.52 / 9, // 600x251
                    aspectRatio: 8.8 / 7, // 280x222
                    autoCropArea: 2,
                    restore: false,
                    guides: false,
                    center: false,
                    highlight: false,
                    cropBoxMovable: false,
                    cropBoxResizable: false,
                    toggleDragModeOnDblclick: false
                });
            }).on('hidden.bs.modal', function () {
                cropper.destroy();
                cropper = null;
            });

            document.getElementById('crop3').addEventListener('click', function () {
                var initialAvatarURL;
                var canvas;

                $modal.modal('hide');

                if (cropper) {
                    canvas = cropper.getCroppedCanvas({
                        width: 280,
                        height: 222,
                    });
                    initialAvatarURL = avatar.src;
                    avatar.src = canvas.toDataURL();
                    var imagem = $("#avatar3").attr('src');
                    $("#imagem3").attr("value", imagem);
                    console.log(imagem);
                    //$progress.show();
                    $alert.removeClass('alert-success alert-warning');
                    canvas.toBlob(function (blob) {
                        var formData = new FormData();
                    });
                }
            });
        });

        window.addEventListener('DOMContentLoaded', function () {
            var avatar = document.getElementById('avatar4');
            var image = document.getElementById('image4');
            var input = document.getElementById('input4');
            //var $progress = $('.progress');
            //var $progressBar = $('.progress-bar');
            var $alert = $('.alert');
            var $modal = $('#modal4');
            var cropper;

             $('[data-toggle="tooltip"]').tooltip();

            input.addEventListener('change', function (e) {
                var files = e.target.files;
                var done = function (url) {
                  input.value = '';
                  image.src = url;
                  $alert.hide();
                  $modal.modal('show');
                };
                var reader;
                var file;
                var url;

                if (files && files.length > 0) {
                  file = files[0];

                  if (URL) {
                    done(URL.createObjectURL(file));
                  } else if (FileReader) {
                    reader = new FileReader();
                    reader.onload = function (e) {
                      done(reader.result);
                    };
                    reader.readAsDataURL(file);
                  }
                }
            });

            $modal.on('shown.bs.modal', function () {
                cropper = new Cropper(image, {
                    viewMode: 1,
                    dragMode: 'move',
                    //aspectRatio: 21.52 / 9, // 600x251
                    aspectRatio: 8.8 / 7, // 280x222
                    autoCropArea: 2,
                    restore: false,
                    guides: false,
                    center: false,
                    highlight: false,
                    cropBoxMovable: false,
                    cropBoxResizable: false,
                    toggleDragModeOnDblclick: false
                });
            }).on('hidden.bs.modal', function () {
                cropper.destroy();
                cropper = null;
            });

            document.getElementById('crop4').addEventListener('click', function () {
                var initialAvatarURL;
                var canvas;

                $modal.modal('hide');

                if (cropper) {
                    canvas = cropper.getCroppedCanvas({
                        width: 280,
                        height: 222,
                    });
                    initialAvatarURL = avatar.src;
                    avatar.src = canvas.toDataURL();
                    var imagem = $("#avatar4").attr('src');
                    $("#imagem4").attr("value", imagem);
                    console.log(imagem);
                    //$progress.show();
                    $alert.removeClass('alert-success alert-warning');
                    canvas.toBlob(function (blob) {
                        var formData = new FormData();
                    });
                }
            });
        });

        window.addEventListener('DOMContentLoaded', function () {
            var avatar = document.getElementById('avatar5');
            var image = document.getElementById('image5');
            var input = document.getElementById('input5');
            //var $progress = $('.progress');
            //var $progressBar = $('.progress-bar');
            var $alert = $('.alert');
            var $modal = $('#modal5');
            var cropper;

             $('[data-toggle="tooltip"]').tooltip();

            input.addEventListener('change', function (e) {
                var files = e.target.files;
                var done = function (url) {
                  input.value = '';
                  image.src = url;
                  $alert.hide();
                  $modal.modal('show');
                };
                var reader;
                var file;
                var url;

                if (files && files.length > 0) {
                  file = files[0];

                  if (URL) {
                    done(URL.createObjectURL(file));
                  } else if (FileReader) {
                    reader = new FileReader();
                    reader.onload = function (e) {
                      done(reader.result);
                    };
                    reader.readAsDataURL(file);
                  }
                }
            });

            $modal.on('shown.bs.modal', function () {
                cropper = new Cropper(image, {
                    viewMode: 1,
                    dragMode: 'move',
                    //aspectRatio: 21.52 / 9, // 600x251
                    aspectRatio: 8.8 / 7, // 280x222
                    autoCropArea: 2,
                    restore: false,
                    guides: false,
                    center: false,
                    highlight: false,
                    cropBoxMovable: false,
                    cropBoxResizable: false,
                    toggleDragModeOnDblclick: false
                });
            }).on('hidden.bs.modal', function () {
                cropper.destroy();
                cropper = null;
            });

            document.getElementById('crop5').addEventListener('click', function () {
                var initialAvatarURL;
                var canvas;

                $modal.modal('hide');

                if (cropper) {
                    canvas = cropper.getCroppedCanvas({
                        width: 280,
                        height: 222,
                    });
                    initialAvatarURL = avatar.src;
                    avatar.src = canvas.toDataURL();
                    var imagem = $("#avatar5").attr('src');
                    $("#imagem5").attr("value", imagem);
                    console.log(imagem);
                    //$progress.show();
                    $alert.removeClass('alert-success alert-warning');
                    canvas.toBlob(function (blob) {
                        var formData = new FormData();
                    });
                }
            });
        });

    </script>

<?php require_once("includes/footer.php");?>

