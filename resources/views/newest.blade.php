@extends('layout.app')

@section('content')
    <div class="px-4 py-5">
        <div class="container-fluid">
            <!-- <span class="newest">Newest</span> -->
            <marquee class="newest" behavior="alternate" direction="left" scrollamount="5">
                <a class="view-all" href="{{ route('items.index') }}">Newest <span class="badge bg-danger">New</span></a>
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
                                <a class="reset-anchor d-block listing-img-holder detail-1" href="{{ route('items.show', ['id'=>$item->id]) }}"><img class="img-fluid" id="img-newest-1" src="{{ $item->image }}" alt="" style="max-height: 200px;">
                                    <p class="mb-0 text-primary small d-flex align-items-center listing-btn"><span>Detail</span>
                                        <svg class="svg-icon text-primary svg-icon-sm ml-2">
                                            <use xlink:href="#arrow-right-1"></use>
                                        </svg>
                                    </p>
                                </a>
                            </div>
                            <div class="py-3"><a class="reset-anchor detail-1" href="{{ route('items.show', ['id'=>$item->id]) }}">
                                <h2 class="h5 listing-item-heading" id ="title-1">{{ $item->title }}</h2></a>
                                <p class="text-small mb-0 listing-item-description">{{ $item->sumary }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            {{ $items->links() }}
            <style type="text/css">
                nav[role=navigation] {
                    float: right;
                    border: none;
                }

                nav[role=navigation] a {
                    text-decoration: none;
                }
            </style>
        </div>
    </div>
@endsection

@section('custom-js')
    <script type="text/javascript">
        document.title = 'Newest | Pylbox';
    </script>
@endsection
