<div class="row">

    @if (session()->has('error'))
        <div class="col-12">
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        </div>
    @endif
    @if (session()->has('success'))
        <div class="col-12">
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        </div>
    @endif

    <div class="col-12 d-flex justify-content-end mb-3">

        <button class="btn btn-danger mr-3" wire:click="deleteStudent">Supprimer l'inscription</button>
    </div>
    

    <div class="col-6">
        <!-- general form elements -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Infomation client</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Nom</label>
                    <input type="text" value="{{$student->first_name}}"  class="form-control" id="name" placeholder="nom de la formation" readonly >
                </div>

                <div class="form-group">
                    <label for="name">prenom</label>
                    <input type="text" value="{{$student->last_name}}"  class="form-control" id="name" placeholder="nom de la formation" readonly >
                </div>
            </div>

        </div>
        <!-- /.card -->
    </div>

    <div class="col-6">
        <!-- general form elements -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Coordonné client</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="form-group">
                    <label for="name">tel</label>
                    <input type="text" value="{{$student->phone}}"  class="form-control"  readonly >
                </div>

                <div class="form-group">
                    <label for="name">adresse email</label>
                    <input type="text" value="{{$student->email}}"  class="form-control" readonly >
                </div>


                <div class="form-group">
                    <label for="name">adresse</label>
                    <input type="text" value="{{$student->address}}"  class="form-control" readonly >
                </div>

                <div class="col-12 d-flex justify-content-end ">
                    <a href="tel:{{$student->phone}}" class="btn btn-primary mr-3">Appeler</a>
                    <a href="mailto:{{$student->email}}" class="btn btn-info mr-3">Envoyer email</a>
                </div>

            </div>

        </div>
        <!-- /.card -->
    </div>

    <div class="col-6">
        <!-- general form elements -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Infomation inscription</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="form-group" >
                    <label for="name">Ville</label>
                    <input type="text" value="{{$info['ville']}}"  class="form-control" readonly >
                </div>
                <div class="form-group" >
                    <label for="name">pays</label>
                    <input type="text" value="{{$info['pays']}}"  class="form-control" readonly >
                </div>
                <div class="form-group" >
                    <label for="name">education</label>
                    <input type="text" value="{{$info['education']}}"  class="form-control" readonly >
                </div>
                <div class="form-group" >
                    <label for="name">Parle et ecrit anglais</label>
                    @if ($info['englais'] =="en_yes")
                        <input type="text" value="Oui"  class="form-control" readonly >
                    @else
                        <input type="text" value="non"  class="form-control" readonly >
                    @endif
                </div>

            </div>

        </div>
        <!-- /.card -->
    </div>


    <div class="col-6">
        <!-- general form elements -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Infomation inscription</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="form-group" >
                    <label for="name">genre</label>
                    <input type="text" value="{{$info['genre']}}"  class="form-control" readonly >
                </div>
                <div class="form-group" >
                    <label for="name">Date de naissance</label>
                    <input type="text" value="{{$info['ddn']}}"  class="form-control" readonly >
                </div>
                <div class="form-group" >
                    <label for="name">Nationnalité</label>
                    <input type="text" value="{{$info['nation']}}"  class="form-control" readonly >
                </div>
                
            </div>

        </div>
        <!-- /.card -->
    </div>








</div>





