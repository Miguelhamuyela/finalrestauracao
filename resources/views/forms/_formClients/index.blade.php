<div class="row">

    <div class="col-md-5">
        <div class="form-group">
            <label for="name">Nome da Empresa<small class="text-danger"></small></label>
            <input type="text" name="name" id="name"
                value="{{ isset($client->name) ? $client->name : old('name') }}" class="form-control border rounded"
                placeholder="Nome da Empresa" required>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="nif">NIF da Empresa <small class="text-danger"></small></label>
            <input type="text" name="nif" id="nif"
                value="{{ isset($client->nif) ? $client->nif : old('nif') }}" class="form-control border rounded"
                placeholder="Nº de Identificação Fiscal" required>
        </div>
    </div>

    <div class="col-md-3">
        <div class="form-group">
            <label for="TypesHotel">Tipo de Empresa <small class="text-danger"></small></label>
            <select type="text" name="TypesHotel" id="TypesHotel" class="form-control border rounded" required>

                @if (isset($client->TypesHotel))
                    <option value="{{ $client->TypesHotel }}" class="text-primary h6 bg-primary text-white" selected>
                        {{ $client->TypesHotel }}
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
            <input type="email" name="email" id="email"
                value="{{ isset($client->email) ? $client->email : old('email') }}" class="form-control border rounded"
                placeholder="Email do Empresa" required>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="tel">Telefone da Empresa<small class="text-danger"></small></label>
            <input type="text" name="tel" id="tel"
                value="{{ isset($client->tel) ? $client->tel : old('tel') }}" class="form-control border rounded"
                placeholder="Telefone do Empresa" required>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="address">Endereço da Empresa<small class="text-danger"></small></label>
            <input type="text" name="address" id="address"
                value="{{ isset($client->address) ? $client->address : old('address') }}"
                class="form-control border rounded" placeholder="Endereço do Empresa" required>
        </div>
    </div>

</div>

<div class="row">

    <div class="col-md-4">
        <div class="form-group">
            <label for="TypesHotel Businesses">Tipos de Empresas de Hotelaria<small class="text-danger"></small></label>
            <select type="text" name="TypesHotel" id="TypesHotel" class="form-control border rounded" required>

                @if (isset($client->TypesHotel))
                    <option value="{{ $client->TypesHotel }}" class="text-primary h6 bg-primary text-white" selected>
                        {{ $client->TypesHotel }}
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
            <label for="classification">🌟 Classificação por Estrelas<small class="text-danger"></small></label>
            <select type="text" name="classification" id="classification" class="form-control border rounded"
                required>

                {{-- @if (isset($client->classification))
              <option value="{{ $client->classification }}" class="text-primary h6 bg-primary text-white" selected>
                  {{ $client->classification }}
              </option>
          @else 
              <option disabled selected value="">selecione uma outra opção</option>
          @endif --}}
                <option>Sem Nenhuma Classificação</option>
                <option>⭐ 1 Estrela – Simples</option>
                <option>⭐⭐ 2 Estrelas – Econômico</option>
                <option>⭐⭐⭐ 3 Estrelas – Confortável</option>
                <option>⭐⭐⭐⭐ 4 Estrelas – Superior</option>
                <option>⭐⭐⭐⭐⭐ 5 Estrelas – Luxuoso</option>
                {{-- <option>⭐⭐⭐⭐⭐ 5 Estrelas – Luxuoso</option> --}}
            </select>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="representative">Represetante da Empresa<small class="text-danger"></small></label>
            <input type="text" name="representative" id="representative"
                value="{{ isset($client->representative) ? $client->representative : old('representative') }}"
                class="form-control border rounded" placeholder="Represetante da empresa" required>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="document">Documento<small class="text-danger"></small></label>
            <input type="file" name="document" id="document" class="form-control border rounded">
        </div>
    </div>

</div>

<!-- /.col -->
