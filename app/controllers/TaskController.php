<?php

require_once __DIR__ . '/../models/Task.php';

class TaskController
{
    private $taskModel;

    public function __construct($pdo)
    {
        $this->taskModel = new Task($pdo);
    }

    public function index()
    {
        $tasks = $this->taskModel->getAllTasks();
        include __DIR__ . '/../views/tasks/index.php';
    }
}
