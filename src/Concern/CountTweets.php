<?php

declare(strict_types=1);

namespace Atymic\Twitter\Concern;

use Atymic\Twitter\Exception\ClientException;

trait ExtraEndpoints
{
    use ApiV2Behavior;


    /**
     * @throws ClientException
     * @see https://developer.twitter.com/en/docs/twitter-api/tweets/counts/introduction
     */
    public function countRecent(string $query, array $additionalParameters)
    {
        $queryParameters = array_merge($additionalParameters, ['query' => $query]);

        return $this->getQuerier()
            ->get('tweets/counts/recent', $this->withDefaultParams($queryParameters));
    }
}
