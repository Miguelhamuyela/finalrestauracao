
<div class="row">

    <div class="col-md-8">
        <div class="form-group">
            <label for="title">Título da Reunião <small class="text-danger">*</small></label>
            <input type="text" name="title" id="title"
                value="{{ isset($meetingRoom->title) ? $meetingRoom->title : old('title') }}"
                class="form-control border rounded" placeholder="Título da Reunião " required>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="phone">Telefone <small class="text-danger">*</small></label>
            <input type="text" name="phone" id="phone"
                value="{{ isset($meetingRoom->phone) ? $meetingRoom->phone : old('phone') }}"
                class="form-control border rounded" placeholder="Telefone" required>
        </div>
    </div>

</div>


<div class="row">

    <div class="col-md-5">
        <div class="form-group">
            <label for="name">Nome do Solicitante <small class="text-danger">*</small></label>
            <input type="text" name="name" id="name"
                value="{{ isset($meetingRoom->name) ? $meetingRoom->name : old('name') }}"
                class="form-control border rounded" placeholder="Nome" required>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="email">Email <small class="text-danger">*</small></label>
            <input type="email" name="email" id="email"
                value="{{ isset($meetingRoom->email) ? $meetingRoom->email : old('email') }}"
                class="form-control border rounded" placeholder="Email" required>
        </div>
    </div>

    <div class="col-md-3">
        <div class="form-group">
            <label for="Sala">Sala <small class="text-danger">*</small></label>

            <select type="text" name="meetRoom" id="meetRoom" class="form-control border rounded" required>

                @if (isset($meetingRoom->meetRoom))
                    <option value="{{ $meetingRoom->meetRoom }}" class="text-primary h6 bg-primary text-white"
                        selected>
                        {{ $meetingRoom->meetRoom }}
                    </option>
                @else
                    <option disabled selected value="">selecione uma sala</option>
                @endif

                <option>Sala de E-learning</option>
                <option>Sala de Reunião Piso 2</option>

            </select>
        </div>
    </div>

</div>

<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label for="Descrição">Descrição <small class="text-danger"> *</small></label>
            <textarea name="description" class="form-control rounded" style="min-height:50px; min-width:100%"
                required>{{ isset($meetingRoom->description) ? $meetingRoom->description : old('description') }}</textarea>
        </div>
    </div>

</div>
<!-- /.col -->
