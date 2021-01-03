<?php

namespace Omnipay\Epayco\Message;

use Omnipay\Common\Message\AbstractResponse;

class PurchaseResponse extends AbstractResponse
{
    protected $request;

    public function isSuccessful()
    {
        return true;
    }
}
