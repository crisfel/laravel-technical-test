<?php

namespace App\Repositories\Contracts\PaymentMethodOption;

interface PaymentMethodOptionRepositoryInterface
{
    public function getByPaymentMethodID(int $id);



}