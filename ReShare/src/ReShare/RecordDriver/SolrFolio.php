<?php

namespace ReShare\RecordDriver;

class SolrFolio extends \VuFind\RecordDriver\SolrDefault
{

    use \VuFind\RecordDriver\IlsAwareTrait;

    protected $tstPatron;	

    public function __construct($tstPatron = null)
    {
        $this->tstPatron = $tstPatron;
    }

    public function getDefaultOpenUrlParams()
    {
        // Get a representative publication date:
        $pubDate = $this->getPublicationDates();
        $pubDate = empty($pubDate) ? '' : $pubDate[0];
        // Start an array of OpenURL parameters:
        return [
            'req_id' => $this->tstPatron,
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

