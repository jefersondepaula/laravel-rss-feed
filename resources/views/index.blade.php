@include('components.header', [$title])
    <main>
        <section id="posts" class="posts">
            @foreach ($posts as $post)
                <article id="post" class="post">
                    <h1>{{$post->title}}</h1>
                    <p>{{$post->content}}</p>
                    <p class="pub-date">{{$post->pub_date}}</p>
                    <div>
                        <a href="{{$post->link}}" target="_blank" rel="noopener noreferrer">See article</a>
                    </div>
                </article>
            @endforeach
        </section>
    </main>
 <x-footer></x-footer>
