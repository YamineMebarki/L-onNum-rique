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

/* vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/IdGenerator.php */
class __TwigTemplate_21014d4a7ad6e907a464602185125ab47e23f82466aa1b6a5cc7192a952a7562 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/IdGenerator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/IdGenerator.php"));

        // line 1
        echo "<?php

/*
 * This file is part of SwiftMailer.
 * (c) 2004-2009 Chris Corbyn
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Message ID generator.
 */
class Swift_Mime_IdGenerator implements Swift_IdGenerator
{
    private \$idRight;

    /**
     * @param string \$idRight
     */
    public function __construct(\$idRight)
    {
        \$this->idRight = \$idRight;
    }

    /**
     * Returns the right-hand side of the \"@\" used in all generated IDs.
     *
     * @return string
     */
    public function getIdRight()
    {
        return \$this->idRight;
    }

    /**
     * Sets the right-hand side of the \"@\" to use in all generated IDs.
     *
     * @param string \$idRight
     */
    public function setIdRight(\$idRight)
    {
        \$this->idRight = \$idRight;
    }

    /**
     * @return string
     */
    public function generateId()
    {
        // 32 hex values for the left part
        return bin2hex(random_bytes(16)).'@'.\$this->idRight;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/IdGenerator.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of SwiftMailer.
 * (c) 2004-2009 Chris Corbyn
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Message ID generator.
 */
class Swift_Mime_IdGenerator implements Swift_IdGenerator
{
    private \$idRight;

    /**
     * @param string \$idRight
     */
    public function __construct(\$idRight)
    {
        \$this->idRight = \$idRight;
    }

    /**
     * Returns the right-hand side of the \"@\" used in all generated IDs.
     *
     * @return string
     */
    public function getIdRight()
    {
        return \$this->idRight;
    }

    /**
     * Sets the right-hand side of the \"@\" to use in all generated IDs.
     *
     * @param string \$idRight
     */
    public function setIdRight(\$idRight)
    {
        \$this->idRight = \$idRight;
    }

    /**
     * @return string
     */
    public function generateId()
    {
        // 32 hex values for the left part
        return bin2hex(random_bytes(16)).'@'.\$this->idRight;
    }
}
", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/IdGenerator.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/IdGenerator.php");
    }
}
