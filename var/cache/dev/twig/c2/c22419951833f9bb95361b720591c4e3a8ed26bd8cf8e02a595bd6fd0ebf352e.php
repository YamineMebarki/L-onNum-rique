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

/* vendor/nikic/php-parser/lib/PhpParser/Node.php */
class __TwigTemplate_4bb148f70256386802235cae35e19803ec1fdcb7f6e3a9f798e827f81695df4b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/nikic/php-parser/lib/PhpParser/Node.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/nikic/php-parser/lib/PhpParser/Node.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser;

interface Node
{
    /**
     * Gets the type of the node.
     *
     * @return string Type of the node
     */
    public function getType() : string;

    /**
     * Gets the names of the sub nodes.
     *
     * @return array Names of sub nodes
     */
    public function getSubNodeNames() : array;

    /**
     * Gets line the node started in (alias of getStartLine).
     *
     * @return int Start line (or -1 if not available)
     */
    public function getLine() : int;

    /**
     * Gets line the node started in.
     *
     * Requires the 'startLine' attribute to be enabled in the lexer (enabled by default).
     *
     * @return int Start line (or -1 if not available)
     */
    public function getStartLine() : int;

    /**
     * Gets the line the node ended in.
     *
     * Requires the 'endLine' attribute to be enabled in the lexer (enabled by default).
     *
     * @return int End line (or -1 if not available)
     */
    public function getEndLine() : int;

    /**
     * Gets the token offset of the first token that is part of this node.
     *
     * The offset is an index into the array returned by Lexer::getTokens().
     *
     * Requires the 'startTokenPos' attribute to be enabled in the lexer (DISABLED by default).
     *
     * @return int Token start position (or -1 if not available)
     */
    public function getStartTokenPos() : int;

    /**
     * Gets the token offset of the last token that is part of this node.
     *
     * The offset is an index into the array returned by Lexer::getTokens().
     *
     * Requires the 'endTokenPos' attribute to be enabled in the lexer (DISABLED by default).
     *
     * @return int Token end position (or -1 if not available)
     */
    public function getEndTokenPos() : int;

    /**
     * Gets the file offset of the first character that is part of this node.
     *
     * Requires the 'startFilePos' attribute to be enabled in the lexer (DISABLED by default).
     *
     * @return int File start position (or -1 if not available)
     */
    public function getStartFilePos() : int;

    /**
     * Gets the file offset of the last character that is part of this node.
     *
     * Requires the 'endFilePos' attribute to be enabled in the lexer (DISABLED by default).
     *
     * @return int File end position (or -1 if not available)
     */
    public function getEndFilePos() : int;

    /**
     * Gets all comments directly preceding this node.
     *
     * The comments are also available through the \"comments\" attribute.
     *
     * @return Comments[]
     */
    public function getComments() : array;

    /**
     * Gets the doc comment of the node.
     *
     * The doc comment has to be the last comment associated with the node.
     *
     * @return null|Comments\\Doc Doc comment object or null
     */
    public function getDocComment();

    /**
     * Sets the doc comment of the node.
     *
     * This will either replace an existing doc comment or add it to the comments array.
     *
     * @param Comments\\Doc \$docComment Doc comment to set
     */
    public function setDocComment(Comments\\Doc \$docComment);

    /**
     * Sets an attribute on a node.
     *
     * @param string \$key
     * @param mixed  \$value
     */
    public function setAttribute(string \$key, \$value);

    /**
     * Returns whether an attribute exists.
     *
     * @param string \$key
     *
     * @return bool
     */
    public function hasAttribute(string \$key) : bool;

    /**
     * Returns the value of an attribute.
     *
     * @param string \$key
     * @param mixed  \$default
     *
     * @return mixed
     */
    public function getAttribute(string \$key, \$default = null);

    /**
     * Returns all the attributes of this node.
     *
     * @return array
     */
    public function getAttributes() : array;

    /**
     * Replaces all the attributes of this node.
     *
     * @param array \$attributes
     */
    public function setAttributes(array \$attributes);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/nikic/php-parser/lib/PhpParser/Node.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php declare(strict_types=1);

namespace PhpParser;

interface Node
{
    /**
     * Gets the type of the node.
     *
     * @return string Type of the node
     */
    public function getType() : string;

    /**
     * Gets the names of the sub nodes.
     *
     * @return array Names of sub nodes
     */
    public function getSubNodeNames() : array;

    /**
     * Gets line the node started in (alias of getStartLine).
     *
     * @return int Start line (or -1 if not available)
     */
    public function getLine() : int;

    /**
     * Gets line the node started in.
     *
     * Requires the 'startLine' attribute to be enabled in the lexer (enabled by default).
     *
     * @return int Start line (or -1 if not available)
     */
    public function getStartLine() : int;

    /**
     * Gets the line the node ended in.
     *
     * Requires the 'endLine' attribute to be enabled in the lexer (enabled by default).
     *
     * @return int End line (or -1 if not available)
     */
    public function getEndLine() : int;

    /**
     * Gets the token offset of the first token that is part of this node.
     *
     * The offset is an index into the array returned by Lexer::getTokens().
     *
     * Requires the 'startTokenPos' attribute to be enabled in the lexer (DISABLED by default).
     *
     * @return int Token start position (or -1 if not available)
     */
    public function getStartTokenPos() : int;

    /**
     * Gets the token offset of the last token that is part of this node.
     *
     * The offset is an index into the array returned by Lexer::getTokens().
     *
     * Requires the 'endTokenPos' attribute to be enabled in the lexer (DISABLED by default).
     *
     * @return int Token end position (or -1 if not available)
     */
    public function getEndTokenPos() : int;

    /**
     * Gets the file offset of the first character that is part of this node.
     *
     * Requires the 'startFilePos' attribute to be enabled in the lexer (DISABLED by default).
     *
     * @return int File start position (or -1 if not available)
     */
    public function getStartFilePos() : int;

    /**
     * Gets the file offset of the last character that is part of this node.
     *
     * Requires the 'endFilePos' attribute to be enabled in the lexer (DISABLED by default).
     *
     * @return int File end position (or -1 if not available)
     */
    public function getEndFilePos() : int;

    /**
     * Gets all comments directly preceding this node.
     *
     * The comments are also available through the \"comments\" attribute.
     *
     * @return Comments[]
     */
    public function getComments() : array;

    /**
     * Gets the doc comment of the node.
     *
     * The doc comment has to be the last comment associated with the node.
     *
     * @return null|Comments\\Doc Doc comment object or null
     */
    public function getDocComment();

    /**
     * Sets the doc comment of the node.
     *
     * This will either replace an existing doc comment or add it to the comments array.
     *
     * @param Comments\\Doc \$docComment Doc comment to set
     */
    public function setDocComment(Comments\\Doc \$docComment);

    /**
     * Sets an attribute on a node.
     *
     * @param string \$key
     * @param mixed  \$value
     */
    public function setAttribute(string \$key, \$value);

    /**
     * Returns whether an attribute exists.
     *
     * @param string \$key
     *
     * @return bool
     */
    public function hasAttribute(string \$key) : bool;

    /**
     * Returns the value of an attribute.
     *
     * @param string \$key
     * @param mixed  \$default
     *
     * @return mixed
     */
    public function getAttribute(string \$key, \$default = null);

    /**
     * Returns all the attributes of this node.
     *
     * @return array
     */
    public function getAttributes() : array;

    /**
     * Replaces all the attributes of this node.
     *
     * @param array \$attributes
     */
    public function setAttributes(array \$attributes);
}
", "vendor/nikic/php-parser/lib/PhpParser/Node.php", "/var/www/public/DevLaon/templates/vendor/nikic/php-parser/lib/PhpParser/Node.php");
    }
}
