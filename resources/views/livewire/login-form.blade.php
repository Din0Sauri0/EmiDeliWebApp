<div>

    <form wire:submit.prevent="save"> 
        @csrf
        <div class="mb-3">
            <input wire:model="email" class="form-control @error('email') is-invalid @enderror" type="email" name="email" placeholder="Email" style="border: 2px solid #FFBBBB;">
            @error('email') <span class="invalid-feedback">{{$message}}</span> @enderror
        </div>
        <div class="mb-3">
            <input wire:model="password" class="form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password" style="border: 2px solid #FFBBBB;">
            @error('password') <span class="invalid-feedback">{{$message}}</span> @enderror
        </div>
        <div class="mb-3">

            <input wire:model="remember" class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">Recuerdame</label>

        </div>
        <div class="mb-3"><button class="btn btn-primary d-block w-100 mb-4" type="submit">Ingresar</button></div>
        <p hidden class="text-muted">Forgot your password?</p>
    </form>


</div>