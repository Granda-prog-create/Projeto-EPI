<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Projeto Bootstrap</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">


  </head>
  <body>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
   
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">EPI Fácil</a>
    </div>

    
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Sobre <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Contato</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Peça aqui!<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Produtos</a></li>
            <li><a href="#">Lojas</a></li>
            <li><a href="#">Faça um orçamento</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Divulgue com a EPI Fácil</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Cadastro</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-right">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Pesquisar</button>
      </form>
      <ul class="nav navbar-nav navbar-right"> 
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

    <div class="box">
      <section class="banner">
        <div class="overlay"></div>
        <div class="container chamada-banner">
          <div class="row">
              <div class="col-md-12 text-center">
                  <h2><?php echo htmlentities('<'); ?>Danki.Code<?php echo htmlentities('>');  ?></h2>
                  <p>Entregas de equipamentos de EPI</p>
                  <a href="">Saiba Mais!</a>
              </div><!--col-md-12-->
          </div><!--row-->
        </div>
      </section> 

<section class="cadastro-lead">
          <div class="container">
            <div class="row text-center">
                <div class="col-md-6">
                  <h2><span class="glyphicon glyphicon-star" aria-hidden="true"></span> Entre na nossa lista!</h2>
                </div>
                <div class="col-md-6">
                  <form method="post">
                    <input type="text" name="nome" /><input type="submit" value="Enviar" />
                  </form>
                </div>
            </div>
          </div>
      </section>

      <section class="depoimento text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                  <h2>Depoimento</h2>
                    <blockquote>
                      <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eget lorem varius, pellentesque ipsum convallis, suscipit neque. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam quis orci quam. Phasellus dictum erat at nibh bibendum, eget porta urna pretium. Maecenas vel augue massa. Nulla facilisi. Nulla a suscipit quam, eu pharetra justo."</p>
                  </blockquote>
                </div>
            </div>
        </div>
      </section>

    <section class="diferenciais text-center">
      <h2>Conheça nossa empresa</h2>
        <div class="container diferenciais-container">
            <div class="row">
              <div class="col-md-4">
                  <h3><span class="glyphicon glyphicon-glass"></span></h3>
                  <h2>Diferencial #1</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eget lorem varius, pellentesque ipsum convallis, suscipit neque. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam quis orci quam. Phasellus dictum erat at nibh bibendum, eget porta urna pretium. Maecenas vel augue massa. Nulla facilisi. Nulla a suscipit quam, eu pharetra justo.</p>
              </div>

              <div class="col-md-4">
                  <h3><span class="glyphicon glyphicon-star"></span></h3>
                  <h2>Diferencial #1</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eget lorem varius, pellentesque ipsum convallis, suscipit neque. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam quis orci quam. Phasellus dictum erat at nibh bibendum, eget porta urna pretium. Maecenas vel augue massa. Nulla facilisi. Nulla a suscipit quam, eu pharetra justo.</p>
              </div>

              <div class="col-md-4">
                  <h3><span class="glyphicon glyphicon-heart"></span></h3>
                  <h2>Diferencial #1</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eget lorem varius, pellentesque ipsum convallis, suscipit neque. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam quis orci quam. Phasellus dictum erat at nibh bibendum, eget porta urna pretium. Maecenas vel augue massa. Nulla facilisi. Nulla a suscipit quam, eu pharetra justo.</p>
              </div>

            </div>
        </div>
      </section>

      <section class="equipe">
        <h2>Equipe</h2>
        <div class="container equipe-container">
            <div class="row">
                <div class="col-md-6">
                    <div class="equipe-single">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="user-picture">
                                  <div class="user-picture-child"></div>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <h3>Matheus</h3>
                                <p>suscipit neque. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam quis orci quam. Phasellus dictum erat at nibh bibendum, eget porta urna pretium. Maecenas vel augue massa. Nulla facilisi. Nulla a suscipit quam, eu pharetra justo</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="equipe-single">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="user-picture">
                                  <div class="user-picture-child"></div>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <h3>Matheus</h3>
                                <p>suscipit neque. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam quis orci quam. Phasellus dictum erat at nibh bibendum, eget porta urna pretium. Maecenas vel augue massa. Nulla facilisi. Nulla a suscipit quam, eu pharetra justo</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="equipe-single">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="user-picture">
                                  <div class="user-picture-child"></div>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <h3>Matheus</h3>
                                <p>suscipit neque. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam quis orci quam. Phasellus dictum erat at nibh bibendum, eget porta urna pretium. Maecenas vel augue massa. Nulla facilisi. Nulla a suscipit quam, eu pharetra justo</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="equipe-single">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="user-picture">
                                  <div class="user-picture-child"></div>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <h3>Matheus</h3>
                                <p>suscipit neque. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam quis orci quam. Phasellus dictum erat at nibh bibendum, eget porta urna pretium. Maecenas vel augue massa. Nulla facilisi. Nulla a suscipit quam, eu pharetra justo</p>
                            </div>
                        </div>
                    </div>
                </div>           
            </div>
        </div><!--equipe-container-->
      </section>


      <section class="final-site">
          <div class="container">
              <div class="row">

                  <div class="col-md-6">
                    <h2>Fale conosco</h2>
                    <form>
                        <div class="form-group">
                          <label for="email">Nome:</label>
                          <input type="text" name="nome" class="form-control" id="nome">
                        </div>

                         <div class="form-group">
                          <label for="email">E-mail:</label>
                          <input type="email" name="email" class="form-control" id="email">
                        </div>

                         <div class="form-group">
                          <label for="email">Mensagem:</label>
                          <textarea class="form-control"></textarea>
                        </div>
                      
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                  </div>

                  <div class="col-md-6">
                      <h2>Nossos planos</h2>
                        <table class="table">
                            <thead>
                              <tr>
                                <th>Plano Semanal</th>
                                <th>Plano Diário</th>
                                <th>Plano Anual</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>R$199,00</td>
                               <td>R$299,00</td>
                                <td>R$399,00</td>
                              </tr>

                              <tr>
                                <td>R$199,00</td>
                               <td>R$299,00</td>
                                <td>R$399,00</td>
                              </tr>

                               <tr>
                                <td>R$199,00</td>
                               <td>R$299,00</td>
                                <td>R$399,00</td>
                              </tr>
                            </tbody>
                          </table>
                  </div>

              </div>
          </div>
      </section>

      <footer>
        <p class="text-center">Todos os direitos reservados!</p>
      </footer>

    </div><!--box-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>t>
  </body>
</html>
