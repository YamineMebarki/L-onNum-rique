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

/* vendor/symfony/dependency-injection/LazyProxy/PhpDumper/DumperInterface.php */
class __TwigTemplate_7e124bffa8c17e185c106fc1af9fc1f985a6c4c176e6c55817397e941c1e0c17 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/LazyProxy/PhpDumper/DumperInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/LazyProxy/PhpDumper/DumperInterface.php"));

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

namespace Symfony\\Component\\DependencyInjection\\LazyProxy\\PhpDumper;

use Symfony\\Component\\DependencyInjection\\Definition;

/**
 * Lazy proxy dumper capable of generating the instantiation logic PHP code for proxied services.
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 */
interface DumperInterface
{
    /**
     * Inspects whether the given definitions should produce proxy instantiation logic in the dumped container.
     *
     * @return bool
     */
    public function isProxyCandidate(Definition \$definition);

    /**
     * Generates the code to be used to instantiate a proxy in the dumped factory code.
     *
     * @param string \$id          Service identifier
     * @param string \$factoryCode The code to execute to create the service
     *
     * @return string
     */
    public function getProxyFactoryCode(Definition \$definition, \$id, \$factoryCode);

    /**
     * Generates the code for the lazy proxy.
     *
     * @return string
     */
    public function getProxyCode(Definition \$definition);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/LazyProxy/PhpDumper/DumperInterface.php";
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

namespace Symfony\\Component\\DependencyInjection\\LazyProxy\\PhpDumper;

use Symfony\\Component\\DependencyInjection\\Definition;

/**
 * Lazy proxy dumper capable of generating the instantiation logic PHP code for proxied services.
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 */
interface DumperInterface
{
    /**
     * Inspects whether the given definitions should produce proxy instantiation logic in the dumped container.
     *
     * @return bool
     */
    public function isProxyCandidate(Definition \$definition);

    /**
     * Generates the code to be used to instantiate a proxy in the dumped factory code.
     *
     * @param string \$id          Service identifier
     * @param string \$factoryCode The code to execute to create the service
     *
     * @return string
     */
    public function getProxyFactoryCode(Definition \$definition, \$id, \$factoryCode);

    /**
     * Generates the code for the lazy proxy.
     *
     * @return string
     */
    public function getProxyCode(Definition \$definition);
}
", "vendor/symfony/dependency-injection/LazyProxy/PhpDumper/DumperInterface.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/LazyProxy/PhpDumper/DumperInterface.php");
    }
}
