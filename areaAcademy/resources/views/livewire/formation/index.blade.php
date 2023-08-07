<div class="row">
    <div class="col-12 d-flex justify-content-end mb-3">
        <a class="btn btn-success "  href="{{route('admin.formations.create')}}">Ajouter une formation</a>
    </div>
    <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Liste des formations</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th style="width: 10px">#</th>
                  <th>name</th>
                  <th>créé le </th>
                  <th>actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($formations as $formation)
                <tr>
                    <td>{{$formation->id}}</td>
                    <td>{{$formation->name}}</td>
                    <td>{{$formation->created_at}}</td>
                    <td>
                      <div class="dropdown">
                          <button class="btn btn-outline-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Action
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="{{route('admin.formations.details', ['id' => $formation->id])}}">Consulter</a>
                            <a class="dropdown-item" href="{{route('admin.formations.edit', ['id' => $formation->id])}}">Modifier</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-danger" wire:wlick="deleteformation({{$formation->id}})">Supprimer</a>
                          </div>
                        </div>
                    </td>
                  </tr> 
                @endforeach


              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
          <div class="card-footer clearfix">
            <ul class="pagination pagination-sm m-0 float-right">
              <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
            </ul>
          </div>
        </div>
         <!-- /.card -->
    </div>
    <!-- /.col -->
</div>
