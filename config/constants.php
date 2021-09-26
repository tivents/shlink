<?php

declare(strict_types=1);

namespace Shlinkio\Shlink;

use Fig\Http\Message\StatusCodeInterface;

const DEFAULT_DELETE_SHORT_URL_THRESHOLD = 15;
const DEFAULT_SHORT_CODES_LENGTH = 5;
const MIN_SHORT_CODES_LENGTH = 4;
const DEFAULT_REDIRECT_STATUS_CODE = StatusCodeInterface::STATUS_FOUND;
const DEFAULT_REDIRECT_CACHE_LIFETIME = 30;
const LOCAL_LOCK_FACTORY = 'Shlinkio\Shlink\LocalLockFactory';
const CUSTOM_SLUGS_REGEXP = '/[^\pL\pN._~]/u'; // Any unicode letter or number, plus ".", "_" and "~" chars
const TITLE_TAG_VALUE = '/<title[^>]*>(.*?)<\/title>/i'; // Matches the value inside an html title tag
