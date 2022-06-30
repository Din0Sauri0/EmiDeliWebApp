<div>
    <form wire:submit.prevent="save" enctype="multipart/form-data">
        @csrf
        <select wire:model="tipo_pedido" class="form-select" name="tipo_pedido">
            <option selected>{{$pedido->tipo_pedido}}</option>
            @if ($pedido->tipo_pedido == "Personalizada")
            <option value="Predeterminado">Predeterminado</option>
            @else
            <option value="Personalizada">Personalizada</option>
            @endif
        </select>

        <div class="mb-3">
            <label for="nombre_cliente" class="form-label">Cliente</label>
            <div class="input-group mb-3">
                <input readonly value="{{$pedido->title}}" type="text" class="form-control" name="nombre_cliente" id="name_client_txt" placeholder="Nuevo cliente">
            </div>
        </div>

        <div class="mb-3">
            <label for="abono" class="form-label">Abono</label>
            <input wire:model="abono" type="number" class="form-control @error('abono') is-invalid @enderror" id="contacto" name="abono">
            @error('abono') <span class="invalid-feedback">{{$message}}</span> @enderror
        </div>

        <div class="mb-3">
            <label for="fecha_entrega" class="form-label">Fecha de entrega</label>
            <input wire:model="start" type="date" class="form-control" id="direccion" name="fecha_entrega">
        </div>

        <div class="mb-3">
            <label for="imagen" class="form-label">Imagen</label>
            <input wire:model="imagen" type="file" class="form-control" id="direccion" name="imagen">
        </div>

        <div class="mb-3">
            <label for="total_pedido" class="form-label">Total</label>
            <input wire:model="total" type="number" class="form-control" id="direccion" name="total_pedido">
        </div>

        <div class="mb-3">
            <label for="direccion" class="form-label">Descripcion</label>
            <textarea wire:model="descripcion" type="text" class="form-control" id="direccion" name="descripcion"></textarea>
        </div>
        <button wire:submit.prevent="save" type="submit" style="background-color: #97DBAE; border: none; color:black; box-shadow: 2px 2px 5px #999;" class="btn btn-success">Guardar</button>
    </form>
</div>