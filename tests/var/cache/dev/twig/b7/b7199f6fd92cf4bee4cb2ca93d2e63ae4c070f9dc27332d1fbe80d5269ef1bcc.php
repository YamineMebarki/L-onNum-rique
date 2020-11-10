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

/* vendor/symfony/doctrine-bridge/Form/ChoiceList/EntityLoaderInterface.php */
class __TwigTemplate_9384054309540eb10a846c4522b4ae9c2be35e377bcc4a7519dc802aa2d642c8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/doctrine-bridge/Form/ChoiceList/EntityLoaderInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/doctrine-bridge/Form/ChoiceList/EntityLoaderInterface.php"));

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

namespace Symfony\\Bridge\\Doctrine\\Form\\ChoiceList;

/**
 * Custom loader for entities in the choice list.
 *
 * @author Benjamin Eberlei <kontakt@beberlei.de>
 */
interface EntityLoaderInterface
{
    /**
     * Returns an array of entities that are valid choices in the corresponding choice list.
     *
     * @return array The entities
     */
    public function getEntities();

    /**
     * Returns an array of entities matching the given identifiers.
     *
     * @param string \$identifier The identifier field of the object. This method
     *                           is not applicable for fields with multiple
     *                           identifiers.
     * @param array  \$values     The values of the identifiers
     *
     * @return array The entities
     */
    public function getEntitiesByIds(\$identifier, array \$values);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/doctrine-bridge/Form/ChoiceList/EntityLoaderInterface.php";
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

namespace Symfony\\Bridge\\Doctrine\\Form\\ChoiceList;

/**
 * Custom loader for entities in the choice list.
 *
 * @author Benjamin Eberlei <kontakt@beberlei.de>
 */
interface EntityLoaderInterface
{
    /**
     * Returns an array of entities that are valid choices in the corresponding choice list.
     *
     * @return array The entities
     */
    public function getEntities();

    /**
     * Returns an array of entities matching the given identifiers.
     *
     * @param string \$identifier The identifier field of the object. This method
     *                           is not applicable for fields with multiple
     *                           identifiers.
     * @param array  \$values     The values of the identifiers
     *
     * @return array The entities
     */
    public function getEntitiesByIds(\$identifier, array \$values);
}
", "vendor/symfony/doctrine-bridge/Form/ChoiceList/EntityLoaderInterface.php", "/var/www/public/DevLaon/templates/vendor/symfony/doctrine-bridge/Form/ChoiceList/EntityLoaderInterface.php");
    }
}
