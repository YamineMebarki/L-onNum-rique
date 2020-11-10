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

/* vendor/symfony/validator/Constraints/Issn.php */
class __TwigTemplate_72700fe80438180063a44f3e4e14cfc069d12e0ed09e17d7b303ed35c6dfba30 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/Issn.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/Issn.php"));

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

use Symfony\\Component\\Validator\\Constraint;

/**
 * @Annotation
 * @Target({\"PROPERTY\", \"METHOD\", \"ANNOTATION\"})
 *
 * @author Antonio J. García Lagar <aj@garcialagar.es>
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class Issn extends Constraint
{
    const TOO_SHORT_ERROR = '6a20dd3d-f463-4460-8e7b-18a1b98abbfb';
    const TOO_LONG_ERROR = '37cef893-5871-464e-8b12-7fb79324833c';
    const MISSING_HYPHEN_ERROR = '2983286f-8134-4693-957a-1ec4ef887b15';
    const INVALID_CHARACTERS_ERROR = 'a663d266-37c2-4ece-a914-ae891940c588';
    const INVALID_CASE_ERROR = '7b6dd393-7523-4a6c-b84d-72b91bba5e1a';
    const CHECKSUM_FAILED_ERROR = 'b0f92dbc-667c-48de-b526-ad9586d43e85';

    protected static \$errorNames = [
        self::TOO_SHORT_ERROR => 'TOO_SHORT_ERROR',
        self::TOO_LONG_ERROR => 'TOO_LONG_ERROR',
        self::MISSING_HYPHEN_ERROR => 'MISSING_HYPHEN_ERROR',
        self::INVALID_CHARACTERS_ERROR => 'INVALID_CHARACTERS_ERROR',
        self::INVALID_CASE_ERROR => 'INVALID_CASE_ERROR',
        self::CHECKSUM_FAILED_ERROR => 'CHECKSUM_FAILED_ERROR',
    ];

    public \$message = 'This value is not a valid ISSN.';
    public \$caseSensitive = false;
    public \$requireHyphen = false;
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Constraints/Issn.php";
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

use Symfony\\Component\\Validator\\Constraint;

/**
 * @Annotation
 * @Target({\"PROPERTY\", \"METHOD\", \"ANNOTATION\"})
 *
 * @author Antonio J. García Lagar <aj@garcialagar.es>
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class Issn extends Constraint
{
    const TOO_SHORT_ERROR = '6a20dd3d-f463-4460-8e7b-18a1b98abbfb';
    const TOO_LONG_ERROR = '37cef893-5871-464e-8b12-7fb79324833c';
    const MISSING_HYPHEN_ERROR = '2983286f-8134-4693-957a-1ec4ef887b15';
    const INVALID_CHARACTERS_ERROR = 'a663d266-37c2-4ece-a914-ae891940c588';
    const INVALID_CASE_ERROR = '7b6dd393-7523-4a6c-b84d-72b91bba5e1a';
    const CHECKSUM_FAILED_ERROR = 'b0f92dbc-667c-48de-b526-ad9586d43e85';

    protected static \$errorNames = [
        self::TOO_SHORT_ERROR => 'TOO_SHORT_ERROR',
        self::TOO_LONG_ERROR => 'TOO_LONG_ERROR',
        self::MISSING_HYPHEN_ERROR => 'MISSING_HYPHEN_ERROR',
        self::INVALID_CHARACTERS_ERROR => 'INVALID_CHARACTERS_ERROR',
        self::INVALID_CASE_ERROR => 'INVALID_CASE_ERROR',
        self::CHECKSUM_FAILED_ERROR => 'CHECKSUM_FAILED_ERROR',
    ];

    public \$message = 'This value is not a valid ISSN.';
    public \$caseSensitive = false;
    public \$requireHyphen = false;
}
", "vendor/symfony/validator/Constraints/Issn.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Constraints/Issn.php");
    }
}
