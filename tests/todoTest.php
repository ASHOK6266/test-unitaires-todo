<?php

require "./src/todo.php";

use PHPUnit\Framework\TestCase;
use TDD\todo\Todo;

class todoTest extends TestCase
{
    public $new_todo;
    public function setUp(): void
    {
        $this->new_todo = new Todo();
    }
    public function tearDown(): void
    {
        unset($this->new_todo);
    }
    public function testTodoName()
    {
        //Testing the function to ahve unique name
        $this->new_todo->setTodoName(["jog","code","eat","jog"]);
        $this->assertEquals($this->new_todo->getTodoListName(),["jog","code","eat"]);
    }

}

?>