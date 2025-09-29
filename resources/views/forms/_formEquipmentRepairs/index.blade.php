<input type="hidden" name="origin" value="Reparação de Equipamentos">
<div class="row">
    <div class="col-md-5">
        <div class="form-group">
            <label for="equipmentName">Nome do Equipamento <small class="text-danger">*</small></label>
            <input type="text" name="equipmentName" id="equipmentName"
                value="{{ isset($equipmentRepair->equipmentName) ? $equipmentRepair->equipmentName : old('equipmentName') }}"
                class="form-control border rounded" placeholder="Nome do  Equipamento" required>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="model">Modelo <small class="text-danger">*</small></label>
            <input type="text" name="model" id="model"
                value="{{ isset($equipmentRepair->model) ? $equipmentRepair->model : old('model') }}"
                class="form-control border rounded" placeholder="Modelo" required>
        </div>
    </div>

    <div class="col-md-3">
        <div class="form-group">
            <label for="fk_Employees_id">Funcionário <small class="text-danger">*</small></label>

            <select type="text" name="fk_Employees_id" id="fk_Employees_id" class="form-control border rounded"
                required>

                @if (isset($equipmentRepair->name))
                    <option value="{{ $equipmentRepair->employees->id }}"
                        class="text-primary h6 bg-primary text-white" selected>
                        {{ $equipmentRepair->employees->name }}
                    </option>
                @else
                    <option disabled selected value="">selecione uma outra opção</option>
                @endif

                @foreach ($employees as $item)
                    <option value="{{ $item->id }}">
                        {{ $item->name }}
                    </option>
                @endforeach

            </select>

        </div>
    </div>

</div>
<div class="row">
    <div class="col-md-7">
        <div class="form-group">
            <label for="Endereço MAC">Endereço MAC </label>
            <input type="text" name="macAddress" id="macAddress"
                value="{{ isset($equipmentRepair->macAddress) ? $equipmentRepair->macAddress : old('macAddress') }}"
                class="form-control border rounded" placeholder="Endereço MAC">
        </div>
    </div>

    <div class="col-md-5">
        <div class="form-group">
            <label for="Número de série">Número de série </label>
            <input type="text" name="serialNumber" id="serialNumber"
                value="{{ isset($equipmentRepair->serialNumber) ? $equipmentRepair->serialNumber : old('serialNumber') }}"
                class="form-control border rounded" placeholder="Número de série">
        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="email">Referência do Equipamento
                <small class="text-danger">*</small></label>
            <input type="text" name="referenceEquipment" id="referenceEquipment"
                value="{{ isset($equipmentRepair->referenceEquipment) ? $equipmentRepair->referenceEquipment : old('referenceEquipment') }}"
                class="form-control border rounded" placeholder="Referência  do Equipamento
                " required>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="image">Imagem</label>
            <input type="file" name="image" id="image" value="" class="form-control border rounded">
        </div>
    </div>

</div>

<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label for="problemDetails">Detalhes do Equipamento e do Problema <small
                    class="text-danger">*</small></label>
            <textarea name="problemDetails" rows="4" id="editor1" class="form-control border-secondary no-resize"
                placeholder="Descrição do curso">{{ isset($equipmentRepair->problemDetails) ? $equipmentRepair->problemDetails : old('problemDetails') }}
        </textarea>
        </div>
    </div>
</div>
