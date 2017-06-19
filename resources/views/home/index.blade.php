@extends('layouts.public')

@section('title', 'Home Page')

@section('content')
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="/"><i class="fa fa-home"></i></a></li>
            <li><a href="/mods">Mods</a></li>
        </ul>

        <div class="row">
            <aside id="column-left" class="col-sm-3 ">
                <div class="box bestsellers">
                    <div class="box-heading">
                        <h3>Bestsellers</h3>
                    </div>

                    <div class="box-content">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12  product-layout">
                                <div class="product-thumb transition options">
                                    <div class="product-option-wrap">
                                        <div class="product-options form-horizontal">
                                            <div class="options">
                                                <a class="ajax-overlay_close" href='#'></a>

                                                <h3>Available Options</h3>

                                                <div class="form-group hidden">
                                                    <div class="col-sm-8">
                                                        <input type="text" name="product_id" value="315" class="form-control" />
                                                    </div>
                                                </div>

                                                <div class="form-group required">
                                                    <label class="control-label col-sm-12">Size</label>

                                                    <div class="col-sm-12">
                                                        <div id="input-option386504001">
                                                            <div class="radio">
                                                                <label for="option[38652073304001]">
                                                                    <input type="radio" hidden name="option[3865]" id="option[38652073304001]" value="20733" />
                                                                    10ml (0.33 FL OZ)
                                                                </label>
                                                            </div>

                                                            <div class="radio">
                                                                <label for="option[38652073404001]">
                                                                    <input type="radio" hidden name="option[3865]" id="option[38652073404001]" value="20734" />
                                                                    30ml (1 FL OZ) (+$9.00)
                                                                </label>
                                                            </div>

                                                            <div class="radio">
                                                                <label for="option[38652073504001]">
                                                                    <input type="radio" hidden name="option[3865]" id="option[38652073504001]" value="20735" />
                                                                    120ml (4 FL OZ) (+$41.00)
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group required">
                                                    <label class="control-label col-sm-12" for="input-option386604001">Nicotine Level</label>

                                                    <div class="col-sm-12">
                                                        <select name="option[3866]" id="input-option386604001" class="form-control">
                                                            <option value="">--- Please Select ---</option>
                                                            <option value="20741">0.0%</option>
                                                            <option value="20742">0.2%</option>
                                                            <option value="20738">0.3%</option>
                                                            <option value="20739">0.5%</option>
                                                            <option value="20740">0.6%</option>
                                                            <option value="20736">1.2%</option>
                                                            <option value="20743">1.8%</option>
                                                            <option value="20737">2.4%</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <button class="product-btn-add" type="button" onclick="cart.addPopup($(this),'315');">
                                                    <span>Add to Cart</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="quick_info">
                                        <div id="quickview_bestsellers_40010" class="quickview-style">
                                            <div>
                                                <div class="left col-sm-4">
                                                    <div class="quickview_image image">
                                                        <a href="/abbott-road">
                                                            <img alt="Abbott Road" title="Abbott Road" class="img-responsive" src="/img/theme/abbott-roadcustard-line-315-270x250_0.jpg" />
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="right col-sm-8">
                                                    <h2>Abbott Road</h2>

                                                    <div class="inf">
                                                        <p class="quickview_manufacture manufacture manufacture">Brand: <a href="/vape-en">Vape</a></p>
                                                        <p class="product_model model">Model: Abbott Road</p>

                                                        <div class="price">$8.99</div>
                                                    </div>

                                                    <div class="rating">
                                                        <span class="fa-stack">
                                                            <i class="fl-bigmug-line-favourites5 fa-stack-1x"></i>
                                                            <i class="fl-bigmug-line-favourites5 star fa-stack-1x"></i>
                                                        </span>

                                                        <span class="fa-stack">
                                                            <i class="fl-bigmug-line-favourites5 fa-stack-1x"></i>
                                                            <i class="fl-bigmug-line-favourites5 star fa-stack-1x"></i>
                                                        </span>

                                                        <span class="fa-stack">
                                                            <i class="fl-bigmug-line-favourites5 fa-stack-1x"></i>
                                                            <i class="fl-bigmug-line-favourites5 star fa-stack-1x"></i>
                                                        </span>

                                                        <span class="fa-stack">
                                                            <i class="fl-bigmug-line-favourites5 fa-stack-1x"></i>
                                                            <i class="fl-bigmug-line-favourites5 star fa-stack-1x"></i>
                                                        </span>

                                                        <span class="fa-stack">
                                                            <i class="fl-bigmug-line-favourites5 fa-stack-1x"></i>
                                                            <i class="fl-bigmug-line-favourites5 star fa-stack-1x"></i>
                                                        </span>
                                                    </div>

                                                    <ul class="product-buttons">
                                                        <li>
                                                            <button class="product-btn" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('315');">
                                                                <i class="fl-bigmug-line-shuffle17"></i>
                                                            </button>
                                                        </li>

                                                        <li>
                                                            <button class="product-btn" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('315');">
                                                                <i class="fl-bigmug-line-like51"></i>
                                                            </button>
                                                        </li>
                                                    </ul>

                                                    <button class="product-btn-add" data-toggle="tooltip" title="Add to Cart" type="button" onclick="cart.add('315');">
                                                        <i class="fl-bigmug-line-shopping199 "></i>
                                                    </button>

                                                    <div class="clear"></div>
                                                </div>

                                                <div class="col-sm-12">
                                                    <div class="quickview_description description">
                                                        <p>Abbott Road is sweet ripe strawberries blended with creamy vanilla custard. &nbsp;You will be dreaming of strawberry fields forever after tasting this amazing juice.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="image">
                                        <a class="lazy" style="padding-bottom: 92.592592592593%" href="/abbott-road">
                                            <img alt="Abbott Road" title="Abbott Road" class="img-responsive" src="/img/theme/abbott-roadcustard-line-315-270x250_0.jpg" />
                                        </a>

                                        <a class="quickview" data-rel="details" href="#quickview_bestsellers_40010">Quick View</a>
                                    </div>

                                    <div class="caption">
                                        <div class="name">
                                            <a href="/abbott-road">Abbott Road</a>
                                        </div>

                                        <div class="description">Abbott Road is sweet ripe strawberries blended with creamy vanilla custard. &nbsp;You will be dreami..</div>

                                        <div class="rating">
                                            <span class="fa-stack">
                                                <i class="fl-bigmug-line-favourites5 fa-stack-1x"></i>
                                                <i class="fl-bigmug-line-favourites5 star fa-stack-1x"></i>
                                            </span>

                                            <span class="fa-stack">
                                                <i class="fl-bigmug-line-favourites5 fa-stack-1x"></i>
                                                <i class="fl-bigmug-line-favourites5 star fa-stack-1x"></i>
                                            </span>

                                            <span class="fa-stack">
                                                <i class="fl-bigmug-line-favourites5 fa-stack-1x"></i>
                                                <i class="fl-bigmug-line-favourites5 star fa-stack-1x"></i>
                                            </span>

                                            <span class="fa-stack">
                                                <i class="fl-bigmug-line-favourites5 fa-stack-1x"></i>
                                                <i class="fl-bigmug-line-favourites5 star fa-stack-1x"></i>
                                            </span>

                                            <span class="fa-stack">
                                                <i class="fl-bigmug-line-favourites5 fa-stack-1x"></i>
                                                <i class="fl-bigmug-line-favourites5 star fa-stack-1x"></i>
                                            </span>
                                        </div>

                                        <div class="price">$8.99</div>
                                    </div>

                                    <div class="cart-button">
                                        <button class="product-btn" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('315');">
                                            <i class="fl-bigmug-line-shuffle17"></i>
                                        </button>

                                        <button class="product-btn" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('315');">
                                            <i class="fl-bigmug-line-like51"></i>
                                        </button>

                                        <button class="product-btn-add" type="button" data-toggle="tooltip" title="Add to Cart" onclick="ajaxAdd($(this),315);">
                                            <i class="fl-bigmug-line-shopping199"></i>
                                        </button>
                                    </div>

                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>

            <div id="content" class="col-sm-9">
                <h2>Mods</h2>

                <div class="row">
                    <div class="col-sm-3">
                        <div class="image">
                            <img src="/img/theme/sx-mini-m-class-limited-edition-black-chrome-1248-190x190_0.jpg" alt="Mods" title="Mods" class="img-thumbnail" />
                        </div>
                    </div>

                    <div class="col-sm-9"><p><br></p></div>
                </div>

                <hr>

                <h3>Refine Search</h3>

                <div class="row">
                    <div >
                        <ul class="box-subcat">
                            <li class="col-sm-3  first-in-line">
                                <div class="thumb">
                                    <div class="image">
                                        <a href="/temperature-control">
                                            <img src="/img/theme/sx-mini-q-class-titanium-4-colors-190x190_0.jpg" alt="Temperature Control (32)" />
                                        </a>
                                    </div>
                                    <div class="name subcatname"><a href="/temperature-control">Temperature Control (32)</a></div>
                                </div>
                            </li>
                            <li class="col-sm-3  ">
                                <div class="thumb">
                                    <div class="image">
                                        <a href="/vv-vw">
                                            <img src="/img/theme/wismec-reuleaux-rx200-200w-896-190x190_0.jpg" alt="VV/VW (30)" />
                                        </a>
                                    </div>
                                    <div class="name subcatname"><a href="/vv-vw">VV/VW (30)</a></div>
                                </div>
                            </li>
                            <li class="col-sm-3  ">
                                <div class="thumb">
                                    <div class="image">
                                        <a href="/mechanical">
                                            <img src="/img/theme/dark-shadow-modmechanical-686-190x190_0.jpg" alt="Mechanical (3)" />
                                        </a>
                                    </div>
                                    <div class="name subcatname"><a href="/mechanical">Mechanical (3)</a></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="product-filter clearfix">
                    <div class="product-filter_elem">
                        <div class="button-view">
                            <button type="button" id="list-view" data-toggle="tooltip" title="List"><i class="material-design-view12"></i></button>
                            <button type="button" id="grid-view" data-toggle="tooltip" title="Grid"><i class="material-design-two375"></i></button>
                        </div>
                    </div>

                    <div class="product-filter_elem sort">
                        <label class="control-label" for="input-sort">Sort By:</label>

                        <select id="input-sort" onchange="location = this.value;">
                            <option value="/mods?sort=p.sort_order&amp;order=ASC">Default</option>
                            <option value="/mods?sort=pd.name&amp;order=ASC">Name (A - Z)</option>
                            <option value="/mods?sort=pd.name&amp;order=DESC">Name (Z - A)</option>
                            <option value="/mods?sort=p.price&amp;order=ASC">Price (Low &gt; High)</option>
                            <option value="/mods?sort=p.price&amp;order=DESC">Price (High &gt; Low)</option>
                            <option value="/mods?sort=rating&amp;order=DESC">Rating (Highest)</option>
                            <option value="/mods?sort=rating&amp;order=ASC">Rating (Lowest)</option>
                            <option value="/mods?sort=p.model&amp;order=ASC">Model (A - Z)</option>
                            <option value="/mods?sort=p.model&amp;order=DESC">Model (Z - A)</option>
                        </select>
                    </div>

                    <div class="product-filter_elem show pull-right">
                        <label class="control-label" for="input-limit">Show:</label>

                        <select id="input-limit" onchange="location = this.value;">
                            <option value="/mods?limit=6" selected="selected">6</option>
                            <option value="/mods?limit=25">25</option>
                            <option value="/mods?limit=50">50</option>
                            <option value="/mods?limit=75">75</option>
                            <option value="/mods?limit=100">100</option>
                        </select>
                    </div>

                    <div class="product-filter_elem">
                        <div class="button-view">
                            <a href="/compare" id="compare-total" class="compare-total material-design-shuffle24" data-toggle="tooltip" title="Product Compare (0)"><span>Product Compare (0)</span></a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    @foreach ($products as $product)
                        <div class="product-layout product-list col-xs-12">
                            <div class="product-thumb transition options">
                                <div class="product-option-wrap">
                                    <div class="product-options form-horizontal">
                                        <div class="options">
                                            <a class="ajax-overlay_close" href='#'></a>
                                            <h3>Available Options</h3>

                                            <div class="form-group hidden">
                                                <div class="col-sm-8">
                                                    <input type="text" name="product_id" value="2254" class="form-control" />
                                                </div>
                                            </div>

                                            <div class="form-group required">
                                                <label class="control-label col-sm-12">Color</label>

                                                <div class="col-sm-12">
                                                    <div id="input-option488710001">
                                                        <div class="radio">
                                                            <label for="option[48872619610001]">
                                                                <input type="radio" hidden name="option[4887]" id="option[48872619610001]" value="26196" />
                                                                White
                                                            </label>
                                                        </div>
                                                        <div class="radio">
                                                            <label for="option[48872619510001]">
                                                                <input type="radio" hidden name="option[4887]" id="option[48872619510001]" value="26195"/>
                                                                Black
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <button class="product-btn-add" type="button" onclick="cart.addPopup($(this),'2254');">
                                                <span>Add to Cart</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="image">
                                    <a class="lazy" style="padding-bottom: 100%" href="/mods/kanger-subox-mini-c-starter-kit">
                                        <img alt="Kanger SUBOX Mini-C Starter Kit" title="Kanger SUBOX Mini-C Starter Kit" class="img-responsive" src="{{ $product['img'] }}" />
                                    </a>
                                </div>

                                <div class="caption">
                                    <div class="name name-product"><a href="/mods/kanger-subox-mini-c-starter-kit">{{ $product['name'] }}</a></div>
                                    <div class="description">{{ $product['description'] }}</div>

                                </div>
                                <div class="aside">
                                    <div class="price price-product">${{ $product['price'] }}</div>

                                    <div class="cart-button">
                                        <button class="product-btn" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('2254');">
                                            <i class="fl-bigmug-line-shuffle17"></i>
                                        </button>

                                        <button class="product-btn" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('2254');">
                                            <i class="fl-bigmug-line-like51"></i>
                                        </button>

                                        <button class="product-btn-add" type="button" data-toggle="tooltip" title="Add to Cart" onclick="ajaxAdd($(this),2254);">
                                            <i class="fl-bigmug-line-shopping199 "></i>
                                        </button>
                                    </div>
                                </div>

                                <div class="price price-product">${{ $product['price'] }}</div>

                                <div class="cart-button">
                                    <button class="product-btn" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('2254');">
                                        <i class="fl-bigmug-line-shuffle17"></i>
                                    </button>

                                    <button class="product-btn" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('2254');">
                                        <i class="fl-bigmug-line-like51"></i>
                                    </button>

                                    <button class="product-btn-add" type="button" data-toggle="tooltip" title="Add to Cart" onclick="ajaxAdd($(this),2254);">
                                        <i class="fl-bigmug-line-shopping199 "></i>
                                    </button>
                                </div>
                            </div>

                            <div class="clear"></div>
                        </div>
                    @endforeach
                </div>

                <div class="row">
                    <div class="col-sm-6 text-left">
                        <ul class="pagination">
                            <li class="active"><span>1</span></li>
                            <li><a href="/mods/page/2">2</a></li>
                            <li><a href="/mods/page/3">3</a></li>
                            <li><a href="/mods/page/2">&gt;</a></li>
                            <li><a href="/mods/page/9">&gt;|</a></li>
                        </ul>
                    </div>

                    <div class="col-sm-6 text-right"><div class="results">Showing 1 to 6 of 53 (9 Pages)</div></div>
                </div>
            </div>
        </div>
    </div>
@endsection