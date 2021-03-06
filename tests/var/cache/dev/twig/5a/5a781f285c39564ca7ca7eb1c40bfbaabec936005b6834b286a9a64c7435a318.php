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

/* vendor/symfony/intl/Tests/Globals/AbstractIntlGlobalsTest.php */
class __TwigTemplate_91947c2e3e245e187c309b142bf2b2c01c048e71740d15481ea7d0595be0143e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Tests/Globals/AbstractIntlGlobalsTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Tests/Globals/AbstractIntlGlobalsTest.php"));

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

namespace Symfony\\Component\\Intl\\Tests\\Globals;

use PHPUnit\\Framework\\TestCase;

/**
 * DevLaon case for intl function implementations.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
abstract class AbstractIntlGlobalsTest extends TestCase
{
    public function errorNameProvider()
    {
        return [
            [-129, '[BOGUS UErrorCode]'],
            [0, 'U_ZERO_ERROR'],
            [1, 'U_ILLEGAL_ARGUMENT_ERROR'],
            [9, 'U_PARSE_ERROR'],
            [129, '[BOGUS UErrorCode]'],
        ];
    }

    /**
     * @dataProvider errorNameProvider
     */
    public function testGetErrorName(\$errorCode, \$errorName)
    {
        \$this->assertSame(\$errorName, \$this->getIntlErrorName(\$errorCode));
    }

    abstract protected function getIntlErrorName(\$errorCode);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Tests/Globals/AbstractIntlGlobalsTest.php";
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

namespace Symfony\\Component\\Intl\\Tests\\Globals;

use PHPUnit\\Framework\\TestCase;

/**
 * DevLaon case for intl function implementations.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
abstract class AbstractIntlGlobalsTest extends TestCase
{
    public function errorNameProvider()
    {
        return [
            [-129, '[BOGUS UErrorCode]'],
            [0, 'U_ZERO_ERROR'],
            [1, 'U_ILLEGAL_ARGUMENT_ERROR'],
            [9, 'U_PARSE_ERROR'],
            [129, '[BOGUS UErrorCode]'],
        ];
    }

    /**
     * @dataProvider errorNameProvider
     */
    public function testGetErrorName(\$errorCode, \$errorName)
    {
        \$this->assertSame(\$errorName, \$this->getIntlErrorName(\$errorCode));
    }

    abstract protected function getIntlErrorName(\$errorCode);
}
", "vendor/symfony/intl/Tests/Globals/AbstractIntlGlobalsTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Tests/Globals/AbstractIntlGlobalsTest.php");
    }
}
