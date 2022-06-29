<div>
    <form wire:submit.prevent="save" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <!-- //TODO Agregar tipo pedido aqui -->
            <select wire:model="tipo_pedido" class="form-select @error('tipo_pedido') is-invalid @enderror" name="tipo_pedido">
                <option hidden selected>--Selecciones una opcion--</option>
                <option value="Personalizada">Personalizada</option>
                <option value="Predeterminado">Predeterminado</option>
            </select>
            @error('tipo_pedido') <span class="invalid-feedback">{{$message}}</span> @enderror
        </div>


        <!-- //*Nombre cliente -->
        <div class="mb-3">
            <label for="contacto" class="form-label">Cliente</label>
            <div class="input-group mb-3">
                <div class="input-group-text">
                    <input wire:model="check" class="form-check-input mt-0" type="checkbox" id="type_field">
                </div>
                @if($check)
                <input wire:model="title" type="text" class="form-control @error('title') is-invalid @enderror" name="nombre_cliente" id="name_client_txt" placeholder="Nuevo cliente">
                @error('title') <span class="invalid-feedback">{{$message}}</span> @enderror
                @else
                <select wire:model="title" class="form-select @error('title') is-invalid @enderror" name="nombre_cliente" id="name_client_dropbox">
                    <option selected hidden>--Selecciones una opcion--</option>
                    @foreach ($clients->all() as $client)
                    <option value="{{$client->nombre}}">{{$client->nombre}}</option>
                    @endforeach
                </select>
                @error('title') <span class="invalid-feedback">{{$message}}</span> @enderror
                @endif
            </div>
            
        </div>

        <!-- //*Abono pedido -->
        <div class="mb-3">
            <label for="abono" class="form-label">Abono</label>
            <input wire:model="abono" type="number" class="form-control @error('abono') is-invalid @enderror" id="abono" name="abono">
            @error('abono') <span class="invalid-feedback">{{$message}}</span> @enderror
        </div>

        <!-- //*Fecha de entrega -->
        <div class="mb-3">
            <label for="fecha_entrega" class="form-label">Fecha de entrega</label>
            <input wire:model="start" type="date" class="form-control @error('start') is-invalid @enderror" id="fecha_entrega" name="fecha_entrega">
            @error('start') <span class="invalid-feedback">{{$message}}</span> @enderror
        </div>

        <!-- //*Imagen -->
        <div class="mb-3">
            <label for="imagen" class="form-label">Imagen</label>
            <input wire:model="imagen" type="file" class="form-control @error('imagen') is-invalid @enderror" id="imagen" name="imagen">
            @error('imagen') <span class="invalid-feedback">{{$message}}</span> @enderror
        </div>

        <!-- //*Total -->
        <div class="mb-3">
            <label for="total_pedido" class="form-label">Total</label>
            <input wire:model="total" type="number" class="form-control @error('total') is-invalid @enderror" id="total_pedido" name="total_pedido">
            @error('total') <span class="invalid-feedback">{{$message}}</span> @enderror
        </div>

        <!-- //*Descripcion -->
        <div class="mb-3">
            <label for="descripcion class=" form-label">Descripcion</label>
            <textarea wire:model="descripcion" type="text" class="form-control @error('descripcion') is-invalid @enderror" id="descripcion" name="descripcion"></textarea>
            @error('descripcion') <span class="invalid-feedback">{{$message}}</span> @enderror
        </div>

        <button wire:submit.prevent="save" type="submit" style="background-color: #97DBAE; border: none; box-shadow: 2px 2px 5px #999;" class="btn btn-success">Guardar</button>
    </form>
</div>