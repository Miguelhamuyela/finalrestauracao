{{-- client nif --}}
@include('admin.extras._clientNif.index')
{{-- end client nif --}}

<input type="hidden" name="origin" value="autinspection">
<div class="row">
    <div class="col-md-8">
        <div class="form-group">
            <label for="client_id">Empresa <small class="text-danger">*</small></label>
            <select name="client_id" id="client_id" class="form-control border rounded" data-select2-selector="status" required>
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
                class="form-control border rounded"
                placeholder="Nº de Identificação Fiscal" required readonly>
        </div>
    </div>

</div>


<div class="row">

    <div class="col-md-6">
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
            <label for="tel">Telefone <small class="text-danger"></small></label>
            <input type="text" name="tel" id="tel" value="{{ isset($autinspection->tel) ? $autinspection->tel : old('tel') }}"
                class="form-control border rounded" placeholder="Telefone" required>
        </div>
    </div>


</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="email">Email <small class="text-danger"></small></label>
            <input type="email" name="email" id="email"
                value="{{ isset($autinspection->email) ? $autinspection->email : old('email') }}"
                class="form-control border rounded" placeholder="Email" required>
        </div>
    </div>

<div class="col-md-3">
    <div class="form-group">
        <label for="agreeInstallation">Concordar com a Instalaçao<small class="text-danger"></small></label>

        <select type="text" name="agreeInstallation" class="form-control border rounded" required>

            @isset ($inspection->agreeInstallation)
                <option value="{{ $inspection->agreeInstallation }}" class="text-white h6 bg-primary text-white" selected>
                    {{ $inspection->agreeInstallation }}

                </option>
            @else
                <option disabled selected value="">Concordar com a Instalaçao</option>
            @endisset
            <option>Sim</option>
            <option>Nao</option>
        </select>
    </div>
</div>
   <div class="col-md-3">
    <div class="form-group">
        <label for="expatriateWork">Nº de Trabalhadores Expatriados<small class="text-danger"></small></label>
        <input type="number" name="expatriateWork" id="expatriateWork" value="{{ isset($inspection->expatriateWork) ? $inspection->expatriateWork : old('expatriateWork') }}"
            class="form-control border rounded" placeholder="Nome do Chefe da Equipa " required>
    </div>
</div>

<div class="col-md-3">
    <div class="form-group">
        <label for="numberRoomm">Nº de Quartos<small class="text-danger"></small></label>
        <input type="number" name="numberRoomm" id="numberRoomm" value="{{ isset($inspection->numberRoomm) ? $inspection->numberRoomm : old('numberRoomm') }}"
            class="form-control border rounded" placeholder="Nº de Quartos" required>
    </div>
</div>

<div class="col-md-3">
    <div class="form-group">
        <label for="bedNumber">Nº de Camas<small class="text-danger"></small></label>
        <input type="number" name="bedNumber" id="bedNumber" value="{{ isset($inspection->bedNumber) ? $inspection->bedNumber : old('bedNumber') }}"
            class="form-control border rounded" placeholder="Nº de Camas" required>
    </div>
</div>

<div class="col-md-3">
    <div class="form-group">
        <label for="tableNumber">Nº de Mesa<small class="text-danger"></small></label>
        <input type="number" name="tableNumber" id="tableNumber" value="{{ isset($inspection->tableNumber) ? $inspection->tableNumber : old('tableNumber') }}"
            class="form-control border rounded" placeholder="Nº de Mesas" required>
    </div>
</div>


<div class="col-md-3">
    <div class="form-group">
        <label for="yearSelfinspection">Ano da Auto Vistoria<small class="text-danger"></small></label>
        <select type="text" name="yearSelfinspection" id="yearSelfinspection" class="form-control border rounded" required>

          @if (isset($inspection->yearSelfinspection))
              <option value="{{ $inspection->yearSelfinspection }}" class="text-primary h6 bg-primary text-white" selected>
                  {{ $inspection->yearSelfinspection }}
              </option>
          @else
              <option disabled selected value="">selecione uma outra opção</option>
          @endif
          <option>2024</option>
          <option>2025</option>
          <option>2026</option>
          <option>2027</option>
          <option>2028</option>
          <option>2029</option>
          <option>2030</option>
          <option>2031</option>
          <option>2032</option>
          <option>2033</option>
          <option>2034</option>
          <option>2035</option>
          <option>2036</option>
          <option>2037</option>
          <option>2038</option>
          <option>2039</option>
          <option>2040</option>
      </select>
    </div>
</div>


<div class="col-md-3">
    <div class="form-group">
        <label for="monthselfInspection">Mes da Vistoria<small class="text-danger"></small></label>
        <select type="text" name="monthselfInspection" id="monthselfInspection" class="form-control border rounded" required>

          @if (isset($inspection->typestar))
              <option value="{{ $inspection->monthselfInspection }}" class="text-primary h6 bg-primary text-white" selected>
                  {{ $inspection->monthselfInspection }}
              </option>
          @else
              <option disabled selected value="">selecione uma outra opção</option>
          @endif
          <option>Sem Nenhuma Classificação</option>
          <option>Janeiro</option>
          <option>Fevereiro</option>
          <option>Março</option>
          <option>Abril</option>
          <option>Maio</option>
          <option>Junho</option>
          <option>Julho</option>
          <option>Agosto</option>
          <option>Setembro</option>
          <option>Outubro</option>
          <option>Novembro</option>
          <option>Dezembro</option>
      </select>
    </div>
</div>



<div class="col-md-3">
    <div class="form-group">
        <label for="workforce">Forca de Trabalho<small class="text-danger"></small></label>
        <input type="number" name="workforce" id="workforce" value="{{ isset($inspection->workforce) ? $inspection->workforce : old('workforce') }}"
            class="form-control border rounded" placeholder="Nome do Chefe da Equipa " required>
    </div>
</div>


<div class="col-md-3">
    <div class="form-group">
        <label for="men">Homens<small class="text-danger"></small></label>
        <input type="number" name="men" id="men" value="{{ isset($inspection->men) ? $inspection->men : old('men') }}"
            class="form-control border rounded" placeholder="Numero de Homens " required>
    </div>
</div>

<div class="col-md-3">
    <div class="form-group">
        <label for="women">Mulheres<small class="text-danger"></small></label>
        <input type="number" name="women" id="women" value="{{ isset($inspection->women) ? $inspection->women : old('women') }}"
            class="form-control border rounded" placeholder="Numero de Mulheres" required>
    </div>
</div>
</div>













































<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label for="Detalhes Sobre a Empresa">Detalhes Sobre a Empresa <small
                    class="text-danger"></small></label>
            <textarea class="form-control rounded" name="StartupDetails" required
                style="min-height:70px; min-width:100%">{{ isset($autinspection->StartupDetails) ? $autinspection->StartupDetails : old('StartupDetails') }}</textarea>
        </div>
    </div>
</div>
<!-- /.col -->
