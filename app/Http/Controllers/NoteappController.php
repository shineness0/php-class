<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NoteappController extends Controller
{
    public function showNotes()
    {
        return view('noteapp.createNote');
    }

    public function createNote(Request $req)
    {
        $insert = DB::table('noteapp_table')->insert([
            'title' => $req->title,
            'content' => $req->content,
        ]);

        if ($insert) {
            return ($insert);
        } else {
            return ('Something went wrong');
        }
    }

    public function displayNotes()
    {
        $select = DB::table('noteapp_table')->get();

        // return ($select);

        return view('noteapp.displayNote', [
            'data' => $select
        ]);
    }


    public function displayNote($id)
    {
        $note = DB::table('noteapp_table')->where('note_id', $id)->first();


        return view('noteapp.viewNote', [
            'data' => $note
        ]);
    }

    public function editNote($id)
    {

        $note = DB::table('noteapp_table')->where('note_id', $id)->first();


        return view('noteapp.edit', [
            'data' => $note
        ]);
    }


    public function updateNote(Request $req, $id)
    {

        $update = DB::table('noteapp_table')->where('note_id', $id)->update([
            'title' => $req->title,
            'content' => $req->content,
        ]);

        if ($update) {
            return redirect('/noteapp/display');
        } else {
            return ('Something went wrong');
        }
    }
}
