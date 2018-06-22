<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use App\Http\Requests\AddNoteRequest;

class NoteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show(Note $note)
    {
       return view('system.note_create_and_edit', compact('note'));
    }

    public function create(AddNoteRequest $request, Note $note)
    {
        $data = [
            'flag' => $request->flag,
        ];

        $note->fill($data);
        $note->save();

        return redirect()->route('note.showNoteList')->with('success','新建成功!');

    }

    public function showNoteList()
    {
        $i = 1;
        $notes = Note::paginate(20);
        return view('system.noteList', compact('notes','i'));
    }

    public function edit(Note $note)
    {
        return view('system.note_create_and_edit', compact('note'));
    }

    public function update(AddNoteRequest $request, Note $note)
    {
          $data = [
              'flag' => $request->flag,
          ];

          $note->update($data);

          return  redirect()->route('note.showNoteList')->with('success','更新成功!');
    }

    public function destory(Note $note)
    {
        $note->delete();

        return redirect()->route('note.showNoteList')->with('success','删除成功!');
    }
}
