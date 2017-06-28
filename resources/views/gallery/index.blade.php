@extends('layouts.public')

@section('title', 'Gallery')
@section('description', 'Gallery')
@section('keywords', 'Gallery')

@section('content')
    <!--Main-->
    <main>
        <div style="width: 100%; height: 120px;"></div>

        <div class="profile-page">
            <div class="container">
                <ol class="breadcrumb" xmlns:v="http://rdf.data-vocabulary.org/#">
                    <li typeof="v:Breadcrumb"><a href="/" rel="v:url" property="v:title"><i class="ion-ios-home-outline"></i> Главная</a></li>
                    <li typeof="v:Breadcrumb" class="active"><a href="#" rel="v:url" property="v:title">Галерея</a></li>
                </ol>
                <div class="page-header clearfix">
                    <h1 class="name pull-left">Галерея</h1>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="thumbs_gallery">
                        
                            @foreach  ($gallary as $key => $image)
                                <div class="thumbs_image scrollimation">
                                    <a class="fancybox" href="{{ $galletyImgDir }}{{ $image }}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                                        <img @if ($key > 6)class="wow zoomIn" @endif src="{{ $galletyImgDir }}{{ $image }}" alt="" />
                                    </a>
                                </div>
                            @endforeach
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="darkness" class="hidden-xs"></div>
    </main>
    <!--Main End-->    
    <script type="text/javascript">
        $(document).ready(function() {
            $('.fancybox').fancybox();
        });
    </script>
    
@endsection