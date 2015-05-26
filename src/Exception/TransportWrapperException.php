<?php

/*
 * This file is part of the fXmlRpc Transport package.
 *
 * (c) Lars Strojny <lstrojny@php.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace fXmlRpc\Client\Exception;

/**
 * Should be thrown as a wrapper around Exceptions thrown by transports
 *
 * @author Márk Sági-Kazár <mark.sagikazar@gmail.com>
 */
final class TransportWrapperException extends \RuntimeException implements TransportException
{
    /**
     * Creates from an existing exception
     *
     * @param \Exception $e
     */
    public function __construct(\Exception $e)
    {
        parent::__construct('Transport error occurred: '.$e->getMessage(), $e->getCode(), $e);
    }
}
