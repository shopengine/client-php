<?php namespace SSB\Api\Event;

class End
{
    public $url = '';

    public function __construct(string $url)
    {
        $this->url = $url;
    }
}