<div class="videos-reviews">
    <div class="videos-reviews-videos">
        @foreach ($datas->reviews as $review)
        <a target="_blank" href="{{ $review["link"] }}"  class="video">
            <div class="video-image"  style="background-image: url('{{ $review["image"]["url"] }}');"></div>
             <p class="video-text">{{ $review["title"] }}</p>
        </a>
        @endforeach
    </div>
    
    <button class="videos-reviews-more">En voir plus</button>
</div>