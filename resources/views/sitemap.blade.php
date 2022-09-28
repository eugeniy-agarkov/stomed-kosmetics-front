<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>{{ $domain }}/</loc>
    </url>
    <url>
        <loc>{{ $domain }}/sales</loc>
    </url>
    <url>
        <loc>{{ $domain }}/doctors</loc>
    </url>
    <url>
        <loc>{{ $domain }}/contacts</loc>
    </url>
    <url>
        <loc>{{ $domain }}/reviews</loc>
    </url>
    <url>
        <loc>{{ $domain }}/news</loc>
    </url>
    <url>
        <loc>{{ $domain }}/gallery</loc>
    </url>
    <url>
        <loc>{{ $domain }}/search</loc>
    </url>

    @foreach($directionCategories as $category)
        <url>
            <loc>{{ $domain }}/directions/{{$category->slug}}</loc>
        </url>
    @endforeach

    @foreach($directions as $direction)
        <url>
            <loc>{{ $domain }}/direction/{{$direction->slug}}</loc>
        </url>
    @endforeach

    @foreach($doctors as $doctor)
        <url>
            <loc>{{ $domain }}/doctor/{{$doctor->slug}}</loc>
        </url>
    @endforeach

    @foreach($newsCategories as $category)
        <url>
            <loc>{{ $domain }}/news/{{$category->slug}}</loc>
        </url>
    @endforeach

    @foreach($news as $article)
        <url>
            <loc>{{ $domain }}/news-detail/{{$article->slug}}</loc>
        </url>
    @endforeach

</urlset>
