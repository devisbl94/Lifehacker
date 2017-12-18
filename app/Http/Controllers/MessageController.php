<?php

namespace App\Http\Controllers;

use App\Message;
use App\Http\Requests\MessageRequest;
use Illuminate\Http\Request;
use App\Events\MessageReceived;
use Illuminate\Support\Facades\Cache;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = Message::paginate(5);
        return view('message.index', compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MessageRequest $request)
    {
        $message = Message::create($request->all());
        event(new MessageReceived($message));
        Cache::flush();
        return redirect()->route('success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $message = Cache::remember("message.".$id, 1, function() use ($id){
                return Message::findOrFail($id);
            });
            return view('message.show', compact('message'));
        } catch(\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return redirect()
                    ->route('message.index')
                    ->with('error', 'Message does not exist.');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(MessageRequest $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Message::destroy($id);
        Cache::flush();
        return redirect()
                ->route('message.index')
                ->with('info', 'Message deleted.');
    }
}
