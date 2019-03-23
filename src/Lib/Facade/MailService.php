<?php

namespace src\Lib\Facade;

class MailService
{
    public function email(int $postId, array $subscriberEmails): void
    {
        // emails all the subscibers that post
        echo "mailing to subscribers";
    }
}
