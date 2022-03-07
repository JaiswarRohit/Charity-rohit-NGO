<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <script src="https://kit.fontawesome.com/f262bb2a7c.js" crossorigin="anonymous"></script>  
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;500&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
    <title>Doante Now</title>
    <link rel="icon" href="img/donation.png">
    <style>
        a{
            text-decoration: none;
            color: #fff;
        }
        a:hover{
            text-decoration: none !important;
            color:#517aec;
        }
        h1,h2,h3,h4,h5,h6{
            font-family: 'Josefin Sans', sans-serif !important;
            font-size: 18px;
            text-align: center;
        }
                body {
            background-color: #FFEBEE
        }

        .card {
            width: 400px;
            background-color: #fff;
            border: none;
            border-radius: 10px;
        }
        form{
            padding: 20px;
        }
        .form-control {
            margin-top: 10px;
            height: 48px;
            border: 2px solid #eee;
            border-radius: 10px
        }

        .form-control:focus {
            box-shadow: none;
            border: 2px solid #517aec;
        }

        .agree-text {
            font-size: 12px
        }

        .terms {
            font-size: 12px;
            text-decoration: none;
            color: #517aec;
        }

        .confirm-button {
            height: 50px;
            background: #517aec;
            border-radius: 10px
        }
        .confirm-button:hover{
            background: transparent;
            color: #517aec;
            border: 2px solid #517aec;
        }
        body{
            width: 100%;
            height: 100%;
            padding: 50px;
            position: relative;
        }
        body::before{
            content: '';
            position: absolute;
            top: 0%;
            left: 0%;
            bottom: 0%;
            right: 0%;
            z-index: -1;
            background: linear-gradient(-30deg, #517aec 50%, #d0d1cc 0%);
        }
    </style>
  </head>
  <body>
    <div class="container mt-5 mb-5 d-flex justify-content-center">
        <div class="card px-1 py-4">
            <form action="insert.php" method = "POST" data-aos="zoom-in" data-aos-duration="1000">
                <h6 class="card-title mb-3">Raise your hands to help poor children</h6>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                        <input name="name" class="form-control" type="text" placeholder="Name"> </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <div class="input-group"> <input name="number" class="form-control" type="number" placeholder="Mobile"> </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <div class="input-group"> <input name="email" class="form-control" type="text" placeholder="Email ID"> </div>
                        </div>
                    </div>
                </div>
                <div class=" d-flex flex-column text-center px-5 mt-3 mb-3"> <small class="agree-text">By doing Payment</small> <a href="#" class="terms">Terms & Conditions</a> </div> 
                <button name="next" type="submit" class="btn btn-primary btn-block confirm-button">Next</button>
            </form>
            
        </div>
    </div>
    
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
  </body>
</html>