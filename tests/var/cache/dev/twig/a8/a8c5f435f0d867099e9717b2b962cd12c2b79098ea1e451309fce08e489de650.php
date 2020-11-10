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

/* vendor/symfony/intl/Resources/bin/common.php */
class __TwigTemplate_4663807cd7501584e897f5da6be5c9c5284b25ef220d72d73918f725f545ee91 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/bin/common.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/bin/common.php"));

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

define('LINE_WIDTH', 75);

define('LINE', str_repeat('-', LINE_WIDTH).\"\\n\");

function bailout(\$message)
{
    echo wordwrap(\$message, LINE_WIDTH).\" Aborting.\\n\";

    exit(1);
}

function strip_minor_versions(\$version)
{
    preg_match('/^(?P<version>[0-9]\\.[0-9]|[0-9]{2,})/', \$version, \$matches);

    return \$matches['version'];
}

function centered(\$text)
{
    \$padding = (int) ((LINE_WIDTH - strlen(\$text)) / 2);

    return str_repeat(' ', \$padding).\$text;
}

function cd(\$dir)
{
    if (false === chdir(\$dir)) {
        bailout(\"Could not switch to directory \$dir.\");
    }
}

function run(\$command)
{
    exec(\$command, \$output, \$status);

    if (0 !== \$status) {
        \$output = implode(\"\\n\", \$output);
        echo \"Error while running:\\n    \".getcwd().'\$ '.\$command.\"\\nOutput:\\n\".LINE.\"\$output\\n\".LINE;

        bailout(\"\\\"\$command\\\" failed.\");
    }
}

function get_icu_version_from_genrb(\$genrb)
{
    exec(\$genrb.' --version - 2>&1', \$output, \$status);

    if (0 !== \$status) {
        bailout(\$genrb.' failed.');
    }

    if (!preg_match('/ICU version ([\\d\\.]+)/', implode('', \$output), \$matches)) {
        return null;
    }

    return \$matches[1];
}

error_reporting(E_ALL);

set_error_handler(function (\$type, \$msg, \$file, \$line) {
    throw new \\ErrorException(\$msg, 0, \$type, \$file, \$line);
});

set_exception_handler(function (\\Throwable \$exception) {
    echo \"\\n\";

    \$cause = \$exception;
    \$root = true;

    while (null !== \$cause) {
        if (!\$root) {
            echo \"Caused by\\n\";
        }

        echo get_class(\$cause).': '.\$cause->getMessage().\"\\n\";
        echo \"\\n\";
        echo \$cause->getFile().':'.\$cause->getLine().\"\\n\";
        echo \$cause->getTraceAsString().\"\\n\";

        \$cause = \$cause->getPrevious();
        \$root = false;
    }
});
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/bin/common.php";
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

define('LINE_WIDTH', 75);

define('LINE', str_repeat('-', LINE_WIDTH).\"\\n\");

function bailout(\$message)
{
    echo wordwrap(\$message, LINE_WIDTH).\" Aborting.\\n\";

    exit(1);
}

function strip_minor_versions(\$version)
{
    preg_match('/^(?P<version>[0-9]\\.[0-9]|[0-9]{2,})/', \$version, \$matches);

    return \$matches['version'];
}

function centered(\$text)
{
    \$padding = (int) ((LINE_WIDTH - strlen(\$text)) / 2);

    return str_repeat(' ', \$padding).\$text;
}

function cd(\$dir)
{
    if (false === chdir(\$dir)) {
        bailout(\"Could not switch to directory \$dir.\");
    }
}

function run(\$command)
{
    exec(\$command, \$output, \$status);

    if (0 !== \$status) {
        \$output = implode(\"\\n\", \$output);
        echo \"Error while running:\\n    \".getcwd().'\$ '.\$command.\"\\nOutput:\\n\".LINE.\"\$output\\n\".LINE;

        bailout(\"\\\"\$command\\\" failed.\");
    }
}

function get_icu_version_from_genrb(\$genrb)
{
    exec(\$genrb.' --version - 2>&1', \$output, \$status);

    if (0 !== \$status) {
        bailout(\$genrb.' failed.');
    }

    if (!preg_match('/ICU version ([\\d\\.]+)/', implode('', \$output), \$matches)) {
        return null;
    }

    return \$matches[1];
}

error_reporting(E_ALL);

set_error_handler(function (\$type, \$msg, \$file, \$line) {
    throw new \\ErrorException(\$msg, 0, \$type, \$file, \$line);
});

set_exception_handler(function (\\Throwable \$exception) {
    echo \"\\n\";

    \$cause = \$exception;
    \$root = true;

    while (null !== \$cause) {
        if (!\$root) {
            echo \"Caused by\\n\";
        }

        echo get_class(\$cause).': '.\$cause->getMessage().\"\\n\";
        echo \"\\n\";
        echo \$cause->getFile().':'.\$cause->getLine().\"\\n\";
        echo \$cause->getTraceAsString().\"\\n\";

        \$cause = \$cause->getPrevious();
        \$root = false;
    }
});
", "vendor/symfony/intl/Resources/bin/common.php", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/bin/common.php");
    }
}
