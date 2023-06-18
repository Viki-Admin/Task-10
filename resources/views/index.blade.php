@include('header')

<div class="main_waper">
    @if(Auth::check()) 
        <div class="mains">
                <div class="chek">
                        <p class="Welcome">
                                Welcome to our library 
                        </p>
                        <p class="Welcome">
                                Thank you for choosing us!
                        </p>
                </div>
        </div>
        @else

    <form class="avto" method="POST" action="{{route('auth_form')}}">
        @csrf
        <p class="art">Authorization</p>
        <input class="text" type="text" name="login" placeholder="Login:">
        <input class="text" type="password" name="password" placeholder="Passwod:">
        <input class="sub" type="submit" name="sub_avto" value="Further">

        <a href="{{route('regist')}}">The first ones with us?</a>
    </form>
    @endif   
</div>


@include('footer')