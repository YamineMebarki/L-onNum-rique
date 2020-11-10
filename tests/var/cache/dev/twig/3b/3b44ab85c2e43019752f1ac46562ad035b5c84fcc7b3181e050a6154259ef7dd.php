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

/* vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/ProxyReferenceRepository.php */
class __TwigTemplate_5a22bf424f821f98ec926f3321f7f8d9f14e11ed2b2aa8130dfe3cc9da8d46f7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/ProxyReferenceRepository.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/ProxyReferenceRepository.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Common\\DataFixtures;

use Doctrine\\Common\\Version;
use Doctrine\\Common\\Util\\ClassUtils;

/**
 * Proxy reference repository
 *
 * Allow data fixture references and identities to be persisted when cached data fixtures
 * are pre-loaded, for example, by LiipFunctionalTestBundle\\DevLaon\\WebTestCase loadFixtures().
 *
 * @author Guilherme Blanco <guilhermeblanco@hotmail.com>
 * @author Anthon Pang <anthonp@nationalfibre.net>
 */
class ProxyReferenceRepository extends ReferenceRepository
{
    /**
     * Get real class name of a reference that could be a proxy
     *
     * @param string \$className Class name of reference object
     *
     * @return string
     */
    protected function getRealClass(\$className)
    {
        if (Version::compare('2.2.0') <= 0) {
            return ClassUtils::getRealClass(\$className);
        }

        if (substr(\$className, -5) === 'Proxy') {
            return substr(\$className, 0, -5);
        }

        return \$className;
    }

    /**
     * Serialize reference repository
     *
     * @return string
     */
    public function serialize()
    {
        \$unitOfWork       = \$this->getManager()->getUnitOfWork();
        \$simpleReferences = [];

        foreach (\$this->getReferences() as \$name => \$reference) {
            \$className = \$this->getRealClass(get_class(\$reference));

            \$simpleReferences[\$name] = [\$className, \$this->getIdentifier(\$reference, \$unitOfWork)];
        }

        \$serializedData = json_encode([
            'references' => \$simpleReferences,
            'identities' => \$this->getIdentities(),
        ]);

        return \$serializedData;
    }

    /**
     * Unserialize reference repository
     *
     * @param string \$serializedData Serialized data
     */
    public function unserialize(\$serializedData)
    {
        \$repositoryData = json_decode(\$serializedData, true);
        \$references     = \$repositoryData['references'];

        foreach (\$references as \$name => \$proxyReference) {
            \$this->setReference(
                \$name,
                \$this->getManager()->getReference(
                    \$proxyReference[0], // entity class name
                    \$proxyReference[1]  // identifiers
                )
            );
        }

        \$identities = \$repositoryData['identities'];

        foreach (\$identities as \$name => \$identity) {
            \$this->setReferenceIdentity(\$name, \$identity);
        }
    }

    /**
     * Load data fixture reference repository
     *
     * @param string \$baseCacheName Base cache name
     *
     * @return boolean
     */
    public function load(\$baseCacheName)
    {
        \$filename = \$baseCacheName . '.ser';

        if ( ! file_exists(\$filename) || (\$serializedData = file_get_contents(\$filename)) === false) {
            return false;
        }

        \$this->unserialize(\$serializedData);

        return true;
    }

    /**
     * Save data fixture reference repository
     *
     * @param string \$baseCacheName Base cache name
     */
    public function save(\$baseCacheName)
    {
        \$serializedData = \$this->serialize();

        file_put_contents(\$baseCacheName . '.ser', \$serializedData);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/ProxyReferenceRepository.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Common\\DataFixtures;

use Doctrine\\Common\\Version;
use Doctrine\\Common\\Util\\ClassUtils;

/**
 * Proxy reference repository
 *
 * Allow data fixture references and identities to be persisted when cached data fixtures
 * are pre-loaded, for example, by LiipFunctionalTestBundle\\DevLaon\\WebTestCase loadFixtures().
 *
 * @author Guilherme Blanco <guilhermeblanco@hotmail.com>
 * @author Anthon Pang <anthonp@nationalfibre.net>
 */
class ProxyReferenceRepository extends ReferenceRepository
{
    /**
     * Get real class name of a reference that could be a proxy
     *
     * @param string \$className Class name of reference object
     *
     * @return string
     */
    protected function getRealClass(\$className)
    {
        if (Version::compare('2.2.0') <= 0) {
            return ClassUtils::getRealClass(\$className);
        }

        if (substr(\$className, -5) === 'Proxy') {
            return substr(\$className, 0, -5);
        }

        return \$className;
    }

    /**
     * Serialize reference repository
     *
     * @return string
     */
    public function serialize()
    {
        \$unitOfWork       = \$this->getManager()->getUnitOfWork();
        \$simpleReferences = [];

        foreach (\$this->getReferences() as \$name => \$reference) {
            \$className = \$this->getRealClass(get_class(\$reference));

            \$simpleReferences[\$name] = [\$className, \$this->getIdentifier(\$reference, \$unitOfWork)];
        }

        \$serializedData = json_encode([
            'references' => \$simpleReferences,
            'identities' => \$this->getIdentities(),
        ]);

        return \$serializedData;
    }

    /**
     * Unserialize reference repository
     *
     * @param string \$serializedData Serialized data
     */
    public function unserialize(\$serializedData)
    {
        \$repositoryData = json_decode(\$serializedData, true);
        \$references     = \$repositoryData['references'];

        foreach (\$references as \$name => \$proxyReference) {
            \$this->setReference(
                \$name,
                \$this->getManager()->getReference(
                    \$proxyReference[0], // entity class name
                    \$proxyReference[1]  // identifiers
                )
            );
        }

        \$identities = \$repositoryData['identities'];

        foreach (\$identities as \$name => \$identity) {
            \$this->setReferenceIdentity(\$name, \$identity);
        }
    }

    /**
     * Load data fixture reference repository
     *
     * @param string \$baseCacheName Base cache name
     *
     * @return boolean
     */
    public function load(\$baseCacheName)
    {
        \$filename = \$baseCacheName . '.ser';

        if ( ! file_exists(\$filename) || (\$serializedData = file_get_contents(\$filename)) === false) {
            return false;
        }

        \$this->unserialize(\$serializedData);

        return true;
    }

    /**
     * Save data fixture reference repository
     *
     * @param string \$baseCacheName Base cache name
     */
    public function save(\$baseCacheName)
    {
        \$serializedData = \$this->serialize();

        file_put_contents(\$baseCacheName . '.ser', \$serializedData);
    }
}
", "vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/ProxyReferenceRepository.php", "/var/www/public/DevLaon/templates/vendor/doctrine/data-fixtures/lib/Doctrine/Common/DataFixtures/ProxyReferenceRepository.php");
    }
}
