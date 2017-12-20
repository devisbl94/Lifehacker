<?php

namespace App\Http\Controllers;

use App\Task;
use App\Category;
use App\Http\Requests\TaskRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Pagination\LengthAwarePaginator as Paginator;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $GET = $request->all();

        $userID = Auth::user()->id;
        $cache_key = 'tasks.' . 'user.' . $userID . '.';
        $sort = '';

        if (!empty($GET['sort'])) {
            $cache_key .= $GET['sort'] . '.';
            $sort = $GET['sort'];
        }

        if (!empty($GET['page'])) {
            $cache_key .= 'page.' . $GET['page'];
        }

        if (empty($GET['sort']) && empty($GET['page'])) {
            $cache_key .= 'all';
        }

        if (!empty($GET['sort'])) {

            switch ($GET['sort']) {
                case 'older':
                    $tasks = Cache::remember($cache_key, 3, function() use ($userID) {
                        return Task::where('user_id', $userID)
                            ->with('category')
                            ->orderBy('updated_at', 'asc')
                            ->paginate(9);
                    });
                    break;

                case 'newer':
                    $tasks = Cache::remember($cache_key, 3, function() use ($userID) {
                        return Task::where('user_id', $userID)
                            ->with('category')
                            ->orderBy('updated_at', 'desc')
                            ->paginate(9);
                    });
                    break;

                case 'dateold':
                    $tasks = Cache::remember($cache_key, 3, function() use ($userID) {
                        return Task::where('user_id', $userID)
                            ->with('category')
                            ->orderBy('deadline', 'desc')
                            ->paginate(9);
                    });
                    break;

                case 'datenew':
                    $tasks = Cache::remember($cache_key, 3, function() use ($userID) {
                        return Task::where('user_id', $userID)
                            ->with('category')
                            ->orderBy('deadline', 'asc')
                            ->paginate(9);
                    });
                    break;
            }
        } else {
            $tasks = Cache::remember($cache_key, 3, function() use ($userID) {
                return Task::where('user_id', $userID)
                ->with('category')
                ->paginate(9);
            });
        }


        return view('task.index', compact(['tasks', 'sort']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Cache::remember("categories.all", 3, function() {
            return Category::pluck('name', 'id');
        });
        return view('task.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TaskRequest $request)
    {
        Task::create($request->all());
        Cache::flush();
        return redirect()->route('task.index')->with('info', 'Task created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $task = Cache::remember("task.".$id, 1, function() use ($id){
                return Task::where('user_id', Auth::user()->id)->findOrFail($id);
            });
            return view('task.show', compact('task'));
        } catch(\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return redirect()->route('task.index')->with('error', 'That task does not exist, fella.');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $task = Cache::remember("task.".$id, 3, function() use ($id){
                return Task::findOrFail($id);
            });
            $categories = Cache::remember("categories.all", 3, function(){
                return Category::pluck('name', 'id');
            });
            return view('task.edit', compact(['task', 'categories']));
        } catch(\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return redirect()->route('task.index')->with('error', 'That task does not exist, fella.');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(TaskRequest $request, $id)
    {
        Task::findOrFail($id)->update($request->all());
        Cache::flush();
        $task = Cache::remember("task.".$id, 3, function() use ($id){
            return Task::findOrFail($id);
        });
        return redirect()->route('task.show', compact('task'))->with('info', 'Your task has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Task::destroy($id);
        Cache::flush();
        return redirect()->route('task.index')->with('info', 'Your task has been deleted!');
    }
}
