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

/* vendor/phpdocumentor/reflection-docblock/src/DocBlock/TagFactory.php */
class __TwigTemplate_d3434405e73c1b9ef7faba5de0e561a7598dcd2ea76f689c7c3ad40b9f08fb39 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/phpdocumentor/reflection-docblock/src/DocBlock/TagFactory.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/phpdocumentor/reflection-docblock/src/DocBlock/TagFactory.php"));

        // line 1
        echo "<?php
/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright 2010-2015 Mike van Riel<mike@phpdoc.org>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\\Reflection\\DocBlock;

use phpDocumentor\\Reflection\\Types\\Context as TypeContext;

interface TagFactory
{
    /**
     * Adds a parameter to the service locator that can be injected in a tag's factory method.
     *
     * When calling a tag's \"create\" method we always check the signature for dependencies to inject. One way is to
     * typehint a parameter in the signature so that we can use that interface or class name to inject a dependency
     * (see {@see addService()} for more information on that).
     *
     * Another way is to check the name of the argument against the names in the Service Locator. With this method
     * you can add a variable that will be inserted when a tag's create method is not typehinted and has a matching
     * name.
     *
     * Be aware that there are two reserved names:
     *
     * - name, representing the name of the tag.
     * - body, representing the complete body of the tag.
     *
     * These parameters are injected at the last moment and will override any existing parameter with those names.
     *
     * @param string \$name
     * @param mixed  \$value
     *
     * @return void
     */
    public function addParameter(\$name, \$value);

    /**
     * Registers a service with the Service Locator using the FQCN of the class or the alias, if provided.
     *
     * When calling a tag's \"create\" method we always check the signature for dependencies to inject. If a parameter
     * has a typehint then the ServiceLocator is queried to see if a Service is registered for that typehint.
     *
     * Because interfaces are regularly used as type-hints this method provides an alias parameter; if the FQCN of the
     * interface is passed as alias then every time that interface is requested the provided service will be returned.
     *
     * @param object \$service
     * @param string \$alias
     *
     * @return void
     */
    public function addService(\$service);

    /**
     * Factory method responsible for instantiating the correct sub type.
     *
     * @param string \$tagLine The text for this tag, including description.
     * @param TypeContext \$context
     *
     * @throws \\InvalidArgumentException if an invalid tag line was presented.
     *
     * @return Tag A new tag object.
     */
    public function create(\$tagLine, TypeContext \$context = null);

    /**
     * Registers a handler for tags.
     *
     * If you want to use your own tags then you can use this method to instruct the TagFactory to register the name
     * of a tag with the FQCN of a 'Tag Handler'. The Tag handler should implement the {@see Tag} interface (and thus
     * the create method).
     *
     * @param string \$tagName Name of tag to register a handler for. When registering a namespaced tag, the full
     *                        name, along with a prefixing slash MUST be provided.
     * @param string \$handler FQCN of handler.
     *
     * @throws \\InvalidArgumentException if the tag name is not a string
     * @throws \\InvalidArgumentException if the tag name is namespaced (contains backslashes) but does not start with
     *     a backslash
     * @throws \\InvalidArgumentException if the handler is not a string
     * @throws \\InvalidArgumentException if the handler is not an existing class
     * @throws \\InvalidArgumentException if the handler does not implement the {@see Tag} interface
     *
     * @return void
     */
    public function registerTagHandler(\$tagName, \$handler);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/phpdocumentor/reflection-docblock/src/DocBlock/TagFactory.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright 2010-2015 Mike van Riel<mike@phpdoc.org>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\\Reflection\\DocBlock;

use phpDocumentor\\Reflection\\Types\\Context as TypeContext;

interface TagFactory
{
    /**
     * Adds a parameter to the service locator that can be injected in a tag's factory method.
     *
     * When calling a tag's \"create\" method we always check the signature for dependencies to inject. One way is to
     * typehint a parameter in the signature so that we can use that interface or class name to inject a dependency
     * (see {@see addService()} for more information on that).
     *
     * Another way is to check the name of the argument against the names in the Service Locator. With this method
     * you can add a variable that will be inserted when a tag's create method is not typehinted and has a matching
     * name.
     *
     * Be aware that there are two reserved names:
     *
     * - name, representing the name of the tag.
     * - body, representing the complete body of the tag.
     *
     * These parameters are injected at the last moment and will override any existing parameter with those names.
     *
     * @param string \$name
     * @param mixed  \$value
     *
     * @return void
     */
    public function addParameter(\$name, \$value);

    /**
     * Registers a service with the Service Locator using the FQCN of the class or the alias, if provided.
     *
     * When calling a tag's \"create\" method we always check the signature for dependencies to inject. If a parameter
     * has a typehint then the ServiceLocator is queried to see if a Service is registered for that typehint.
     *
     * Because interfaces are regularly used as type-hints this method provides an alias parameter; if the FQCN of the
     * interface is passed as alias then every time that interface is requested the provided service will be returned.
     *
     * @param object \$service
     * @param string \$alias
     *
     * @return void
     */
    public function addService(\$service);

    /**
     * Factory method responsible for instantiating the correct sub type.
     *
     * @param string \$tagLine The text for this tag, including description.
     * @param TypeContext \$context
     *
     * @throws \\InvalidArgumentException if an invalid tag line was presented.
     *
     * @return Tag A new tag object.
     */
    public function create(\$tagLine, TypeContext \$context = null);

    /**
     * Registers a handler for tags.
     *
     * If you want to use your own tags then you can use this method to instruct the TagFactory to register the name
     * of a tag with the FQCN of a 'Tag Handler'. The Tag handler should implement the {@see Tag} interface (and thus
     * the create method).
     *
     * @param string \$tagName Name of tag to register a handler for. When registering a namespaced tag, the full
     *                        name, along with a prefixing slash MUST be provided.
     * @param string \$handler FQCN of handler.
     *
     * @throws \\InvalidArgumentException if the tag name is not a string
     * @throws \\InvalidArgumentException if the tag name is namespaced (contains backslashes) but does not start with
     *     a backslash
     * @throws \\InvalidArgumentException if the handler is not a string
     * @throws \\InvalidArgumentException if the handler is not an existing class
     * @throws \\InvalidArgumentException if the handler does not implement the {@see Tag} interface
     *
     * @return void
     */
    public function registerTagHandler(\$tagName, \$handler);
}
", "vendor/phpdocumentor/reflection-docblock/src/DocBlock/TagFactory.php", "/var/www/public/DevLaon/templates/vendor/phpdocumentor/reflection-docblock/src/DocBlock/TagFactory.php");
    }
}
