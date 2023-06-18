@include('header')

<div class="profil">
   
    <div class="pro">
        <div class="top">
        <p class="text">Login:@if(Auth:: check())
            {{$out_users_profil->login}}
        @endif</p>
        <p class="text">Surname:@if(Auth:: check())
            {{$out_users_profil->surname}}
        @endif</p>
        <p class="text">Name:@if(Auth:: check())
            {{$out_users_profil->name}}
        @endif</p>
        <p class="text">I_name:@if(Auth:: check())
            {{$out_users_profil->i_name}}
        @endif</p>
        </div>
    </div>
</div>
        
@include('footer')