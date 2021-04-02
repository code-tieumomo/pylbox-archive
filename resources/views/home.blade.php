@extends('layout.app')

@section('content')
    <div class="px-4 py-5">
        <div class="container-fluid">
            <!-- <span class="newest">Newest</span> -->
            <marquee class="newest" behavior="alternate" direction="left" scrollamount="5">
                <a class="view-all" href="">Newest <span class="badge bg-danger">New</span></a>
            </marquee>
            <style type="text/css">
                .newest {
                    width: 300px;
                    font-size: 40px;
                    font-weight: bold;
                    text-decoration: none;
                    color: #000;
                }

                .badge {
                    font-size: 10px;
                    position: absolute;
                    top: 0;
                    color: #fff;
                }

                .view-all {
                    color: #000;
                    text-decoration: none;
                }
            </style>

            <div id="list-newest" class="masonry-wrapper">
                @foreach ($items as $item)
                    <div data-aos="zoom-in-right" class="col-lg-4 col-md-6 grid-item mb-4">
                        <div class="listing-item">
                            <div class="position-relative">
                                <ul class="list-inline listing-tags m-0">
                                    <li class="list-inline-item"><a id="detail-1" class="reset-anchor font-weight-normal text-gray text-small detail-1" target="_blank" href="{{ $item->source_link }}">{{ $item->source }}</a></li>
                                </ul>
                                <a class="reset-anchor d-block listing-img-holder detail-1" href="detail.html"><img class="img-fluid" id="img-newest-1" src="{{ $item->image }}" alt="" style="max-height: 200px;">
                                    <p class="mb-0 text-primary small d-flex align-items-center listing-btn"><span>Detail</span>
                                        <svg class="svg-icon text-primary svg-icon-sm ml-2">
                                            <use xlink:href="#arrow-right-1"></use>
                                        </svg>
                                    </p>
                                </a>
                            </div>
                            <div class="py-3"><a class="reset-anchor detail-1" href="detail.html">
                                <h2 class="h5 listing-item-heading" id ="title-1">{{ $item->title }}</h2></a>
                                <p class="text-small mb-0 listing-item-description">{{ $item->sumary }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <marquee data-aos="fade-right" class="newest" behavior="alternate" direction="left" scrollamount="5">
                <a class="view-all" href="">Boxes <span class="badge bg-primary down-position"><i class="fas fa-arrow-right"></i></span></a>
            </marquee>
            <style type="text/css">
                .down-position {
                    margin-left: 10px;
                    top: 26px;
                }
            </style>

            <div id="list-boxes" class="masonry-wrapper" style="position: relative; height: 2000px;">
                @foreach ($boxes as $box)
                    <div data-aos="@if ($box->id%3==1){{'fade-up-right'}}@elseif ($box->id%3==2){{'zoom-in'}}@else{{'fade-up-left'}}@endif" class="col-lg-4 col-md-6 grid-item mb-4">
                        <div class="listing-item">
                            <div class="position-relative">
                                <ul class="list-inline listing-tags m-0">
                                    <li class="list-inline-item"><a class="reset-anchor font-weight-normal text-gray text-small" href="detail.html">Box</a></li>
                                </ul><a class="reset-anchor d-block listing-img-holder" href="javascript:void(0)"><img class="img-fluid" src="img/boxes/{{ Str::lower($box->name) }}-box.png" alt="">
                                    <p class="mb-0 text-primary small d-flex align-items-center listing-btn"><span>Look inside</span>
                                        <svg class="svg-icon text-primary svg-icon-sm ml-2">
                                            <use xlink:href="#arrow-right-1"></use>
                                        </svg>
                                    </p>
                                </a>
                            </div>
                            <div class="py-3"><a class="reset-anchor" href="detail.html">
                                <h2 class="h5 listing-item-heading" id="box-0">{{ $box->name }}</h2></a>
                                <p class="text-small mb-0 listing-item-description">{{ $box->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@section('custom-js')
    <script type="text/javascript">
        document.title = 'Home | Pylbox';
    </script>
@endsection
