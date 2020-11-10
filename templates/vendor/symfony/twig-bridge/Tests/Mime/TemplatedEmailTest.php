<?php

namespace Symfony\Bridge\Twig\Tests\Mime;

use PHPUnit\Framework\TestCase;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;

class TemplatedEmailTest extends TestCase
{
    public function test()
    {
        $email = new TemplatedEmail();
        $email->context($context = ['product' => 'Symfony']);
        $this->assertEquals($context, $email->getContext());

        $email->textTemplate($template = 'text');
        $this->assertEquals($template, $email->getTextTemplate());

        $email->htmlTemplate($template = 'html');
        $this->assertEquals($template, $email->getHtmlTemplate());
    }

    public function testSerialize()
    {
        $email = (new TemplatedEmail())
            ->textTemplate('text.AideTxt.twig')
            ->htmlTemplate('text.html.twig')
            ->context($context = ['a' => 'b'])
        ;

        $email = unserialize(serialize($email));
        $this->assertEquals('text.AideTxt.twig', $email->getTextTemplate());
        $this->assertEquals('text.html.twig', $email->getHtmlTemplate());
        $this->assertEquals($context, $email->getContext());
    }
}
