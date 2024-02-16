<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts/navbar')
    @include('layouts/bootstap')
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/footer.css">
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
</head>
<body>

    <div class="row" id="shop">
        <h3 id="text-center"><b>CAE University Merchandise</b></h3>
        <div class="col-lg-3">
            <div class="card">
                <img src="img/1.png" alt="Product 1">
                <div class="product-description">University Cap</div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card">
                <img src="img/2.png" alt="Product 2">
                <div class="product-description">Hot & Cold Tumbler</div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card">
                <img src="img/4.png" alt="Product 4">
                <div class="product-description">University Shirt</div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card">
                <img src="img/5.png" alt="Product 4">
                <div class="product-description">University Hoodie</div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card">
                <img src="img/6.png" alt="Product 4">
                <div class="product-description">University Planner</div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card">
                <img src="img/7.png" alt="Product 4">
                <div class="product-description">University Mug</div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card">
                <img src="img/9.png" alt="Product 4">
                <div class="product-description">Hot & Cold Cup</div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card">
                <img src="img/10.png" alt="Product 4">
                <div class="product-description">University Pins</div>
            </div>
        </div>
    </div>
    {{-- footer --}}
    @include('layouts/footer')
</body>
</html>
