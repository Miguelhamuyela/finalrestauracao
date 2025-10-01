<div class="col-md-6">
    <div class="form-group">
        <label for="name">Nome do Funcionário <small class="text-danger">*</small></label>
        <input type="text" name="name" id="name" value="{{ isset($inspections->name) ? $inspections->name : old('name') }}"
            class="form-control border rounded" placeholder="Nome do Funcionário" required>
    </div>
</div>


<div class="col-md-3">
    <div class="form-group">
        <label for="Telefone">Telefone <small class="text-danger">*</small></label>
        <input type="text" name="tel" id="tel" value="{{ isset($inspections->tel) ? $inspections->tel : old('tel') }}"
            class="form-control border rounded" placeholder="Nº de Telefone" required>
    </div>
</div>



<div class="col-md-3">
    <div class="form-group">
        <label for="name">Email <small class="text-danger">*</small></label>
        <input type="email" name="email" id="email"
            value="{{ isset($inspections->email) ? $inspections->email : old('email') }}"
            class="form-control border rounded" placeholder="Email" required>
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
        <label for="occupation">Ocupação/Função <small class="text-danger">*</small></label>
        <input type="text" name="occupation" id="occupation"
            value="{{ isset($inspections->occupation) ? $inspections->occupation : old('occupation') }}"
            class="form-control border rounded" placeholder="Ocupação/Função" required>
    </div>
</div>


<div class="col-md-3">
    <div class="form-group">
        <label for="nif">NIF <small class="text-danger">*</small></label>
        <input type="text" name="nif" id="nif" value="{{ isset($inspections->nif) ? $inspections->nif : old('nif') }}"
            class="form-control border rounded" placeholder="Nº de Identificação Fiscal" required>
    </div>
</div>

<div class="col-md-5">
    <div class="form-group">
        <label for="departament">Departamento <small class="text-danger">*</small></label>

        <select type="text" name="departament" class="form-control border rounded" required>

            @isset ($inspections->departament)
                <option value="{{ $inspections->departament }}" class="text-white h6 bg-primary text-white" selected>
                    {{ $inspections->departament }}

                </option>
            @else
                <option disabled selected value="">Selecione um Departamento</option>
            @endisset

            <option>Departamento de Massificação, Inclusão e Conteúdo Digital</option>
            <option>Departamento de Administração de Sistemas, Redes e Comunicações</option>
            <option>Departamento de Gestão de Infra-Estruturas Tecnológicas e Serviços Partilhados</option>
            <option>Departamento de Cibersegurança, Chaves Públicas e Carimbo do Tempo</option>
            <option>Departamento de Apoio ao Director Geral</option>
            <option>Departamento de Administração e Serviços Gerais</option>
            <option>Departamento de Comunicação, Inovação, Tecnologia e Modernização dos Serviços</option>
        </select>
    </div>
</div>




<div class="col-md-12">
    <div class="form-group">
        <label for="Foto">Foto <small class="text-danger"></small></label>
        <input type="file" name="photoinspections"
            value="{{ isset($inspections->photoinspections) ? $inspections->photoinspections : old('photoinspections') }}"
            id="photoinspections" class="form-control border rounded">
    </div>
</div>





{{-- @section('jQueryAPI')
    <script src="http://code.jquery.com/jquery-3.4.1.js"></script>
@endsection
<script src="http://code.jquery.com/jquery-3.4.1.js"></script>
<script src="/dashboard/bundles/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        jQuery.support.cors = true;
        let _token = $('meta[name="csrf-token"]').attr('content');
        $('#sub_category_name').on('change', function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            jQuery.support.cors = true;
            $.ajax({
                // …
                crossDomain: true,
            });
            let id = $(this).val();
            $('#sub_category').empty();
            $('#sub_category').append(`<option value="0" disabled selected>Processando...</option>`);
            $.ajax({
                data: {
                    _token: _token
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'GET',

                crossDomain: true,
                url: 'GetSubCatAgainstMainCatEdit/' +
                    id,
                success: function(response) {
                    var response = JSON.parse(response);
                    $('#sub_category').empty();
                    $('#sub_category').append(

                    );
                    $('#sub_category').append(
                        `<option selected value="${response['acronym']}">${response['acronym']}</option>`
                    );
                }
            });
        });
    });
</script> --}}
