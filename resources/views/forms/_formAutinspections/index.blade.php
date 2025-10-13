<input type="hidden" name="origin" value="autinspection">
<div class="row">
    <div class="col-md-8">
        <div class="form-group">
            <label for="name">Empresa<small class="text-danger"></small></label>
            <input type="text" name="name" id="name"
                value="{{ isset($autinspection->name) ? $autinspection->name : old('name') }}" class="form-control border rounded"
                placeholder="Nome da autinspection " required>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="nif">NIF<small class="text-danger"></small></label>
            <input type="text" name="nif" id="nif" value="{{ isset($autinspection->nif) ? $autinspection->nif : old('nif') }}"
                class="form-control border rounded" placeholder="Nº de Identificação Fiscal" required>
        </div>
    </div>

</div>


<div class="row">

    <div class="col-md-5">
        <div class="form-group">
            <label for="incubatorModel">Classificaçao do Empreendimento<small class="text-danger">*</small></label>

            <select type="text" name="incubatorModel" id="incubatorModel" class="form-control border rounded" required>

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

            </select>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="tel">Telefone <small class="text-danger">*</small></label>
            <input type="text" name="tel" id="tel" value="{{ isset($autinspection->tel) ? $autinspection->tel : old('tel') }}"
                class="form-control border rounded" placeholder="Telefone" required>
        </div>
    </div>

    <div class="col-md-3">
        <div class="form-group">
            <label for="tel">Sala <small class="text-danger">*</small></label>
            <input type="text" name="roomName" id="roomName"
                value="{{ isset($autinspection->roomName) ? $autinspection->roomName : old('roomName') }}"
                class="form-control border rounded" placeholder="Sala " required>
        </div>
    </div>

</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="email">Email <small class="text-danger">*</small></label>
            <input type="email" name="email" id="email"
                value="{{ isset($autinspection->email) ? $autinspection->email : old('email') }}"
                class="form-control border rounded" placeholder="Email" required>
        </div>
    </div>

    <div class="col-md-6">
     <div class="form-group">
            <label for="site">Site </label>
            <input type="text" name="site" id="site"
                value="{{ isset($autinspection->site) ? $autinspection->site : old('site') }}" class="form-control border rounded"
                placeholder="Site ">
        </div>
    </div>
</div>




<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label for="Detalhes Sobre a Empresa">Detalhes Sobre a Empresa <small
                    class="text-danger">*</small></label>
            <textarea class="form-control rounded" name="StartupDetails" required
                style="min-height:70px; min-width:100%">{{ isset($autinspection->StartupDetails) ? $autinspection->StartupDetails : old('StartupDetails') }}</textarea>
        </div>
    </div>
</div>
<!-- /.col -->
