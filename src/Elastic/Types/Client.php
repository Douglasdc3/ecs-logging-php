<?php

declare(strict_types=1);

// Licensed to Elasticsearch B.V under one or more agreements.
// Elasticsearch B.V licenses this file to you under the Apache 2.0 License.
// See the LICENSE file in the project root for more information

namespace Elastic\Types;

/**
 * Serializes to ECS Client
 *
 * @version v1.x
 *
 * @see https://www.elastic.co/guide/en/ecs/current/ecs-client.html
 *
 * @author Philip Krauss <philip.krauss@elastic.co>
 */
class Client extends BaseType implements \JsonSerializable
{
    /**
     * @var array
     */
    private $data;

    final public function setAddress(string $address)
    {
        $this->data['address'] = $address;
    }

    final public function setBytes(int $bytes)
    {
        $this->data['bytes'] = $bytes;
    }

    final public function setDomain(string $domain)
    {
        $this->data['domain'] = $domain;
    }

    final public function setIp(string $ip)
    {
        $this->data['ip'] = $ip;
    }

    final public function setPort(int $port)
    {
        $this->data['port'] = $port;
    }

    final public function setMac(string $mac)
    {
        $this->data['mac'] = $mac;
    }

    final public function setNatIp(string $ip)
    {
        $this->data['nat']['ip'] = $ip;
    }

    final public function setNatPort(string $port)
    {
        $this->data['nat']['port'] = $port;
    }

    final public function setPackets(int $packets)
    {
        $this->data['packets'] = $packets;
    }

    final public function setRegisteredDomain(string $domain)
    {
        $this->data['registered_domain'] = $domain;
    }

    final public function setTopLevelDomain(string $tld)
    {
        $this->data['top_level_domain'] = $tld;
    }

    /**
     * @inheritDoc
     */
    public function jsonSerialize()
    {
        return ['client' => $this->data];
    }
}
