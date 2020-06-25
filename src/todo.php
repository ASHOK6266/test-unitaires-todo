<?php

namespace TDD\todo;


class Todo
{
    public $totalTodoList = 0;
    public $todoNameChecker;
    public $timeChecker;

    public function TotalTodoList()
    {
        if($totalTodoList <= 10)
        {
            echo "your new todo created successfully";
        }
        else
        {
            echo "Maximum todo list attained";
        }
    }
    public function setTodoName($name)
    {
        //function that returns only the unique name
        $this->todoNameChecker = array_unique($name);
    }
    public function getTodoListName()
    {
        return $this->todoNameChecker;
    }


}