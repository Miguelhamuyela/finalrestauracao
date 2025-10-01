<input type="hidden" name="origin" value="Fábrica de Software">
<div class="row">

    <div class="col-md-8">
        <div class="form-group">
            <label for="name">Nome do Software <small class="text-danger">*</small></label>
            <input type="text" name="nameSoftware" id="nameSoftware"
                value="{{ isset($manufacture->nameSoftware)? $manufacture->nameSoftware: old('nameSoftware') }}"
                class="form-control border rounded" placeholder="Nome do Software" required>
        </div>
    </div>


    <div class="col-md-4">
        <div class="form-group">
            <label for="category">Categoria <small class="text-danger"> *</small></label>
            <select type="text" name="category" id="category" class="form-control border rounded" required>

                @if (isset($manufacture->category))
                    <option value="{{ $manufacture->category }}"
                        class="text-primary h6 bg-primary text-white" selected>
                        {{ $manufacture->category }}
                    </option>
                @else
                    <option disabled selected value="">selecione uma categoria</option>
                @endif

                <option>Mobile</option>
                <option>Web</option>
                <option>Desktop</option>
                <option>Híbrida</option>

            </select>
        </div>
    </div>

</div>


<div class="row">

    <div class="col-md-12">
        <div class="form-group">
            <label for="file">Documentação</label>
            <input type="file" name="file"
                value="{{ isset($manufacture->file) ? $manufacture->file : old('file') }}"
                id="file" class="form-control border">
            <small class="text-danger">Extensões permitidas: excel, word, pdf</small>

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
