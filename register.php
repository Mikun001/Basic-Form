<html>
<title> </title>
<head>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/app.css">
        <link rel="icon" href="image/Lambo.png">
    </head>
    <body>
        <form method="post" action="connect.php">
        <style>
            body {
                background-color: chocolate;
            }
        </style>
        
        
        <header>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"></a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-left">
                <li><a href="//http/C:/Users/Ayomikun/Documents/2021/NYSC/rForm/index.html">Home</a></li>
                <li class="active"><a href="//http/C:/Users/Ayomikun/Documents/2021/NYSC/rForm/register.html">Register</a></li>
            </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
        </nav>
    </header>
        
        <center>
        <h1 style="padding-top: 5%; color: aqua;">REGISTER HERE</h1>
        <div class="container" style="padding-top: 5%">
            
                        <div class="form-group">
                      <label for="name" style="color: brown">Name:</label>
                      <input type="text" class="form-control" style="width: 35%" id="name">
                    </div>
                     <div class="form-group">
                      <label for="sex" style="color: brown">Sex:</label>
                         <input type="text" class="form-control" style="width: 35%" id="sex">
                      <!--input type="radio" name="gender" value="male"> Male<br>
                    <input type="radio" name="gender" value="female"> Female<br-->
                    </div>
                    <div class="form-group">
                      <label for="birth_date" style="color: brown">Birthday (Month & Day):</label>
                      <input type="text" class="form-control" style="width: 35%" id="birth_date">
                    </div>
                    <div class="form-group">
                      <label for="spec" style="color: brown">Area of Specialization:</label>
                      <input type="text" class="form-control" style="width: 35%" id="spec">
                    </div>
            
                 <br>
                        <button type="submit">SUBMIT</button>
            
        </div>
        </center>
        </form>
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>