<div class="row">

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
                  <th>nom</th>
                  <th>email</th>
                  <th>tel</th>
                  <th>Subject</th>
                  <th>envoyer le </th>
                  <th>actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($contacts as $contact)
                <tr>
                    <td>{{$contact->id}}</td>
                    <td>{{$contact->name}}</td>
                    <td>{{$contact->email}}</td>
                    <td>{{$contact->tel}}</td>
                    <td>{{$contact->Subject}}</td>
                    <td>{{$contact->created_at}}</td>
                    <td>
                      <div class="dropdown">
                          <button class="btn btn-outline-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Action
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="{{route('admin.contacts.details', ['id' => $contact->id])}}">Consulter</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-danger" wire:wlick="deleteContact({{$contact->id}})">Supprimer</a>
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
