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

/* modules/custom/law_module/templates/reports.html.twig */
class __TwigTemplate_612c313697e2a3d32bd2b4bab79e24f9 extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<style>

.my-card
{
    position:absolute;
    left:40%;
    top:-20px;
    border-radius:50%;
}

</style>
<link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\"></script>
<script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css
\">

<div class=\"jumbotron\">
<div class=\"row w-100\">
        <div class=\"col-md-3\">
            <div class=\"card border-info mx-sm-1 p-3\">
                <div class=\"text-warning text-center mt-3\"><h4>الاحكام من الدرجه الاولى </h4></div>
                <div class=\"text-warning text-center mt-2\"><h1>";
        // line 25
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["PrimaryJudgments"] ?? null), 25, $this->source), "html", null, true);
        echo "</h1></div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"card border-success mx-sm-1 p-3\">
                <div class=\"text-success text-center mt-3\"><h4>عدد قضايا الوقف </h4></div>
                <div class=\"text-success text-center mt-2\"><h1>";
        // line 31
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["poor"] ?? null), 31, $this->source), "html", null, true);
        echo "</h1></div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"card border-danger mx-sm-1 p-3\">
                <div class=\"text-danger text-center mt-3\"><h4>عدد قضايا العزل </h4></div>
                <div class=\"text-danger text-center mt-2\"><h1>";
        // line 37
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["superintendent"] ?? null), 37, $this->source), "html", null, true);
        echo "</h1></div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"card border-warning mx-sm-1 p-3\">
                <div class=\"text-info text-center mt-3\"><h4>أجمالى عدد البطاقات </h4></div>
                <div class=\"text-info text-center mt-2\"><h1>";
        // line 43
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["cardNum"] ?? null), 43, $this->source), "html", null, true);
        echo "</h1></div>
            </div>
        </div>
     </div>
     <br>
     <br>
<div class=\"row w-100\">
        ";
        // line 56
        echo "        <div class=\"col-md-3\">
            <div class=\"card border-success mx-sm-1 p-3\">
                <div class=\"text-success text-center mt-3\"><h4>الاحكام من عليا التماس</h4></div>
                <div class=\"text-success text-center mt-2\"><h1>";
        // line 59
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["supremeJudgments"] ?? null), 59, $this->source), "html", null, true);
        echo "</h1></div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"card border-danger mx-sm-1 p-3\">
                <div class=\"text-danger text-center mt-3\"><h4> الاحكام من عليا نقض</h4></div>
                <div class=\"text-danger text-center mt-2\"><h1>";
        // line 65
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["vetoJudgments"] ?? null), 65, $this->source), "html", null, true);
        echo "</h1></div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"card border-warning mx-sm-1 p-3\">
                <div class=\"text-warning text-center mt-3\"><h4>الاحكام من الاستئناف </h4></div>
                <div class=\"text-warning text-center mt-2\"><h1>";
        // line 71
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["ResumptionJudgments"] ?? null), 71, $this->source), "html", null, true);
        echo "</h1></div>
            </div>
        </div>
     </div>     
</div>";
    }

    public function getTemplateName()
    {
        return "modules/custom/law_module/templates/reports.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 71,  116 => 65,  107 => 59,  102 => 56,  92 => 43,  83 => 37,  74 => 31,  65 => 25,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>

.my-card
{
    position:absolute;
    left:40%;
    top:-20px;
    border-radius:50%;
}

</style>
<link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\"></script>
<script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css
\">

<div class=\"jumbotron\">
<div class=\"row w-100\">
        <div class=\"col-md-3\">
            <div class=\"card border-info mx-sm-1 p-3\">
                <div class=\"text-warning text-center mt-3\"><h4>الاحكام من الدرجه الاولى </h4></div>
                <div class=\"text-warning text-center mt-2\"><h1>{{PrimaryJudgments}}</h1></div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"card border-success mx-sm-1 p-3\">
                <div class=\"text-success text-center mt-3\"><h4>عدد قضايا الوقف </h4></div>
                <div class=\"text-success text-center mt-2\"><h1>{{poor}}</h1></div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"card border-danger mx-sm-1 p-3\">
                <div class=\"text-danger text-center mt-3\"><h4>عدد قضايا العزل </h4></div>
                <div class=\"text-danger text-center mt-2\"><h1>{{superintendent}}</h1></div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"card border-warning mx-sm-1 p-3\">
                <div class=\"text-info text-center mt-3\"><h4>أجمالى عدد البطاقات </h4></div>
                <div class=\"text-info text-center mt-2\"><h1>{{cardNum}}</h1></div>
            </div>
        </div>
     </div>
     <br>
     <br>
<div class=\"row w-100\">
        {# <div class=\"col-md-3\">
            <div class=\"card border-info mx-sm-1 p-3\">
                <div class=\"text-info text-center mt-3\"><h4>أجمالى عدد البطاقات </h4></div>
                <div class=\"text-info text-center mt-2\"><h1>{{cardNum}}</h1></div>
            </div>
        </div> #}
        <div class=\"col-md-3\">
            <div class=\"card border-success mx-sm-1 p-3\">
                <div class=\"text-success text-center mt-3\"><h4>الاحكام من عليا التماس</h4></div>
                <div class=\"text-success text-center mt-2\"><h1>{{supremeJudgments}}</h1></div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"card border-danger mx-sm-1 p-3\">
                <div class=\"text-danger text-center mt-3\"><h4> الاحكام من عليا نقض</h4></div>
                <div class=\"text-danger text-center mt-2\"><h1>{{vetoJudgments}}</h1></div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"card border-warning mx-sm-1 p-3\">
                <div class=\"text-warning text-center mt-3\"><h4>الاحكام من الاستئناف </h4></div>
                <div class=\"text-warning text-center mt-2\"><h1>{{ResumptionJudgments}}</h1></div>
            </div>
        </div>
     </div>     
</div>", "modules/custom/law_module/templates/reports.html.twig", "/var/www/test.com/modules/custom/law_module/templates/reports.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 25);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
