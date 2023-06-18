<?php

namespace App\Http\Controllers;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Book;
use App\Models\Comments;
use App\Http\Requests\AuthorizationRequest;
use App\Http\Requests\RegistrationRequest;
use App\Http\Requests\BookRequest;
use App\Http\Requests\CommetRequest;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function reg(RegistrationRequest $regist)
    {
        $user = new User();
        $user -> login =$regist -> input('login');
        $user -> password =$regist -> input('password');
        $user -> name =$regist -> input('name');
        $user -> surname =$regist -> input('surname');
        $user -> i_name =$regist -> input('i_name');

        // $user->password = Hash::make($user->password, ['raunds' => '12']);

        $user -> save();

        return redirect() -> route('home') -> with('success', 'Registered');
        
    }

    public function auth(AuthorizationRequest $regist)
    {
        $chek = $regist->only('login', 'password');

        if(Auth::attempt($chek))
        {
            return redirect()->intended(route('home'));

        }else
        {
            return back()-> withErrors(['login'=> 'Учетные данные не верны']);
        }
    }

    public function logout()
    {
        Auth:: logout();
        return redirect(route('home'));
    }

    public function book(BookRequest $bok)
    {
        $book = new Book();
        $book -> id_user =$bok -> input('user_id');
        $book -> name_book =$bok -> input('name_book');
        $book -> text =$bok -> input('text');

        $book -> save();

        return redirect() -> route('libreri') -> with('success', 'Book');
        
    }

    public function out_users()
    {
        $user = User::all();
        return view('users', ['data'=>$user]);
    }

    public function profil($id) {
		$data = User::find($id);
		return view('profil', ['out_users_profil' => $data]);
	}

    public function libreri() {
		$boo = Auth::user();
        $book = Book::all();
		return view('libreri', ['boo' => $boo, 'book'=> $book]);
	}

    public function book_out($id)
    {
        $book = Book::find($id);
        return view('book', ['book' => $book]);
    }

    public function book_delete($id)
    {
        Book::find($id)->delete();
        return redirect()->route('libreri');
    }

    public function book_update($id)
    {
        return view('book_update', ['id'=>$id]);
    }

    public function form_update_book($id, BookRequest $reg)
    {
        $book = Book::find($id);
        $book->name_book= $reg ->input('name_book');
        $book->text= $reg ->input('text');
        $book->save();
        return redirect() ->route('libreri');
    }


    

}
