<?php

require "./src/todo.php";

use PHPUnit\Framework\TestCase;
use TDD\User;

class todoTest extends TestCase
{
    public $new_todo;
    public function setUp(): void
    {
        $this->$new_todos = new Todo();
    }
    public function tearDown(): void
    {
        unset($this->$new_todo);
    }
    public function testTodoName()
    {
        $new_todo->setTodoName(["jog","code","eat"]);

    }



}

?>