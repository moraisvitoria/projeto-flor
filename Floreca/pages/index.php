<?php
    require_once 'head.php';
    require_once 'menu.php';

?>

  <div class="row carrossel">
    <div class="col-md-12">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block" src="./imagens/carrossel-1.jpg" alt="Primeiro Slide">
          </div>
          <div class="carousel-item">
            <img class="d-block" src="./imagens/carrossel-2.jpg" alt="Segundo Slide">
          </div>
          <div class="carousel-item">
            <img class="d-block" src="./imagens/carrossel-3.jpg" alt="Terceiro Slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Próximo</span>
        </a>
      </div>
    </div>
  </div>



    <!-- CONTEÚDO -->

      <div class="container-fluid">
        <div class="row text-center">
          <div class="col-md-12 ">
            <h2 class="content__title">Floreça</h2>
            <h6>A melhor clínica de estética do Brasil</h6>
            <span>Profissionais experientes  |  A maior oferta do mercado  |  A melhor solução para si </span>
          </div>
        </div>

        <div class="row list" >
          <div class="col-sm-5" style="vertical-align:top">
            <img src="./imagens/peeling-2.png"   class="list__img" style="width: 100px;height:100px" alt="">
            <h3 class="list__title" >Alta tecnologia Floreça por um valor fixo</h3>
              <p class="text-md-left">No Floreça, nós planejamos seu protocolo de forma personalizada! Ao se tornar membro do Floreça, você pode realizar outros tratamentos, além das suas sessões mensais, por valores especiais de acordo com o seu plano.</p>
          </div>
    
          <div class="col-sm-5" style="vertical-align:top">
            <img src="./imagens/radiofrequencia-4.jpg" class="list__img" style="width: 100px;height:100px" alt="">
            <h3 class="list__title" >Equipamentos de última geração</h3>
            <p class="text-md-left">O Floreça dispõe em suas clínicas, aparelhos com a mais alta tecnologia. Seguimos padrões internacionais de qualidade para levar o autocuidado de forma inteligente e segura para cada um de vocês!</p>
          </div>
        </div>
       
        <div class="row text-center">
          <div class="col-md-12 ">
            <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-md-3 col-sm">
            <div class="card">
              <img class="card-img-top" src="./imagens/facial-2.jpg" alt="Imagem de capa do card">
              <div class="card-body">
                <h5 class="card-title">Preenchimento Facial</h5>
                <p class="card-text">Procedimento para embelezamento e reestruturação da pele envelhecida.</p>
                <a href="./facial.php" target="_blank" class="btn btn-primary">Clique e saiba mais</a>
              </div>
            </div>
          </div>

          <div class="col-md-3 col-sm">
            <div class="card">
              <img class="card-img-top" src="./imagens/facial-2.jpg" alt="Imagem de capa do card">
              <div class="card-body">
                <h5 class="card-title">Preenchimento Facial</h5>
                <p class="card-text">Procedimento para embelezamento e reestruturação da pele envelhecida.</p>
                <a href="./facial.php" target="_blank" class="btn btn-primary">Clique e saiba mais</a>
              </div>
            </div>
          </div>

          <div class="col-md-3 col-sm">
            <div class="card">
              <img class="card-img-top" src="./imagens/facial-2.jpg" alt="Imagem de capa do card">
              <div class="card-body">
                <h5 class="card-title">Preenchimento Facial</h5>
                <p class="card-text">Procedimento para embelezamento e reestruturação da pele envelhecida.</p>
                <a href="./facial.php" target="_blank" class="btn btn-primary">Clique e saiba mais</a>
              </div>
            </div>
          </div>
        </div>



      </div>

<!-- *************** SEGUNDO CONTEÚDO ***************** -->

      <div class="container-fluid pag-principal">
        <div class="row">
          <div class="col-md-12 text-center">
            <h5 class="listra">Floreça,fique mas Bela!</h5>
            <h3>Nossos Tratamentos</h3>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row carousel">
            <div class="col-md-3">
                <div class="details">
                    <img src="./imagens/remoçao.jpg" alt="remo.jpg">
                    <h2>Remoção de tatuagem</h2>
                    <p>A remoção de tatuagem  a todos os processos utilizados para eliminar uma tatuagem permanente.

A remoção pode ser feita por diversos motivos: arrependimento, um resultado final diferente do pretendido, por motivos profissionais ou porque o motivo pelo o qual foi feita perdeu o seu significado.</p>
                    <a href="https://">Fale Conosco</a>
                    <a href="http://">Saiba +</a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="details">
                    <img src="./imagens/intradermo-3.jpg" alt="imagem de intradermo">
                    <h2>Drenagem linfática</h2>
                    <p>Drenagem linfática é um tipo de massagem baseada na hipótese de que a manipulação do sistema linfático melhoraria a drenagem natural da linfa. O sistema linfático funciona a partir de movimentos peristálticos para mover a linfa até os linfonodos e então até os vasos linfáticos, que por sua vez retornam a linfa até o sistema cardiovascular. 
                    <a href="http://">Saiba +</a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="details">
                    <img src="./imagens/depila.jpg" alt="imagem de depila">
                    <h2>Depilação a laser</h2>
                    <p>é o processo de depilação por meio da exposição  de luz laser que destroem o folículo piloso.Os primeiros equipamentos de depilação a laser surgiram na década de 90 e desde então vem se se tornando um procedimento muito popular devido sua rapidez e eficácia.Funciona :uma luz focada que cauteriza o pelo na raiz, matando o bulbo capilar. O laser funciona por afinidade .</p>
                    <a href="https://">Fale Conosco</a>
                    <a href="http://">Saiba +</a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="details">
                    <img src="./imagens/butolinica-1.jpg" alt="imagem de butolinica">
                    <h2>Botox</h2>
                    <p>O botox é feito a partir de uma substância chamada Toxina Botulínica A, que é uma proteína produzida pela bactéria Clostridium botulinum. Essa, também é responsável por causar botulismo — condição em que ocorre paralisia muscular generalizada, devido à ingestão de altas doses da toxina. Quanto às finalidades estéticas, o botox é utilizado a fim de minimizar e eliminar alguns sinais da idade. O procedimento é feito por meio da aplicação da toxina botulínica em áreas estratégicas do rosto.</p>
        </div>
      </p>
                    <a href="https://">Fale Conosco</a>
                    <a href="http://">Saiba +</a>
                </div>
            </div>

        </div>
      </div>

<!-- **************************** MENSAGEM DE AGENDAMENTO *******************************-->
  
    <form class="scheduling__form" method="POST" action="./contatos.php">

        <div class="container-fluid">
          <div class="row ">
            <div class="col-md-12 text-center">
              <h1 class="appointment__form__title">Solicite sua avaliação gratuita!</h1>
              <p>Preencha o formulário abaixo com seus dados corretamente e nós entraremos em contato com você para maiores detalhes.</p>
            </div>
          </div>
        </div>

        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-5">
              <div class="form-group">
                <label for="nome">Seu nome completo</label>
                <input type="text" class="form-control" name="nome">    
              </div>
            </div> 
          </div>
              
          <div class="row justify-content-center">
            <div class="col-md-5">
              <div class="form-group">
                <label for="telefone">Telefone</label>
                <input type="text" class="form-control" name="telefone" placeholder="DDD + Número de telefone" onkeypress="$(this).mask('(00)00000-0000')">
              </div>
            </div>
          </div>
                
          <div class="row justify-content-center">
            <div class="col-md-5">
              <div class="form-group">
                <label for="exampleFormControlInput1">Endereço de e-mail</label>
                <input type="email" class="form-control" name="email">
              </div>
            </div>
          </div>

          <div class="row justify-content-center">
            <div class="col-md-5">
              <div class="form-group">
                  <label for="exampleFormControlSelect2">Tratamento</label>
                  <select multiple class="form-control" name="message">
                  <option>Limpeza de pele</option>
                    <option>Radiofrequência</option>
                    <option>Preenchimento Facial</option>
                    <option>Toxina Botulínica</option>
                    <option>Ultrassom Cavitacional</option>
                    <option>Intradermoterapia</option>
                    <option>Peeling Corporal</option>
                  </select>
              </div>
            </div>
          </div>
          <div class="col-md-12 text-center">
            <input type="submit" class="button__message" name="btnsoli" value="Enviar">
          </div>
        </div>
    </form>


<style>

.carrossel img{
    height:500px;
    width:100%;
}

.listra{
  color: #fff;
  background-color: #000;
  margin: 0 auto;
  font-size: small;
  box-shadow: 5px 5px 30px 15px rgba(0,0,0,0.15), -5px -5px 30px 15px rgba(0,0,0,0.12);
}

  .list{
    display: flex;
    justify-content: center;
    margin-top: 70px;
    text-align: center;
  }

 
  .list__img{
    position: relative;
    margin-right: 19px;
    float: left;
    flex-shrink: 0;
    width: 100px;
    height: 100px;
    border-radius: 50%;
    background-size: cover;
    background-position: 50%;
  }  

  .list__title{
    line-height:95%;
    font-weight: 300;
    font-size: 20px;
  }
  
  .list__title h3{
    display: block;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
  }

  .list__title{
    text-align: justify;
  }
</style>







<?php
    require_once './footer.php';
?>