
<div class="col-8">
    <div class="card card-primary card-outline mb-4">

        <div class="card-header">
            <div class="card-title">{{ $formTitle }} Testimonial</div>
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
                @if (isset($testimonial) && $testimonial->image_path)
                    </br>
                    <img src="{{ $testimonial->image_path }}" height="150" width="150">
                @endif
                {{ html()->file('image')->class('form-control'. ($errors->has('image') ? ' is-invalid' : ''))->accept(env('IMAGE_MIME')) }}
                {!! $errors->first('image', '<span class="help-block mb-1">:message</span>') !!}
            </div>


            <div class="mb-3">
                <label class="form-label">Rating <sm>*</sm></label>
                {{ html()->select('rating')->class('star-rating'. ($errors->has('rating') ? ' is-invalid' : ''))->options(ratingArray())->placeholder('Select a rating') }}
                {!! $errors->first('rating', '<span class="help-block mb-1">:message</span>') !!}
            </div>


            <div class="mb-3">
                <label class="form-label">Testimonial <sm>*</sm></label>
                {{ html()->textarea('testimonial')->class('form-control'. ($errors->has('testimonial') ? ' is-invalid' : ''))->placeholder('') }}
                {!! $errors->first('testimonial', '<span class="help-block mb-1">:message</span>') !!}
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




@section('script')
<link href="{{ asset('admin/css/star-rating.css') }}" rel="stylesheet">
<script src="{{ asset('admin/js/star-rating.js') }}"></script>
<script>
    var stars = new StarRating('.star-rating');

    @if (isset($testimonial) && $testimonial->rating)
    const selectElement = document.querySelector('.star-rating');
    selectElement.value = "{{$testimonial->rating}}";
    selectElement.dispatchEvent(new Event('change'));
    @endif

    
</script>

@endsection