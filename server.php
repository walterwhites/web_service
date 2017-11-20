<?php

require_once "core/Router.php";
require_once "core/WebService.php";

WebService::load(Router::getService());