<link rel="stylesheet" href="/css/dist/card.css">

<div>
    <div class="Card">
        <div class="Card-img">
            <img src="{{ $src }}">
        </div>
        <div class="Card-Header">
            <div class="Card-Header-label">
                <h3>{{ $label }}</h3>
            </div>
            <div class="Card-Header-content">
                <p>{{ $content }}</p>
            </div>
        </div>
        <div class="Card-Footer">
            <div class="alergens">
                {{ $alergen }}
            </div>
            <div class="price">
                {{ $price }}
            </div>
        </div>
    </div>
</div>