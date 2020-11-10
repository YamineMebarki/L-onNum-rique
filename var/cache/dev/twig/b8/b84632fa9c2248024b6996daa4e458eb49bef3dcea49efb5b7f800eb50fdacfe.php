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

/* vendor/symfony/config/ResourceCheckerInterface.php */
class __TwigTemplate_3ac532681d6a2699a812826e11c7727237ac8b0c672acd3b962356c4c8ad78c2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/ResourceCheckerInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/ResourceCheckerInterface.php"));

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

namespace Symfony\\Component\\Config;

use Symfony\\Component\\Config\\Resource\\ResourceInterface;

/**
 * Interface for ResourceCheckers.
 *
 * When a ResourceCheckerConfigCache instance is checked for freshness, all its associated
 * metadata resources are passed to ResourceCheckers. The ResourceCheckers
 * can then inspect the resources and decide whether the cache can be considered
 * fresh or not.
 *
 * @author Matthias Pigulla <mp@webfactory.de>
 * @author Benjamin Klotz <bk@webfactory.de>
 */
interface ResourceCheckerInterface
{
    /**
     * Queries the ResourceChecker whether it can validate a given
     * resource or not.
     *
     * @param ResourceInterface \$metadata The resource to be checked for freshness
     *
     * @return bool True if the ResourceChecker can handle this resource type, false if not
     */
    public function supports(ResourceInterface \$metadata);

    /**
     * Validates the resource.
     *
     * @param ResourceInterface \$resource  The resource to be validated
     * @param int               \$timestamp The timestamp at which the cache associated with this resource was created
     *
     * @return bool True if the resource has not changed since the given timestamp, false otherwise
     */
    public function isFresh(ResourceInterface \$resource, \$timestamp);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/config/ResourceCheckerInterface.php";
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

namespace Symfony\\Component\\Config;

use Symfony\\Component\\Config\\Resource\\ResourceInterface;

/**
 * Interface for ResourceCheckers.
 *
 * When a ResourceCheckerConfigCache instance is checked for freshness, all its associated
 * metadata resources are passed to ResourceCheckers. The ResourceCheckers
 * can then inspect the resources and decide whether the cache can be considered
 * fresh or not.
 *
 * @author Matthias Pigulla <mp@webfactory.de>
 * @author Benjamin Klotz <bk@webfactory.de>
 */
interface ResourceCheckerInterface
{
    /**
     * Queries the ResourceChecker whether it can validate a given
     * resource or not.
     *
     * @param ResourceInterface \$metadata The resource to be checked for freshness
     *
     * @return bool True if the ResourceChecker can handle this resource type, false if not
     */
    public function supports(ResourceInterface \$metadata);

    /**
     * Validates the resource.
     *
     * @param ResourceInterface \$resource  The resource to be validated
     * @param int               \$timestamp The timestamp at which the cache associated with this resource was created
     *
     * @return bool True if the resource has not changed since the given timestamp, false otherwise
     */
    public function isFresh(ResourceInterface \$resource, \$timestamp);
}
", "vendor/symfony/config/ResourceCheckerInterface.php", "/var/www/public/DevLaon/templates/vendor/symfony/config/ResourceCheckerInterface.php");
    }
}
