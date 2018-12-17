<?php

namespace ITEA\Bundle\NewsletterBundle\Service;

use ITEA\Bundle\NewsletterBundle\Dto\Subscriber;

interface SubscribeServiceInterface
{
    public function subscribe(Subscriber $subscriber);
}
