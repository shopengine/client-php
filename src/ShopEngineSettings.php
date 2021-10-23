<?php

namespace SSB\Api;

use SSB\Api\Contracts\ShopEngineSettingsInterface;

class ShopEngineSettings implements ShopEngineSettingsInterface
{
    private string $server;
    private string $shopIdentifier;
    private string $secret;

    /**
     * ShopEngineSettings constructor.
     * @param string $server
     * @param string $shopIdentifier
     * @param string $secret
     */
    public function __construct(
        string $server,
        string $shopIdentifier,
        string $secret
    )
    {
        $this->server = $server;
        $this->shopIdentifier = $shopIdentifier;
        $this->secret = $secret;
    }

    public function getShopEngineServer(): string
    {
        return $this->server;
    }

    public function getShopEngineShopIdentifier(): string
    {
        return $this->shopIdentifier;
    }

    public function getShopEngineSecret(): string
    {
        return $this->secret;
    }

    public function settingArray(): array
    {
        return [
            'server' => $this->getShopEngineServer(),
            'shopIdentifier' => $this->getShopEngineShopIdentifier(),
            'secret' => $this->getShopEngineSecret()
        ];
    }
}
