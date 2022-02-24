<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class GoogleSheetHandler
{
    private $data = [];
    private const RPL_URL = "https://script.google.com/macros/s/AKfycbzKxuqTCD4jKT65GlHX1zywCfZXyHW9WFdOVU9WCA_2OMeG9FZPCWY04VxuIrIf2ztq-g/exec";

    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }

    public function saveRPL()
    {
        $this->data['sheet'] = "ITEC";
        $res = Http::post(self::RPL_URL, $this->data);

        if ($res->getStatusCode() != 200) {
            throw new \Exception("Error saving RPL. Response code was: " . $res->getStatusCode()
                . ". Response: " . $res->getBody());
        }

        return $res->body();
    }
}
