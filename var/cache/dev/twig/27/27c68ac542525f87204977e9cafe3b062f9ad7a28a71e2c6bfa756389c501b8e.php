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

/* vendor/symfony/form/Guess/ValueGuess.php */
class __TwigTemplate_b2cc91df3e628b19b32f47b700d7e6d9177c6f92664ac1030c4f82246820b651 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Guess/ValueGuess.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Guess/ValueGuess.php"));

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
 * Contains a guessed value.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class ValueGuess extends Guess
{
    private \$value;

    /**
     * @param string|int|bool|null \$value      The guessed value
     * @param int                  \$confidence The confidence that the guessed class name
     *                                         is correct
     */
    public function __construct(\$value, int \$confidence)
    {
        parent::__construct(\$confidence);

        \$this->value = \$value;
    }

    /**
     * Returns the guessed value.
     *
     * @return string|int|bool|null
     */
    public function getValue()
    {
        return \$this->value;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Guess/ValueGuess.php";
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
 * Contains a guessed value.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class ValueGuess extends Guess
{
    private \$value;

    /**
     * @param string|int|bool|null \$value      The guessed value
     * @param int                  \$confidence The confidence that the guessed class name
     *                                         is correct
     */
    public function __construct(\$value, int \$confidence)
    {
        parent::__construct(\$confidence);

        \$this->value = \$value;
    }

    /**
     * Returns the guessed value.
     *
     * @return string|int|bool|null
     */
    public function getValue()
    {
        return \$this->value;
    }
}
", "vendor/symfony/form/Guess/ValueGuess.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Guess/ValueGuess.php");
    }
}
