<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Assistancia</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

        <style>
          *{
    margin:0;
    padding:0;
    font-family:'Roboto',sans-serif;
  list-style: none;
  text-decoration: none;

}
.container{
    width:100%;
    height: 100vh;
    background-image: linear-gradient(rgba(0,0,0,0.7),rgba(40, 22, 22, 0.7)),url("im1.jpg");
    background-position: center;
    background-size: cover;
    padding-left:8% ;
    padding-right:8% ;
    box-sizing:border-box;

}

.cont{
    width: 100%;
    height: 100vh;
    background-image: linear-gradient(rgba(0,20,15,0.7),rgba(215, 225, 215, 0.7)),url("im2.jpg");
    background-position: center;
    background-size: cover;
}
.wrap div{
    height: 60px;
    border: 2px solid rgba(255,255,255,0.7);
    width: 60px;
    border-radius: 50px;
    position: absolute;
    top: 10%;
    left: 10%;
    animation:animate 4s linear infinite;
}
div .dot{
    height: 10px;
    width: 10px;
    border-radius: 50px;
    background: rgba(255,255,255,0.5);
    position: absolute;
    top: 20%;
    right: 20%;
}
.wrap div:nth-child(1){
    top: 20%;
    left: 20%;
    animation:animate 8s linear infinite;

}

.wrap div:nth-child(2){
    top: 60%;
    left: 80%;
    animation:animate 10s linear infinite;

}

.wrap div:nth-child(3){
    top: 40%;
    left: 40%;
    animation:animate 5s linear infinite;

}

.wrap div:nth-child(4){
    top: 66%;
    left: 30%;
    animation:animate 7s linear infinite;

}

.wrap div:nth-child(5){
    top: 20%;
    left: 20%;
    animation:animate 9s linear infinite;

}

.wrap div:nth-child(6){
    top: 30%;
    left: 60%;
    animation:animate 5s linear infinite;

}

.wrap div:nth-child(7){
    top: 70%;
    left: 20%;
    animation:animate 8s linear infinite;

}
.wrap div:nth-child(8){
    top: 75%;
    left: 60%;
    animation:animate 10s linear infinite;

}
.wrap div:nth-child(9){
    top: 50%;
    left: 50%;
    animation:animate 6s linear infinite;

}
.wrap div:nth-child(10){
    top: 45%;
    left: 20%;
    animation:animate 10s linear infinite;

}
.wrap div:nth-child(11){
    top: 10%;
    left: 90%;
    animation:animate 9s linear infinite;

}
.wrap div:nth-child(12){
    top: 20%;
    left: 70%;
    animation:animate 7s linear infinite;

}
.wrap div:nth-child(13){
    top: 20%;
    left: 20%;
    animation:animate 8s linear infinite;

}
.wrap div:nth-child(14){
    top: 60%;
    left: 5%;
    animation:animate 6s linear infinite;

}
.wrap div:nth-child(15){
    top: 90%;
    left: 60%;
    animation:animate 9s linear infinite;

}
@keyframes animate{
    0%{
        transform:scale(0) translateY(0) rotate(70deg) ;
    }
    100%{
        transform:scale(1.3) translateY(-100px) rotate(360deg);
    }
}
.sidebar{
    position: fixed;
    left: 0;
    width: 250px;
    height: 100%;
    background: #042331;
    transition: all 0.5s ease;
}
.sidebar header{
    font-size: 22px;
    color: white;
    text-align: center;
    line-height: 70px;
    background: #063146;
    user-select: none;
}
.sidebar ul a{
    display: block;
    height: 100%;
    width: 100%;
    line-height: 65px;
    font-size: 20px;
    color: rgb(246, 245, 245);
    padding-left: 40px;
    box-sizing: border-box;
    border-top: 1px solid rgba(69, 82, 177, 0.712);
    border-bottom: 1px solid black;
    transition: 0.4s;

}
ul li:hover a{
    padding-left: 50px;

}
.sidebar ul li a i{
    margin-right: 16px;

}
#check:checked ~ .sidebar{
left: 0;
}
#check:checked ~ label #btn{
    left: 250px;
    opacity: 0;
    pointer-events: none;
    }
 #check:checked ~ label #cancel{
        left: -195px;

}
#check{
    display: none;
}
label #btn,label #cancel{
    position: absolute;
    cursor:pointer;
   background:#eaedef;
   border-radius: 3px;
}
label #btn{
    left: 40px;
    top: 25px;
    font-size: 35px;
    color:rgb(117, 46, 46);
    padding: 6px 12px;
  transition:all 0.5s ;

}
label #cancel{
    z-index: 1111;
    left: -195px;
    top: 17px;
    font-size: 30px;
    color: #0a5275;
    padding: 4px 9px;

}
ul li a i{
    color: aqua;
}       </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif



            <body>
                <div class="container">
            <!--<div class="navbar">
                <img src="logo.jpg" class="logo">
                <nav>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Connexion</a></li>
                        <li><a href="#">Contact</a></li>

                    </ul>
                </nav>
                <img src="menu.png" class="menu-icon">
            </div>-->
            <input type="checkbox" id="check">
            <label for="check">
                <i class="fas fa-bars" id="btn"></i>
                <i class="fas fa-times " id="cancel"></i>

            </label>
            <div class="sidebar">
                <header>Assistancia</header>
                <ul>
                    <p><a href="#"><i class="fas fa-qrcode"></i>Bienvenue dans Assistancia l'entreprise concue pour satisfaire de besoin de ses clients </a></p>

                </ul>
            </div>




            <div class="wrap">
            <div><span class="dot"></span></div>
            <div><span class="dot"></span></div>
            <div><span class="dot"></span></div>
            <div><span class="dot"></span></div>
            <div><span class="dot"></span></div>
            <div><span class="dot"></span></div>
            <div><span class="dot"></span></div>
            <div><span class="dot"></span></div>
            <div><span class="dot"></span></div>
            <div><span class="dot"></span></div>
            <div><span class="dot"></span></div>
            <div><span class="dot"></span></div>
            <div><span class="dot"></span></div>
            <div><span class="dot"></span></div>
            <div><span class="dot"></span></div>

            <div><span></span></div>
            <!--<div class="row">
                <div class="col">
                    <h1>Bienvenue</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, perferendis!</p>
                    <button type="submit">Explorer</button>
                </div>
                <div class="col">
                    <div class="card card1">
             <h5>Cour</h5>
                    </div>
                    <div class="card card2">
                        <h5>Connexion</h5>
                    </div>
                    <div class="card card3">
                        <h5>Contact</h5>
                    </div>
                    <div class="card card4">
                        <h5>Apropos</h5>
                    </div>
                </div>
            </div>-->
                </div>

        </div>
    </body>
</html>
