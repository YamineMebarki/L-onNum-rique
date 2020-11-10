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

/* vendor/symfony/http-kernel/DependencyInjection/Extension.php */
class __TwigTemplate_3dfc3524a8b18496def6541b048eb43e6f00d20fa8e5c670b1088d363dfd741d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/DependencyInjection/Extension.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/DependencyInjection/Extension.php"));

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

namespace Symfony\\Component\\HttpKernel\\DependencyInjection;

use Symfony\\Component\\DependencyInjection\\Extension\\Extension as BaseExtension;

/**
 * Allow adding classes to the class cache.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
abstract class Extension extends BaseExtension
{
    private \$annotatedClasses = [];

    /**
     * Gets the annotated classes to cache.
     *
     * @return array An array of classes
     */
    public function getAnnotatedClassesToCompile()
    {
        return \$this->annotatedClasses;
    }

    /**
     * Adds annotated classes to the class cache.
     *
     * @param array \$annotatedClasses An array of class patterns
     */
    public function addAnnotatedClassesToCompile(array \$annotatedClasses)
    {
        \$this->annotatedClasses = array_merge(\$this->annotatedClasses, \$annotatedClasses);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/DependencyInjection/Extension.php";
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

namespace Symfony\\Component\\HttpKernel\\DependencyInjection;

use Symfony\\Component\\DependencyInjection\\Extension\\Extension as BaseExtension;

/**
 * Allow adding classes to the class cache.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
abstract class Extension extends BaseExtension
{
    private \$annotatedClasses = [];

    /**
     * Gets the annotated classes to cache.
     *
     * @return array An array of classes
     */
    public function getAnnotatedClassesToCompile()
    {
        return \$this->annotatedClasses;
    }

    /**
     * Adds annotated classes to the class cache.
     *
     * @param array \$annotatedClasses An array of class patterns
     */
    public function addAnnotatedClassesToCompile(array \$annotatedClasses)
    {
        \$this->annotatedClasses = array_merge(\$this->annotatedClasses, \$annotatedClasses);
    }
}
", "vendor/symfony/http-kernel/DependencyInjection/Extension.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/DependencyInjection/Extension.php");
    }
}
