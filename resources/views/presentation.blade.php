@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <i class="fa fa-lightbulb-o" aria-hidden="true"></i>
                        <p>Savez-vous combien vous dépensez <br>actuellement en énergie électrique ? </p>
                        <div class="carousel-caption">
                        </div>
                    </div>

                    <div class="item">
                        <i class="glyphicon glyphicon-ok" aria-hidden="true"></i>
                        <p>Pour le savoir : <br>Enregistrez-vous</p>
                        <div class="carousel-caption">
                        </div>
                    </div>

                    <div class="item">
                        <i class="fa fa-tachometer" aria-hidden="true"></i>
                        <p>Notre compteur vous montre <br>où vous vous situez</p>
                        <div class="carousel-caption">
                        </div>
                    </div>
                    <div class="item">
                        <i class="glyphicon glyphicon-piggy-bank" aria-hidden="true"></i>
                            <p>Visualisez <br>vos économies</p>
                        <div class="carousel-caption">
                        </div>
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
    </div>
@endsection
