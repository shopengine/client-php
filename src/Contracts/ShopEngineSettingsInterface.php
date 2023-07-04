<?php

namespace SSB\Api\Contracts;

interface ShopEngineSettingsInterface
{
    public function getShopEngineServer(): string;

    public function getShopEngineShopIdentifier(): string;

    public function getShopEngineSecret(): string;

    public function settingArray(): array;
}
