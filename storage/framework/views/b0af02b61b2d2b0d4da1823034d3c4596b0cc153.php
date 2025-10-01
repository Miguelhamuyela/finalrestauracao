<div class="col-md-6">
    <div class="form-group">
        <label for="name">Nome do Integrate<small class="text-danger">*</small></label>
        <input type="text" name="name" id="name" value="<?php echo e(isset($employee->name) ? $employee->name : old('name')); ?>"
            class="form-control border rounded" placeholder="Nome do Funcionário" required>
    </div>
</div>


<div class="col-md-3">
    <div class="form-group">
        <label for="Telefone">Telefone  do Integrate<small class="text-danger">*</small></label>
        <input type="text" name="tel" id="tel" value="<?php echo e(isset($employee->tel) ? $employee->tel : old('tel')); ?>"
            class="form-control border rounded" placeholder="Nº de Telefone do Integrate" required>
    </div>
</div>



<div class="col-md-3">
    <div class="form-group">
        <label for="name">Email  do Integrate <small class="text-danger">*</small></label>
        <input type="email" name="email" id="email"
            value="<?php echo e(isset($employee->email) ? $employee->email : old('email')); ?>"
            class="form-control border rounded" placeholder="Email do Integrate" required>
    </div>
</div>


<div class="col-md-4">
    <div class="form-group">
        <label for="occupation">Ocupação/Função  do Integrate <small class="text-danger">*</small></label>
        <input type="text" name="occupation" id="occupation"
            value="<?php echo e(isset($employee->occupation) ? $employee->occupation : old('occupation')); ?>"
            class="form-control border rounded" placeholder="Ocupação/Função do Integrate" required>
    </div>
</div>


<div class="col-md-3">
    <div class="form-group">
        <label for="nif">NIF  do Integrate <small class="text-danger">*</small></label>
        <input type="text" name="nif" id="nif" value="<?php echo e(isset($employee->nif) ? $employee->nif : old('nif')); ?>"
            class="form-control border rounded" placeholder="Nº de Identificação Fiscal do Integrate" required>
    </div>
</div>

<div class="col-md-5">
    <div class="form-group">
        <label for="departament">Departamento/Secção<small class="text-danger">*</small></label>

        <select type="text" name="departament" class="form-control border rounded" required>

            <?php if(isset($employee->departament)): ?>
                <option value="<?php echo e($employee->departament); ?>" class="text-white h6 bg-primary text-white" selected>
                    <?php echo e($employee->departament); ?>


                </option>
            <?php else: ?>
                <option disabled selected value="">Selecione um Departamento</option>
            <?php endif; ?>
            <option>Secção de Turismo</option>
            <option>Inspecção da Saude</option>
            <option>Inspecção da Bombeiro</option>
        </select>
    </div>
</div>
<div class="col-md-4">
    <div class="form-group">
        <label for="ministry">Selecionar os Ministerios<small class="text-danger">*</small></label>
        <select type="text" name="ministry" class="form-control border rounded" required>

            <?php if(isset($employee->ministry)): ?>
                <option value="<?php echo e($employee->ministry); ?>" class="text-white h6 bg-primary text-white" selected>
                    <?php echo e($employee->ministry); ?>


                </option>
            <?php else: ?>
                <option disabled selected value="">Selecione um Ministerios</option>
            <?php endif; ?>
            <option>Ministerio do Turismo</option>
            <option>Ministerio da Saúde</option>
            <option>Ministerio do Interior</option>
            <option>Ministerio da Defesa Nacional e Veteranos da Pátria</option>
            <option>Ministerio das Relações Exteriores</option>
            <option>Ministerio da Administração do Território</option>
            <option>Ministerio da Justiça e dos Direitos Humanos</option>
            <option>Ministerio das Finanças</option>
            <option>Ministerio do Planeamento</option>
            <option>Ministerio da Cultura</option>
            <option>Ministerio da Administração Pública, Trabalho e Segurança Social</option>
            <option>Ministerio da Agricultura e Florestas</option>
            <option>Ministerio das Pescas e Recursos Marinhos</option>
            <option>Ministerio da Indústria e Comércio</option>
            <option>Ministerio dos Recursos Minerais, Petróleo e Gás</option>
            <option>Ministerio dos Transportes</option>
            <option>Ministerio da Energia e Águas</option>
            <option>Ministerio das Telecomunicações, Tecnologias de Informação e Comunicação Social</option>
            <option>Ministerio das Obras Públicas, Urbanismo e Habitação</option>
            <option>Ministerio do Ensino Superior, Ciência, Tecnologia e Inovação</option>
            <option>Ministerio da Educação</option>
            <option>Ministerio da Saúde</option>
            <option>Ministerio da Acção Social, Família e Promoção da Mulher</option>
            <option>Ministerio do Ambiente</option>
            <option>Ministerio da Juventude e Desportos</option>
        </select>
    </div>
</div>
<div class="col-md-3">
    <div class="form-group">
        <label for="teamLeader">Chefe da Equipa <small class="text-danger">*</small></label>
        <input type="text" name="teamLeader" id="teamLeader" value="<?php echo e(isset($employee->teamLeader) ? $employee->teamLeader : old('teamLeader')); ?>"
            class="form-control border rounded" placeholder="Nome do Chefe da Equipa " required>
    </div>
</div>
<div class="col-md-5">
    <div class="form-group">
        <label for="Foto">Foto do Integrate <small class="text-danger"></small></label>
        <input type="file" name="photoEmployee"
            value="<?php echo e(isset($employee->photoEmployee) ? $employee->photoEmployee : old('photoEmployee')); ?>"
            id="photoEmployee" class="form-control border rounded">
    </div>
</div>

<div class="col-md-12">
    <div class="form-group">
        <label for="address">Endereço do Integrate<small class="text-danger">*</small></label>
        <input type="text" name="address" id="address" value="<?php echo e(isset($employee->address) ? $employee->address : old('address')); ?>"
            class="form-control border rounded" placeholder="Endereço do Integrate" required>
    </div>
</div>

 <div class="col-md-12">
        <div class="form-group">
            <label for="file">Descrição <small class="text-danger">*</small></label>
            <textarea name="description" class="form-control rounded"  style="min-height:100px; min-width:100%"
                required><?php echo e(isset($manufacture->description) ? $manufacture->description : old('description')); ?></textarea>
        </div>
    </div>

<?php /**PATH C:\Users\Miguel.hamuyela\Desktop\finalrestauracao\resources\views/forms/_formEmployees/index.blade.php ENDPATH**/ ?>