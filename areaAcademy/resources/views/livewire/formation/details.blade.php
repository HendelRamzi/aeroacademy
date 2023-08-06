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
        <div class="card ">
            <div class="card-header">
                <h5 class="card-title" style="font-size: 1rem; font-weight: bold">formation photos</h5>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <img class="img-fluid" src="{{asset($formation->picture)}}" alt="">
            </div>
        </div>
            <!-- /.card -->
    </div>



    <div class="col-12">
        <!-- general form elements -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Information sur la formation</h3>
            </div>
            <!-- /.card-header -->

            <!-- form start -->
            <form>
                <div class="card-body">
                <div class="form-group">
                    <label for="name">Nom de la formation</label>
                    <input type="text" wire:model="formation.name"  class="form-control" id="name" placeholder="nom de la formation" readonly required>
                </div>
            </form>

        </div>
        <!-- /.card -->
    </div>




    <div class="col-12">
        <div class="card ">
            <div class="card-header">
                <h5 class="card-title" style="font-size: 1rem; font-weight: bold">description</h5>
            </div>
            <!-- /.card-header -->
            <div class="card-body" wire:ignore>
                <div id="desc"></div>
            </div>
        </div>
            <!-- /.card -->
    </div>


    <div class="col-12 d-flex justify-content-end mb-3">
        <button class="btn btn-danger mr-3" wire:click="deleteFormation">Supprimer</button>
        <a class="btn btn-primary" href="{{route('admin.formations.edit',['id' => $formation->id])}}" >Modifier</a>
    </div>








{{-- editor.js config --}}
<script type="module">

    const content =  JSON.parse(@js($content));


    const editor = new EditorJS({ 
      holder: 'desc', 
        readOnly: true,
        data : content ,

      placeholder : "Ecrivez le contenu ici !",
      tools : {
          header: {
            class: Header,
            config: {
              placeholder: 'Enter a header',
              levels: [2, 3, 4],
              defaultLevel: 3
            }
          },
          list: {
            class: List,
            inlineToolbar: true,
            config: {
              defaultStyle: 'unordered'
            }
          },
      },
    })
        
</script>

</div>





