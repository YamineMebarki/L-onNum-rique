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

/* vendor/symfony/validator/DataCollector/ValidatorDataCollector.php */
class __TwigTemplate_ffac7ec47e4ff3822d2ac41e8bf131e3be2214976b5916c5641e2c387748b45b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/DataCollector/ValidatorDataCollector.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/DataCollector/ValidatorDataCollector.php"));

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

namespace Symfony\\Component\\Validator\\DataCollector;

use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\DataCollector\\DataCollector;
use Symfony\\Component\\HttpKernel\\DataCollector\\LateDataCollectorInterface;
use Symfony\\Component\\Validator\\Validator\\TraceableValidator;
use Symfony\\Component\\VarDumper\\Caster\\Caster;
use Symfony\\Component\\VarDumper\\Caster\\ClassStub;
use Symfony\\Component\\VarDumper\\Cloner\\Data;
use Symfony\\Component\\VarDumper\\Cloner\\Stub;

/**
 * @author Maxime Steinhausser <maxime.steinhausser@gmail.com>
 */
class ValidatorDataCollector extends DataCollector implements LateDataCollectorInterface
{
    private \$validator;

    public function __construct(TraceableValidator \$validator)
    {
        \$this->validator = \$validator;
        \$this->reset();
    }

    /**
     * {@inheritdoc}
     */
    public function collect(Request \$request, Response \$response, \\Exception \$exception = null)
    {
        // Everything is collected once, on kernel terminate.
    }

    public function reset()
    {
        \$this->data = [
            'calls' => \$this->cloneVar([]),
            'violations_count' => 0,
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function lateCollect()
    {
        \$collected = \$this->validator->getCollectedData();
        \$this->data['calls'] = \$this->cloneVar(\$collected);
        \$this->data['violations_count'] = array_reduce(\$collected, function (\$previous, \$item) {
            return \$previous + \\count(\$item['violations']);
        }, 0);
    }

    /**
     * @return Data
     */
    public function getCalls()
    {
        return \$this->data['calls'];
    }

    /**
     * @return int
     */
    public function getViolationsCount()
    {
        return \$this->data['violations_count'];
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'validator';
    }

    protected function getCasters()
    {
        return parent::getCasters() + [
            \\Exception::class => function (\\Exception \$e, array \$a, Stub \$s) {
                foreach ([\"\\0Exception\\0previous\", \"\\0Exception\\0trace\"] as \$k) {
                    if (isset(\$a[\$k])) {
                        unset(\$a[\$k]);
                        ++\$s->cut;
                    }
                }

                return \$a;
            },
            FormInterface::class => function (FormInterface \$f, array \$a) {
                return [
                    Caster::PREFIX_VIRTUAL.'name' => \$f->getName(),
                    Caster::PREFIX_VIRTUAL.'type_class' => new ClassStub(\\get_class(\$f->getConfig()->getType()->getInnerType())),
                    Caster::PREFIX_VIRTUAL.'data' => \$f->getData(),
                ];
            },
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/DataCollector/ValidatorDataCollector.php";
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

namespace Symfony\\Component\\Validator\\DataCollector;

use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\DataCollector\\DataCollector;
use Symfony\\Component\\HttpKernel\\DataCollector\\LateDataCollectorInterface;
use Symfony\\Component\\Validator\\Validator\\TraceableValidator;
use Symfony\\Component\\VarDumper\\Caster\\Caster;
use Symfony\\Component\\VarDumper\\Caster\\ClassStub;
use Symfony\\Component\\VarDumper\\Cloner\\Data;
use Symfony\\Component\\VarDumper\\Cloner\\Stub;

/**
 * @author Maxime Steinhausser <maxime.steinhausser@gmail.com>
 */
class ValidatorDataCollector extends DataCollector implements LateDataCollectorInterface
{
    private \$validator;

    public function __construct(TraceableValidator \$validator)
    {
        \$this->validator = \$validator;
        \$this->reset();
    }

    /**
     * {@inheritdoc}
     */
    public function collect(Request \$request, Response \$response, \\Exception \$exception = null)
    {
        // Everything is collected once, on kernel terminate.
    }

    public function reset()
    {
        \$this->data = [
            'calls' => \$this->cloneVar([]),
            'violations_count' => 0,
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function lateCollect()
    {
        \$collected = \$this->validator->getCollectedData();
        \$this->data['calls'] = \$this->cloneVar(\$collected);
        \$this->data['violations_count'] = array_reduce(\$collected, function (\$previous, \$item) {
            return \$previous + \\count(\$item['violations']);
        }, 0);
    }

    /**
     * @return Data
     */
    public function getCalls()
    {
        return \$this->data['calls'];
    }

    /**
     * @return int
     */
    public function getViolationsCount()
    {
        return \$this->data['violations_count'];
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'validator';
    }

    protected function getCasters()
    {
        return parent::getCasters() + [
            \\Exception::class => function (\\Exception \$e, array \$a, Stub \$s) {
                foreach ([\"\\0Exception\\0previous\", \"\\0Exception\\0trace\"] as \$k) {
                    if (isset(\$a[\$k])) {
                        unset(\$a[\$k]);
                        ++\$s->cut;
                    }
                }

                return \$a;
            },
            FormInterface::class => function (FormInterface \$f, array \$a) {
                return [
                    Caster::PREFIX_VIRTUAL.'name' => \$f->getName(),
                    Caster::PREFIX_VIRTUAL.'type_class' => new ClassStub(\\get_class(\$f->getConfig()->getType()->getInnerType())),
                    Caster::PREFIX_VIRTUAL.'data' => \$f->getData(),
                ];
            },
        ];
    }
}
", "vendor/symfony/validator/DataCollector/ValidatorDataCollector.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/DataCollector/ValidatorDataCollector.php");
    }
}
