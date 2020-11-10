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

/* vendor/symfony/phpunit-bridge/CoverageListener.php */
class __TwigTemplate_08575a764048ab86b1394a09ad2167ab2d7aa2572b0c7ca266d5a67bd443fe8e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/phpunit-bridge/CoverageListener.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/phpunit-bridge/CoverageListener.php"));

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

namespace Symfony\\Bridge\\PhpUnit;

if (class_exists('PHPUnit_Runner_Version') && version_compare(\\PHPUnit_Runner_Version::id(), '6.0.0', '<')) {
    class_alias('Symfony\\Bridge\\PhpUnit\\Legacy\\CoverageListenerForV5', 'Symfony\\Bridge\\PhpUnit\\CoverageListener');
} elseif (version_compare(\\PHPUnit\\Runner\\Version::id(), '7.0.0', '<')) {
    class_alias('Symfony\\Bridge\\PhpUnit\\Legacy\\CoverageListenerForV6', 'Symfony\\Bridge\\PhpUnit\\CoverageListener');
} else {
    class_alias('Symfony\\Bridge\\PhpUnit\\Legacy\\CoverageListenerForV7', 'Symfony\\Bridge\\PhpUnit\\CoverageListener');
}

if (false) {
    class CoverageListener
    {
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/phpunit-bridge/CoverageListener.php";
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

namespace Symfony\\Bridge\\PhpUnit;

if (class_exists('PHPUnit_Runner_Version') && version_compare(\\PHPUnit_Runner_Version::id(), '6.0.0', '<')) {
    class_alias('Symfony\\Bridge\\PhpUnit\\Legacy\\CoverageListenerForV5', 'Symfony\\Bridge\\PhpUnit\\CoverageListener');
} elseif (version_compare(\\PHPUnit\\Runner\\Version::id(), '7.0.0', '<')) {
    class_alias('Symfony\\Bridge\\PhpUnit\\Legacy\\CoverageListenerForV6', 'Symfony\\Bridge\\PhpUnit\\CoverageListener');
} else {
    class_alias('Symfony\\Bridge\\PhpUnit\\Legacy\\CoverageListenerForV7', 'Symfony\\Bridge\\PhpUnit\\CoverageListener');
}

if (false) {
    class CoverageListener
    {
    }
}
", "vendor/symfony/phpunit-bridge/CoverageListener.php", "/var/www/public/DevLaon/templates/vendor/symfony/phpunit-bridge/CoverageListener.php");
    }
}
