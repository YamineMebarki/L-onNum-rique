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

/* vendor/monolog/monolog/src/Monolog/Processor/UidProcessor.php */
class __TwigTemplate_610602f63279efda962318534ac79f54458d5dd9426ea765982bf5cc91d8ba7b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Processor/UidProcessor.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Processor/UidProcessor.php"));

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

use Monolog\\ResettableInterface;

/**
 * Adds a unique identifier into records
 *
 * @author Simon Mönch <sm@webfactory.de>
 */
class UidProcessor implements ProcessorInterface, ResettableInterface
{
    private \$uid;

    public function __construct(\$length = 7)
    {
        if (!is_int(\$length) || \$length > 32 || \$length < 1) {
            throw new \\InvalidArgumentException('The uid length must be an integer between 1 and 32');
        }


        \$this->uid = \$this->generateUid(\$length);
    }

    public function __invoke(array \$record)
    {
        \$record['extra']['uid'] = \$this->uid;

        return \$record;
    }

    /**
     * @return string
     */
    public function getUid()
    {
        return \$this->uid;
    }

    public function reset()
    {
        \$this->uid = \$this->generateUid(strlen(\$this->uid));
    }

    private function generateUid(\$length)
    {
        return substr(hash('md5', uniqid('', true)), 0, \$length);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/monolog/monolog/src/Monolog/Processor/UidProcessor.php";
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

use Monolog\\ResettableInterface;

/**
 * Adds a unique identifier into records
 *
 * @author Simon Mönch <sm@webfactory.de>
 */
class UidProcessor implements ProcessorInterface, ResettableInterface
{
    private \$uid;

    public function __construct(\$length = 7)
    {
        if (!is_int(\$length) || \$length > 32 || \$length < 1) {
            throw new \\InvalidArgumentException('The uid length must be an integer between 1 and 32');
        }


        \$this->uid = \$this->generateUid(\$length);
    }

    public function __invoke(array \$record)
    {
        \$record['extra']['uid'] = \$this->uid;

        return \$record;
    }

    /**
     * @return string
     */
    public function getUid()
    {
        return \$this->uid;
    }

    public function reset()
    {
        \$this->uid = \$this->generateUid(strlen(\$this->uid));
    }

    private function generateUid(\$length)
    {
        return substr(hash('md5', uniqid('', true)), 0, \$length);
    }
}
", "vendor/monolog/monolog/src/Monolog/Processor/UidProcessor.php", "/var/www/public/DevLaon/templates/vendor/monolog/monolog/src/Monolog/Processor/UidProcessor.php");
    }
}
