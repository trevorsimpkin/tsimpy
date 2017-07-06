@extends('layouts.project')
@section('title')
    <title>Trevor Simpkin - Dynamic Web Applications</title>
@stop
@section('content')
    <div class="col-lg-8">

        <!-- Blog Post -->

        <!-- Title -->
        <h1>Dynamic Web Applications Portfolio</h1>

        <!-- Author -->
        <hr>

        <!-- Date/Time -->
        <img class="img-responsive" src="http://placehold.it/900x300" alt="">

        <hr>

        <!-- Post Content -->
        <p class="lead">While attending the Harvard Extension School, I took a class on the design of Dynamic Web Applications. During the course we were asked to create a portfolio consisting of four web applications. If you would like to skip the description and view the work now you can start here: <a href="http://p1.trevorsimpkin.com">Trevor's DWA Portfolio</a>.</p>
        <p>This was my first experience with dynamic web applications and the use of <a href="#">Laravel</a>. We were asked to use a single bootstrap theme throughout the course and each project was a separate Laravel app. <a href="http://p1.trevorsimpkin.com">Project one</a> was a basic information page that we made in the first week. <a href="http://p2.trevorsimpkin.com">Project two</a> was a XKCD password generator to help generate long, easy to remember passwords. <a href="http://p3.trevorsimpkin.com">Project three</a> was a "developer's best friend" app that utilized third party packages to create a useful site for generating placeholder content when developing a web page. I received high marks due to my addition of the cat image generator that I added. The         <p>This was my first experience with dynamic web applications and the use of <a href="#">Laravel</a>. We were asked to use a single bootstrap theme throughout the course and each project was a separate Laravel app. <a href="http://p1.trevorsimpkin.com">Project one</a> was a basic information page that we made in the first week. <a href="http://p2.trevorsimpkin.com">Project two</a> was a XKCD password generator to help generate long, easy to remember passwords. <a href="http://p3.trevorsimpkin.com">Project three</a> was a "developer's best friend" app that utilized third party packages to create a useful site for generating placeholder content when developing a web page. I received high marks due to my addition of the cat image generator that I added. The <a href="http://p4.trevorsimpkin.com">Final Project</a> was an app of our choosing that needed to incorporate at least two databases with different types of relationships (one-to-one, many-to-many, one-to-many), user authentication, and all of the CRUD operations. I chose to implement a site for logging climbing routes. </p>
        <p>I received an A on the project and in the course, but more importantly I have been able to use what I learned to develop multiple sites. Including this one!</p>

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
                        <li>Dynamic Web Apps
                        </li>
                        <li><a href="/projects/ugresearch">UG Research</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul class="list-unstyled">
                        <li><a href="/projects/kwd">KWD</a>
                        </li>
                        <li><a href="/projects/cityrocks">City Rocks</a>
                        </li>
                        <li><a href="/projects/pcp">Online Game</a>
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