<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>{{$heading}}</h1>
    @if(count($listings) === 0)
        <p>No listings found</p>
    @else
        @foreach($listings as $listing)
            <div>
                <h2>
                    <a href="/listings/{{$listing['id']}}">
                        {{$listing['title']}}
                    </a>
                </h2>
                <p>{{$listing['description']}}</p>
            </div>
        @endforeach
    @endif
</body>
</html>