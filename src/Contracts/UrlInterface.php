<?php

namespace Testeru\News2\Contracts;

interface UrlInterface
{
    public function getScheme();
    public function getQueryParams();
    public function getQueryParam($key, $defaultValue = null);
    public function getHost();
}
