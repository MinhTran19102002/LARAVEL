<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Faker\Guesser\Name;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;

class RoomController extends Controller
{
    //
    public function index(){
        $room = DB::select("SELECT * FROM rooms;");
        return view('rooms.index')->with("rooms", $room);
    }

    public function addRoom(){
        return view('rooms.addRoom');
    }

    public function store(Request $request) {
        $room = new Room();
        $room->name = $request->input('room_name');
        // $room->name = 'Phong thu 2';
        $room->save();
        return redirect("/room");
    }
}
