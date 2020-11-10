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

/* vendor/fzaninotto/faker/src/Faker/Provider/ne_NP/Person.php */
class __TwigTemplate_ce5444b8948ab96536c6f7ac344d9164424678fd157a64b2427db29553b2e595 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/ne_NP/Person.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/ne_NP/Person.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\ne_NP;

class Person extends \\Faker\\Provider\\Person
{
    protected static \$maleNameFormats = array(
        '";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 8, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 9, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 10, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 11, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 12, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["titleMale"]) || array_key_exists("titleMale", $context) ? $context["titleMale"] : (function () { throw new RuntimeError('Variable "titleMale" does not exist.', 13, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 13, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 14, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["middleNameMale"]) || array_key_exists("middleNameMale", $context) ? $context["middleNameMale"] : (function () { throw new RuntimeError('Variable "middleNameMale" does not exist.', 14, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 15, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["titleMale"]) || array_key_exists("titleMale", $context) ? $context["titleMale"] : (function () { throw new RuntimeError('Variable "titleMale" does not exist.', 16, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 16, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["middleNameMale"]) || array_key_exists("middleNameMale", $context) ? $context["middleNameMale"] : (function () { throw new RuntimeError('Variable "middleNameMale" does not exist.', 16, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 17, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 18, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "',
    );

    protected static \$femaleNameFormats = array(
        '";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 22, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 23, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 24, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 25, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 25, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 26, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 26, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["titleFemale"]) || array_key_exists("titleFemale", $context) ? $context["titleFemale"] : (function () { throw new RuntimeError('Variable "titleFemale" does not exist.', 27, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 27, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 27, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 28, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["middleNameFemale"]) || array_key_exists("middleNameFemale", $context) ? $context["middleNameFemale"] : (function () { throw new RuntimeError('Variable "middleNameFemale" does not exist.', 28, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 28, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 29, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 29, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["titleFemale"]) || array_key_exists("titleFemale", $context) ? $context["titleFemale"] : (function () { throw new RuntimeError('Variable "titleFemale" does not exist.', 30, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 30, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["middleNameFemale"]) || array_key_exists("middleNameFemale", $context) ? $context["middleNameFemale"] : (function () { throw new RuntimeError('Variable "middleNameFemale" does not exist.', 30, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 30, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 31, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 31, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 32, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 32, $this->source); })()), "html", null, true);
        echo "',
    );

    protected static \$firstNameMale = array(
        'Aadarsh', 'Aadesh', 'Aaditya', 'Aakash', 'Aanand', 'Abud', 'Achyut', 'Ajay', 'Ajit', 'Akhil', 'Akshar', 'Akshay', 'Amar', 'Amir', 'Amit', 'Amod', 'Amrit', 'Amulya', 'Ananta', 'Angel', 'Angikar', 'Anil', 'Ankit', 'Ankur', 'Anmol', 'Anshu', 'Anuj', 'Arjun', 'Arun', 'Ashish', 'Ashok', 'Ashutosh', 'Atal', 'Avinash', 'Ayush',
        'Babish', 'Badal', 'Badri', 'Baibhav', 'Bhagwam', 'Bhakti', 'Bhanu', 'Bibek', 'Bicky', 'Bidur', 'Bidwan', 'Bikal', 'Bikash', 'Bikesh', 'Bikram', 'Bimal', 'Binamra', 'Binay', 'Bipin', 'Biplav', 'Bipul', 'Biraj', 'Birendra', 'Bishal', 'Bisu', 'Biswas', 'Brijesh', 'Buddha',
        'Chaitanya', 'Chandan', 'Chandra', 'Chirag',
        'Darpan', 'Deep', 'Deepak', 'Dev', 'Dhairya', 'Dharma', 'Dharmendra', 'Dhiren', 'Diwakar', 'Diwash',
        'Eklavya',
        'Gajendra', 'Gaurav', 'Girish', 'Gokul', 'Gopal', 'Govinda', 'Grija', 'Gyanraj',
        'Hans', 'Hardik', 'Hari', 'Harsa', 'Hemant', 'Himal', 'Hitesh', 'Hridaya',
        'Ishwar',
        'Jitendra', 'Jivan',
        'Kabindra', 'Kailash', 'Kalyan', 'Kamal', 'Kamod', 'Kapil', 'Karan', 'Karna', 'Khagendra', 'Kishor', 'Kris', 'Krishna', 'Krisus', 'Kuber',
        'Lakshman', 'Lalit', 'Lava', 'Lochan', 'Lokesh',
        'Madhav', 'Madhukar', 'Madhur', 'Mandeep', 'Manish', 'Manjul', 'Manoj', 'Milan', 'Mohit', 'Mridul',
        'Nabin', 'Nakul', 'Narayan', 'Narendra', 'Naresh', 'Neil', 'Nerain', 'Nirajan', 'Nirajan', 'Nirmal', 'Nirupam', 'Nischal', 'Nishad', 'Nishant', 'Nutan',
        'Om',
        'Paras', 'Parikshit', 'Parimal', 'Pawan', 'Piyush', 'Prabal', 'Prabesh', 'Prabhat', 'Prabin', 'Prajwal', 'Prakash', 'Pramesh', 'Pramod', 'Pranaya', 'Pranil', 'Prasanna', 'Prashant', 'Prasun', 'Pratap', 'Pratik', 'Prayag', 'Prianshu', 'Prithivi', 'Purna', 'Pushkar',
        'Raghab', 'Rahul', 'Rajan', 'Rajesh', 'Rakesh', 'Ramesh', 'Ranjan', 'Ranjit', 'Ricky', 'Rijan', 'Rishab', 'Rishikesh', 'Rohan', 'Rohit', 'Roshan',
        'Sabin', 'Sachit', 'Safal', 'Sahaj', 'Sahan', 'Sajal', 'Sakar', 'Samir', 'Sanchit', 'Sandesh', 'Sanjay', 'Sanjeev', 'Sankalpa', 'Santosh', 'Sarad', 'Saroj', 'Sashi', 'Saumya', 'Sevak', 'Shailesh', 'Shakti', 'Shamundra', 'Shantanu', 'Shashank', 'Shashwat', 'Shekar', 'Shyam', 'Siddhartha', 'Sitaram', 'Sohan', 'Sohil', 'Soviet', 'Spandan', 'Subal', 'Subham', 'Subodh', 'Sudan', 'Sudhir', 'Sudin', 'Sudip', 'Sujan', 'Sujit', 'Sukanta', 'Sumel', 'Sunil', 'Suraj', 'Suraj', 'Surendra', 'Surya', 'Sushant', 'Sushil', 'Suyash', 'Suyog', 'Swagat', 'Swapnil', 'Swarup',
        'Tej', 'Tilak', 'Tirtha', 'Trailokya', 'Trilochan',
        'Udit', 'Ujjwal', 'Umesh', 'Uttam',
        'Yogendra', 'Yogesh', 'Yuvaraj',
    );

    protected static \$firstNameFemale = array(
        'Aakansha', 'Aanchal', 'Aarati', 'Aashika', 'Aayusha', 'Alisha', 'Ambika', 'Amrita', 'Anamika', 'Anita', 'Anjali', 'Anjana', 'Anjela', 'Anju', 'Ankita', 'Ansu', 'Anu', 'Anupa', 'Anushree', 'Anuska', 'Apeksha', 'Archana', 'Arpita', 'Aruna', 'Asha',
        'Bandita', 'Barsa', 'Bhawana', 'Bimala', 'Bina', 'Bindu', 'Binita', 'Bipana',
        'Chadani', 'Chameli', 'Champa', 'Chandana',
        'Damini', 'Deepa', 'Deepti', 'Depika', 'Dibya', 'Diksha', 'Dilmaya', 'Dipshika', 'Durga',
        'Ganga', 'Garima', 'Gauri', 'Gita', 'Goma', 'Grishma',
        'Harsika', 'Hema', 'Himani',
        'Isha', 'Ishika', 'Ishwari',
        'Jamuna', 'Janaki', 'Januka', 'Jiya', 'Junu',
        'Kabita', 'Karuna', 'Kaushika', 'Khusbhu', 'Komal', 'Kopila', 'Kripa', 'Kriti', 'Kritika', 'Kshitz', 'Kumud', 'Kusum',
        'Lalita', 'Lata', 'Laxmi', 'Lina', 'Luna',
        'Madhavi', 'Madhuri', 'Mamata', 'Manila', 'Manita', 'Manjita', 'Manju', 'Maya', 'Mayabati', 'Mayushi', 'Menka', 'Menuka', 'Mina', 'Mira', 'Motiva', 'Mukti', 'Muna',
        'Nabina', 'Namrata', 'Nandani', 'Nilam', 'Nira', 'Nirmali', 'Nisha', 'Nishita',
        'Pallavi', 'Parijat', 'Pavitra', 'Pinky', 'Prabha', 'Prabina', 'Prabriti', 'Prakriti', 'Pramila', 'Prapti', 'Pratiksha', 'Pratima', 'Preeti', 'Prekshya', 'Prenana', 'Priya', 'Priyanka', 'Puja', 'Punam', 'Purnima', 'Puspa',
        'Rabina', 'Radha', 'Radhika', 'Raksha', 'Rama', 'Ramita', 'Rampyari', 'Rani', 'Ranjana', 'Ranju', 'Rashmi', 'Rejina', 'Rekha', 'Renu', 'Renuka', 'Reshami', 'Riddhi', 'Rina', 'Ritu', 'Roshni', 'Rupa',
        'Sabina', 'Sabita', 'Sacheta', 'Sachita', 'Sadhana', 'Safala', 'Sagina', 'Sahana', 'Saileja', 'Sajala', 'Sakshi', 'Sakuntala', 'Samjhana', 'Sampada', 'Samridhi', 'Sangita', 'Sanjana', 'Sanskriti', 'Santoshi', 'Sarala', 'Saraswati', 'Sarina', 'Sarita', 'Sarmila', 'Sarupa', 'Saubhagya', 'Shanti', 'Shasikala', 'Shova', 'Shraddha', 'Shreya', 'Shrija', 'Shristi', 'Shriya', 'Shusila', 'Simran', 'Sita', 'Smriti', 'Sneha', 'Soni', 'Srijana', 'Subheksha', 'Sujata', 'Sukriti', 'Sulochana', 'Sumi', 'Sumnima', 'Sunila', 'Surakshya', 'Susma', 'Susmita', 'Suyesha', 'Swechchha',
        'Tara', 'Tulsi',
        'Uma', 'Urbasi', 'Urmila', 'Usha',
        'Vandana',
        'Yami', 'Yasodha', 'Yushma',
    );

    protected static \$lastName = array(
        'Acharya', 'Adhikari', 'Agarwal', 'Amatya', 'Aryal',
        'Baidya', 'Bajracharya', 'Balami', 'Banepali', 'Baniya', 'Banjade', 'Baral', 'Basnet', 'Bastakoti', 'Bastola', 'Basyal', 'Belbase', 'Bhandari', 'Bhatta', 'Bhattarai', 'Bhusal', 'Bijukchhe', 'Bisht', 'Bohara', 'Budathoki', 'Byanjankar',
        'Chalise', 'Chamling', 'Chapagain', 'Chaudhary', 'Chhetri', 'Chhetri',
        'Dahal', 'Dangol', 'Dawadi', 'Devkota', 'Dhakal', 'Dhamla', 'Dhaubhadel', 'Dhungel',
        'Gauchan', 'Gautam', 'Ghale', 'Ghimire', 'Giri', 'Golchha', 'Gurung', 'Gyalzen', 'Gyawali',
        'Hamal', 'Himanshu', 'Humagain',
        'Jha', 'Joshi',
        'Kafle', 'Kandel', 'Kansakar', 'Karki', 'Karmacharya', 'Karna', 'Katwal', 'Kayastha', 'KC', 'Khadka', 'Khadgee', 'Khan', 'Khanal', 'Kharel', 'Khatiwada', 'Khatri', 'Khawas', 'Koirala',
        'Lama', 'Lamichhane', 'Lamsal', 'Lawoti', 'Ligal', 'Limbu', 'Lohani',
        'Magar', 'Maharjan', 'Mainali', 'Malakar', 'Maleku', 'Manandhar', 'Marhatta', 'Mishra',
        'Nakarmi', 'Napit', 'Nemkul', 'Nepal', 'Neupane', 'Niroula',
        'Ojha',
        'Pachhai', 'Pahari', 'Pandey', 'Pangeni', 'Panta', 'Parajuli', 'Pathak', 'Paudel', 'Pokhrel', 'Pradhan', 'Prajapati', 'Puri',
        'Rai', 'Raimajhi', 'Rana', 'Ranabhat', 'Rasali', 'Rauniyar', 'Rawat', 'Regmi', 'Rijal', 'Rimal', 'Rinpoche',
        'Sarraf', 'Shah', 'Shahi', 'Shakya', 'Sharma', 'Sherpa', 'Shrestha', 'Silwal', 'Simkhada', 'Singh', 'Sitoula', 'Subedi',
        'Tamang', 'Tamrakar', 'Thakur', 'Thapa', 'Thapa Magar', 'Thuladhar', 'Thule', 'Tuladhar',
        'Upadhyaya',
        'Veswakar',
        'Wagle',
        'Yadav',
    );

    private static \$middleNameMale = array('Bahadur', 'Dev', 'Kumar', 'Man', 'Mani', 'Nath', 'Prasad', 'Raj', 'Ratna');
    private static \$middleNameFemale = array('Devi', 'Kumari');

    /**
     * @example 'Bahadur'
     */
    public static function middleNameMale()
    {
        return static::randomElement(static::\$middleNameMale);
    }

    /**
     * @example 'Devi'
     */
    public static function middleNameFemale()
    {
        return static::randomElement(static::\$middleNameFemale);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/ne_NP/Person.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 32,  191 => 31,  181 => 30,  175 => 29,  167 => 28,  159 => 27,  153 => 26,  147 => 25,  141 => 24,  135 => 23,  129 => 22,  120 => 18,  114 => 17,  104 => 16,  98 => 15,  90 => 14,  82 => 13,  76 => 12,  70 => 11,  64 => 10,  58 => 9,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\ne_NP;

class Person extends \\Faker\\Provider\\Person
{
    protected static \$maleNameFormats = array(
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{titleMale}} {{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{middleNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{titleMale}} {{firstNameMale}} {{middleNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
    );

    protected static \$femaleNameFormats = array(
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{titleFemale}} {{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{middleNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{titleFemale}} {{firstNameFemale}} {{middleNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
    );

    protected static \$firstNameMale = array(
        'Aadarsh', 'Aadesh', 'Aaditya', 'Aakash', 'Aanand', 'Abud', 'Achyut', 'Ajay', 'Ajit', 'Akhil', 'Akshar', 'Akshay', 'Amar', 'Amir', 'Amit', 'Amod', 'Amrit', 'Amulya', 'Ananta', 'Angel', 'Angikar', 'Anil', 'Ankit', 'Ankur', 'Anmol', 'Anshu', 'Anuj', 'Arjun', 'Arun', 'Ashish', 'Ashok', 'Ashutosh', 'Atal', 'Avinash', 'Ayush',
        'Babish', 'Badal', 'Badri', 'Baibhav', 'Bhagwam', 'Bhakti', 'Bhanu', 'Bibek', 'Bicky', 'Bidur', 'Bidwan', 'Bikal', 'Bikash', 'Bikesh', 'Bikram', 'Bimal', 'Binamra', 'Binay', 'Bipin', 'Biplav', 'Bipul', 'Biraj', 'Birendra', 'Bishal', 'Bisu', 'Biswas', 'Brijesh', 'Buddha',
        'Chaitanya', 'Chandan', 'Chandra', 'Chirag',
        'Darpan', 'Deep', 'Deepak', 'Dev', 'Dhairya', 'Dharma', 'Dharmendra', 'Dhiren', 'Diwakar', 'Diwash',
        'Eklavya',
        'Gajendra', 'Gaurav', 'Girish', 'Gokul', 'Gopal', 'Govinda', 'Grija', 'Gyanraj',
        'Hans', 'Hardik', 'Hari', 'Harsa', 'Hemant', 'Himal', 'Hitesh', 'Hridaya',
        'Ishwar',
        'Jitendra', 'Jivan',
        'Kabindra', 'Kailash', 'Kalyan', 'Kamal', 'Kamod', 'Kapil', 'Karan', 'Karna', 'Khagendra', 'Kishor', 'Kris', 'Krishna', 'Krisus', 'Kuber',
        'Lakshman', 'Lalit', 'Lava', 'Lochan', 'Lokesh',
        'Madhav', 'Madhukar', 'Madhur', 'Mandeep', 'Manish', 'Manjul', 'Manoj', 'Milan', 'Mohit', 'Mridul',
        'Nabin', 'Nakul', 'Narayan', 'Narendra', 'Naresh', 'Neil', 'Nerain', 'Nirajan', 'Nirajan', 'Nirmal', 'Nirupam', 'Nischal', 'Nishad', 'Nishant', 'Nutan',
        'Om',
        'Paras', 'Parikshit', 'Parimal', 'Pawan', 'Piyush', 'Prabal', 'Prabesh', 'Prabhat', 'Prabin', 'Prajwal', 'Prakash', 'Pramesh', 'Pramod', 'Pranaya', 'Pranil', 'Prasanna', 'Prashant', 'Prasun', 'Pratap', 'Pratik', 'Prayag', 'Prianshu', 'Prithivi', 'Purna', 'Pushkar',
        'Raghab', 'Rahul', 'Rajan', 'Rajesh', 'Rakesh', 'Ramesh', 'Ranjan', 'Ranjit', 'Ricky', 'Rijan', 'Rishab', 'Rishikesh', 'Rohan', 'Rohit', 'Roshan',
        'Sabin', 'Sachit', 'Safal', 'Sahaj', 'Sahan', 'Sajal', 'Sakar', 'Samir', 'Sanchit', 'Sandesh', 'Sanjay', 'Sanjeev', 'Sankalpa', 'Santosh', 'Sarad', 'Saroj', 'Sashi', 'Saumya', 'Sevak', 'Shailesh', 'Shakti', 'Shamundra', 'Shantanu', 'Shashank', 'Shashwat', 'Shekar', 'Shyam', 'Siddhartha', 'Sitaram', 'Sohan', 'Sohil', 'Soviet', 'Spandan', 'Subal', 'Subham', 'Subodh', 'Sudan', 'Sudhir', 'Sudin', 'Sudip', 'Sujan', 'Sujit', 'Sukanta', 'Sumel', 'Sunil', 'Suraj', 'Suraj', 'Surendra', 'Surya', 'Sushant', 'Sushil', 'Suyash', 'Suyog', 'Swagat', 'Swapnil', 'Swarup',
        'Tej', 'Tilak', 'Tirtha', 'Trailokya', 'Trilochan',
        'Udit', 'Ujjwal', 'Umesh', 'Uttam',
        'Yogendra', 'Yogesh', 'Yuvaraj',
    );

    protected static \$firstNameFemale = array(
        'Aakansha', 'Aanchal', 'Aarati', 'Aashika', 'Aayusha', 'Alisha', 'Ambika', 'Amrita', 'Anamika', 'Anita', 'Anjali', 'Anjana', 'Anjela', 'Anju', 'Ankita', 'Ansu', 'Anu', 'Anupa', 'Anushree', 'Anuska', 'Apeksha', 'Archana', 'Arpita', 'Aruna', 'Asha',
        'Bandita', 'Barsa', 'Bhawana', 'Bimala', 'Bina', 'Bindu', 'Binita', 'Bipana',
        'Chadani', 'Chameli', 'Champa', 'Chandana',
        'Damini', 'Deepa', 'Deepti', 'Depika', 'Dibya', 'Diksha', 'Dilmaya', 'Dipshika', 'Durga',
        'Ganga', 'Garima', 'Gauri', 'Gita', 'Goma', 'Grishma',
        'Harsika', 'Hema', 'Himani',
        'Isha', 'Ishika', 'Ishwari',
        'Jamuna', 'Janaki', 'Januka', 'Jiya', 'Junu',
        'Kabita', 'Karuna', 'Kaushika', 'Khusbhu', 'Komal', 'Kopila', 'Kripa', 'Kriti', 'Kritika', 'Kshitz', 'Kumud', 'Kusum',
        'Lalita', 'Lata', 'Laxmi', 'Lina', 'Luna',
        'Madhavi', 'Madhuri', 'Mamata', 'Manila', 'Manita', 'Manjita', 'Manju', 'Maya', 'Mayabati', 'Mayushi', 'Menka', 'Menuka', 'Mina', 'Mira', 'Motiva', 'Mukti', 'Muna',
        'Nabina', 'Namrata', 'Nandani', 'Nilam', 'Nira', 'Nirmali', 'Nisha', 'Nishita',
        'Pallavi', 'Parijat', 'Pavitra', 'Pinky', 'Prabha', 'Prabina', 'Prabriti', 'Prakriti', 'Pramila', 'Prapti', 'Pratiksha', 'Pratima', 'Preeti', 'Prekshya', 'Prenana', 'Priya', 'Priyanka', 'Puja', 'Punam', 'Purnima', 'Puspa',
        'Rabina', 'Radha', 'Radhika', 'Raksha', 'Rama', 'Ramita', 'Rampyari', 'Rani', 'Ranjana', 'Ranju', 'Rashmi', 'Rejina', 'Rekha', 'Renu', 'Renuka', 'Reshami', 'Riddhi', 'Rina', 'Ritu', 'Roshni', 'Rupa',
        'Sabina', 'Sabita', 'Sacheta', 'Sachita', 'Sadhana', 'Safala', 'Sagina', 'Sahana', 'Saileja', 'Sajala', 'Sakshi', 'Sakuntala', 'Samjhana', 'Sampada', 'Samridhi', 'Sangita', 'Sanjana', 'Sanskriti', 'Santoshi', 'Sarala', 'Saraswati', 'Sarina', 'Sarita', 'Sarmila', 'Sarupa', 'Saubhagya', 'Shanti', 'Shasikala', 'Shova', 'Shraddha', 'Shreya', 'Shrija', 'Shristi', 'Shriya', 'Shusila', 'Simran', 'Sita', 'Smriti', 'Sneha', 'Soni', 'Srijana', 'Subheksha', 'Sujata', 'Sukriti', 'Sulochana', 'Sumi', 'Sumnima', 'Sunila', 'Surakshya', 'Susma', 'Susmita', 'Suyesha', 'Swechchha',
        'Tara', 'Tulsi',
        'Uma', 'Urbasi', 'Urmila', 'Usha',
        'Vandana',
        'Yami', 'Yasodha', 'Yushma',
    );

    protected static \$lastName = array(
        'Acharya', 'Adhikari', 'Agarwal', 'Amatya', 'Aryal',
        'Baidya', 'Bajracharya', 'Balami', 'Banepali', 'Baniya', 'Banjade', 'Baral', 'Basnet', 'Bastakoti', 'Bastola', 'Basyal', 'Belbase', 'Bhandari', 'Bhatta', 'Bhattarai', 'Bhusal', 'Bijukchhe', 'Bisht', 'Bohara', 'Budathoki', 'Byanjankar',
        'Chalise', 'Chamling', 'Chapagain', 'Chaudhary', 'Chhetri', 'Chhetri',
        'Dahal', 'Dangol', 'Dawadi', 'Devkota', 'Dhakal', 'Dhamla', 'Dhaubhadel', 'Dhungel',
        'Gauchan', 'Gautam', 'Ghale', 'Ghimire', 'Giri', 'Golchha', 'Gurung', 'Gyalzen', 'Gyawali',
        'Hamal', 'Himanshu', 'Humagain',
        'Jha', 'Joshi',
        'Kafle', 'Kandel', 'Kansakar', 'Karki', 'Karmacharya', 'Karna', 'Katwal', 'Kayastha', 'KC', 'Khadka', 'Khadgee', 'Khan', 'Khanal', 'Kharel', 'Khatiwada', 'Khatri', 'Khawas', 'Koirala',
        'Lama', 'Lamichhane', 'Lamsal', 'Lawoti', 'Ligal', 'Limbu', 'Lohani',
        'Magar', 'Maharjan', 'Mainali', 'Malakar', 'Maleku', 'Manandhar', 'Marhatta', 'Mishra',
        'Nakarmi', 'Napit', 'Nemkul', 'Nepal', 'Neupane', 'Niroula',
        'Ojha',
        'Pachhai', 'Pahari', 'Pandey', 'Pangeni', 'Panta', 'Parajuli', 'Pathak', 'Paudel', 'Pokhrel', 'Pradhan', 'Prajapati', 'Puri',
        'Rai', 'Raimajhi', 'Rana', 'Ranabhat', 'Rasali', 'Rauniyar', 'Rawat', 'Regmi', 'Rijal', 'Rimal', 'Rinpoche',
        'Sarraf', 'Shah', 'Shahi', 'Shakya', 'Sharma', 'Sherpa', 'Shrestha', 'Silwal', 'Simkhada', 'Singh', 'Sitoula', 'Subedi',
        'Tamang', 'Tamrakar', 'Thakur', 'Thapa', 'Thapa Magar', 'Thuladhar', 'Thule', 'Tuladhar',
        'Upadhyaya',
        'Veswakar',
        'Wagle',
        'Yadav',
    );

    private static \$middleNameMale = array('Bahadur', 'Dev', 'Kumar', 'Man', 'Mani', 'Nath', 'Prasad', 'Raj', 'Ratna');
    private static \$middleNameFemale = array('Devi', 'Kumari');

    /**
     * @example 'Bahadur'
     */
    public static function middleNameMale()
    {
        return static::randomElement(static::\$middleNameMale);
    }

    /**
     * @example 'Devi'
     */
    public static function middleNameFemale()
    {
        return static::randomElement(static::\$middleNameFemale);
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/ne_NP/Person.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/ne_NP/Person.php");
    }
}
