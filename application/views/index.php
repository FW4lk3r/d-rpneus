
        <div class="container principal">
            <div class="row">
                <div class="col-md-6 content-search">
                    <h2 class="nome_empresa"><?= $definicoes[0]->nome_empresa?></h2>

                    <form action="#" class="formulario">
                        <div class="form-group">
                                <label for="exampleSelect1">Largura</label>
                                <select class="form-control" name="largura" id="exampleSelect1">
                                <?php foreach ($largura as $row)
                                { ?>
                                    <option><?= $row->largura ?></option>
                                <?php }?>
                                </select>
                        </div>
                        <div class="form-group">
                                <label for="exampleSelect1">Altura</label>
                                <select class="form-control" name="altura" id="exampleSelect1">
                                <?php foreach ($altura as $row)
                                { ?>
                                    <option><?= $row->altura ?></option>
                                <?php }?>
                                </select>
                        </div>
                        <div class="form-group">
                                <label for="exampleSelect1">Diâmetro</label>
                                <select class="form-control" name="diametro" id="exampleSelect1">
                                <?php foreach ($diametro as $row)
                                { ?>
                                    <option><?= $row->diametro ?></option>
                                <?php }?>
                                </select>
                        </div>
                        <button type="submit" class="btn pesquisar">Pesquisar</button>
                      </form>
                      
                </div>
            </div>
        </div>
  </section>
 
  <section id="servicos">
    <div class="container" class="CServicos">
        <div class="row">
            <div class="col-md-12">
                <h2 class="nossos_servicos">Os nossos serviços</h2>
            </div>
        </div>
        <div class="row imagens">
          <div class="col-md-4 coluna"><img src="<?= base_url('assets/img/direcao.jpg');?>" class="img"/> <div class="servico_info">Alinhamento de direção</div></div>
          <div class="col-md-4 coluna"><img src="<?= base_url('assets/img/inspecao.jpg');?>" class="img"/><div class="servico_info">preparação para inspeção</div></div>
          <div class="col-md-4 coluna"><img src="<?= base_url('assets/img/revisao.jpg');?>" class="img"/><div class="servico_info">revisão geral</div></div>
          <div class="w-100"></div>
          <div class="col-md-6 coluna"><img src="<?= base_url('assets/img/pneus.jpg');?>" class="img"/><div class="servico_info">venda de Pneus</div></div>
          <div class="col-md-6 coluna"><img src="<?= base_url('assets/img/jantes.jpg');?>" class="img"/><div class="servico_info">venda de  Jantes</div></div>
        </div>
      </div>
  </section>
  <section id="pneus">
    <div class="container" id="CPneus">   
        <div class="row">
                <div class="col-md-12">
                    <h2 class="nome_pneus">Pneus</h2>
                </div>
                <div class="col-md-12 linha"></div>
                <!--<div class="col-md-12 desc_pneus">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>-->
            </div>
            <div class="row choose">
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-secondary botoes">
                              <input type="radio" name="options" id="option2" autocomplete="off"> Pneus Carros
                            </label>
                            <label class="btn btn-secondary botoes">
                              <input type="radio" name="options" id="option3" autocomplete="off"> Pneus Motos
                            </label>
                          </div>
            </div>
        
        <div class="row second_line">
            <?php foreach ($pneus as $row)
            { ?>
                <div class="col-xs-6 col-md-4 col-lg-3 padding-0" style="margin-bottom:15px;">
                    <figure class="pneus">
                        <img src="<?= base_url('assets/uploads/'. $row->foto_pneu);?>" alt="pneu"/>
                        <figcaption>
                            <h2>Características</h2>
                            <div class="row" >
                                <div class="col-lg-6 information" >Largura</div>
                                <div class="col-lg-6 information"><?= $row->largura?></div>
                            </div>
                            <div class="row" >
                                <div class="col-lg-6 information" >Altura</div>
                                <div class="col-lg-6 information"><?= $row->altura?></div>
                            </div>
                            <div class="row" >
                                <div class="col-lg-6 information" >Diâmetro</div>
                                <div class="col-lg-6 information"><?= $row->diametro?></div>
                            </div>
                        </figcaption>           
                    </figure>
                    <p class="titulo"><?= $row->marca?></p>
                    <p class="subtitulo"><?= $row->nome_pneu?></p>
                </div>
            <?php }?>
            
            
            
    </div>
   
      <!--   <div class="row example_div">
            <div class="col-md-12">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                      <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                          <span aria-hidden="true">&laquo;</span>
                          <span class="sr-only">Previous</span>
                        </a>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                          <span aria-hidden="true">&raquo;</span>
                          <span class="sr-only">Next</span>
                        </a>
                      </li>
                    </ul>
                  </nav>
            </div>
        </div> -->
        
        
        
</div>
</div>
  </section>
  <section id="empresa">
    <div class="container" id="CPneus">   
        <div class="row">
            <div class="col-md-12">
                <h2 class="nome_jantes">Jantes</h2>
            </div>
            <div class="col-md-12 linha2"></div>
            <!--<div class="col-md-12 desc_pneus">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>-->
        </div>
        
        <div class="row second_line">
            <div class="col-md-3 margin-0">
                <figure class="pneus">
                    <img src="<?= base_url('assets/img/pneusNovos.jpg');?>" alt="pneu"/>
                    <figcaption>
                        <h2>Características<p>Pneu</p></h2>
                        <p>Largura:</p>
                        <p>Altura:</p>
                        <p>Diâmetro:</p>
                    </figcaption>           
                </figure>
                <p class="titulo">Marca</p>
                <p class="subtitulo">Nome do Pneu</p>
            </div>
            <div class="col-md-3 padding-0">
                <figure class="pneus">
                    <img src="<?= base_url('assets/img/pneusNovos.jpg');?>" alt="pneu"/>
                    <figcaption>
                        <h2>Características<p>Pneu</p></h2>
                        <p>Largura:</p>
                        <p>Altura:</p>
                        <p>Diâmetro:</p>
                    </figcaption>           
                </figure>
                <p class="titulo">Marca</p>
                <p class="subtitulo">Nome do Pneu</p>
            </div>
            <div class="col-md-3 padding-0">
                <figure class="pneus">
                    <img src="<?= base_url('assets/img/pneusNovos.jpg');?>" alt="pneu"/>
                    <figcaption>
                        <h2>Características<p>Pneu</p></h2>
                        <p>Largura:</p>
                        <p>Altura:</p>
                        <p>Diâmetro:</p>
                    </figcaption>           
                </figure>
                <p class="titulo">Marca</p>
                <p class="subtitulo">Nome do Pneu</p>
            </div>
            <div class="col-md-3 padding-0">
                <figure class="pneus">
                    <img src="<?= base_url('assets/img/pneusNovos.jpg');?>" alt="pneu"/>
                    <figcaption>
                        <h2>Características<p>Pneu</p></h2>
                        <p>Largura:</p>
                        <p>Altura:</p>
                        <p>Diâmetro:</p>
                    </figcaption>           
                </figure>
                    <div class="texto">
                            <p class="titulo">Marca</p>
                            <p class="subtitulo">Nome do Pneu</p>
                    </div>
                
            </div>
            
            
        </div>
   
        <div class="row second_line">
            <div class="col-md-3 padding-0">
                <figure class="pneus">
                    <img src="<?= base_url('assets/img/pneusNovos.jpg');?>" alt="pneu"/>
                    <figcaption>
                        <h2>Características<p>Pneu</p></h2>
                        <p>Largura:</p>
                        <p>Altura:</p>
                        <p>Diâmetro:</p>
                    </figcaption>           
                </figure>
                <div class="texto">
                        <p class="titulo">Marca</p>
                        <p class="subtitulo">Nome do Pneu</p>
                </div> 
        </div>
        <div class="col-md-3 padding-0">
            <figure class="pneus">
                <img src="<?= base_url('assets/img/pneusNovos.jpg');?>" alt="pneu"/>
                <figcaption>
                    <h2>Características<p>Pneu</p></h2>
                    <p>Largura:</p>
                    <p>Altura:</p>
                    <p>Diâmetro:</p>
                </figcaption>           
            </figure>
            <p class="titulo">Marca</p>
            <p class="subtitulo">Nome do Pneu</p>
        </div>
        <div class="col-md-3 padding-0">
            <figure class="pneus">
                <img src="<?= base_url('assets/img/pneusNovos.jpg');?>" alt="pneu"/>
                <figcaption>
                    <h2>Características<p>Pneu</p></h2>
                    <p>Largura:</p>
                    <p>Altura:</p>
                    <p>Diâmetro:</p>
                </figcaption>           
            </figure>
            <p class="titulo">Marca</p>
            <p class="subtitulo">Nome do Pneu</p>
        </div>
        <div class="col-md-3 padding-0">
            <figure class="pneus">
                <img src="<?= base_url('assets/img/pneusNovos.jpg');?>" alt="pneu"/>
                <figcaption>
                    <h2>Características<p>Pneu</p></h2>
                    <p>Largura:</p>
                    <p>Altura:</p>
                    <p>Diâmetro:</p>
                </figcaption>           
            </figure>
            <p class="titulo">Marca</p>
            <p class="subtitulo">Nome do Pneu</p>
        </div>
        <div class="row example_div">
            <div class="col-md-12">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                      <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                          <span aria-hidden="true">&laquo;</span>
                          <span class="sr-only">Previous</span>
                        </a>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                          <span aria-hidden="true">&raquo;</span>
                          <span class="sr-only">Next</span>
                        </a>
                      </li>
                    </ul>
                  </nav>
            </div>
        </div>
        
            
            
    </div>

  </section>
  <section id="contactos">
        <div class="container" id="CServicos">
            <div class="row contact_conteudo">
                    <div class="col-md-6 coluna2" id="colunax">
                        <h2 class="nome_contactos">Contactos</h2>
                        <p class="tel_morada">Morada: <?= $definicoes[0]->morada?></p>
                        <p class="desc_contactos"><?= $definicoes[0]->desc_contactos?></p>
                        <form action="#">
                            <div class="form-group">
                                    <input type="text" class="form-control" id="name" placeholder="Nome">
                            </div>
                            <div class="form-group">
                                    <input type="email" class="form-control" id="mail" placeholder="Email">
                            </div>
                            <div class="form-group">
                                    <textarea type="text" class="form-control" id="message" placeholder="Mensagem"></textarea>
                            </div>
                            <button type="submit" class="btn btn-default botao_contact">Enviar</button>
                            </form>
                    </div>
                    <div class="col-md-6" id="">
                    <div style="width: 100%"><iframe width="100%" height="600" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=1%20Grafton%20Street%2C%20Dublin%2C%20Ireland+(My%20Business%20Name)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/map-my-route/">Draw map route</a></iframe></div><br />
                    </div>
                </div>
        </div>
  </section>
