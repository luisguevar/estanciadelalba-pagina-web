<div>
    <div class="contact__form">
        <h4>Envia un mensaje</h4>
        <form>
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="booking__form-inputgroup">
                        <div class="booking__form-input">
                            <input type="text" class="form-control" wire:model="name" placeholder="Tu Nombre"
                                name="name" id="name">
                            @error('name')
                                <span>{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="booking__form-inputgroup">
                        <div class="booking__form-input">
                            <input type="email" class="form-control" wire:model="email" placeholder="Tu correo"
                                name="email" id="email">
                            @error('email')
                                <span>{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="booking__form-inputgroup">
                        <div class="booking__form-input">
                            <input type="text" class="form-control" wire:model="subject" placeholder="Asunto"
                                name="subject" id="subject">
                            @error('subject')
                                <span>{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class=" col-12">
                    <div class="booking__form-inputgroup">
                        <div class="booking__form-input">
                            <textarea class="form-control textarea" wire:model="text" name="text" id="text"
                                placeholder="Deja tu mensaje aquí..."></textarea>
                        </div>
                    </div>
                </div>
                @if (session()->has('message'))
                    <div style="color: #c09b6c;">{{ session('message') }}</div>
                @endif
            </div>
            <div style="display: flex; justify-content: end; margin-top: 10px;">
                <a href="#" onclick="return false;" class="custom-btn" wire:click="enviarmensaje"
                    wire:loading.attr="disabled"
                    style="margin-top:3px; width: 100%; height: 40px; padding: 5px 10px; text-align: center; 
                                                       display: flex; justify-content: center; align-items: center; background-color: #c09b6c; 
                                                       color: white; text-decoration: none; border-radius: 4px; font-size: 14px; position: relative;">

                    <!-- Texto normal del botón -->
                    <span wire:loading.remove wire:target="enviarmensaje">Enviar Mensaje
                    </span>

                    <!-- Loader visible mientras se ejecuta la acción -->
                    <span wire:loading wire:target="enviarmensaje">
                        <div class="spinner"></div> Procesando...
                    </span>
                </a>
            </div>
        </form>

    </div>
</div>
