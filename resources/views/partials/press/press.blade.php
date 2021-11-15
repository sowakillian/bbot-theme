<div class="press">
    <div class="press-image">
        <img src="@asset('images/press-photo.png')">
    </div>

    <div class="press-desc">
        <p>{{ $datas->descriptive_text }}</p>
        <h2>On en parle ?</h2>

        @php 
        global $post;
        if(get_field('descriptive_text'), 8)
        {
            echo '<p> weshh' . $post->ID . '</p>';
        } else {
            echo '<p> noweshh' . $post->ID . '</p>';
        } @endphp

        <p>Contactez-nous</p>
        <p>{{ $datas->phone_number }}</p>
        <p>{{ $datas->email }}</p>
    </div>
</div>