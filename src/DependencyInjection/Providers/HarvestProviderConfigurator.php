<?php

/*
 * OAuth2 Client Bundle
 * Copyright (c) KnpUniversity <http://knpuniversity.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace KnpU\OAuth2ClientBundle\DependencyInjection\Providers;

use Symfony\Component\Config\Definition\Builder\NodeBuilder;

class HarvestProviderConfigurator implements ProviderConfiguratorInterface
{
    public function buildConfiguration(NodeBuilder $node)
    {
        // no custom options
    }

    public function getProviderClass(array $config)
    {
        return 'Nilesuan\OAuth2\Client\Provider\Harvest';
    }

    public function getProviderOptions(array $config)
    {
        return [
            'clientId' => $config['client_id'],
            'clientSecret' => $config['client_secret'],
        ];
    }

    public function getPackagistName()
    {
        return 'nilesuan/oauth2-harvest';
    }

    public function getLibraryHomepage()
    {
        return 'https://github.com/nilesuan/oauth2-harvest';
    }

    public function getProviderDisplayName()
    {
        return 'Harvest';
    }

    public function getClientClass(array $config)
    {
        return 'KnpU\OAuth2ClientBundle\Client\Provider\HarvestClient';
    }
}