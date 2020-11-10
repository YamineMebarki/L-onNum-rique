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

/* vendor/symfony/validator/Constraints/Locale.php */
class __TwigTemplate_1db8e0ecaadd516924ccf71738cc95ae3591881d34f33b0cca04eac43f11a41a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/Locale.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/Locale.php"));

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

namespace Symfony\\Component\\Validator\\Constraints;

use Symfony\\Component\\Intl\\Locales;
use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\Exception\\LogicException;

/**
 * @Annotation
 * @Target({\"PROPERTY\", \"METHOD\", \"ANNOTATION\"})
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class Locale extends Constraint
{
    const NO_SUCH_LOCALE_ERROR = 'a0af4293-1f1a-4a1c-a328-979cba6182a2';

    protected static \$errorNames = [
        self::NO_SUCH_LOCALE_ERROR => 'NO_SUCH_LOCALE_ERROR',
    ];

    public \$message = 'This value is not a valid locale.';
    public \$canonicalize = false;

    public function __construct(\$options = null)
    {
        if (!(\$options['canonicalize'] ?? false)) {
            @trigger_error('The \"canonicalize\" option with value \"false\" is deprecated since Symfony 4.1, set it to \"true\" instead.', E_USER_DEPRECATED);
        }

        if (!class_exists(Locales::class)) {
            // throw new LogicException('The Intl component is required to use the Locale constraint. Try running \"composer require symfony/intl\".');
            @trigger_error(sprintf('Using the \"%s\" constraint without the \"symfony/intl\" component installed is deprecated since Symfony 4.2.', __CLASS__), E_USER_DEPRECATED);
        }

        parent::__construct(\$options);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Constraints/Locale.php";
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

namespace Symfony\\Component\\Validator\\Constraints;

use Symfony\\Component\\Intl\\Locales;
use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\Exception\\LogicException;

/**
 * @Annotation
 * @Target({\"PROPERTY\", \"METHOD\", \"ANNOTATION\"})
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class Locale extends Constraint
{
    const NO_SUCH_LOCALE_ERROR = 'a0af4293-1f1a-4a1c-a328-979cba6182a2';

    protected static \$errorNames = [
        self::NO_SUCH_LOCALE_ERROR => 'NO_SUCH_LOCALE_ERROR',
    ];

    public \$message = 'This value is not a valid locale.';
    public \$canonicalize = false;

    public function __construct(\$options = null)
    {
        if (!(\$options['canonicalize'] ?? false)) {
            @trigger_error('The \"canonicalize\" option with value \"false\" is deprecated since Symfony 4.1, set it to \"true\" instead.', E_USER_DEPRECATED);
        }

        if (!class_exists(Locales::class)) {
            // throw new LogicException('The Intl component is required to use the Locale constraint. Try running \"composer require symfony/intl\".');
            @trigger_error(sprintf('Using the \"%s\" constraint without the \"symfony/intl\" component installed is deprecated since Symfony 4.2.', __CLASS__), E_USER_DEPRECATED);
        }

        parent::__construct(\$options);
    }
}
", "vendor/symfony/validator/Constraints/Locale.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Constraints/Locale.php");
    }
}
