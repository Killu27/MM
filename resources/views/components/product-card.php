@props(['product'])
<div class="card">
    <h2>{{ $product['name'] }}</h2>
    <p>Cost: ${{ $product['cost'] }}</p>
    <p>Amount: {{ $product['amount'] }}</p>
</div>