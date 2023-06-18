@include('header')

<div class="main_waper"> 
        <form class="avto" method="POST" action="{{route('book_form')}}">
            @csrf
            <p class="art">Registration</p>
            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">

            <input class="text" type="text" name="name_book" placeholder="Neme Book:">

            <textarea class="text" type="password" name="text" placeholder="Text:"></textarea>

            <input class="sub" type="submit" name="sub_avto" value="Further">
        </form>
</div>
<div class="books">

    @foreach($book as $bo)
    <div class="book">
        <h2 class="cop">Name Book:</h2>
        <a href="{{route('book', $bo->id)}}">
            <h3 class="cop">{{$bo->name_book}}</h3>
        </a><br>

        <a href=""><h4 class="cop">Copi</h4></a><br>

        <a href="{{route('book_update', $bo->id)}}"><h4 class="cop">Update</h4></a><br>

        <a href="{{route('book_delete', $bo->id)}}"><h4 class="cop">Delite</h4></a><br>
    </div>
    @endforeach
</div>


@include('footer')
