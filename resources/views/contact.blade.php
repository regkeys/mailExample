<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Mail Example</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</head>
<body class="font-sans antialiased dark:bg-black dark:text-white/50">
<div class="container">
    <div class="row">
        @if (session()->has('success'))
            <div class="alert alert-success col-md-12" role="alert">
             <h1>   {{session('success')}}   </h1>
            </div>
        @else
            <div class="alert alert-danger col-md-12" role="alert">
                <h1>   Your Message was not sent successfully - please try again - Thank You...  </h1>
            </div>
        @endif
            <h1>Contant Form</h1>
            <BR><BR><BR>
        <a href="/">HOME</a>
        <BR><BR><BR>
    </div>
</div>


<div class="container">
    <div class="row">


        <form method="post" action="{{ route('contact.send') }}">
            @csrf
            <div class='fieldset'>
                <label for='name'>Name</label>
                <input type='text' id='name' name="name" placeholder='Enter name'/>
                <br><br>
                @error('name')
                <span>Input name</span>
                @enderror
            </div>


            <div class='fieldset'>
                <label for='address'>Adress</label>
                <input type='text' id='address' name="address" placeholder='Enter address'/>
                <br><br>
                @error('address')
                <span>Input address</span>
                @enderror
            </div>

            <div class='fieldset'>
                <label for='email'>email</label>
                <input type='text' id='email' name="email" placeholder='Enter email'/>
                <br><br>
                @error('email')
                <span>Input email</span>
                @enderror
            </div>

            <div class='fieldset'>
                <label for='phone'>Phone#</label>
                <input type='text' id='phone' name="phone" placeholder='Enter Phone#'/>
                <br><br>
                @error('phone')
                <span>Input phone #</span>
                @enderror
            </div>

            <div>
                <!--<button class="" type="submit">Send</button>-->
                <input type="submit" value="Submit">
            </div>
        </form>

    </div>
</div>
</body>
</html>
