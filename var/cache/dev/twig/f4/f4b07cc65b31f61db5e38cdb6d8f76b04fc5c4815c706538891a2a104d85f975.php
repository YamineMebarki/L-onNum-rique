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

/* vendor/symfony/doctrine-bridge/Tests/Fixtures/SingleIntIdEntity.php */
class __TwigTemplate_545f5b357a5c0da7b7d246aa1553eadf2be7ee3144d332812ec2ec9226fb873a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/doctrine-bridge/Tests/Fixtures/SingleIntIdEntity.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/doctrine-bridge/Tests/Fixtures/SingleIntIdEntity.php"));

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

namespace Symfony\\Bridge\\Doctrine\\Tests\\Fixtures;

use Doctrine\\ORM\\Mapping\\Column;
use Doctrine\\ORM\\Mapping\\Entity;
use Doctrine\\ORM\\Mapping\\Id;

/** @Entity */
class SingleIntIdEntity
{
    /** @Id @Column(type=\"integer\") */
    protected \$id;

    /** @Column(type=\"string\", nullable=true) */
    public \$name;

    /** @Column(type=\"array\", nullable=true) */
    public \$phoneNumbers = [];

    public function __construct(\$id, \$name)
    {
        \$this->id = \$id;
        \$this->name = \$name;
    }

    public function __toString()
    {
        return (string) \$this->name;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/doctrine-bridge/Tests/Fixtures/SingleIntIdEntity.php";
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

namespace Symfony\\Bridge\\Doctrine\\Tests\\Fixtures;

use Doctrine\\ORM\\Mapping\\Column;
use Doctrine\\ORM\\Mapping\\Entity;
use Doctrine\\ORM\\Mapping\\Id;

/** @Entity */
class SingleIntIdEntity
{
    /** @Id @Column(type=\"integer\") */
    protected \$id;

    /** @Column(type=\"string\", nullable=true) */
    public \$name;

    /** @Column(type=\"array\", nullable=true) */
    public \$phoneNumbers = [];

    public function __construct(\$id, \$name)
    {
        \$this->id = \$id;
        \$this->name = \$name;
    }

    public function __toString()
    {
        return (string) \$this->name;
    }
}
", "vendor/symfony/doctrine-bridge/Tests/Fixtures/SingleIntIdEntity.php", "/var/www/public/DevLaon/templates/vendor/symfony/doctrine-bridge/Tests/Fixtures/SingleIntIdEntity.php");
    }
}
