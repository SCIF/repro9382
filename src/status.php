<?php

declare(strict_types=1);

// used for debugging purposes to make sure preload was not done
/** @psalm-suppress ForbiddenCode */
var_dump(opcache_get_status(false));