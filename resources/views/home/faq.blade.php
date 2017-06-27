@extends('layouts.public')

@section('title', 'FAQ')
@section('description', 'FAQ')
@section('keywords', 'FAQ')

@section('content')
    <!--Main-->
    <main>
        <div style="width: 100%; height: 120px;"></div>

        <div class="profile-page">
            <div class="container">
                <ol class="breadcrumb" xmlns:v="http://rdf.data-vocabulary.org/#">
                    <li typeof="v:Breadcrumb"><a href="/" rel="v:url" property="v:title"><i class="ion-ios-home-outline"></i> Главная</a></li>
                    <li typeof="v:Breadcrumb" class="active"><a href="#" rel="v:url" property="v:title">Вопросы и ответы</a></li>
                </ol>
                <div class="page-header clearfix">
                    <h1 class="name pull-left">Вопросы и ответы</h1>
                </div>
                <div class="row">

                </div>
            </div>
        </div>

        <div id="darkness" class="hidden-xs"></div>
    </main>
    <!--Main End-->

    <div class="sticky-btns">
        <span id="scrollTop-btn"><i class="fa fa-chevron-up"></i></span>
    </div>
@endsection