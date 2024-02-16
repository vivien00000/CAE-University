<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="css/home.css">

    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/user_page.css">


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
       @include('layouts/left_navbar')
</head>
<body>
 
    {{-- @if (count($ongoing_orders) == 0)
    <div class="container">
        <form action="/cafeteria" method="POST">
            <div class="row">
                @csrf
                @foreach ($menu as $m)
                <div class="col-lg-3">
                    <div class="card">
                        <img src="img/products/{{$m -> image}}" class="card-img-top" alt="{{$m -> name}}">
                        <div class="card-body">
                            <h5 class="card-title">{{$m -> name}} - PHP<span>{{$m -> price}}</span></h5>
                            <a class="btn btn-danger deduct_button" id="deduct_{{$m -> product_id}}">-</a>
                            <input type="number" style="width: 50px" min="0" max="99" value="0" id="order_{{$m -> product_id}}" name="order_{{$m -> product_id}}">
                            <a class="btn btn-primary add_button" id="add_{{$m -> product_id}}">+</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <input type="submit" class="btn btn-success mt-3" value="Place Order" />
        </form>
    </div>
    @else
    <a href="/orders">You have ongoing orders!</a>
    @endif --}}
    {{-- <div class="col-lg-3 todo-items" id="todo"> <!-- Take up 3 columns for the To-Do items -->
        <h3>To-Do List</h3>
        <ul class="list-group">
            <li class="list-group-item">Nothing to show</li>
            <li class="list-group-item">Recent Feedback</li>
        </ul>
        <button type="button" class="btn btn-primary mt-3">View Grades</button>
    </div> --}}
   
<div class="container">

    
    <form action="/user_merch" method="POST">
    <div class="row justify-content-center" id="shop">
        <h3 class="text-center"><b>CAE University Merchandise</b></h3>
        @csrf
        @foreach($product as $p)
        <div class="col-lg-3">
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
        <input type="submit" class="btn btn-success mt-3 col-lg-1">
    </div>
</form>
    <!-- space -->
    <div class="d-flex" style="height: 200px">
      </div>
    {{-- footer --}}
    @include('layouts/footer')
</body>
</html>

