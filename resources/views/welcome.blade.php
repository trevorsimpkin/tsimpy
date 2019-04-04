
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-112387224-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-112387224-1');
    </script>
    <script src="//cdn.jsdelivr.net/npm/phaser@3.11.0/dist/phaser.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Trevor Simpkin</title>

    <!-- Bootstrap Core CSS -->
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/bootstrap/css/scrolling-nav.css" rel="stylesheet">
    <link href="/css/trevor.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<script type="text/javascript">

var config = {
type: Phaser.AUTO,
width: 1200,
height: 300,
parent: 'game',
physics: {
default: 'arcade',
arcade: {
gravity: { y: 300 },
debug: false
}
},
scene: {
preload: preload,
create: create,
update: update
}
};

var player;
var stars;
var bombs;
var platforms;
var cursors;
var score = 0;
var gameOver = false;
var scoreText;

var game = new Phaser.Game(config);

function preload ()
{
this.load.image('sky', 'assets/sky.png');
this.load.image('ground', 'assets/platform.png');
this.load.image('star', 'assets/door.png');
//this.load.image('bomb', 'assets/bomb.png');
this.load.spritesheet('dude', 'assets/dude.png', { frameWidth: 32, frameHeight: 48 });
}

function create ()
{
//  A simple background for our game
this.add.image(1200, 300, 'sky');

//  The platforms group contains the ground and the 2 ledges we can jump on
platforms = this.physics.add.staticGroup();

//  Here we create the ground.
//  Scale it to fit the width of the game (the original sprite is 400x32 in size)
platforms.create(600, 345, 'ground').setScale(3).refreshBody();

//  Now let's create some ledges
//platforms.create(400, 100, 'ground');

// The player and its settings
    var pos;
    if(window.screen.availWidth<1200){
        pos = window.screen.availWidth/2;
    } else {
        pos = 600;
    }
player = this.physics.add.sprite(pos, 200, 'dude');

//  Player physics properties. Give the little guy a slight bounce.
player.setBounce(0.2);
player.setCollideWorldBounds(true);

//  Our player animations, turning, walking left and walking right.
this.anims.create({
key: 'left',
frames: this.anims.generateFrameNumbers('dude', { start: 0, end: 3 }),
frameRate: 10,
repeat: -1
});

this.anims.create({
key: 'turn',
frames: [ { key: 'dude', frame: 4 } ],
frameRate: 20
});

this.anims.create({
key: 'right',
frames: this.anims.generateFrameNumbers('dude', { start: 5, end: 8 }),
frameRate: 10,
repeat: -1
});

//  Input Events
cursors = this.input.keyboard.createCursorKeys();

//  Some stars to collect, 12 in total, evenly spaced 70 pixels apart along the x axis
stars = this.physics.add.group({
key: 'star',
repeat: 0,
setXY: { x: 800, y: 0, stepX: 70 }
});

stars.children.iterate(function (child) {

//  Give each star a slightly different bounce
child.setBounceY(Phaser.Math.FloatBetween(0.1, 0.2));

});

//bombs = this.physics.add.group();

//  The score
//scoreText = this.add.text(16, 16, 'score: 0', { fontSize: '32px', fill: '#000' });

//  Collide the player and the stars with the platforms
this.physics.add.collider(player, platforms);
this.physics.add.collider(stars, platforms);
//this.physics.add.collider(bombs, platforms);

//  Checks to see if the player overlaps with any of the stars, if he does call the collectStar function
this.physics.add.overlap(player, stars, collectStar, null, this);

//this.physics.add.collider(player, bombs, hitBomb, null, this);
}

function update ()
{
if (gameOver)
{
    location.reload();
    return;
}

if (cursors.left.isDown)
{
player.setVelocityX(-160);

player.anims.play('left', true);
}
else if (cursors.right.isDown)
{
player.setVelocityX(160);

player.anims.play('right', true);
}
else
{
player.setVelocityX(0);

player.anims.play('turn');
}

if (cursors.up.isDown && player.body.touching.down)
{
player.setVelocityY(-330);
}
}

function collectStar (player, star)
{
star.disableBody(true, true);
window.location.href = '#projects';
    location.reload();
//  Add and update the score
//score += 10;
//scoreText.setText('Score: ' + score);

if (stars.countActive(true) === 0)
{
//  A new batch of stars to collect
stars.children.iterate(function (child) {

child.enableBody(true, child.x, 0, true, true);

});

var x = (player.x < 400) ? Phaser.Math.Between(400, 800) : Phaser.Math.Between(0, 400);

var bomb = bombs.create(x, 16, 'bomb');
bomb.setBounce(1);
bomb.setCollideWorldBounds(true);
bomb.setVelocity(Phaser.Math.Between(-200, 200), 20);
bomb.allowGravity = false;

}
}

function hitBomb (player, bomb)
{
this.physics.pause();

player.setTint(0xff0000);

player.anims.play('turn');

gameOver = true;
}

</script>

<!-- Intro Section -->
<section id="intro" class="intro-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <img src="/images/hat.png" width="150"/>
                <h1>Trevor</h1>
                <h1><span class="flashing-text">S</span>impkin</h1>
                <div class="row">
                    <div class="col-sm-2 offset-sm-5">
                    <ul class="nav-list">
                        <li><a class="page-scroll" href="#about">About</a></li>
                        <li><a class="page-scroll" href="#projects">Portfolio</a></li>
                        <li><a class="page-scroll" href="#contact">Contact</a></li>
                    </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-1 offset-sm-4">
                        <p>&copy;2019</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="about-section">
    <div class="container heading">
        <div class="row">
            <div class="col-lg-12">
                <h1> </h1>
            </div>
        </div>
    </div>
    <!--<div class="container banner">
        <img class="img-fluid" src="/images/title_littletrevor.png"/>
    </div>-->
    <div id="game">
    </div>
    <div class="container text">
        <div class="row">
            <div class="col-lg-12 about-description">
                <p>Hello, I am Trevor Simpkin a Brooklyn Based Web Developer.</p>
                <p>(<i class="material-icons" style="font-size:36px">arrow_back</i>, <i class="material-icons" style="font-size:36px">arrow_upward</i>, <i class="material-icons" style="font-size:36px">arrow_forward</i> )</p>

            </div>
        </div>
    </div>
</section>

<!-- Portfolio Grid Section -->
<section id="projects" class="services-section">
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fas fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="/images/graph_screenshot.png" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>Project Management / Data App</h4>
                    <p class="text-muted">Web Development / Data Presentation</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fas fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="/images/pcairnoisetraffic_screenshot.png" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>Company Site</h4>
                    <p class="text-muted">Web Development</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fas fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="img/portfolio/03-thumbnail.jpg" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>Universal Noise Monitoring System</h4>
                    <p class="text-muted">Product / System Development</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fas fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="/images/game_boi.png" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>Game Boy 3B+</h4>
                    <p class="text-muted">Passion Project</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fas fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="img/portfolio/05-thumbnail.jpg" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>Github</h4>
                    <p class="text-muted">See My Code</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fas fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="img/portfolio/06-thumbnail.jpg" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>City Rocks</h4>
                    <p class="text-muted">Volunteering</p>
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
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="first_name">First Name</label>
                            <input id="first_name" type="text" name="first_name" class="form-control" placeholder="First Name" required="required">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="last_name">Last Name</label>
                            <input id="last_name" type="text" name="last_name" class="form-control" placeholder="Last Name" required="required">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input id="email" type="email" name="email" class="form-control" placeholder="E-mail Address" required="required">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input id="phone" type="phone" name="phone" class="form-control" placeholder="(###)###-####" required="required">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_message">Message</label>
                            <textarea id="message" name="message" class="form-control" placeholder="Message" rows="4" required="required" dat></textarea>
                        </div>
                    </div>
                </div>
                    <div class="col-md-6">
                        <input type="submit" class="btn btn-success btn-send" value="Send message">
                    </div>


                   <!-- Text area -->



             </fieldset>
         </form>

     </div>
     <!-- /.container -->


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
