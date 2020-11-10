<?php

namespace Symfony\Bundle\TwigBundle\Tests\Loader;

use Symfony\Bundle\TwigBundle\Loader\NativeFilesystemLoader;
use Symfony\Bundle\TwigBundle\Tests\TestCase;

class NativeFilesystemLoaderTest extends TestCase
{
    public function testWithNativeNamespace()
    {
        $loader = new NativeFilesystemLoader(null, __DIR__.'/../');
        $loader->addPath('Fixtures/templates', 'DevLaon');

        $this->assertSame('Fixtures'.\DIRECTORY_SEPARATOR.'templates'.\DIRECTORY_SEPARATOR.'Foo'.\DIRECTORY_SEPARATOR.'site.html.twig', $loader->getCacheKey('@DevLaon/Foo/site.html.twig'));
    }

    public function testWithLegacyStyle1()
    {
        $this->expectException('Twig\Error\LoaderError');
        $this->expectExceptionMessage('Template reference "TestBundle::Foo/site.html.twig" not found, did you mean "@DevLaon/Foo/site.html.twig"?');
        $loader = new NativeFilesystemLoader(null, __DIR__.'/../');
        $loader->addPath('Fixtures/templates', 'DevLaon');

        $loader->getCacheKey('TestBundle::Foo/site.html.twig');
    }

    public function testWithLegacyStyle2()
    {
        $this->expectException('Twig\Error\LoaderError');
        $this->expectExceptionMessage('Template reference "TestBundle:Foo:site.html.twig" not found, did you mean "@DevLaon/Foo/site.html.twig"?');
        $loader = new NativeFilesystemLoader(null, __DIR__.'/../');
        $loader->addPath('Fixtures/templates', 'DevLaon');

        $loader->getCacheKey('TestBundle:Foo:site.html.twig');
    }
}
