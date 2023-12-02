<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Coron - Fashion eCommerce Bootstrap4 Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="img\favicon.png">
		
		<!-- all css here -->
        <link rel="stylesheet" href="css\bootstrap.min.css">
        <link rel="stylesheet" href="css\plugin.css">
        <link rel="stylesheet" href="css\bundle.css">
        <link rel="stylesheet" href="css\style.css">
        <link rel="stylesheet" href="css\responsive.css">
        <script src="js\vendor\modernizr-2.8.3.min.js"></script>
    </head>
    <body>
            <!-- Add your site or application content here -->
            
            <!--pos page start-->
            <div class="pos_page">
                <div class="container">
                   <!--pos page inner-->
                    <div class="pos_page_inner">  
                    @include('frontend.partial.header')
                    @hasSection('content')
                    @yield('content')
                    @else
                    <h1>No content</h1>
                    @endif
                    
                    </div>
                    <!--pos page inner end-->
                </div>
            </div>
            <!--pos page end-->
            @include('frontend.partial.footer')
           
            
          
            
            
      
		
		<!-- all js here -->
        <script src="js\vendor\jquery-1.12.0.min.js"></script>
        <script src="js\popper.js"></script>
        <script src="js\bootstrap.min.js"></script>
        <script src="js\ajax-mail.js"></script>
        <script src="js\plugins.js"></script>
        <script src="js\main.js"></script>
    </body>
</html>
