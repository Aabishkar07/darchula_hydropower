<?php

use App\Models\OtherSetting;
use App\Models\Product;
use App\Models\Service;

function getSetting()
{
    return OtherSetting::first();
}

function getServices()
{
    return Service::get();
}
function getproducts()
{
    return Product::get();
}

