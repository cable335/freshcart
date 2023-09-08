<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\reply;

class messageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // 寫with可以將model的副程式傳入。 在dd裡面可以看到（要寫才能看到
        $messages = Message::with('reply')->get();
        return view('message.message',compact('messages'));
    }


    public function replayStore(Request $request, $id)
    {
        //
        // dd(ReplyToMessage::all());
        reply::create([
            'desc' => $request->reply,
            'product_type_id' => $id,
        ]);
        return redirect(route('message'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $type =  Message::create([
            'desc' => $request->message,
        ]);
        return redirect(route('message'));

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $message = message::find($id);
        $message->update([
            'desc' => $request->message,
        ]);
        return redirect(route('message'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $message = Message::find($id);
        foreach ($message->reply ?? [] as $value){
            $value->delete();
        }
        $message->delete();
        return redirect(route('message'));
    }
}
