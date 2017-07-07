@extends('layouts.project')
@section('title')
    <title>Trevor Simpkin - PCA website</title>
@stop
@section('content')
    <div class="col-lg-8">

        <!-- Blog Post -->

        <!-- Title -->
        <h1>PCA Website</h1>

        <!-- Author -->

        <!-- Date/Time -->
        <img class="img-responsive" src="/pcaprojectpic.png" alt="">

        <hr>

        <!-- Post Content -->
        <p class="lead">Currently in the process of designing a new company website for my current employer. Using Laravel as a framework, I was able to design an easy to use site that satisfied the requirement that a user could add content without any web design experience.</p>
        <p>The current company website uses flash and its content had not been updated in some time. I was asked to create a simple, professional site that would be mobile-friendly and easy to update. I delivered the product on time and my employer was happy with the result. </p>
        <p>The site should be up soon, once all content is created and added.</p>
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
                        <li><a href="/projects/ugresearch">UG Research</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul class="list-unstyled">
                        <li><a href="/projects/kwd">KWD</a>
                        </li>
                        <li><a href="/projects/cityrocks">City Rocks</a></li>
                        <li>PCA Site</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /.row -->
        </div>

    </div>
    @stop