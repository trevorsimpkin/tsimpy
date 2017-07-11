@extends('layouts.project')
@section('title')
    <title>Trevor Simpkin - Undergraduate Research</title>
@stop
@section('content')
    <div class="col-lg-8">

        <!-- Blog Post -->

        <!-- Title -->
        <h1>Undergraduate Research</h1>

        <!-- Author -->
        <hr>

        <!-- Date/Time -->
        <img class="img-responsive" src="/posterheader.png" width="800" alt="">

        <hr>

        <!-- Post Content -->
        <p class="lead">As an undergrad at Seattle University, I spent two consecutive summers working on research projects with the physics department faculty. I helped do research on two important projects pertaining to astronomy, the early earth atmosphere, and light scattering. To learn more about undergraduate research at Seattle U, visit their <a href="https://www.seattleu.edu/scieng/undergraduate-research/">webpage</a>.</p>
        <p>My first summer of research I was on a team of four students. During our research we used data from a telescope in New Mexico that captured images of "nearby" dwarf galaxies. Our goal over the summer was to use various methods to categorize and analyze the properties of the galaxies in order to assist in future research. Our team spent the summer designing and building an <a href="https://en.wikipedia.org/wiki/Stellar_isochrone">isochrone</a> generator in MATLAB and doing photo analysis and reduction using specialized software packages.</p>
        <p>The next summer I worked independently with a faculty member on research pertaining to the <a href="https://en.wikipedia.org/wiki/Faint_young_Sun_paradox">"The early faint sun paradox"</a>. Our research was focused on carbonaceous soot particles and their light scattering properties. My primary responsibility was in the design of a MATLAB program that was intended to model 3D soot particles using cluster-cluster aggregation (CCA), utilizing an algorithm for 2D CCA developed by Gould and Tobotchnik. This model was meant to be used with legacy code written in Fortran in order to to analyze the light scattering properties of our generated models. </p>
        <p>At the end of both summers I presented our findings at an annual undergraduate research conference. A PDF of my poster for the light scattering research can be found <a href="/AerosolResearchWithTrevorSimpkin-SU2012Poster.pdf">here</a>. </p>
        <!-- Posted Comments -->
    </div>

    <!-- Blog Sidebar Widgets Column -->
    <div class="col-md-4">


        <!-- Blog Categories Well -->
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
                        <li>UG Research
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul class="list-unstyled">
                        <li><a href="/projects/kwd">KWD</a>
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