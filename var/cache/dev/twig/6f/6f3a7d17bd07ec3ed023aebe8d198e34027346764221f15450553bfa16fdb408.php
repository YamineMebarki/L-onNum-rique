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

/* vendor/symfony/validator/Constraints/Callback.php */
class __TwigTemplate_6c96da3875b0c029bcd38d13f49b35718fb1b92ef0ac92525a362c7a8e79b497 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/Callback.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/Callback.php"));

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

namespace Symfony\\Component\\Validator\\Constraints;

use Symfony\\Component\\Validator\\Constraint;

/**
 * @Annotation
 * @Target({\"CLASS\", \"PROPERTY\", \"METHOD\", \"ANNOTATION\"})
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class Callback extends Constraint
{
    /**
     * @var string|callable
     */
    public \$callback;

    /**
     * {@inheritdoc}
     */
    public function __construct(\$options = null)
    {
        // Invocation through annotations with an array parameter only
        if (\\is_array(\$options) && 1 === \\count(\$options) && isset(\$options['value'])) {
            \$options = \$options['value'];
        }

        if (\\is_array(\$options) && !isset(\$options['callback']) && !isset(\$options['groups']) && !isset(\$options['payload'])) {
            \$options = ['callback' => \$options];
        }

        parent::__construct(\$options);
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultOption()
    {
        return 'callback';
    }

    /**
     * {@inheritdoc}
     */
    public function getTargets()
    {
        return [self::CLASS_CONSTRAINT, self::PROPERTY_CONSTRAINT];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Constraints/Callback.php";
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

namespace Symfony\\Component\\Validator\\Constraints;

use Symfony\\Component\\Validator\\Constraint;

/**
 * @Annotation
 * @Target({\"CLASS\", \"PROPERTY\", \"METHOD\", \"ANNOTATION\"})
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class Callback extends Constraint
{
    /**
     * @var string|callable
     */
    public \$callback;

    /**
     * {@inheritdoc}
     */
    public function __construct(\$options = null)
    {
        // Invocation through annotations with an array parameter only
        if (\\is_array(\$options) && 1 === \\count(\$options) && isset(\$options['value'])) {
            \$options = \$options['value'];
        }

        if (\\is_array(\$options) && !isset(\$options['callback']) && !isset(\$options['groups']) && !isset(\$options['payload'])) {
            \$options = ['callback' => \$options];
        }

        parent::__construct(\$options);
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultOption()
    {
        return 'callback';
    }

    /**
     * {@inheritdoc}
     */
    public function getTargets()
    {
        return [self::CLASS_CONSTRAINT, self::PROPERTY_CONSTRAINT];
    }
}
", "vendor/symfony/validator/Constraints/Callback.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Constraints/Callback.php");
    }
}
