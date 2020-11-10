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

/* vendor/symfony/dependency-injection/Tests/Fixtures/php/services_tsantos.php */
class __TwigTemplate_fa6358f84e9b72954a7cee8059ed058569217981fb2cd6307fcca967e2889a1f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Fixtures/php/services_tsantos.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Fixtures/php/services_tsantos.php"));

        // line 1
        echo "<?php

use Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator;
use Symfony\\Component\\DependencyInjection\\ContainerInterface;
use Symfony\\Component\\DependencyInjection\\Container;
use Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException;
use Symfony\\Component\\DependencyInjection\\Exception\\LogicException;
use Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException;
use Symfony\\Component\\DependencyInjection\\ParameterBag\\FrozenParameterBag;

/**
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final since Symfony 3.3
 */
class ProjectServiceContainer extends Container
{
    private \$parameters = [];
    private \$targetDirs = [];

    public function __construct()
    {
        \$this->services = \$this->privates = [];
        \$this->methodMap = [
            'tsantos_serializer' => 'getTsantosSerializerService',
        ];
        \$this->aliases = [
            'TSantos\\\\Serializer\\\\SerializerInterface' => 'tsantos_serializer',
        ];
    }

    public function compile()
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled()
    {
        return true;
    }

    public function getRemovedIds()
    {
        return [
            'Psr\\\\Container\\\\ContainerInterface' => true,
            'Symfony\\\\Component\\\\DependencyInjection\\\\ContainerInterface' => true,
        ];
    }

    /**
     * Gets the public 'tsantos_serializer' shared service.
     *
     * @return \\TSantos\\Serializer\\EventEmitterSerializer
     */
    protected function getTsantosSerializerService()
    {
        \$a = new \\TSantos\\Serializer\\NormalizerRegistry();

        \$b = new \\TSantos\\Serializer\\Normalizer\\CollectionNormalizer();

        \$c = new \\TSantos\\Serializer\\EventDispatcher\\EventDispatcher();
        \$c->addSubscriber(new \\TSantos\\SerializerBundle\\EventListener\\StopwatchListener(new \\Symfony\\Component\\Stopwatch\\Stopwatch(true)));

        \$this->services['tsantos_serializer'] = \$instance = new \\TSantos\\Serializer\\EventEmitterSerializer(new \\TSantos\\Serializer\\Encoder\\JsonEncoder(), \$a, \$c);

        \$b->setSerializer(\$instance);
        \$d = new \\TSantos\\Serializer\\Normalizer\\JsonNormalizer();
        \$d->setSerializer(\$instance);

        \$a->add(new \\TSantos\\Serializer\\Normalizer\\ObjectNormalizer(new \\TSantos\\SerializerBundle\\Serializer\\CircularReferenceHandler()));
        \$a->add(\$b);
        \$a->add(\$d);

        return \$instance;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Tests/Fixtures/php/services_tsantos.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

use Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator;
use Symfony\\Component\\DependencyInjection\\ContainerInterface;
use Symfony\\Component\\DependencyInjection\\Container;
use Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException;
use Symfony\\Component\\DependencyInjection\\Exception\\LogicException;
use Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException;
use Symfony\\Component\\DependencyInjection\\ParameterBag\\FrozenParameterBag;

/**
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final since Symfony 3.3
 */
class ProjectServiceContainer extends Container
{
    private \$parameters = [];
    private \$targetDirs = [];

    public function __construct()
    {
        \$this->services = \$this->privates = [];
        \$this->methodMap = [
            'tsantos_serializer' => 'getTsantosSerializerService',
        ];
        \$this->aliases = [
            'TSantos\\\\Serializer\\\\SerializerInterface' => 'tsantos_serializer',
        ];
    }

    public function compile()
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled()
    {
        return true;
    }

    public function getRemovedIds()
    {
        return [
            'Psr\\\\Container\\\\ContainerInterface' => true,
            'Symfony\\\\Component\\\\DependencyInjection\\\\ContainerInterface' => true,
        ];
    }

    /**
     * Gets the public 'tsantos_serializer' shared service.
     *
     * @return \\TSantos\\Serializer\\EventEmitterSerializer
     */
    protected function getTsantosSerializerService()
    {
        \$a = new \\TSantos\\Serializer\\NormalizerRegistry();

        \$b = new \\TSantos\\Serializer\\Normalizer\\CollectionNormalizer();

        \$c = new \\TSantos\\Serializer\\EventDispatcher\\EventDispatcher();
        \$c->addSubscriber(new \\TSantos\\SerializerBundle\\EventListener\\StopwatchListener(new \\Symfony\\Component\\Stopwatch\\Stopwatch(true)));

        \$this->services['tsantos_serializer'] = \$instance = new \\TSantos\\Serializer\\EventEmitterSerializer(new \\TSantos\\Serializer\\Encoder\\JsonEncoder(), \$a, \$c);

        \$b->setSerializer(\$instance);
        \$d = new \\TSantos\\Serializer\\Normalizer\\JsonNormalizer();
        \$d->setSerializer(\$instance);

        \$a->add(new \\TSantos\\Serializer\\Normalizer\\ObjectNormalizer(new \\TSantos\\SerializerBundle\\Serializer\\CircularReferenceHandler()));
        \$a->add(\$b);
        \$a->add(\$d);

        return \$instance;
    }
}
", "vendor/symfony/dependency-injection/Tests/Fixtures/php/services_tsantos.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Tests/Fixtures/php/services_tsantos.php");
    }
}
