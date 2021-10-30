<?php

namespace Haritsyp\Shipper\Repository;

use Haritsyp\Shipper\Models\Callback\Callback;
use Haritsyp\Shipper\Shipper;
use Illuminate\Http\Request;
use Exception;

class ShipperCallback extends Shipper
{
    public function handler(Request $request)
    {
        if (!$this->isValidCallback($request)) {
            throw new Exception("Auth Has Not Valid");
        }

        return new Callback($request->all());
    }

    private function isValidCallback(Request $request)
    {
        if ($request->auth === md5($this->getApiKey() . $request->getUri() . 'json')) {
            return true;
        }

        return false;
    }
}