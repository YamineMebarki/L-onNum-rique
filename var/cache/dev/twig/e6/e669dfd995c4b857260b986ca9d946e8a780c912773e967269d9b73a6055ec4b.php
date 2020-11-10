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

/* vendor/swiftmailer/swiftmailer/lib/classes/Swift/MimePart.php */
class __TwigTemplate_e40e3d9215153dbb2f6b3654924e2bde1f44262ad94f1fb028bbf124e17823a1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/MimePart.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/MimePart.php"));

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
 * A MIME part, in a multipart message.
 *
 * @author Chris Corbyn
 */
class Swift_MimePart extends Swift_Mime_MimePart
{
    /**
     * Create a new MimePart.
     *
     * Details may be optionally passed into the constructor.
     *
     * @param string \$body
     * @param string \$contentType
     * @param string \$charset
     */
    public function __construct(\$body = null, \$contentType = null, \$charset = null)
    {
        call_user_func_array(
            [\$this, 'Swift_Mime_MimePart::__construct'],
            Swift_DependencyContainer::getInstance()
                ->createDependenciesFor('mime.part')
            );

        if (!isset(\$charset)) {
            \$charset = Swift_DependencyContainer::getInstance()
                ->lookup('properties.charset');
        }
        \$this->setBody(\$body);
        \$this->setCharset(\$charset);
        if (\$contentType) {
            \$this->setContentType(\$contentType);
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/lib/classes/Swift/MimePart.php";
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
 * A MIME part, in a multipart message.
 *
 * @author Chris Corbyn
 */
class Swift_MimePart extends Swift_Mime_MimePart
{
    /**
     * Create a new MimePart.
     *
     * Details may be optionally passed into the constructor.
     *
     * @param string \$body
     * @param string \$contentType
     * @param string \$charset
     */
    public function __construct(\$body = null, \$contentType = null, \$charset = null)
    {
        call_user_func_array(
            [\$this, 'Swift_Mime_MimePart::__construct'],
            Swift_DependencyContainer::getInstance()
                ->createDependenciesFor('mime.part')
            );

        if (!isset(\$charset)) {
            \$charset = Swift_DependencyContainer::getInstance()
                ->lookup('properties.charset');
        }
        \$this->setBody(\$body);
        \$this->setCharset(\$charset);
        if (\$contentType) {
            \$this->setContentType(\$contentType);
        }
    }
}
", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/MimePart.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/lib/classes/Swift/MimePart.php");
    }
}
