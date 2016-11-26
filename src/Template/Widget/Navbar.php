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
                'label' => 'Task',
                'href' => $this->urlGenerator->generateUrl('tasks'),
                'active' => $this->request->getRequestUri() == '/tasks',
            ],
            [
                'label' => 'Steps',
                'href' => $this->urlGenerator->generateUrl('about'),
                'active' => $this->request->getRequestUri() == '/steps',
            ],
            [
                'label' => 'Activities',
                'href' => $this->urlGenerator->generateUrl('about'),
                'active' => $this->request->getRequestUri() == '',
            ],
            [
                'label' => 'Evaluation',
                'href' => $this->urlGenerator->generateUrl('about'),
                'active' => $this->request->getRequestUri() == '',
            ],
            [
                'label' => 'Conclusion',
                'href' => $this->urlGenerator->generateUrl('conclusion'),
                'active' => $this->request->getRequestUri() == '/conclusion',
            ],
        ];
    }
}