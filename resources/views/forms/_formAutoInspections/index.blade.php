<div class="col-md-6">
    <div class="form-group">
        <label for="enterprise">Nome da Empresa<small class="text-danger"></small></label>
        <input type="text" name="enterprise" id="enterprise" value="{{ isset($autonspections->enterprise) ? $autonspections->enterprise : old('enterprise') }}"
            class="form-control border rounded" placeholder="Nome da Empresa" required>
    </div>
</div>


<div class="col-md-6">
    <div class="form-group">
        <label for="mainActivity">Actividade Principal<small class="text-danger"></small></label>
        <input type="text" name="mainActivity" id="mainActivity" value="{{ isset($autonspections->mainActivity) ? $autonspections->mainActivity : old('mainActivity') }}"
            class="form-control border rounded" placeholder="Actividade Principal" required>
    </div>
</div>



<div class="col-md-4">
    <div class="form-group">
        <label for="companyRepresentative">Representante da Empresa<small class="text-danger"></small></label>
        <input type="text" name="companyRepresentative" id="companyRepresentative"
            value="{{ isset($autonspections->companyRepresentative) ? $autonspections->companyRepresentative : old('companyRepresentative') }}"
            class="form-control border rounded" placeholder="Representante da Empresa" required>
    </div>
</div>




<div class="col-md-2">
    <div class="form-group">
        <label for="numberRoom">Nº de Quartos<small class="text-danger"></small></label>
        <input type="number" name="numberRoom" id="numberRoom" value="{{ isset($autonspections->numberRoom) ? $autonspections->numberRoom : old('numberRoom') }}"
            class="form-control border rounded" placeholder="Nº de Quartos" required>
    </div>
</div>



<div class="col-md-2">
    <div class="form-group">
        <label for="bedNumber">Nº de Camas<small class="text-danger"></small></label>
        <input type="number" name="bedNumber" id="bedNumber" value="{{ isset($autonspections->bedNumber) ? $autonspections->bedNumber : old('bedNumber') }}"
            class="form-control border rounded" placeholder="Nº de Camas" required>
    </div>
</div>


<div class="col-md-2">
    <div class="form-group">
        <label for="tableNumber">Nº de Mesa<small class="text-danger"></small></label>
        <input type="number" name="tableNumber" id="tableNumber" value="{{ isset($autonspections->tableNumber) ? $autonspections->tableNumber : old('tableNumber') }}"
            class="form-control border rounded" placeholder="Nº de Mesas" required>
    </div>
</div>


  <div class="col-md-2">
    <div class="form-group">
        <label for="typestar">🌟 Classificação por Estrelas<small class="text-danger"></small></label>
       <select type="text" name="typestar" id="typestar" class="form-control border rounded" required>

          @if (isset($client->typestar))
              <option value="{{ $client->typestar }}" class="text-primary h6 bg-primary text-white" selected>
                  {{ $client->typestar }}
              </option>
          @else
              <option disabled selected value="">selecione uma outra opção</option>
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

<div class="col-md-2">
    <div class="form-group">
        <label for="yearSelfinspection">Ano da Auto Vistoria<small class="text-danger"></small></label>
        <input type="year" name="yearSelfinspection" id="yearSelfinspection" value="{{ isset($autonspections->yearSelfinspection) ? $autonspections->yearSelfinspection : old('yearSelfinspection') }}"
            class="form-control border rounded" placeholder="Ano da Auto Vistoria" required>
    </div>
</div>



<div class="col-md-2">
    <div class="form-group">
        <label for="monthselfInspection">Mes da Vistoria<small class="text-danger"></small></label>
        <input type="text" name="monthselfInspection" id="monthselfInspection" value="{{ isset($autonspections->monthselfInspection) ? $autonspections->monthselfInspection : old('monthselfInspection') }}"
            class="form-control border rounded" placeholder="Mes da Auto Vistoria" required>
    </div>
</div>



<div class="col-md-2">
    <div class="form-group">
        <label for="workforce">Forca de Trabalho<small class="text-danger"></small></label>
        <input type="number" name="workforce" id="workforce" value="{{ isset($autonspections->workforce) ? $autonspections->workforce : old('workforce') }}"
            class="form-control border rounded" placeholder="Nome do Chefe da Equipa " required>
    </div>
</div>



<div class="col-md-2">
    <div class="form-group">
        <label for="men">Homens<small class="text-danger"></small></label>
        <input type="number" name="men" id="men" value="{{ isset($autonspections->men) ? $autonspections->men : old('men') }}"
            class="form-control border rounded" placeholder="Numero de Homens " required>
    </div>
</div>




<div class="col-md-2">
    <div class="form-group">
        <label for="women">Mulheres<small class="text-danger"></small></label>
        <input type="number" name="women" id="women" value="{{ isset($autonspections->women) ? $autonspections->women : old('women') }}"
            class="form-control border rounded" placeholder="Numero de Mulheres" required>
    </div>
</div>




<div class="col-md-2">
    <div class="form-group">
        <label for="expatriateWork">Nº de Trabalhadores Expatriados<small class="text-danger"></small></label>
        <input type="number" name="expatriateWork" id="expatriateWork" value="{{ isset($autonspections->expatriateWork) ? $autonspections->expatriateWork : old('expatriateWork') }}"
            class="form-control border rounded" placeholder="Nome do Chefe da Equipa " required>
    </div>
</div>




<div class="col-md-2">
    <div class="form-group">
        <label for="agreeInstallation">Concordar com a Instalaçao<small class="text-danger"></small></label>

        <select type="text" name="agreeInstallation" class="form-control border rounded" required>

            @isset ($autonspections->agreeInstallation)
                <option value="{{ $autonspections->agreeInstallation }}" class="text-white h6 bg-primary text-white" selected>
                    {{ $autonspections->agreeInstallation }}

                </option>
            @else
                <option disabled selected value="">Concordar com a Instalaçao</option>
            @endisset
            <option>Sim</option>
            <option>Nao</option>
        </select>
    </div>
</div>

 <div class="col-md-12">
        <div class="form-group">
            <label for="file">Descrição <small class="text-danger">*</small></label>
            <textarea name="description" class="form-control rounded"  style="min-height:100px; min-width:100%"
                required>{{ isset($manufacture->description) ? $manufacture->description : old('description') }}</textarea>
        </div>
    </div>

