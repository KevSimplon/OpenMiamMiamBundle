<?php

namespace Isics\Bundle\OpenMiamMiamBundle\Form\Type;

use Symfony\Component\Form\AbstractType;

class PaymentsForAllocatePaymentType extends AbstractType
{
    public function getParent()
    {
        return 'entity';
    }

    /**
     * Returns the name of this type.
     *
     * @return string The name of this type
     */
    public function getName()
    {
        return 'open_miam_miam_payments_for_allocate_payment';
    }
}