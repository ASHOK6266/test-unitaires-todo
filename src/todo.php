<?php

class Todo
{
    public $totalTodoList = 0;
    public $todoNameChecker = ["jog","study","code"];
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

    public function TodoListName($name)
    {
        

    }



}