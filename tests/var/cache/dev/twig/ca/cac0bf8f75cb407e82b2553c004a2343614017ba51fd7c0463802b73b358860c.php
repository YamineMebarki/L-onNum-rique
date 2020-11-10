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

/* vendor/symfony/property-access/Tests/Fixtures/TestClassMagicCall.php */
class __TwigTemplate_13362072223741891ef4545d5b53ca884fb781dfe732920899610b5c299172d8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/property-access/Tests/Fixtures/TestClassMagicCall.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/property-access/Tests/Fixtures/TestClassMagicCall.php"));

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

class TestClassMagicCall
{
    private \$magicCallProperty;

    public function __construct(\$value)
    {
        \$this->magicCallProperty = \$value;
    }

    public function __call(\$method, array \$args)
    {
        if ('getMagicCallProperty' === \$method) {
            return \$this->magicCallProperty;
        }

        if ('getConstantMagicCallProperty' === \$method) {
            return 'constant value';
        }

        if ('setMagicCallProperty' === \$method) {
            \$this->magicCallProperty = reset(\$args);
        }

        return null;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/property-access/Tests/Fixtures/TestClassMagicCall.php";
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

class TestClassMagicCall
{
    private \$magicCallProperty;

    public function __construct(\$value)
    {
        \$this->magicCallProperty = \$value;
    }

    public function __call(\$method, array \$args)
    {
        if ('getMagicCallProperty' === \$method) {
            return \$this->magicCallProperty;
        }

        if ('getConstantMagicCallProperty' === \$method) {
            return 'constant value';
        }

        if ('setMagicCallProperty' === \$method) {
            \$this->magicCallProperty = reset(\$args);
        }

        return null;
    }
}
", "vendor/symfony/property-access/Tests/Fixtures/TestClassMagicCall.php", "/var/www/public/DevLaon/templates/vendor/symfony/property-access/Tests/Fixtures/TestClassMagicCall.php");
    }
}
