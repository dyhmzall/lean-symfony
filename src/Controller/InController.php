<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class InController extends AbstractController
{
    #[Route('/in', name: 'app_in')]
    public function index(): Response
    {
        return new Response(<<<EOT
<html>
<body>
all is fine
<div>
<button>тест. внести 100 рублей</button>
</div>
</body>
</html>
EOT
        );
    }
}
