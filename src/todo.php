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
        $this->todoNameChecker = $name;
        foreach($name as $unique){
            if($unique[0] == "jog")
            {
                echo "same task not allowed";
            }
        }

    }
    public function getTodoListName()
    {
        return $this->todoNameChecker;
    }



}