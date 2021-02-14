<?php

declare(strict_types=1);

namespace CodewarsKataExporter\Interfaces;

interface SchemaInterface
{
    public function validate(array $data): bool;
}
