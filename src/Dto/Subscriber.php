<?php

namespace ITEA\Bundle\NewsletterBundle\Dto;

use Symfony\Component\HttpFoundation\Request;

final class Subscriber
{
    private $email;

    public static function fromRequest(Request $request): Subscriber
    {
        return new self($request->get('email'));
    }

    public function __construct(string $email)
    {
        $this->email = $email;
    }

    public function getEmail(): string
    {
        return $this->email;
    }
}
