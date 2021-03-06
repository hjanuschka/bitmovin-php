<?php

namespace Bitmovin\api\resource\inputs;

use Bitmovin\api\model\inputs\AzureInput;

class AzureInputResource extends InputResource
{

    /**
     * @param AzureInput $input
     *
     * @return AzureInput
     * @throws \Bitmovin\api\exceptions\BitmovinException
     */
    public function create(AzureInput $input)
    {
        return parent::createInput($input);
    }

    /**
     * @param AzureInput $input
     *
     * @return AzureInput
     * @throws \Bitmovin\api\exceptions\BitmovinException
     */
    public function delete(AzureInput $input)
    {
        return parent::deleteInput($input);
    }

    /**
     * @param AzureInput $input
     *
     * @return AzureInput
     * @throws \Bitmovin\api\exceptions\BitmovinException
     */
    public function get(AzureInput $input)
    {
        return parent::getInput($input);
    }

    /**
     * @param integer $offset
     * @param integer $limit
     * @return AzureInput[]
     */
    public function listPage($offset = 0, $limit = 25)
    {
        /** @noinspection PhpIncompatibleReturnTypeInspection */
        return $this->listResourcePage($offset, $limit);
    }

    /**
     * @param $inputId
     *
     * @return AzureInput
     * @throws \Bitmovin\api\exceptions\BitmovinException
     */
    public function getById($inputId)
    {
        return parent::getInputById($inputId);
    }

    /**
     * @param $inputId
     *
     * @return AzureInput
     * @throws \Bitmovin\api\exceptions\BitmovinException
     */
    public function deleteById($inputId)
    {
        return parent::deleteInputById($inputId);
    }
}