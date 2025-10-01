<div class="row">



  <div class="col-md-12">
    <div class="form-group">
        <label for="document">Documento</label>
        <input type="file" name="documentStartup[]" value="{{ isset($documentsStartup->documentStartup) ? $documentsStartup->documentStartup : old('documentStartup') }}"
            id="document" class="form-control border" multiple>
        <small class="text-danger">Extensões permitidas: excel, word, pdf</small>

    </div>
</div>


  </div>


  <!-- /.col -->
