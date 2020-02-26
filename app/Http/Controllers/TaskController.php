<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTask;
use App\Task;

class TaskController extends Controller
{
    public function fetchAll()
    {
        return Task::orderBy('created_date', 'asc')->get();
    }

    public function store(StoreTask $task)
    {
        if (!$task->validated()) {
            Task::create(['title' => $task->title]);
        }

        return Task::orderBy('created_date', 'asc')->get();
    }

    public function complete($id)
    {
        $task = Task::findOrFail($id);
        $task->completed = 'true';
        $task->save();
    }

    public function update(StoreTask $task)
    {
        if ($task->validated()) {
            $currentTask = Task::findOrFail($task->id);
            $currentTask->title = $task->title;
            $currentTask->save();
        }
    }

    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();
    }
}
