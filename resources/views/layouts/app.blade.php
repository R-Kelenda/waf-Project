<!DOCTYPE html>
    <head> 
        <meta charset="UTF-8"> 
        <title>GymMembership</title> 
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'> 
        <!-- Bootstrap 3.3.7 --> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
        <link rel="stylesheet" href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" crossorigin="anonymous"/>
         
    </head> 
    <body style= 'background-color: gray'> 
        <nav class="navbar navbar-default navbar-static-top"> 
            <ul class="nav navbar-nav"> 
                <li><a href="https://laravel.com/docs">Laravel Documentation</a></li> 
                <li><a href="https://laracasts.com/">Laravel Video Tutorials</a></li> 
            </ul> 
        </nav> 
        <div id="page-content-wrapper"> 
            <div class="container-fluid">
 
                <div class="row"> 
                    <div class="col-1g-2"><img src='{{asset('img/gymMember.jpg')}}' style='height:300px;width:100%' class='img-responsive'/></div>
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8"> @yield('content') </div>
                    <div class="col-lg-2"></div>
                </div>
            </div> 
        </div> 
     
	
	 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2439276.0202739085!2d-8.217839368470834!3d53.34136784288767!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x485d5d245e393ef1%3A0xc95fa5e1b650ab44!2sBest%20Body%20Health%20%26%20Fitness%20gym!5e0!3m2!1sen!2sie!4v1618766140838!5m2!1sen!2sie" width="460" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        <iframe width="450" height="250" src="https://www.youtube.com/embed/gey73xiS8F4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
		
        </body>
</html>

