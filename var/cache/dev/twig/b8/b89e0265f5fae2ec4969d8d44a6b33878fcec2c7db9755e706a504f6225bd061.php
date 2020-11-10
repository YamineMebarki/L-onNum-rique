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

/* vendor/swiftmailer/swiftmailer/tests/unit/Swift/Signers/OpenDKIMSignerTest.php */
class __TwigTemplate_3bf5c0b89a350da0b177d9e30bb0a1e8985f2c34593e38b86dfb10749024a382 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Signers/OpenDKIMSignerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Signers/OpenDKIMSignerTest.php"));

        // line 1
        echo "<?php

/**
 * @todo
 */
class Swift_Signers_OpenDKIMSignerTest extends \\SwiftMailerTestCase
{
    protected function setUp()
    {
        if (!extension_loaded('opendkim')) {
            \$this->markTestSkipped(
                'Need OpenDKIM extension run these tests.'
             );
        }
    }

    public function testBasicSigningHeaderManipulation()
    {
    }

    // Default Signing
    public function testSigningDefaults()
    {
    }

    // SHA256 Signing
    public function testSigning256()
    {
    }

    // Relaxed/Relaxed Hash Signing
    public function testSigningRelaxedRelaxed256()
    {
    }

    // Relaxed/Simple Hash Signing
    public function testSigningRelaxedSimple256()
    {
    }

    // Simple/Relaxed Hash Signing
    public function testSigningSimpleRelaxed256()
    {
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Signers/OpenDKIMSignerTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/**
 * @todo
 */
class Swift_Signers_OpenDKIMSignerTest extends \\SwiftMailerTestCase
{
    protected function setUp()
    {
        if (!extension_loaded('opendkim')) {
            \$this->markTestSkipped(
                'Need OpenDKIM extension run these tests.'
             );
        }
    }

    public function testBasicSigningHeaderManipulation()
    {
    }

    // Default Signing
    public function testSigningDefaults()
    {
    }

    // SHA256 Signing
    public function testSigning256()
    {
    }

    // Relaxed/Relaxed Hash Signing
    public function testSigningRelaxedRelaxed256()
    {
    }

    // Relaxed/Simple Hash Signing
    public function testSigningRelaxedSimple256()
    {
    }

    // Simple/Relaxed Hash Signing
    public function testSigningSimpleRelaxed256()
    {
    }
}
", "vendor/swiftmailer/swiftmailer/tests/unit/Swift/Signers/OpenDKIMSignerTest.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/tests/unit/Swift/Signers/OpenDKIMSignerTest.php");
    }
}
