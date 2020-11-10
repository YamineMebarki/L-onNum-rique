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

/* vendor/symfony/http-kernel/DataCollector/DataCollector.php */
class __TwigTemplate_a8c06a7aedef879240e42aad453b514a9aaab730fe0536081d5ac632f5f42faa extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/DataCollector/DataCollector.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/DataCollector/DataCollector.php"));

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

namespace Symfony\\Component\\HttpKernel\\DataCollector;

use Symfony\\Component\\VarDumper\\Caster\\CutStub;
use Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster;
use Symfony\\Component\\VarDumper\\Cloner\\ClonerInterface;
use Symfony\\Component\\VarDumper\\Cloner\\Data;
use Symfony\\Component\\VarDumper\\Cloner\\Stub;
use Symfony\\Component\\VarDumper\\Cloner\\VarCloner;

/**
 * DataCollector.
 *
 * Children of this class must store the collected data in the data property.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Bernhard Schussek <bschussek@symfony.com>
 */
abstract class DataCollector implements DataCollectorInterface
{
    /**
     * @var array|Data
     */
    protected \$data = [];

    /**
     * @var ClonerInterface
     */
    private \$cloner;

    /**
     * @deprecated since Symfony 4.3, store all the serialized state in the data property instead
     */
    public function serialize()
    {
        @trigger_error(sprintf('The \"%s\" method is deprecated since Symfony 4.3, store all the serialized state in the data property instead.', __METHOD__), E_USER_DEPRECATED);

        \$trace = debug_backtrace(DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
        \$isCalledFromOverridingMethod = isset(\$trace[1]['function'], \$trace[1]['object']) && 'serialize' === \$trace[1]['function'] && \$this === \$trace[1]['object'];

        return \$isCalledFromOverridingMethod ? \$this->data : serialize(\$this->data);
    }

    /**
     * @deprecated since Symfony 4.3, store all the serialized state in the data property instead
     */
    public function unserialize(\$data)
    {
        @trigger_error(sprintf('The \"%s\" method is deprecated since Symfony 4.3, store all the serialized state in the data property instead.', __METHOD__), E_USER_DEPRECATED);

        \$this->data = \\is_array(\$data) ? \$data : unserialize(\$data);
    }

    /**
     * Converts the variable into a serializable Data instance.
     *
     * This array can be displayed in the template using
     * the VarDumper component.
     *
     * @param mixed \$var
     *
     * @return Data
     */
    protected function cloneVar(\$var)
    {
        if (\$var instanceof Data) {
            return \$var;
        }
        if (null === \$this->cloner) {
            if (!class_exists(CutStub::class)) {
                throw new \\LogicException(sprintf('The VarDumper component is needed for the %s() method. Install symfony/var-dumper version 3.4 or above.', __METHOD__));
            }
            \$this->cloner = new VarCloner();
            \$this->cloner->setMaxItems(-1);
            \$this->cloner->addCasters(\$this->getCasters());
        }

        return \$this->cloner->cloneVar(\$var);
    }

    /**
     * @return callable[] The casters to add to the cloner
     */
    protected function getCasters()
    {
        \$casters = [
            '*' => function (\$v, array \$a, Stub \$s, \$isNested) {
                if (!\$v instanceof Stub) {
                    foreach (\$a as \$k => \$v) {
                        if (\\is_object(\$v) && !\$v instanceof \\DateTimeInterface && !\$v instanceof Stub) {
                            \$a[\$k] = new CutStub(\$v);
                        }
                    }
                }

                return \$a;
            },
        ];

        if (method_exists(ReflectionCaster::class, 'unsetClosureFileInfo')) {
            \$casters += ReflectionCaster::UNSET_CLOSURE_FILE_INFO;
        }

        return \$casters;
    }

    public function __sleep()
    {
        if (__CLASS__ !== \$c = (new \\ReflectionMethod(\$this, 'serialize'))->getDeclaringClass()->name) {
            @trigger_error(sprintf('Implementing the \"%s::serialize()\" method is deprecated since Symfony 4.3, store all the serialized state in the \"data\" property instead.', \$c), E_USER_DEPRECATED);
            \$this->data = \$this->serialize();
        }

        return ['data'];
    }

    public function __wakeup()
    {
        if (__CLASS__ !== \$c = (new \\ReflectionMethod(\$this, 'unserialize'))->getDeclaringClass()->name) {
            @trigger_error(sprintf('Implementing the \"%s::unserialize()\" method is deprecated since Symfony 4.3, store all the serialized state in the \"data\" property instead.', \$c), E_USER_DEPRECATED);
            \$this->unserialize(\$this->data);
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/DataCollector/DataCollector.php";
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

namespace Symfony\\Component\\HttpKernel\\DataCollector;

use Symfony\\Component\\VarDumper\\Caster\\CutStub;
use Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster;
use Symfony\\Component\\VarDumper\\Cloner\\ClonerInterface;
use Symfony\\Component\\VarDumper\\Cloner\\Data;
use Symfony\\Component\\VarDumper\\Cloner\\Stub;
use Symfony\\Component\\VarDumper\\Cloner\\VarCloner;

/**
 * DataCollector.
 *
 * Children of this class must store the collected data in the data property.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Bernhard Schussek <bschussek@symfony.com>
 */
abstract class DataCollector implements DataCollectorInterface
{
    /**
     * @var array|Data
     */
    protected \$data = [];

    /**
     * @var ClonerInterface
     */
    private \$cloner;

    /**
     * @deprecated since Symfony 4.3, store all the serialized state in the data property instead
     */
    public function serialize()
    {
        @trigger_error(sprintf('The \"%s\" method is deprecated since Symfony 4.3, store all the serialized state in the data property instead.', __METHOD__), E_USER_DEPRECATED);

        \$trace = debug_backtrace(DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
        \$isCalledFromOverridingMethod = isset(\$trace[1]['function'], \$trace[1]['object']) && 'serialize' === \$trace[1]['function'] && \$this === \$trace[1]['object'];

        return \$isCalledFromOverridingMethod ? \$this->data : serialize(\$this->data);
    }

    /**
     * @deprecated since Symfony 4.3, store all the serialized state in the data property instead
     */
    public function unserialize(\$data)
    {
        @trigger_error(sprintf('The \"%s\" method is deprecated since Symfony 4.3, store all the serialized state in the data property instead.', __METHOD__), E_USER_DEPRECATED);

        \$this->data = \\is_array(\$data) ? \$data : unserialize(\$data);
    }

    /**
     * Converts the variable into a serializable Data instance.
     *
     * This array can be displayed in the template using
     * the VarDumper component.
     *
     * @param mixed \$var
     *
     * @return Data
     */
    protected function cloneVar(\$var)
    {
        if (\$var instanceof Data) {
            return \$var;
        }
        if (null === \$this->cloner) {
            if (!class_exists(CutStub::class)) {
                throw new \\LogicException(sprintf('The VarDumper component is needed for the %s() method. Install symfony/var-dumper version 3.4 or above.', __METHOD__));
            }
            \$this->cloner = new VarCloner();
            \$this->cloner->setMaxItems(-1);
            \$this->cloner->addCasters(\$this->getCasters());
        }

        return \$this->cloner->cloneVar(\$var);
    }

    /**
     * @return callable[] The casters to add to the cloner
     */
    protected function getCasters()
    {
        \$casters = [
            '*' => function (\$v, array \$a, Stub \$s, \$isNested) {
                if (!\$v instanceof Stub) {
                    foreach (\$a as \$k => \$v) {
                        if (\\is_object(\$v) && !\$v instanceof \\DateTimeInterface && !\$v instanceof Stub) {
                            \$a[\$k] = new CutStub(\$v);
                        }
                    }
                }

                return \$a;
            },
        ];

        if (method_exists(ReflectionCaster::class, 'unsetClosureFileInfo')) {
            \$casters += ReflectionCaster::UNSET_CLOSURE_FILE_INFO;
        }

        return \$casters;
    }

    public function __sleep()
    {
        if (__CLASS__ !== \$c = (new \\ReflectionMethod(\$this, 'serialize'))->getDeclaringClass()->name) {
            @trigger_error(sprintf('Implementing the \"%s::serialize()\" method is deprecated since Symfony 4.3, store all the serialized state in the \"data\" property instead.', \$c), E_USER_DEPRECATED);
            \$this->data = \$this->serialize();
        }

        return ['data'];
    }

    public function __wakeup()
    {
        if (__CLASS__ !== \$c = (new \\ReflectionMethod(\$this, 'unserialize'))->getDeclaringClass()->name) {
            @trigger_error(sprintf('Implementing the \"%s::unserialize()\" method is deprecated since Symfony 4.3, store all the serialized state in the \"data\" property instead.', \$c), E_USER_DEPRECATED);
            \$this->unserialize(\$this->data);
        }
    }
}
", "vendor/symfony/http-kernel/DataCollector/DataCollector.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/DataCollector/DataCollector.php");
    }
}
