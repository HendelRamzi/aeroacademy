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
                <form  class="text-center px-3 py-2"
                wire:ignore>
                    <input type="file" wire:model="pic" id="pic">
                </form>
                @error('pic') <span class="text-danger">{{ $message }}</span> @enderror        
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
                    <input type="text" wire:model.defer="formation.name" value="{{$formation->name}}" class="form-control" id="name" placeholder="nom de la formation" required>
                    @error('formation.name') <span class="text-danger">{{ $message }}</span> @enderror        
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
            @error('desc') <span class="text-danger">{{ $message }}</span> @enderror        
        </div>
            <!-- /.card -->
    </div>


    <div class="col-12 d-flex justify-content-end mb-3">
        <a  class="btn btn-secondary mr-3">Annuler</a>
        <button class="btn btn-primary" id="save">Modifier</button>
    </div>



{{-- filepond config --}}
<script type="module">
    
    FilePond.registerPlugin(FilePondPluginImagePreview);
    const gallery = document.getElementById('pic')
    const url = "{{$formation->picture}}" ; 

    const post = FilePond.create(gallery, {
        maxFiles : 5,
        credits	: false, 
        allowMultiple : true,
    });
    post.setOptions({ 
        files : [
            {
                source : url.split("/")[1],
                // set type to local to indicate an already uploaded file
                options: {
                    type: 'local',
                },

            },
        ],
        server: {
            process:(fieldName, file, metadata, load, error, progress, abort, transfer, options) => {
                @this.upload('pic', file, load, error, progress)
            },
            revert: (filename, load) => {
                @this.removeUpload('pic', filename, load)
            },
            load : "/image/load/formation/thumb/",
        }
    });
</script> 




{{-- editor.js config --}}
<script type="module">
    const content =  JSON.parse(@js($content));

    const editor = new EditorJS({ 
      holder: 'desc', 
      placeholder : "Ecrivez le contenu ici !",
      data : content ,

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
    
    
    document.getElementById('save').addEventListener('click', (e)=>{
      e.preventDefault()
      // Handle the saved data
      editor.save().then((outputData) => {
        @this.content = JSON.stringify(outputData) ;
        Livewire.emit('updateFormation')
      }).catch((error) => {
        console.log('Saving failed: ', error)
      });
    })
    
</script>

</div>





