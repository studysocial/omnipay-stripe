<?php


namespace Omnipay\Stripe\Message;


class UpdateAccountRequest extends AbstractRequest
{
    public function getData()
    {
        $data = array();
        $data['email'] = $this->getEmail();
        $data['external_account'] = $this->getExternalAccount();
        $data['legal_entity'] = $this->getLegalEntity();

        if($this->getStatementDescriptor()) {
            $data['statement_descriptor'] = $this->getStatementDescriptor();
        }
        if($this->getTransferSchedule()) {
            $data['transfer_schedule'] = $this->getTransferSchedule();
        }

        if($this->getTosAcceptance()) {
            $data['tos_acceptance'] = $this->getTosAcceptance();
        }

        return $data;
    }

    public function getEndpoint()
    {
        return $this->endpoint . '/accounts/' . $this->getAccountId();
    }


    public function getAccountId()
    {
        return $this->getParameter('accountId');
    }

    public function setAccountId($value)
    {
        return $this->setParameter('accountId', $value);
    }


    public function getEmail()
    {
        return $this->getParameter('email');
    }

    public function setEmail($value)
    {
        return $this->setParameter('email', $value);
    }


    public function getExternalAccount()
    {
        return $this->getParameter('externalAccount');
    }

    public function setExternalAccount($value)
    {
        return $this->setParameter('externalAccount', $value);
    }

    public function getLegalEntity()
    {
        return $this->getParameter('legalEntity');
    }

    public function setLegalEntity($value)
    {
        return $this->setParameter('legalEntity', $value);
    }

    public function getStatementDescriptor()
    {
        return $this->getParameter('statementDescriptor');
    }

    public function setStatementDescriptor($value)
    {
        return $this->setParameter('statementDescriptor', $value);
    }

    public function getTransferSchedule()
    {
        return $this->getParameter('transferSchedule');
    }

    public function setTransferSchedule($value)
    {
        return $this->setParameter('transferSchedule', $value);
    }

    public function getTosAcceptance()
    {
        return $this->getParameter('tosAcceptance');
    }

    public function setTosAcceptance($value)
    {
        return $this->setParameter('tosAcceptance', $value);
    }
}