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

/* vendor/symfony/form/Tests/Fixtures/Author.php */
class __TwigTemplate_28093fa5bfbe2d6048aa62c504a47130d5702087c453c077d02bc4a15552044b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Fixtures/Author.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Fixtures/Author.php"));

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

namespace Symfony\\Component\\Form\\Tests\\Fixtures;

class Author
{
    public \$firstName;
    private \$lastName;
    private \$australian;
    public \$child;
    private \$readPermissions;

    private \$privateProperty;

    public function __construct(\$firstName = null, \$lastName = null)
    {
        \$this->firstName = \$firstName;
        \$this->lastName = \$lastName;
    }

    public function setLastName(\$lastName)
    {
        \$this->lastName = \$lastName;
    }

    public function getLastName()
    {
        return \$this->lastName;
    }

    private function getPrivateGetter()
    {
        return 'foobar';
    }

    public function setAustralian(\$australian)
    {
        \$this->australian = \$australian;
    }

    public function isAustralian()
    {
        return \$this->australian;
    }

    public function setReadPermissions(\$bool)
    {
        \$this->readPermissions = \$bool;
    }

    public function hasReadPermissions()
    {
        return \$this->readPermissions;
    }

    private function isPrivateIsser()
    {
        return true;
    }

    public function getPrivateSetter()
    {
    }

    private function setPrivateSetter(\$data)
    {
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Tests/Fixtures/Author.php";
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

namespace Symfony\\Component\\Form\\Tests\\Fixtures;

class Author
{
    public \$firstName;
    private \$lastName;
    private \$australian;
    public \$child;
    private \$readPermissions;

    private \$privateProperty;

    public function __construct(\$firstName = null, \$lastName = null)
    {
        \$this->firstName = \$firstName;
        \$this->lastName = \$lastName;
    }

    public function setLastName(\$lastName)
    {
        \$this->lastName = \$lastName;
    }

    public function getLastName()
    {
        return \$this->lastName;
    }

    private function getPrivateGetter()
    {
        return 'foobar';
    }

    public function setAustralian(\$australian)
    {
        \$this->australian = \$australian;
    }

    public function isAustralian()
    {
        return \$this->australian;
    }

    public function setReadPermissions(\$bool)
    {
        \$this->readPermissions = \$bool;
    }

    public function hasReadPermissions()
    {
        return \$this->readPermissions;
    }

    private function isPrivateIsser()
    {
        return true;
    }

    public function getPrivateSetter()
    {
    }

    private function setPrivateSetter(\$data)
    {
    }
}
", "vendor/symfony/form/Tests/Fixtures/Author.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Tests/Fixtures/Author.php");
    }
}
