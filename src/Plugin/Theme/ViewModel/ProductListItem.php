<?php

declare(strict_types=1);

namespace Infrangible\CatalogProductFilterUrlHyva\Plugin\Theme\ViewModel;

use Infrangible\CatalogProductFilterUrl\Helper\Data;

/**
 * @author      Andreas Knollmann
 * @copyright   Copyright (c) 2014-2024 Softwareentwicklung Andreas Knollmann
 * @license     http://www.opensource.org/licenses/mit-license.php MIT
 */
class ProductListItem
{
    /** @var Data */
    protected $helper;

    public function __construct(Data $helper)
    {
        $this->helper = $helper;
    }

    /** @noinspection PhpUnusedParameterInspection */
    public function afterGetItemCacheKeyInfo(\Hyva\Theme\ViewModel\ProductListItem $subject, array $result): array
    {
        $query = $this->helper->extractQuery();

        if ($query) {
            $result[] = $query;
        }

        return $result;
    }
}
