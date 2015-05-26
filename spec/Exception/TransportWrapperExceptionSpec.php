<?php

namespace spec\fXmlRpc\Client\Exception;

use PhpSpec\ObjectBehavior;

class TransportWrapperExceptionSpec extends ObjectBehavior
{
    /**
     * @var \Exception
     */
    protected $e;

    function let()
    {
        $this->e = new \Exception('Error', 400);

        $this->beConstructedWith($this->e);
    }

    function it_is_initializable()
    {
        /**
         * Ugly hack
         *
         * @see https://github.com/phpspec/phpspec/issues/704
         */
        $this->getWrappedObject();

        $this->shouldHaveType('fXmlRpc\Client\Exception\TransportWrapperException');
    }

    function it_is_a_transport_exception()
    {
        /**
         * Ugly hack
         *
         * @see https://github.com/phpspec/phpspec/issues/704
         */
        $this->getWrappedObject();

        $this->shouldImplement('fXmlRpc\Client\Exception\TransportException');
    }

    function it_is_created_from_an_exception()
    {
        $this->getMessage()->shouldReturn('Transport error occurred: Error');
        $this->getCode()->shouldReturn(400);
        $this->getPrevious()->shouldReturn($this->e);
    }
}