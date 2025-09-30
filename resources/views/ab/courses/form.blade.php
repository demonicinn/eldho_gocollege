
<div class="col-8">

    <div class="row">
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

                <div class="mb-3">
                    <label class="form-label">Sub Title <sm>*</sm></label>
                    {{ html()->text('sub_title')->class('form-control'. ($errors->has('sub_title') ? ' is-invalid' : ''))->placeholder('') }}
                    {!! $errors->first('sub_title', '<span class="help-block mb-1">:message</span>') !!}
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


                <div class="mb-3">
                    <label class="form-label">Image</label>
                    @if (isset($course) && $course->image_path)
                        <br/>
                        <img src="{{ $course->image_path }}" height="150" width="150"/>
                    @endif
                    {{ html()->file('image')->class('form-control'. ($errors->has('image') ? ' is-invalid' : ''))->accept(env('IMAGE_MIME')) }}
                    {!! $errors->first('image', '<span class="help-block mb-1">:message</span>') !!}
                </div>

                <div class="mb-3">
                    <label class="form-label">Description <sm>*</sm></label>
                    {{ html()->textarea('description')->class('form-control'. ($errors->has('description') ? ' is-invalid' : ''))->rows(5) }}
                    {!! $errors->first('description', '<span class="help-block mb-1">:message</span>') !!}
                </div>


                <div class="mb-3">
                    <label class="form-label">Status <sm>*</sm></label>
                    {{ html()->select('status')->class('form-control'. ($errors->has('status') ? ' is-invalid' : ''))->options(statusArray()) }}
                    {!! $errors->first('status', '<span class="help-block mb-1">:message</span>') !!}
                </div>
            </div>
        </div>
    </div>



    <!-- Key Points -->
    <div class="row">
        <div class="card card-primary card-outline mb-4">
            <div class="card-header mb-3">
                <div class="card-title">Key Points</div>
            </div>
            <div class="row mb-3">
                <div class="col-3">
                    <label class="form-label">Title 1</label>
                </div>
                <div class="col-4">
                    <label class="form-label">Title 2</label>
                </div>
                <div class="col-4">
                    <label class="form-label">Title 3</label>
                </div>
                <div class="col-1"></div>
            </div>
            <div id="addonsKeyPoint">
                @if(isset($course) && @$course->key_points)
                    @foreach($course->key_points as $i => $key_points)
                    <div class="row mb-3 field{{ $i }}">
                        <div class="col-3">
                            <input class="form-control" type="text" name="key_points[{{ $i }}][title1]" value="{{ $key_points->title1 }}">
                        </div>
                        <div class="col-4">
                            <input class="form-control" type="text" name="key_points[{{ $i }}][title2]" value="{{ $key_points->title2 }}">
                        </div>
                        <div class="col-4">
                            <input class="form-control" type="text" name="key_points[{{ $i }}][title3]" value="{{ $key_points->title3 }}">
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
                    <div class="row mb-3 key_points0">
                        <div class="col-3">
                            <input class="form-control" type="text" name="key_points[0][title1]">
                        </div>
                        <div class="col-4">
                            <input class="form-control" type="text" name="key_points[0][title2]">
                        </div>
                        <div class="col-4">
                            <input class="form-control" type="text" name="key_points[0][title3]">
                        </div>
                        <div class="col-1">
                            <button type="button" class="btn btn-success addMore"><i class="bi bi-plus"></i></button>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>


    <!-- Sidebar -->
    <div class="row">
        <div class="card card-primary card-outline mb-4">
            <div class="card-header mb-3">
                <div class="card-title">Sidebar</div>
            </div>
            <div class="row mb-3">
                <div class="col-4">
                    <label class="form-label">Title</label>
                </div>
                <div class="col-7">
                    <label class="form-label">Value</label>
                </div>
                <div class="col-1"></div>
            </div>
            <div id="addonsFields">
                @if(isset($course))
                    @foreach($course->data as $i => $data)
                    <div class="row mb-3 field{{ $i }}">
                        <div class="col-4">
                            <input class="form-control" type="text" name="data[{{ $i }}][title]" value="{{ $data->title }}">
                        </div>

                        <div class="col-7">
                            <input class="form-control" type="text" name="data[{{ $i }}][value]" value="{{ $data->value }}">
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
                    @foreach(keyPoints() as $iP => $kPoints)
                    <div class="row mb-3 field{{$iP}}">
                        <div class="col-4">
                            <input class="form-control" type="text" name="data[{{$iP}}][title]" value="{{ $kPoints }}">
                        </div>
                        <div class="col-7">
                            <input class="form-control" type="text" name="data[{{$iP}}][value]">
                        </div>
                        <div class="col-1">
                            @if ($iP==0)
                                <button type="button" class="btn btn-success addMore"><i class="bi bi-plus"></i></button>
                            @else
                                <button type="button" class="btn btn-danger removeField" data-id="{{ $iP }}"><i class="bi bi-dash"></i></button>
                            @endif
                        </div>
                    </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>


    <!-- Why Choose This Program -->
    <div class="row">
        <div class="card card-primary card-outline mb-4">
            <div class="card-header mb-3">
                <div class="card-title">Why Choose This Program</div>
            </div>
            <div class="row mb-3">
                <div class="col-2">
                    <label class="form-label">Icon</label>
                </div>
                <div class="col-4">
                    <label class="form-label">Title</label>
                </div>
                <div class="col-5">
                    <label class="form-label">Description</label>
                </div>
                <div class="col-1"></div>
            </div>

            <div id="addonsProgram">
                @if(isset($course))
                    @foreach($course->program as $i => $program)
                    <div class="row mb-3 field{{ $i }}">
                        <div class="col-2">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">fa-</span>
                                </div>
                                <input class="form-control" type="text" name="program[{{ $i }}][icon]" value="{{ $program->icon }}">
                            </div>
                        </div>

                        <div class="col-4">
                            <input class="form-control" type="text" name="program[{{ $i }}][title]" value="{{ $program->title }}">
                        </div>

                        <div class="col-5">
                            <input class="form-control" type="text" name="program[{{ $i }}][description]" value="{{ $program->description }}">
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
                        <div class="col-2">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">fa-</span>
                                </div>
                                <input class="form-control" type="text" name="program[0][icon]">
                            </div>
                        </div>

                        <div class="col-4">
                            <input class="form-control" type="text" name="program[0][title]">
                        </div>

                        <div class="col-5">
                            <input class="form-control" type="text" name="program[0][description]">
                        </div>

                        <div class="col-1">
                            <button type="button" class="btn btn-success addMore"><i class="bi bi-plus"></i></button>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <!-- What You'll Learn -->
    <div class="row">
        <div class="card card-primary card-outline mb-4">
            <div class="card-header mb-3">
                <div class="card-title">What You'll Learn</div>
            </div>
            <div class="row mb-3">
                <div class="col-5">
                    <label class="form-label">Title</label>
                </div>
                <div class="col-6">
                    <label class="form-label">Value</label>
                </div>
                <div class="col-1"></div>
            </div>

            <div id="addonsLearn">
                @if(isset($course))
                    @foreach($course->learn as $i => $learn)
                    <div class="row mb-3 field{{ $i }}">
                        <div class="col-5">
                            <input class="form-control" type="text" name="learn[{{ $i }}][title]" value="{{ $learn->title }}">
                        </div>

                        <div class="col-6">
                            <input class="form-control" type="text" name="learn[{{ $i }}][value]" value="{{ $learn->value }}">
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
                        <div class="col-5">
                            <input class="form-control" type="text" name="learn[0][title]">
                        </div>

                        <div class="col-6">
                            <input class="form-control" type="text" name="learn[0][value]">
                        </div>

                        <div class="col-1">
                            <button type="button" class="btn btn-success addMore"><i class="bi bi-plus"></i></button>
                        </div>
                    </div>
                @endif
            </div>

        </div>
    </div>


    <!-- Career Outcomes - Job Titles -->
    <div class="row">
        <div class="card card-primary card-outline mb-4">
            <div class="card-header mb-3">
                <div class="card-title">Career Outcomes - Job Titles</div>
            </div>
            <div class="row mb-3">
                <div class="col-11">
                    <label class="form-label">Title</label>
                </div>
                <div class="col-1"></div>
            </div>

            <div id="addonsCareerJobTitles">
                @if(isset($course))
                    @foreach($course->jobTitle as $i => $jobTitle)
                    <div class="row mb-3 field{{ $i }}">
                        <div class="col-11">
                            <input class="form-control" type="text" name="jobTitle[{{ $i }}][title]" value="{{ $jobTitle->title }}">
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
                        <div class="col-11">
                            <input class="form-control" type="text" name="jobTitle[0][title]">
                        </div>
                        <div class="col-1">
                            <button type="button" class="btn btn-success addMore"><i class="bi bi-plus"></i></button>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>


    <!-- Career Outcomes - Work Environments -->
    <div class="row">
        <div class="card card-primary card-outline mb-4">
            <div class="card-header mb-3">
                <div class="card-title">Career Outcomes - Work Environments</div>
            </div>
            <div class="row mb-3">
                <div class="col-2">
                    <label class="form-label">Icon</label>
                </div>
                <div class="col-9">
                    <label class="form-label">Title</label>
                </div>
                <div class="col-1"></div>
            </div>

            <div id="addonsCareerWorkEnvironments">
                @if(isset($course))
                    @foreach($course->workEnvironments as $i => $workEnvironments)
                    <div class="row mb-3 field{{ $i }}">
                        <div class="col-2">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">fa-</span>
                                </div>
                                <input class="form-control" type="text" name="workEnvironments[{{ $i }}][icon]" value="{{ $workEnvironments->icon }}">
                            </div>
                        </div>

                        <div class="col-9">
                            <input class="form-control" type="text" name="workEnvironments[{{ $i }}][title]" value="{{ $workEnvironments->title }}">
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
                        <div class="col-2">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">fa-</span>
                                </div>
                                <input class="form-control" type="text" name="workEnvironments[0][icon]">
                            </div>
                        </div>
                        <div class="col-9">
                            <input class="form-control" type="text" name="workEnvironments[0][title]">
                        </div>
                        <div class="col-1">
                            <button type="button" class="btn btn-success addMore"><i class="bi bi-plus"></i></button>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>


    <!-- Career Outcomes - Fields -->
    <div class="row">
        <div class="card card-primary card-outline mb-4">
            <div class="card-header mb-3">
                <div class="card-title">Career Outcomes - Fields</div>
            </div>
            
            <div class="mb-3">
                <label class="form-label">Career Description <sm>*</sm></label>
                {{ html()->textarea('career_description')->class('form-control'. ($errors->has('career_description') ? ' is-invalid' : ''))->rows(5) }}
                {!! $errors->first('career_description', '<span class="help-block mb-1">:message</span>') !!}
            </div>
            
        </div>
    </div>






    <div class="card-footer">
        <button type="submit" class="btn btn-primary">{{ $submitBtn }}</button>
    </div>

</div>





@section('script')

<script src="https://cdn.ckeditor.com/4.22.1/full/ckeditor.js"></script>
<script>
    // CKEDITOR.replace( 'description' );

    // CKEDITOR.replace('description', {
    //     contentsCss: [
    //         "{{ asset('assets/css/bootstrap.min.css') }}",
    //         "{{ asset('assets/css/style.css') }}"
    //     ]
    // });



    //remove ck-editor warning
    setTimeout(function () {
        $('#cke_notifications_area_description').hide();
    }, 1000);
</script>

<script>
    //For Key Points
    const keyPointHTML = `
        <div class="row mb-3 field010">
            <div class="col-3">
                <input class="form-control" type="text" name="key_points[010][title1]">
            </div>
            <div class="col-4">
                <input class="form-control" type="text" name="key_points[010][title2]">
            </div>
            <div class="col-4">
                <input class="form-control" type="text" name="key_points[010][title3]">
            </div>
            <div class="col-1">
                <button type="button" class="btn btn-danger removeField" data-id="010"><i class="bi bi-dash"></i></button>
            </div>
        </div>
    `;

    //add fields
    $(document).on('click', '#addonsKeyPoint .addMore', function(){
        var numItems = $('#addonsKeyPoint .row').length;

        var newHtml = keyPointHTML.replaceAll("010", numItems);
        $('#addonsKeyPoint').append(newHtml);
    });

    //remove Fields
    $(document).on('click', '#addonsKeyPoint .removeField', function(){
        var id = $(this).data('id');
        $(`#addonsKeyPoint .field${id}`).remove();
    });

</script>

<script>
    //For Sidebar
    const sidebarHTML = `
        <div class="row mb-3 field010">
            <div class="col-4">
                <input class="form-control" type="text" name="data[010][title]">
            </div>
            <div class="col-7">
                <input class="form-control" type="text" name="data[010][value]">
            </div>
            <div class="col-1">
                <button type="button" class="btn btn-danger removeField" data-id="010"><i class="bi bi-dash"></i></button>
            </div>
        </div>
    `;

    //add fields
    $(document).on('click', '#addonsFields .addMore', function(){
        var numItems = $('#addonsFields .row').length;

        var newHtml = sidebarHTML.replaceAll("010", numItems);
        $('#addonsFields').append(newHtml);
    });

    //remove Fields
    $(document).on('click', '#addonsFields .removeField', function(){
        var id = $(this).data('id');
        $(`#addonsFields .field${id}`).remove();
    });

</script>


<script>
    //For programs
    const programHTML = `
        <div class="row mb-3 field010">
            <div class="col-2">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">fa-</span>
                    </div>
                    <input class="form-control" type="text" name="program[010][icon]">
                </div>
            </div>

            <div class="col-4">
                <input class="form-control" type="text" name="program[010][title]">
            </div>

            <div class="col-5">
                <input class="form-control" type="text" name="program[010][description]">
            </div>

            <div class="col-1">
                <button type="button" class="btn btn-danger removeField" data-id="010"><i class="bi bi-dash"></i></button>
            </div>
        </div>
    `;

    //add fields
    $(document).on('click', '#addonsProgram .addMore', function(){
        var numItems = $('#addonsProgram .row').length;

        var newHtml = programHTML.replaceAll("010", numItems);
        $('#addonsProgram').append(newHtml);
    });

    //remove Fields
    $(document).on('click', '#addonsProgram .removeField', function(){
        var id = $(this).data('id');
        $(`#addonsProgram .field${id}`).remove();
    });

</script>


<script>
    //For learn
    const learnHTML = `
        <div class="row mb-3 field010">
            <div class="col-5">
                <input class="form-control" type="text" name="learn[010][title]">
            </div>

            <div class="col-6">
                <input class="form-control" type="text" name="learn[010][value]">
            </div>

            <div class="col-1">
                <button type="button" class="btn btn-danger removeField" data-id="010"><i class="bi bi-dash"></i></button>
            </div>
        </div>
    `;

    //add fields
    $(document).on('click', '#addonsLearn .addMore', function(){
        var numItems = $('#addonsLearn .row').length;

        var newHtml = learnHTML.replaceAll("010", numItems);
        $('#addonsLearn').append(newHtml);
    });

    //remove Fields
    $(document).on('click', '#addonsLearn .removeField', function(){
        var id = $(this).data('id');
        $(`#addonsLearn .field${id}`).remove();
    });

</script>


<script>
    //For programs
    const careerJobTitlesHTML = `
        <div class="row mb-3 field010">
            <div class="col-11">
                <input class="form-control" type="text" name="jobTitle[010][title]">
            </div>
            <div class="col-1">
                <button type="button" class="btn btn-danger removeField" data-id="010"><i class="bi bi-dash"></i></button>
            </div>
        </div>
    `;

    //add fields
    $(document).on('click', '#addonsCareerJobTitles .addMore', function(){
        var numItems = $('#addonsCareerJobTitles .row').length;

        var newHtml = careerJobTitlesHTML.replaceAll("010", numItems);
        $('#addonsCareerJobTitles').append(newHtml);
    });

    //remove Fields
    $(document).on('click', '#addonsCareerJobTitles .removeField', function(){
        var id = $(this).data('id');
        $(`#addonsCareerJobTitles .field${id}`).remove();
    });

</script>




<script>
    //For programs
    const careerWorkEnvironmentsHTML = `
        <div class="row mb-3 field010">
            <div class="col-2">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">fa-</span>
                    </div>
                    <input class="form-control" type="text" name="workEnvironments[010][icon]">
                </div>
            </div>
            <div class="col-9">
                <input class="form-control" type="text" name="workEnvironments[010][title]">
            </div>
            <div class="col-1">
                <button type="button" class="btn btn-danger removeField" data-id="010"><i class="bi bi-dash"></i></button>
            </div>
        </div>
    `;

    //add fields
    $(document).on('click', '#addonsCareerWorkEnvironments .addMore', function(){
        var numItems = $('#addonsCareerWorkEnvironments .row').length;

        var newHtml = careerWorkEnvironmentsHTML.replaceAll("010", numItems);
        $('#addonsCareerWorkEnvironments').append(newHtml);
    });

    //remove Fields
    $(document).on('click', '#addonsCareerWorkEnvironments .removeField', function(){
        var id = $(this).data('id');
        $(`#addonsCareerWorkEnvironments .field${id}`).remove();
    });

</script>




@endsection