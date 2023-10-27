<?php

namespace interfaces\;

interface Site
{
    public function __construct();

    public function get_jobs(int $numberOfJobs, bool $primary = true): array;

    public function __destruct();
}