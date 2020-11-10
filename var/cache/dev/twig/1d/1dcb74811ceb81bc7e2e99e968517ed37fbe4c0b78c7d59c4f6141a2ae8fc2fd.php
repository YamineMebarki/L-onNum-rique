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

/* vendor/symfony/property-access/Tests/Fixtures/TestSingularAndPluralProps.php */
class __TwigTemplate_0ee12813ee1fafd286ca99c91487b55f52f493621abc38e6818212d8d52348b4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/property-access/Tests/Fixtures/TestSingularAndPluralProps.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/property-access/Tests/Fixtures/TestSingularAndPluralProps.php"));

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

namespace Symfony\\Component\\PropertyAccess\\Tests\\Fixtures;

/**
 * Notice we don't have getter/setter for emails
 * because we count on adder/remover.
 */
class TestSingularAndPluralProps
{
    /** @var string|null */
    private \$email;

    /** @var array */
    private \$emails = [];

    /**
     * @return string|null
     */
    public function getEmail()
    {
        return \$this->email;
    }

    /**
     * @param string|null \$email
     */
    public function setEmail(\$email)
    {
        \$this->email = \$email;
    }

    /**
     * @return array
     */
    public function getEmails()
    {
        return \$this->emails;
    }

    /**
     * @param string \$email
     */
    public function addEmail(\$email)
    {
        \$this->emails[] = \$email;
    }

    /**
     * @param string \$email
     */
    public function removeEmail(\$email)
    {
        \$this->emails = array_diff(\$this->emails, [\$email]);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/property-access/Tests/Fixtures/TestSingularAndPluralProps.php";
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

namespace Symfony\\Component\\PropertyAccess\\Tests\\Fixtures;

/**
 * Notice we don't have getter/setter for emails
 * because we count on adder/remover.
 */
class TestSingularAndPluralProps
{
    /** @var string|null */
    private \$email;

    /** @var array */
    private \$emails = [];

    /**
     * @return string|null
     */
    public function getEmail()
    {
        return \$this->email;
    }

    /**
     * @param string|null \$email
     */
    public function setEmail(\$email)
    {
        \$this->email = \$email;
    }

    /**
     * @return array
     */
    public function getEmails()
    {
        return \$this->emails;
    }

    /**
     * @param string \$email
     */
    public function addEmail(\$email)
    {
        \$this->emails[] = \$email;
    }

    /**
     * @param string \$email
     */
    public function removeEmail(\$email)
    {
        \$this->emails = array_diff(\$this->emails, [\$email]);
    }
}
", "vendor/symfony/property-access/Tests/Fixtures/TestSingularAndPluralProps.php", "/var/www/public/DevLaon/templates/vendor/symfony/property-access/Tests/Fixtures/TestSingularAndPluralProps.php");
    }
}
