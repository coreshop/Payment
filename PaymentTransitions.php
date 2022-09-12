<?php

declare(strict_types=1);

/*
 * CoreShop
 *
 * This source file is available under two different licenses:
 *  - GNU General Public License version 3 (GPLv3)
 *  - CoreShop Commercial License (CCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 * @copyright  Copyright (c) CoreShop GmbH (https://www.coreshop.org)
 * @license    https://www.coreshop.org/license     GPLv3 and CCL
 *
 */

namespace CoreShop\Component\Payment;

final class PaymentTransitions
{
    public const IDENTIFIER = 'coreshop_payment';

    public const TRANSITION_CREATE = 'create';

    public const TRANSITION_PROCESS = 'process';

    public const TRANSITION_COMPLETE = 'complete';

    public const TRANSITION_FAIL = 'fail';

    public const TRANSITION_CANCEL = 'cancel';

    public const TRANSITION_REFUND = 'refund';

    public const TRANSITION_VOID = 'void';
}
