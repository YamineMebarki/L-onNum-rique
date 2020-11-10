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

/* vendor/zendframework/zend-code/src/Scanner/MethodScanner.php */
class __TwigTemplate_536c39dbf2de17d3eb16ecf9f109915b71d4cced52efb3586a24ce49b18f3184 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/zendframework/zend-code/src/Scanner/MethodScanner.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/zendframework/zend-code/src/Scanner/MethodScanner.php"));

        // line 1
        echo "<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Zend\\Code\\Scanner;

use Zend\\Code\\Annotation\\AnnotationManager;
use Zend\\Code\\Exception;
use Zend\\Code\\NameInformation;

use function array_slice;
use function count;
use function is_int;
use function is_string;
use function ltrim;
use function strtolower;
use function substr_count;
use function var_export;

class MethodScanner implements ScannerInterface
{
    /**
     * @var bool
     */
    protected \$isScanned = false;

    /**
     * @var string
     */
    protected \$docComment;

    /**
     * @var ClassScanner
     */
    protected \$scannerClass;

    /**
     * @var string
     */
    protected \$class;

    /**
     * @var string
     */
    protected \$name;

    /**
     * @var int
     */
    protected \$lineStart;

    /**
     * @var int
     */
    protected \$lineEnd;

    /**
     * @var bool
     */
    protected \$isFinal = false;

    /**
     * @var bool
     */
    protected \$isAbstract = false;

    /**
     * @var bool
     */
    protected \$isPublic = true;

    /**
     * @var bool
     */
    protected \$isProtected = false;

    /**
     * @var bool
     */
    protected \$isPrivate = false;

    /**
     * @var bool
     */
    protected \$isStatic = false;

    /**
     * @var string
     */
    protected \$body = '';

    /**
     * @var array
     */
    protected \$tokens = [];

    /**
     * @var NameInformation
     */
    protected \$nameInformation;

    /**
     * @var array
     */
    protected \$infos = [];

    /**
     * @param  array \$methodTokens
     * @param NameInformation \$nameInformation
     */
    public function __construct(array \$methodTokens, NameInformation \$nameInformation = null)
    {
        \$this->tokens          = \$methodTokens;
        \$this->nameInformation = \$nameInformation;
    }

    /**
     * @param  string \$class
     * @return MethodScanner
     */
    public function setClass(\$class)
    {
        \$this->class = (string) \$class;
        return \$this;
    }

    /**
     * @param  ClassScanner  \$scannerClass
     * @return MethodScanner
     */
    public function setScannerClass(ClassScanner \$scannerClass)
    {
        \$this->scannerClass = \$scannerClass;
        return \$this;
    }

    /**
     * @return ClassScanner
     */
    public function getClassScanner()
    {
        return \$this->scannerClass;
    }

    /**
     * @return string
     */
    public function getName()
    {
        \$this->scan();

        return \$this->name;
    }

    /**
     * @return int
     */
    public function getLineStart()
    {
        \$this->scan();

        return \$this->lineStart;
    }

    /**
     * @return int
     */
    public function getLineEnd()
    {
        \$this->scan();

        return \$this->lineEnd;
    }

    /**
     * @return string
     */
    public function getDocComment()
    {
        \$this->scan();

        return \$this->docComment;
    }

    /**
     * @param  AnnotationManager \$annotationManager
     * @return AnnotationScanner|false
     */
    public function getAnnotations(AnnotationManager \$annotationManager)
    {
        if ((\$docComment = \$this->getDocComment()) == '') {
            return false;
        }

        return new AnnotationScanner(\$annotationManager, \$docComment, \$this->nameInformation);
    }

    /**
     * @return bool
     */
    public function isFinal()
    {
        \$this->scan();

        return \$this->isFinal;
    }

    /**
     * @return bool
     */
    public function isAbstract()
    {
        \$this->scan();

        return \$this->isAbstract;
    }

    /**
     * @return bool
     */
    public function isPublic()
    {
        \$this->scan();

        return \$this->isPublic;
    }

    /**
     * @return bool
     */
    public function isProtected()
    {
        \$this->scan();

        return \$this->isProtected;
    }

    /**
     * @return bool
     */
    public function isPrivate()
    {
        \$this->scan();

        return \$this->isPrivate;
    }

    /**
     * @return bool
     */
    public function isStatic()
    {
        \$this->scan();

        return \$this->isStatic;
    }

    /**
     * Override the given name for a method, this is necessary to
     * support traits.
     *
     * @param string \$name
     * @return self
     */
    public function setName(\$name)
    {
        \$this->name = \$name;
        return \$this;
    }

    /**
     * Visibility must be of T_PUBLIC, T_PRIVATE or T_PROTECTED
     * Needed to support traits
     *
     * @param int \$visibility   T_PUBLIC | T_PRIVATE | T_PROTECTED
     * @return self
     * @throws \\Zend\\Code\\Exception\\InvalidArgumentException
     */
    public function setVisibility(\$visibility)
    {
        switch (\$visibility) {
            case T_PUBLIC:
                \$this->isPublic = true;
                \$this->isPrivate = false;
                \$this->isProtected = false;
                break;

            case T_PRIVATE:
                \$this->isPublic = false;
                \$this->isPrivate = true;
                \$this->isProtected = false;
                break;

            case T_PROTECTED:
                \$this->isPublic = false;
                \$this->isPrivate = false;
                \$this->isProtected = true;
                break;

            default:
                throw new Exception\\InvalidArgumentException('Invalid visibility argument passed to setVisibility.');
        }

        return \$this;
    }

    /**
     * @return int
     */
    public function getNumberOfParameters()
    {
        return count(\$this->getParameters());
    }

    /**
     * @param  bool \$returnScanner
     * @return array
     */
    public function getParameters(\$returnScanner = false)
    {
        \$this->scan();

        \$return = [];

        foreach (\$this->infos as \$info) {
            if (\$info['type'] != 'parameter') {
                continue;
            }

            if (! \$returnScanner) {
                \$return[] = \$info['name'];
            } else {
                \$return[] = \$this->getParameter(\$info['name']);
            }
        }

        return \$return;
    }

    /**
     * @param  int|string \$parameterNameOrInfoIndex
     * @return ParameterScanner
     * @throws Exception\\InvalidArgumentException
     */
    public function getParameter(\$parameterNameOrInfoIndex)
    {
        \$this->scan();

        if (is_int(\$parameterNameOrInfoIndex)) {
            \$info = \$this->infos[\$parameterNameOrInfoIndex];
            if (\$info['type'] != 'parameter') {
                throw new Exception\\InvalidArgumentException('Index of info offset is not about a parameter');
            }
        } elseif (is_string(\$parameterNameOrInfoIndex)) {
            foreach (\$this->infos as \$info) {
                if (\$info['type'] === 'parameter' && \$info['name'] === \$parameterNameOrInfoIndex) {
                    break;
                }
                unset(\$info);
            }
            if (! isset(\$info)) {
                throw new Exception\\InvalidArgumentException('Index of info offset is not about a parameter');
            }
        }

        \$p = new ParameterScanner(
            array_slice(\$this->tokens, \$info['tokenStart'], \$info['tokenEnd'] - \$info['tokenStart']),
            \$this->nameInformation
        );
        \$p->setDeclaringFunction(\$this->name);
        \$p->setDeclaringScannerFunction(\$this);
        \$p->setDeclaringClass(\$this->class);
        \$p->setDeclaringScannerClass(\$this->scannerClass);
        \$p->setPosition(\$info['position']);

        return \$p;
    }

    /**
     * @return string
     */
    public function getBody()
    {
        \$this->scan();

        return \$this->body;
    }

    public static function export()
    {
        // @todo
    }

    public function __toString()
    {
        \$this->scan();

        return var_export(\$this, true);
    }

    protected function scan()
    {
        if (\$this->isScanned) {
            return;
        }

        if (! \$this->tokens) {
            throw new Exception\\RuntimeException('No tokens were provided');
        }

        /**
         * Variables & Setup
         */
        \$tokens       = &\$this->tokens; // localize
        \$infos        = &\$this->infos; // localize
        \$tokenIndex   = null;
        \$token        = null;
        \$tokenType    = null;
        \$tokenContent = null;
        \$tokenLine    = null;
        \$infoIndex    = 0;
        \$parentCount  = 0;

        /*
         * MACRO creation
         */
        \$MACRO_TOKEN_ADVANCE = function () use (
            &\$tokens,
            &\$tokenIndex,
            &\$token,
            &\$tokenType,
            &\$tokenContent,
            &\$tokenLine
        ) {
            static \$lastTokenArray = null;
            \$tokenIndex = \$tokenIndex === null ? 0 : \$tokenIndex + 1;
            if (! isset(\$tokens[\$tokenIndex])) {
                \$token        = false;
                \$tokenContent = false;
                \$tokenType    = false;
                \$tokenLine    = false;

                return false;
            }
            \$token = \$tokens[\$tokenIndex];
            if (is_string(\$token)) {
                \$tokenType    = null;
                \$tokenContent = \$token;
                \$tokenLine   += substr_count(
                    \$lastTokenArray[1] ?? '',
                    \"\\n\"
                ); // adjust token line by last known newline count
            } else {
                \$lastTokenArray = \$token;
                [\$tokenType, \$tokenContent, \$tokenLine] = \$token;
            }

            return \$tokenIndex;
        };
        \$MACRO_INFO_START    = function () use (&\$infoIndex, &\$infos, &\$tokenIndex, &\$tokenLine) {
            \$infos[\$infoIndex] = [
                'type'        => 'parameter',
                'tokenStart'  => \$tokenIndex,
                'tokenEnd'    => null,
                'lineStart'   => \$tokenLine,
                'lineEnd'     => \$tokenLine,
                'name'        => null,
                'position'    => \$infoIndex + 1, // position is +1 of infoIndex
            ];
        };
        \$MACRO_INFO_ADVANCE  = function () use (&\$infoIndex, &\$infos, &\$tokenIndex, &\$tokenLine) {
            \$infos[\$infoIndex]['tokenEnd'] = \$tokenIndex;
            \$infos[\$infoIndex]['lineEnd']  = \$tokenLine;
            \$infoIndex++;

            return \$infoIndex;
        };

        /**
         * START FINITE STATE MACHINE FOR SCANNING TOKENS
         */
        // Initialize token
        \$MACRO_TOKEN_ADVANCE();

        SCANNER_TOP:

        \$this->lineStart = \$this->lineStart ? : \$tokenLine;

        switch (\$tokenType) {
            case T_DOC_COMMENT:
                \$this->lineStart = null;
                if (\$this->docComment === null && \$this->name === null) {
                    \$this->docComment = \$tokenContent;
                }
                goto SCANNER_CONTINUE_SIGNATURE;
                // goto (no break needed);

            case T_FINAL:
                \$this->isFinal = true;
                goto SCANNER_CONTINUE_SIGNATURE;
                // goto (no break needed);

            case T_ABSTRACT:
                \$this->isAbstract = true;
                goto SCANNER_CONTINUE_SIGNATURE;
                // goto (no break needed);

            case T_PUBLIC:
                // use defaults
                goto SCANNER_CONTINUE_SIGNATURE;
                // goto (no break needed);

            case T_PROTECTED:
                \$this->setVisibility(T_PROTECTED);
                goto SCANNER_CONTINUE_SIGNATURE;
                // goto (no break needed);

            case T_PRIVATE:
                \$this->setVisibility(T_PRIVATE);
                goto SCANNER_CONTINUE_SIGNATURE;
                // goto (no break needed);

            case T_STATIC:
                \$this->isStatic = true;
                goto SCANNER_CONTINUE_SIGNATURE;
                // goto (no break needed);

            case T_NS_SEPARATOR:
                if (! isset(\$infos[\$infoIndex])) {
                    \$MACRO_INFO_START();
                }
                goto SCANNER_CONTINUE_SIGNATURE;
                // goto (no break needed);

            case T_VARIABLE:
            case T_STRING:
                if (\$tokenType === T_STRING && \$parentCount === 0) {
                    \$this->name = \$tokenContent;
                }

                if (\$parentCount === 1) {
                    if (! isset(\$infos[\$infoIndex])) {
                        \$MACRO_INFO_START();
                    }
                    if (\$tokenType === T_VARIABLE) {
                        \$infos[\$infoIndex]['name'] = ltrim(\$tokenContent, '\$');
                    }
                }

                goto SCANNER_CONTINUE_SIGNATURE;
                // goto (no break needed);

            case null:
                switch (\$tokenContent) {
                    case '&':
                        if (! isset(\$infos[\$infoIndex])) {
                            \$MACRO_INFO_START();
                        }
                        goto SCANNER_CONTINUE_SIGNATURE;
                        // goto (no break needed);
                    case '(':
                        \$parentCount++;
                        goto SCANNER_CONTINUE_SIGNATURE;
                        // goto (no break needed);
                    case ')':
                        \$parentCount--;
                        if (\$parentCount > 0) {
                            goto SCANNER_CONTINUE_SIGNATURE;
                        }
                        if (\$parentCount === 0) {
                            if (\$infos) {
                                \$MACRO_INFO_ADVANCE();
                            }
                            \$context = 'body';
                        }
                        goto SCANNER_CONTINUE_BODY;
                        // goto (no break needed);
                    case ',':
                        if (\$parentCount === 1) {
                            \$MACRO_INFO_ADVANCE();
                        }
                        goto SCANNER_CONTINUE_SIGNATURE;
                }
        }

        SCANNER_CONTINUE_SIGNATURE:

        if (\$MACRO_TOKEN_ADVANCE() === false) {
            goto SCANNER_END;
        }
        goto SCANNER_TOP;

        SCANNER_CONTINUE_BODY:

        \$braceCount = 0;
        while (\$MACRO_TOKEN_ADVANCE() !== false) {
            if (\$tokenContent == '}') {
                \$braceCount--;
            }
            if (\$braceCount > 0) {
                \$this->body .= \$tokenContent;
            }
            if (\$tokenContent == '{') {
                \$braceCount++;
            }
            \$this->lineEnd = \$tokenLine;
        }

        SCANNER_END:

        \$this->isScanned = true;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/zendframework/zend-code/src/Scanner/MethodScanner.php";
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

namespace Zend\\Code\\Scanner;

use Zend\\Code\\Annotation\\AnnotationManager;
use Zend\\Code\\Exception;
use Zend\\Code\\NameInformation;

use function array_slice;
use function count;
use function is_int;
use function is_string;
use function ltrim;
use function strtolower;
use function substr_count;
use function var_export;

class MethodScanner implements ScannerInterface
{
    /**
     * @var bool
     */
    protected \$isScanned = false;

    /**
     * @var string
     */
    protected \$docComment;

    /**
     * @var ClassScanner
     */
    protected \$scannerClass;

    /**
     * @var string
     */
    protected \$class;

    /**
     * @var string
     */
    protected \$name;

    /**
     * @var int
     */
    protected \$lineStart;

    /**
     * @var int
     */
    protected \$lineEnd;

    /**
     * @var bool
     */
    protected \$isFinal = false;

    /**
     * @var bool
     */
    protected \$isAbstract = false;

    /**
     * @var bool
     */
    protected \$isPublic = true;

    /**
     * @var bool
     */
    protected \$isProtected = false;

    /**
     * @var bool
     */
    protected \$isPrivate = false;

    /**
     * @var bool
     */
    protected \$isStatic = false;

    /**
     * @var string
     */
    protected \$body = '';

    /**
     * @var array
     */
    protected \$tokens = [];

    /**
     * @var NameInformation
     */
    protected \$nameInformation;

    /**
     * @var array
     */
    protected \$infos = [];

    /**
     * @param  array \$methodTokens
     * @param NameInformation \$nameInformation
     */
    public function __construct(array \$methodTokens, NameInformation \$nameInformation = null)
    {
        \$this->tokens          = \$methodTokens;
        \$this->nameInformation = \$nameInformation;
    }

    /**
     * @param  string \$class
     * @return MethodScanner
     */
    public function setClass(\$class)
    {
        \$this->class = (string) \$class;
        return \$this;
    }

    /**
     * @param  ClassScanner  \$scannerClass
     * @return MethodScanner
     */
    public function setScannerClass(ClassScanner \$scannerClass)
    {
        \$this->scannerClass = \$scannerClass;
        return \$this;
    }

    /**
     * @return ClassScanner
     */
    public function getClassScanner()
    {
        return \$this->scannerClass;
    }

    /**
     * @return string
     */
    public function getName()
    {
        \$this->scan();

        return \$this->name;
    }

    /**
     * @return int
     */
    public function getLineStart()
    {
        \$this->scan();

        return \$this->lineStart;
    }

    /**
     * @return int
     */
    public function getLineEnd()
    {
        \$this->scan();

        return \$this->lineEnd;
    }

    /**
     * @return string
     */
    public function getDocComment()
    {
        \$this->scan();

        return \$this->docComment;
    }

    /**
     * @param  AnnotationManager \$annotationManager
     * @return AnnotationScanner|false
     */
    public function getAnnotations(AnnotationManager \$annotationManager)
    {
        if ((\$docComment = \$this->getDocComment()) == '') {
            return false;
        }

        return new AnnotationScanner(\$annotationManager, \$docComment, \$this->nameInformation);
    }

    /**
     * @return bool
     */
    public function isFinal()
    {
        \$this->scan();

        return \$this->isFinal;
    }

    /**
     * @return bool
     */
    public function isAbstract()
    {
        \$this->scan();

        return \$this->isAbstract;
    }

    /**
     * @return bool
     */
    public function isPublic()
    {
        \$this->scan();

        return \$this->isPublic;
    }

    /**
     * @return bool
     */
    public function isProtected()
    {
        \$this->scan();

        return \$this->isProtected;
    }

    /**
     * @return bool
     */
    public function isPrivate()
    {
        \$this->scan();

        return \$this->isPrivate;
    }

    /**
     * @return bool
     */
    public function isStatic()
    {
        \$this->scan();

        return \$this->isStatic;
    }

    /**
     * Override the given name for a method, this is necessary to
     * support traits.
     *
     * @param string \$name
     * @return self
     */
    public function setName(\$name)
    {
        \$this->name = \$name;
        return \$this;
    }

    /**
     * Visibility must be of T_PUBLIC, T_PRIVATE or T_PROTECTED
     * Needed to support traits
     *
     * @param int \$visibility   T_PUBLIC | T_PRIVATE | T_PROTECTED
     * @return self
     * @throws \\Zend\\Code\\Exception\\InvalidArgumentException
     */
    public function setVisibility(\$visibility)
    {
        switch (\$visibility) {
            case T_PUBLIC:
                \$this->isPublic = true;
                \$this->isPrivate = false;
                \$this->isProtected = false;
                break;

            case T_PRIVATE:
                \$this->isPublic = false;
                \$this->isPrivate = true;
                \$this->isProtected = false;
                break;

            case T_PROTECTED:
                \$this->isPublic = false;
                \$this->isPrivate = false;
                \$this->isProtected = true;
                break;

            default:
                throw new Exception\\InvalidArgumentException('Invalid visibility argument passed to setVisibility.');
        }

        return \$this;
    }

    /**
     * @return int
     */
    public function getNumberOfParameters()
    {
        return count(\$this->getParameters());
    }

    /**
     * @param  bool \$returnScanner
     * @return array
     */
    public function getParameters(\$returnScanner = false)
    {
        \$this->scan();

        \$return = [];

        foreach (\$this->infos as \$info) {
            if (\$info['type'] != 'parameter') {
                continue;
            }

            if (! \$returnScanner) {
                \$return[] = \$info['name'];
            } else {
                \$return[] = \$this->getParameter(\$info['name']);
            }
        }

        return \$return;
    }

    /**
     * @param  int|string \$parameterNameOrInfoIndex
     * @return ParameterScanner
     * @throws Exception\\InvalidArgumentException
     */
    public function getParameter(\$parameterNameOrInfoIndex)
    {
        \$this->scan();

        if (is_int(\$parameterNameOrInfoIndex)) {
            \$info = \$this->infos[\$parameterNameOrInfoIndex];
            if (\$info['type'] != 'parameter') {
                throw new Exception\\InvalidArgumentException('Index of info offset is not about a parameter');
            }
        } elseif (is_string(\$parameterNameOrInfoIndex)) {
            foreach (\$this->infos as \$info) {
                if (\$info['type'] === 'parameter' && \$info['name'] === \$parameterNameOrInfoIndex) {
                    break;
                }
                unset(\$info);
            }
            if (! isset(\$info)) {
                throw new Exception\\InvalidArgumentException('Index of info offset is not about a parameter');
            }
        }

        \$p = new ParameterScanner(
            array_slice(\$this->tokens, \$info['tokenStart'], \$info['tokenEnd'] - \$info['tokenStart']),
            \$this->nameInformation
        );
        \$p->setDeclaringFunction(\$this->name);
        \$p->setDeclaringScannerFunction(\$this);
        \$p->setDeclaringClass(\$this->class);
        \$p->setDeclaringScannerClass(\$this->scannerClass);
        \$p->setPosition(\$info['position']);

        return \$p;
    }

    /**
     * @return string
     */
    public function getBody()
    {
        \$this->scan();

        return \$this->body;
    }

    public static function export()
    {
        // @todo
    }

    public function __toString()
    {
        \$this->scan();

        return var_export(\$this, true);
    }

    protected function scan()
    {
        if (\$this->isScanned) {
            return;
        }

        if (! \$this->tokens) {
            throw new Exception\\RuntimeException('No tokens were provided');
        }

        /**
         * Variables & Setup
         */
        \$tokens       = &\$this->tokens; // localize
        \$infos        = &\$this->infos; // localize
        \$tokenIndex   = null;
        \$token        = null;
        \$tokenType    = null;
        \$tokenContent = null;
        \$tokenLine    = null;
        \$infoIndex    = 0;
        \$parentCount  = 0;

        /*
         * MACRO creation
         */
        \$MACRO_TOKEN_ADVANCE = function () use (
            &\$tokens,
            &\$tokenIndex,
            &\$token,
            &\$tokenType,
            &\$tokenContent,
            &\$tokenLine
        ) {
            static \$lastTokenArray = null;
            \$tokenIndex = \$tokenIndex === null ? 0 : \$tokenIndex + 1;
            if (! isset(\$tokens[\$tokenIndex])) {
                \$token        = false;
                \$tokenContent = false;
                \$tokenType    = false;
                \$tokenLine    = false;

                return false;
            }
            \$token = \$tokens[\$tokenIndex];
            if (is_string(\$token)) {
                \$tokenType    = null;
                \$tokenContent = \$token;
                \$tokenLine   += substr_count(
                    \$lastTokenArray[1] ?? '',
                    \"\\n\"
                ); // adjust token line by last known newline count
            } else {
                \$lastTokenArray = \$token;
                [\$tokenType, \$tokenContent, \$tokenLine] = \$token;
            }

            return \$tokenIndex;
        };
        \$MACRO_INFO_START    = function () use (&\$infoIndex, &\$infos, &\$tokenIndex, &\$tokenLine) {
            \$infos[\$infoIndex] = [
                'type'        => 'parameter',
                'tokenStart'  => \$tokenIndex,
                'tokenEnd'    => null,
                'lineStart'   => \$tokenLine,
                'lineEnd'     => \$tokenLine,
                'name'        => null,
                'position'    => \$infoIndex + 1, // position is +1 of infoIndex
            ];
        };
        \$MACRO_INFO_ADVANCE  = function () use (&\$infoIndex, &\$infos, &\$tokenIndex, &\$tokenLine) {
            \$infos[\$infoIndex]['tokenEnd'] = \$tokenIndex;
            \$infos[\$infoIndex]['lineEnd']  = \$tokenLine;
            \$infoIndex++;

            return \$infoIndex;
        };

        /**
         * START FINITE STATE MACHINE FOR SCANNING TOKENS
         */
        // Initialize token
        \$MACRO_TOKEN_ADVANCE();

        SCANNER_TOP:

        \$this->lineStart = \$this->lineStart ? : \$tokenLine;

        switch (\$tokenType) {
            case T_DOC_COMMENT:
                \$this->lineStart = null;
                if (\$this->docComment === null && \$this->name === null) {
                    \$this->docComment = \$tokenContent;
                }
                goto SCANNER_CONTINUE_SIGNATURE;
                // goto (no break needed);

            case T_FINAL:
                \$this->isFinal = true;
                goto SCANNER_CONTINUE_SIGNATURE;
                // goto (no break needed);

            case T_ABSTRACT:
                \$this->isAbstract = true;
                goto SCANNER_CONTINUE_SIGNATURE;
                // goto (no break needed);

            case T_PUBLIC:
                // use defaults
                goto SCANNER_CONTINUE_SIGNATURE;
                // goto (no break needed);

            case T_PROTECTED:
                \$this->setVisibility(T_PROTECTED);
                goto SCANNER_CONTINUE_SIGNATURE;
                // goto (no break needed);

            case T_PRIVATE:
                \$this->setVisibility(T_PRIVATE);
                goto SCANNER_CONTINUE_SIGNATURE;
                // goto (no break needed);

            case T_STATIC:
                \$this->isStatic = true;
                goto SCANNER_CONTINUE_SIGNATURE;
                // goto (no break needed);

            case T_NS_SEPARATOR:
                if (! isset(\$infos[\$infoIndex])) {
                    \$MACRO_INFO_START();
                }
                goto SCANNER_CONTINUE_SIGNATURE;
                // goto (no break needed);

            case T_VARIABLE:
            case T_STRING:
                if (\$tokenType === T_STRING && \$parentCount === 0) {
                    \$this->name = \$tokenContent;
                }

                if (\$parentCount === 1) {
                    if (! isset(\$infos[\$infoIndex])) {
                        \$MACRO_INFO_START();
                    }
                    if (\$tokenType === T_VARIABLE) {
                        \$infos[\$infoIndex]['name'] = ltrim(\$tokenContent, '\$');
                    }
                }

                goto SCANNER_CONTINUE_SIGNATURE;
                // goto (no break needed);

            case null:
                switch (\$tokenContent) {
                    case '&':
                        if (! isset(\$infos[\$infoIndex])) {
                            \$MACRO_INFO_START();
                        }
                        goto SCANNER_CONTINUE_SIGNATURE;
                        // goto (no break needed);
                    case '(':
                        \$parentCount++;
                        goto SCANNER_CONTINUE_SIGNATURE;
                        // goto (no break needed);
                    case ')':
                        \$parentCount--;
                        if (\$parentCount > 0) {
                            goto SCANNER_CONTINUE_SIGNATURE;
                        }
                        if (\$parentCount === 0) {
                            if (\$infos) {
                                \$MACRO_INFO_ADVANCE();
                            }
                            \$context = 'body';
                        }
                        goto SCANNER_CONTINUE_BODY;
                        // goto (no break needed);
                    case ',':
                        if (\$parentCount === 1) {
                            \$MACRO_INFO_ADVANCE();
                        }
                        goto SCANNER_CONTINUE_SIGNATURE;
                }
        }

        SCANNER_CONTINUE_SIGNATURE:

        if (\$MACRO_TOKEN_ADVANCE() === false) {
            goto SCANNER_END;
        }
        goto SCANNER_TOP;

        SCANNER_CONTINUE_BODY:

        \$braceCount = 0;
        while (\$MACRO_TOKEN_ADVANCE() !== false) {
            if (\$tokenContent == '}') {
                \$braceCount--;
            }
            if (\$braceCount > 0) {
                \$this->body .= \$tokenContent;
            }
            if (\$tokenContent == '{') {
                \$braceCount++;
            }
            \$this->lineEnd = \$tokenLine;
        }

        SCANNER_END:

        \$this->isScanned = true;
    }
}
", "vendor/zendframework/zend-code/src/Scanner/MethodScanner.php", "/var/www/public/DevLaon/templates/vendor/zendframework/zend-code/src/Scanner/MethodScanner.php");
    }
}
