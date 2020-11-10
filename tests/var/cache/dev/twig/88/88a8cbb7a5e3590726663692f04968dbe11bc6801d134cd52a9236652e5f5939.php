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

/* vendor/symfony/validator/Validator/TraceableValidator.php */
class __TwigTemplate_e6a371fb047cee89574d896fd997dfea3c90f61c0d8a313f26942b08af8e0cf9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Validator/TraceableValidator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Validator/TraceableValidator.php"));

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

namespace Symfony\\Component\\Validator\\Validator;

use Symfony\\Component\\Validator\\Context\\ExecutionContextInterface;
use Symfony\\Contracts\\Service\\ResetInterface;

/**
 * Collects some data about validator calls.
 *
 * @author Maxime Steinhausser <maxime.steinhausser@gmail.com>
 */
class TraceableValidator implements ValidatorInterface, ResetInterface
{
    private \$validator;
    private \$collectedData = [];

    public function __construct(ValidatorInterface \$validator)
    {
        \$this->validator = \$validator;
    }

    /**
     * @return array
     */
    public function getCollectedData()
    {
        return \$this->collectedData;
    }

    public function reset()
    {
        \$this->collectedData = [];
    }

    /**
     * {@inheritdoc}
     */
    public function getMetadataFor(\$value)
    {
        return \$this->validator->getMetadataFor(\$value);
    }

    /**
     * {@inheritdoc}
     */
    public function hasMetadataFor(\$value)
    {
        return \$this->validator->hasMetadataFor(\$value);
    }

    /**
     * {@inheritdoc}
     */
    public function validate(\$value, \$constraints = null, \$groups = null)
    {
        \$violations = \$this->validator->validate(\$value, \$constraints, \$groups);

        \$trace = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS, 7);

        \$file = \$trace[0]['file'];
        \$line = \$trace[0]['line'];

        for (\$i = 1; \$i < 7; ++\$i) {
            if (isset(\$trace[\$i]['class'], \$trace[\$i]['function'])
                && 'validate' === \$trace[\$i]['function']
                && is_a(\$trace[\$i]['class'], ValidatorInterface::class, true)
            ) {
                \$file = \$trace[\$i]['file'];
                \$line = \$trace[\$i]['line'];

                while (++\$i < 7) {
                    if (isset(\$trace[\$i]['function'], \$trace[\$i]['file']) && empty(\$trace[\$i]['class']) && 0 !== strpos(\$trace[\$i]['function'], 'call_user_func')) {
                        \$file = \$trace[\$i]['file'];
                        \$line = \$trace[\$i]['line'];

                        break;
                    }
                }
                break;
            }
        }

        \$name = str_replace('\\\\', '/', \$file);
        \$name = substr(\$name, strrpos(\$name, '/') + 1);

        \$this->collectedData[] = [
            'caller' => compact('name', 'file', 'line'),
            'context' => compact('value', 'constraints', 'groups'),
            'violations' => iterator_to_array(\$violations),
        ];

        return \$violations;
    }

    /**
     * {@inheritdoc}
     */
    public function validateProperty(\$object, \$propertyName, \$groups = null)
    {
        return \$this->validator->validateProperty(\$object, \$propertyName, \$groups);
    }

    /**
     * {@inheritdoc}
     */
    public function validatePropertyValue(\$objectOrClass, \$propertyName, \$value, \$groups = null)
    {
        return \$this->validator->validatePropertyValue(\$objectOrClass, \$propertyName, \$value, \$groups);
    }

    /**
     * {@inheritdoc}
     */
    public function startContext()
    {
        return \$this->validator->startContext();
    }

    /**
     * {@inheritdoc}
     */
    public function inContext(ExecutionContextInterface \$context)
    {
        return \$this->validator->inContext(\$context);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Validator/TraceableValidator.php";
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

namespace Symfony\\Component\\Validator\\Validator;

use Symfony\\Component\\Validator\\Context\\ExecutionContextInterface;
use Symfony\\Contracts\\Service\\ResetInterface;

/**
 * Collects some data about validator calls.
 *
 * @author Maxime Steinhausser <maxime.steinhausser@gmail.com>
 */
class TraceableValidator implements ValidatorInterface, ResetInterface
{
    private \$validator;
    private \$collectedData = [];

    public function __construct(ValidatorInterface \$validator)
    {
        \$this->validator = \$validator;
    }

    /**
     * @return array
     */
    public function getCollectedData()
    {
        return \$this->collectedData;
    }

    public function reset()
    {
        \$this->collectedData = [];
    }

    /**
     * {@inheritdoc}
     */
    public function getMetadataFor(\$value)
    {
        return \$this->validator->getMetadataFor(\$value);
    }

    /**
     * {@inheritdoc}
     */
    public function hasMetadataFor(\$value)
    {
        return \$this->validator->hasMetadataFor(\$value);
    }

    /**
     * {@inheritdoc}
     */
    public function validate(\$value, \$constraints = null, \$groups = null)
    {
        \$violations = \$this->validator->validate(\$value, \$constraints, \$groups);

        \$trace = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS, 7);

        \$file = \$trace[0]['file'];
        \$line = \$trace[0]['line'];

        for (\$i = 1; \$i < 7; ++\$i) {
            if (isset(\$trace[\$i]['class'], \$trace[\$i]['function'])
                && 'validate' === \$trace[\$i]['function']
                && is_a(\$trace[\$i]['class'], ValidatorInterface::class, true)
            ) {
                \$file = \$trace[\$i]['file'];
                \$line = \$trace[\$i]['line'];

                while (++\$i < 7) {
                    if (isset(\$trace[\$i]['function'], \$trace[\$i]['file']) && empty(\$trace[\$i]['class']) && 0 !== strpos(\$trace[\$i]['function'], 'call_user_func')) {
                        \$file = \$trace[\$i]['file'];
                        \$line = \$trace[\$i]['line'];

                        break;
                    }
                }
                break;
            }
        }

        \$name = str_replace('\\\\', '/', \$file);
        \$name = substr(\$name, strrpos(\$name, '/') + 1);

        \$this->collectedData[] = [
            'caller' => compact('name', 'file', 'line'),
            'context' => compact('value', 'constraints', 'groups'),
            'violations' => iterator_to_array(\$violations),
        ];

        return \$violations;
    }

    /**
     * {@inheritdoc}
     */
    public function validateProperty(\$object, \$propertyName, \$groups = null)
    {
        return \$this->validator->validateProperty(\$object, \$propertyName, \$groups);
    }

    /**
     * {@inheritdoc}
     */
    public function validatePropertyValue(\$objectOrClass, \$propertyName, \$value, \$groups = null)
    {
        return \$this->validator->validatePropertyValue(\$objectOrClass, \$propertyName, \$value, \$groups);
    }

    /**
     * {@inheritdoc}
     */
    public function startContext()
    {
        return \$this->validator->startContext();
    }

    /**
     * {@inheritdoc}
     */
    public function inContext(ExecutionContextInterface \$context)
    {
        return \$this->validator->inContext(\$context);
    }
}
", "vendor/symfony/validator/Validator/TraceableValidator.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Validator/TraceableValidator.php");
    }
}
