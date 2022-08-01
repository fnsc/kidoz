<?php

namespace Fnsc\KidozCodingChallenge\Infra\Adapters;

class Event
{
    public static function queue(Email $email): void
    {
        SuperEvent::queue($email->dispatch());
    }
}