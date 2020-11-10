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

/* vendor/symfony/console/Tests/Fixtures/Style/SymfonyStyle/command/command_2.php */
class __TwigTemplate_958d447793039262a0fd4d8e2213cdf6bf2b5e71be8c90297afa85c7c4aaf45d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Tests/Fixtures/Style/SymfonyStyle/command/command_2.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Tests/Fixtures/Style/SymfonyStyle/command/command_2.php"));

        // line 1
        echo "<?php

use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;

//Ensure has single blank line between blocks
return function (InputInterface \$input, OutputInterface \$output) {
    \$output = new SymfonyStyle(\$input, \$output);
    \$output->warning('Warning');
    \$output->caution('Caution');
    \$output->error('Error');
    \$output->success('Success');
    \$output->note('Note');
    \$output->block('Custom block', 'CUSTOM', 'fg=white;bg=green', 'X ', true);
};
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/console/Tests/Fixtures/Style/SymfonyStyle/command/command_2.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;

//Ensure has single blank line between blocks
return function (InputInterface \$input, OutputInterface \$output) {
    \$output = new SymfonyStyle(\$input, \$output);
    \$output->warning('Warning');
    \$output->caution('Caution');
    \$output->error('Error');
    \$output->success('Success');
    \$output->note('Note');
    \$output->block('Custom block', 'CUSTOM', 'fg=white;bg=green', 'X ', true);
};
", "vendor/symfony/console/Tests/Fixtures/Style/SymfonyStyle/command/command_2.php", "/var/www/public/DevLaon/templates/vendor/symfony/console/Tests/Fixtures/Style/SymfonyStyle/command/command_2.php");
    }
}
