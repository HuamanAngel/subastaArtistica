@extends('layouts.app')

@section('share-content')
    <meta property="og:url" content="http://dremate.herokuapp.com/" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="dRemate" />
    <meta property="og:description" content="Pagina de subasta online para cualquier tipo de persona" />
    <link rel="stylesheet" href="css/corazon-icon.css">
@endsection


@section('cont_cabe')
    <title>Productos Populares</title>
@endsection

@section('contenidoJS')

@livewireStyles

@endsection

@section('contenidoCSS')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/styleProductosPopulares.css') }}">
    <link rel="stylesheet" href="css/styleProductosPopulares.css">
@endsection


@section('contenido')


<div>
    <livewire:producto-popular />
    <div class="tcb-product-slider">
        <div class="container">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <div class="row">
                            <div class="ccol-xl-6 col-xxl-3">
                                <div class="tcb-product-item">
                                    <div class="tcb-product-photo">
                                        <a href="#"><img src="https://i.imgur.com/Z7eqMnj.jpg" class="img-responsive" alt="a" /></a>
                                    </div>
                                    <div class="tcb-product-info">
                                        <div class="tcb-product-title">
                                            <h4><a href="#">Olympus Photo Camera </a></h4></div>
                                        
                                        <div class="tcb-hline"></div>
                                        <div class="tcb-product-price">
                                            $ 495.00 (17% off)
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-xxl-3">
                                <div class="tcb-product-item">
                                    <div class="tcb-product-photo">
                                        <a href="#"><img src="https://i.imgur.com/fCrZot6.jpg" class="img-responsive" alt="a" /></a>
                                    </div>
                                    <div class="tcb-product-info">
                                        <div class="tcb-product-title">
                                            <h4><a href="#">Coca Cola Bottle</a></h4></div>
                                        <div class="tcb-hline"></div>
                                        <div class="tcb-product-price">
                                            $ 99.00 (21% off)
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-xxl-3">
                                <div class="tcb-product-item">
                                    <div class="tcb-product-photo">
                                        <a href="#"><img src="https://i.imgur.com/kTmJp8W.jpg" class="img-responsive" alt="a" /></a>
                                    </div>
                                    <div class="tcb-product-info">
                                        <div class="tcb-product-title">
                                            <h4><a href="#">Jewel from Italy</a></h4></div>
                                        <div class="tcb-product-rating">
                                        </div>
                                        <div class="tcb-hline"></div>
                                        <div class="tcb-product-price">
                                            $ 999.00 (33% off)
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-xxl-3">
                                <div class="tcb-product-item">
                                    <div class="tcb-product-photo">
                                        <a href="#"><img src="https://i.imgur.com/sMwmKmh.jpg" class="img-responsive" alt="a" /></a>
                                    </div>
                                    <div class="tcb-product-info">
                                        <div class="tcb-product-title">
                                            <h4><a href="#">White Pepper</a></h4></div>
                                        <div class="tcb-hline"></div>
                                        <div class="tcb-product-price">
                                            $ 199.00 (37% off)
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-xl-6 col-xxl-3">
                                <div class="tcb-product-item">
                                    <div class="tcb-product-photo">
                                        <a href="#"><img src="https://i.imgur.com/RuPhz54.jpg" class="img-responsive" alt="a" /></a>
                                    </div>
                                    <div class="tcb-product-info">
                                        <div class="tcb-product-title">
                                            <h4><a href="#">Belt Improted From Japan</a></h4></div>
                                        <div class="tcb-product-rating">
                                        </div>
                                        <div class="tcb-hline"></div>
                                        <div class="tcb-product-price">
                                            $ 49.00 (40% off)
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-xxl-3">
                                <div class="tcb-product-item">
                                    <div class="tcb-product-photo">
                                        <a href="#"><img src="https://i.imgur.com/e4ARfEJ.jpg" class="img-responsive" alt="a" /></a>
                                    </div>
                                    <div class="tcb-product-info">
                                        <div class="tcb-product-title">
                                            <h4><a href="#">Tomato</a></h4></div>
                                        <div class="tcb-hline"></div>
                                        <div class="tcb-product-price">
                                            $ 9.00
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-xxl-3">
                                <div class="tcb-product-item">
                                    <div class="tcb-product-photo">
                                        <a href="#"><img src="https://i.imgur.com/ZlchtwK.jpg" class="img-responsive" alt="a" /></a>
                                    </div>
                                    <div class="tcb-product-info">
                                        <div class="tcb-product-title">
                                            <h4><a href="#">Tape Line</a></h4></div>
                                        <div class="tcb-hline"></div>
                                        <div class="tcb-product-price">
                                            $ 39.00 (15% off)
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-xxl-3">
                                <div class="tcb-product-item">
                                    <div class="tcb-product-photo">
                                        <a href="#"><img src="https://i.imgur.com/GRPrGN6.jpg" class="img-responsive" alt="a" /></a>
                                    </div>
                                    <div class="tcb-product-info">
                                        <div class="tcb-product-title">
                                            <h4><a href="#">Test Glasses For Lab</a></h4></div>
                                        <div class="tcb-hline"></div>
                                        <div class="tcb-product-price">
                                            $ 11,999.00 (37% off)
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-xl-6 col-xxl-3">
                                <div class="tcb-product-item">
                                    <div class="tcb-product-photo">
                                        <a href="#"><img src="https://i.imgur.com/Ds5mtGy.jpg" class="img-responsive" alt="a" /></a>
                                    </div>
                                    <div class="tcb-product-info">
                                        <div class="tcb-product-title">
                                            <h4><a href="#">Jewel From India</a></h4></div>
                                        <div class="tcb-hline"></div>
                                        <div class="tcb-product-price">
                                            $ 299.00 (54% off)
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-xxl-3">
                                <div class="tcb-product-item">
                                    <div class="tcb-product-photo">
                                        <a href="#"><img src="https://i.imgur.com/e7IYyso.jpg" class="img-responsive" alt="a" /></a>
                                    </div>
                                    <div class="tcb-product-info">
                                        <div class="tcb-product-title">
                                            <h4><a href="#">Red Pepper</a></h4></div>
                                        <div class="tcb-hline"></div>
                                        <div class="tcb-product-price">
                                            $ 5.00 (11% off)
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-xxl-3">
                                <div class="tcb-product-item">
                                    <div class="tcb-product-photo">
                                        <a href="#"><img src="https://i.imgur.com/vuRE1W6.jpg" class="img-responsive" alt="a" /></a>
                                    </div>
                                    <div class="tcb-product-info">
                                        <div class="tcb-product-title">
                                            <h4><a href="#">Pro Cell Batteries </a></h4></div>
                                        <div class="tcb-hline"></div>
                                        <div class="tcb-product-price">
                                            $ 19.00 (63% off)
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-xxl-3">
                                <div class="tcb-product-item">
                                    <div class="tcb-product-photo">
                                        <a href="#"><img src="https://i.imgur.com/UibcRla.jpg" class="img-responsive" alt="a" /></a>
                                    </div>
                                    <div class="tcb-product-info">
                                        <div class="tcb-product-title">
                                            <h4><a href="#">Eye Glasses </a></h4></div>
                                        <div class="tcb-hline"></div>
                                        <div class="tcb-product-price">
                                            $ 129.00 (29% off)
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>


@livewireScripts

@endsection

@section('contenidoJSabajo')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


@endsection
