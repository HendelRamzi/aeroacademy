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
                    <input type="text" value="{{$contact->name}}"  class="form-control" id="name" placeholder="nom de la formation" readonly >
                </div>

                <div class="form-group">
                    <label for="name">email</label>
                    <input type="text" value="{{$contact->email}}"  class="form-control" id="name" placeholder="nom de la formation" readonly >
                </div>


                <div class="form-group">
                    <label for="name">numero de telephone</label>
                    <input type="text" value="{{$contact->phone}}"  class="form-control" id="name" placeholder="nom de la formation" readonly >
                </div>

            </div>

        </div>
        <!-- /.card -->
    </div>

    <div class="col-6">
        <!-- general form elements -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Infomation message</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Sujet</label>
                    <input type="text" value="{{$contact->subject}}"  class="form-control" id="name" placeholder="nom de la formation" readonly >
                </div>

                <div class="form-group">
                    <label for="name">email</label>
                    <textarea class="form-control"  cols="30" rows="10" readonly >{{$contact->message}}</textarea>
                </div>


            </div>

        </div>
        <!-- /.card -->
    </div>


    <div class="col-12 d-flex justify-content-end mb-3">
        <a href="tel:{{$contact->phone}}" class="btn btn-primary mr-3">Appeler</a>
        <a href="mailto:{{$contact->email}}" class="btn btn-info mr-3">Envoyer email</a>
        <button class="btn btn-danger mr-3" wire:click="deleteContact">Supprimer</button>
    </div>






</div>





