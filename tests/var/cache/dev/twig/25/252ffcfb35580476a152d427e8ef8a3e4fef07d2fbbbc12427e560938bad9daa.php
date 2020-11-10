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

/* vendor/symfony/process/ProcessUtils.php */
class __TwigTemplate_43253d3a400a19ee319223f425c9aebb4f772b6e09f9e339f5f1af9b43a9b510 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/process/ProcessUtils.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/process/ProcessUtils.php"));

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

namespace Symfony\\Component\\Process;

use Symfony\\Component\\Process\\Exception\\InvalidArgumentException;

/**
 * ProcessUtils is a bunch of utility methods.
 *
 * This class contains static methods only and is not meant to be instantiated.
 *
 * @author Martin Hasoň <martin.hason@gmail.com>
 */
class ProcessUtils
{
    /**
     * This class should not be instantiated.
     */
    private function __construct()
    {
    }

    /**
     * Validates and normalizes a Process input.
     *
     * @param string \$caller The name of method call that validates the input
     * @param mixed  \$input  The input to validate
     *
     * @return mixed The validated input
     *
     * @throws InvalidArgumentException In case the input is not valid
     */
    public static function validateInput(\$caller, \$input)
    {
        if (null !== \$input) {
            if (\\is_resource(\$input)) {
                return \$input;
            }
            if (\\is_string(\$input)) {
                return \$input;
            }
            if (is_scalar(\$input)) {
                return (string) \$input;
            }
            if (\$input instanceof Process) {
                return \$input->getIterator(\$input::ITER_SKIP_ERR);
            }
            if (\$input instanceof \\Iterator) {
                return \$input;
            }
            if (\$input instanceof \\Traversable) {
                return new \\IteratorIterator(\$input);
            }

            throw new InvalidArgumentException(sprintf('%s only accepts strings, Traversable objects or stream resources.', \$caller));
        }

        return \$input;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/process/ProcessUtils.php";
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

namespace Symfony\\Component\\Process;

use Symfony\\Component\\Process\\Exception\\InvalidArgumentException;

/**
 * ProcessUtils is a bunch of utility methods.
 *
 * This class contains static methods only and is not meant to be instantiated.
 *
 * @author Martin Hasoň <martin.hason@gmail.com>
 */
class ProcessUtils
{
    /**
     * This class should not be instantiated.
     */
    private function __construct()
    {
    }

    /**
     * Validates and normalizes a Process input.
     *
     * @param string \$caller The name of method call that validates the input
     * @param mixed  \$input  The input to validate
     *
     * @return mixed The validated input
     *
     * @throws InvalidArgumentException In case the input is not valid
     */
    public static function validateInput(\$caller, \$input)
    {
        if (null !== \$input) {
            if (\\is_resource(\$input)) {
                return \$input;
            }
            if (\\is_string(\$input)) {
                return \$input;
            }
            if (is_scalar(\$input)) {
                return (string) \$input;
            }
            if (\$input instanceof Process) {
                return \$input->getIterator(\$input::ITER_SKIP_ERR);
            }
            if (\$input instanceof \\Iterator) {
                return \$input;
            }
            if (\$input instanceof \\Traversable) {
                return new \\IteratorIterator(\$input);
            }

            throw new InvalidArgumentException(sprintf('%s only accepts strings, Traversable objects or stream resources.', \$caller));
        }

        return \$input;
    }
}
", "vendor/symfony/process/ProcessUtils.php", "/var/www/public/DevLaon/templates/vendor/symfony/process/ProcessUtils.php");
    }
}
