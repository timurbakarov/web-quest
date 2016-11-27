<?php

namespace App\Template\Widget;

use App\UrlGenerator;
use App\Contracts\Template\EngineContract;
use Symfony\Component\HttpFoundation\Request;

class TasksNav
{
    /**
     * @var EngineContract
     */
    private $view;

    /**
     * @var UrlGenerator
     */
    private $urlGenerator;

    /**
     * @var Request
     */
    private $request;

    public function __construct(EngineContract $view, UrlGenerator $urlGenerator, Request $request)
    {
        $this->view = $view;
        $this->urlGenerator = $urlGenerator;
        $this->request = $request;
    }

    /**
     * @return string
     */
    public function run()
    {
        return $this->view->render('partials/tasks_nav', ['items' => $this->items()]);
    }

    /**
     * @return array
     */
    private function items()
    {
        return [
            [
                'label' => 'Task 1',
                'href' => $this->urlGenerator->generateUrl('task1'),
                'active' => $this->request->getRequestUri() == '/task1',
            ],
            [
                'label' => 'Task 2',
                'href' => $this->urlGenerator->generateUrl('task2'),
                'active' => $this->request->getRequestUri() == '/task2',
            ],
            [
                'label' => 'Task 3',
                'href' => $this->urlGenerator->generateUrl('task3'),
                'active' => $this->request->getRequestUri() == '/task3',
            ],
            [
                'label' => 'Task 4',
                'href' => $this->urlGenerator->generateUrl('task4'),
                'active' => $this->request->getRequestUri() == '/task4',
            ],
            [
                'label' => 'Task 5',
                'href' => $this->urlGenerator->generateUrl('task5'),
                'active' => $this->request->getRequestUri() == '/task5',
            ],

        ];
    }
}