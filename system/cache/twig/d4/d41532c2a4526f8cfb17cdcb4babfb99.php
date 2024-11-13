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

/* library/instablebreachbrood.html.twig */
class __TwigTemplate_d0aa5d3e8018f8c4d78af8fa350dd17e extends \Twig\Template
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
        // line 1
        echo "<div style=\"position: relative; height: 15px; width: 100%;\"> <a style=\"float: right;\" href=\"?subtopic=creatures&race=instablesparkion\">next <img src=\"images/arrow_right.gif\" width=\"15\" height=\"11\" border=\"0\"/></a> <a style=\"position: absolute;\" href=\"?subtopic=creatures&race=insectoidworker\"><img src=\"images/arrow_left.gif\" width=\"15\" height=\"11\" border=\"0\"/> previous</a> <div style=\"position: absolute; width: 80%; margin-left: 10%; margin-right: 10%; text-align: center;\"><a href=\"?subtopic=creatures\"><img src=\"images/arrow_up.gif\" width=\"11\" height=\"15\" border=\"0\"/> back</a></div></div><div style=\"position: relative; top: 25px; clear: both; \"><div style=\"height: 64px; margin-bottom: 5px;\"> <h2 style=\"float: right;\">Instable Breach Broods</h2> <img src=\"images/library/instablebreachbrood.gif\"/></div><div style=\"margin-bottom: 35px; clear: both;\"> <p>The Instable Breach Brood is a weaker version of <a href=\"?subtopic=creatures&race=breachbrood\">Breach Broods</a>.</p> <p>Instable Breach Broods have 2200 hitpoints. They cannot be paralysed. Moreover, they are strong against death, energy, fire and ice damage. On the other hand, they are weak against earth damage. These creatures can neither be summoned nor convinced. In addition, they are able to sense invisible creatures.</p> <p>Instable Breach Broods yield 1100 experience points. They carry crystal bones, gold coins, plasma pearls, platinum coins and sometimes other items with them.</p> </div></div>";
    }

    public function getTemplateName()
    {
        return "library/instablebreachbrood.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "library/instablebreachbrood.html.twig", "/var/www/html/system/templates/library/instablebreachbrood.html.twig");
    }
}
