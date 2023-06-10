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

/* themes/custom/law/templates/layout/page.html.twig */
class __TwigTemplate_3f48e04204bfcce80afebe70b1810567 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 70
        echo "<div id=\"page-wrapper\">
  <div id=\"page\">
<!--Preloader-->
<div id=\"preloader\">
  <div id=\"pre-status\">
    <div class=\"preload-placeholder\"></div>
  </div>
</div>
<!--Navigation-->
<header id=\"menu\">
  <div class=\"navbar navbar-default navbar-fixed-top\">
    <div class=\"container\">
      <div class=\"container-fluid\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\"> <span class=\"sr-only\">Toggle navigation</span> <span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> </button>
          <a class=\"navbar-brand\" href=\"#menu\"><img src=\"images/Logo/01.png\" alt=\"\"></a> </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
          <ul class=\"nav navbar-nav\">
          
";
        // line 91
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 91), 91, $this->source), "html", null, true);
        echo "
      
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </div>
  </div>
</header>
<!--Slider-Start-->
<section id=\"slider\">
  <div id=\"home-carousel\" class=\"carousel slide\" data-ride=\"carousel\">
    <div class=\"carousel-inner\">
      <div class=\"item active\" style=\"background-image:url(images/Slider/01.jpg)\">
        <div class=\"carousel-caption container\">
          <div class=\"row\">
            <div class=\"col-md-7 col-sm-12 col-xs-12\">
              <h1>We Are Cosmix</h1>
              <h2>Creative Themes</h2>
              <p>Cosmix – A One Page Parallax, HTML5 and Responsive Template suitable for any creative business agency. Multiple pages also included in this theme with lots of CSS and JQuery animations</p>
            </div>
          </div>
        </div>
      </div>
      <div class=\"item\" style=\"background-image:url(images/Slider/02.jpg)\">
        <div class=\"carousel-caption container\">
          <div class=\"row\">
            <div class=\"col-md-7 col-sm-12 col-xs-12\">
              <h1>We Are Cosmix</h1>
              <h2>Creative Themes</h2>
              <p>Cosmix – A One Page Parallax, HTML5 and Responsive Template suitable for any creative business agency. Multiple pages layouts also in this theme with lots of CSS and JQuery animations</p>
            </div>
          </div>
        </div>
      </div>
      <div class=\"item\" style=\"background-image:url(images/Slider/03.jpg)\">
        <div class=\"carousel-caption container\">
          <div class=\"row\">
             <div class=\"col-md-7 col-sm-12 col-xs-12\">
              <h1>We Are Cosmix</h1>
              <h2>Creative Themes</h2>
              <p>Cosmix – A One Page Parallax, HTML5 and Responsive Template suitable for any creative business agency. Multiple page also included in this theme with lots of CSS and JQuery animations</p>
            </div>
          </div>
        </div>
      </div>
      <a class=\"home-carousel-left\" href=\"#home-carousel\" data-slide=\"prev\"><i class=\"fa fa-angle-left\"></i></a> <a class=\"home-carousel-right\" href=\"#home-carousel\" data-slide=\"next\"><i class=\"fa fa-angle-right\"></i></a> </div>
  </div>
  <!--/#home-carousel-->
</section>

    <div id=\"main-wrapper\" class=\"layout-main-wrapper clearfix\">
      ";
        // line 144
        $this->displayBlock('content', $context, $blocks);
        // line 158
        echo "    </div>

<!--About-Section-Start-->
<section id=\"about\">
  <div class=\"container\">
    <div class=\"col-md-8 col-md-offset-2\">
      <div class=\"heading\">
        <h2>ABOUT <span>US</span></h2>
        <div class=\"line\"></div>
        <p><span><strong>L</strong></span>orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
          et dolore magna aliqua. Ut enim ad minim veniam</p>
      </div>
    </div>
    <div class=\"row\">
      <div class=\"col-md-12 ab-sec\">
        <div class=\"col-md-6\">
          <h3 class=\"wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\"><span>W</span>e Are Creative And Awesome</h3>
          <p><span><strong>L</strong></span>orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.Lorem Ipsum is simply dummy text of the printing and typesetting industry. book. </p>
        </div>
        <div class=\"col-md-6 ab-sec-img wow fadeInUp\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\"><img src=\"images/Aboutus/01.jpg\" alt=\"\"> </div>
      </div>
    </div>
  </div>
</section>

<!--Team-Section-Start-->
<section id=\"team\">
  <div class=\"container\">
    <div class=\"col-md-8 col-md-offset-2\">
      <div class=\"heading\">
        <h2>OUR TE<span>AM</span></h2>
        <div class=\"line\"></div>
        <p><span><strong>L</strong></span>orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
          et dolore magna aliqua. Ut enim ad minim veniam</p>
      </div>
    </div>
    <div class=\"row\">
      <div class=\"col-md-3 col-sm-6 col-xs-12 team-main-sec wow slideInUp\" data-wow-duration=\"1s\" data-wow-delay=\".1s\">
        <div class=\"team-sec\">
          <div class=\"team-img\"> <img src=\"images/Team/01.jpg\" class=\"img-responsive\" alt=\"\">
            <div class=\"team-desc\">
              <h5>Julia Amanda</h5>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
              <ul class=\"team-social-icon\">
                <li><a href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Facebook\"><i class=\"fa fa-facebook-f\"></i></a></li>
                <li><a href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Twitter\"><i class=\"fa fa-twitter\"></i></a></li>
                <li><a href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Pinterest\"><i class=\"fa fa-pinterest-p\"></i></a></li>
                <li><a href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Instagram\"><i class=\"fa fa-instagram\"></i></a></li>
                <li><a href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Google-plus\"><i class=\"fa fa-google-plus\"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-md-3 col-sm-6 col-xs-12 team-main-sec wow slideInUp\" data-wow-duration=\"1s\" data-wow-delay=\".2s\">
        <div class=\"team-sec\">
          <div class=\"team-img\"> <img src=\"images/Team/02.jpg\" class=\"img-responsive\" alt=\"\">
            <div class=\"team-desc\">
              <h5>Merry Luis</h5>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
              <ul class=\"team-social-icon\">
                <li><a href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Facebook\"><i class=\"fa fa-facebook-f\"></i></a></li>
                <li><a href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Twitter\"><i class=\"fa fa-twitter\"></i></a></li>
                <li><a href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Pinterest\"><i class=\"fa fa-pinterest-p\"></i></a></li>
                <li><a href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Instagram\"><i class=\"fa fa-instagram\"></i></a></li>
                <li><a href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Google-plus\"><i class=\"fa fa-google-plus\"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-md-3 col-sm-6 col-xs-12 team-main-sec wow slideInUp\" data-wow-duration=\"1s\" data-wow-delay=\".3s\">
        <div class=\"team-sec\">
          <div class=\"team-img\"> <img src=\"images/Team/03.jpg\" class=\"img-responsive\" alt=\"\">
            <div class=\"team-desc\">
              <h5>Poll Astin</h5>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
              <ul class=\"team-social-icon\">
                <li><a href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Facebook\"><i class=\"fa fa-facebook-f\"></i></a></li>
                <li><a href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Twitter\"><i class=\"fa fa-twitter\"></i></a></li>
                <li><a href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Pinterest\"><i class=\"fa fa-pinterest-p\"></i></a></li>
                <li><a href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Instagram\"><i class=\"fa fa-instagram\"></i></a></li>
                <li><a href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Google-plus\"><i class=\"fa fa-google-plus\"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-md-3 col-sm-6 col-xs-12 team-main-sec wow slideInUp\" data-wow-duration=\"1s\" data-wow-delay=\".4s\">
        <div class=\"team-sec\">
          <div class=\"team-img\"> <img src=\"images/Team/04.jpg\" class=\"img-responsive\" alt=\"\">
            <div class=\"team-desc\">
              <h5>Janea Syria</h5>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
              <ul class=\"team-social-icon\">
                <li><a href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Facebook\"><i class=\"fa fa-facebook-f\"></i></a></li>
                <li><a href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Twitter\"><i class=\"fa fa-twitter\"></i></a></li>
                <li><a href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Pinterest\"><i class=\"fa fa-pinterest-p\"></i></a></li>
                <li><a href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Instagram\"><i class=\"fa fa-instagram\"></i></a></li>
                <li><a href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Google-plus\"><i class=\"fa fa-google-plus\"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--Contact-Section-Start-->
<section id=\"contact\">
  <div class=\"container\">
    <div class=\"col-md-8 col-md-offset-2\">
      <div class=\"heading\">
        <h2>CONTACT <span>US</span></h2>
        <div class=\"line\"></div>
        <p><span><strong>L</strong></span>orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
          et dolore magna aliqua. Ut enim ad minim veniam</p>
      </div>
    </div>
    <div class=\"text-center\">
      <div class=\"col-md-6 col-sm-6 contact-sec-1\">
        <h4>CONTACT IN<span>FO</span></h4>
        <ul class=\"contact-form\">
          <li><i class=\"fa fa-map-marker\"></i>
            <h6><strong>Address:</strong> No 123 , Wallstreet, India </h6>
          </li>
          <li><i class=\"fa fa-envelope\"></i>
            <h6><strong>Mail Us:</strong> <a href=\"#\">Info@yourdomain.com</a></h6>
          </li>
          <li><i class=\"fa fa-phone\"></i>
            <h6><strong>Phone:</strong> +91 123-456-7890 </h6>
          </li>
          <li><i class=\"fa fa-wechat\"></i>
            <h6><strong>Website:</strong> <a href=\"#\">www.Cosmix.com</a> </h6>
          </li>
        </ul>
      </div>
      <div class=\"col-md-6 col-sm-6\">
        <form id=\"main-contact-form\" name=\"contact-form\" method=\"post\" action=\"#\">
          <div class=\"row  wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
            <div class=\"col-sm-6\">
              <div class=\"form-group\">
                <input type=\"text\" name=\"name\" class=\"form-control\" placeholder=\"Name\" required=\"required\">
              </div>
            </div>
            <div class=\"col-sm-6\">
              <div class=\"form-group\">
                <input type=\"email\" name=\"email\" class=\"form-control\" placeholder=\"Email Address\" required=\"required\">
              </div>
            </div>
          </div>
          <div class=\"form-group\">
            <input type=\"text\" name=\"subject\" class=\"form-control\" placeholder=\"Subject\" required=\"required\">
          </div>
          <div class=\"form-group\">
            <textarea name=\"message\" id=\"message\" class=\"form-control\" rows=\"4\" placeholder=\"Enter your message\" required=\"required\"></textarea>
          </div>
          <a class=\"btn-send col-md-12 col-sm-12 col-xs-12\" href=\"#\">Send Now</a>
        </form>
      </div>
    </div>
  </div>
</section>
<footer id=\"footer\">
  <div class=\"bg-sec\">
    <div class=\"container\">
      <h2>LOOKING FORWARD TO <strong>HEARING </strong>FROM YOU!</h2>
    </div>
  </div>
</footer>
<footer id=\"footer-down\">
  <h2>Follow Us On</h2>
  <ul class=\"social-icon\">
    <li class=\"facebook hvr-pulse\"><a href=\"#\"><i class=\"fa fa-facebook-f\"></i></a></li>
    <li class=\"twitter hvr-pulse\"><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
    <li class=\"linkedin hvr-pulse\"><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
    <li class=\"google-plus hvr-pulse\"><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
    <li class=\"youtube hvr-pulse\"><a href=\"#\"><i class=\"fa fa-youtube\"></i></a></li>
    <li class=\"instagram hvr-pulse\"><a href=\"#\"><i class=\"fa fa-instagram\"></i></a></li>
    <li class=\"behance hvr-pulse\"><a href=\"#\"><i class=\"fa fa-behance\"></i></a></li>
  </ul>
  <p> &copy; Copyright 2016 Cosmix - Created By : <a href=\"http://templatestock.co\" target=\"_blank\">Template Stock</a> </p>
</footer>
  </div>
</div>


";
    }

    // line 144
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 145
        echo "        <div id=\"main\" class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 145, $this->source), "html", null, true);
        echo "\">
          ";
        // line 146
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 146), 146, $this->source), "html", null, true);
        echo "
          <div class=\"row row-offcanvas row-offcanvas-left clearfix\">
              <main";
        // line 148
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_attributes"] ?? null), 148, $this->source), "html", null, true);
        echo ">
                <section class=\"section\">
                  <a id=\"main-content\"></a>
                  ";
        // line 151
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 151), 151, $this->source), "html", null, true);
        echo "
                </section>
              </main>
           
          </div>
        </div>
      ";
    }

    public function getTemplateName()
    {
        return "themes/custom/law/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  333 => 151,  327 => 148,  322 => 146,  317 => 145,  313 => 144,  121 => 158,  119 => 144,  63 => 91,  40 => 70,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/law/templates/layout/page.html.twig", "/var/www/test.com/themes/custom/law/templates/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 144);
        static $filters = array("escape" => 91);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['block'],
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
