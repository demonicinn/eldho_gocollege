
@php
    $detailsUrl = route('courses.details', [$acourse->id, $acourse->slug]);
@endphp
<div class="col-xl-4 col-md-6 course all {{ $acourse->category }}">
    <div class="courses-two__item">
        <div class="courses-two__image image">
            <img src="{{ $acourse->image_path }}" alt="image">
        </div>
        <div class="courses__content pt-4 p-0">

            <h3 class="pb-4">
                <a href="{{ $detailsUrl }}" class="primary-hover">
                    {{ $acourse->title }}
                </a>
            </h3>
            
            <div class="bor-top"></div>

            <div class="d-flex gap-2 align-items-center courses-two__info pt-4 pb-4">
                <h4>{{ categoriesValue($acourse->category) }}</h4>
                <a href="{{ $detailsUrl }}">Get Details</a>
            </div>

        </div>
    </div>
</div>