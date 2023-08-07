<section id="contact" class="main-contact-form-area">
    <div class="container">
        <div class="sec-title text-center">
            <div class="sub-title">
                <div class="border-box"></div>
                <h3>Inscrivez vous</h3>
            </div>
            @if (session()->has('error'))
                <div class="">
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                </div>
            @endif
            @if (session()->has('success'))
                <div class="">
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                </div>
            @endif

        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="contact-form">
                    <form class="default-form2">

                        <div class="row">

                            <div class="col-xl-12">
                                <div class="form-group">
                                    <div class="input-box">
                                        <h2 style="color: black"><label for="english" style="margin-bottom: 2rem">Formation demandée*</label></h2>
                                        @foreach ($formations as $formation)
                                            <div class="mb-3">
                                                <label style="margin-right: 1rem" for="{{"formation". $formation->id}}">{{ $formation->name }}</label>
                                                <input  type="checkbox" value="{{$formation->id}}" wire:model="forms" id="{{"formation". $formation->id}}">
                                            </div>
                                        @endforeach

                                        @error('forms') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                            </div>


                        </div>

                        <hr style="margin: 2rem 0px">


                        <div class="row">
                            <div class="col-xl-4">
                                <div class="form-group">
                                    <div class="input-box">
                                        <input type="text" wire:model.defer="student.first_name"  id="formName"
                                            placeholder="Votre nom*" >
                                            @error('student.first_name') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="form-group">
                                    <div class="input-box"> 
                                        <input type="text" wire:model.defer="student.last_name" id="formEmail"
                                            placeholder="Votre prenom*" >
                                        @error('student.last_name') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="form-group">
                                    <div class="input-box">
                                        <select class="form-control" name="gender" wire:model="genre" id="">
                                            <option value="">Selectionner votre genre*</option>    
                                            <option value="homme">Homme</option>    
                                            <option value="femme">Femme</option>    
                                        </select> 
                                        @error('genre') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <div class="input-box">
                                        <input type="email" wire:model.defer="nation" id="formEmail"
                                            placeholder="Votre nationalité*" >
                                        @error('nation') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <div class="input-box">
                                        <input type="date" wire:model.defer="ddn" value="" id="formSubject"
                                            placeholder="Date de naissance*">
                                            @error('ddn') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr style="margin: 2rem 0px">
                        
                        <div class="row">

                            <div class="col-xl-12">
                                <div class="form-group">
                                    <div class="input-box"> 
                                        <input type="email" wire:model.defer="student.address" id="formEmail"
                                            placeholder="Adresse domicile*" >
                                            @error('student.address') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <div class="input-box">
                                        <input type="text" wire:model.defer="ville" value="" id="formSubject"
                                            placeholder="Ville*">
                                        @error('ville') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <div class="input-box">
                                        <input type="text" wire:model.defer="pays" value="" id="formSubject"
                                            placeholder="Pays*">
                                        @error('pays') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <div class="input-box">
                                        <input type="text" wire:model.defer="student.phone"  value="" id="formPhone"
                                            placeholder="Numero de téléphone*">
                                            @error('student.phone') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <div class="input-box">
                                        <input type="email" wire:model.defer="student.email" value="" id="formSubject"
                                            placeholder="Adresse email*">
                                            @error('student.email') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                            </div>
                        </div>


                        <hr style="margin: 2rem 0px">



                        <div class="row">
                            <div class="col-xl-12">
                                <div class="form-group">
                                    <div class="input-box ">
                                        <label for="english" style="margin-right: 3rem">Pouvez-vous lire, écrire et converser couramment en anglais?*</label>
                                        <div class="text-center">
                                            <label for="english_yes">Oui</label>
                                            <input type="radio" id="english_yes" wire:model="englais" value="en_yes" name="english" style="margin-right: 2rem">
    
                                            <label for="english_no">Non</label>
                                            <input type="radio" id="english_no" wire:model="englais" value="en_non" name="english">
                                        </div>
                                        @error('englais') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                            </div>

                        </div>
                        



                        <div class="row">
                            <div class="col-xl-12">
                                <div class="form-group">
                                    <div class="input-box">
                                        <input type="text" wire:model.defer="education"  value="" id="formPhone"
                                            placeholder="Votre niveau d'éducation*">
                                            @error('education') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                            </div>
                        </div>


                        
                        {{-- Submit button --}}
                        <div class="row">
                            <div class="col-xl-12 text-center">
                                <div class="button-box">
                                    <button class="btn-one" wire:click.prevent="sendForm">
                                        <span class="txt">
                                            Envoyé le formulaire
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>



                    </form>
                </div>

            </div>
        </div>
    </div>
</section>
<!--End Main Contact Form Area-->