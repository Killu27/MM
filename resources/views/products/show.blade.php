<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $product->name }}</title>
</head>
<body>
    <h1>{{ $product->name }}</h1>
    <p>{{ $product->description }}</p>
    <p>Цена: {{ $product->price }} руб.</p>

    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <form action="{{ route('products.order', $product->id) }}" method="POST">
        @csrf
        <label for="quantity">Количество:</label>
        <input type="number" name="quantity" id="quantity" min="1" required>
        @error('quantity')
            <div>{{ $message }}</div>
        @enderror
        <button type="submit">Заказать</button>
    </form>
</body>
</html>
