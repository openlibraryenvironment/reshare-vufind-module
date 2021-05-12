<?php

namespace ReShare\RecordDriver;

class SolrFolio extends \VuFind\RecordDriver\SolrDefault
{

    use \VuFind\RecordDriver\IlsAwareTrait;

    protected $patronID;	

    public function __construct($patronID = null)
    {
        $this->patronID = $patronID;
    }

    public function getDefaultOpenUrlParams()
    {
        // Get a representative publication date:
        $pubDate = $this->getPublicationDates();
        $pubDate = empty($pubDate) ? '' : $pubDate[0];
        // Start an array of OpenURL parameters:
        return [
            'req_id' => $this->patronID,
	        'rft_id' => $this->getUniqueID(),
            'url_ver' => 'Z39.88-2004',
            'ctx_ver' => 'Z39.88-2004',
            'ctx_enc' => 'info:ofi/enc:UTF-8',
            'rfr_id' => 'info:sid/' . $this->getCoinsID() . ':generator',
            'rft.title' => $this->getTitle(),
            'rft.date' => $pubDate
        ];
    }
}

