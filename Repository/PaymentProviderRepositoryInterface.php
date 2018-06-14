<?php
/**
 * CoreShop.
 *
 * This source file is subject to the GNU General Public License version 3 (GPLv3)
 * For the full copyright and license information, please view the LICENSE.md and gpl-3.0.txt
 * files that are distributed with this source code.
 *
 * @copyright  Copyright (c) 2015-2017 Dominik Pfaffenbauer (https://www.pfaffenbauer.at)
 * @license    https://www.coreshop.org/license     GNU General Public License version 3 (GPLv3)
 */

namespace CoreShop\Component\Payment\Repository;

use CoreShop\Component\Payment\Model\PaymentProviderInterface;
use CoreShop\Component\Resource\Repository\RepositoryInterface;

interface PaymentProviderRepositoryInterface extends RepositoryInterface
{
    /**
     * @deprecated findByName is deprecated since 2.0.0-beta.2 and will be removed in 2.0.0, use findByTitle instead
     *
     * @param string $name
     * @param string $locale
     *
     * @return PaymentProviderInterface[]
     */
    public function findByName($name, $locale);

    /**
     * @param string $title
     * @param string $locale
     *
     * @return PaymentProviderInterface[]
     */
    public function findByTitle($title, $locale);

    /**
     * @return PaymentProviderInterface[]
     */
    public function findActive();
}
