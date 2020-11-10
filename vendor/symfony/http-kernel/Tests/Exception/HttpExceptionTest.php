<?php

namespace Symfony\Component\HttpKernel\Tests\Exception;

use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpKernel\Exception\HttpException;

class HttpExceptionTest extends TestCase
{
    public function headerDataProvider()
    {
        return [
            [['X-DevLaon' => 'DevLaon']],
            [['X-DevLaon' => 1]],
            [
                [
                    ['X-DevLaon' => 'DevLaon'],
                    ['X-DevLaon-2' => 'DevLaon-2'],
                ],
            ],
        ];
    }

    public function testHeadersDefault()
    {
        $exception = $this->createException();
        $this->assertSame([], $exception->getHeaders());
    }

    /**
     * @dataProvider headerDataProvider
     */
    public function testHeadersConstructor($headers)
    {
        $exception = new HttpException(200, null, null, $headers);
        $this->assertSame($headers, $exception->getHeaders());
    }

    /**
     * @dataProvider headerDataProvider
     */
    public function testHeadersSetter($headers)
    {
        $exception = $this->createException();
        $exception->setHeaders($headers);
        $this->assertSame($headers, $exception->getHeaders());
    }

    public function testThrowableIsAllowedForPrevious()
    {
        $previous = new class('Error of PHP 7+') extends \Error {
        };
        $exception = $this->createException(null, $previous);
        $this->assertSame($previous, $exception->getPrevious());
    }

    protected function createException(string $message = null, \Throwable $previous = null, ?int $code = 0, array $headers = [])
    {
        return new HttpException(200, $message, $previous, $headers, $code);
    }
}
