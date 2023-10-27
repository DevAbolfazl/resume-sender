<?php

class Gmail_Mail implements interfaces\STMPMailer
{
    protected string $host;
    protected int $port;
    public function __construct(string $host, int $port, string $security, string $username, string $password, string $from_email, string $from_name)
    {

    }

    public function add_recipient(string $email): bool
    {
        // TODO: Implement add_recipient() method.
    }

    public function set_content(string $subject, string $body, bool $is_html = true)
    {
        // TODO: Implement set_content() method.
    }

    public function send($addToDatabase = true): bool
    {
        // TODO: Implement send() method.
    }
}