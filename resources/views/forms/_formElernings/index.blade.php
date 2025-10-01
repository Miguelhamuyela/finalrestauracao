<input type="hidden" name="origin" value="E-Learning">
<div class="row">

    <div class="col-md-6">
        <div class="form-group">
            <label for="course">Curso <small class="text-danger">*</small></label>
            <input placeholder="Curso" type="text"  name="course" id="course"
                value="{{ isset($elerning->course) ? $elerning->course : old('course') }}" 
                class="form-control border" required>


        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="timeCourse">Período <small class="text-danger"> *</small></label>
            <input placeholder="Período do curso" type="text" name="timeCourse"
                value="{{ isset($elerning->timeCourse) ? $elerning->timeCourse : old('timeCourse') }}" id="timeCourse"
                class="form-control border" required>
        </div>
    </div>

</div>

<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label for="note">Nota <small class="text-danger"> *</small></label>
            <textarea name="note" class="form-control rounded" style="min-height:50px; min-width:100%"
                required>{{ isset($elerning->note) ? $elerning->note : old('note') }}</textarea>
        </div>
    </div>

</div>





<!-- /.col -->
