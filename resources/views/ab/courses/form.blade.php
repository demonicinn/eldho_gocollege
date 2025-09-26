
<div class="col-8">
    <div class="card card-primary card-outline mb-4">

        <div class="card-header">
            <div class="card-title">{{ $formTitle }} Course</div>
            <a href="{{ route('ab.courses') }}" class="btn btn-warning btn-sm float-end"><i
                    class="nav-icon bi bi-arrow-left"></i></a>
        </div>

        <div class="card-body">
            <div class="mb-3">
                <label class="form-label">Title <sm>*</sm></label>
                {{ html()->text('title')->class('form-control'. ($errors->has('title') ? ' is-invalid' : ''))->placeholder('') }}
                {!! $errors->first('title', '<span class="help-block mb-1">:message</span>') !!}
            </div>


            <div class="row mb-3">
                <div class="col-6">
                    <label class="form-label">College <sm>*</sm></label>
                    {{ html()->select('college_id')->class('form-control'. ($errors->has('college_id') ? ' is-invalid' : ''))->options($colleges)->placeholder('Select College') }}
                    {!! $errors->first('college_id', '<span class="help-block mb-1">:message</span>') !!}
                </div>
                <div class="col-6">
                    <label class="form-label">Category <sm>*</sm></label>
                    {{ html()->select('category')->class('form-control'. ($errors->has('category') ? ' is-invalid' : ''))->options(categoriesArray())->placeholder('Select Category') }}
                    {!! $errors->first('category', '<span class="help-block mb-1">:message</span>') !!}
                </div>
            </div>




            <div class="row mb-3">
                <div class="col-3">
                    <label class="form-label">Title <sm>*</sm></label>
                </div>
                <div class="col-8">
                    <label class="form-label">Value <sm>*</sm></label>
                </div>
                <div class="col-1"></div>
            </div>

            <div id="addonsFields">
                @if(isset($course))
                    @foreach($course->data as $i => $data)
                    <div class="row mb-3 field{{ $i }}">
                        <div class="col-3">
                            <input class="form-control" type="text" name="data[{{ $i }}][title]" value="{{ $data->title }}" required>
                        </div>

                        <div class="col-8">
                            <input class="form-control" type="text" name="data[{{ $i }}][value]" value="{{ $data->value }}" required>
                        </div>

                        <div class="col-1">
                            @if ($i==0)
                                <button type="button" class="btn btn-success addMore"><i class="bi bi-plus"></i></button>
                            @else
                                <button type="button" class="btn btn-danger removeField" data-id="{{ $i }}"><i class="bi bi-dash"></i></button>
                            @endif
                        </div>
                    </div>
                    @endforeach
                @else
                    <div class="row mb-3 field0">
                        <div class="col-3">
                            <input class="form-control" type="text" name="data[0][title]" required>
                        </div>

                        <div class="col-8">
                            <input class="form-control" type="text" name="data[0][value]" required>
                        </div>

                        <div class="col-1">
                            <button type="button" class="btn btn-success addMore"><i class="bi bi-plus"></i></button>
                        </div>
                    </div>
                @endif
            </div>





            <div class="mb-3">
                <label class="form-label">Image</label>
                @if (isset($course) && $course->image_path)
                    </br>
                    <img src="{{ $course->image_path }}" height="150" width="150">
                @endif
                {{ html()->file('image')->class('form-control'. ($errors->has('image') ? ' is-invalid' : ''))->accept(env('IMAGE_MIME')) }}
                {!! $errors->first('image', '<span class="help-block mb-1">:message</span>') !!}
            </div>

            <div class="mb-3">
                <label class="form-label">Description <sm>*</sm></label>
                {{ html()->textarea('description')->class('form-control'. ($errors->has('description') ? ' is-invalid' : ''))->rows(10) }}
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





@section('script')

<script src="https://cdn.ckeditor.com/4.22.1/full/ckeditor.js"></script>
<script>
    // CKEDITOR.replace( 'description' );

    CKEDITOR.replace('description', {
        contentsCss: [
            "{{ asset('assets/css/bootstrap.min.css') }}",
            "{{ asset('assets/css/style.css') }}"
        ]
    });



    //remove ck-editor warning
    setTimeout(function () {
        $('#cke_notifications_area_description').hide();
    }, 1000);
</script>

<script>
    const html = `
        <div class="row mb-3 field010">
            <div class="col-3">
                <input class="form-control" type="text" name="data[010][title]" required>
            </div>

            <div class="col-8">
                <input class="form-control" type="text" name="data[010][value]" required>
            </div>

            <div class="col-1">
                <button type="button" class="btn btn-danger removeField" data-id="010"><i class="bi bi-dash"></i></button>
            </div>
        </div>
    `;

    //add fields
    $(document).on('click', '.addMore', function(){
        addField();
    });

    //add Field
    function addField(){
        var numItems = $('#addonsFields .row').length;

        var newHtml = html.replaceAll("010", numItems);
        $('#addonsFields').append(newHtml);
    }

    //remove Fields
    $(document).on('click', '.removeField', function(){
        var id = $(this).data('id');
        $(`#addonsFields .field${id}`).remove();
    });

</script>
@endsection