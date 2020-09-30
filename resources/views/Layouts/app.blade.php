<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <header>
        @include('inc.navbar')
        <div class="container">
            <h1>Order</h1>
        </div>
	</header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-2">
                @include('inc.aside')
            </div>
            <div class="col-8">
                <div class="orders">
                    <div class="order">
                        @include('inc.order')
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
