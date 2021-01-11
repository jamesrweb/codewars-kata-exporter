<?php

declare(strict_types=1);

namespace CodewarsKataExporter\Schemas;

use Garden\Schema\RefNotFoundException;
use Garden\Schema\Schema;

/**
 * Class AuthoredChallengesSchema
 * @package CodewarsKataExporter\Schemas
 */
final class AuthoredChallengesSchema implements SchemaInterface
{
    /**
     * Get the schema used for validation
     *
     * @return Schema
     */
    public function schema(): Schema
    {
        return Schema::parse([
            "data:array" => [
                "id:string",
                "name:string",
                "description:string",
                "rank:int",
                "rankName:string",
                "tags:array" => "string",
                "languages:array" => "string"
            ]
        ]);
    }

    /**
     * Validate the schema
     *
     * @param array $data
     * @return bool
     * @throws RefNotFoundException
     */
    public function validate(array $data): bool
    {
        return $this->schema()->isValid($data);
    }
}