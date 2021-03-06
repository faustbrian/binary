<?php

declare(strict_types=1);

/**
 * Copyright (c) Konceiver Oy <legal@konceiver.dev>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Konceiver\Binary\Buffer\Reader\Concerns;

use Konceiver\Binary\UnsignedInteger\Reader;

trait UnsignedInteger
{
    /**
     * Read an unsigned 8 bit integer.
     *
     * @return \Konceiver\Binary\Buffer\Reader\Buffer
     */
    public function readUInt8()
    {
        $value = Reader::bit8($this->bytes);

        $this->skip(1);

        return $value;
    }

    /**
     * Read an unsigned 16 bit integer.
     *
     * @return \Konceiver\Binary\Buffer\Reader\Buffer
     */
    public function readUInt16()
    {
        $value = Reader::bit16($this->bytes);

        $this->skip(2);

        return $value;
    }

    /**
     * Read an unsigned 32 bit integer.
     *
     * @return \Konceiver\Binary\Buffer\Reader\Buffer
     */
    public function readUInt32()
    {
        $value = Reader::bit32($this->bytes);

        $this->skip(4);

        return $value;
    }

    /**
     * Read an unsigned 64 bit integer.
     *
     * @return \Konceiver\Binary\Buffer\Reader\Buffer
     */
    public function readUInt64()
    {
        $value = Reader::bit64($this->bytes);

        $this->skip(8);

        return $value;
    }
}
