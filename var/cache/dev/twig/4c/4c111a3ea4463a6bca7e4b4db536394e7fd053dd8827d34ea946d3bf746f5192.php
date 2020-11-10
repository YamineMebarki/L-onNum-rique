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

/* vendor/symfony/form/Guess/TypeGuess.php */
class __TwigTemplate_cd93402d4c6197e058ae7e2e4da1e34052481183f8c0d5c9e6103ef5faaa59ab extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Guess/TypeGuess.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Guess/TypeGuess.php"));

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

namespace Symfony\\Component\\Form\\Guess;

/**
 * Contains a guessed class name and a list of options for creating an instance
 * of that class.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class TypeGuess extends Guess
{
    private \$type;
    private \$options;

    /**
     * @param string \$type       The guessed field type
     * @param array  \$options    The options for creating instances of the
     *                           guessed class
     * @param int    \$confidence The confidence that the guessed class name
     *                           is correct
     */
    public function __construct(string \$type, array \$options, int \$confidence)
    {
        parent::__construct(\$confidence);

        \$this->type = \$type;
        \$this->options = \$options;
    }

    /**
     * Returns the guessed field type.
     *
     * @return string
     */
    public function getType()
    {
        return \$this->type;
    }

    /**
     * Returns the guessed options for creating instances of the guessed type.
     *
     * @return array
     */
    public function getOptions()
    {
        return \$this->options;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Guess/TypeGuess.php";
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

namespace Symfony\\Component\\Form\\Guess;

/**
 * Contains a guessed class name and a list of options for creating an instance
 * of that class.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class TypeGuess extends Guess
{
    private \$type;
    private \$options;

    /**
     * @param string \$type       The guessed field type
     * @param array  \$options    The options for creating instances of the
     *                           guessed class
     * @param int    \$confidence The confidence that the guessed class name
     *                           is correct
     */
    public function __construct(string \$type, array \$options, int \$confidence)
    {
        parent::__construct(\$confidence);

        \$this->type = \$type;
        \$this->options = \$options;
    }

    /**
     * Returns the guessed field type.
     *
     * @return string
     */
    public function getType()
    {
        return \$this->type;
    }

    /**
     * Returns the guessed options for creating instances of the guessed type.
     *
     * @return array
     */
    public function getOptions()
    {
        return \$this->options;
    }
}
", "vendor/symfony/form/Guess/TypeGuess.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Guess/TypeGuess.php");
    }
}
