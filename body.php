    <?php include 'app/ver_usuarios.php'; ?>
    
    <div class="container-fluid">

        <div class="row"> &nbsp; </div>

        <div class="row">
            <div class="col-sm-12">
                <nav aria-label="Page breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">Link 1</li>
                        <li class="breadcrumb-item">Item 2</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row">

          <div class="col-md-2">
              <nav class="navbar navbar-dark bg-dark">
                  <ul class="navbar-nav">
                  <li class="nav-item">
                      <a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModal">ADD USER</a>
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
          </div>

          <div class="col-md-10">
                <table class="table table-bordered table-hover">
                    <thead class="thead-dark">
                        <tr>
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
                            foreach ($data as $key => $value) {
                              echo '<tr>';
                              echo '<td scope="row">'.$value->data->id.'</td>';
                              echo '<td>'.$value->data->role.'</td>';
                              echo '<td>'.$value->data->name.'</td>';
                              echo '<td>'.$value->data->mail.'</td>';
                              echo '<td>'.$value->data->pwd.'</td>';
                              echo '<td>'.$value->data->points.'</td>';
                              echo '<td>'.$value->data->confiance_points.'</td>';
                              echo '<td>'.$value->data->reg_date.'</td>';
                              echo '</tr>';
                            }
                            ?>
            </tbody>
        </table>
  </div>

</div>



</div>


<!-- MODAL CADASTRA USUARIO -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cadastrar Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
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
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>