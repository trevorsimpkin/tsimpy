@extends('layouts.project')
@section('title')
    <title>Trevor Simpkin - Kelvin Water Dropper</title>
@stop
@section('content')
    <div class="col-lg-8">

        <h1>Kelvin Water Dropper</h1>

        <hr>

        <img class="img-responsive kwdgif" src="/images/kwdgifcrop.gif" width="900" alt="Kelvin Water Dropper">

        <hr>

        <p class="lead">During an independent study class at Seattle U, I built a Kelvin Water Droper (KWD) to use for instruction in undergraduate electricity and magnetism courses. </p>
        <p>After an attempt to build a KWD in an advanced physics lab, Professor Andy Kim agreed to supervise an independent study project. Using materials from the local hardware store and a few spheres machined by the SU Engineering Department, I was able to construct a working KWD that is still used today for demonstrations.</p>
        <p>To learn more about the Kelvin Water Dropper visit <a href=https://en.wikipedia.org/wiki/Kelvin_water_dropper>Kelvin Water Dropper</a>.</p>
        <p></p>

    </div>

    <div class="col-md-4">
        <div class="well">
            <h4>Other Projects</h4>
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-unstyled">
                        <li><a href="/projects/gameoflife">Game of Life</a>
                        </li>
                        <li><a href="/projects/nqueens">N-Queens</a>
                        </li>
                        <li><a href="/projects/dwa">Dynamic Web Apps</a>
                        </li>
                        <li><a href="/projects/ugresearch">UG Research</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul class="list-unstyled">
                        <li>KWD
                        </li>
                        <li><a href="/projects/cityrocks">City Rocks</a>
                        </li>
                        <li><a href="/projects/pca">PCA Site</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /.row -->
        </div>

    </div>
    @stop