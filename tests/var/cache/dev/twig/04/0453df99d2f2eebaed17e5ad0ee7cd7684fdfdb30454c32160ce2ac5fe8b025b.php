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

/* vendor/symfony/http-kernel/DataCollector/ExceptionDataCollector.php */
class __TwigTemplate_cf8683af11fd08b369c60773c6c4c575b1d72c656ed2c856f8f31c36c5f7066b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/DataCollector/ExceptionDataCollector.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/DataCollector/ExceptionDataCollector.php"));

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

namespace Symfony\\Component\\HttpKernel\\DataCollector;

use Symfony\\Component\\Debug\\Exception\\FlattenException;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;

/**
 * ExceptionDataCollector.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ExceptionDataCollector extends DataCollector
{
    /**
     * {@inheritdoc}
     */
    public function collect(Request \$request, Response \$response, \\Exception \$exception = null)
    {
        if (null !== \$exception) {
            \$this->data = [
                'exception' => FlattenException::create(\$exception),
            ];
        }
    }

    /**
     * {@inheritdoc}
     */
    public function reset()
    {
        \$this->data = [];
    }

    /**
     * Checks if the exception is not null.
     *
     * @return bool true if the exception is not null, false otherwise
     */
    public function hasException()
    {
        return isset(\$this->data['exception']);
    }

    /**
     * Gets the exception.
     *
     * @return \\Exception|FlattenException
     */
    public function getException()
    {
        return \$this->data['exception'];
    }

    /**
     * Gets the exception message.
     *
     * @return string The exception message
     */
    public function getMessage()
    {
        return \$this->data['exception']->getMessage();
    }

    /**
     * Gets the exception code.
     *
     * @return int The exception code
     */
    public function getCode()
    {
        return \$this->data['exception']->getCode();
    }

    /**
     * Gets the status code.
     *
     * @return int The status code
     */
    public function getStatusCode()
    {
        return \$this->data['exception']->getStatusCode();
    }

    /**
     * Gets the exception trace.
     *
     * @return array The exception trace
     */
    public function getTrace()
    {
        return \$this->data['exception']->getTrace();
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'exception';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/DataCollector/ExceptionDataCollector.php";
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

namespace Symfony\\Component\\HttpKernel\\DataCollector;

use Symfony\\Component\\Debug\\Exception\\FlattenException;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;

/**
 * ExceptionDataCollector.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ExceptionDataCollector extends DataCollector
{
    /**
     * {@inheritdoc}
     */
    public function collect(Request \$request, Response \$response, \\Exception \$exception = null)
    {
        if (null !== \$exception) {
            \$this->data = [
                'exception' => FlattenException::create(\$exception),
            ];
        }
    }

    /**
     * {@inheritdoc}
     */
    public function reset()
    {
        \$this->data = [];
    }

    /**
     * Checks if the exception is not null.
     *
     * @return bool true if the exception is not null, false otherwise
     */
    public function hasException()
    {
        return isset(\$this->data['exception']);
    }

    /**
     * Gets the exception.
     *
     * @return \\Exception|FlattenException
     */
    public function getException()
    {
        return \$this->data['exception'];
    }

    /**
     * Gets the exception message.
     *
     * @return string The exception message
     */
    public function getMessage()
    {
        return \$this->data['exception']->getMessage();
    }

    /**
     * Gets the exception code.
     *
     * @return int The exception code
     */
    public function getCode()
    {
        return \$this->data['exception']->getCode();
    }

    /**
     * Gets the status code.
     *
     * @return int The status code
     */
    public function getStatusCode()
    {
        return \$this->data['exception']->getStatusCode();
    }

    /**
     * Gets the exception trace.
     *
     * @return array The exception trace
     */
    public function getTrace()
    {
        return \$this->data['exception']->getTrace();
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'exception';
    }
}
", "vendor/symfony/http-kernel/DataCollector/ExceptionDataCollector.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/DataCollector/ExceptionDataCollector.php");
    }
}
