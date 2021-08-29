
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Test</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            body {
                font-family: 'Nunito', sans-serif;
                width: 100%;
                height: auto;
            }
            .container{  
               margin: 10%;
               background: rgb(197, 197, 197); 
               display: flex;
               justify-content: center;
            }
            .content{
                padding: 10px;
                width: 100$;
            }
            .content input{
                height: 25px;
                width: auto;
                display: inline;
                width: 80%;
            }
            .content button{
                height: 30px;
                display: inline;
                cursor: pointer;
                background: white 
                border:none;
                
            }
            .posts{
                background: rgb(163, 163, 163);
                padding: 10px;
                margin-top: 20px;
                border-radius: 10px;
            }
            .comments{
                padding-left:10px;
            }
        </style>
    </head>
    <body >
        <div class="container">
            <div class="content">
                <form action="{{route("posts.search")}}" method="post">
                    @csrf
                    <input type="text" class="search-text-box" name="search" placeholder="Search">
                    <button type="submit">Search</button>
                </form>
                @if($posts != null)
                    @foreach ($posts as $value)
                    <div class="posts">
                        <p>{{$value[0][0]}}</p>
                        <div class="comments"> 
                            @foreach ($value as $item)
                            <p>{{$item[1]}}</p>
                            @endforeach    
                        </div>
                    
                    </div>  
                    @endforeach
                @else 
                <div class="posts">
                    No Posts Found
                </div>
                @endif   
                
            </div>
        </div>
    </body>
</html>
