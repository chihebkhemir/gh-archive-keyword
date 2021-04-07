<?php

declare(strict_types=1);

namespace App\Import\Mapper;

interface RestrictedMapperInterface
{
    /**
     * Check if provided data can be mapped thanks to it mapper.
     *
     * @param mixed $data
     */
    public function supports($data, string $type): bool;
}
