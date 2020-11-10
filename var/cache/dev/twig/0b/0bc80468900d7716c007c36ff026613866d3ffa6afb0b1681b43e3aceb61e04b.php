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

/* vendor/symfony/dependency-injection/ParameterBag/ContainerBagInterface.php */
class __TwigTemplate_f186b547ddfda97b6d0a5acb2903cc0e7b168ec2f576357b1150fd37d457d20c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/ParameterBag/ContainerBagInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/ParameterBag/ContainerBagInterface.php"));

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

namespace Symfony\\Component\\DependencyInjection\\ParameterBag;

use Psr\\Container\\ContainerInterface;
use Symfony\\Component\\DependencyInjection\\Exception\\ParameterNotFoundException;

/**
 * ContainerBagInterface is the interface implemented by objects that manage service container parameters.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
interface ContainerBagInterface extends ContainerInterface
{
    /**
     * Gets the service container parameters.
     *
     * @return array An array of parameters
     */
    public function all();

    /**
     * Replaces parameter placeholders (%name%) by their values.
     *
     * @param mixed \$value A value
     *
     * @throws ParameterNotFoundException if a placeholder references a parameter that does not exist
     */
    public function resolveValue(\$value);

    /**
     * Escape parameter placeholders %.
     *
     * @param mixed \$value
     *
     * @return mixed
     */
    public function escapeValue(\$value);

    /**
     * Unescape parameter placeholders %.
     *
     * @param mixed \$value
     *
     * @return mixed
     */
    public function unescapeValue(\$value);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/ParameterBag/ContainerBagInterface.php";
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

namespace Symfony\\Component\\DependencyInjection\\ParameterBag;

use Psr\\Container\\ContainerInterface;
use Symfony\\Component\\DependencyInjection\\Exception\\ParameterNotFoundException;

/**
 * ContainerBagInterface is the interface implemented by objects that manage service container parameters.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
interface ContainerBagInterface extends ContainerInterface
{
    /**
     * Gets the service container parameters.
     *
     * @return array An array of parameters
     */
    public function all();

    /**
     * Replaces parameter placeholders (%name%) by their values.
     *
     * @param mixed \$value A value
     *
     * @throws ParameterNotFoundException if a placeholder references a parameter that does not exist
     */
    public function resolveValue(\$value);

    /**
     * Escape parameter placeholders %.
     *
     * @param mixed \$value
     *
     * @return mixed
     */
    public function escapeValue(\$value);

    /**
     * Unescape parameter placeholders %.
     *
     * @param mixed \$value
     *
     * @return mixed
     */
    public function unescapeValue(\$value);
}
", "vendor/symfony/dependency-injection/ParameterBag/ContainerBagInterface.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/ParameterBag/ContainerBagInterface.php");
    }
}
