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

/* vendor/symfony/expression-language/Tests/ExpressionFunctionTest.php */
class __TwigTemplate_5a28ab27a8f10520af6a968f3bed9ad08928a9b40e0fbdc266b02e0acfa0e7b8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/expression-language/Tests/ExpressionFunctionTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/expression-language/Tests/ExpressionFunctionTest.php"));

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

namespace Symfony\\Component\\ExpressionLanguage\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\ExpressionLanguage\\ExpressionFunction;

/**
 * Tests ExpressionFunction.
 *
 * @author Dany Maillard <danymaillard93b@gmail.com>
 */
class ExpressionFunctionTest extends TestCase
{
    public function testFunctionDoesNotExist()
    {
        \$this->expectException('InvalidArgumentException');
        \$this->expectExceptionMessage('PHP function \"fn_does_not_exist\" does not exist.');
        ExpressionFunction::fromPhp('fn_does_not_exist');
    }

    public function testFunctionNamespaced()
    {
        \$this->expectException('InvalidArgumentException');
        \$this->expectExceptionMessage('An expression function name must be defined when PHP function \"Symfony\\Component\\ExpressionLanguage\\Tests\\fn_namespaced\" is namespaced.');
        ExpressionFunction::fromPhp('Symfony\\Component\\ExpressionLanguage\\Tests\\fn_namespaced');
    }
}

function fn_namespaced()
{
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/expression-language/Tests/ExpressionFunctionTest.php";
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

namespace Symfony\\Component\\ExpressionLanguage\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\ExpressionLanguage\\ExpressionFunction;

/**
 * Tests ExpressionFunction.
 *
 * @author Dany Maillard <danymaillard93b@gmail.com>
 */
class ExpressionFunctionTest extends TestCase
{
    public function testFunctionDoesNotExist()
    {
        \$this->expectException('InvalidArgumentException');
        \$this->expectExceptionMessage('PHP function \"fn_does_not_exist\" does not exist.');
        ExpressionFunction::fromPhp('fn_does_not_exist');
    }

    public function testFunctionNamespaced()
    {
        \$this->expectException('InvalidArgumentException');
        \$this->expectExceptionMessage('An expression function name must be defined when PHP function \"Symfony\\Component\\ExpressionLanguage\\Tests\\fn_namespaced\" is namespaced.');
        ExpressionFunction::fromPhp('Symfony\\Component\\ExpressionLanguage\\Tests\\fn_namespaced');
    }
}

function fn_namespaced()
{
}
", "vendor/symfony/expression-language/Tests/ExpressionFunctionTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/expression-language/Tests/ExpressionFunctionTest.php");
    }
}
