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

/* vendor/monolog/monolog/src/Monolog/Processor/GitProcessor.php */
class __TwigTemplate_98fd07b0dedc7efcc6fe6b0c87f91665b86fdf7d73e89aae39123330a4e479bc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Processor/GitProcessor.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Processor/GitProcessor.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Monolog package.
 *
 * (c) Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Monolog\\Processor;

use Monolog\\Logger;

/**
 * Injects Git branch and Git commit SHA in all records
 *
 * @author Nick Otter
 * @author Jordi Boggiano <j.boggiano@seld.be>
 */
class GitProcessor implements ProcessorInterface
{
    private \$level;
    private static \$cache;

    public function __construct(\$level = Logger::DEBUG)
    {
        \$this->level = Logger::toMonologLevel(\$level);
    }

    /**
     * @param  array \$record
     * @return array
     */
    public function __invoke(array \$record)
    {
        // return if the level is not high enough
        if (\$record['level'] < \$this->level) {
            return \$record;
        }

        \$record['extra']['git'] = self::getGitInfo();

        return \$record;
    }

    private static function getGitInfo()
    {
        if (self::\$cache) {
            return self::\$cache;
        }

        \$branches = `git branch -v --no-abbrev`;
        if (preg_match('{^\\* (.+?)\\s+([a-f0-9]{40})(?:\\s|\$)}m', \$branches, \$matches)) {
            return self::\$cache = array(
                'branch' => \$matches[1],
                'commit' => \$matches[2],
            );
        }

        return self::\$cache = array();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/monolog/monolog/src/Monolog/Processor/GitProcessor.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Monolog package.
 *
 * (c) Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Monolog\\Processor;

use Monolog\\Logger;

/**
 * Injects Git branch and Git commit SHA in all records
 *
 * @author Nick Otter
 * @author Jordi Boggiano <j.boggiano@seld.be>
 */
class GitProcessor implements ProcessorInterface
{
    private \$level;
    private static \$cache;

    public function __construct(\$level = Logger::DEBUG)
    {
        \$this->level = Logger::toMonologLevel(\$level);
    }

    /**
     * @param  array \$record
     * @return array
     */
    public function __invoke(array \$record)
    {
        // return if the level is not high enough
        if (\$record['level'] < \$this->level) {
            return \$record;
        }

        \$record['extra']['git'] = self::getGitInfo();

        return \$record;
    }

    private static function getGitInfo()
    {
        if (self::\$cache) {
            return self::\$cache;
        }

        \$branches = `git branch -v --no-abbrev`;
        if (preg_match('{^\\* (.+?)\\s+([a-f0-9]{40})(?:\\s|\$)}m', \$branches, \$matches)) {
            return self::\$cache = array(
                'branch' => \$matches[1],
                'commit' => \$matches[2],
            );
        }

        return self::\$cache = array();
    }
}
", "vendor/monolog/monolog/src/Monolog/Processor/GitProcessor.php", "/var/www/public/DevLaon/templates/vendor/monolog/monolog/src/Monolog/Processor/GitProcessor.php");
    }
}
