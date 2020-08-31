<?php

namespace MarcoSimbuerger\DataContainerExtensionBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use MarcoSimbuerger\DataContainerExtensionBundle\ContaoDataContainerExtensionBundle;

/**
 * Class Plugin.
 *
 * @package MarcoSimbuerger\DataContainerExtensionBundle\ContaoManager
 */
class Plugin implements BundlePluginInterface {

    /**
     * {@inheritdoc}.
     */
    public function getBundles(ParserInterface $parser) {
        return [
            BundleConfig::create(ContaoDataContainerExtensionBundle::class)
                ->setLoadAfter([
                    ContaoCoreBundle::class,
                ]),
        ];
    }
}
