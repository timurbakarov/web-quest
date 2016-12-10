<?php

namespace App\Template\Widget;

use App\UrlGenerator;
use App\Contracts\Template\EngineContract;
use Symfony\Component\HttpFoundation\Request;

class ActivityNav
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
                'label' => 'New Words',
                'href' => $this->urlGenerator->generateUrl('activity-new-words'),
                'active' => in_array($this->request->getRequestUri(), [
                    '/activity-new-words',
                    '/activity-new-words-answers',
                ]),
            ],
            [
                'label' => 'Multiple Choice',
                'href' => $this->urlGenerator->generateUrl('task2'),
                'active' => $this->request->getRequestUri() == '/task2',
            ],
            [
                'label' => 'Marching',
                'href' => $this->urlGenerator->generateUrl('task3'),
                'active' => $this->request->getRequestUri() == '/task3',
            ],

        ];
    }
}