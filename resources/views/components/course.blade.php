
@php
    $detailsUrl = route('courses.details', [$acourse->id, $acourse->slug]);

    $duration = '';
    $dataArray = json_decode($acourse->data);

    foreach($dataArray as $data) {
        if($data->title == 'Duration'){
            $duration = $data->value;
        }
    }

@endphp


<div class="col-lg-4 col-md-6 course all {{ $acourse->category }}">
    <div class="courses-two__item">
        <div class="courses-two__image">
            <img src="{{ $acourse->image_path }}" alt="{{ $acourse->title }}" class="w-100">
            @if($duration)
            <span class="time"><i class="fa-regular fa-clock"></i> {{ $duration }}</span>
            @endif
        </div>
        <div class="courses-two__content mt-30">
            <div class="courses-two__info mb-20">
                <a href="#">{{ categoriesValue($acourse->category) }}</a>
                <a href="{{ $detailsUrl }}">Get Details</a>
            </div>
            <h4 class="mb-20">
                <a href="{{ $detailsUrl }}" class="primary-hover">{{ $acourse->title }}</a>
            </h4>
            <p class="mb-25">{{ $acourse->short_description }}</p>
        </div>
    </div>
</div>