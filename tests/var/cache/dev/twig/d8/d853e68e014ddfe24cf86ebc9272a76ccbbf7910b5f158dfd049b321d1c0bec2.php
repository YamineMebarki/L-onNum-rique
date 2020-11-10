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

/* vendor/symfony/form/Tests/Extension/Core/Type/PasswordTypeTest.php */
class __TwigTemplate_fba6ba0fa3f71484cb6528ba79ccf7976763c5a1b58f5ddd43cc1de8e4920963 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/Core/Type/PasswordTypeTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/Core/Type/PasswordTypeTest.php"));

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

class PasswordTypeTest extends BaseTypeTest
{
    const TESTED_TYPE = 'Symfony\\Component\\Form\\Extension\\Core\\Type\\PasswordType';

    public function testEmptyIfNotSubmitted()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE);
        \$form->setData('pAs5w0rd');

        \$this->assertSame('', \$form->createView()->vars['value']);
    }

    public function testEmptyIfSubmitted()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE);
        \$form->submit('pAs5w0rd');

        \$this->assertSame('', \$form->createView()->vars['value']);
    }

    public function testNotEmptyIfSubmittedAndNotAlwaysEmpty()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, ['always_empty' => false]);
        \$form->submit('pAs5w0rd');

        \$this->assertSame('pAs5w0rd', \$form->createView()->vars['value']);
    }

    public function testNotTrimmed()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null);
        \$form->submit(' pAs5w0rd ');

        \$this->assertSame(' pAs5w0rd ', \$form->getData());
    }

    public function testSubmitNull(\$expected = null, \$norm = null, \$view = null)
    {
        parent::testSubmitNull(\$expected, \$norm, '');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Tests/Extension/Core/Type/PasswordTypeTest.php";
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

class PasswordTypeTest extends BaseTypeTest
{
    const TESTED_TYPE = 'Symfony\\Component\\Form\\Extension\\Core\\Type\\PasswordType';

    public function testEmptyIfNotSubmitted()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE);
        \$form->setData('pAs5w0rd');

        \$this->assertSame('', \$form->createView()->vars['value']);
    }

    public function testEmptyIfSubmitted()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE);
        \$form->submit('pAs5w0rd');

        \$this->assertSame('', \$form->createView()->vars['value']);
    }

    public function testNotEmptyIfSubmittedAndNotAlwaysEmpty()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null, ['always_empty' => false]);
        \$form->submit('pAs5w0rd');

        \$this->assertSame('pAs5w0rd', \$form->createView()->vars['value']);
    }

    public function testNotTrimmed()
    {
        \$form = \$this->factory->create(static::TESTED_TYPE, null);
        \$form->submit(' pAs5w0rd ');

        \$this->assertSame(' pAs5w0rd ', \$form->getData());
    }

    public function testSubmitNull(\$expected = null, \$norm = null, \$view = null)
    {
        parent::testSubmitNull(\$expected, \$norm, '');
    }
}
", "vendor/symfony/form/Tests/Extension/Core/Type/PasswordTypeTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Tests/Extension/Core/Type/PasswordTypeTest.php");
    }
}
