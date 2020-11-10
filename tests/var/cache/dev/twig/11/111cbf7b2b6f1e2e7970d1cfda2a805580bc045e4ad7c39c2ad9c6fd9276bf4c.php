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

/* vendor/monolog/monolog/src/Monolog/Processor/MercurialProcessor.php */
class __TwigTemplate_2f60e8a21c7450b2f571cb21a493e482fab03bab09481e41f2858161cd95a54b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Processor/MercurialProcessor.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Processor/MercurialProcessor.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Monolog package.
 *
 * (c) Jonathan A. Schweder <jonathanschweder@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Monolog\\Processor;

use Monolog\\Logger;

/**
 * Injects Hg branch and Hg revision number in all records
 *
 * @author Jonathan A. Schweder <jonathanschweder@gmail.com>
 */
class MercurialProcessor implements ProcessorInterface
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

        \$record['extra']['hg'] = self::getMercurialInfo();

        return \$record;
    }

    private static function getMercurialInfo()
    {
        if (self::\$cache) {
            return self::\$cache;
        }

        \$result = explode(' ', trim(`hg id -nb`));
        if (count(\$result) >= 3) {
            return self::\$cache = array(
                'branch' => \$result[1],
                'revision' => \$result[2],
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
        return "vendor/monolog/monolog/src/Monolog/Processor/MercurialProcessor.php";
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
 * (c) Jonathan A. Schweder <jonathanschweder@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Monolog\\Processor;

use Monolog\\Logger;

/**
 * Injects Hg branch and Hg revision number in all records
 *
 * @author Jonathan A. Schweder <jonathanschweder@gmail.com>
 */
class MercurialProcessor implements ProcessorInterface
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

        \$record['extra']['hg'] = self::getMercurialInfo();

        return \$record;
    }

    private static function getMercurialInfo()
    {
        if (self::\$cache) {
            return self::\$cache;
        }

        \$result = explode(' ', trim(`hg id -nb`));
        if (count(\$result) >= 3) {
            return self::\$cache = array(
                'branch' => \$result[1],
                'revision' => \$result[2],
            );
        }

        return self::\$cache = array();
    }
}
", "vendor/monolog/monolog/src/Monolog/Processor/MercurialProcessor.php", "/var/www/public/DevLaon/templates/vendor/monolog/monolog/src/Monolog/Processor/MercurialProcessor.php");
    }
}
