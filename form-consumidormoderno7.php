<?php require_once("includes/header.php"); ?>

    <!-- /top navigation -->
    <!-- page content -->
    <div class="right_col" role="main">
        <h1>Portal CM - 7 notas</h1>
        <form id="demo-form2" class="form-horizontal form-label-left" method="POST" action="controller/visualizarCM7.php" target="_blank">
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
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-12">Categoria</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <div class="input-group demo2 colorpicker-element">
                                        <span class="input-group-addon">
                                            <span class="fa fa-tags"></span>
                                        </span>
                                        <select name="categoria[]" id="" class="form-control">
                                            <option value="">Selecione uma categoria</option>
                                            <option value="DEFESA DO CONSUMIDOR">DEFESA DO CONSUMIDOR</option>
                                            <option value="EXPERIÊNCIA">EXPERIÊNCIA</option>
                                            <option value="TECNOLOGIA">TECNOLOGIA</option>
                                            <option value="COMPORTAMENTO">COMPORTAMENTO</option>
                                            <option value="INOVAÇÃO">INOVAÇÃO</option>
                                            <option value="CONSUMO CONCIENTE">CONSUMO CONCIENTE</option>
                                            <option value="VÍDEOS">VÍDEOS</option>
                                            <option value="EDIÇÕES">EDIÇÕES</option>
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
                                        </span>
                                        <input type="text" class="form-control" name="titulo[]">
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
                                            <span class="caracter1">179</span>
                                        </span>
                                        <textarea name="linhaFina[]" id="linhaFina1" cols="30" rows="5" class="form-control" maxlength="179"></textarea>
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
                                        <input type="text" class="form-control" name="link[]">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-12">Imagem</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <div class="input-group demo2 colorpicker-element">
                                        <span class="input-group-addon" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="487x285">
        
                                            <span class="fa fa-image"></span>
                                        </span>
                                        <input type="text" class="form-control" name="imagem[]">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>   
            </div>

            <div class="row">

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                            <div class="x_title">
                                <h2>Destaque 02 </h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li>
                                        <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
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
                                            <option value="DEFESA DO CONSUMIDOR">DEFESA DO CONSUMIDOR</option>
                                            <option value="EXPERIÊNCIA">EXPERIÊNCIA</option>
                                            <option value="TECNOLOGIA">TECNOLOGIA</option>
                                            <option value="COMPORTAMENTO">COMPORTAMENTO</option>
                                            <option value="INOVAÇÃO">INOVAÇÃO</option>
                                            <option value="CONSUMO CONCIENTE">CONSUMO CONCIENTE</option>
                                            <option value="VÍDEOS">VÍDEOS</option>
                                            <option value="EDIÇÕES">EDIÇÕES</option>
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
                                        <input type="text" id="titulo5" maxlength="104" class="form-control titulo" name="titulo[]">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-12">Linha Fina</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <div class="input-group demo2 colorpicker-element">
                                        <span class="input-group-addon">
                                            <br>
                                            <span class="caracter2">179</span>
                                        </span>
                                        <textarea name="linhaFina[]" id="linhaFina2" cols="30" rows="5" class="form-control" maxlength="179"></textarea>
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
                                        <input type="text" class="form-control" name="link[]">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-12">Imagem</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <div class="input-group demo2 colorpicker-element">
                                        <span class="input-group-addon" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="487x285">
        
                                            <span class="fa fa-image"></span>
                                        </span>
                                        <input type="text" class="form-control" name="imagem[]">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>   
            </div>

            <div class="row">

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                            <div class="x_title">
                                <h2>Destaque 03 </h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li>
                                        <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
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
                                            <option value="DEFESA DO CONSUMIDOR">DEFESA DO CONSUMIDOR</option>
                                            <option value="EXPERIÊNCIA">EXPERIÊNCIA</option>
                                            <option value="TECNOLOGIA">TECNOLOGIA</option>
                                            <option value="COMPORTAMENTO">COMPORTAMENTO</option>
                                            <option value="INOVAÇÃO">INOVAÇÃO</option>
                                            <option value="CONSUMO CONCIENTE">CONSUMO CONCIENTE</option>
                                            <option value="VÍDEOS">VÍDEOS</option>
                                            <option value="EDIÇÕES">EDIÇÕES</option>
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
                                        <input type="text" id="titulo5" maxlength="104" class="form-control titulo" name="titulo[]">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-12">Linha Fina</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <div class="input-group demo2 colorpicker-element">
                                        <span class="input-group-addon">
                                            <br>
                                            <span class="caracter3">179</span>
                                        </span>
                                        <textarea name="linhaFina[]" id="linhaFina3" cols="30" rows="5" class="form-control" maxlength="179"></textarea>
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
                                        <input type="text" class="form-control" name="link[]">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-12">Imagem</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <div class="input-group demo2 colorpicker-element">
                                        <span class="input-group-addon" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="487x285">
        
                                            <span class="fa fa-image"></span>
                                        </span>
                                        <input type="text" class="form-control" name="imagem[]">
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
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-12">Categoria</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <div class="input-group demo2 colorpicker-element">
                                        <span class="input-group-addon">
                                            <span class="fa fa-tags"></span>
                                        </span>
                                        <select name="categoria[]" id="" class="form-control">
                                            <option value="">Selecione uma categoria</option>
                                            <option value="DEFESA DO CONSUMIDOR">DEFESA DO CONSUMIDOR</option>
                                            <option value="EXPERIÊNCIA">EXPERIÊNCIA</option>
                                            <option value="TECNOLOGIA">TECNOLOGIA</option>
                                            <option value="COMPORTAMENTO">COMPORTAMENTO</option>
                                            <option value="INOVAÇÃO">INOVAÇÃO</option>
                                            <option value="CONSUMO CONCIENTE">CONSUMO CONCIENTE</option>
                                            <option value="VÍDEOS">VÍDEOS</option>
                                            <option value="EDIÇÕES">EDIÇÕES</option>
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
                                        <input type="text" id="titulo5" maxlength="104" class="form-control titulo" name="titulo[]">
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
                                        <textarea name="linhaFina[]" id="linhaFina4" cols="30" rows="5" class="form-control" maxlength="179"></textarea>
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
                                        <input type="text" class="form-control" name="link[]">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-12">Imagem</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <div class="input-group demo2 colorpicker-element">
                                        <span class="input-group-addon" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="223x118">

                                            <span class="fa fa-image"></span>
                                        </span>
                                        <input type="text" class="form-control" name="imagem[]">
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
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-12">Categoria</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <div class="input-group demo2 colorpicker-element">
                                        <span class="input-group-addon">
                                            <span class="fa fa-tags"></span>
                                        </span>
                                        <select name="categoria[]" id="" class="form-control">
                                            <option value="">Selecione uma categoria</option>
                                            <option value="DEFESA DO CONSUMIDOR">DEFESA DO CONSUMIDOR</option>
                                            <option value="EXPERIÊNCIA">EXPERIÊNCIA</option>
                                            <option value="TECNOLOGIA">TECNOLOGIA</option>
                                            <option value="COMPORTAMENTO">COMPORTAMENTO</option>
                                            <option value="INOVAÇÃO">INOVAÇÃO</option>
                                            <option value="CONSUMO CONCIENTE">CONSUMO CONCIENTE</option>
                                            <option value="VÍDEOS">VÍDEOS</option>
                                            <option value="EDIÇÕES">EDIÇÕES</option>
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
                                        <input type="text" id="titulo5" maxlength="104" class="form-control titulo" name="titulo[]">
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
                                        <textarea name="linhaFina[]" id="linhaFina5" cols="30" rows="5" class="form-control" maxlength="179"></textarea>
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
                                        <input type="text" class="form-control" name="link[]">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-12">Imagem</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <div class="input-group demo2 colorpicker-element">
                                        <span class="input-group-addon" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="223x118">

                                            <span class="fa fa-image"></span>
                                        </span>
                                        <input type="text" class="form-control" name="imagem[]">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
           <div class="row">

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                            <div class="x_title">
                                <h2>Destaque 06 </h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li>
                                        <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
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
                                            <option value="DEFESA DO CONSUMIDOR">DEFESA DO CONSUMIDOR</option>
                                            <option value="EXPERIÊNCIA">EXPERIÊNCIA</option>
                                            <option value="TECNOLOGIA">TECNOLOGIA</option>
                                            <option value="COMPORTAMENTO">COMPORTAMENTO</option>
                                            <option value="INOVAÇÃO">INOVAÇÃO</option>
                                            <option value="CONSUMO CONCIENTE">CONSUMO CONCIENTE</option>
                                            <option value="VÍDEOS">VÍDEOS</option>
                                            <option value="EDIÇÕES">EDIÇÕES</option>
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
                                        </span>
                                        <input type="text" class="form-control" name="titulo[]">
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
                                        <textarea name="linhaFina[]" id="" cols="30" rows="3" class="form-control"></textarea>
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
                                        <input type="text" class="form-control" name="link[]">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-12">Imagem</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <div class="input-group demo2 colorpicker-element">
                                        <span class="input-group-addon" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="487x285">
        
                                            <span class="fa fa-image"></span>
                                        </span>
                                        <input type="text" class="form-control" name="imagem[]">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>   
            </div>

            <div class="row">

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                            <div class="x_title">
                                <h2>Destaque 7 </h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li>
                                        <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
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
                                            <option value="DEFESA DO CONSUMIDOR">DEFESA DO CONSUMIDOR</option>
                                            <option value="EXPERIÊNCIA">EXPERIÊNCIA</option>
                                            <option value="TECNOLOGIA">TECNOLOGIA</option>
                                            <option value="COMPORTAMENTO">COMPORTAMENTO</option>
                                            <option value="INOVAÇÃO">INOVAÇÃO</option>
                                            <option value="CONSUMO CONCIENTE">CONSUMO CONCIENTE</option>
                                            <option value="VÍDEOS">VÍDEOS</option>
                                            <option value="EDIÇÕES">EDIÇÕES</option>
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
                                        </span>
                                        <input type="text" class="form-control" name="titulo[]">
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
                                        <textarea name="linhaFina[]" id="" cols="30" rows="3" class="form-control"></textarea>
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
                                        <input type="text" class="form-control" name="link[]">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-12">Imagem</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <div class="input-group demo2 colorpicker-element">
                                        <span class="input-group-addon" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="487x285">
        
                                            <span class="fa fa-image"></span>
                                        </span>
                                        <input type="text" class="form-control" name="imagem[]">
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

<?php require_once("includes/footer.php"); ?>