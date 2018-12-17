<?php

namespace ITEA\Bundle\NewsletterBundle\Controller;

use ITEA\Bundle\NewsletterBundle\Dto\Subscriber;
use ITEA\Bundle\NewsletterBundle\Service\SubscribeServiceInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends AbstractController
{
    public function subscribe(Request $request, SubscribeServiceInterface $service)
    {
        $dto = Subscriber::fromRequest($request);
        $service->subscribe($dto);

        return $this->redirectToRoute('index');
    }
}
