@extends('layout.app')

@section('content')
    <div class="px-4 py-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-7">
                    <h1 id="item-title">{{ $item->title }}</h1>
                    <p id="item-status" class="text-muted mb-5">Status: Loading <img src="img/loading-2.gif" style="width: 24px;"/></p>
                </div>
            </div>

            <div id="item-info" class="row mb-5">
                <div id="item-detail" class="col-lg-7">
                    {!! $item->detail !!}
                </div>
                <div class="col-lg-5 position-sticky">
                    <h2>Sumary</h2>
                    <img id="image" src="{{ $item->image }}" style="max-width: 300px;"><br><br>
                    <p id="item-sumary" class="text-muted">{{ $item->sumary }}</p>
                    <div class="p-4 bg-light mb-5">
                        <ul class="list-unstyled mb-0">
                            <li class="d-flex mb-2">
                                <h6 class="mb-0">Box:</h6>
                                <p id="item-box" class="ml-3 text-muted mb-0">{{ $item->box->name }}</p>
                            </li>
                            <li class="d-flex mb-2">
                                <h6 class="mb-0">Created date:</h6>
                                <p id="item-time" class="ml-3 text-muted mb-0">{{ $item->created_at }}</p>
                            </li>
                            <li class="d-flex mb-2">
                                <h6 class="mb-0">Last modified:</h6>
                                <p id="item-time" class="ml-3 text-muted mb-0">{{ $item->updated_at }}</p>
                            </li>
                            <li class="d-flex">
                                <h6 class="mb-0">Source:</h6>
                                <p class="ml-3 text-muted mb-0"><a id="item-source" class="reset-anchor mr-1" href="{{ $item->source_link }}" target="_blank">{{ $item->source }}</a></p>
                            </li>
                        </ul>
                    </div>

                    <h2 class="h3 mb-4">Share</h2>
                    <ul class="list-inline">
                        <li class="list-inline-item"><a id="btn-share-to-facebook" class="reset-anchor social-share-link facebook" target="_blank" href="https://www.facebook.com/sharer/sharer.php?kid_directed_site=0&sdk=joey&u={{ route('items.show', ['id' => $item->id]) }}&display=popup&ref=plugin&src=share_button"><i class="fab fa-facebook-f mr-2"></i>Share</a></li>
                    </ul>
                </div>
            </div>

            <h2 id="h2-relate" class="h3 mb-4">Related items</h2>
            <div id="item-relate" class="row">
                @foreach ($relatedItems as $item)
                    <div data-aos="fade-up-right" class="col-lg-4 mb-4">
                        <div class="listing-item pl-0">
                            <div class="position-relative">
                                <a class="reset-anchor d-block listing-img-holder" href="{{ route('items.show', ['id' => $item->id]) }}">
                                    <img class="img-fluid rounded-lg" src="{{ $item->image }}" alt="">
                                    <p class="mb-0 text-primary small d-flex align-items-center listing-btn"><span>Look inside</span>
                                        <svg class="svg-icon text-primary svg-icon-sm ml-2">
                                            <use xlink:href="#arrow-right-1"></use>
                                        </svg>
                                    </p>
                                </a>
                            </div>
                            <div class="py-3"><a class="reset-anchor" href="{{ route('items.show', ['id' => $item->id]) }}">
                                <h2 class="h5 listing-item-heading">{{ $item->title }}</h2></a>
                                <p class="text-small mb-0 listing-item-description">{{ $item->sumary }}</p>
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
        document.title = "{{ $item->title }} | Pylbox";
    </script>
@endsection
