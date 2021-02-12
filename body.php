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
                      <a class="nav-link" href="#">ADD USER</a>
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