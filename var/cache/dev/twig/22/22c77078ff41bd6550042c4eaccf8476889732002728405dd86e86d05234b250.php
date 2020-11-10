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

/* vendor/symfony/console/Tests/Fixtures/Style/SymfonyStyle/command/command_8.php */
class __TwigTemplate_95e71051562409cf2955eb5e91d2f91cf6ef973eaf8a6f24fad4591a6db07786 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Tests/Fixtures/Style/SymfonyStyle/command/command_8.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Tests/Fixtures/Style/SymfonyStyle/command/command_8.php"));

        // line 1
        echo "<?php

use Symfony\\Component\\Console\\Helper\\TableCell;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;

//Ensure formatting tables when using multiple headers with TableCell
return function (InputInterface \$input, OutputInterface \$output) {
    \$headers = [
        [new TableCell('Main table title', ['colspan' => 3])],
        ['ISBN', 'Title', 'Author'],
    ];

    \$rows = [
        [
            '978-0521567817',
            'De Monarchia',
            new TableCell(\"Dante Alighieri\\nspans multiple rows\", ['rowspan' => 2]),
        ],
        ['978-0804169127', 'Divine Comedy'],
    ];

    \$output = new SymfonyStyle(\$input, \$output);
    \$output->table(\$headers, \$rows);
};
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/console/Tests/Fixtures/Style/SymfonyStyle/command/command_8.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

use Symfony\\Component\\Console\\Helper\\TableCell;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;

//Ensure formatting tables when using multiple headers with TableCell
return function (InputInterface \$input, OutputInterface \$output) {
    \$headers = [
        [new TableCell('Main table title', ['colspan' => 3])],
        ['ISBN', 'Title', 'Author'],
    ];

    \$rows = [
        [
            '978-0521567817',
            'De Monarchia',
            new TableCell(\"Dante Alighieri\\nspans multiple rows\", ['rowspan' => 2]),
        ],
        ['978-0804169127', 'Divine Comedy'],
    ];

    \$output = new SymfonyStyle(\$input, \$output);
    \$output->table(\$headers, \$rows);
};
", "vendor/symfony/console/Tests/Fixtures/Style/SymfonyStyle/command/command_8.php", "/var/www/public/DevLaon/templates/vendor/symfony/console/Tests/Fixtures/Style/SymfonyStyle/command/command_8.php");
    }
}
