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

/* vendor/zendframework/zend-code/src/Generator/DocBlock/Tag/LicenseTag.php */
class __TwigTemplate_b78934b71c3e6fd113c42e944edcd009264647ae90a8edbc9a17f0df27ed4d5d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/zendframework/zend-code/src/Generator/DocBlock/Tag/LicenseTag.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/zendframework/zend-code/src/Generator/DocBlock/Tag/LicenseTag.php"));

        // line 1
        echo "<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Zend\\Code\\Generator\\DocBlock\\Tag;

use Zend\\Code\\Generator\\AbstractGenerator;
use Zend\\Code\\Generator\\DocBlock\\TagManager;
use Zend\\Code\\Reflection\\DocBlock\\Tag\\TagInterface as ReflectionTagInterface;

class LicenseTag extends AbstractGenerator implements TagInterface
{
    /**
     * @var string
     */
    protected \$url;

    /**
     * @var string
     */
    protected \$licenseName;

    /**
     * @param string \$url
     * @param string \$licenseName
     */
    public function __construct(\$url = null, \$licenseName = null)
    {
        if (! empty(\$url)) {
            \$this->setUrl(\$url);
        }

        if (! empty(\$licenseName)) {
            \$this->setLicenseName(\$licenseName);
        }
    }

    /**
     * @param ReflectionTagInterface \$reflectionTag
     * @return ReturnTag
     * @deprecated Deprecated in 2.3. Use TagManager::createTagFromReflection() instead
     */
    public static function fromReflection(ReflectionTagInterface \$reflectionTag)
    {
        \$tagManager = new TagManager();
        \$tagManager->initializeDefaultTags();
        return \$tagManager->createTagFromReflection(\$reflectionTag);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'license';
    }

    /**
     * @param string \$url
     * @return LicenseTag
     */
    public function setUrl(\$url)
    {
        \$this->url = \$url;
        return \$this;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return \$this->url;
    }

    /**
     * @param  string \$name
     * @return LicenseTag
     */
    public function setLicenseName(\$name)
    {
        \$this->licenseName = \$name;
        return \$this;
    }

    /**
     * @return string
     */
    public function getLicenseName()
    {
        return \$this->licenseName;
    }

    /**
     * @return string
     */
    public function generate()
    {
        \$output = '@license'
            . (! empty(\$this->url) ? ' ' . \$this->url : '')
            . (! empty(\$this->licenseName) ? ' ' . \$this->licenseName : '');

        return \$output;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/zendframework/zend-code/src/Generator/DocBlock/Tag/LicenseTag.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Zend\\Code\\Generator\\DocBlock\\Tag;

use Zend\\Code\\Generator\\AbstractGenerator;
use Zend\\Code\\Generator\\DocBlock\\TagManager;
use Zend\\Code\\Reflection\\DocBlock\\Tag\\TagInterface as ReflectionTagInterface;

class LicenseTag extends AbstractGenerator implements TagInterface
{
    /**
     * @var string
     */
    protected \$url;

    /**
     * @var string
     */
    protected \$licenseName;

    /**
     * @param string \$url
     * @param string \$licenseName
     */
    public function __construct(\$url = null, \$licenseName = null)
    {
        if (! empty(\$url)) {
            \$this->setUrl(\$url);
        }

        if (! empty(\$licenseName)) {
            \$this->setLicenseName(\$licenseName);
        }
    }

    /**
     * @param ReflectionTagInterface \$reflectionTag
     * @return ReturnTag
     * @deprecated Deprecated in 2.3. Use TagManager::createTagFromReflection() instead
     */
    public static function fromReflection(ReflectionTagInterface \$reflectionTag)
    {
        \$tagManager = new TagManager();
        \$tagManager->initializeDefaultTags();
        return \$tagManager->createTagFromReflection(\$reflectionTag);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'license';
    }

    /**
     * @param string \$url
     * @return LicenseTag
     */
    public function setUrl(\$url)
    {
        \$this->url = \$url;
        return \$this;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return \$this->url;
    }

    /**
     * @param  string \$name
     * @return LicenseTag
     */
    public function setLicenseName(\$name)
    {
        \$this->licenseName = \$name;
        return \$this;
    }

    /**
     * @return string
     */
    public function getLicenseName()
    {
        return \$this->licenseName;
    }

    /**
     * @return string
     */
    public function generate()
    {
        \$output = '@license'
            . (! empty(\$this->url) ? ' ' . \$this->url : '')
            . (! empty(\$this->licenseName) ? ' ' . \$this->licenseName : '');

        return \$output;
    }
}
", "vendor/zendframework/zend-code/src/Generator/DocBlock/Tag/LicenseTag.php", "/var/www/public/DevLaon/templates/vendor/zendframework/zend-code/src/Generator/DocBlock/Tag/LicenseTag.php");
    }
}
