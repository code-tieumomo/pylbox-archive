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

                    <div id="fb-root"></div>
                    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_EN/sdk.js#xfbml=1&autoLogAppEvents=1&version=v10.0&appId=209323426840876" nonce="jCFPcBWL"></script>

                    <h2 class="h3 mb-4">Share</h2>
                    <ul class="list-inline">
                        <div class="list-inline-item fb-share-button" data-href="{{ route('items.show', ['id'=>$item->id]) }}" data-layout="button" data-size="large"><a target="_blank" href="#" class="fb-xfbml-parse-ignore">Share</a></div>
                    </ul>
                </div>
            </div>

            <h2 id="h2-relate" class="h3 mb-4">Related projects</h2>
            <div id="item-relate" class="row">
                <div class="col-lg-4 mb-4">
                    <div class="listing-item pl-0">
                        <div class="position-relative">
                            <a class="reset-anchor d-block listing-img-holder" href="detail.html">
                                <img class="img-fluid rounded-lg" src="img/portfolio-6.jpg" alt="">
                                <p class="mb-0 text-primary small d-flex align-items-center listing-btn"> <span>Look inside</span>
                                    <svg class="svg-icon text-primary svg-icon-sm ml-2">
                                        <use xlink:href="#arrow-right-1"> </use>
                                    </svg>
                                </p>
                            </a>
                        </div>
                        <div class="py-3"><a class="reset-anchor" href="detail.html">
                            <h2 class="h5 listing-item-heading">Banana Lady</h2></a>
                            <p class="text-small mb-0 listing-item-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="listing-item pl-0">
                        <div class="position-relative">
                            <a class="reset-anchor d-block listing-img-holder" href="detail.html">
                                <img class="img-fluid rounded-lg" src="img/portfolio-4.jpg" alt="">
                                <p class="mb-0 text-primary small d-flex align-items-center listing-btn"> <span>Look inside</span>
                                    <svg class="svg-icon text-primary svg-icon-sm ml-2">
                                        <use xlink:href="#arrow-right-1"> </use>
                                    </svg>
                                </p>
                            </a>
                        </div>
                        <div class="py-3"><a class="reset-anchor" href="detail.html">
                            <h2 class="h5 listing-item-heading">Treasure Haunted</h2></a>
                            <p class="text-small mb-0 listing-item-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="listing-item pl-0">
                        <div class="position-relative">
                            <a class="reset-anchor d-block listing-img-holder" href="detail.html">
                                <img class="img-fluid rounded-lg" src="img/portfolio-5.jpg" alt="">
                                <p class="mb-0 text-primary small d-flex align-items-center listing-btn"> <span>Look inside</span>
                                    <svg class="svg-icon text-primary svg-icon-sm ml-2">
                                        <use xlink:href="#arrow-right-1"> </use>
                                    </svg>
                                </p>
                            </a>
                        </div>
                        <div class="py-3"><a class="reset-anchor" href="detail.html">
                            <h2 class="h5 listing-item-heading">Best Friends</h2></a>
                            <p class="text-small mb-0 listing-item-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
