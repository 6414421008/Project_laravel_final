<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{   
    //ดึงข้อมูล
    function pullData(){
        $gameData = Game::all();
        return view('tables', compact('gameData'));
    }


    //ลบข้อมูล
    function deleteData($id) {
        Game::find($id)->delete();
        $gameData = Game::all();
        return view('tables', compact('gameData'));
    }

    //แก้ไขข้อมูล
    function editData($id) {
        $editId = Game::find($id);
        return view('edit', compact('editId'));
    }

    //อับเดทข้อมูล
    function updateData(Request $request, $id) {
        $request->validate([
            'game_name' => 'required',
            'game_type' => 'required',
            'game_income' => 'required',
            'game_email' => 'required',
        ]);
    
        $game = Game::find($id);
        $game->update([
            'game_name' => $request->game_name,
            'game_type' => $request->game_type,
            'game_income' => $request->game_income,
            'game_email' => $request->game_email,
        ]);
        $gameData = Game::all();
    
        return view('tables', compact('gameData')); 
    }


    //เพิ่มข้อมูล
    function saveData(Request $request) {
        $request->validate([
            'game_name' => 'required',
            'game_type' => 'required',
            'game_income' => 'required',
            'game_email' => 'required',
        ]);

        DB::table('games')->insert([
            'game_name' => $request->game_name,
            'game_type' => $request->game_type,
            'game_income' => $request->game_income,
            'game_email' => $request->game_email,
        ]);

        $gameData = Game::all();
        return view('tables',compact('gameData'));
    }


    //กราฟข้อมูล
    public function showChart()
    {
        // ดึงข้อมูลจากฐานข้อมูลและเรียงตาม 'game_name'
        $games = Game::orderBy('game_name')->get();

        // สร้างตัวแปรสำหรับเก็บ labels และ data สำหรับ Chart.js
        $labels = $games->pluck('game_name');  //ดึงชื่อเกมมา
        $data = $games->pluck('game_income');  //ดึงรายได้ของเกมมา

        return view('index', compact('labels', 'data'));  //ส่งข้อมูล
    }
}
