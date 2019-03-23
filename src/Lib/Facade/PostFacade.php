<?php
namespace src\Lib\Facade;
class PostFacade
{
    public function update(Post $post)
    {
        $dbService = new DBService();
        $dbService->publish($post);
        echo "\n";
        $logService = new LogService();
        $logService->log("Post with {$post->getId()} is published");
        echo "\n";
        $mailService = new MailService();
        $mailService->email($post->getId(), ['abc@example.com', 'xyz@example.com']);
        echo "\n";
    }

}
