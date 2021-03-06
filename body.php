    <?php include 'app/ver_usuarios.php'; ?>
    
    <div class="container-fluid">

        <div class="row"> &nbsp; </div>

        <div class="row">
            <div class="col-sm-12">
                <nav aria-label="Page breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">Home</li>
                        <li class="breadcrumb-item" id="Bread2">...</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row">

          <div class="col-md-2">
              <nav class="navbar navbar-dark bg-dark">
                  <ul class="navbar-nav">
                  <li class="nav-item">
                      <a class="nav-link" href="#" id="ADDUSER" data-toggle="modal" data-target="#exampleModal">ADD USER</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#">EDIT USER</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#">SEE USERS</a>
                  </li>
                  <!-- <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                  </li> -->
                  </ul>                        
              </nav>

              <div class="card">
                <div class="card-body">
                  Total Users is <spam class="totalUsers">...</spam>
                </div>
              </div>

          </div>



          <div class="col-md-10">
                <table class="table table-sm table-bordered table-hover" id="SeeTable">
                    <thead class="thead-dark">
                        <tr>
                            <th>IMG</th>
                            <th>ID</th>
                            <th>ROLE</th>
                            <th>NAME</th>
                            <th>EMAIL</th>
                            <th>PWD</th>
                            <th>POINTS</th>
                            <th>CONFIANCE POINTS</th>
                            <th>REG DATE</th>
                        </tr>
                    </thead>
                    <tbody>
                            <?php 
                            $tat1 = 0;
                            $tat2 = 0;
                            $tat3 = 0;
                            foreach ($data as $key => $value) {

                              echo '<tr>';
                              if(file_exists("user/".$value->data->id."/img_perfil/default.jpg") ){
                                echo '<td><img src="user/'.$value->data->id.'/img_perfil/default.jpg" width="45px"> </td>';
                              }else{
                                echo '<td><img src="assets/bajados/star.png" width="45px"> </td>';
                              }
                              echo '<td class="ids" scope="row" id="'.$value->data->id.'">'.$value->data->id.'</td>';
                              echo '<td>'.$value->data->role.'</td>';
                              echo '<td>'.$value->data->name.'</td>';
                              echo '<td>'.$value->data->mail.'</td>';
                              echo '<td>'.$value->data->pwd.'</td>';
                              echo '<td>';
                              // echo $value->data->points;
                              
                              $points = $value->data->points;
                              $stars =  1000;
                              $hearts = 1000;
                              $moneys = 1000;

                                // fazer a comparação
                                $value_points = $value->data->points; // Valor de teste

                                $star_points_actual = $value_points / $stars;
                                $hearts_points_actual = $value_points / $hearts;
                                $moneys_points_actual = $value_points / $moneys;

                                if($moneys_points_actual > 1){
                                  $tat1 += $moneys_points_actual;
                                  $tat1 = $tat1 / 10;
                                  echo "Tat: ".round($tat1, 0, PHP_ROUND_HALF_DOWN);
                                  for ($i=0; $i < round($tat1, 0, PHP_ROUND_HALF_DOWN); $i++) { 
                                    # code...
                                    echo '<img src="assets/bajados/money.png" width="20px">';
                                  }
                                }
                                
                                if($hearts_points_actual > 1){
                                  $tat2 += $hearts_points_actual;
                                  $tat2 = $tat2 / 10;
                                  echo "Tat: ".round($tat2, 0, PHP_ROUND_HALF_DOWN);
                                  for ($i=0; $i < round($tat2, 0, PHP_ROUND_HALF_DOWN); $i++) { 
                                    # code...
                                    echo '<img src="assets/bajados/heart.png" width="20px">';
                                  }
                                }

                                if($star_points_actual > 1){
                                  $tat3 += $star_points_actual;
                                  $tat3 = $tat3 / 10;
                                  echo "Tat: ".round($tat3, 0, PHP_ROUND_HALF_DOWN);
                                  for ($i=0; $i < round($tat3, 0, PHP_ROUND_HALF_DOWN); $i++) { 
                                    # code...
                                    echo '<img src="assets/bajados/star.png" width="20px">';
                                  }
                                }
                              
                              echo '</td>';
                              echo '<td>'.$value->data->confiance_points.'</td>';
                              echo '<td>'.$value->data->reg_date.'</td>';
                              echo '</tr>';
                            }
                            ?>
            </tbody>
        </table>


        </br></br>
  </div>

</div>



</div>


<!-- MODAL CADASTRA USUARIO -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cadastrar Usuario</h5>
        <button type="button" class="close" id="CLOSE" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

              <form action="app/add_user.php" method="post">
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Role</label>
                    <select class="form-control" id="role" name="role">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="exampleFormControlInput1">Nome</label>
                    <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Nome">
                  </div>

                  <div class="form-group">
                    <label for="exampleFormControlInput1">Email address</label>
                    <input type="email" name="mail" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="pwd" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Default Confiance Points</label>
                    <input type="text"  name="confiance_points" class="form-control" id="exampleInputPassword1" placeholder="0.005" value="0.005">
                  </div>

                  <div class="form-group">
                    <input type="hidden" name="points" class="form-control" id="points" placeholder="0" value="0">
                  </div>

                  <button type="submit" class="btn btn-primary btn-sm">Cadastrar</button>

          </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" id="CLOSE2" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>