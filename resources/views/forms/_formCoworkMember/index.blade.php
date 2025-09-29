<div class="row">

    <div class="col-md-8">
      <div class="form-group">
          <label for="name">Nome<small class="text-danger">*</small></label>
          <input type="text" name="name" id="name" value="{{ isset($cowork->name) ? $cowork->name: old('name') }}"
              class="form-control border rounded" placeholder="Nome do Membro" required>
      </div>
  </div>
  
  
  <div class="col-md-4">
    <div class="form-group">
        <label for="nif">NIF<small class="text-danger">*</small></label>
        <input type="text" name="nif" id="nif" value="{{ isset($cowork->nif) ? $cowork->nif: old('nif') }}"
            class="form-control border rounded" placeholder="Nº de Identificação Fiscal" required>
    </div>
  </div>
  
  </div>
  
  
  <div class="row">
  
  <div class="col-md-4">
    <div class="form-group">
        <label for="email">Email<small class="text-danger">*</small></label>
        <input type="email" name="email" id="email" value="{{ isset($cowork->email) ? $cowork->email: old('email') }}"
            class="form-control border rounded" placeholder="Email" required>
    </div>
  </div>
  
  <div class="col-md-4">
    <div class="form-group">
        <label for="tel">Telefone<small class="text-danger">*</small></label>
        <input type="text" name="tel" id="tel" value="{{ isset($cowork->tel) ? $cowork->tel: old('tel') }}"
            class="form-control border rounded" placeholder="Telefone" required>
    </div>
  </div>
  
  <div class="col-md-4">
    <div class="form-group">
        <label for="tel">Ocupação <small class="text-danger">*</small></label>
        <input type="text" name="occupation" id="occupation" value="{{ isset($cowork->occupation) ? $cowork->occupation: old('occupation') }}"
            class="form-control border rounded" placeholder="Ocupação" required>
    </div>
  </div>

  </div>

  <div class="row">

    <div class="col-md-12">
      <div class="form-group">
          <label for="tel">Foto </label>
          <input type="file" name="foto" id="foto" value="{{ isset($cowork->foto) ? $cowork->foto: old('foto') }}"
              class="form-control border rounded" placeholder="Ocupação">
      </div>
    </div>

  </div>
  <!-- /.col -->