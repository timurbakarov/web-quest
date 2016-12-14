<?php

namespace App\Template\Widget;

use App\Contracts\Template\EngineContract;
use App\UrlGenerator;
use Symfony\Component\HttpFoundation\Request;

class Navbar
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
        return $this->view->render('partials/navbar', ['items' => $this->items()]);
    }

    /**
     * @return array
     */
    private function items()
    {
        return [
            [
                'label' => 'Introduction',
                'href' => $this->urlGenerator->generateUrl(''),
                'active' => $this->request->getRequestUri() == '/',
            ],
            [
                'label' => 'Steps',
                'href' => $this->urlGenerator->generateUrl('steps'),
                'active' => in_array($this->request->getRequestUri(), [
                    '/steps',
                    '/step1',
                    '/step2',
                    '/step3',
                    '/step4',
                    '/step5',
                ]),
            ],
            [
                'label' => 'Activities',
                'href' => $this->urlGenerator->generateUrl('activity-new-words'),
                'active' => in_array($this->request->getRequestUri(), [
                    '/activity-new-words',
                    '/activity-new-words-answers',
                    '/activity-multiple-choice',
                    '/activity-matching',
                ]),
            ],
            [
                'label' => 'Evaluation',
                'href' => $this->urlGenerator->generateUrl('evaluation'),
                'active' => $this->request->getRequestUri() == '/evaluation',
            ],
            [
                'label' => 'Conclusion',
                'href' => $this->urlGenerator->generateUrl('conclusion'),
                'active' => $this->request->getRequestUri() == '/conclusion',
            ],
        ];
    }
}