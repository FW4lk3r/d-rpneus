
 <section id="paginainicial">
     <div class="container">

         <div class="panel free-quote">
            <ul class="nav nav-tabs nav-tabs-custom nav-tabs-orange margin-top-15">
                <li class="active">
                    <a href="#carro" aria-controls="ship" role="tab" data-toggle="tab"><i class="fas fa-car"></i> <?= htmlspecialchars($definicoes['carro']);  ?></a>
                </li>
                <li class="hidden-xs">
                    <a href="#moto" aria-controls="track" role="tab" data-toggle="tab"><i class="fas fa-motorcycle"></i> <?= htmlspecialchars($definicoes['moto']);  ?></a>
                </li>
                <li>
                    <a href="#jante" aria-controls="teste" role="tab" data-toggle="tab"><i class="fas fa-dharmachakra"></i> <?= htmlspecialchars($definicoes['jante']);  ?></a>
                </li>
            </ul>
            <div class="tab-content panel-body">
                <div role="tabpanel" class="tab-pane active" id="carro">
                <form action="/action_page.php" class="formulario">
                    <div class="row titulos">
                        <div class="col-sm-4"><label for="exampleSelect1"><?= htmlspecialchars($definicoes['largura']);  ?></label></div>
                        <div class="col-sm-3"><label for="exampleSelect1"><?= htmlspecialchars($definicoes['altura']);  ?></label></div>
                        <div class="col-sm-3"><label for="exampleSelect1"><?= htmlspecialchars($definicoes['diametro']);  ?></label></div>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                    
                                    <select class="form-control" id="exampleSelect1">
                                    <?php foreach($largura as $row){ ?>
                                        <option value="<?= $row->id_largura?>"><?= $row->largura ?></option>
                                    <?php } ?>
                                    </select>
                            </div>

                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                
                                    <select class="form-control" id="exampleSelect1">
                                    <?php foreach($altura as $row){ ?>
                                        <option value="<?= $row->id_altura?>"><?= $row->altura ?></option>
                                    <?php } ?>
                                    </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <select class="form-control" id="exampleSelect1">
                                <?php foreach($diametro as $row){ ?>
                                    <option value="<?= $row->id_diametro?>"><?= $row->diametro ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <button type="submit" class="btn pesquisar"><?= htmlspecialchars($definicoes['pesquisar']);  ?></button>
                            </div>
                        </div>
                    </div>
                    
                    
           
                    </form>
                </div>
                <div role="tabpanel" class="tab-pane" id="moto">
                <form action="/action_page.php" class="formulario">
                    <div class="row titulos">
                        <div class="col-sm-4"><label for="exampleSelect1"><?= htmlspecialchars($definicoes['largura']);  ?></label></div>
                        <div class="col-sm-3"><label for="exampleSelect1"><?= htmlspecialchars($definicoes['altura']);  ?></label></div>
                        <div class="col-sm-3"><label for="exampleSelect1"><?= htmlspecialchars($definicoes['diametro']);  ?></label></div>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                    
                                    <select class="form-control" id="exampleSelect1">
                                    <?php foreach($largura as $row){ ?>
                                        <option value="<?= $row->id_largura?>"><?= $row->largura ?></option>
                                    <?php } ?>
                                    </select>
                            </div>

                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                
                                    <select class="form-control" id="exampleSelect1">
                                    <?php foreach($altura as $row){ ?>
                                        <option value="<?= $row->id_altura?>"><?= $row->altura ?></option>
                                    <?php } ?>
                                    </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <select class="form-control" id="exampleSelect1">
                                <?php foreach($diametro as $row){ ?>
                                    <option value="<?= $row->id_diametro?>"><?= $row->diametro ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <button type="submit" class="btn pesquisar"><?= htmlspecialchars($definicoes['pesquisar']);  ?></button>
                            </div>
                        </div>
                    </div>
                    
                    
           
                    </form>
                </div>
                <div role="tabpanel" class="tab-pane" id="jante">
                <form action="/action_page.php" class="formulario">
                    <div class="row titulos">
                        <div class="col-sm-4"><label for="exampleSelect1"><?= htmlspecialchars($definicoes['marca']);  ?></label></div>
                        <div class="col-sm-4"><label for="exampleSelect1"><?= htmlspecialchars($definicoes['diametro']);  ?></label></div>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                
                                    <select class="form-control" id="exampleSelect1">
                                    <?php foreach($veiculos as $row){ ?>
                                        <option value="<?= $row->id_marca_veiculo?>"><?= $row->marca_veiculo ?></option>
                                    <?php } ?>
                                    </select>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <select class="form-control" id="exampleSelect1">
                                <?php foreach($diametro as $row){ ?>
                                    <option value="<?= $row->id_diametro?>"><?= $row->diametro ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-2 col-sm-offset-2">
                            <div class="form-group">
                                <button type="submit" class="btn pesquisar"><?= htmlspecialchars($definicoes['pesquisar']);  ?></button>
                            </div>
                        </div>
                    </div>
                    
                    
           
                    </form>
                </div>
                
            </div>
        </div>
     </div>
        
  </section>
 
  <section id="servicos" class="">
    <div class="container" class="CServicos">
        <div class="row">
            <div class="col-md-12">
                <h2 class = "nossos_servicos text-center"><?= htmlspecialchars($definicoes['nosso_servicos']);  ?></h2>
            </div>
            <div class="col-md-12 linha2"></div>
        </div>
        <div class="row imagens animatedParent" >
          <div class="col-xs-12 col-sm-6 col-md-4 coluna animated bounceInDown"><img src="<?= base_url('assets/img/direcao.jpg');?>" class="img"/> <div class="servico_info" ><?= htmlspecialchars($definicoes['servico_1']);  ?></div></div>
          <div class="col-xs-12 col-sm-6 col-md-4 coluna animated bounceInDown"><img src="<?= base_url('assets/img/inspecao.jpg');?>" class="img"/><div class="servico_info"><?= htmlspecialchars($definicoes['servico_2']);  ?></div></div>
          <div class="col-xs-12 col-sm-6 col-md-4 coluna animated bounceInDown"><img src="<?= base_url('assets/img/revisao.jpg');?>" class="img"/><div class="servico_info"><?= htmlspecialchars($definicoes['servico_3']);  ?></div></div>
          <div class="w-100"></div>
          <div class="col-xs-12 col-sm-6 col-md-6 coluna animated bounceInDown"><img src="<?= base_url('assets/img/pneus.jpg');?>" class="img"/><div class="servico_info"><?= htmlspecialchars($definicoes['servico_4']);  ?></div></div>
          <div class="col-xs-12 col-sm-6 col-md-6 coluna animated bounceInDown"><img src="<?= base_url('assets/img/jantes.jpg');?>" class="img"/><div class="servico_info"><?= htmlspecialchars($definicoes['servico_5']);  ?></div></div>
        </div>
      </div>
  </section>



  <section id="pneus">
    <div class="container" id="CPneus">   
        <div class="row">
            <div class="col-md-12">
                <h2 class="nome_pneus"><?= htmlspecialchars($definicoes['pneu']);  ?></h2>
            </div>
            <div class="col-md-12 linha"></div>
        </div>
        <div class="row choose">
            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-secondary botoes">
                    <input type="radio" name="options" id="option2" autocomplete="off"> <?= htmlspecialchars($definicoes['pneu_carro']);  ?>
                </label>
                <label class="btn btn-secondary botoes">
                    <input type="radio" name="options" id="option3" autocomplete="off"> <?= htmlspecialchars($definicoes['pneu_moto']);  ?>
                </label>
            </div>
        </div>
        
        <div class="row">
            <?php foreach($pneus as $row){ ?>
            <div class="col-xs-12 col-sm-6 col-md-3 margin-bottom-10">
                <div class="contents-data">
                    <!--<strong class="preco"> <?= $row->preco ?> €</strong> -->
                    <div class="retangulo"><?= $row->preco ?> CHF</div>
                    <figure class="pneus"  id="imagemPneus">
                        <img src="<?= base_url('assets/uploads/'.$row->foto_pneu)?>" alt="pneu"/>
                        <figcaption>
                            <p><?= htmlspecialchars($definicoes['largura']);  ?>: <?= $row->largura ?></p>
                            <p><?= htmlspecialchars($definicoes['altura']);  ?>: <?= $row->altura ?></p>
                            <p><?= htmlspecialchars($definicoes['diametro']);  ?>: <?= $row->diametro ?></p>
                        </figcaption>           
                    </figure>
                
                    <p class="titulo"><?= $row->marca ?></p>
                    <p class="subtitulo"><?= $row->nome_pneu ?></p>
                </div>
            </div>
            <?php } ?>        
        </div>
   
        
    </div>
  </section>





  <section id="empresa">
    <div class="container" id="CPneus">   
        <div class="row">
            <div class="col-md-12">
                <h2 class="nome_jantes"><?= htmlspecialchars($definicoes['jante']);  ?></h2>
            </div>
            <div class="col-md-12 linha2"></div>
                <!--<div class="col-md-12 desc_pneus">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>-->
        </div>
        
        <div class="row second_line">
        <?php foreach($jantes as $row){ ?>        
            <div class="col-md-3 padding-0">
            <strong class="preco"> <?= $row->preco ?> €</strong>
                <figure class="pneus"  id="imagemPneus">
                    <img src="<?= base_url('assets/uploads/'.$row->foto_jante)?>" alt="jante"/>
                    <figcaption>
                        <h2><p>Jante</p></h2>
                        
                        <p>Diâmetro: <?= $row->diametro ?></p>
                    </figcaption>           
                </figure>
                <p class="titulo"><?= $row->marca_veiculo ?></p>
                <p class="subtitulo"><?= $row->nome_jante ?></p>
            </div>
            <?php } ?>         
           
        
        
        
        </div>
    </div>
  </section>
  <section id="contactos">
      <div class="container">
          <div class="row">
                <h2 class="nome_contactos text-center"><?= htmlspecialchars($definicoes['contacto']);  ?></h2>
                <div class="col-md-12 linha-amarela"></div>
                <div class="clearfix"></div>
                <div class="col-md-6">
                    <h4 class="text-uppercase nome_contactos text-center "><?= htmlspecialchars($definicoes['titulo_contacto']);  ?></h4>

                    <p class="desc_contactos"><?= htmlspecialchars($definicoes['desc_contacto']);  ?></p>
                    <form action="#">
                        <div class="form-group">
                                <input type="text" class="form-control" id="name" placeholder="Nom">
                        </div>
                        <div class="form-group">
                                <input type="email" class="form-control" id="mail" placeholder="E-mail">
                        </div>
                        <div class="form-group">
                                <textarea type="text" rows="6" class="form-control" id="message" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-default botao_contact"><?= htmlspecialchars($definicoes['enviar']);  ?></button>

                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="text-uppercase nome_contactos text-center "><?= htmlspecialchars($definicoes['nossa_localizacao']);  ?></h4>
                                <p class="desc_contactos"> <?= htmlspecialchars($definicoes['rua']);  ?>, <?= htmlspecialchars($definicoes['cod_postal']);  ?></p>      
                        </div>
                        <div class="col-md-12">
                            <iframe width="100%" style="width: 100%;height: 290px; position: relative;overflow: hidden;" height="600" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=1%20Grafton%20Street%2C%20Dublin%2C%20Ireland+(My%20Business%20Name)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/map-my-route/">Draw map route</a></iframe>
                        </div>
                    </div>
                </div>
                
          </div>

      </div>

  </section>
  
  