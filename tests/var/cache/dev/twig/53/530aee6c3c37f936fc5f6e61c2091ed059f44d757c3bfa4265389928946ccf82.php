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

/* vendor/symfony/yaml/Tests/Fixtures/YtsBasicTests.yml */
class __TwigTemplate_75564eed5724a013408bece9f05bf214ad613e641492b38b2aaff78a345114bb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/yaml/Tests/Fixtures/YtsBasicTests.yml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/yaml/Tests/Fixtures/YtsBasicTests.yml"));

        // line 1
        echo "--- %YAML:1.0
test: Simple Sequence
brief: |
    You can specify a list in YAML by placing each
    member of the list on a new line with an opening
    dash. These lists are called sequences.
yaml: |
    - apple
    - banana
    - carrot
php: |
    ['apple', 'banana', 'carrot']
---
test: Sequence With Item Being Null In The Middle
brief: |
    You can specify a list in YAML by placing each
    member of the list on a new line with an opening
    dash. These lists are called sequences.
yaml: |
    - apple
    -
    - carrot
php: |
    ['apple', null, 'carrot']
---
test: Sequence With Last Item Being Null
brief: |
    You can specify a list in YAML by placing each
    member of the list on a new line with an opening
    dash. These lists are called sequences.
yaml: |
    - apple
    - banana
    -
php: |
    ['apple', 'banana', null]
---
test: Nested Sequences
brief: |
    You can include a sequence within another
    sequence by giving the sequence an empty
    dash, followed by an indented list.
yaml: |
    -
     - foo
     - bar
     - baz
php: |
    [['foo', 'bar', 'baz']]
---
test: Mixed Sequences
brief: |
    Sequences can contain any YAML data,
    including strings and other sequences.
yaml: |
    - apple
    -
     - foo
     - bar
     - x123
    - banana
    - carrot
php: |
    ['apple', ['foo', 'bar', 'x123'], 'banana', 'carrot']
---
test: Deeply Nested Sequences
brief: |
    Sequences can be nested even deeper, with each
    level of indentation representing a level of
    depth.
yaml: |
    -
     -
      - uno
      - dos
php: |
    [[['uno', 'dos']]]
---
test: Simple Mapping
brief: |
    You can add a keyed list (also known as a dictionary or
    hash) to your document by placing each member of the
    list on a new line, with a colon separating the key
    from its value.  In YAML, this type of list is called
    a mapping.
yaml: |
    foo: whatever
    bar: stuff
php: |
    ['foo' => 'whatever', 'bar' => 'stuff']
---
test: Sequence in a Mapping
brief: |
    A value in a mapping can be a sequence.
yaml: |
    foo: whatever
    bar:
     - uno
     - dos
php: |
    ['foo' => 'whatever', 'bar' => ['uno', 'dos']]
---
test: Nested Mappings
brief: |
    A value in a mapping can be another mapping.
yaml: |
    foo: whatever
    bar:
     fruit: apple
     name: steve
     sport: baseball
php: |
    [
      'foo' => 'whatever',
      'bar' => [
         'fruit' => 'apple',
         'name' => 'steve',
         'sport' => 'baseball'
      ]
    ]
---
test: Mixed Mapping
brief: |
    A mapping can contain any assortment
    of mappings and sequences as values.
yaml: |
    foo: whatever
    bar:
     -
       fruit: apple
       name: steve
       sport: baseball
     - more
     -
       python: rocks
       perl: papers
       ruby: scissorses
php: |
    [
      'foo' => 'whatever',
      'bar' => [
        [
            'fruit' => 'apple',
            'name' => 'steve',
            'sport' => 'baseball'
        ],
        'more',
        [
            'python' => 'rocks',
            'perl' => 'papers',
            'ruby' => 'scissorses'
        ]
      ]
    ]
---
test: Mapping-in-Sequence Shortcut
todo: true
brief: |
     If you are adding a mapping to a sequence, you
     can place the mapping on the same line as the
     dash as a shortcut.
yaml: |
     - work on YAML.py:
        - work on Store
php: |
    [['work on YAML.py' => ['work on Store']]]
---
test: Sequence-in-Mapping Shortcut
todo: true
brief: |
     The dash in a sequence counts as indentation, so
     you can add a sequence inside of a mapping without
     needing spaces as indentation.
yaml: |
     allow:
     - 'localhost'
     - '%.sourceforge.net'
     - '%.freepan.org'
php: |
     ['allow' => ['localhost', '%.sourceforge.net', '%.freepan.org']]
---
todo: true
test: Merge key
brief: |
     A merge key ('<<') can be used in a mapping to insert other mappings.  If
     the value associated with the merge key is a mapping, each of its key/value
     pairs is inserted into the current mapping.
yaml: |
     mapping:
       name: Joe
       job: Accountant
       <<:
         age: 38
php: |
     [
       'mapping' =>
       [
         'name' => 'Joe',
         'job' => 'Accountant',
         'age' => 38
       ]
     ]
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/yaml/Tests/Fixtures/YtsBasicTests.yml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("--- %YAML:1.0
test: Simple Sequence
brief: |
    You can specify a list in YAML by placing each
    member of the list on a new line with an opening
    dash. These lists are called sequences.
yaml: |
    - apple
    - banana
    - carrot
php: |
    ['apple', 'banana', 'carrot']
---
test: Sequence With Item Being Null In The Middle
brief: |
    You can specify a list in YAML by placing each
    member of the list on a new line with an opening
    dash. These lists are called sequences.
yaml: |
    - apple
    -
    - carrot
php: |
    ['apple', null, 'carrot']
---
test: Sequence With Last Item Being Null
brief: |
    You can specify a list in YAML by placing each
    member of the list on a new line with an opening
    dash. These lists are called sequences.
yaml: |
    - apple
    - banana
    -
php: |
    ['apple', 'banana', null]
---
test: Nested Sequences
brief: |
    You can include a sequence within another
    sequence by giving the sequence an empty
    dash, followed by an indented list.
yaml: |
    -
     - foo
     - bar
     - baz
php: |
    [['foo', 'bar', 'baz']]
---
test: Mixed Sequences
brief: |
    Sequences can contain any YAML data,
    including strings and other sequences.
yaml: |
    - apple
    -
     - foo
     - bar
     - x123
    - banana
    - carrot
php: |
    ['apple', ['foo', 'bar', 'x123'], 'banana', 'carrot']
---
test: Deeply Nested Sequences
brief: |
    Sequences can be nested even deeper, with each
    level of indentation representing a level of
    depth.
yaml: |
    -
     -
      - uno
      - dos
php: |
    [[['uno', 'dos']]]
---
test: Simple Mapping
brief: |
    You can add a keyed list (also known as a dictionary or
    hash) to your document by placing each member of the
    list on a new line, with a colon separating the key
    from its value.  In YAML, this type of list is called
    a mapping.
yaml: |
    foo: whatever
    bar: stuff
php: |
    ['foo' => 'whatever', 'bar' => 'stuff']
---
test: Sequence in a Mapping
brief: |
    A value in a mapping can be a sequence.
yaml: |
    foo: whatever
    bar:
     - uno
     - dos
php: |
    ['foo' => 'whatever', 'bar' => ['uno', 'dos']]
---
test: Nested Mappings
brief: |
    A value in a mapping can be another mapping.
yaml: |
    foo: whatever
    bar:
     fruit: apple
     name: steve
     sport: baseball
php: |
    [
      'foo' => 'whatever',
      'bar' => [
         'fruit' => 'apple',
         'name' => 'steve',
         'sport' => 'baseball'
      ]
    ]
---
test: Mixed Mapping
brief: |
    A mapping can contain any assortment
    of mappings and sequences as values.
yaml: |
    foo: whatever
    bar:
     -
       fruit: apple
       name: steve
       sport: baseball
     - more
     -
       python: rocks
       perl: papers
       ruby: scissorses
php: |
    [
      'foo' => 'whatever',
      'bar' => [
        [
            'fruit' => 'apple',
            'name' => 'steve',
            'sport' => 'baseball'
        ],
        'more',
        [
            'python' => 'rocks',
            'perl' => 'papers',
            'ruby' => 'scissorses'
        ]
      ]
    ]
---
test: Mapping-in-Sequence Shortcut
todo: true
brief: |
     If you are adding a mapping to a sequence, you
     can place the mapping on the same line as the
     dash as a shortcut.
yaml: |
     - work on YAML.py:
        - work on Store
php: |
    [['work on YAML.py' => ['work on Store']]]
---
test: Sequence-in-Mapping Shortcut
todo: true
brief: |
     The dash in a sequence counts as indentation, so
     you can add a sequence inside of a mapping without
     needing spaces as indentation.
yaml: |
     allow:
     - 'localhost'
     - '%.sourceforge.net'
     - '%.freepan.org'
php: |
     ['allow' => ['localhost', '%.sourceforge.net', '%.freepan.org']]
---
todo: true
test: Merge key
brief: |
     A merge key ('<<') can be used in a mapping to insert other mappings.  If
     the value associated with the merge key is a mapping, each of its key/value
     pairs is inserted into the current mapping.
yaml: |
     mapping:
       name: Joe
       job: Accountant
       <<:
         age: 38
php: |
     [
       'mapping' =>
       [
         'name' => 'Joe',
         'job' => 'Accountant',
         'age' => 38
       ]
     ]
", "vendor/symfony/yaml/Tests/Fixtures/YtsBasicTests.yml", "/var/www/public/DevLaon/templates/vendor/symfony/yaml/Tests/Fixtures/YtsBasicTests.yml");
    }
}
