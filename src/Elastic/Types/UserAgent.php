<?php

declare(strict_types=1);

// Licensed to Elasticsearch B.V under one or more agreements.
// Elasticsearch B.V licenses this file to you under the Apache 2.0 License.
// See the LICENSE file in the project root for more information

namespace Elastic\Types;

/**
 * Serializes to ECS User Agent
 *
 * @version v1.x
 *
 * @see https://www.elastic.co/guide/en/ecs/current/ecs-user_agent.html
 *
 * @author Philip Krauss <philip.krauss@elastic.co>
 */
class UserAgent extends BaseType implements \JsonSerializable
{
    /**
     * @var array
     */
    private $data;

    final public function setOriginal(string $original)
    {
        $this->data['original'] = $original;
    }

    /**
     * @inheritDoc
     */
    public function jsonSerialize()
    {
        return ['user_agent' => $this->data];
    }
}
