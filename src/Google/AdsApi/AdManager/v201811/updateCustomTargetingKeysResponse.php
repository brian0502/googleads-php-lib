<?php

namespace Google\AdsApi\AdManager\v201811;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class updateCustomTargetingKeysResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v201811\CustomTargetingKey[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v201811\CustomTargetingKey[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201811\CustomTargetingKey[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201811\CustomTargetingKey[] $rval
     * @return \Google\AdsApi\AdManager\v201811\updateCustomTargetingKeysResponse
     */
    public function setRval(array $rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
