
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" type="text/css" href="css/style.css">
  
  <title>Welcome | SL Post</title>
</head>
<body>
    <header>
      <div class="main">
        <div class="logo">
            <img src="img/logo5.gif" alt="" srcset="">
        </div>
        <ul>
        @if (Route::has('login'))@auth
                       <li class="active*/`"> <a href="{{ url('/home') }}">Home</a></li>
                    @else
                        <li><a href="{{ route('login') }}">Login</a></li>

                        @if (Route::has('register'))
                           <li> <a href="{{ route('register') }}">Register</a></li>
                        @endif
                    @endauth
         @endif
            <li><a href="#">Track Mail</a></li>
            <li><a href="/location">Find Us</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
        
      </div>
      <div class="title"><h1>Welcome to SL Post</h1></div>
      <form>
                 <input type="text" class="input" id="track_no" name="track_no" placeholder="   Tracking Number"> 
      </form>
      <div class="button">
            <a href="" class="btn">Track Parcel</a>
            <a href="" class="btn">Reset</a>

      </div>
    </header>
</body>
</html>