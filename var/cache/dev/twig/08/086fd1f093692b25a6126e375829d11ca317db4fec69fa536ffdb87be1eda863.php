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

/* vendor/symfony/console/Tests/Fixtures/FooLock2Command.php */
class __TwigTemplate_98eb6472ce42798e5f2aaf2a9fa41c8b1bf9fc2ab20fd703f376288f802f3230 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Tests/Fixtures/FooLock2Command.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Tests/Fixtures/FooLock2Command.php"));

        // line 1
        echo "<?php

use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Command\\LockableTrait;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;

class FooLock2Command extends Command
{
    use LockableTrait;

    protected function configure()
    {
        \$this->setName('foo:lock2');
    }

    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        try {
            \$this->lock();
            \$this->lock();
        } catch (LogicException \$e) {
            return 1;
        }

        return 2;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/console/Tests/Fixtures/FooLock2Command.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Command\\LockableTrait;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;

class FooLock2Command extends Command
{
    use LockableTrait;

    protected function configure()
    {
        \$this->setName('foo:lock2');
    }

    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        try {
            \$this->lock();
            \$this->lock();
        } catch (LogicException \$e) {
            return 1;
        }

        return 2;
    }
}
", "vendor/symfony/console/Tests/Fixtures/FooLock2Command.php", "/var/www/public/DevLaon/templates/vendor/symfony/console/Tests/Fixtures/FooLock2Command.php");
    }
}
