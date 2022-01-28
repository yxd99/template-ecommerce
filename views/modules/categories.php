<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>
            Categorias
          </h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Blank Page</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Gestión de categorias</h3>
        <div class="card-tools">
          <ul class="nav nav-pills ml-auto">
            <li class="nav-item">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-create">
                Crear
              </button>
            </li>
          </ul>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table class="table table-bordered table-striped data-table">
          <thead>
            <tr>
              <th style="width: 10px;">#</th>
              <th>Descripción</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $categories = CategoriesController::findAll();
            $i = 1;
            foreach ($categories as $categorie) {
              $buttons = "<div class='btn-group'>
                <button class='btn btn-warning btnEdit' idCategorie='$categorie[id]' data-toggle='modal' data-target='#modal-edit'>
                  <i class='fas fa-pencil-alt'></i>
                </button>
                <button class='btn btn-danger btnDelete' idCategorie='$categorie[id]' data-toggle='modal' data-target='#modal-delete'>
                  <i class='fas fa-trash-alt'></i>
                </button>
              </div>";
              echo "<tr>
                <td>$i</td>
                <td id='cat$categorie[id]'>$categorie[description]</td>
                <td>$buttons</td>
              </tr>";
              $i++;
            }
            ?>
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->
</div>

<div class="modal fade" id="modal-create">
  <div class="modal-dialog">
    <form method="POST">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Crear Categoria</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="card-body">
            <div class="form-group">
              <label for="description">Descripción</label>
              <input type="text" maxlength="20" class="form-control" id="description" name="description" placeholder="Ingrese el nombre de la categoria.">
            </div>
          </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary" name="btnCreate">Guardar</button>
        </div>
      </div>
    </form>
    <?php
    $categorie = new CategoriesController();
    $categorie->save();
    ?>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="modal-edit">
  <div class="modal-dialog">
    <form method="POST">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Editar Categoria</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="card-body">
            <div class="form-group">
              <input type="hidden" id="idEdit" name="idCategorie">
              <label for="description">Descripción</label>
              <input type="text" maxlength="20" class="form-control" id="edit-description" name="description" placeholder="Ingrese el nombre de la categoria.">
            </div>
          </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary" name="btnEdit">Guardar</button>
        </div>
      </div>
    </form>
    <?php
    $categorie = new CategoriesController();
    $categorie->edit();
    ?>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="modal-delete">
  <div class="modal-dialog">
    <form method="POST">
      <div class="modal-content bg-danger">
        <div class="modal-header">
          <h4 class="modal-title">Eliminar Categoria</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="card-body">
            <div class="form-group">
              <h1>¿Está seguro de eliminar está categoria?</h1>
              <input type="hidden" id="idDelete" name="idCategorie">
              <label for="description">Descripción</label>
              <input readonly type="text" maxlength="20" class="form-control" id="delete-description" name="description" placeholder="Ingrese el nombre de la categoria.">
            </div>
          </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary" name="btnDelete">Eliminar</button>
        </div>
      </div>
    </form>
    <?php
    $categorie = new CategoriesController();
    $categorie->delete();
    ?>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>