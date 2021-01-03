<?php

namespace Omnipay\Epayco;

use Omnipay\Common\AbstractGateway;

class Gateway extends AbstractGateway
{
    public function getName()
    {
        return "Epayco";
    }

    public function setPublicKey(String $value)
    {
        if (strlen($value) === 0) {
            throw new \Exception("Empty api key");
        }

        return $this->setParameter("public_key", $value);
    }

    public function getPublicKey(): ?String
    {
        return $this->getParameter("public_key");
    }

    public function setPrivateKey(String $value)
    {
        return $this->setParameter("private_key", $value);
    }

    public function getPrivateKey(): String
    {
        return $this->getParameter("private_key");
    }

    public function purchase($options = array())
    {
        return $this->createRequest('\Omnipay\Epayco\Message\PurchaseRequest', $options);
    }
}
