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

/* var/cache/dev/ContainerRWJYAMq/getMaker_AutoCommand_MakeVoterService.php */
class __TwigTemplate_2eb953ce99e5fbdebeca716c83fb375aaf4d64a7ee8a93ea3d290325483bc5de extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "var/cache/dev/ContainerRWJYAMq/getMaker_AutoCommand_MakeVoterService.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "var/cache/dev/ContainerRWJYAMq/getMaker_AutoCommand_MakeVoterService.php"));

        // line 1
        echo "<?php

use Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator;
use Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'maker.auto_command.make_voter' shared service.

include_once \$this->targetDirs[3].'/vendor/symfony/console/Command/Command.php';
include_once \$this->targetDirs[3].'/vendor/symfony/maker-bundle/src/Command/MakerCommand.php';
include_once \$this->targetDirs[3].'/vendor/symfony/maker-bundle/src/MakerInterface.php';
include_once \$this->targetDirs[3].'/vendor/symfony/maker-bundle/src/Maker/AbstractMaker.php';
include_once \$this->targetDirs[3].'/vendor/symfony/maker-bundle/src/Maker/MakeVoter.php';

\$this->privates['maker.auto_command.make_voter'] = \$instance = new \\Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand(new \\Symfony\\Bundle\\MakerBundle\\Maker\\MakeVoter(), (\$this->privates['maker.file_manager'] ?? \$this->load('getMaker_FileManagerService.php')), (\$this->privates['maker.generator'] ?? \$this->load('getMaker_GeneratorService.php')));

\$instance->setName('make:voter');

return \$instance;
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "var/cache/dev/ContainerRWJYAMq/getMaker_AutoCommand_MakeVoterService.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

use Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator;
use Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'maker.auto_command.make_voter' shared service.

include_once \$this->targetDirs[3].'/vendor/symfony/console/Command/Command.php';
include_once \$this->targetDirs[3].'/vendor/symfony/maker-bundle/src/Command/MakerCommand.php';
include_once \$this->targetDirs[3].'/vendor/symfony/maker-bundle/src/MakerInterface.php';
include_once \$this->targetDirs[3].'/vendor/symfony/maker-bundle/src/Maker/AbstractMaker.php';
include_once \$this->targetDirs[3].'/vendor/symfony/maker-bundle/src/Maker/MakeVoter.php';

\$this->privates['maker.auto_command.make_voter'] = \$instance = new \\Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand(new \\Symfony\\Bundle\\MakerBundle\\Maker\\MakeVoter(), (\$this->privates['maker.file_manager'] ?? \$this->load('getMaker_FileManagerService.php')), (\$this->privates['maker.generator'] ?? \$this->load('getMaker_GeneratorService.php')));

\$instance->setName('make:voter');

return \$instance;
", "var/cache/dev/ContainerRWJYAMq/getMaker_AutoCommand_MakeVoterService.php", "/var/www/public/DevLaon/templates/var/cache/dev/ContainerRWJYAMq/getMaker_AutoCommand_MakeVoterService.php");
    }
}
