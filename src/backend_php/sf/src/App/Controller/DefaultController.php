<?php
namespace App\Controller;

class DefaultController
{
    public function indexAction()
    {
        return new \Symfony\Component\HttpFoundation\Response(
            '<html><body>Lucky number: app </body></html>'
        );
    }
}