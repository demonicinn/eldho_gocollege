@if($message = Session::get('success'))
    <div class="alert callout callout-success hide">
        {!! $message !!}
    </div>
@endif

@if($message = Session::get('error'))
    <div class="alert callout callout-danger hide">
        {!! $message !!}
    </div>
@endif

@if($message = Session::get('warning'))
    <div class="alert callout callout-warning hide">
        {!! $message !!}
    </div>
@endif

@if($message = Session::get('info'))
    <div class="alert callout callout-info hide">
        {!! $message !!}
    </div>
@endif
