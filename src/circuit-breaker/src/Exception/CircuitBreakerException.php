<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */

namespace Hyperf\CircuitBreaker\Exception;

use RuntimeException;

class CircuitBreakerException extends RuntimeException
{
    public mixed $result = null;

    public function setResult(mixed $result): static
    {
        $this->result = $result;
        return $this;
    }

    public function getResult()
    {
        return $this->result;
    }
}
