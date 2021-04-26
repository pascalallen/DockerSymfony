<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class IndexController
 */
final class IndexController extends AbstractController
{
    /**
     * Index template
     *
     * @var string
     */
    protected const INDEX_TEMPLATE = 'default/index.html.twig';

    /**
     * Handles catch-all route
     */
    #[Route(
        path: '/{path?}',
        name: 'default.index',
        requirements: ['path' => '^((?!api).)*$'],
        methods: [Request::METHOD_GET]
    )]
    public function handle(?string $path = null): Response
    {
        $parameters = [
            'path' => $path
        ];

        return $this->render(self::INDEX_TEMPLATE, $parameters);
    }
}
