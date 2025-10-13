<div class="row">

    <div class="col-md-5">
      <div class="form-group">
          <label for="name">Nome da Empresa<small class="text-danger"></small></label>
          <input type="text" name="name" id="name" value="{{ isset($inspection->name) ? $inspection->name: old('name') }}"
              class="form-control border rounded" placeholder="Nome da Empresa" required>
      </div>
  </div>


  <div class="col-md-4">
    <div class="form-group">
        <label for="nif">NIF da Empresa <small class="text-danger"></small></label>
        <input type="text" name="nif" id="nif" value="{{ isset($inspection->nif) ? $inspection->nif: old('nif') }}"
            class="form-control border rounded" placeholder="Nº de Identificação Fiscal" required>
    </div>
  </div>

  <div class="col-md-3">
    <div class="form-group">
      <label for="inspectiontype">Tipo de Empresa <small class="text-danger"></small></label>
      <select type="text" name="inspectiontype" id="inspectiontype" class="form-control border rounded" required>

          @if (isset($inspection->inspectiontype))
              <option value="{{ $inspection->inspectiontype }}" class="text-primary h6 bg-primary text-white" selected>
                  {{ $inspection->inspectiontype }}
              </option>
          @else
              <option disabled selected value="">selecione uma outra opção</option>
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

  </div>


  <div class="row">

  <div class="col-md-4">
    <div class="form-group">
        <label for="email">Email da Empresa<small class="text-danger"></small></label>
        <input type="email" name="email" id="email" value="{{ isset($inspection->email) ? $inspection->email: old('email') }}"
            class="form-control border rounded" placeholder="Email do Empresa" required>
    </div>
  </div>

  <div class="col-md-4">
    <div class="form-group">
        <label for="tel">Telefone da Empresa<small class="text-danger"></small></label>
        <input type="text" name="tel" id="tel" value="{{ isset($inspection->tel) ? $inspection->tel: old('tel') }}"
            class="form-control border rounded" placeholder="Telefone do Empresa" required>
    </div>
  </div>

  <div class="col-md-4">
    <div class="form-group">
        <label for="address">Endereço da Empresa<small class="text-danger"></small></label>
        <input type="text" name="address" id="address" value="{{ isset($inspection->address) ? $inspection->address: old('address') }}"
            class="form-control border rounded" placeholder="Endereço do Empresa" required>
    </div>
  </div>

  </div>

  <div class="row">

  <div class="col-md-4">
    <div class="form-group">
      <label for="TypesHotel Businesses">Tipos de Empresas de Hotelaria<small class="text-danger"></small></label>
        <select type="text" name="TypesHotel" id="TypesHotel" class="form-control border rounded" required>

          @if (isset($inspection->TypesHotel))
              <option value="{{ $inspection->TypesHotel }}" class="text-primary h6 bg-primary text-white" selected>
                  {{ $inspection->TypesHotel }}
              </option>
          @else
              <option disabled selected value="">selecione uma outra opção</option>
          @endif
          <option>Hotéis</option>
          <option>Pousadas</option>
          <option>Hostels (Albergues)</option>
          <option>Alojamento Local (AL)</option>
          <option>Aparthotéis</option>
          <option>Estalagens / Pensões</option>
          <option>Eco Lodges / Turismo Rural</option>
          <option>Parques de Campismo e Glamping</option>
          <option>Estabelecimentos Termais / Spas</option>
          <option>Cruzeiros / Barcos-Hotel</option>
          <option>Aparthotéis</option>
          <option>Estalagens / Pensões</option>
          <option>Restaurante tradicional à la carte</option>
          <option>Restaurante buffet (self-service)</option>
          <option>Cafeterias</option>
          <option>Lanchonetes</option>
          <option>Restaurante fast food</option>
          <option>Bistrôs e brasseries</option>
          <option>Food trucks</option>
          <option>Delivery / take-away</option>
          <option>Gastronomia de autor / alta gastronomia</option>
          <option>Steakhouse, pizzarias, churrascarias</option>
          <option>Restaurante Hospitalar</option>
          <option>Restaurante prisional</option>
          <option>Restaurante militar (quartéis, bases)</option>
          <option>Restaurante em universidades</option>
          <option>Restaurante Room service (serviço de quarto)</option>
          <option>Restaurante do hotel (público interno e externo)</option>
          <option>Bar do hotel (lobby bar, rooftop bar, pool bar)</option>
          <option>Serviço de café da manhã (continental, buffet, à la carte)</option>
          <option>Serviço de banquetes e eventos (catering interno)</option>
          <option>Minibar no quarto</option>
          <option>Catering para eventos (casamentos, festas, congressos)</option>
          <option>Buffets externos</option>
          <option>Feiras gastronômicas</option>
          <option>Barracas de comida em eventos</option>
          <option>Restaurante vegetarianos/veganos</option>
          <option>Cozinha gourmet ou experimental</option>
          <option>Cozinha saudável / funcional</option>
          <option>Dark kitchens (cozinhas fantasmas, só delivery)</option>
          <option>Pop-up restaurants (temporários)</option>
          <option>Restaurante sustentável (farm-to-table, slow food)</option>
      </select>
    </div>
  </div>



  <div class="col-md-4">
    <div class="form-group">
        <label for="typestar">🌟 Classificação por Estrelas<small class="text-danger"></small></label>
       <select type="text" name="typestar" id="typestar" class="form-control border rounded" required>

          @if (isset($inspection->typestar))
              <option value="{{ $inspection->typestar }}" class="text-primary h6 bg-primary text-white" selected>
                  {{ $inspection->typestar }}
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

  <div class="col-md-4">
    <div class="form-group">
        <label for="representative">Represetante da Empresa<small class="text-danger"></small></label>
        <input type="text" name="representative" id="representative" value="{{ isset($inspection->representative) ? $inspection->representative: old('representative') }}"
            class="form-control border rounded" placeholder="Represetante da empresa" required>
    </div>
  </div>

<div class="col-md-6">
    <div class="form-group">
        <label for="mainActivity">Actividade Principal<small class="text-danger"></small></label>
        <input type="text" name="mainActivity" id="mainActivity" value="{{ isset($inspection->mainActivity) ? $inspection->mainActivity : old('mainActivity') }}"
            class="form-control border rounded" placeholder="Actividade Principal" required>
    </div>
</div>

<div class="col-md-2">
    <div class="form-group">
        <label for="numberRoom">Nº de Quartos<small class="text-danger"></small></label>
        <input type="number" name="numberRoom" id="numberRoom" value="{{ isset($inspection->numberRoom) ? $inspection->numberRoom : old('numberRoom') }}"
            class="form-control border rounded" placeholder="Nº de Quartos" required>
    </div>
</div>

<div class="col-md-2">
    <div class="form-group">
        <label for="bedNumber">Nº de Camas<small class="text-danger"></small></label>
        <input type="number" name="bedNumber" id="bedNumber" value="{{ isset($inspection->bedNumber) ? $inspection->bedNumber : old('bedNumber') }}"
            class="form-control border rounded" placeholder="Nº de Camas" required>
    </div>
</div>

<div class="col-md-2">
    <div class="form-group">
        <label for="tableNumber">Nº de Mesa<small class="text-danger"></small></label>
        <input type="number" name="tableNumber" id="tableNumber" value="{{ isset($inspection->tableNumber) ? $inspection->tableNumber : old('tableNumber') }}"
            class="form-control border rounded" placeholder="Nº de Mesas" required>
    </div>
</div>


<div class="col-md-2">
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


<div class="col-md-2">
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



<div class="col-md-2">
    <div class="form-group">
        <label for="workforce">Forca de Trabalho<small class="text-danger"></small></label>
        <input type="number" name="workforce" id="workforce" value="{{ isset($inspection->workforce) ? $inspection->workforce : old('workforce') }}"
            class="form-control border rounded" placeholder="Nome do Chefe da Equipa " required>
    </div>
</div>


<div class="col-md-2">
    <div class="form-group">
        <label for="men">Homens<small class="text-danger"></small></label>
        <input type="number" name="men" id="men" value="{{ isset($inspection->men) ? $inspection->men : old('men') }}"
            class="form-control border rounded" placeholder="Numero de Homens " required>
    </div>
</div>

<div class="col-md-2">
    <div class="form-group">
        <label for="women">Mulheres<small class="text-danger"></small></label>
        <input type="number" name="women" id="women" value="{{ isset($inspection->women) ? $inspection->women : old('women') }}"
            class="form-control border rounded" placeholder="Numero de Mulheres" required>
    </div>
</div>

<div class="col-md-2">
    <div class="form-group">
        <label for="expatriateWork">Nº de Trabalhadores Expatriados<small class="text-danger"></small></label>
        <input type="number" name="expatriateWork" id="expatriateWork" value="{{ isset($inspection->expatriateWork) ? $inspection->expatriateWork : old('expatriateWork') }}"
            class="form-control border rounded" placeholder="Nome do Chefe da Equipa " required>
    </div>
</div>

<div class="col-md-2">
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

 <div class="col-md-12">
        <div class="form-group">
            <label for="file">Descrição <small class="text-danger">*</small></label>
            <textarea name="description" class="form-control rounded"  style="min-height:100px; min-width:100%"
                required>{{ isset($manufacture->description) ? $manufacture->description : old('description') }}</textarea>
        </div>
    </div>

  </div>

  <!-- /.col -->

