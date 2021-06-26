<!DOCTYPE html>
<html lang="en">
<head>
  <title>POST Comment example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
@foreach ($posts as $post)
<div class="container mt-3">
  <p><b>{{ $post->title }}</b></p>
    @foreach ($post->comments as $comment)
    <ul class="list-group ml-5">
    <li class="list-group-item d-flex justify-content-between align-items-center">
        {{ $comment->content }}
        </li>
        </ul>
    @endforeach
</div>
@endforeach
</body>
</html>
