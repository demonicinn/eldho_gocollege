
<div class="col-8">
    <div class="card card-primary card-outline mb-4">

        <div class="card-header">
            <div class="card-title">{{ $formTitle }} College</div>
            <a href="{{ route('ab.courses') }}" class="btn btn-warning btn-sm float-end"><i
                    class="nav-icon bi bi-arrow-left"></i></a>
        </div>

        <div class="card-body">
            <div class="mb-3">
                <label class="form-label">Name <sm>*</sm></label>
                {{ html()->text('name')->class('form-control'. ($errors->has('name') ? ' is-invalid' : ''))->placeholder('') }}
                {!! $errors->first('name', '<span class="help-block mb-1">:message</span>') !!}
            </div>

            <div class="mb-3">
                <label class="form-label">Image <sm>*</sm></label>
                @if (isset($college) && $college->image_path)
                    </br>
                    <img src="{{ $college->image_path }}" height="150" width="150">
                @endif
                {{ html()->file('image')->class('form-control'. ($errors->has('image') ? ' is-invalid' : ''))->accept(env('IMAGE_MIME')) }}
                {!! $errors->first('image', '<span class="help-block mb-1">:message</span>') !!}
            </div>

            <div class="mb-3">
                <label class="form-label">Description</label>
                {{ html()->textarea('description')->class('form-control'. ($errors->has('description') ? ' is-invalid' : ''))->placeholder('') }}
                {!! $errors->first('description', '<span class="help-block mb-1">:message</span>') !!}
            </div>

         
            <div class="mb-3">
                <label class="form-label">Status <sm>*</sm></label>
                {{ html()->select('status')->class('form-control'. ($errors->has('status') ? ' is-invalid' : ''))->options(statusArray()) }}
                {!! $errors->first('status', '<span class="help-block mb-1">:message</span>') !!}
            </div>

        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">{{ $submitBtn }}</button>
        </div>
    </div>
</div>