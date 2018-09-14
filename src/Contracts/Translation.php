<?php

namespace Nilnice\Translation\Contracts;

interface Translation
{
    public function translate(string $text, string $translator): array;
}
