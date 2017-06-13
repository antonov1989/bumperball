@extends('layouts.master')

@section('layout')
    <p id="gl_path" class="hidden">dog</p>
    
    <div id="page">
        <header>
            <div class="container margin-bot">
                <nav id="top-links" class="nav toggle-wrap">
                    <a class="toggle material-design-settings49" href='#'></a>
                    
                    <ul class="toggle_cont">
                        <li class="first">
                            <a href="/" title="Home">
                                <span>Home</span>
                            </a>
                        </li>
                        
                        <li class="toggle-wrap">
                            <a href="/account" title="My Account" class="toggle">
                                <span>My Account</span>
                                <span class="caret"></span>
                            </a>
                            
                            <ul class="toggle_cont toggle_cont__right">
                                <li>
                                    <a href="/register">Register</a>
                                </li>
                                
                                <li>
                                    <a href="/login">Log in</a>
                                </li>
                            </ul>
                        </li>
                        
                        <li>
                            <a href="/compare" id="compare-total2" title="Product Compare">
                                <span>Product Compare</span>
                            </a>
                        </li>
                        
                        <li>
                            <a href="/cart" title="Shopping Cart">
                                <span>Shopping Cart</span>
                            </a>
                        </li>
                        
                        <li>
                            <a href="/checkout" title="Checkout">
                                <span>Checkout</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                
                <div class="fleft col-sm-6">
                    <div id="logo" class="logo">
                        <a href="/"><img src="/img/logos/logo-white.png" title="Vaping Dog" alt="Vaping Dog" class="img-responsive" style="margin-top: 6px;" /></a>
                    </div>
                </div>
                
                <div class="fright col-sm-6">
                    <a class="login" href="/login"><i class="material-icons-vpn_key"></i><span>Log in</span></a>
                    
                    <div class="box-cart">
                        <div id="cart" class="cart toggle-wrap">
                            <button type="button" data-loading-text="Loading..." class="toggle">
                                <i class="fl-bigmug-line-shopping199"></i>
                                <span>My Cart</span>
                                <span id="cart-total2" class="cart-total2">0</span>
                            </button>
                            <ul class="pull-right toggle_cont">
                                <li>
                                    <p class="text-center">Your shopping cart is empty!</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <div id="search" class="search fix-right fl-bigmug-line-search74">
                        <div class="search-cnt">
                            <input type="text" name="search" value="" placeholder="Search"/>
                            <button type="button" class="button-search fl-bigmug-line-search74"></button>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="icon2 fa fa-dollar">
                                <p><a href="e-liquids">Vaping Dog E-Liquid<br>Buy 3 Save 33%<br>Everyday!</a></p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="icon2 fa fa-lock">
                                <p><a href="privacy-policy">3rd Party<br>Age Verification<br>During Checkout</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="stuck" class="stuck-menu">
                <div class="container">
                    <div class="fleft">
                        <div id="menu-gadget" class="menu-gadget" >
                            <ul class="menu">
                                <li>
                                    <a href="/kits">Kits</a>
                                </li>
                                
                                <li>
                                    <a href="/mods" class="active">Mods</a>
                                    <ul>
                                        <li>
                                            <a href="/temperature-control">Temperature Control</a>
                                        </li>
                                        <li>
                                            <a href="/vv-vw">VV/VW</a>
                                        </li>
                                        <li>
                                            <a href="/mechanical">Mechanical</a>
                                        </li>
                                    </ul>
                                </li>
                                
                                <li>
                                    <a href="/tanks-and-coils">Tanks &amp; Coils</a>
                                    <ul>
                                        <li>
                                            <a href="/tanks">Tanks</a>
                                        </li>
                                        <li>
                                            <a href="/coils">Coils</a>
                                        </li>
                                        <li>
                                            <a href="/rda-rba">RDA/RBA</a>
                                        </li>

                                    </ul>
                                </li>
                                
                                <li>
                                    <a href="/chargers-and-batteries">Chargers &amp; Batteries</a>
                                    <ul>
                                        <li>
                                            <a href="/chargers">Chargers</a>
                                        </li>
                                        <li>
                                            <a href="/batteries">Batteries</a>
                                        </li>
                                    </ul>
                                </li>
                                
                                <li>
                                    <a href="/e-liquids">E-Liquids</a>
                                    <ul>
                                        <li>
                                            <a href="/flavor-of-the-week">Flavor of the Week</a>
                                        </li>
                                        <li>
                                            <a href="/ogurt-line">Ogurt Line</a>
                                        </li>
                                        <li>
                                            <a href="/black-label">Black Label</a>
                                        </li>
                                        <li>
                                            <a href="/custard-line">Custard Line</a>
                                        </li>
                                        <li>
                                            <a href="/yogurt-flavors">Yogurt Flavors</a>
                                        </li>
                                        <li>
                                            <a href="/squatch-line">SQUATCH Line</a>
                                        </li>
                                        <li>
                                            <a href="/doughnut-flavors">Doughnut Flavors</a>
                                        </li>
                                        <li>
                                            <a href="/menthol-and-mint-flavors">Menthol &amp; Mint Flavors</a>
                                        </li>
                                        <li>
                                            <a href="/cereal-flavors">Cereal Flavors</a>
                                        </li>
                                        <li>
                                            <a href="/coffee-flavors">Coffee Flavors</a>
                                        </li>
                                        <li>
                                            <a href="/fruit-flavors">Fruit Flavors</a>
                                        </li>
                                        <li>
                                            <a href="/kool-line">Kool Line</a>
                                        </li>
                                        <li>
                                            <a href="/nutty-flavors">Nutty Flavors</a>
                                        </li>
                                        <li>
                                            <a href="/tobacco-flavors">Tobacco Flavors</a>
                                        </li>
                                        <li>
                                            <a href="/sweet-or-sour-flavors">Sweet or Sour Flavors</a>
                                        </li>
                                        <li>
                                            <a href="/tea-soda-and-liqueurs-flavors">Tea, Soda &amp; Liqueurs Flavors</a>
                                        </li>
                                        <li>
                                            <a href="/chocolate-and-vanilla-flavors">Chocolate &amp; Vanilla Flavors</a>
                                        </li>
                                        <li>
                                            <a href="/cupcake-flavors">Cupcake Flavors</a>
                                        </li>
                                    </ul>
                                </li>
                                
                                <li>
                                    <a href="/accessories">Accessories</a>
                                    <ul>
                                        <li>
                                            <a href="/merch">Merch</a>
                                        </li>
                                        
                                        <li>
                                            <a href="/j-wraps" class="parent">J-Wraps</a>
                                            <ul>
                                                <li>
                                                    <a href="/sigelei-150-j-wraps-2140343120">Sigelei 150 J-Wraps</a>
                                                </li>
                                                <li>
                                                    <a href="/istick-50-j-wraps-756680952">iStick 50 J-Wraps</a>
                                                </li>
                                                <li>
                                                    <a href="/istick-30-j-wraps-566565623">iStick 30 J-Wraps</a>
                                                </li>
                                            </ul>
                                        </li>
                                        
                                        <li>
                                            <a href="/drip-tips">Drip Tips</a>
                                        </li>
                                        
                                        <li>
                                            <a href="/miscellaneous">Miscellaneous</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        
                        <div id="tm_menu" class="nav__primary">
                            <ul class="menu">
                                <li>
                                    <a href="/kits">Kits</a>
                                </li>
                                
                                <li>
                                    <a href="/mods" class="active">Mods</a>
                                    <ul>
                                        <li>
                                            <a href="/temperature-control">Temperature Control</a>
                                        </li>
                                        <li>
                                            <a href="/vv-vw">VV/VW</a>
                                        </li>
                                        <li>
                                            <a href="/mechanical">Mechanical</a>
                                        </li>
                                    </ul>
                                </li>
                                
                                <li>
                                    <a href="/tanks-and-coils">Tanks &amp; Coils</a>
                                    <ul>
                                        <li>
                                            <a href="/tanks">Tanks</a>
                                        </li>
                                        <li>
                                            <a href="/coils">Coils</a>
                                        </li>
                                        <li>
                                            <a href="/rda-rba">RDA/RBA</a>
                                        </li>
                                    </ul>
                                </li>
                                
                                <li>
                                    <a href="/chargers-and-batteries">Chargers &amp; Batteries</a>
                                    <ul>
                                        <li>
                                            <a href="/chargers">Chargers</a>
                                        </li>
                                        <li>
                                            <a href="/batteries">Batteries</a>
                                        </li>
                                    </ul>
                                </li>
                                
                                <li>
                                    <a href="/e-liquids">E-Liquids</a>
                                    <ul>
                                        <li>
                                            <a href="/flavor-of-the-week">Flavor of the Week</a>
                                        </li>
                                        <li>
                                            <a href="/ogurt-line">Ogurt Line</a>
                                        </li>
                                        <li>
                                            <a href="/black-label">Black Label</a>
                                        </li>
                                        <li>
                                            <a href="/custard-line">Custard Line</a>
                                        </li>
                                        <li>
                                            <a href="/yogurt-flavors">Yogurt Flavors</a>
                                        </li>
                                        <li>
                                            <a href="/squatch-line">SQUATCH Line</a>
                                        </li>
                                        <li>
                                            <a href="/doughnut-flavors">Doughnut Flavors</a>
                                        </li>
                                        <li>
                                            <a href="/menthol-and-mint-flavors">Menthol &amp; Mint Flavors</a>
                                        </li>
                                        <li>
                                            <a href="/cereal-flavors">Cereal Flavors</a>
                                        </li>
                                        <li>
                                            <a href="/coffee-flavors">Coffee Flavors</a>
                                        </li>
                                        <li>
                                            <a href="/fruit-flavors">Fruit Flavors</a>
                                        </li>
                                        <li>
                                            <a href="/kool-line">Kool Line</a>
                                        </li>
                                        <li>
                                            <a href="/nutty-flavors">Nutty Flavors</a>
                                        </li>
                                        <li>
                                            <a href="/tobacco-flavors">Tobacco Flavors</a>
                                        </li>
                                        <li>
                                            <a href="/sweet-or-sour-flavors">Sweet or Sour Flavors</a>
                                        </li>
                                        <li>
                                            <a href="/tea-soda-and-liqueurs-flavors">Tea, Soda &amp; Liqueurs Flavors</a>
                                        </li>
                                        <li>
                                            <a href="/chocolate-and-vanilla-flavors">Chocolate &amp; Vanilla Flavors</a>
                                        </li>
                                        <li>
                                            <a href="/cupcake-flavors">Cupcake Flavors</a>
                                        </li>
                                    </ul>
                                </li>
                                
                                <li>
                                    <a href="/accessories">Accessories</a>
                                    <ul>
                                        <li>
                                            <a href="/merch">Merch</a>
                                        </li>
                                        
                                        <li>
                                            <a href="/j-wraps" class="parent">J-Wraps</a><ul>
                                                <li>
                                                    <a href="/sigelei-150-j-wraps-2140343120">Sigelei 150 J-Wraps</a>
                                                </li>
                                                <li>
                                                    <a href="/istick-50-j-wraps-756680952">iStick 50 J-Wraps</a>
                                                </li>
                                                <li>
                                                    <a href="/istick-30-j-wraps-566565623">iStick 30 J-Wraps</a>
                                                </li>
                                            </ul>
                                        </li>
                                        
                                        <li>
                                            <a href="/drip-tips">Drip Tips</a>
                                        </li>
                                        
                                        <li>
                                            <a href="/miscellaneous">Miscellaneous</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        @yield('content')

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <h5>Warning:</h5>
                        
                        <p style="line-height:18px!important">NOT FOR SALE TO MINORS | CALIFORNIA PROPOSITION 65 - Warning: This product contains nicotine, a chemical known to the state of California to cause birth defects or other reproductive harm.</p>
                        <p style="line-height:18px!important">VapingDog makes no claims that the electronic cigarette will cure a smokers addiction to nicotine; the electronic cigarettes it sells serves the same purpose as a tobacco cigarette- it delivers its user nicotine. If you do suffer from Nicotine Dependence and want to take steps to give up smoking or cut down the quantity of cigarettes you currently smoke, we recommend you visit your health care provider to discuss NRT (Nicotine Replacement Therapy).</p>
                        <p style="line-height:18px!important">VapingDog uses a non-affiliated third party company, Veratad Technologies, LLC, to verify that you are who you say you are and to confirm that you are 18 or older during the checkout process. Please review our <a href="privacy-policy">Privacy Policy</a> regarding our 3rd Party Age Verification and other important notices. Falsifying your age for the purpose of purchasing products from this web site is illegal and punishable by law!</p>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-xs-6 col-sm-3 col-md-3">
                        <div class="footer_box">
                            <h5>Information</h5>
                            
                            <ul class="list-unstyled">
                                <li>
                                    <a href="/delivery-and-returns-policy">Delivery &amp; Returns Policy</a>
                                </li>
                                <li>
                                    <a href="/privacy-policy">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="/terms-and-conditions">Terms &amp; Conditions</a>
                                </li>
                                <li>
                                    <a href="/sitemap">Site Map</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-xs-6 col-sm-3 col-md-3">
                        <div class="footer_box">
                            <h5>Extras</h5>
                            
                            <ul class="list-unstyled">
                                <li>
                                    <a href="/contact">Contact Us</a>
                                </li>
                                <li>
                                    <a href="/manufacturer">Brands</a>
                                </li>
                                <li>
                                    <a href="/voucher">Gift Vouchers</a>
                                </li>
                                <li>
                                    <a href="/affiliates">Affiliates</a>
                                </li>
                                <li>
                                    <a href="/special">Specials</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-xs-6 col-sm-3 col-md-3">
                        <div class="footer_box">
                            <h5>My Account</h5>
                            
                            <ul class="list-unstyled">
                                <li>
                                    <a href="/account">My Account</a>
                                </li>
                                <li>
                                    <a href="/order">Order History</a>
                                </li>
                                <li>
                                    <a href="/wishlist">Wish List</a>
                                </li>
                                <li>
                                    <a href="/newsletter">Newsletter</a>
                                </li>
                                <li>
                                    <a href="/return/add">Returns</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-xs-6 col-sm-3 col-md-3">
                        <div class="footer_box contact_page">
                            <h5>Stay Connected</h5>

                            <div class="icon2 fa fa-facebook">
                                <a href="https://www.facebook.com/vapingdog" target="_blank">Facebook Page</a>
                            </div>
                            
                            <div class="icon2 fa fa-facebook">
                                <a href="https://www.facebook.com/groups/vapingdog" target="_blank">Facebook Group</a>
                            </div>
                            
                            <div class="icon2 fa fa-twitter">
                                <a href="https://twitter.com/vapingdog" target="_blank">Twitter</a>
                            </div>
                            
                            <div class="icon2 fa fa-instagram">
                                <a href="https://www.instagram.com/vapingdog" target="_blank">Instagram</a>
                            </div>
                            
                            <div class="icon2 fa fa-youtube">
                                <a href="https://www.youtube.com/channel/UC6Biq07RDsER6lZ3Sz-3Aeg" target="_blank">YouTube</a>
                            </div>
                            
                            <br />
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="footer_box">
                            <img src="/img/theme/payment_Icon.png" border="0" />
                        </div>
                    </div>
                </div>

            </div>
            <div class="copyright">
                <div class="container">
                    Copyright VapingDog, &copy; 2016. All Rights Reserved.
                </div>
            </div>
        </footer>
        
        <script src="/js/theme/dog/livesearch.min.js" type="text/javascript"></script>
        <script src="/js/theme/dog/script.js" type="text/javascript"></script>
    </div>

    <div class="ajax-overlay"></div>
@endsection