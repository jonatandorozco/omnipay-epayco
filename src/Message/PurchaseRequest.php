<?php

namespace Omnipay\Epayco\Message;

use Omnipay\Common\Message\AbstractRequest;

class PurchaseRequest extends AbstractRequest
{
    public function getData()
    {
        return $this->getBody();
    }

    public function getBody()
    {
        return $this->getParameter("body");
    }

    public function sendData($data)
    {
        $responseData = ['
        testing'];
        return $this->response = new PurchaseResponse($this, $responseData);
    }
}
