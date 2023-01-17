<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <title>Laravel Blog</title>
</head>

<body>
    @include('master.header')
    <div class="container">


        <div class="row mt-5">
            <div class="col-6 mt-2 offset-3">
                <div class="card">
                    <img src="https://developers.elementor.com/docs/assets/img/elementor-placeholder-image.png"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">

                            {{ $blog->title }}
                        </h5>
                        <p class="card-text">
                            {{ Str::limit($blog->description, 70) }}
                        </p>
                        <a href="{{ route('singleblog', $blog->slug) }}" class="btn btn-primary">Details....</a>
                    </div>
                </div>

            </div>
        </div>
        <div class="row mt-2">
            <div class="col-6 offset-3">
                @foreach ($comments as $comment)
                    <div class="card mt-1">
                        <div class="card-header">
                            {{ $comment->user->name }}
                        </div>
                        <div class="card-body">
                            {{ $comment->comment }}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        @if (Auth::check())
            <div class="row mt-2">
                <div class="col-6 offset-3">
                    <form action="{{ route('blog.comment') }}" method="POST">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" id="">
                        <input type="hidden" name="post_id" value="{{ $blog->id }}">
                        <textarea name="comment" id="comment" class="form-control" placeholder="Comment" rows="4"></textarea>
                        <button class="btn btn-success mt-1">submit</button>
                    </form>
                </div>
            </div>
        @else
        @endif


    </div>
</body>

</html>
