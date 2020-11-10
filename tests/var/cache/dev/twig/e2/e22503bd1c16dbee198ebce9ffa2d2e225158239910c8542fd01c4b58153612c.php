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

/* vendor/ocramius/proxy-manager/src/ProxyManager/GeneratorStrategy/EvaluatingGeneratorStrategy.php */
class __TwigTemplate_daac221e23c6dc58c104e547ad6478fdb33d867f46677ac9915350813d43e1a6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/GeneratorStrategy/EvaluatingGeneratorStrategy.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/src/ProxyManager/GeneratorStrategy/EvaluatingGeneratorStrategy.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace ProxyManager\\GeneratorStrategy;

use Zend\\Code\\Generator\\ClassGenerator;

/**
 * Generator strategy that produces the code and evaluates it at runtime
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class EvaluatingGeneratorStrategy implements GeneratorStrategyInterface
{
    /**
     * @var bool flag indicating whether {@see eval} can be used
     */
    private \$canEval = true;

    /**
     * Constructor
     */
    public function __construct()
    {
        // @codeCoverageIgnoreStart
        \$this->canEval = ! ini_get('suhosin.executor.disable_eval');
        // @codeCoverageIgnoreEnd
    }

    /**
     * Evaluates the generated code before returning it
     *
     * {@inheritDoc}
     */
    public function generate(ClassGenerator \$classGenerator) : string
    {
        \$code = \$classGenerator->generate();

        // @codeCoverageIgnoreStart
        if (! \$this->canEval) {
            \$fileName = tempnam(sys_get_temp_dir(), 'EvaluatingGeneratorStrategy.php.tmp.');

            file_put_contents(\$fileName, \"<?php\\n\" . \$code);
            /* @noinspection PhpIncludeInspection */
            require \$fileName;
            unlink(\$fileName);

            return \$code;
        }
        // @codeCoverageIgnoreEnd

        eval(\$code);

        return \$code;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/ocramius/proxy-manager/src/ProxyManager/GeneratorStrategy/EvaluatingGeneratorStrategy.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace ProxyManager\\GeneratorStrategy;

use Zend\\Code\\Generator\\ClassGenerator;

/**
 * Generator strategy that produces the code and evaluates it at runtime
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class EvaluatingGeneratorStrategy implements GeneratorStrategyInterface
{
    /**
     * @var bool flag indicating whether {@see eval} can be used
     */
    private \$canEval = true;

    /**
     * Constructor
     */
    public function __construct()
    {
        // @codeCoverageIgnoreStart
        \$this->canEval = ! ini_get('suhosin.executor.disable_eval');
        // @codeCoverageIgnoreEnd
    }

    /**
     * Evaluates the generated code before returning it
     *
     * {@inheritDoc}
     */
    public function generate(ClassGenerator \$classGenerator) : string
    {
        \$code = \$classGenerator->generate();

        // @codeCoverageIgnoreStart
        if (! \$this->canEval) {
            \$fileName = tempnam(sys_get_temp_dir(), 'EvaluatingGeneratorStrategy.php.tmp.');

            file_put_contents(\$fileName, \"<?php\\n\" . \$code);
            /* @noinspection PhpIncludeInspection */
            require \$fileName;
            unlink(\$fileName);

            return \$code;
        }
        // @codeCoverageIgnoreEnd

        eval(\$code);

        return \$code;
    }
}
", "vendor/ocramius/proxy-manager/src/ProxyManager/GeneratorStrategy/EvaluatingGeneratorStrategy.php", "/var/www/public/DevLaon/templates/vendor/ocramius/proxy-manager/src/ProxyManager/GeneratorStrategy/EvaluatingGeneratorStrategy.php");
    }
}
