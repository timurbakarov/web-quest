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
                'label' => 'Step 1',
                'href' => $this->urlGenerator->generateUrl('step1'),
                'active' => $this->request->getRequestUri() == '/step1',
            ],
            [
                'label' => 'Step 2',
                'href' => $this->urlGenerator->generateUrl('step2'),
                'active' => $this->request->getRequestUri() == '/step2',
            ],
            [
                'label' => 'Step 3',
                'href' => $this->urlGenerator->generateUrl('step3'),
                'active' => $this->request->getRequestUri() == '/step3',
            ],
            [
                'label' => 'Step 4',
                'href' => $this->urlGenerator->generateUrl('step4'),
                'active' => $this->request->getRequestUri() == '/step4',
            ],
            [
                'label' => 'Step 5',
                'href' => $this->urlGenerator->generateUrl('step5'),
                'active' => $this->request->getRequestUri() == '/step5',
            ],

        ];
    }
}