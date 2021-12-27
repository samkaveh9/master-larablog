<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Your Post was successfully saved</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="p-5 bg-light">
                    <div class="container">
                        <h1 class="display-5">Your Post was successfully saved</h1>
                        <p class="lead">publish your own post after 5 minutes. thanks :)</p>
                        <hr class="my-2">
                    </div>
                </div>
            </div>

            <div class="row">
                <h3 class="my-3">
                    also latest post for read
                </h3>
                <div class="col-sm-4">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('default.jpg') }}" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('default.jpg') }}" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('default.jpg') }}" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <p class="text-center">
                    Designed By <a href="" class="text-decoration-none ">Null Studio</a>
                </p>
            </div>
        </div>
    </div>

    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>
