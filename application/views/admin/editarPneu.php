<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-warning">
                <div class="box-header">
                    <h3 class="box-title">Editar Pneu nº<?= $pneu[0]->id_pneu; ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                <form action="<?= base_url('admin/updatePneus');?>" method="POST" class="form-horizontal" enctype="multipart/form-data">
                    <input type="hidden" class="form-control" name="id" value="<?= $pneu[0]->id_pneu?>" id="id" placeholder="id">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputName" name="pneu" class="col-sm-3 control-label">Nome do Pneu </label>
        
                                <div class="col-sm-9">
                                <input type="text" class="form-control" value="<?= $pneu[0]->nome_pneu; ?>" name="nome_pneu" id="inputName" placeholder="Nome pneu">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputName" name="pneu" class="col-sm-3 control-label">Preço </label>
        
                                <div class="col-sm-9">
                                <input type="text" class="form-control" value="<?= $pneu[0]->preco; ?>" name="preco" id="inputPreco" placeholder="Preço (0.00)">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputName" name="pneu" class="col-sm-3 control-label">Tipo </label>
        
                                <div class="col-sm-9">
                                    <select class="form-control select2" name="tipo" id="tipo" style="width: 100%;"> 
                                    <option value="0"<?php if(0 == $pneu[0]->tipo) echo "selected"?>>Indefinido</option> 
                                    <option value="1" <?php if(1 == $pneu[0]->tipo) echo "selected"?>>Carro</option> 
                                    <option value="2" <?php if(2 == $pneu[0]->tipo) echo "selected"?>>Moto</option>    
                                    </select>
                                </div>
                            </div>  
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputName" name="pneu" class="col-sm-3 control-label">Largura </label>
                                
                                <div class="col-sm-9">
                                    <select class="form-control select2" name="largura" id="largura" style="width: 100%;">
                                        <?php foreach ($largura as $row)
                                        { ?>
                                            <option value="<?= $row->id_largura?>"
                                            <?php if($row->largura == $pneu[0]->largura) echo "selected"?>
                                            ><?= $row->largura ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>  
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputName" name="pneu" class="col-sm-3 control-label">Altura </label>
        
                                <div class="col-sm-9">
                                    <select class="form-control select2" name="altura" id="altura" style="width: 100%;">
                                        <?php foreach ($altura as $row)
                                        { ?>
                                            <option value="<?= $row->id_altura ?>"
                                            <?php if($row->altura == $pneu[0]->altura) echo "selected"?>
                                            ><?= $row->altura ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>  
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputName" name="pneu" class="col-sm-3 control-label">Diametro </label>
        
                                <div class="col-sm-9">
                                    <select class="form-control select2" name="diametro" id="diametro" style="width: 100%;">
                                        <?php foreach ($diametro as $row)
                                        { ?>
                                            <option value="<?= $row->id_diametro ?>"
                                            <?php if($row->diametro == $pneu[0]->diametro) echo "selected"?>
                                            ><?= $row->diametro ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>  
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputName" name="pneu" class="col-sm-3 control-label">Marca </label>
        
                                <div class="col-sm-9">
                                    <select class="form-control select2" name="marca" id="marca" style="width: 100%;">
                                        <?php foreach ($marcas as $row)
                                        { ?>
                                            <option value="<?= $row->id_marca ?>"
                                            <?php if($row->marca == $pneu[0]->marca) echo "selected"?>
                                            ><?= $row->marca ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div> 
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="indice" name="indice" class="col-sm-3 control-label">Indice de Velocidade </label>
        
                                <div class="col-sm-9">
                                <input type="text" class="form-control" value="<?= $pneu[0]->indice; ?>" name="indice" id="indice" placeholder="75">
                                </div>
                            </div>  
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="consumo" name="consumo" class="col-sm-3 control-label">Consumo combustivel </label>
        
                                <div class="col-sm-9">
                                    <select class="form-control select2" name="consumo" id="consumo" style="width: 100%;"> 
                                    <option value="Indéfinis"<?php if(0 == $pneu[0]->consumo) echo "selected"?>>Indefinido</option> 
                                    <option value="A" <?php if("A" == $pneu[0]->consumo) echo "selected"?>>A</option> 
                                    <option value="B" <?php if("B" == $pneu[0]->consumo) echo "selected"?>>B</option>    
                                    <option value="C" <?php if("C" == $pneu[0]->consumo) echo "selected"?>>C</option>    
                                    <option value="D" <?php if("D" == $pneu[0]->consumo) echo "selected"?>>D</option>    
                                    <option value="E" <?php if("E" == $pneu[0]->consumo) echo "selected"?>>E</option>    
                                    <option value="F" <?php if("F" == $pneu[0]->consumo) echo "selected"?>>F</option>    
                                    <option value="G" <?php if("G" == $pneu[0]->consumo) echo "selected"?>>G</option>    
                                    </select>
                                </div>
                            </div>  
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="aderencia" name="aderencia" class="col-sm-3 control-label">Aderencia </label>
        
                                <div class="col-sm-9">
                                    <select class="form-control select2" name="aderencia" id="aderencia" style="width: 100%;"> 
                                    <option value="A" <?php if("A" == $pneu[0]->aderencia) echo "selected"?>>A</option> 
                                    <option value="B" <?php if("B" == $pneu[0]->aderencia) echo "selected"?>>B</option>    
                                    <option value="C" <?php if("C" == $pneu[0]->aderencia) echo "selected"?>>C</option>    
                                    <option value="D" <?php if("D" == $pneu[0]->aderencia) echo "selected"?>>D</option>    
                                    <option value="E" <?php if("E" == $pneu[0]->aderencia) echo "selected"?>>E</option>    
                                    <option value="F" <?php if("F" == $pneu[0]->aderencia) echo "selected"?>>F</option>    
                                    <option value="G" <?php if("G" == $pneu[0]->aderencia) echo "selected"?>>G</option>    
                                    </select>
                                </div>
                            </div>  
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="raio" name="raio" class="col-sm-3 control-label">Raio </label>
        
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="<?= $pneu[0]->raio; ?>" name="raio" id="raio" placeholder="16">
                                </div>
                            </div>  
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="ruido" name="ruido" class="col-sm-3 control-label">Ruido </label>
        
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="<?= $pneu[0]->ruido; ?>" name="ruido" id="ruido" placeholder="68">
                                </div>
                            </div>  
                        </div>
                    </div>
                
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <textarea name="descricao" placeholder="Descrição..." id="descricao" style="width: 100%; height: 200px; font-size: 14px;color:black; line-height: 18px; border: 1px solid rgb(221, 221, 221); padding: 10px;"><?= $pneu[0]->descricao; ?></textarea>
                                
                                </div>
                               
                            </div>  
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="col-sm-12" ><img src="<?= base_url('assets/uploads/'. $pneu[0]->foto_pneu);?>" alt="" class="showIMG img-responsive" id="showIMG"></div>
        
                                <div class="col-sm-12">
                                    <input type="file" name="userfile" id="userfile" value="" onchange="readURL(this);">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              
                <div class="box-footer ">
                    <small class="pull-right">
                        <button type="submit" name="submit" class="btn btn-success">Atualizar</button>
                    </small>
                </div>
            </form>
           