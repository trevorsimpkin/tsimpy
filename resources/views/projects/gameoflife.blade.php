@extends('layouts.project')
@section('title')
    <title>Trevor Simpkin - Game of Life</title>
@stop
@section('content')
    <div class="col-lg-8">

        <!-- Blog Post -->

        <!-- Title -->
        <h1>Game Of Life</h1>

        <!-- Author -->
        <hr>

        <!-- Date/Time -->
        <img class="img-responsive" src="http://placehold.it/900x300" alt="">

        <hr>

        <!-- Post Content -->
        <p class="lead">A graduate course in artificial intelligence at Brooklyn College sparked my interest in the various types of cellular automata. It fascinated me that a few simple rules could exhibit complex behaviors that imitate life. To learn more about cellular automata visit the <a href="#">Wikipedia page</a>.</p>
        <p>We discussed the importance of cellular automata (CA) and looked at a few examples, but after the course I wanted to develop my own. I had not done much GUI or game programming but had some experience with the Java Swing package. After a little research I decided to develop a simple one dimensional CA in JavaFX2. Source code can be found  <a href="#">here</a>.</p>
        <p>While developing the one dimensional CA, I realized JavaFX2 was not the best package for almost any task (haha) and became interested in web game development and found Phaser to be a good framework to use. Conway's Game of Life seemed like a natural first project for Phaser.  </p>
        <p>I would like to implement a few improvements in future generations of my Game of Life app. First, I would like to try out a different algorithm for evaluating the state of neighboring squares. While my current version is working fine, it is not the most efficient way to evaluate the future state of each square. As of now, each frame iterates through each grid square and counts the the number of on neighbors to determine the state for the next frame. There are more advanced methods for evaluating neighbors that avoid evaluating squares that have no chance of changing states, and utilize neighbor counts from other squares to avoid repetition. </p>
        <p>The link to my current version of Game of Life can be found <a href="#">here</a>. The source code is <a href="#">here</a>.</p>


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
                        <li>Game of Life
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