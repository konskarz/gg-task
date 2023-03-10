<html>
    <body>
        <h1>Posts</h1>
        <ul>
            @foreach ($posts as $post)
            <li>{{ $post['title'] }}</li>
            @endforeach
        </ul>
    </body>
</html>
