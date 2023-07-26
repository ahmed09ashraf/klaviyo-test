<!-- Other HTML content of your product page template -->

<script type="text/javascript">
    var item = {
        "ProductName": "{{ $product->name }}",
        "ProductID": "{{ $product->id }}",
        "SKU": "{{ $product->sku }}",
        "Categories": "{{ $product->categories }}",
        "ImageURL": "{{ $product->image_url }}",
        "URL": "{{ $product->url }}",
        "Brand": "{{ $product->brand }}",
        "Price": "{{ $product->price }}",
        "CompareAtPrice": "{{ $product->compare_at_price }}"
    };
    klaviyo.push(["track", "Viewed Product", item]);
</script>

<h1>{{ $product->name }}</h1>
<img src="{{ $product->image_url }}" alt="{{ $product->name }}">
<p>Price: {{ $product->price }}</p>
<!-- Other product details here -->
