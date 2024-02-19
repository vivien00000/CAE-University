
    <!DOCTYPE html>
    <html lang="en">
    <head>
        @include('layouts/bootstap')
        <link rel="stylesheet" href="css/user_page.css">
        {{-- <link rel="stylesheet" href="css/home.css">
        <link rel="stylesheet" href="css/footer.css">
        <link rel="stylesheet" href="css/user_page.css"> --}}
         {{-- <script src="js/calendar.js"></script> --}}
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <title>Shop Page</title>
        <style>
           #shop {
                margin: 0;
                padding: 20px;
                box-sizing: border-box;
                background-color: rgb(233, 228, 228);
            }

            .row {
                display: flex;
                flex-wrap: wrap;
                margin: -10px;
            }

            .col-lg-3 {
                flex: 20%;
                max-width: 20%;
                padding: 10px;
                margin-bottom: 10px;
            }

            .card {
                border: 1px solid #ccc;
                border-radius: 5px;
                padding: 20px;
                text-align: center;
                box-shadow: 0 4px 8px 0 rgba(145, 30, 30, 0.1);
            }

            .card img {
                max-width: 100%;
                height: auto;

            }
            .card:hover {
                transform: scale(1.1);
            }

            #text-center {
                text-align: center;
               text-transform: uppercase;
               color: maroon;
               padding: 20px 0px 20px;

            }

            @media screen and (max-width: 992px) {
                .col {
                    flex: 25%;
                    max-width: 25%;
                }
            }

            @media screen and (max-width: 768px) {
                .col {
                    flex: 33.33%;
                    max-width: 33.33%;
                }
            }

            @media screen and (max-width: 576px) {
                .col {
                    flex: 50%;
                    max-width: 50%;
                }
            }
        </style>
         <script>
            $(document).ready(function() {
                $(".deduct_button").click(function() {
                    $product_id = $(this).prop('id').replace("deduct_", "");
                    $new_val = Number($("#order_" + $product_id).val()) - 1;
                    if ($new_val >= 0) {
                        $("#order_" + $product_id).val($new_val);
                    }
                });

                $(".add_button").click(function() {
                    $product_id = $(this).prop('id').replace("add_", "");
                    $new_val = Number($("#order_" + $product_id).val()) + 1;
                    if ($new_val <= 99) {
                        $("#order_" + $product_id).val($new_val);
                    }
                });
            });
        </script>
    </head>
    <body>
        @include('layouts/left_navbar')
    <div class="container">
        <form action="/user_merch" method="POST">
            @csrf
        <div class="row justify-content-center" id="shop">
            <h3 class="text-center"><b>CAE University Merchandise</b></h3>
            @foreach($product as $p)
            <div class="col-lg-4">
                <div class="card">
                    <img class="card-img-top" src="{{('img/' . $p->image) }}" alt="">
                    <div class="card-body">
                        <h5 class="card-title">{{$p->name}} - PHP <span>{{$p->price}}</span></h5>
                        <a class="btn btn-danger deduct_button" id="deduct_{{$p->product_id}}">-</a>
                        <input type="number" style="width: 50px" min="0" max="99" value="0" id="order_{{$p->product_id}}" name="order_{{$p->product_id}}">
                        <a class="btn btn-success add_button" id="add_{{$p->product_id}}">+</a>
                    </div>
                </div>
            </div>
            @endforeach
            <input type="submit" class="btn btn-success mt-4 col-lg-12" value="Submit">
        </div>
    </form>
        <!-- space -->
        <div class="d-flex" style="height: 200px">
          </div>
    </body>
    </html>
