<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>
<body>
    <h1>Products</h1>
    <ul>
<<<<<<< HEAD
        @foreach ($products as $product)
    <li>
        <div class="card">
            <h5 class="card-title">{{ $product->name }}</h5>
            <p class="card-text">{{ $product->description }}</p>

            <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary">Посмотреть товар</a>
        </div>
    </li>
@endforeach
=======
        @foreach ($products as $product)  //получает переменную products из ProductController
            <li>
                <strong>{{ $product->name }}</strong><br>
                {{ $product->description }}<br>
                Price: ${{ $product->price }}
            </li>
        @endforeach
>>>>>>> 1173d9dcbf958755acda6c919a9cd5b3a5ce95ea
    </ul>
</body>
</html>
