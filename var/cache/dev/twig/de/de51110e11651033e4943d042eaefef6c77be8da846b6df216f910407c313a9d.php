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

/* vendor/phpdocumentor/reflection-docblock/src/DocBlock/Tags/Author.php */
class __TwigTemplate_0b9370df97821c55a78f0888ba180c5fc8b82f3c96335efc6d2cbb78db475308 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/phpdocumentor/reflection-docblock/src/DocBlock/Tags/Author.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/phpdocumentor/reflection-docblock/src/DocBlock/Tags/Author.php"));

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

use Webmozart\\Assert\\Assert;

/**
 * Reflection class for an {@}author tag in a Docblock.
 */
final class Author extends BaseTag implements Factory\\StaticMethod
{
    /** @var string register that this is the author tag. */
    protected \$name = 'author';

    /** @var string The name of the author */
    private \$authorName = '';

    /** @var string The email of the author */
    private \$authorEmail = '';

    /**
     * Initializes this tag with the author name and e-mail.
     *
     * @param string \$authorName
     * @param string \$authorEmail
     */
    public function __construct(\$authorName, \$authorEmail)
    {
        Assert::string(\$authorName);
        Assert::string(\$authorEmail);
        if (\$authorEmail && !filter_var(\$authorEmail, FILTER_VALIDATE_EMAIL)) {
            throw new \\InvalidArgumentException('The author tag does not have a valid e-mail address');
        }

        \$this->authorName  = \$authorName;
        \$this->authorEmail = \$authorEmail;
    }

    /**
     * Gets the author's name.
     *
     * @return string The author's name.
     */
    public function getAuthorName()
    {
        return \$this->authorName;
    }

    /**
     * Returns the author's email.
     *
     * @return string The author's email.
     */
    public function getEmail()
    {
        return \$this->authorEmail;
    }

    /**
     * Returns this tag in string form.
     *
     * @return string
     */
    public function __toString()
    {
        return \$this->authorName . (strlen(\$this->authorEmail) ? ' <' . \$this->authorEmail . '>' : '');
    }

    /**
     * Attempts to create a new Author object based on †he tag body.
     *
     * @param string \$body
     *
     * @return static
     */
    public static function create(\$body)
    {
        Assert::string(\$body);

        \$splitTagContent = preg_match('/^([^\\<]*)(?:\\<([^\\>]*)\\>)?\$/u', \$body, \$matches);
        if (!\$splitTagContent) {
            return null;
        }

        \$authorName = trim(\$matches[1]);
        \$email = isset(\$matches[2]) ? trim(\$matches[2]) : '';

        return new static(\$authorName, \$email);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/phpdocumentor/reflection-docblock/src/DocBlock/Tags/Author.php";
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

use Webmozart\\Assert\\Assert;

/**
 * Reflection class for an {@}author tag in a Docblock.
 */
final class Author extends BaseTag implements Factory\\StaticMethod
{
    /** @var string register that this is the author tag. */
    protected \$name = 'author';

    /** @var string The name of the author */
    private \$authorName = '';

    /** @var string The email of the author */
    private \$authorEmail = '';

    /**
     * Initializes this tag with the author name and e-mail.
     *
     * @param string \$authorName
     * @param string \$authorEmail
     */
    public function __construct(\$authorName, \$authorEmail)
    {
        Assert::string(\$authorName);
        Assert::string(\$authorEmail);
        if (\$authorEmail && !filter_var(\$authorEmail, FILTER_VALIDATE_EMAIL)) {
            throw new \\InvalidArgumentException('The author tag does not have a valid e-mail address');
        }

        \$this->authorName  = \$authorName;
        \$this->authorEmail = \$authorEmail;
    }

    /**
     * Gets the author's name.
     *
     * @return string The author's name.
     */
    public function getAuthorName()
    {
        return \$this->authorName;
    }

    /**
     * Returns the author's email.
     *
     * @return string The author's email.
     */
    public function getEmail()
    {
        return \$this->authorEmail;
    }

    /**
     * Returns this tag in string form.
     *
     * @return string
     */
    public function __toString()
    {
        return \$this->authorName . (strlen(\$this->authorEmail) ? ' <' . \$this->authorEmail . '>' : '');
    }

    /**
     * Attempts to create a new Author object based on †he tag body.
     *
     * @param string \$body
     *
     * @return static
     */
    public static function create(\$body)
    {
        Assert::string(\$body);

        \$splitTagContent = preg_match('/^([^\\<]*)(?:\\<([^\\>]*)\\>)?\$/u', \$body, \$matches);
        if (!\$splitTagContent) {
            return null;
        }

        \$authorName = trim(\$matches[1]);
        \$email = isset(\$matches[2]) ? trim(\$matches[2]) : '';

        return new static(\$authorName, \$email);
    }
}
", "vendor/phpdocumentor/reflection-docblock/src/DocBlock/Tags/Author.php", "/var/www/public/DevLaon/templates/vendor/phpdocumentor/reflection-docblock/src/DocBlock/Tags/Author.php");
    }
}
