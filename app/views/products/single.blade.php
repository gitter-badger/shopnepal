@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-9 col-sm-9">
            <div class="content-wrapper">
                <div class="item-container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="product col-md-8 service-image-left">
                                <div class="text">
                                    <img class="img-responsive" id="item-display" src="http://www.corsair.com/Media/catalog/product/g/s/gs600_psu_sideview_blue_2.png" alt="" />
                                </div>
                            </div>
                            <div class="container service1-items col-sm-6 col-md-6 pull-left">
                                <div class="text">
                                    <a id="item-1" class="service1-item">
                                        <img src="http://www.corsair.com/Media/catalog/product/g/s/gs600_psu_sideview_blue_2.png" alt=""></img>
                                    </a>
                                    <a id="item-2" class="service1-item">
                                        <img src="http://www.corsair.com/Media/catalog/product/g/s/gs600_psu_sideview_blue_2.png" alt=""></img>
                                    </a>
                                    <a id="item-3" class="service1-item">
                                        <img src="http://www.corsair.com/Media/catalog/product/g/s/gs600_psu_sideview_blue_2.png" alt=""></img>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="product-title">Corsair GS600 600 Watt PSU</div>
                            <div class="product-desc">The Corsair Gaming Series GS600 is the ideal price/performance choice for mid-spec gaming PC</div>
                            <div class="product-rating"><i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star-o"></i> </div>
                            <hr>
                            <div class="product-price">$ 1234.00</div>
                            <div class="product-stock">In Stock</div>
                            <hr>
                            <div class="btn-group cart">
                                <button type="button" class="btn btn-success">
                                    Add to cart
                                </button>
                            </div>
                            <div class="btn-group wishlist">
                                <button type="button" class="btn btn-danger">
                                    Add to wishlist
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="col-md-12 product-info">
                        <ul id="myTab" class="nav nav-tabs nav_tabs">

                            <li class="active"><a href="#service-one" data-toggle="tab">DESCRIPTION</a></li>
                            <li><a href="#service-two" data-toggle="tab">PRODUCT INFO</a></li>
                            <li><a href="#service-three" data-toggle="tab">REVIEWS</a></li>

                        </ul>
                        <div id="myTabContent" class="tab-content">
                            <div class="tab-pane fade in active" id="service-one">

                                <section class="container product-info">
                                    The Corsair Gaming Series GS600 power supply is the ideal price-performance solution for building or upgrading a Gaming PC. A single +12V rail provides up to 48A of reliable, continuous power for multi-core gaming PCs with multiple graphics cards. The ultra-quiet, dual ball-bearing fan automatically adjusts its speed according to temperature, so it will never intrude on your music and games. Blue LEDs bathe the transparent fan blades in a cool glow. Not feeling blue? You can turn off the lighting with the press of a button.

                                    <h3>Corsair Gaming Series GS600 Features:</h3>
                                    <li>It supports the latest ATX12V v2.3 standard and is backward compatible with ATX12V 2.2 and ATX12V 2.01 systems</li>
                                    <li>An ultra-quiet 140mm double ball-bearing fan delivers great airflow at an very low noise level by varying fan speed in response to temperature</li>
                                    <li>80Plus certified to deliver 80% efficiency or higher at normal load conditions (20% to 100% load)</li>
                                    <li>0.99 Active Power Factor Correction provides clean and reliable power</li>
                                    <li>Universal AC input from 90~264V — no more hassle of flipping that tiny red switch to select the voltage input!</li>
                                    <li>Extra long fully-sleeved cables support full tower chassis</li>
                                    <li>A three year warranty and lifetime access to Corsair’s legendary technical support and customer service</li>
                                    <li>Over Current/Voltage/Power Protection, Under Voltage Protection and Short Circuit Protection provide complete component safety</li>
                                    <li>Dimensions: 150mm(W) x 86mm(H) x 160mm(L)</li>
                                    <li>MTBF: 100,000 hours</li>
                                    <li>Safety Approvals: UL, CUL, CE, CB, FCC Class B, TÜV, CCC, C-tick</li>
                                </section>

                            </div>
                            <div class="tab-pane fade" id="service-two">

                                <section class="container">

                                </section>

                            </div>
                            <div class="tab-pane fade" id="service-three">

                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop