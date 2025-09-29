<div class="row mb-2">
    <div class="col-md-5">
        <div class="form-group">
            <label for="type">Tipo de Pagamento <small class="text-danger">*</small></label>

            <select type="text" name="type" id="type" class="form-control border rounded" required>

                @if (isset($payment->type))
                    <option value="{{ $payment->type }}" class="text-primary h6 bg-primary text-white" selected>
                        {{ $payment->type }}
                    </option>
                @else
                    <option disabled selected value="">selecione um tipo de pagamento</option>
                @endif

                <option>Dinheiro</option>
                <option>Transferência</option>
                <option>Rupe</option>

            </select>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="type">Valores a Pagar <small class="text-danger">*</small></label>
            <input type="text" name="value" id="value"
                value="{{ isset($payment->value) ? $payment->value : old('value') }}"
                class="form-control border rounded" placeholder="0,00" required>
        </div>
    </div>

    <div class="col-md-3">
        <div class="form-group">
            <label for="type">Referência </label>
            <input type="text" name="reference" id="reference"
                value="{{ isset($payment->reference) ? $payment->reference : old('reference') }}"
                class="form-control border rounded" placeholder="Referência">
        </div>
    </div>
    
</div>

<div class="row mb-2">

    <div class="col-md-6">
        <div class="form-group">
            <label for="currency">Moeda <small class="text-danger">*</small></label>
            <select type="text" name="currency" id="currency" class="form-control border rounded" required>

                @if (isset($payment->currency))
                    <option value="{{ $payment->currency }}" class="text-primary h6 bg-primary text-white" selected>
                        {{ $payment->currency }}
                    </option>
                @else
                    <option disabled selected value="">selecione uma moeda</option>
                @endif

                <option>Kwanza</option>
                <option>Dollar</option>
                <option>Euro</option>

            </select>
        </div>
    </div>



    <div class="col-md-6">
        <div class="form-group">
            <label for="status">Status <small class="text-danger">*</small></label>
            <select type="text" name="status" id="status" class="form-control border rounded" required>

                @if (isset($payment->status))
                    <option value="{{ $payment->status }}" class="text-primary h6 bg-primary text-white" selected>
                        {{ $payment->status }}
                    </option>
                @else
                    <option disabled selected value="">selecione uma opção de pagamento</option>
                @endif

                <option>Pago</option>
                <option>Não Pago</option>
                <option>Em Validação</option>
                <option>Negado</option>

            </select>
        </div>
    </div>

</div>
