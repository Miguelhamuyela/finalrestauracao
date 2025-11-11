{{-- client nif --}}
@include('admin.extras._clientNif.index')
{{-- end client nif --}}
<div class="row">
    <div class="col-md-8">
        <div class="form-group">
            <label for="client_id">Empresa <small class="text-danger">*</small></label>
            <select name="client_id" id="client_id" class="form-control border rounded" data-select2-selector="status"
                required>
                <option value="" selected disabled>-- Selecione a Empresa --</option>
                @foreach ($clients as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    {{-- <div class="col-md-4">
        <div class="form-group">
            <label for="nif">NIF<small class="text-danger"></small></label>
            <input type="text" name="nif" id="nif" value="{{ isset($autinspection->nif) ? $autinspection->nif : old('nif') }}"
                class="form-control border rounded" placeholder="Nº de Identificação Fiscal" required>
        </div>
    </div> --}}
    <div class="col-md-4">
        <div class="form-group">
            <label for="nif">NIF <small class="text-danger">*</small></label>
            <input type="text" name="nif" id="nif"
                value="{{ isset($autinspection->nif) ? $autinspection->nif : old('nif') }}"
                class="form-control border rounded" placeholder="Nº de Identificação Fiscal" required readonly>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="classification">Classificaçao do Empreendimento<small class="text-danger">*</small></label>
            <input type="text" class="form-control" name="classification" id="classification" readonly>
            {{-- <select type="text" name="incubatorModel" id="incubatorModel" class="form-control border rounded" required>

                @if (isset($autinspection->incubatorModel))
                    <option value="{{ $autinspection->incubatorModel }}" class="text-primary h6 bg-primary text-white"
                        selected>
                        {{ $autinspection->incubatorModel }}
                    </option>
                @else
                    <option disabled selected value="">selecione a Classificaçao</option>
                @endif

                 <option>Sem Nenhuma Classificação</option>
                 <option>⭐ 1 Estrela – Simples</option>
                 <option>⭐⭐ 2 Estrelas – Econômico</option>
                 <option>⭐⭐⭐ 3 Estrelas – Confortável</option>
                 <option>⭐⭐⭐⭐ 4 Estrelas – Superior</option>
                 <option>⭐⭐⭐⭐⭐ 5 Estrelas – Luxuoso</option>
                 <option>⭐⭐⭐⭐⭐ 5 Estrelas – Luxuoso</option>

            </select> --}}
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="tel">Telefone <small class="text-danger"></small></label>
            <input type="text" name="tel" id="tel"
                value="{{ isset($autinspection->tel) ? $autinspection->tel : old('tel') }}"
                class="form-control border rounded" placeholder="Telefone" readonly required>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="email">Email <small class="text-danger"></small></label>
            <input type="email" name="email" id="email"
                value="{{ isset($autinspection->email) ? $autinspection->email : old('email') }}"
                class="form-control border rounded" placeholder="Email" readonly required>
        </div>
    </div>

</div>
<hr>
<div class="row mb-2">

    <div class="col-md-6">
        <div class="form-group">
            <label for="started">Início da Vistoria<small class="text-danger">*</small></label>
            <input type="datetime-local" name="started" id="started"
                value="{{ isset($scheldule->started) ?date('Y-m-d\TH:i:s', strtotime($scheldule->started)) : old('started') }}"
                class="form-control border rounded" placeholder="Início da Vistoria" required>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="end">Fim da Vistoria <small class="text-danger">*</small></label>
            <input type="datetime-local" name="end" id="end"
                value="{{ isset($scheldule->end) ? date('Y-m-d\TH:i:s', strtotime($scheldule->end)) : old('end') }}" class="form-control border rounded"
                placeholder="Fim da Vistoria" required>
        </div>
    </div>

</div>
