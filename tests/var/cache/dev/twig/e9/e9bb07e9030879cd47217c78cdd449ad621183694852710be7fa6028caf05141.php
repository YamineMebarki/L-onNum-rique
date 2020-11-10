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

/* vendor/swiftmailer/swiftmailer/lib/classes/Swift/Preferences.php */
class __TwigTemplate_a49ce1be018849805c22aefcf3fe1e4bb6e7923570d9de7ef7f86024e6f87d00 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Preferences.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Preferences.php"));

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
 * Changes some global preference settings in Swift Mailer.
 *
 * @author Chris Corbyn
 */
class Swift_Preferences
{
    /** Singleton instance */
    private static \$instance = null;

    /** Constructor not to be used */
    private function __construct()
    {
    }

    /**
     * Gets the instance of Preferences.
     *
     * @return self
     */
    public static function getInstance()
    {
        if (!isset(self::\$instance)) {
            self::\$instance = new self();
        }

        return self::\$instance;
    }

    /**
     * Set the default charset used.
     *
     * @param string \$charset
     *
     * @return \$this
     */
    public function setCharset(\$charset)
    {
        Swift_DependencyContainer::getInstance()->register('properties.charset')->asValue(\$charset);

        return \$this;
    }

    /**
     * Set the directory where temporary files can be saved.
     *
     * @param string \$dir
     *
     * @return \$this
     */
    public function setTempDir(\$dir)
    {
        Swift_DependencyContainer::getInstance()->register('tempdir')->asValue(\$dir);

        return \$this;
    }

    /**
     * Set the type of cache to use (i.e. \"disk\" or \"array\").
     *
     * @param string \$type
     *
     * @return \$this
     */
    public function setCacheType(\$type)
    {
        Swift_DependencyContainer::getInstance()->register('cache')->asAliasOf(sprintf('cache.%s', \$type));

        return \$this;
    }

    /**
     * Set the QuotedPrintable dot escaper preference.
     *
     * @param bool \$dotEscape
     *
     * @return \$this
     */
    public function setQPDotEscape(\$dotEscape)
    {
        \$dotEscape = !empty(\$dotEscape);
        Swift_DependencyContainer::getInstance()
            ->register('mime.qpcontentencoder')
            ->asNewInstanceOf('Swift_Mime_ContentEncoder_QpContentEncoder')
            ->withDependencies(['mime.charstream', 'mime.bytecanonicalizer'])
            ->addConstructorValue(\$dotEscape);

        return \$this;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Preferences.php";
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
 * Changes some global preference settings in Swift Mailer.
 *
 * @author Chris Corbyn
 */
class Swift_Preferences
{
    /** Singleton instance */
    private static \$instance = null;

    /** Constructor not to be used */
    private function __construct()
    {
    }

    /**
     * Gets the instance of Preferences.
     *
     * @return self
     */
    public static function getInstance()
    {
        if (!isset(self::\$instance)) {
            self::\$instance = new self();
        }

        return self::\$instance;
    }

    /**
     * Set the default charset used.
     *
     * @param string \$charset
     *
     * @return \$this
     */
    public function setCharset(\$charset)
    {
        Swift_DependencyContainer::getInstance()->register('properties.charset')->asValue(\$charset);

        return \$this;
    }

    /**
     * Set the directory where temporary files can be saved.
     *
     * @param string \$dir
     *
     * @return \$this
     */
    public function setTempDir(\$dir)
    {
        Swift_DependencyContainer::getInstance()->register('tempdir')->asValue(\$dir);

        return \$this;
    }

    /**
     * Set the type of cache to use (i.e. \"disk\" or \"array\").
     *
     * @param string \$type
     *
     * @return \$this
     */
    public function setCacheType(\$type)
    {
        Swift_DependencyContainer::getInstance()->register('cache')->asAliasOf(sprintf('cache.%s', \$type));

        return \$this;
    }

    /**
     * Set the QuotedPrintable dot escaper preference.
     *
     * @param bool \$dotEscape
     *
     * @return \$this
     */
    public function setQPDotEscape(\$dotEscape)
    {
        \$dotEscape = !empty(\$dotEscape);
        Swift_DependencyContainer::getInstance()
            ->register('mime.qpcontentencoder')
            ->asNewInstanceOf('Swift_Mime_ContentEncoder_QpContentEncoder')
            ->withDependencies(['mime.charstream', 'mime.bytecanonicalizer'])
            ->addConstructorValue(\$dotEscape);

        return \$this;
    }
}
", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/Preferences.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Preferences.php");
    }
}
