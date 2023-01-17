<?php

namespace Joy\VoyagerReplaceKeyword\Http\Controllers;

use Joy\VoyagerReplaceKeyword\Http\Traits\ReplaceKeywordAction;
use Joy\VoyagerCore\Http\Controllers\VoyagerBaseController as BaseVoyagerBaseController;

class VoyagerBaseController extends BaseVoyagerBaseController
{
    use ReplaceKeywordAction;
}
