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
        <img class="img-responsive" src="/images/pcaprojectpic.png" alt="">

        <hr>

        <!-- Post Content -->
        <p class="lead">I designed a new company website for my current employer. Using Laravel as a framework, I was able to design an easy to use site that satisfied the requirements of the stakeholders.The company president did not want to use a template from any online template engines, so I was tasked with implementing the company's design ideas on my own and using various open source technologies. I updated my design through multiple iterations based on the desires of the president and other personnel until a satisfactory product was completed </p>
        <p>The previous company website used flash and its content had not been updated in some time. I was asked to create a simple, professional site that would be mobile-friendly and easy to update. Much of the content and design was original and I was tasked with finding suitable photos, suitable texts, and embedding and customizing open source, third party code for things like the interactive U.S. map. I delivered the product on time and the president and all interested parties were extremely happy with the result.</p>
        <p>The company's new URL and site can be found <a href="http://www.pcairnoisetraffic.com">here.</a></p>
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