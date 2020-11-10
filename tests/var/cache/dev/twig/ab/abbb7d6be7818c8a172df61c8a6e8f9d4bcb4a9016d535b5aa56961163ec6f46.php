<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* vendor/symfony/form/Tests/Extension/Core/EventListener/FixUrlProtocolListenerTest.php */
class __TwigTemplate_69cfa71f0a507d085f4b8eb10bd3dbd052422d83dd4222dbed5e7d9c321d98bc extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/Core/EventListener/FixUrlProtocolListenerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/Core/EventListener/FixUrlProtocolListenerTest.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Component\\Form\\Tests\\Extension\\Core\\EventListener;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\EventDispatcher\\EventDispatcher;
use Symfony\\Component\\Form\\Extension\\Core\\EventListener\\FixUrlProtocolListener;
use Symfony\\Component\\Form\\Form;
use Symfony\\Component\\Form\\FormConfigBuilder;
use Symfony\\Component\\Form\\FormEvent;

class FixUrlProtocolListenerTest extends TestCase
{
    public function testFixHttpUrl()
    {
        \$data = 'www.symfony.com';
        \$form = new Form(new FormConfigBuilder('name', null, new EventDispatcher()));
        \$event = new FormEvent(\$form, \$data);

        \$filter = new FixUrlProtocolListener('http');
        \$filter->onSubmit(\$event);

        \$this->assertEquals('http://www.symfony.com', \$event->getData());
    }

    public function testSkipKnownUrl()
    {
        \$data = 'http://www.symfony.com';
        \$form = new Form(new FormConfigBuilder('name', null, new EventDispatcher()));
        \$event = new FormEvent(\$form, \$data);

        \$filter = new FixUrlProtocolListener('http');
        \$filter->onSubmit(\$event);

        \$this->assertEquals('http://www.symfony.com', \$event->getData());
    }

    public function provideUrlsWithSupportedProtocols()
    {
        return [
            ['ftp://www.symfony.com'],
            ['chrome-extension://foo'],
            ['h323://foo'],
            ['iris.beep://foo'],
            ['foo+bar://foo'],
        ];
    }

    /**
     * @dataProvider provideUrlsWithSupportedProtocols
     */
    public function testSkipOtherProtocol(\$url)
    {
        \$form = new Form(new FormConfigBuilder('name', null, new EventDispatcher()));
        \$event = new FormEvent(\$form, \$url);

        \$filter = new FixUrlProtocolListener('http');
        \$filter->onSubmit(\$event);

        \$this->assertEquals(\$url, \$event->getData());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Tests/Extension/Core/EventListener/FixUrlProtocolListenerTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Component\\Form\\Tests\\Extension\\Core\\EventListener;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\EventDispatcher\\EventDispatcher;
use Symfony\\Component\\Form\\Extension\\Core\\EventListener\\FixUrlProtocolListener;
use Symfony\\Component\\Form\\Form;
use Symfony\\Component\\Form\\FormConfigBuilder;
use Symfony\\Component\\Form\\FormEvent;

class FixUrlProtocolListenerTest extends TestCase
{
    public function testFixHttpUrl()
    {
        \$data = 'www.symfony.com';
        \$form = new Form(new FormConfigBuilder('name', null, new EventDispatcher()));
        \$event = new FormEvent(\$form, \$data);

        \$filter = new FixUrlProtocolListener('http');
        \$filter->onSubmit(\$event);

        \$this->assertEquals('http://www.symfony.com', \$event->getData());
    }

    public function testSkipKnownUrl()
    {
        \$data = 'http://www.symfony.com';
        \$form = new Form(new FormConfigBuilder('name', null, new EventDispatcher()));
        \$event = new FormEvent(\$form, \$data);

        \$filter = new FixUrlProtocolListener('http');
        \$filter->onSubmit(\$event);

        \$this->assertEquals('http://www.symfony.com', \$event->getData());
    }

    public function provideUrlsWithSupportedProtocols()
    {
        return [
            ['ftp://www.symfony.com'],
            ['chrome-extension://foo'],
            ['h323://foo'],
            ['iris.beep://foo'],
            ['foo+bar://foo'],
        ];
    }

    /**
     * @dataProvider provideUrlsWithSupportedProtocols
     */
    public function testSkipOtherProtocol(\$url)
    {
        \$form = new Form(new FormConfigBuilder('name', null, new EventDispatcher()));
        \$event = new FormEvent(\$form, \$url);

        \$filter = new FixUrlProtocolListener('http');
        \$filter->onSubmit(\$event);

        \$this->assertEquals(\$url, \$event->getData());
    }
}
", "vendor/symfony/form/Tests/Extension/Core/EventListener/FixUrlProtocolListenerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Tests/Extension/Core/EventListener/FixUrlProtocolListenerTest.php");
    }
}
