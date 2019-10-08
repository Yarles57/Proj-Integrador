<!DOCTYPE html>
<html lang="PT-BR">
  <head>
    <title>SisRes - Dashboard</title>
  </head>

<body id="page-top">
  <?php
    include "menu/menuDashboar.php";
  ?>
      <div class="container-fluid">
        <!-- Icon Cards-->
        <div class="row">
          <!--------------------------- LABORATORIO -------------------------->
          <div class="col-xl-6 col-sm-6 mb-1">
            <div class="card text-white bg-primary o-hidden h-100 w-75">
              <div class="card-body">
                <div class="mr-5">Gerenciar Laboratórios</div>

                
                <div class="circle">
                  <img src="../imagens/group-refresh.png">
                </div>
              </div>
              
              <a class="card-footer text-white clearfix small z-1" href="cadasLab.php?classe=laboratorio&metodo=create">
                <span class="float-left">Cadastrar Laboratório</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>

              <a class="card-footer text-white clearfix small z-1" href="listarLab.php?classe=laboratorio&metodo=index">
                <span class="float-left">Listar Laboratórios</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>

          <!--------------------------- Professor -------------------------->

          <div class="col-xl-6 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100 w-75">
              <div class="card-body">

                <div class="mr-5">Gerenciar Professor</div>


                
                <div class="circle">
                  <img src="../imagens/scientist.png">
                </div> 

              </div>
              
              <a class="card-footer text-white clearfix small z-1" href="cadasProf.php?classe=professor&metodo=create">
                <span class="float-left">Cadastrar Professor</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>

              <a class="card-footer text-white clearfix small z-1" href="listarProf.php?classe=professor&metodo=index">
                <span class="float-left">Vizualizar Professores</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>

          <!--------------------------- Reservas -------------------------->

          <div class="col-xl-6 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100 w-75">
              <div class="card-body">
                <div class="mr-5">Gerenciar Reservas:</div>
                                    
                  <div class="circle">
                    <img src="../imagens/ticket.png">
                  </div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="listarRes.php?classe=reserva&metodo=index">
                <span class="float-left">Vizualizar Reservas Pendentes</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
              
              <a class="card-footer text-white clearfix small z-1" href="listarRes.php?classe=reserva&metodo=index">
                <span class="float-left">Vizualizar Reservas Avaliadas</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>

              
            </div>
          </div>

          <!--------------------------- Curso -------------------------->

          <div class="col-xl-6 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100 w-75">
              <div class="card-body">
                <div class="mr-5">Gerenciar Curso</div>

                 
                <div class="circle">
                  <img src="../imagens/group-refresh.png">
                </div>
              </div>
              
              <a class="card-footer text-white clearfix small z-1" href="cadasLab.php?classe=laboratorio&metodo=create">
                <span class="float-left">Cadastrar Curso</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>

              <a class="card-footer text-white clearfix small z-1" href="listarLab.php?classe=laboratorio&metodo=index">
                <span class="float-left">Listar Curso</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>

          <!--------------------------- Disciplina -------------------------->

          <div class="col-xl-6 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100 w-75">
              <div class="card-body">
                <div class="mr-5">Gerenciar Disciplina</div>

                
                <div class="circle">
                  <img src="../imagens/books-piled-.png">
                </div>
              </div>
              
              <a class="card-footer text-white clearfix small z-1" href="cadasLab.php?classe=laboratorio&metodo=create">
                <span class="float-left">Cadastrar Disciplina</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>

              <a class="card-footer text-white clearfix small z-1" href="listarLab.php?classe=laboratorio&metodo=index">
                <span class="float-left">Listar Disciplina</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          
        </div>

  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Pronto para partir?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Selecione "Sair" abaixo se você estiver pronto para encerrar sua sessão atual.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <a class="btn btn-primary" href="login.html">Sair</a>
        </div>
      </div>
    </div>
  </div>
 
 </div>




</body>

</html>
