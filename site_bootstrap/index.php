<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Painel de controle</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
  <nav class="navbar navbar-default ">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Gerencia Ador</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul id="menu-principal" class="nav navbar-nav">
            <li class="active"><a ref_sys="sobre" href="#sobre">Editar Sobre</a></li>
            <li><a ref_sys="cadastrar_equipe" href="#about">Cadastrar Equipe</a></li>
            <li><a ref_sys="lista_equipe" href="#contact">Lista Equipe</a></li>
          </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="?sair"><span class="glyphicon glyphicon-off" aria-hidden="true"></span>Sair!</a></li>
            </ul>
        </div><!--finalizando nav -->
      </nav>    
        <header id="header">
            <div class="container">
              <div class="row">
                <div cass="row">
                <div class="col-md-9">
                  <h2><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>Painel de controle</h2>
                </div>
                <div class="col-md-3">
                  <p><span class="glyphicon glyphicon-time" aria-hidden="true"></span>Seu último login foi em 05/09/2022.</p>
                </div>
              </div>
            </div>
        </header>

        <section class="bread">
          <div class="container">
            <ol class="breadcrumb">
              <li class="active">Home</li>
            </ol>
          </div>
        </section>

        <section class="principal"> <!--menu lateral-->
          <div class="container">
            <div class="row">
              <div class="col-md-3">
                <div class="list-group">
                      <a href="#" class="list-group-item active cor-padrao" ref_sys="sobre"><span class="glyphicon glyphicon-pencil"></span> Sobre</a>
                        <a href="#" class="list-group-item" ref_sys="cadastrar_equipe"><span class="glyphicon glyphicon-pencil"></span>Cadastrar Equipe</a>
                    <a href="#" class="list-group-item" ref_sys="lista_equipe">
                      <span class="glyphicon glyphicon-list-alt"></span> Lista Equipe <span class="badge">2</span></a>
                    </div>
              </div>
              <!--iniciando paineis de controle-->
              <div class="col-md-9">
                <div class="panel panel-default">
                  <div class="panel-heading cor-padrao">
                    <h3 class="panel-title">Sobre</h3>
                  </div>
                  <div class="panel-body">
                    <form action="/action_page.php">
                      <div class="form-group">
                        <label for="email">Código HTML:</label>
                        <textarea class="form-control" style="height: 140px; resize: none"></textarea>
                      </div>
                      <button type="submit" class="btn btn-default">Enviar</button>
                    </form>
                  </div>
                </div>

                <!-- acima painel 1 abaixo painel 2-->

                <div class="panel panel-default">
                  <div class="panel-heading cor-padrao">
                    <h3 class="panel-title">Cadastrar Equipe</h3>
                  </div>
                  <div class="panel-body">
                    <form action="/action_page.php">
                      <div class="form-group">
                        <label for="email">Nome do membro:</label>
                        <input type="text" name="nome_membro" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="email">Descrição do membro:</label>
                        <textarea class="form-control" style="height: 140px; resize: none"></textarea>
                      </div>
                      <button type="submit" class="btn btn-default">Enviar</button>
                    </form>
                  </div>
                </div>


                <div class="panel panel-default">
                  <div class="panel-heading cor-padrao">
                    <h3 class="panel-title">Membros da Equipe</h3>
                  </div>
                  <div class="panel-body">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>ID:</th>
                          <th>Nome do membro</th>
                          <th>Excluir</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                         for($i = 0; $i<5; $i++){
                        ?>
                        <tr>
                          <td>1</td>
                          <td>Jonata</td>
                          <td><button type="button" class="btn-sn btn-danger"><span class="glyphicon glyphicon-trash"></span> Excluir</button></td>
                        </tr>
                          <?php }; ?>
                      </tbody>
                    </table>
                    
                  
              </div>
            </div>
          </div>
          </div>
          </div>
          </div>
        </section>
 

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
     $(function(){
      CliqueMenu();
      function CliqueMenu(){
        $('#menu-principal a, .list-group a').click(function(){
          $('.list-group a').removeClass('active').removeClass('cor-padrao');
          $('#menu-principal a').parent().removeClass('active');
          $('#menu-principal a[ref_sys='+$(this).attr('ref_sys')+']').parent().addClass('active');
          $('.list-group a[ref_sys='+$(this).attr('ref_sys')+']').addClass('active').addClass('cor-padrao');
          return false; 
          })
        }
      })
    </script>
  </body>
</html>
