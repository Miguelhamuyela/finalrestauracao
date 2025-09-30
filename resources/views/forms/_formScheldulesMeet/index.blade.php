<div class="row mb-2">

    <div class="col-md-6">
        <div class="form-group">
            <label for="started">Data da Vistoria<small class="text-danger">*</small></label>
            <input type="datetime-local" name="started" id="started"
                value="{{ isset($scheldule->started) ?date('Y-m-d\TH:i:s', strtotime($scheldule->started)) : old('started') }}"
                class="form-control border rounded" placeholder="Inicio do contracto" required>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="end">Data do Limite da Vistoria <small class="text-danger">*</small></label>
            <input type="datetime-local" name="end" id="end"
                value="{{ isset($scheldule->end) ? date('Y-m-d\TH:i:s', strtotime($scheldule->end)) : old('end') }}" class="form-control border rounded"
                placeholder="Inicio do contracto" required>
        </div>
    </div>

</div>
