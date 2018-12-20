@csrf
<div class="form-group row">
    <label for="project-name" class="col-sm-2 col-form-label">Project Name</label>
    <div class="col-md-8">
        <input type="text" name="project_name" id="project_name" value="{{ old('project_name', $project->project_name)  }}"
            class="form-control {{ $errors->has('project_name') ? 'is-invalid' : '' }}">
        @if($errors->has('project_name'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('project_name') }}</strong>
            </div>
        @endif
    </div>
</div>
<div class="form-group row">
     <label for="project-description" class="col-sm-2 col-form-label">Project Description</label>
     <div class="col-md-8">
          <textarea name="project_description" id="project_description" rows="10" class="form-control {{ $errors->has('project_description') ? 'is-invalid' : '' }}">{{ old('body',$project->project_description) }}</textarea>

        @if($errors->has('project_description'))
        <div class="invalid-feedback">
            <strong>{{ $errors->first('project_description') }}</strong>
        </div>
        @endif
     </div>
</div>
<div class="form-group row">
    <div class="col-md-4 offset-md-2">
        <button class="btn btn-outline-primary btn-lg"> {{ $buttonText }} </button>
    </div>
</div>