
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Trevor Simpkin</title>

    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="bootstrap/css/scrolling-nav.css" rel="stylesheet">
    <link href="css/trevor.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

<!-- Intro Section -->
<section id="intro" class="intro-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
               <h1>Trevor $impkin</h1>
                <p><a class="page-scroll" href="#about">About</a> / <a class="page-scroll" href="#projects">Portfolio</a> / <a class="page-scroll" href="#contact">Contact</a> </p>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="about-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>About</h1>
            </div>
        </div>
        <div class="col-lg-6 about-photo">
            <img class="img-responsive" src="http://previews.123rf.com/images/anitabonita/anitabonita1202/anitabonita120200009/12537790-smiling-old-man-holding-computer-mouse-he-is-working-on-a-desktop-Stock-Photo.jpg"/>
        </div>
        <div class="col-lg-6 well about-description">
            <p>Thanks for visiting my site! I am originally from the Seattle area, currently living in Brooklyn, NY. I have a diverse academic background that includes a BS in Physics, a ton of computer science work, and will be obtaining my MS in Information Systems from Brooklyn College in December 2017.</p>
            <p>I love programming, web development, and rock climbing!</p>
            <p>Some personal, academic, and professional projects can be found below! Also, feel free to contact me using the form at the bottom of the page.</p>
            <p>-Trevor Simpkin</p>
        </div>
    </div>
</section>

<!-- Portfolio Grid Section -->
<section id="projects" class="services-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1>Portfolio</h1>
            </div>
        </div>
        <div class="container background well">
        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-3 col-sm-9 portfolio-item">
                <div class="thumbnail">
                    <a href="/projects/gameoflife">
                        <img class="img-responsive" src="thumbnail1.png" alt="">
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-9 portfolio-item">
                <div class="thumbnail">
                    <a href="/projects/nqueens">
                        <img class="img-responsive" src="thumbnail2.png" alt="">
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-9 portfolio-item">
                <div class="thumbnail">
                    <a href="/projects/dwa">
                        <img class="img-responsive" src="thumbnail3.png" alt="">
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-9 portfolio-item">
                <div class="thumbnail">
                    <a href="/projects/pca">
                        <img class="img-responsive" src="thumbnail7.png" alt="">
                    </a>
                </div>
            </div>

        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-3 col-sm-9 portfolio-item">
                <div class="thumbnail">
                    <a href="/projects/ugresearch">
                        <img class="img-responsive" src="thumbnail4.png" alt="">
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-9 portfolio-item">
                <div class="thumbnail">
                    <a href="/projects/kwd">
                        <img class="img-responsive" src="thumbnail5.png" alt="">
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-9 portfolio-item">
                <div class="thumbnail">
                    <a href="/projects/cityrocks">
                        <img class="img-responsive" src="thumbnail6.png" alt="">
                    </a>
                </div>
            </div>

            <div class="col-md-3 col-sm-9 portfolio-item">
                <div class="thumbnail">
                    <a href="https://github.com/trevorsimpkin">
                        <img class="img-responsive" src="thumbnail10.png" alt="">
                    </a>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-3 col-sm-9 portfolio-item">
                <div class="thumbnail">
                    <a href="https://www.linkedin.com/in/trevor-simpkin-a284aa64/">
                        <img class="img-responsive" src="thumbnail8.png" alt="">
                    </a>
                </div>
            </div>

            </div>
            </div>
    </div>

</section>

<!-- Contact Section -->
<section id="contact" class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Contact</h1>
            </div>
        </div>
        @if(Session::get('message') != null)
            <div class='message'><i class="glyphicon glyphicon-thumbs-up"></i>{{ Session::get('message') }}</div>
        @endif
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        <form method='POST' action='#contact' class="well form-horizontal" id="contact_form">
            {!! csrf_field() !!}
            <fieldset>

                <div class="form-group">
                    <label class="col-md-4 control-label">First Name</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <!-- Text input<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>-->
                            <input  name="first_name" id="first_name" placeholder="First Name" class="form-control"  type="text">
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-md-4 control-label" >Last Name</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <!-- Text input <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span> -->
                             <input name="last_name" id ="last_name" placeholder="Last Name" class="form-control"  type="text">
                         </div>
                     </div>
                 </div>

                 <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label">E-Mail</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <!-- Text input    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>-->
                                <input name="email" id="email" placeholder="E-Mail Address" class="form-control"  type="text">
                            </div>
                        </div>
                    </div>


                    <!-- Text input-->

                <div class="form-group">
                    <label class="col-md-4 control-label">Phone #</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <!-- Text input
                               <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span> -->
                               <input name="phone" id="phone" placeholder="(555)555-5555" class="form-control" type="text">
                           </div>
                       </div>
                   </div>


                   <!-- Text area -->

                <div class="form-group">
                    <label class="col-md-4 control-label">Message</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <!-- Text input  <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>-->
                              <textarea class="form-control" name="message" id="message" placeholder="Message"></textarea>
                          </div>
                      </div>
                  </div>

                  <!-- Success message
                  <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div>
                   -->
                <!-- Button -->
                <div class="form-group">
                    <label class="col-md-4 control-label"></label>
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-info" >Send <span class="glyphicon glyphicon-send"></span></button>
                     </div>
                 </div>

             </fieldset>
         </form>
     </div>
     </div><!-- /.container -->
</section>

<!-- jQuery -->
<script src="bootstrap/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="bootstrap/js/bootstrap.min.js"></script>

<!-- Scrolling Nav JavaScript -->
<script src="bootstrap/js/jquery.easing.min.js"></script>
<script src="bootstrap/js/scrolling-nav.js"></script>

</body>

</html>
