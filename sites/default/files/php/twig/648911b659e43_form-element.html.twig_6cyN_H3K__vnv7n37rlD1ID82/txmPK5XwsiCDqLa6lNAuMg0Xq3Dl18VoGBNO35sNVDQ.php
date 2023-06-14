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

/* themes/contrib/bootstrap_barrio/templates/form/form-element.html.twig */
class __TwigTemplate_79dd976b3539c9d46d80643ca9d91c3a extends \Twig\Template
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
        // line 47
        echo "
";
        // line 49
        $context["label_attributes"] = ((($context["label_attributes"] ?? null)) ? (($context["label_attributes"] ?? null)) : ($this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute()));
        // line 51
        echo "
";
        // line 52
        if ((($context["type"] ?? null) == "checkbox")) {
            // line 53
            echo "  ";
            if ((($context["customtype"] ?? null) == "custom")) {
                // line 54
                echo "    ";
                $context["wrapperclass"] = "custom-control custom-checkbox";
                // line 55
                echo "    ";
                $context["labelclass"] = "custom-control-label";
                // line 56
                echo "    ";
                $context["inputclass"] = "custom-control-input";
                // line 57
                echo "  ";
            } elseif ((($context["customtype"] ?? null) == "switch")) {
                // line 58
                echo "    ";
                $context["wrapperclass"] = "custom-control custom-switch";
                // line 59
                echo "    ";
                $context["labelclass"] = "custom-control-label";
                // line 60
                echo "    ";
                $context["inputclass"] = "custom-control-input";
                // line 61
                echo "  ";
            } else {
                // line 62
                echo "    ";
                $context["wrapperclass"] = "form-check";
                // line 63
                echo "    ";
                $context["labelclass"] = "form-check-label";
                // line 64
                echo "    ";
                $context["inputclass"] = "form-check-input";
                // line 65
                echo "  ";
            }
        }
        // line 67
        echo "
";
        // line 68
        if ((($context["type"] ?? null) == "radio")) {
            // line 69
            echo "  ";
            if ((($context["customtype"] ?? null) == "custom")) {
                // line 70
                echo "    ";
                $context["wrapperclass"] = "custom-control custom-radio";
                // line 71
                echo "    ";
                $context["labelclass"] = "custom-control-label";
                // line 72
                echo "    ";
                $context["inputclass"] = "custom-control-input";
                // line 73
                echo "  ";
            } else {
                // line 74
                echo "    ";
                $context["wrapperclass"] = "form-check";
                // line 75
                echo "    ";
                $context["labelclass"] = "form-check-label";
                // line 76
                echo "    ";
                $context["inputclass"] = "form-check-input";
                // line 77
                echo "  ";
            }
        }
        // line 79
        echo "
";
        // line 81
        $context["classes"] = [0 => "js-form-item", 1 => ("js-form-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 83
($context["type"] ?? null), 83, $this->source))), 2 => ((twig_in_filter(        // line 84
($context["type"] ?? null), [0 => "checkbox", 1 => "radio"])) ? (\Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["type"] ?? null), 84, $this->source))) : (("form-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["type"] ?? null), 84, $this->source))))), 3 => ((twig_in_filter(        // line 85
($context["type"] ?? null), [0 => "checkbox", 1 => "radio"])) ? (($context["wrapperclass"] ?? null)) : ("")), 4 => ("js-form-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 86
($context["name"] ?? null), 86, $this->source))), 5 => ("form-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 87
($context["name"] ?? null), 87, $this->source))), 6 => ((!twig_in_filter(        // line 88
($context["title_display"] ?? null), [0 => "after", 1 => "before"])) ? ("form-no-label") : ("")), 7 => (((        // line 89
($context["disabled"] ?? null) == "disabled")) ? ("disabled") : ("")), 8 => ((        // line 90
($context["errors"] ?? null)) ? ("has-error") : (""))];
        // line 93
        if ((($context["title_display"] ?? null) == "invisible")) {
            // line 94
            echo "  ";
            if (array_key_exists("labelclass", $context)) {
                // line 95
                echo "    ";
                $context["labelclass"] = ($this->sandbox->ensureToStringAllowed(($context["labelclass"] ?? null), 95, $this->source) . " visually-hidden");
                // line 96
                echo "  ";
            } else {
                // line 97
                echo "    ";
                $context["labelclass"] = "visually-hidden";
                // line 98
                echo "  ";
            }
        }
        // line 101
        $context["description_classes"] = [0 => "description", 1 => "text-muted", 2 => (((        // line 104
($context["description_display"] ?? null) == "invisible")) ? ("sr-only") : (""))];
        // line 107
        if (twig_in_filter(($context["type"] ?? null), [0 => "checkbox", 1 => "radio"])) {
            // line 108
            echo "  <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 108), 108, $this->source), "html", null, true);
            echo ">
    ";
            // line 109
            if ( !twig_test_empty(($context["prefix"] ?? null))) {
                // line 110
                echo "      <span class=\"field-prefix\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null), 110, $this->source), "html", null, true);
                echo "</span>
    ";
            }
            // line 112
            echo "    ";
            if (((($context["description_display"] ?? null) == "before") && twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 112))) {
                // line 113
                echo "      <div";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 113), 113, $this->source), "html", null, true);
                echo ">
        ";
                // line 114
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 114), 114, $this->source), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 117
            echo "    ";
            if (twig_in_filter(($context["label_display"] ?? null), [0 => "before", 1 => "invisible"])) {
                // line 118
                echo "      <label ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["label_attributes"] ?? null), "addClass", [0 => ($context["labelclass"] ?? null)], "method", false, false, true, 118), "setAttribute", [0 => "for", 1 => twig_get_attribute($this->env, $this->source, ($context["input_attributes"] ?? null), "id", [], "any", false, false, true, 118)], "method", false, false, true, 118), 118, $this->source), "html", null, true);
                echo ">
        ";
                // line 119
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["input_title"] ?? null), 119, $this->source));
                echo "
      </label>
    ";
            }
            // line 122
            echo "    <input";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["input_attributes"] ?? null), "addClass", [0 => ($context["inputclass"] ?? null)], "method", false, false, true, 122), 122, $this->source), "html", null, true);
            echo ">
    ";
            // line 123
            if ((($context["label_display"] ?? null) == "after")) {
                // line 124
                echo "      <label ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["label_attributes"] ?? null), "addClass", [0 => ($context["labelclass"] ?? null)], "method", false, false, true, 124), "setAttribute", [0 => "for", 1 => twig_get_attribute($this->env, $this->source, ($context["input_attributes"] ?? null), "id", [], "any", false, false, true, 124)], "method", false, false, true, 124), 124, $this->source), "html", null, true);
                echo ">
        ";
                // line 125
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["input_title"] ?? null), 125, $this->source));
                echo "
      </label>
    ";
            }
            // line 128
            echo "    ";
            if ( !twig_test_empty(($context["suffix"] ?? null))) {
                // line 129
                echo "      <span class=\"field-suffix\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suffix"] ?? null), 129, $this->source), "html", null, true);
                echo "</span>
    ";
            }
            // line 131
            echo "    ";
            if (($context["errors"] ?? null)) {
                // line 132
                echo "      <div class=\"invalid-feedback\">
        ";
                // line 133
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 133, $this->source), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 136
            echo "    ";
            if ((twig_in_filter(($context["description_display"] ?? null), [0 => "after", 1 => "invisible"]) && twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 136))) {
                // line 137
                echo "      <small";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 137), "addClass", [0 => ($context["description_classes"] ?? null)], "method", false, false, true, 137), 137, $this->source), "html", null, true);
                echo ">
        ";
                // line 138
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 138), 138, $this->source), "html", null, true);
                echo "
      </small>
    ";
            }
            // line 141
            echo "  </div>
";
        } else {
            // line 143
            echo "  <fieldset";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null), 1 => "form-group"], "method", false, false, true, 143), 143, $this->source), "html", null, true);
            echo ">
    ";
            // line 144
            if (twig_in_filter(($context["label_display"] ?? null), [0 => "before", 1 => "invisible"])) {
                // line 145
                echo "      ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 145, $this->source), "html", null, true);
                echo "
    ";
            }
            // line 147
            echo "    ";
            if (( !twig_test_empty(($context["prefix"] ?? null)) ||  !twig_test_empty(($context["suffix"] ?? null)))) {
                // line 148
                echo "      <div class=\"input-group\">
    ";
            }
            // line 150
            echo "    ";
            if ( !twig_test_empty(($context["prefix"] ?? null))) {
                // line 151
                echo "      <div class=\"input-group-prepend\">
        <span class=\"field-prefix input-group-text\">";
                // line 152
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null), 152, $this->source), "html", null, true);
                echo "</span>
      </div>
    ";
            }
            // line 155
            echo "    ";
            if (((($context["description_display"] ?? null) == "before") && twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 155))) {
                // line 156
                echo "      <div";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 156), 156, $this->source), "html", null, true);
                echo ">
        ";
                // line 157
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 157), 157, $this->source), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 160
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 160, $this->source), "html", null, true);
            echo "
    ";
            // line 161
            if ( !twig_test_empty(($context["suffix"] ?? null))) {
                // line 162
                echo "      <div class=\"input-group-append\">
        <span class=\"field-suffix input-group-text\">";
                // line 163
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suffix"] ?? null), 163, $this->source), "html", null, true);
                echo "</span>
      </div>
    ";
            }
            // line 166
            echo "    ";
            if (( !twig_test_empty(($context["prefix"] ?? null)) ||  !twig_test_empty(($context["suffix"] ?? null)))) {
                // line 167
                echo "      </div>
    ";
            }
            // line 169
            echo "    ";
            if ((($context["label_display"] ?? null) == "after")) {
                // line 170
                echo "      ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 170, $this->source), "html", null, true);
                echo "
    ";
            }
            // line 172
            echo "    ";
            if (($context["errors"] ?? null)) {
                // line 173
                echo "      <div class=\"invalid-feedback\">
        ";
                // line 174
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 174, $this->source), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 177
            echo "    ";
            if ((twig_in_filter(($context["description_display"] ?? null), [0 => "after", 1 => "invisible"]) && twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 177))) {
                // line 178
                echo "      <small";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 178), "addClass", [0 => ($context["description_classes"] ?? null)], "method", false, false, true, 178), 178, $this->source), "html", null, true);
                echo ">
        ";
                // line 179
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 179), 179, $this->source), "html", null, true);
                echo "
      </small>
    ";
            }
            // line 182
            echo "  </fieldset>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/bootstrap_barrio/templates/form/form-element.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  360 => 182,  354 => 179,  349 => 178,  346 => 177,  340 => 174,  337 => 173,  334 => 172,  328 => 170,  325 => 169,  321 => 167,  318 => 166,  312 => 163,  309 => 162,  307 => 161,  302 => 160,  296 => 157,  291 => 156,  288 => 155,  282 => 152,  279 => 151,  276 => 150,  272 => 148,  269 => 147,  263 => 145,  261 => 144,  256 => 143,  252 => 141,  246 => 138,  241 => 137,  238 => 136,  232 => 133,  229 => 132,  226 => 131,  220 => 129,  217 => 128,  211 => 125,  206 => 124,  204 => 123,  199 => 122,  193 => 119,  188 => 118,  185 => 117,  179 => 114,  174 => 113,  171 => 112,  165 => 110,  163 => 109,  158 => 108,  156 => 107,  154 => 104,  153 => 101,  149 => 98,  146 => 97,  143 => 96,  140 => 95,  137 => 94,  135 => 93,  133 => 90,  132 => 89,  131 => 88,  130 => 87,  129 => 86,  128 => 85,  127 => 84,  126 => 83,  125 => 81,  122 => 79,  118 => 77,  115 => 76,  112 => 75,  109 => 74,  106 => 73,  103 => 72,  100 => 71,  97 => 70,  94 => 69,  92 => 68,  89 => 67,  85 => 65,  82 => 64,  79 => 63,  76 => 62,  73 => 61,  70 => 60,  67 => 59,  64 => 58,  61 => 57,  58 => 56,  55 => 55,  52 => 54,  49 => 53,  47 => 52,  44 => 51,  42 => 49,  39 => 47,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/bootstrap_barrio/templates/form/form-element.html.twig", "/var/www/mlp.com/themes/contrib/bootstrap_barrio/templates/form/form-element.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 49, "if" => 52);
        static $filters = array("clean_class" => 83, "escape" => 108, "raw" => 119);
        static $functions = array("create_attribute" => 49);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape', 'raw'],
                ['create_attribute']
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
