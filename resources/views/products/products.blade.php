<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
</head>
<body>
    @foreach($products as $product) //получает переменную products из ProductController
        <div class="card">
            <h2>{{ $product['name'] }}</h2> 
            <p>Cost: ${{ $product['cost'] }}</p>
            <p>Amount: {{ $product['amount'] }}</p>
        </div>
    @endforeach
</body>
</html>
