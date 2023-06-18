@include('header')
<div class="main_waper">
    <form class="avto" method="POST" action="{{route('form_update_book', $id)}}">
        @csrf
        <p class="art">Update Book</p>
        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">

        <input class="text" type="text" name="name_book" placeholder="Neme Book:">

        <textarea class="text" type="password" name="text" placeholder="Text:"></textarea>

        <input class="sub" type="submit" name="sub_avto" value="Add Book">
    </form>
</div>
@include('footer')