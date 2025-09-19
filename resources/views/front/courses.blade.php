@extends('layouts.app')
@section('content')

<!-- Banner area start here -->
<section class="banner-inner-area sub-bg bg-image" data-background="assets/images/bg/banner-inner-bg.png">
    <div class="container">
        <div class="banner-inner__content">
            <h1>
                Archives: Courses
            </h1>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><i class="fa-regular fa-angle-right"></i></li>
                <li>Courses</li>
            </ul>
        </div>
    </div>
</section>
<!-- Banner area end here -->



<!-- Courses area start here -->
<section class="courses-area pt-120 pb-120">
    <div class="container">
        <div class="blog-details__item-left align-items-center pt-4 pb-4">
            <div class="tags categories">
                <a href="javascript:void(0)" data-cat="all" class="active">All</a>
                @foreach(categoriesArray() as $iCat => $cat)
                <a href="javascript:void(0)" data-cat="{{ $iCat }}">{{ $cat }}</a>
                @endforeach
            </div>
        </div>

        <div id="courses" class="row g-4">
            @foreach($courses as $course)
            @include('components.course', ['acourse'=>$course])
            @endforeach
        </div>
    </div>
</section>
<!-- Courses area end here -->

@endsection


@section('script')
<script>
    $('.categories > a').on('click', function(){
        let cat = $(this).data('cat');

        $('.categories > a').removeClass('active');
        $(this).addClass('active');


        $('#courses .course').hide();
        $(`#courses .course.${cat}`).show();

    });


</script>
@endsection











