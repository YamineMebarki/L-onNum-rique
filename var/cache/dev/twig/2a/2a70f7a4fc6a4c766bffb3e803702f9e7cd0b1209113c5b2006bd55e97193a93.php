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

/* vendor/symfony/form/Extension/Validator/ViolationMapper/MappingRule.php */
class __TwigTemplate_5f092ceaa069a2b0e3c5ebd2bbc9507ec52da3bc82a1c686fcbe90fae2a204a9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Validator/ViolationMapper/MappingRule.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Validator/ViolationMapper/MappingRule.php"));

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

namespace Symfony\\Component\\Form\\Extension\\Validator\\ViolationMapper;

use Symfony\\Component\\Form\\Exception\\ErrorMappingException;
use Symfony\\Component\\Form\\FormInterface;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class MappingRule
{
    private \$origin;
    private \$propertyPath;
    private \$targetPath;

    public function __construct(FormInterface \$origin, string \$propertyPath, string \$targetPath)
    {
        \$this->origin = \$origin;
        \$this->propertyPath = \$propertyPath;
        \$this->targetPath = \$targetPath;
    }

    /**
     * @return FormInterface
     */
    public function getOrigin()
    {
        return \$this->origin;
    }

    /**
     * Matches a property path against the rule path.
     *
     * If the rule matches, the form mapped by the rule is returned.
     * Otherwise this method returns false.
     *
     * @param string \$propertyPath The property path to match against the rule
     *
     * @return FormInterface|null The mapped form or null
     */
    public function match(\$propertyPath)
    {
        return \$propertyPath === \$this->propertyPath ? \$this->getTarget() : null;
    }

    /**
     * Matches a property path against a prefix of the rule path.
     *
     * @param string \$propertyPath The property path to match against the rule
     *
     * @return bool Whether the property path is a prefix of the rule or not
     */
    public function isPrefix(\$propertyPath)
    {
        \$length = \\strlen(\$propertyPath);
        \$prefix = substr(\$this->propertyPath, 0, \$length);
        \$next = isset(\$this->propertyPath[\$length]) ? \$this->propertyPath[\$length] : null;

        return \$prefix === \$propertyPath && ('[' === \$next || '.' === \$next);
    }

    /**
     * @return FormInterface
     *
     * @throws ErrorMappingException
     */
    public function getTarget()
    {
        \$childNames = explode('.', \$this->targetPath);
        \$target = \$this->origin;

        foreach (\$childNames as \$childName) {
            if (!\$target->has(\$childName)) {
                throw new ErrorMappingException(sprintf('The child \"%s\" of \"%s\" mapped by the rule \"%s\" in \"%s\" does not exist.', \$childName, \$target->getName(), \$this->targetPath, \$this->origin->getName()));
            }
            \$target = \$target->get(\$childName);
        }

        return \$target;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Extension/Validator/ViolationMapper/MappingRule.php";
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

namespace Symfony\\Component\\Form\\Extension\\Validator\\ViolationMapper;

use Symfony\\Component\\Form\\Exception\\ErrorMappingException;
use Symfony\\Component\\Form\\FormInterface;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class MappingRule
{
    private \$origin;
    private \$propertyPath;
    private \$targetPath;

    public function __construct(FormInterface \$origin, string \$propertyPath, string \$targetPath)
    {
        \$this->origin = \$origin;
        \$this->propertyPath = \$propertyPath;
        \$this->targetPath = \$targetPath;
    }

    /**
     * @return FormInterface
     */
    public function getOrigin()
    {
        return \$this->origin;
    }

    /**
     * Matches a property path against the rule path.
     *
     * If the rule matches, the form mapped by the rule is returned.
     * Otherwise this method returns false.
     *
     * @param string \$propertyPath The property path to match against the rule
     *
     * @return FormInterface|null The mapped form or null
     */
    public function match(\$propertyPath)
    {
        return \$propertyPath === \$this->propertyPath ? \$this->getTarget() : null;
    }

    /**
     * Matches a property path against a prefix of the rule path.
     *
     * @param string \$propertyPath The property path to match against the rule
     *
     * @return bool Whether the property path is a prefix of the rule or not
     */
    public function isPrefix(\$propertyPath)
    {
        \$length = \\strlen(\$propertyPath);
        \$prefix = substr(\$this->propertyPath, 0, \$length);
        \$next = isset(\$this->propertyPath[\$length]) ? \$this->propertyPath[\$length] : null;

        return \$prefix === \$propertyPath && ('[' === \$next || '.' === \$next);
    }

    /**
     * @return FormInterface
     *
     * @throws ErrorMappingException
     */
    public function getTarget()
    {
        \$childNames = explode('.', \$this->targetPath);
        \$target = \$this->origin;

        foreach (\$childNames as \$childName) {
            if (!\$target->has(\$childName)) {
                throw new ErrorMappingException(sprintf('The child \"%s\" of \"%s\" mapped by the rule \"%s\" in \"%s\" does not exist.', \$childName, \$target->getName(), \$this->targetPath, \$this->origin->getName()));
            }
            \$target = \$target->get(\$childName);
        }

        return \$target;
    }
}
", "vendor/symfony/form/Extension/Validator/ViolationMapper/MappingRule.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Extension/Validator/ViolationMapper/MappingRule.php");
    }
}
