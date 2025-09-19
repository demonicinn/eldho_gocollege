<div class="col-4">
    <div class="card card-primary card-outline mb-4">

        <div class="card-header">
            <div class="card-title">Metatags</div>
        </div>

        <div class="card-body">

        	<!-- meta keywords -->
		    <div class="mb-3">
		        <label class="form-label">Meta Title</label>
		        {{ html()->textarea('meta_title')->class('form-control'. ($errors->has('meta_title') ? ' is-invalid' : ''))->placeholder('') }}
		        {!! $errors->first('meta_title', '<span class="help-block mb-1">:message</span>') !!}
		    </div>
		    <div class="mb-3">
		        <label class="form-label">Meta Keyword</label>
		        {{ html()->textarea('meta_keyword')->class('form-control'. ($errors->has('meta_keyword') ? ' is-invalid' : ''))->placeholder('') }}
		        {!! $errors->first('meta_keyword', '<span class="help-block mb-1">:message</span>') !!}
		    </div>
		    <div class="mb-3">
		        <label class="form-label">Meta Description</label>
		        {{ html()->textarea('meta_description')->class('form-control'. ($errors->has('meta_description') ? ' is-invalid' : ''))->placeholder('') }}
		        {!! $errors->first('meta_description', '<span class="help-block mb-1">:message</span>') !!}
		    </div>
    
        </div>

    </div>
</div>