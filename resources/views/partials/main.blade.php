<main>
    <div class="titan_bg">

    </div>
    <div class="black-main">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div>
                        <a class="current" href="#">CURRENT SERIES</a>
                    </div>
                    <div class="d-flex flex-wrap justify-content-between">
                        @foreach (array_slice($cards, 0, 10) as $card)
                            <div class="cards-comics">
                                <img src="{{ $card['thumb'] }}" alt="">
                                <p>{{ $card['title']}}</p>
                            </div>                        
                        @endforeach
                    </div>
                    <div class="d-flex justify-content-center">
                        <a class="load" href="#">LOAD MORE</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>