<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Todo::all();
        return view('todo/index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('todo/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //env('SLACK_WEBHOOK_URL')
        $project = new Todo;
        $project->tile = $request->title;
        $project->description = $request->description;
        $project->state = $request->status;

        $project->save();
        $message = array(
            'username' => 'Bot',
            'text' => $request->title.'が追加されました',
            );
        $this->send_to_slack($message);
        return redirect('/news');
    }
/**
 * 
 * $message = array(
 *       'username' => 'Bot',
 *       'text' => 'fooooo!!!',
 *       );
 */
    private function send_to_slack($message) 
    {
        $webhook_url = env('SLACK_WEBHOOK_URL');
        // $options = array(
        //     'http' => array(
        //     'method' => 'POST',
        //     'header' => 'Content-Type: application/json',
        //     'content' => json_encode($message),
        //     )
        // );
        $msg = json_encode($message);
        $msg = 'payload=' . urlencode($msg);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $webhook_url);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $msg);
        curl_exec($ch);
        curl_close($ch);
        //$response = file_get_contents($webhook_url, false, stream_context_create($options));
        //exit(var_dump($response));
        return;    
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
