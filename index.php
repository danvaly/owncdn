<?php
require_once(dirname(__FILE__) . '/CDN.php');
CDN::serve('https://example.com', './cache/', null, 2628000);
