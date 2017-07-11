@extends('layouts.project')
@section('title')
    <title>Trevor Simpkin - City Rocks</title>
@stop
@section('content')
    <div class="col-lg-8">

        <!-- Blog Post -->

        <!-- Title -->
        <h1>City Rocks Mentor</h1>

        <!-- Author -->
        <hr>

        <!-- Date/Time -->
        <img class="img-responsive" src="/trevorclimb.png" width ="800" alt="cityrocks">

        <hr>

        <!-- Post Content -->
        <p class="lead">I have been a City Rocks mentor for the past two years. "The City Rocks program empowers students to develop self-confidence, creativity, and the ability to succeed through the sport of rock climbing."</p>
        <p>As an avid rock climber and someone who believes in the power of mentorship, being a City Rocks mentor was a natural fit for me. It has been a true joy to mentor a local high school student and see him grow as a climber and a young man. We meet at least twice a month, but usually every week to climb, do school work, and/or just hang out. My current mentee is going off to college in the fall and I will be starting a new mentoring relationship next year!</p>
        <p>Besided the rewarding time with my mentee, the program has allowed multiple unique experiences. I have had the chance to speak at recruitment and fundraising events, be interviewed by  <a href="https://rockandice.com">Rock and Ice Magazine</a>, and be a part of a <a href="news.com">local news story</a>. </p>
        <p>To learn more about the program or to donate please visit the <a href="https://bkbf.org">Brooklyn Boulders Foundation website</a>.</p>
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
                        <li>City Rocks
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