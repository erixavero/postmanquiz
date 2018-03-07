<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>killmenow</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
        <script src="{{ asset('js/vue.min.js') }}" type="text/javascript"></script>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 400;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row pt-5">
                <div class="col-12 text-center">
                    <h1>put items here</h1>
                </div>
            </div>
        </div>
        <section class="container">

            <div class="row">
                <form class="col-12" method="POST" action="/insertItem">

                    <div class="row">
                        <div class="col-8 offset-2 mt-5">
                          <div class="form-group">
                              <label for="catInput">category</label>
                              <input type="number" class="form-control" id="catInput" placeholder="category" name="cat">
                          </div>
                            <div class="form-group">
                                <label for="itemInput">item name</label>
                                <input type="text" class="form-control" id="itemInput" placeholder="item" name="item">
                            </div>
                            <div class="form-group">
                                <label for="priceInput">price</label>
                                <input type="number" class="form-control" id="priceInput" placeholder="price" name="price">
                            </div>
                            <div class="form-group">
                                <label for="stockInput">stock</label>
                                <input type="number" class="form-control" id="stockInput" placeholder="stock" name="stock">
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Submit</button>
                        </div>
                    </div>
                </form>
            </div>

        </section>
    </body>
</html>
