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

/* vendor/symfony/form/Tests/Extension/Core/Type/UrlTypeTest.php */
class __TwigTemplate_0a03371c3d19b4c0dcede858b1a098cb262716998378915a6131e39ade25b8d5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/Core/Type/UrlTypeTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/Core/Type/UrlTypeTest.php"));

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

namespace Symfony\\Component\\Form\\Tests\\Extension\\Core\\Type;

class UrlTypeTest extends TextTypeTest
{
    const TESTED_TYPE = 'Symfony\\Component\\Form\\Extension\\Core\\Type\\UrlType';

    public function testSubmitAddsDefaultProtocolIfNoneIsIncluded()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, 'name');

        \$form->submit('www.domain.com');

        \$this->assertSame('http://www.domain.com', \$form->getData());
        \$this->assertSame('http://www.domain.com', \$form->getViewData());
    }

    public function testSubmitAddsNoDefaultProtocolIfAlreadyIncluded()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'default_protocol' => 'http',
        ]);

        \$form->submit('ftp://www.domain.com');

        \$this->assertSame('ftp://www.domain.com', \$form->getData());
        \$this->assertSame('ftp://www.domain.com', \$form->getViewData());
    }

    public function testSubmitAddsNoDefaultProtocolIfEmpty()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'default_protocol' => 'http',
        ]);

        \$form->submit('');

        \$this->assertNull(\$form->getData());
        \$this->assertSame('', \$form->getViewData());
    }

    public function testSubmitAddsNoDefaultProtocolIfNull()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'default_protocol' => 'http',
        ]);

        \$form->submit(null);

        \$this->assertNull(\$form->getData());
        \$this->assertSame('', \$form->getViewData());
    }

    public function testSubmitAddsNoDefaultProtocolIfSetToNull()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'default_protocol' => null,
        ]);

        \$form->submit('www.domain.com');

        \$this->assertSame('www.domain.com', \$form->getData());
        \$this->assertSame('www.domain.com', \$form->getViewData());
    }

    public function testThrowExceptionIfDefaultProtocolIsInvalid()
    {
        \$this->expectException('Symfony\\Component\\OptionsResolver\\Exception\\InvalidOptionsException');
        \$this->factory->create(static::TESTED_TYPE, null, [
            'default_protocol' => [],
        ]);
    }

    public function testSubmitNullUsesDefaultEmptyData(\$emptyData = 'empty', \$expectedData = 'http://empty')
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'empty_data' => \$emptyData,
        ]);
        \$form->submit(null);

        // listener normalizes data on submit
        \$this->assertSame(\$expectedData, \$form->getViewData());
        \$this->assertSame(\$expectedData, \$form->getNormData());
        \$this->assertSame(\$expectedData, \$form->getData());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Tests/Extension/Core/Type/UrlTypeTest.php";
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

namespace Symfony\\Component\\Form\\Tests\\Extension\\Core\\Type;

class UrlTypeTest extends TextTypeTest
{
    const TESTED_TYPE = 'Symfony\\Component\\Form\\Extension\\Core\\Type\\UrlType';

    public function testSubmitAddsDefaultProtocolIfNoneIsIncluded()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, 'name');

        \$form->submit('www.domain.com');

        \$this->assertSame('http://www.domain.com', \$form->getData());
        \$this->assertSame('http://www.domain.com', \$form->getViewData());
    }

    public function testSubmitAddsNoDefaultProtocolIfAlreadyIncluded()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'default_protocol' => 'http',
        ]);

        \$form->submit('ftp://www.domain.com');

        \$this->assertSame('ftp://www.domain.com', \$form->getData());
        \$this->assertSame('ftp://www.domain.com', \$form->getViewData());
    }

    public function testSubmitAddsNoDefaultProtocolIfEmpty()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'default_protocol' => 'http',
        ]);

        \$form->submit('');

        \$this->assertNull(\$form->getData());
        \$this->assertSame('', \$form->getViewData());
    }

    public function testSubmitAddsNoDefaultProtocolIfNull()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'default_protocol' => 'http',
        ]);

        \$form->submit(null);

        \$this->assertNull(\$form->getData());
        \$this->assertSame('', \$form->getViewData());
    }

    public function testSubmitAddsNoDefaultProtocolIfSetToNull()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'default_protocol' => null,
        ]);

        \$form->submit('www.domain.com');

        \$this->assertSame('www.domain.com', \$form->getData());
        \$this->assertSame('www.domain.com', \$form->getViewData());
    }

    public function testThrowExceptionIfDefaultProtocolIsInvalid()
    {
        \$this->expectException('Symfony\\Component\\OptionsResolver\\Exception\\InvalidOptionsException');
        \$this->factory->create(static::TESTED_TYPE, null, [
            'default_protocol' => [],
        ]);
    }

    public function testSubmitNullUsesDefaultEmptyData(\$emptyData = 'empty', \$expectedData = 'http://empty')
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, [
            'empty_data' => \$emptyData,
        ]);
        \$form->submit(null);

        // listener normalizes data on submit
        \$this->assertSame(\$expectedData, \$form->getViewData());
        \$this->assertSame(\$expectedData, \$form->getNormData());
        \$this->assertSame(\$expectedData, \$form->getData());
    }
}
", "vendor/symfony/form/Tests/Extension/Core/Type/UrlTypeTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Tests/Extension/Core/Type/UrlTypeTest.php");
    }
}
