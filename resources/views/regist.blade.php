@include('header')

<div class="main_waper">
    <form class="avto" method="POST" action="{{route('regist_form')}}">
        @csrf
        <p class="art">Registration</p>
        <input class="text" type="text" name="login" placeholder="Login:">

        <input class="text" type="password" name="password" placeholder="Passwod:">

        <input class="text" type="text" name="surname" placeholder="Surname:">

        <input class="text" type="text" name="name" placeholder="Name:">

        <input class="text" type="text" name="i_name" placeholder="I_name:">

        <input class="sub" type="submit" name="sub_avto" value="Further">
    </form>
</div>

@include('footer')