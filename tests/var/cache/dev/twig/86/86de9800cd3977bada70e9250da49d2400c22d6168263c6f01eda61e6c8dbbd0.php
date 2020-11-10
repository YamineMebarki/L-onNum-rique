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

/* vendor/swiftmailer/swiftmailer/lib/classes/Swift/Signers/HeaderSigner.php */
class __TwigTemplate_2ce796e750dfb1de6fe9db5afb9f2ae921d6c9ace2a35af95356d651768fdd48 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Signers/HeaderSigner.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Signers/HeaderSigner.php"));

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
 * Header Signer Interface used to apply Header-Based Signature to a message.
 *
 * @author Xavier De Cock <xdecock@gmail.com>
 */
interface Swift_Signers_HeaderSigner extends Swift_Signer, Swift_InputByteStream
{
    /**
     * Exclude an header from the signed headers.
     *
     * @param string \$header_name
     *
     * @return self
     */
    public function ignoreHeader(\$header_name);

    /**
     * Prepare the Signer to get a new Body.
     *
     * @return self
     */
    public function startBody();

    /**
     * Give the signal that the body has finished streaming.
     *
     * @return self
     */
    public function endBody();

    /**
     * Give the headers already given.
     *
     * @param Swift_Mime_SimpleHeaderSet \$headers
     *
     * @return self
     */
    public function setHeaders(Swift_Mime_SimpleHeaderSet \$headers);

    /**
     * Add the header(s) to the headerSet.
     *
     * @param Swift_Mime_SimpleHeaderSet \$headers
     *
     * @return self
     */
    public function addSignature(Swift_Mime_SimpleHeaderSet \$headers);

    /**
     * Return the list of header a signer might tamper.
     *
     * @return array
     */
    public function getAlteredHeaders();
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Signers/HeaderSigner.php";
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
 * Header Signer Interface used to apply Header-Based Signature to a message.
 *
 * @author Xavier De Cock <xdecock@gmail.com>
 */
interface Swift_Signers_HeaderSigner extends Swift_Signer, Swift_InputByteStream
{
    /**
     * Exclude an header from the signed headers.
     *
     * @param string \$header_name
     *
     * @return self
     */
    public function ignoreHeader(\$header_name);

    /**
     * Prepare the Signer to get a new Body.
     *
     * @return self
     */
    public function startBody();

    /**
     * Give the signal that the body has finished streaming.
     *
     * @return self
     */
    public function endBody();

    /**
     * Give the headers already given.
     *
     * @param Swift_Mime_SimpleHeaderSet \$headers
     *
     * @return self
     */
    public function setHeaders(Swift_Mime_SimpleHeaderSet \$headers);

    /**
     * Add the header(s) to the headerSet.
     *
     * @param Swift_Mime_SimpleHeaderSet \$headers
     *
     * @return self
     */
    public function addSignature(Swift_Mime_SimpleHeaderSet \$headers);

    /**
     * Return the list of header a signer might tamper.
     *
     * @return array
     */
    public function getAlteredHeaders();
}
", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Signers/HeaderSigner.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Signers/HeaderSigner.php");
    }
}
