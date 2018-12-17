<?php

namespace ITEA\Bundle\NewsletterBundle\Service;

use ITEA\Bundle\NewsletterBundle\Dto\Subscriber;

final class DumpSubscriberService implements SubscribeServiceInterface
{
    public function subscribe(Subscriber $subscriber)
    {
        \var_dump($subscriber);
    }
}
