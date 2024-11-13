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

/* library/juvenilebashmu.html.twig */
class __TwigTemplate_492b11598121b1d27264903728b0822b extends \Twig\Template
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
        echo "<div style=\"position: relative; height: 15px; width: 100%;\"> <a style=\"float: right;\" href=\"?subtopic=creatures&race=killercaiman\">next <img src=\"images/arrow_right.gif\" width=\"15\" height=\"11\" border=\"0\"/></a> <a style=\"position: absolute;\" href=\"?subtopic=creatures&race=juggernaut\"><img src=\"images/arrow_left.gif\" width=\"15\" height=\"11\" border=\"0\"/> previous</a> <div style=\"position: absolute; width: 80%; margin-left: 10%; margin-right: 10%; text-align: center;\"><a href=\"?subtopic=creatures\"><img src=\"images/arrow_up.gif\" width=\"11\" height=\"15\" border=\"0\"/> back</a></div></div><div style=\"position: relative; top: 25px; clear: both; \"><div style=\"height: 64px; margin-bottom: 5px;\"> <h2 style=\"float: right;\">Juvenile Bashmus</h2> <img src=\"images/library/juvenilebashmu.gif\"/></div><div style=\"margin-bottom: 35px; clear: both;\"> <p>Juvenile Bashmu are the younger versions of <a href=\"?subtopic=creatures&race=bashmu\">Bashmus</a>.</p> <p>Juvenile Bashmus have 7500 hitpoints. They cannot be paralysed. Moreover, they are strong against death, earth and energy damage. On the other hand, they are weak against holy and ice damage. These creatures can neither be summoned nor convinced. In addition, they are able to sense invisible creatures.</p> <p>Juvenile Bashmus yield 4500 experience points. They carry great spirit potions, platinum coins, ultimate health potions and sometimes other items with them.</p> </div></div>";
    }

    public function getTemplateName()
    {
        return "library/juvenilebashmu.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "library/juvenilebashmu.html.twig", "/var/www/html/system/templates/library/juvenilebashmu.html.twig");
    }
}
