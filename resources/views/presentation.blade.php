@extends('layouts.app')

@section('content')
<main>
    <div class="container">
        <div class="row">
            <div class="col-xs-12" id="slider">
                <!-- slider -->
                <div class="row">
                    <div class="col-sm-12" id="carousel-bounding-box">
                        <div class="carousel slide" id="myCarousel">
                            <!-- Carousel items -->
                            <div class="carousel-inner">
                                <div class="active item" data-slide-number="0">
                                    <p>Ce site vous permet de connaitre votre consommation  en Euros. L'information vous permet de suivre  votre  consommation precedente.</p>
                                </div>
                                <div class="item" data-slide-number="1">
                                    <p>Access simplifié a votre consommation en €</p>
                                </div>
                                <div class="item" data-slide-number="2">
                                    <p>Connaître leur consommation actuelle en euro du jour, de la semaine, du mois, ou de l'année</p>
                                </div>
                                <div class="item" data-slide-number="3">
                                    <p>Vous aide à mieux gérer  la consommation de votre énérgie.</p>
                                </div>
                            </div><!-- Carousel nav -->
                            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                <!-- <span class="glyphicon glyphicon-chevron-left"></span> -->
                            </a>
                            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                <!-- <span class="glyphicon glyphicon-chevron-right"></span> -->
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <button id="buttonlog" type="button" name="button">s'inscrire</button>
        </div><!--/Slider-->
    </div>
</main>
@endsection
