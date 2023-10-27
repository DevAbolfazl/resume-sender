<?php

namespace interfaces\;

interface STMPMailer
{
    public function __construct(string $host, int $port, string $security, string $username, string $password, string $from_email, string $from_name);

    public function add_recipient(string $email): bool;

    public function set_content(string $subject, string $body, bool $is_html = true);

    public function send($addToDatabase = true): bool;
}