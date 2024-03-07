<main>
    <section id="comics">
        <div class="container">
            <h2>Current Series</h2>
            <div class="card-container">

                @foreach(config('comics') as $comic)
                <div class="comic-card">
                    <div class="thumb">
                        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                    </div>
                    <h3>{{ $comic['title'] }}</h3>
                </div>
                @endforeach

            </div>
        </div>
        <div class="lead-more">
            <div class="button">
                <a href="#">Lead More</a>
            </div>
        </div>
    </section>
</main>
