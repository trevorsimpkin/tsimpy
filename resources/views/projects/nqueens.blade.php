@extends('layouts.project')
@section('title')
    <title>Trevor Simpkin - N-Queens</title>
@stop
@section('content')
    <div class="col-lg-8">
        <h1>N-Queens Using a Genetic Algorithm</h1>
        <hr>

        <img class="img-responsive" src="/images/nqueensheader.png" width="800" alt="">

        <hr>
        <p class="lead">The N-Queens problem is a classic algorithm problem where one tries to place N queens on a NxN chessboard with all queens in a position such that they cannot attack any other queens. In a Brooklyn College Artificial Intelligence course I was asked to solve the N-Queens problem using a genetic algorithm (GA). To learn more you can visit <a href="https://en.wikipedia.org/wiki/Eight_queens_puzzle">Eight Queens</a> or <a href="https://en.wikipedia.org/wiki/Genetic_algorithm">Genetic Algorithm</a> Wikipedia pages.</p>
        <p>A genetic algorithm creates populations of solutions and mates them with one another to create new generations that are hopefully closer to a solution based on some fitness level. A genetic algorithm treats possible solutions like genes then uses a fitness function to measure how close a gene is to a solution. Genes "mate" with one another based on some selection method and their children create the next "generation". Random mutations are also allowed on children and the probability of a mutation is based on some predetermined mutation rate. Source code for my implementation can be found  <a href="https://github.com/trevorsimpkin/NQueensConsole">here</a>.</p>
        <p>We were required to used the roulette selection method which applies a probability to each gene based on its fitness, (a higher fitness results in a higher probability that the gene will be chosen as a parent gene and pass some of its traits down to the next generation). I also chose to use the truncation selection method, which takes the top half of genes with highest fitness during each new generation. </p>
        <p>The algorithm is relatively successful with both selection methods converging with up to 100 queens with at least 90% of queens in a non-attacking position.</p>
        <p>I am currently implementing a new version in JavaFX2 that with utilize a useful GUI. I would also like to experiment with other selection methods in the future.</p>
    </div>
    <div class="col-md-4">
        <div class="well">
            <h4>Other Projects</h4>
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-unstyled">
                        <li><a href="/projects/gameoflife">Game of Life</a>
                        </li>
                        <li>N-Queens
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
                        <li><a href="/projects/pca">PCA Site</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /.row -->
        </div>

    </div>
    @stop