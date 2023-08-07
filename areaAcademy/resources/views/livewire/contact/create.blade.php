<section id="contact" class="main-contact-form-area">
    <div class="container">
        <div class="sec-title text-center">
            <div class="sub-title">
                <div class="border-box"></div>
                <h3>Contactez nous</h3>
            </div>
            <h2>Lorem ipsum dolor sit amet.</h2>

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
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <div class="input-box">
                                        <input type="text" wire:model.defer="contact.name"  id="formName"
                                            placeholder="Votre nom" >
                                            @error('contact.name') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <div class="input-box"> 
                                        <input type="email" wire:model.defer="contact.email" id="formEmail"
                                            placeholder="Adresse email" >
                                            @error('contact.email') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <div class="input-box">
                                        <input type="text" wire:model.defer="contact.phone"  value="" id="formPhone"
                                            placeholder="Numero de téléphone">
                                            @error('contact.phone') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <div class="input-box">
                                        <input type="text" wire:model.defer="contact.subject" value="" id="formSubject"
                                            placeholder="L'objet">
                                            @error('contact.subject') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-12">
                                <div class="form-group">
                                    <div class="input-box">
                                        <textarea name="form_message" id="formMessage" wire:model.defer="contact.message"
                                            placeholder="Ecrivez le message ici !"></textarea>
                                            @error('contact.message') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-12 text-center">
                                <div class="button-box">
                                    <button class="btn-one" wire:click.prevent="sendForm">
                                        <span class="txt">
                                            Envoyé le message
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