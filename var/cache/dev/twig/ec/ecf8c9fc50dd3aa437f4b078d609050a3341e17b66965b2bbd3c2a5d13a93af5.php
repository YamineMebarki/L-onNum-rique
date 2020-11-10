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

/* vendor/symfony/dependency-injection/Argument/ReferenceSetArgumentTrait.php */
class __TwigTemplate_0eaa37b0b255c02c9638d4dd0ccfc6274811bd959467bdf94e115d024b20160a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Argument/ReferenceSetArgumentTrait.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Argument/ReferenceSetArgumentTrait.php"));

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

namespace Symfony\\Component\\DependencyInjection\\Argument;

use Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * @author Titouan Galopin <galopintitouan@gmail.com>
 * @author Nicolas Grekas <p@tchwork.com>
 */
trait ReferenceSetArgumentTrait
{
    private \$values;

    /**
     * @param Reference[] \$values
     */
    public function __construct(array \$values)
    {
        \$this->setValues(\$values);
    }

    /**
     * @return Reference[] The values in the set
     */
    public function getValues()
    {
        return \$this->values;
    }

    /**
     * @param Reference[] \$values The service references to put in the set
     */
    public function setValues(array \$values)
    {
        foreach (\$values as \$k => \$v) {
            if (null !== \$v && !\$v instanceof Reference) {
                throw new InvalidArgumentException(sprintf('A %s must hold only Reference instances, \"%s\" given.', __CLASS__, \\is_object(\$v) ? \\get_class(\$v) : \\gettype(\$v)));
            }
        }

        \$this->values = \$values;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Argument/ReferenceSetArgumentTrait.php";
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

namespace Symfony\\Component\\DependencyInjection\\Argument;

use Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * @author Titouan Galopin <galopintitouan@gmail.com>
 * @author Nicolas Grekas <p@tchwork.com>
 */
trait ReferenceSetArgumentTrait
{
    private \$values;

    /**
     * @param Reference[] \$values
     */
    public function __construct(array \$values)
    {
        \$this->setValues(\$values);
    }

    /**
     * @return Reference[] The values in the set
     */
    public function getValues()
    {
        return \$this->values;
    }

    /**
     * @param Reference[] \$values The service references to put in the set
     */
    public function setValues(array \$values)
    {
        foreach (\$values as \$k => \$v) {
            if (null !== \$v && !\$v instanceof Reference) {
                throw new InvalidArgumentException(sprintf('A %s must hold only Reference instances, \"%s\" given.', __CLASS__, \\is_object(\$v) ? \\get_class(\$v) : \\gettype(\$v)));
            }
        }

        \$this->values = \$values;
    }
}
", "vendor/symfony/dependency-injection/Argument/ReferenceSetArgumentTrait.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Argument/ReferenceSetArgumentTrait.php");
    }
}
