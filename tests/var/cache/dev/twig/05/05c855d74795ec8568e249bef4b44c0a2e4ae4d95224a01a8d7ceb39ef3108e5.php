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

/* vendor/symfony/property-access/Tests/Fixtures/TestClassMagicGet.php */
class __TwigTemplate_82a4e6dfdadabc65c5a8acb04bf409512737c727db56bd91e2a5793b95e3d3e7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/property-access/Tests/Fixtures/TestClassMagicGet.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/property-access/Tests/Fixtures/TestClassMagicGet.php"));

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

namespace Symfony\\Component\\PropertyAccess\\Tests\\Fixtures;

class TestClassMagicGet
{
    private \$magicProperty;

    public \$publicProperty;

    public function __construct(\$value)
    {
        \$this->magicProperty = \$value;
    }

    public function __set(\$property, \$value)
    {
        if ('magicProperty' === \$property) {
            \$this->magicProperty = \$value;
        }
    }

    public function __get(\$property)
    {
        if ('magicProperty' === \$property) {
            return \$this->magicProperty;
        }

        if ('constantMagicProperty' === \$property) {
            return 'constant value';
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/property-access/Tests/Fixtures/TestClassMagicGet.php";
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

namespace Symfony\\Component\\PropertyAccess\\Tests\\Fixtures;

class TestClassMagicGet
{
    private \$magicProperty;

    public \$publicProperty;

    public function __construct(\$value)
    {
        \$this->magicProperty = \$value;
    }

    public function __set(\$property, \$value)
    {
        if ('magicProperty' === \$property) {
            \$this->magicProperty = \$value;
        }
    }

    public function __get(\$property)
    {
        if ('magicProperty' === \$property) {
            return \$this->magicProperty;
        }

        if ('constantMagicProperty' === \$property) {
            return 'constant value';
        }
    }
}
", "vendor/symfony/property-access/Tests/Fixtures/TestClassMagicGet.php", "/var/www/public/DevLaon/templates/vendor/symfony/property-access/Tests/Fixtures/TestClassMagicGet.php");
    }
}
