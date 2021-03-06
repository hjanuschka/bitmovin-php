<?php

namespace Bitmovin\api\resource\encodings\streams\muxings;

use Bitmovin\api\model\encodings\Encoding;
use Bitmovin\api\model\encodings\muxing\FMP4Muxing;
use Bitmovin\api\resource\encodings\streams\muxings\drm\Fmp4DrmContainer;

class Fmp4MuxingResource extends MuxingResource
{
    /** @var Encoding */
    private $encoding;

    /**
     * Fmp4MuxingResource constructor.
     *
     * @param Encoding $encoding
     * @param string   $baseUri
     * @param string   $modelClassName
     * @param string   $apiKey
     */
    public function __construct(Encoding $encoding, $baseUri, $modelClassName, $apiKey)
    {
        parent::__construct($baseUri, $modelClassName, $apiKey);
        $this->encoding = $encoding;
    }

    /**
     * @param FMP4Muxing $fmp4Muxing
     *
     * @return FMP4Muxing
     * @throws \Bitmovin\api\exceptions\BitmovinException
     */
    public function create(FMP4Muxing $fmp4Muxing)
    {
        return parent::createMuxing($fmp4Muxing);
    }

    /**
     * @param FMP4Muxing $fmp4Muxing
     *
     * @return FMP4Muxing
     * @throws \Bitmovin\api\exceptions\BitmovinException
     */
    public function delete(FMP4Muxing $fmp4Muxing)
    {
        return parent::deleteMuxing($fmp4Muxing);
    }

    /**
     * @param FMP4Muxing $fmp4Muxing
     *
     * @return FMP4Muxing
     * @throws \Bitmovin\api\exceptions\BitmovinException
     */
    public function get(FMP4Muxing $fmp4Muxing)
    {
        return parent::getMuxing($fmp4Muxing);
    }

    /**
     * @param integer $offset
     * @param integer $limit
     * @return FMP4Muxing[]
     */
    public function listPage($offset = 0, $limit = 25)
    {
        /** @noinspection PhpIncompatibleReturnTypeInspection */
        return $this->listResourcePage($offset, $limit);
    }

    /**
     * @param $fmp4MuxingId
     *
     * @return FMP4Muxing
     * @throws \Bitmovin\api\exceptions\BitmovinException
     */
    public function getById($fmp4MuxingId)
    {
        return parent::getMuxingById($fmp4MuxingId);
    }

    /**
     * @param $fmp4MuxingId
     *
     * @return FMP4Muxing
     * @throws \Bitmovin\api\exceptions\BitmovinException
     */
    public function deleteById($fmp4MuxingId)
    {
        return parent::deleteMuxingById($fmp4MuxingId);
    }

    /**
     * @param FMP4Muxing $muxing
     * @return Fmp4DrmContainer
     */
    public function drm(FMP4Muxing $muxing)
    {
        return new Fmp4DrmContainer($this->encoding, $muxing, $this->getApiKey());
    }

}