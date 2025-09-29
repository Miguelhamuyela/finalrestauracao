<div class="row mb-2">

    <div class="col-md-4">
        <div class="form-group">
            <label for="started">Data da Entrada <small class="text-danger">*</small></label>
            <input type="datetime-local" name="started" id="started"
                value="{{ isset($scheldule->started) ? date('Y-m-d\TH:i:s', strtotime($scheldule->started)) : old('started') }}"
                class="form-control border rounded" placeholder="Inicio do contracto" required>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="end">Data da Entrega <small class="text-danger">*</small></label>
            <input type="datetime-local" name="end" id="end"
                value="{{ isset($scheldule->end) ? date('Y-m-d\TH:i:s', strtotime($scheldule->end)) : old('end') }}"
                class="form-control border rounded">
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="prespective"> Data da Retirada <small class="text-danger"></small></label>
            <input type="datetime-local" name="prespective" id="prespective"
                value="{{ isset($scheldule->prespective) ? date('Y-m-d\TH:i:s', strtotime($scheldule->prespective)) : old('prespective') }}"
                class="form-control border rounded">
        </div>
    </div>
</div>
