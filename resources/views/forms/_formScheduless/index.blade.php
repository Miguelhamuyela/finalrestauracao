<input type="hidden" name="origin" value="Schedule">
<div class="row">
    <div class="col-md-8">
        <div class="form-group">
            <label for="name">Nome da Empresa<small class="text-danger"></small></label>
            <input type="text" name="name" id="name"
                value="{{ isset($schedule->name) ? $schedule->name : old('name') }}" class="form-control border rounded"
                placeholder="Digite o nome da Empresa" required>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="nif">NIF <small class="text-danger"></small></label>
            <input type="text" name="nif" id="nif" value="{{ isset($schedule->nif) ? $schedule->nif : old('nif') }}"
                class="form-control border rounded" placeholder="Nº de Identificação Fiscal" required>
        </div>
    </div>

</div>


<div class="row">

    <div class="col-md-5">
        <div class="form-group">
            <label for="incubatorModel">Tipo de Empresa<small class="text-danger"></small></label>

            <select type="text" name="incubatorModel" id="incubatorModel" class="form-control border rounded" required>

                @if (isset($schedule->incubatorModel))
                    <option value="{{ $schedule->incubatorModel }}" class="text-primary h6 bg-primary text-white"
                        selected>
                        {{ $schedule->incubatorModel }}
                    </option>
                @else
                    <option disabled selected value="">selecione uma categoria</option>
                @endif

                 <option>Singular</option>
                 <option>Colectivo</option>
                 <option>Nome Individual</option>
                 <option>Sociedade por Quotas</option>
                 <option>Sociedade por Quotas Pluripessoal</option>
                 <option>Sociedade por Quotas Unipessoal</option>
                 <option>Sociedade Anónima</option>
                 <option>Cooperativas</option>
         </select>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="tel">Telefone <small class="text-danger"></small></label>
            <input type="text" name="tel" id="tel" value="{{ isset($schedule->tel) ? $schedule->tel : old('tel') }}"
                class="form-control border rounded" placeholder="Telefone" required>
        </div>
    </div>

    <div class="col-md-3">
        <div class="form-group">
            <label for="tel">Sala <small class="text-danger"></small></label>
            <input type="text" name="roomName" id="roomName"
                value="{{ isset($schedule->roomName) ? $schedule->roomName : old('roomName') }}"
                class="form-control border rounded" placeholder="Sala " required>
        </div>
    </div>

</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="email">Email <small class="text-danger"></small></label>
            <input type="email" name="email" id="email"
                value="{{ isset($schedule->email) ? $schedule->email : old('email') }}"
                class="form-control border rounded" placeholder="Email" required>
        </div>
    </div>


    <div class="col-md-6">
        <div class="form-group">
            <label for="site">Site da Empresa </label>
            <input type="text" name="site" id="site"
                value="{{ isset($schedule->site) ? $schedule->site : old('site') }}" class="form-control border rounded"
                placeholder="Site ">
        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label for="Detalhes Sobre a vistoria">Detalhes Sobre a Empresa <small
                    class="text-danger">*</small></label>
            <textarea class="form-control rounded" name="StartupDetails" required
                style="min-height:70px; min-width:100%">{{ isset($schedule->StartupDetails) ? $schedule->StartupDetails : old('StartupDetails') }}</textarea>
        </div>
    </div>
</div>
<!-- /.col -->
