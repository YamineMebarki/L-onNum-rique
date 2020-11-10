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

/* vendor/phpdocumentor/reflection-docblock/src/DocBlock/Tags/Method.php */
class __TwigTemplate_8035ab411dd0dc439590b56b4a29a402cdb5baa11c066bf2d3a8005a2593054c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/phpdocumentor/reflection-docblock/src/DocBlock/Tags/Method.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/phpdocumentor/reflection-docblock/src/DocBlock/Tags/Method.php"));

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

namespace phpDocumentor\\Reflection\\DocBlock\\Tags;

use phpDocumentor\\Reflection\\DocBlock\\Description;
use phpDocumentor\\Reflection\\DocBlock\\DescriptionFactory;
use phpDocumentor\\Reflection\\Type;
use phpDocumentor\\Reflection\\TypeResolver;
use phpDocumentor\\Reflection\\Types\\Context as TypeContext;
use phpDocumentor\\Reflection\\Types\\Void_;
use Webmozart\\Assert\\Assert;

/**
 * Reflection class for an {@}method in a Docblock.
 */
final class Method extends BaseTag implements Factory\\StaticMethod
{
    protected \$name = 'method';

    /** @var string */
    private \$methodName = '';

    /** @var string[] */
    private \$arguments = [];

    /** @var bool */
    private \$isStatic = false;

    /** @var Type */
    private \$returnType;

    public function __construct(
        \$methodName,
        array \$arguments = [],
        Type \$returnType = null,
        \$static = false,
        Description \$description = null
    ) {
        Assert::stringNotEmpty(\$methodName);
        Assert::boolean(\$static);

        if (\$returnType === null) {
            \$returnType = new Void_();
        }

        \$this->methodName  = \$methodName;
        \$this->arguments   = \$this->filterArguments(\$arguments);
        \$this->returnType  = \$returnType;
        \$this->isStatic    = \$static;
        \$this->description = \$description;
    }

    /**
     * {@inheritdoc}
     */
    public static function create(
        \$body,
        TypeResolver \$typeResolver = null,
        DescriptionFactory \$descriptionFactory = null,
        TypeContext \$context = null
    ) {
        Assert::stringNotEmpty(\$body);
        Assert::allNotNull([ \$typeResolver, \$descriptionFactory ]);

        // 1. none or more whitespace
        // 2. optionally the keyword \"static\" followed by whitespace
        // 3. optionally a word with underscores followed by whitespace : as
        //    type for the return value
        // 4. then optionally a word with underscores followed by () and
        //    whitespace : as method name as used by phpDocumentor
        // 5. then a word with underscores, followed by ( and any character
        //    until a ) and whitespace : as method name with signature
        // 6. any remaining text : as description
        if (!preg_match(
            '/^
                # Static keyword
                # Declares a static method ONLY if type is also present
                (?:
                    (static)
                    \\s+
                )?
                # Return type
                (?:
                    (   
                        (?:[\\w\\|_\\\\\\\\]*\\\$this[\\w\\|_\\\\\\\\]*)
                        |
                        (?:
                            (?:[\\w\\|_\\\\\\\\]+)
                            # array notation           
                            (?:\\[\\])*
                        )*
                    )
                    \\s+
                )?
                # Legacy method name (not captured)
                (?:
                    [\\w_]+\\(\\)\\s+
                )?
                # Method name
                ([\\w\\|_\\\\\\\\]+)
                # Arguments
                (?:
                    \\(([^\\)]*)\\)
                )?
                \\s*
                # Description
                (.*)
            \$/sux',
            \$body,
            \$matches
        )) {
            return null;
        }

        list(, \$static, \$returnType, \$methodName, \$arguments, \$description) = \$matches;

        \$static      = \$static === 'static';

        if (\$returnType === '') {
            \$returnType = 'void';
        }

        \$returnType  = \$typeResolver->resolve(\$returnType, \$context);
        \$description = \$descriptionFactory->create(\$description, \$context);

        if (is_string(\$arguments) && strlen(\$arguments) > 0) {
            \$arguments = explode(',', \$arguments);
            foreach (\$arguments as &\$argument) {
                \$argument = explode(' ', self::stripRestArg(trim(\$argument)), 2);
                if (\$argument[0][0] === '\$') {
                    \$argumentName = substr(\$argument[0], 1);
                    \$argumentType = new Void_();
                } else {
                    \$argumentType = \$typeResolver->resolve(\$argument[0], \$context);
                    \$argumentName = '';
                    if (isset(\$argument[1])) {
                        \$argument[1] = self::stripRestArg(\$argument[1]);
                        \$argumentName = substr(\$argument[1], 1);
                    }
                }

                \$argument = [ 'name' => \$argumentName, 'type' => \$argumentType];
            }
        } else {
            \$arguments = [];
        }

        return new static(\$methodName, \$arguments, \$returnType, \$static, \$description);
    }

    /**
     * Retrieves the method name.
     *
     * @return string
     */
    public function getMethodName()
    {
        return \$this->methodName;
    }

    /**
     * @return string[]
     */
    public function getArguments()
    {
        return \$this->arguments;
    }

    /**
     * Checks whether the method tag describes a static method or not.
     *
     * @return bool TRUE if the method declaration is for a static method, FALSE otherwise.
     */
    public function isStatic()
    {
        return \$this->isStatic;
    }

    /**
     * @return Type
     */
    public function getReturnType()
    {
        return \$this->returnType;
    }

    public function __toString()
    {
        \$arguments = [];
        foreach (\$this->arguments as \$argument) {
            \$arguments[] = \$argument['type'] . ' \$' . \$argument['name'];
        }

        return trim((\$this->isStatic() ? 'static ' : '')
            . (string)\$this->returnType . ' '
            . \$this->methodName
            . '(' . implode(', ', \$arguments) . ')'
            . (\$this->description ? ' ' . \$this->description->render() : ''));
    }

    private function filterArguments(\$arguments)
    {
        foreach (\$arguments as &\$argument) {
            if (is_string(\$argument)) {
                \$argument = [ 'name' => \$argument ];
            }

            if (! isset(\$argument['type'])) {
                \$argument['type'] = new Void_();
            }

            \$keys = array_keys(\$argument);
            sort(\$keys);
            if (\$keys !== [ 'name', 'type' ]) {
                throw new \\InvalidArgumentException(
                    'Arguments can only have the \"name\" and \"type\" fields, found: ' . var_export(\$keys, true)
                );
            }
        }

        return \$arguments;
    }

    private static function stripRestArg(\$argument)
    {
        if (strpos(\$argument, '...') === 0) {
            \$argument = trim(substr(\$argument, 3));
        }

        return \$argument;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/phpdocumentor/reflection-docblock/src/DocBlock/Tags/Method.php";
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

namespace phpDocumentor\\Reflection\\DocBlock\\Tags;

use phpDocumentor\\Reflection\\DocBlock\\Description;
use phpDocumentor\\Reflection\\DocBlock\\DescriptionFactory;
use phpDocumentor\\Reflection\\Type;
use phpDocumentor\\Reflection\\TypeResolver;
use phpDocumentor\\Reflection\\Types\\Context as TypeContext;
use phpDocumentor\\Reflection\\Types\\Void_;
use Webmozart\\Assert\\Assert;

/**
 * Reflection class for an {@}method in a Docblock.
 */
final class Method extends BaseTag implements Factory\\StaticMethod
{
    protected \$name = 'method';

    /** @var string */
    private \$methodName = '';

    /** @var string[] */
    private \$arguments = [];

    /** @var bool */
    private \$isStatic = false;

    /** @var Type */
    private \$returnType;

    public function __construct(
        \$methodName,
        array \$arguments = [],
        Type \$returnType = null,
        \$static = false,
        Description \$description = null
    ) {
        Assert::stringNotEmpty(\$methodName);
        Assert::boolean(\$static);

        if (\$returnType === null) {
            \$returnType = new Void_();
        }

        \$this->methodName  = \$methodName;
        \$this->arguments   = \$this->filterArguments(\$arguments);
        \$this->returnType  = \$returnType;
        \$this->isStatic    = \$static;
        \$this->description = \$description;
    }

    /**
     * {@inheritdoc}
     */
    public static function create(
        \$body,
        TypeResolver \$typeResolver = null,
        DescriptionFactory \$descriptionFactory = null,
        TypeContext \$context = null
    ) {
        Assert::stringNotEmpty(\$body);
        Assert::allNotNull([ \$typeResolver, \$descriptionFactory ]);

        // 1. none or more whitespace
        // 2. optionally the keyword \"static\" followed by whitespace
        // 3. optionally a word with underscores followed by whitespace : as
        //    type for the return value
        // 4. then optionally a word with underscores followed by () and
        //    whitespace : as method name as used by phpDocumentor
        // 5. then a word with underscores, followed by ( and any character
        //    until a ) and whitespace : as method name with signature
        // 6. any remaining text : as description
        if (!preg_match(
            '/^
                # Static keyword
                # Declares a static method ONLY if type is also present
                (?:
                    (static)
                    \\s+
                )?
                # Return type
                (?:
                    (   
                        (?:[\\w\\|_\\\\\\\\]*\\\$this[\\w\\|_\\\\\\\\]*)
                        |
                        (?:
                            (?:[\\w\\|_\\\\\\\\]+)
                            # array notation           
                            (?:\\[\\])*
                        )*
                    )
                    \\s+
                )?
                # Legacy method name (not captured)
                (?:
                    [\\w_]+\\(\\)\\s+
                )?
                # Method name
                ([\\w\\|_\\\\\\\\]+)
                # Arguments
                (?:
                    \\(([^\\)]*)\\)
                )?
                \\s*
                # Description
                (.*)
            \$/sux',
            \$body,
            \$matches
        )) {
            return null;
        }

        list(, \$static, \$returnType, \$methodName, \$arguments, \$description) = \$matches;

        \$static      = \$static === 'static';

        if (\$returnType === '') {
            \$returnType = 'void';
        }

        \$returnType  = \$typeResolver->resolve(\$returnType, \$context);
        \$description = \$descriptionFactory->create(\$description, \$context);

        if (is_string(\$arguments) && strlen(\$arguments) > 0) {
            \$arguments = explode(',', \$arguments);
            foreach (\$arguments as &\$argument) {
                \$argument = explode(' ', self::stripRestArg(trim(\$argument)), 2);
                if (\$argument[0][0] === '\$') {
                    \$argumentName = substr(\$argument[0], 1);
                    \$argumentType = new Void_();
                } else {
                    \$argumentType = \$typeResolver->resolve(\$argument[0], \$context);
                    \$argumentName = '';
                    if (isset(\$argument[1])) {
                        \$argument[1] = self::stripRestArg(\$argument[1]);
                        \$argumentName = substr(\$argument[1], 1);
                    }
                }

                \$argument = [ 'name' => \$argumentName, 'type' => \$argumentType];
            }
        } else {
            \$arguments = [];
        }

        return new static(\$methodName, \$arguments, \$returnType, \$static, \$description);
    }

    /**
     * Retrieves the method name.
     *
     * @return string
     */
    public function getMethodName()
    {
        return \$this->methodName;
    }

    /**
     * @return string[]
     */
    public function getArguments()
    {
        return \$this->arguments;
    }

    /**
     * Checks whether the method tag describes a static method or not.
     *
     * @return bool TRUE if the method declaration is for a static method, FALSE otherwise.
     */
    public function isStatic()
    {
        return \$this->isStatic;
    }

    /**
     * @return Type
     */
    public function getReturnType()
    {
        return \$this->returnType;
    }

    public function __toString()
    {
        \$arguments = [];
        foreach (\$this->arguments as \$argument) {
            \$arguments[] = \$argument['type'] . ' \$' . \$argument['name'];
        }

        return trim((\$this->isStatic() ? 'static ' : '')
            . (string)\$this->returnType . ' '
            . \$this->methodName
            . '(' . implode(', ', \$arguments) . ')'
            . (\$this->description ? ' ' . \$this->description->render() : ''));
    }

    private function filterArguments(\$arguments)
    {
        foreach (\$arguments as &\$argument) {
            if (is_string(\$argument)) {
                \$argument = [ 'name' => \$argument ];
            }

            if (! isset(\$argument['type'])) {
                \$argument['type'] = new Void_();
            }

            \$keys = array_keys(\$argument);
            sort(\$keys);
            if (\$keys !== [ 'name', 'type' ]) {
                throw new \\InvalidArgumentException(
                    'Arguments can only have the \"name\" and \"type\" fields, found: ' . var_export(\$keys, true)
                );
            }
        }

        return \$arguments;
    }

    private static function stripRestArg(\$argument)
    {
        if (strpos(\$argument, '...') === 0) {
            \$argument = trim(substr(\$argument, 3));
        }

        return \$argument;
    }
}
", "vendor/phpdocumentor/reflection-docblock/src/DocBlock/Tags/Method.php", "/var/www/public/DevLaon/templates/vendor/phpdocumentor/reflection-docblock/src/DocBlock/Tags/Method.php");
    }
}
