



<head>    
    <?php
    session_start();
     ?>
    
    
    
    <title>account</title>
    <link href="bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/css/bootstrap-theme.css" rel="stylesheet" type="text/css"/>
    <link href="bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <script src="bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/js/bootstrap.js" type="text/javascript"></script>
    <link href="bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <script src="bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/js/jquery.query.js" type="text/javascript"></script>
    <script src="bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/js/jquery.js" type="text/javascript"></script>
    
</head>
<body>
    <span><?= $_SESSION['username'] ?></span>
    <?php
    
    
     echo $_SESSION['username'];
     echo $_SESSION['password']
       // coding starts here for my html of couse after the ? ?  >      
     ?>
    
    <nav id="myNavbar" class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
        <!-- brand and toglle get grouped for better mobile displayable-->
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="sr-only">
                        Toggle navigation
                    </span>
                    <span class="icon-bar">
                        
                    </span>
                    <span class="icon-bar">
                        
                    </span>
                    <span class="icon-bar">
                        
                    </span>
                </button>
                <a class="navbar-brand" href="#">AIRBNB</a>
                
            </div>
            <!-- collect the nav links, forms and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="#" target="_blank">Home</a>
                    </li>
                    <li>
                        <a href="#" target="_blank">profiles</a>
                    </li>
                    <li>
                        <a href="#" target="_blank">rooms</a>
                    </li>
                </ul>
                
            </div>
            
            
        </div>
        
        
        
        
    </nav>
    <div class="container">
        <div class="jumbotron">
            <h1>welcome to see the rooms for offers</h1>
            <p> Hey you are <h3><?php echo $_SESSION['username']; ?></h3> you can take a self tour through the sight
             or you can let us shiw you stuffs... hahahahaah</p>
        <p> <a href="#" class="btn btn-success btn-lg">get started with your profile</a></p>
            
            
            
        </div>
    </div>
    
    
    
    
    <div class="container">
        <div class="jumbotron">
        <div class="row">
            <div class="col-md-4">
                <a href="#" class="thumbnail">
                    <img src="IMG_0210.JPG" alt="Circular image" class="img-rounded"/>
                </a>
            </div>
            <div class="clearfix visible-md-block"></div>
            <div class="col-md-4">
                <a href="#" class="thumbnail">
                    <img src="IMG_0210.JPG" alt="Circular image" class="img-rounded"/>
                </a>
            </div>
            <div class="clearfix visible-md-block"></div>
            <div class="col-md-4">
                <a href="#" class="thumbnail">
                    <img src="IMG_0210.JPG" alt="Circular image" class="img-rounded"/>
                </a>
            </div>
            <div class="clearfix visible-md-block"></div>
            
            
            
            
        </div>
    </div>             
    </div>
    
    
</body>

