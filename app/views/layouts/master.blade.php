<!doctype html>
<html>
<head>
    <title>OurShop</title></head>
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>
<script src="{{asset('js/jquery.js')}}"></script>
<body>
<a class="sr-only" href="#content">Skip to main content</a>

<!-- Docs master nav -->
<header class="navbar navbar-inverse navbar-fixed-top bs-docs-nav" role="banner">

<div class="navbar-header">
    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a target="_blank" href="#" class="navbar-brand">Bootstrap</a>
</div>
<nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
<ul class="nav navbar-nav">
<li class="active">
    <a class="dropdown-toggle" data-toggle="dropdown" href="getting-started.html">Getting started <b class="caret"></b></a>
    <ul class="dropdown-menu">

        <li>
            <a href="getting-started.html#download">Download Bootstrap</a>
            <ul class="nav">
                <li class=""><a href="getting-started.html#download-compiled">Compiled CSS, JS, and fonts</a></li>
                <li class=""><a href="getting-started.html#download-additional">Additional downloads</a></li>
                <li class=""><a href="getting-started.html#download-cdn">Bootstrap CDN</a></li>
            </ul>
        </li>
        <li class="">
            <a href="getting-started.html#whats-included">What's included</a>
        </li>
        <li class="">
            <a href="getting-started.html#template">Basic template</a>
        </li>
        <li class="">
            <a href="getting-started.html#examples">Examples</a>
        </li>
        <li class="">
            <a href="getting-started.html#disable-responsive">Disabling responsiveness</a>
        </li>
        <li class="">
            <a href="getting-started.html#migration">Migrating from 2.x to 3.0</a>
            <ul class="nav">
                <li class=""><a href="getting-started.html#migration-classes">Major class changes</a></li>
                <li><a href="getting-started.html#migration-new">What's new</a></li>
                <li><a href="getting-started.html#migration-dropped">What's removed</a></li>
                <li><a href="getting-started.html#migration-notes">Additional notes</a></li>
            </ul>
        </li>
        <li>
            <a href="getting-started.html#browsers">Browser support</a>
        </li>
        <li>
            <a href="getting-started.html#third-parties">Third party support</a>
        </li>
        <li>
            <a href="getting-started.html#accessibility">Accessibility</a>
        </li>
        <li>
            <a href="getting-started.html#license-faqs">License FAQs</a>
        </li>
        <li>
            <a href="getting-started.html#customizing">Customizing Bootstrap</a>
        </li>

    </ul>

</li>
<li>

    <a href="css.html" class="dropdown-toggle" data-toggle="dropdown">CSS <b class="caret"></b></a>
    <ul class="dropdown-menu">


        <li>
            <a href="css.html#overview">Overview</a>
            <ul class="nav">
                <li><a href="css.html#overview-doctype">HTML5 doctype</a></li>
                <li><a href="css.html#overview-mobile">Mobile first</a></li>
                <li><a href="css.html#overview-responsive-images">Responsive images</a></li>
                <li><a href="css.html#overview-type-links">Typography and links</a></li>
                <li><a href="css.html#overview-normalize">Normalize</a></li>
                <li><a href="css.html#overview-container">Containers</a></li>
            </ul>
        </li>
        <li>
            <a href="css.html#grid">Grid system</a>
            <ul class="nav">
                <li><a href="css.html#grid-intro">Introduction</a></li>
                <li><a href="css.html#grid-media-queries">Media queries</a></li>
                <li><a href="css.html#grid-options">Grid options</a></li>
                <li><a href="css.html#grid-example-basic">Ex: Stacked-to-horizonal</a></li>
                <li><a href="css.html#grid-example-mixed">Ex: Mobile and desktops</a></li>
                <li><a href="css.html#grid-example-mixed-complete">Ex: Mobile, tablet, desktops</a></li>
                <li><a href="css.html#grid-responsive-resets">Responsive column resets</a></li>
                <li><a href="css.html#grid-offsetting">Offsetting columns</a></li>
                <li><a href="css.html#grid-nesting">Nesting columns</a></li>
                <li><a href="css.html#grid-column-ordering">Column ordering</a></li>
                <li><a href="css.html#grid-less">LESS mixins and variables</a></li>
            </ul>
        </li>
        <li>
            <a href="css.html#type">Typography</a>
            <ul class="nav">
                <li><a href="css.html#type-headings">Headings</a></li>
                <li><a href="css.html#type-body-copy">Body copy</a></li>
                <li><a href="css.html#type-emphasis">Emphasis</a></li>
                <li><a href="css.html#type-abbreviations">Abbreviations</a></li>
                <li><a href="css.html#type-addresses">Addresses</a></li>
                <li><a href="css.html#type-blockquotes">Blockquotes</a></li>
                <li><a href="css.html#type-lists">Lists</a></li>
            </ul>
        </li>
        <li><a href="css.html#code">Code</a></li>
        <li>
            <a href="css.html#tables">Tables</a>
            <ul class="nav">
                <li><a href="css.html#tables-example">Basic example</a></li>
                <li><a href="css.html#tables-striped">Striped rows</a></li>
                <li><a href="css.html#tables-bordered">Bordered table</a></li>
                <li><a href="css.html#tables-hover-rows">Hover rows</a></li>
                <li><a href="css.html#tables-condensed">Condensed table</a></li>
                <li><a href="css.html#tables-contextual-classes">Contextual classes</a></li>
                <li><a href="css.html#tables-responsive">Responsive tables</a></li>
            </ul>
        </li>
        <li>
            <a href="css.html#forms">Forms</a>
            <ul class="nav">
                <li><a href="css.html#forms-example">Basic example</a></li>
                <li><a href="css.html#forms-inline">Inline form</a></li>
                <li><a href="css.html#forms-horizontal">Horizontal form</a></li>
                <li><a href="css.html#forms-controls">Supported controls</a></li>
                <li><a href="css.html#forms-controls-static">Static control</a></li>
                <li><a href="css.html#forms-control-states">Control states</a></li>
                <li><a href="css.html#forms-control-sizes">Control sizing</a></li>
                <li><a href="css.html#forms-help-text">Help text</a></li>
            </ul>
        </li>
        <li>
            <a href="css.html#buttons">Buttons</a>
            <ul class="nav">
                <li><a href="css.html#buttons-options">Options</a></li>
                <li><a href="css.html#buttons-sizes">Sizes</a></li>
                <li><a href="css.html#buttons-active">Active state</a></li>
                <li><a href="css.html#buttons-disabled">Disabled state</a></li>
                <li><a href="css.html#buttons-tags">Button tags</a></li>
            </ul>
        </li>
        <li>
            <a href="css.html#images">Images</a>
        </li>
        <li>
            <a href="css.html#helper-classes">Helper classes</a>
            <ul class="nav">
                <li><a href="css.html#helper-classes-close">Close icon</a></li>
                <li><a href="css.html#helper-classes-carets">Carets</a></li>
                <li><a href="css.html#helper-classes-floats">Quick floats</a></li>
                <li><a href="css.html#helper-classes-center">Center content blocks</a></li>
                <li><a href="css.html#helper-classes-clearfix">Clearfix</a></li>
                <li><a href="css.html#helper-classes-show-hide">Showing and hiding content</a></li>
                <li><a href="css.html#helper-classes-screen-readers">Screen reader content</a></li>
                <li><a href="css.html#helper-classes-image-replacement">Image replacement</a></li>
            </ul>
        </li>
        <li>
            <a href="css.html#responsive-utilities">Responsive utilities</a>
            <ul class="nav">
                <li><a href="css.html#responsive-utilities-classes">Available classes</a></li>
                <li><a href="css.html#responsive-utilities-print">Print classes</a></li>
                <li><a href="css.html#responsive-utilities-tests">Test cases</a></li>
            </ul>
        </li>


    </ul>
</li>

<li>

    <a href="components.html" class="dropdown-toggle" data-toggle="dropdown">Components <b class="caret"></b></a>
    <ul class="dropdown-menu">


        <li>
            <a href="components.html#glyphicons">Glyphicons</a>
            <ul class="nav">
                <li><a href="components.html#glyphicons-glyphs">Available glyphs</a></li>
                <li><a href="components.html#glyphicons-how-to-use">How to use</a></li>
                <li><a href="components.html#glyphicons-examples">Examples</a></li>
            </ul>
        </li>
        <li>
            <a href="components.html#dropdowns">Dropdowns</a>
            <ul class="nav">
                <li><a href="components.html#dropdowns-example">Example</a></li>
                <li><a href="components.html#dropdowns-alignment">Alignment options</a></li>
                <li><a href="components.html#dropdowns-headers">Headers</a></li>
                <li><a href="components.html#dropdowns-disabled">Disabled menu items</a></li>
            </ul>
        </li>
        <li>
            <a href="components.html#btn-groups">Button groups</a>
            <ul class="nav">
                <li><a href="components.html#btn-groups-single">Basic example</a></li>
                <li><a href="components.html#btn-groups-toolbar">Button toolbar</a></li>
                <li><a href="components.html#btn-groups-sizing">Sizing</a></li>
                <li><a href="components.html#btn-groups-nested">Nesting</a></li>
                <li><a href="components.html#btn-groups-vertical">Vertical variation</a></li>
                <li><a href="components.html#btn-groups-justified">Justified link variation</a></li>
            </ul>
        </li>
        <li>
            <a href="components.html#btn-dropdowns">Button dropdowns</a>
            <ul class="nav">
                <li><a href="components.html#btn-dropdowns-single">Single button dropdowns</a></li>
                <li><a href="components.html#btn-dropdowns-split">Split button dropdowns</a></li>
                <li><a href="components.html#btn-dropdowns-sizing">Sizing</a></li>
                <li><a href="components.html#btn-dropdowns-dropup">Dropup variation</a></li>
            </ul>
        </li>
        <li>
            <a href="components.html#input-groups">Input groups</a>
            <ul class="nav">
                <li><a href="components.html#input-groups-basic">Basic example</a></li>
                <li><a href="components.html#input-groups-sizing">Sizing</a></li>
                <li><a href="components.html#input-groups-checkboxes-radios">Checkbox and radios addons</a></li>
                <li><a href="components.html#input-groups-buttons">Button addons</a></li>
                <li><a href="components.html#input-groups-buttons-dropdowns">Buttons with dropdowns</a></li>
                <li><a href="components.html#input-groups-buttons-segmented">Segmented buttons</a></li>
            </ul>
        </li>
        <li>
            <a href="components.html#nav">Navs</a>
            <ul class="nav">
                <li><a href="components.html#nav-tabs">Tabs</a></li>
                <li><a href="components.html#nav-pills">Pills</a></li>
                <li><a href="components.html#nav-justified">Justified nav</a></li>
                <li><a href="components.html#nav-disabled-links">Disabled links</a></li>
                <li><a href="components.html#nav-dropdowns">Using dropdowns</a></li>
            </ul>
        </li>
        <li>
            <a href="components.html#navbar">Navbar</a>
            <ul class="nav">
                <li><a href="components.html#navbar-default">Default navbar</a></li>
                <li><a href="components.html#navbar-forms">Forms</a></li>
                <li><a href="components.html#navbar-buttons">Buttons</a></li>
                <li><a href="components.html#navbar-text">Text</a></li>
                <li><a href="components.html#navbar-links">Non-nav links</a></li>
                <li><a href="components.html#navbar-component-alignment">Component alignment</a></li>
                <li><a href="components.html#navbar-fixed-top">Fixed to top</a></li>
                <li><a href="components.html#navbar-fixed-bottom">Fixed to bottom</a></li>
                <li><a href="components.html#navbar-static-top">Static top</a></li>
                <li><a href="components.html#navbar-inverted">Inverted navbar</a></li>
            </ul>
        </li>
        <li><a href="components.html#breadcrumbs">Breadcrumbs</a></li>
        <li>
            <a href="components.html#pagination">Pagination</a>
            <ul class="nav">
                <li><a href="components.html#pagination-default">Default pagination</a></li>
                <li><a href="components.html#pagination-pager">Pager</a></li>
            </ul>
        </li>
        <li><a href="components.html#labels">Labels</a></li>
        <li><a href="components.html#badges">Badges</a></li>
        <li><a href="components.html#jumbotron">Jumbotron</a></li>
        <li><a href="components.html#page-header">Page header</a></li>
        <li>
            <a href="components.html#thumbnails">Thumbnails</a>
            <ul class="nav">
                <li><a href="components.html#thumbnails-default">Default example</a></li>
                <li><a href="components.html#thumbnails-custom-content">Custom content</a></li>
            </ul>
        </li>
        <li>
            <a href="components.html#alerts">Alerts</a>
            <ul class="nav">
                <li><a href="components.html#alerts-examples">Examples</a></li>
                <li><a href="components.html#alerts-dismissable">Dismissable alerts</a></li>
                <li><a href="components.html#alerts-links">Links in alerts</a></li>
            </ul>
        </li>
        <li>
            <a href="components.html#progress">Progress bars</a>
            <ul class="nav">
                <li><a href="components.html#progress-basic">Basic example</a></li>
                <li><a href="components.html#progress-alternatives">Contextual alternatives</a></li>
                <li><a href="components.html#progress-striped">Striped</a></li>
                <li><a href="components.html#progress-animated">Animated</a></li>
                <li><a href="components.html#progress-stacked">Stacked</a></li>
            </ul>
        </li>
        <li>
            <a href="components.html#media">Media object</a>
            <ul class="nav">
                <li><a href="components.html#media-default">Default media</a></li>
                <li><a href="components.html#media-list">Media list</a></li>
            </ul>
        </li>
        <li>
            <a href="components.html#list-group">List group</a>
            <ul class="nav">
                <li><a href="components.html#list-group-basic">Basic example</a></li>
                <li><a href="components.html#list-group-badges">Badges</a></li>
                <li><a href="components.html#list-group-linked">Linked items</a></li>
                <li><a href="components.html#list-group-custom-content">Custom content</a></li>
            </ul>
        </li>
        <li>
            <a href="components.html#panels">Panels</a>
            <ul class="nav">
                <li><a href="components.html#panels-basic">Basic example</a></li>
                <li><a href="components.html#panels-heading">Panel with heading</a></li>
                <li><a href="components.html#panels-alternatives">Contextual alternatives</a></li>
                <li><a href="components.html#panels-tables">With tables</a>
                </li><li><a href="components.html#panels-list-group">With list groups</a>
                </li></ul>
        </li>
        <li><a href="components.html#wells">Wells</a></li>


    </ul>
</li>

<li>

    <a href="javascript.html" class="dropdown-toggle" data-toggle="dropdown">JavaScript <b class="caret"></b></a>
    <ul class="dropdown-menu">


        <li>
            <a href="javascript.html#js-overview">Overview</a>
            <ul class="nav">
                <li><a href="javascript.html#js-individual-compiled">Individual or compiled</a></li>
                <li><a href="javascript.html#js-data-attrs">Data attributes</a></li>
                <li><a href="javascript.html#js-programmatic-api">Programmatic API</a></li>
                <li><a href="javascript.html#js-noconflict">No conflict</a></li>
                <li><a href="javascript.html#js-events">Events</a></li>
            </ul>
        </li>
        <li><a href="javascript.html#transitions">Transitions</a></li>
        <li>
            <a href="javascript.html#modals">Modal</a>
            <ul class="nav">
                <li><a href="javascript.html#modals-examples">Examples</a></li>
                <li><a href="javascript.html#modals-usage">Usage</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript.html#dropdowns">Dropdown</a>
            <ul class="nav">
                <li><a href="javascript.html#dropdowns-examples">Examples</a></li>
                <li><a href="javascript.html#dropdowns-usage">Usage</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript.html#scrollspy">Scrollspy</a>
            <ul class="nav">
                <li><a href="javascript.html#scrollspy-examples">Examples</a></li>
                <li><a href="javascript.html#scrollspy-usage">Usage</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript.html#tabs">Tab</a>
            <ul class="nav">
                <li><a href="javascript.html#tabs-examples">Examples</a></li>
                <li><a href="javascript.html#tabs-usage">Usage</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript.html#tooltips">Tooltip</a>
            <ul class="nav">
                <li><a href="javascript.html#tooltips-examples">Examples</a></li>
                <li><a href="javascript.html#tooltips-usage">Usage</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript.html#popovers">Popover</a>
            <ul class="nav">
                <li><a href="javascript.html#popovers-examples">Examples</a></li>
                <li><a href="javascript.html#popovers-usage">Usage</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript.html#alerts">Alert</a>
            <ul class="nav">
                <li><a href="javascript.html#alerts-examples">Examples</a></li>
                <li><a href="javascript.html#alerts-usage">Usage</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript.html#buttons">Button</a>
            <ul class="nav">
                <li><a href="javascript.html#buttons-examples">Examples</a></li>
                <li><a href="javascript.html#buttons-usage">Usage</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript.html#collapse">Collapse</a>
            <ul class="nav">
                <li><a href="javascript.html#collapse-examples">Examples</a></li>
                <li><a href="javascript.html#collapse-usage">Usage</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript.html#carousel">Carousel</a>
            <ul class="nav">
                <li><a href="javascript.html#carousel-examples">Examples</a></li>
                <li><a href="javascript.html#carousel-usage">Usage</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript.html#affix">Affix</a>
            <ul class="nav">
                <li><a href="javascript.html#affix-examples">Examples</a></li>
                <li><a href="javascript.html#affix-usage">Usage</a></li>
            </ul>
        </li>



    </ul>
</li>

<li>

    <a href="customize.html" class="dropdown-toggle" data-toggle="dropdown">Customize <b class="caret"></b></a>
    <ul class="dropdown-menu">

        <li>
            <a href="customize.html#less">LESS components</a>
        </li>
        <li>
            <a href="customize.html#plugins">jQuery plugins</a>
        </li>
        <li>
            <a href="customize.html#less-variables">LESS variables</a>
            <ul class="nav">
                <li><a href="customize.html#variables-basics">Basics</a></li>
                <li><a href="customize.html#variables-buttons">Buttons</a></li>
                <li><a href="customize.html#variables-form-states">Form states</a></li>
                <li><a href="customize.html#variables-alerts">Alerts</a></li>
                <li><a href="customize.html#variables-navbar">Navbar</a></li>
                <li><a href="customize.html#variables-nav">Nav</a></li>
                <li><a href="customize.html#variables-tables">Tables</a></li>
                <li><a href="customize.html#variables-forms">Forms</a></li>
                <li><a href="customize.html#variables-dropdowns">Dropdowns</a></li>
                <li><a href="customize.html#variables-panels-wells">Panels and wells</a></li>
                <li><a href="customize.html#variables-accordion">Accordion</a></li>
                <li><a href="customize.html#variables-badges">Badges</a></li>
                <li><a href="customize.html#variables-breadcrumbs">Breadcrumbs</a></li>
                <li><a href="customize.html#variables-jumbotron">Jumbotron</a></li>
                <li><a href="customize.html#variables-modals">Modals</a></li>
                <li><a href="customize.html#variables-carousel">Carousel</a></li>
                <li><a href="customize.html#variables-list-group">List group</a></li>
                <li><a href="customize.html#variables-thumbnails">Thumbnails</a></li>
                <li><a href="customize.html#variables-progress">Progress bars</a></li>
                <li><a href="customize.html#variables-pagination">Pagination</a></li>
                <li><a href="customize.html#variables-pager">Pager</a></li>
                <li><a href="customize.html#variables-labels">Labels</a></li>
                <li><a href="customize.html#variables-tooltips-popovers">Tooltips and popovers</a></li>
                <li><a href="customize.html#variables-close">Close button</a></li>
                <li><a href="customize.html#variables-type">Type</a></li>
                <li><a href="customize.html#variables-other">Other</a></li>
            </ul>
        </li>
        <li>
            <a href="customize.html#download">Download</a>
        </li>

    </ul>

</li>
</ul>
<ul class="nav navbar-nav navbar-right">

    <li>
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">About <b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li><a target="_blank" href="http://getbootstrap.com/about">About Bootstrap</a></li>
            <li><a target="_blank" href="http://www.chesteralan.com/about">About This Extension</a></li>

        </ul>

    </li>

</ul>
</nav>

</header>


<!-- Docs page layout -->
<div class="bs-header" id="content">
    <div class="container">
        <h1>Getting started</h1>
        <p>An overview of Bootstrap, how to download and use, basic templates and examples, and more.</p>

    </div>
</div>

<!-- Callout for the old docs link -->
<div class="bs-old-docs">
    <div class="container">
        <strong>
            <a target="_blank" href="http://getbootstrap.com/2.3.2/">Looking for Bootstrap 2.3.2 docs?</a>
        </strong>
        We've moved it to a new home while we push forward with Bootstrap 3. <a target="_blank" href="http://blog.getbootstrap.com/">Read the blog</a> for details.
    </div>
</div>


<div class="container bs-docs-container">
<div class="row">
<div class="col-md-3">
    <div class="bs-sidebar hidden-print affix" role="complementary">
        <ul class="nav bs-sidenav">

            <li>
                <a href="#download">Download Bootstrap</a>
                <ul class="nav">
                    <li><a href="#download-compiled">Compiled CSS, JS, and fonts</a></li>
                    <li><a href="#download-additional">Additional downloads</a></li>
                    <li><a href="#download-cdn">Bootstrap CDN</a></li>
                </ul>
            </li>
            <li>
                <a href="#whats-included">What's included</a>
            </li>
            <li>
                <a href="#template">Basic template</a>
            </li>
            <li class="active">
                <a href="#examples">Examples</a>
            </li>
            <li>
                <a href="#disable-responsive">Disabling responsiveness</a>
            </li>
            <li>
                <a href="#migration">Migrating from 2.x to 3.0</a>
                <ul class="nav">
                    <li><a href="#migration-classes">Major class changes</a></li>
                    <li><a href="#migration-new">What's new</a></li>
                    <li><a href="#migration-dropped">What's removed</a></li>
                    <li><a href="#migration-notes">Additional notes</a></li>
                </ul>
            </li>
            <li>
                <a href="#browsers">Browser support</a>
            </li>
            <li>
                <a href="#third-parties">Third party support</a>
            </li>
            <li>
                <a href="#accessibility">Accessibility</a>
            </li>
            <li>
                <a href="#license-faqs">License FAQs</a>
            </li>
            <li>
                <a href="#customizing">Customizing Bootstrap</a>
            </li>


        </ul>
    </div>
</div>
<div class="col-md-9" role="main">
<!-- Getting started
================================================== -->
<div class="bs-docs-section">
    <div class="page-header">
        <h1 id="download">Download Bootstrap</h1>
    </div>
    <p class="lead">Bootstrap has a few easy ways to quickly get started, each one appealing to a different skill level and use case. Read through to see what suits your particular needs.</p>

    <h3 id="download-compiled">Compiled CSS, JS, and fonts</h3>
    <p>The fastest way to get Bootstrap is to download the precompiled and minified versions of our CSS, JavaScript, and fonts. No documentation or original source code files are included.</p>
    <p><a class="btn btn-lg btn-primary" href="https://github.com/twbs/bootstrap/releases/download/v3.0.1/bootstrap-3.0.1-dist.zip" onclick="_gaq.push(['_trackEvent', 'Getting started', 'Download', 'Download compiled']);" role="button">Download precompiled Bootstrap</a></p>

    <h3 id="download-additional">Additional downloads</h3>
    <div class="bs-docs-dl-options">
        <h4>
            <a target="_blank" href="https://github.com/twbs/bootstrap/archive/v3.0.1.zip" onclick="_gaq.push(['_trackEvent', 'Getting started', 'Download', 'Download source']);">Download source code</a>
        </h4>
        <p>Get the latest Bootstrap LESS and JavaScript source code by downloading it directly from GitHub.</p>
        <h4>
            <a target="_blank" href="https://github.com/twbs/bootstrap" onclick="_gaq.push(['_trackEvent', 'Getting started', 'Download', 'GitHub project']);">Clone or fork via GitHub</a>
        </h4>
        <p>Visit us on GitHub to clone or fork the Bootstrap project.</p>
        <h4>
            Install with <a target="_blank" href="http://bower.io">Bower</a>
        </h4>
        <p>Install and manage Bootstrap's styles, JavaScript, and documentation using <a target="_blank" href="http://bower.io">Bower</a>.</p>
        <div class="highlight"><pre><code class="bash"><span class="nv">$ </span>bower install bootstrap
                </code></pre></div>
    </div>

    <h3 id="download-cdn">Bootstrap CDN</h3>
    <p>The folks over at <a target="_blank" href="http://www.maxcdn.com/">MaxCDN</a> graciously provide CDN support for Bootstrap's CSS and JavaScript. Just use these <a target="_blank" href="http://www.bootstrapcdn.com/">Bootstrap CDN</a> links.</p>
    <div class="highlight"><pre><code class="html"><span class="c">&lt;!-- Latest compiled and minified CSS --&gt;</span>
                <span class="nt">&lt;link</span> <span class="na">rel=</span><span class="s">"stylesheet"</span> <span class="na">href=</span><span class="s">"//netdna.bootstrapcdn.com/bootstrap/3.0.1/css/bootstrap.min.css"</span><span class="nt">&gt;</span>

                <span class="c">&lt;!-- Optional theme --&gt;</span>
                <span class="nt">&lt;link</span> <span class="na">rel=</span><span class="s">"stylesheet"</span> <span class="na">href=</span><span class="s">"//netdna.bootstrapcdn.com/bootstrap/3.0.1/css/bootstrap-theme.min.css"</span><span class="nt">&gt;</span>

                <span class="c">&lt;!-- Latest compiled and minified JavaScript --&gt;</span>
                <span class="nt">&lt;script </span><span class="na">src=</span><span class="s">"//netdna.bootstrapcdn.com/bootstrap/3.0.1/js/bootstrap.min.js"</span><span class="nt">&gt;&lt;/script&gt;</span>
            </code></pre></div>

    <div class="bs-callout bs-callout-warning" id="callout-less-compilation">
        <h4>Compiling Bootstrap's LESS files</h4>
        <p>If you work with Bootstrap's uncompiled source code, you need to compile the LESS files to produce usable CSS files. For compiling LESS files into CSS, we only officially support <a target="_blank" href="http://twitter.github.io/recess/">Recess</a>, which is Twitter's CSS hinter based on <a target="_blank" href="http://lesscss.org">less.js</a>.</p>
    </div>
</div>


<!-- File structure
================================================== -->
<div class="bs-docs-section">
    <div class="page-header">
        <h1 id="whats-included">What's included</h1>
    </div>
    <p class="lead">Within the download you'll find the following directories and files, logically grouping common resources and providing both compiled and minified variations.</p>
    <p>Once downloaded, unzip the compressed folder to see the structure of (the compiled) Bootstrap. You'll see something like this:</p>

    <!-- NOTE: This info is intentionally duplicated in the README.
    Copy any changes made here over to the README too. -->
    <div class="highlight"><pre><code class="bash">bootstrap/
                ├── css/
                │   ├── bootstrap.css
                │   ├── bootstrap.min.css
                │   ├── bootstrap-theme.css
                │   └── bootstrap-theme.min.css
                ├── js/
                │   ├── bootstrap.js
                │   └── bootstrap.min.js
                └── fonts/
                ├── glyphicons-halflings-regular.eot
                ├── glyphicons-halflings-regular.svg
                ├── glyphicons-halflings-regular.ttf
                └── glyphicons-halflings-regular.woff
            </code></pre></div>

    <p>This is the most basic form of Bootstrap: precompiled files for quick drop-in usage in nearly any web project. We provide compiled CSS and JS (<code>bootstrap.*</code>), as well as compiled and minified CSS and JS (<code>bootstrap.min.*</code>). Fonts from Glyphicons are included, as is the optional Bootstrap theme.</p>
    <div class="bs-callout bs-callout-danger" id="jquery-required">
        <h4>jQuery required</h4>
        <p>Please note that <strong>all JavaScript plugins require jQuery</strong> to be included, as shown in the <a href="#template">starter template</a>. <a target="_blank" href="https://github.com/twbs/bootstrap/blob/v3.0.1/bower.json">Consult our <code>bower.json</code></a> to see which versions of jQuery are supported.</p>
    </div>
</div>


<!-- Template
================================================== -->
<div class="bs-docs-section">
    <div class="page-header">
        <h1 id="template">Basic template</h1>
    </div>
    <p class="lead">Start with this basic HTML template, or modify <a target="_blank" href="getting-started.html#examples">these examples</a>. We hope you'll customize our templates and examples, adapting them to suit your needs.</p>

    <p>Copy the HTML below to begin working with a minimal Bootstrap document.</p>
    <div class="highlight"><pre><code class="html"><span class="cp">&lt;!DOCTYPE html&gt;</span>
                <span class="nt">&lt;html&gt;</span>
                <span class="nt">&lt;head&gt;</span>
                <span class="nt">&lt;title&gt;</span>Bootstrap 101 Template<span class="nt">&lt;/title&gt;</span>
                <span class="nt">&lt;meta</span> <span class="na">name=</span><span class="s">"viewport"</span> <span class="na">content=</span><span class="s">"width=device-width, initial-scale=1.0"</span><span class="nt">&gt;</span>
                <span class="c">&lt;!-- Bootstrap --&gt;</span>
                <span class="nt">&lt;link</span> <span class="na">href=</span><span class="s">"css/bootstrap.min.css"</span> <span class="na">rel=</span><span class="s">"stylesheet"</span> <span class="na">media=</span><span class="s">"screen"</span><span class="nt">&gt;</span>

                <span class="c">&lt;!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries --&gt;</span>
                <span class="c">&lt;!-- WARNING: Respond.js doesn't work if you view the page via file:// --&gt;</span>
                <span class="c">&lt;!--[if lt IE 9]&gt;</span>
                <span class="c">      &lt;script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"&gt;&lt;/script&gt;</span>
                <span class="c">      &lt;script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"&gt;&lt;/script&gt;</span>
                <span class="c">    &lt;![endif]--&gt;</span>
                <span class="nt">&lt;/head&gt;</span>
                <span class="nt">&lt;body&gt;</span>
                <span class="nt">&lt;h1&gt;</span>Hello, world!<span class="nt">&lt;/h1&gt;</span>

                <span class="c">&lt;!-- jQuery (necessary for Bootstrap's JavaScript plugins) --&gt;</span>
                <span class="nt">&lt;script </span><span class="na">src=</span><span class="s">"js/jquery.js"</span><span class="nt">&gt;&lt;/script&gt;</span>
                <span class="c">&lt;!-- Include all compiled plugins (below), or include individual files as needed --&gt;</span>
                <span class="nt">&lt;script </span><span class="na">src=</span><span class="s">"js/bootstrap.min.js"</span><span class="nt">&gt;&lt;/script&gt;</span>
                <span class="nt">&lt;/body&gt;</span>
                <span class="nt">&lt;/html&gt;</span>
            </code></pre></div>
</div>


<!-- Template
================================================== -->
<div class="bs-docs-section">
    <div class="page-header">
        <h1 id="examples">Examples</h1>
    </div>
    <p class="lead">Build on the basic template above with Bootstrap's many components. See also <a href="#customizing">Customizing Bootstrap</a> for tips on maintaining your own Bootstrap variants.</p>

    <div class="row bs-examples">
        <div class="col-xs-6 col-md-4">
            <a class="thumbnail" target="_blank" href="http://getbootstrap.com/examples/starter-template/">
                <img src="../images/starter-template.jpg" alt="">
            </a>
            <h4>Starter template</h4>
            <p>Nothing but the basics: compiled CSS and JavaScript along with a container.</p>
        </div>
        <div class="col-xs-6 col-md-4">
            <a class="thumbnail" target="_blank" href="http://getbootstrap.com/examples/grid/">
                <img src="../images/grid.jpg" alt="">
            </a>
            <h4>Grids</h4>
            <p>Multiple examples of grid layouts with all four tiers, nesting, and more.</p>
        </div>
        <div class="clearfix visible-xs"></div>

        <div class="col-xs-6 col-md-4">
            <a class="thumbnail" target="_blank" href="http://getbootstrap.com/examples/jumbotron/">
                <img src="../images/jumbotron.jpg" alt="">
            </a>
            <h4>Jumbotron</h4>
            <p>Build around the jumbotron with a navbar and some basic grid columns.</p>
        </div>
        <div class="col-xs-6 col-md-4">
            <a class="thumbnail" target="_blank" href="http://getbootstrap.com/examples/jumbotron-narrow/">
                <img src="../images/jumbotron-narrow.jpg" alt="">
            </a>
            <h4>Narrow jumbotron</h4>
            <p>Build a more custom page by narrowing the default container and jumbotron.</p>
        </div>
        <div class="clearfix visible-xs"></div>

        <div class="col-xs-6 col-md-4">
            <a class="thumbnail" target="_blank" href="http://getbootstrap.com/examples/navbar/">
                <img src="../images/navbar.jpg" alt="">
            </a>
            <h4>Navbar</h4>
            <p>Super basic template that includes the navbar along with some additional content.</p>
        </div>
        <div class="col-xs-6 col-md-4">
            <a class="thumbnail" target="_blank" href="http://getbootstrap.com/examples/navbar-static-top/">
                <img src="../images/navbar-static.jpg" alt="">
            </a>
            <h4>Static top navbar</h4>
            <p>Super basic template with a static top navbar along with some additional content.</p>
        </div>
        <div class="clearfix visible-xs"></div>

        <div class="col-xs-6 col-md-4">
            <a class="thumbnail" target="_blank" href="http://getbootstrap.com/examples/navbar-fixed-top/">
                <img src="../images/navbar-fixed.jpg" alt="">
            </a>
            <h4>Fixed navbar</h4>
            <p>Super basic template with a fixed top navbar along with some additional content.</p>
        </div>
        <div class="col-xs-6 col-md-4">
            <a class="thumbnail" target="_blank" href="http://getbootstrap.com/examples/signin/">
                <img src="../images/sign-in.jpg" alt="">
            </a>
            <h4>Sign-in page</h4>
            <p>Custom form layout and design for a simple sign in form.</p>
        </div>
        <div class="clearfix visible-xs"></div>

        <div class="col-xs-6 col-md-4">
            <a class="thumbnail" target="_blank" href="http://getbootstrap.com/examples/sticky-footer/">
                <img src="../images/sticky-footer.jpg" alt="">
            </a>
            <h4>Sticky footer</h4>
            <p>Attach a footer to the bottom of the viewport when the content is shorter than it.</p>
        </div>
        <div class="col-xs-6 col-md-4">
            <a class="thumbnail" target="_blank" href="http://getbootstrap.com/examples/sticky-footer-navbar/">
                <img src="../images/sticky-footer-navbar.jpg" alt="">
            </a>
            <h4>Sticky footer with navbar</h4>
            <p>Attach a footer to the bottom of the viewport with a fixed navbar at the top.</p>
        </div>
        <div class="clearfix visible-xs"></div>

        <div class="col-xs-6 col-md-4">
            <a class="thumbnail" target="_blank" href="http://getbootstrap.com/examples/justified-nav/">
                <img src="../images/justified-nav.jpg" alt="">
            </a>
            <h4>Justified nav</h4>
            <p>Create a custom navbar with justified links. Heads up! <a target="_blank" href="http://getbootstrap.com/components/#nav-justified">Not too WebKit friendly.</a></p>
        </div>
        <div class="col-xs-6 col-md-4">
            <a class="thumbnail" target="_blank" href="http://getbootstrap.com/examples/offcanvas/">
                <img src="../images/offcanvas.jpg" alt="">
            </a>
            <h4>Offcanvas</h4>
            <p>Build a toggleable off-canvas navigation menu for use with Bootstrap.</p>
        </div>
        <div class="clearfix visible-xs"></div>

        <div class="col-xs-6 col-md-4">
            <a class="thumbnail" target="_blank" href="http://getbootstrap.com/examples/carousel/">
                <img src="../images/carousel.jpg" alt="">
            </a>
            <h4>Carousel</h4>
            <p>Customize the navbar and carousel, then add some new components.</p>
        </div>
        <div class="col-xs-6 col-md-4">
            <a class="thumbnail" target="_blank" href="http://getbootstrap.com/examples/non-responsive/">
                <img src="../images/non-responsive.jpg" alt="">
            </a>
            <h4>Non-responsive Bootstrap</h4>
            <p>Easily disable the responsiveness of Bootstrap <a target="_blank" href="http://getbootstrap.com/getting-started/#disable-responsive">per our docs</a>.</p>
        </div>
        <div class="clearfix visible-xs"></div>

        <div class="col-xs-6 col-md-4">
            <a class="thumbnail" target="_blank" href="http://getbootstrap.com/examples/theme/">
                <img src="../images/theme.jpg" alt="">
            </a>
            <h4>Bootstrap theme</h4>
            <p>Load the optional Bootstrap theme for a visually enhanced experience.</p>
        </div>
    </div>

</div>


<!-- Template
================================================== -->
<div class="bs-docs-section">
    <div class="page-header">
        <h1 id="disable-responsive">Disabling responsiveness</h1>
    </div>
    <p class="lead">Bootstrap automatically adapts your pages for various screen sizes.
        Here's how to disable this feature so your page works like in <a target="_blank" href="http://getbootstrap.com/examples/non-responsive/">this non-responsive example</a>.</p>

    <h3>Steps to disable page responsiveness</h3>
    <ol>
        <li>Omit the viewport <code>&lt;meta&gt;</code> mentioned in <a target="_blank" href="http://getbootstrap.com/css/#overview-mobile">the CSS docs</a></li>
        <li>Override the <code>width</code> on the <code>.container</code> for each grid tier with a single width, for example <code>width: 970px !important;</code> Be sure that this comes after the default Bootstrap CSS. You can optionally avoid the <code>!important</code> with media queries or some selector-fu.</li>
        <li>If using navbars, remove all navbar collapsing and expanding behavior.</li>
        <li>For grid layouts, use <code>.col-xs-*</code> classes in addition to, or in place of, the medium/large ones. Don't worry, the extra-small device grid scales to all resolutions.</li>
    </ol>
    <p>You'll still need Respond.js for IE8 (since our media queries are still there and need to be processed).
        This disables the "mobile site" aspects of Bootstrap.</p>

    <h3>Bootstrap template with responsiveness disabled</h3>
    <p>We've applied these steps to an example. Read its source code to see the specific changes implemented.</p>
    <p>
        <a target="_blank" href="http://getbootstrap.com/examples/non-responsive/" class="btn btn-primary">View non-responsive example</a>
    </p>
</div>


<!-- Migration
================================================== -->
<div class="bs-docs-section">
<div class="page-header">
    <h1 id="migration">Migrating from 2.x to 3.0</h1>
</div>
<p class="lead">Bootstrap 3 is not backwards compatible with v2.x. Use this section as a general guide to upgrading from v2.x to v3.0. For a broader overview, see <a target="_blank" href="http://blog.getbootstrap.com/2013/08/19/bootstrap-3-released/">what's new</a> in the v3.0 release announcement.</p>

<h2 id="migration-classes">Major class changes</h2>
<p>This table shows the style changes between v2.x and v3.0.</p>
<div class="table-responsive">
    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>Bootstrap 2.x</th>
            <th>Bootstrap 3.0</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><code>.container-fluid</code></td>
            <td><code>.container</code></td>
        </tr>
        <tr>
            <td><code>.row-fluid</code></td>
            <td><code>.row</code></td>
        </tr>
        <tr>
            <td><code>.span*</code></td>
            <td><code>.col-md-*</code></td>
        </tr>
        <tr>
            <td><code>.offset*</code></td>
            <td><code>.col-md-offset-*</code></td>
        </tr>
        <tr>
            <td><code>.brand</code></td>
            <td><code>.navbar-brand</code></td>
        </tr>
        <tr>
            <td><code>.nav-collapse</code></td>
            <td><code>.navbar-collapse</code></td>
        </tr>
        <tr>
            <td><code>.nav-toggle</code></td>
            <td><code>.navbar-toggle</code></td>
        </tr>
        <tr>
            <td><code>.btn-navbar</code></td>
            <td><code>.navbar-btn</code></td>
        </tr>
        <tr>
            <td><code>.hero-unit</code></td>
            <td><code>.jumbotron</code></td>
        </tr>
        <tr>
            <td><code>.icon-*</code></td>
            <td><code>.glyphicon .glyphicon-*</code></td>
        </tr>
        <tr>
            <td><code>.btn</code></td>
            <td><code>.btn .btn-default</code></td>
        </tr>
        <tr>
            <td><code>.btn-mini</code></td>
            <td><code>.btn-xs</code></td>
        </tr>
        <tr>
            <td><code>.btn-small</code></td>
            <td><code>.btn-sm</code></td>
        </tr>
        <tr>
            <td><code>.btn-large</code></td>
            <td><code>.btn-lg</code></td>
        </tr>
        <tr>
            <td><code>.alert-error</code></td>
            <td><code>.alert-danger</code></td>
        </tr>
        <tr>
            <td><code>.visible-phone</code></td>
            <td><code>.visible-xs</code></td>
        </tr>
        <tr>
            <td><code>.visible-tablet</code></td>
            <td><code>.visible-sm</code></td>
        </tr>
        <tr>
            <td><code>.visible-desktop</code></td>
            <td><code>.visible-md</code></td>
        </tr>
        <tr>
            <td><code>.hidden-phone</code></td>
            <td><code>.hidden-xs</code></td>
        </tr>
        <tr>
            <td><code>.hidden-tablet</code></td>
            <td><code>.hidden-sm</code></td>
        </tr>
        <tr>
            <td><code>.hidden-desktop</code></td>
            <td><code>.hidden-md</code></td>
        </tr>
        <tr>
            <td><code>.input-small</code></td>
            <td><code>.input-sm</code></td>
        </tr>
        <tr>
            <td><code>.input-large</code></td>
            <td><code>.input-lg</code></td>
        </tr>
        <tr>
            <td><code>.control-group</code></td>
            <td><code>.form-group</code></td>
        </tr>
        <tr>
            <td><code>.checkbox.inline</code> <code>.radio.inline</code></td>
            <td><code>.checkbox-inline</code> <code>.radio-inline</code></td>
        </tr>
        <tr>
            <td><code>.input-prepend</code> <code>.input-append</code></td>
            <td><code>.input-group</code></td>
        </tr>
        <tr>
            <td><code>.add-on</code></td>
            <td><code>.input-group-addon</code></td>
        </tr>
        <tr>
            <td><code>.img-polaroid</code></td>
            <td><code>.img-thumbnail</code></td>
        </tr>
        <tr>
            <td><code>ul.unstyled</code></td>
            <td><code>.list-unstyled</code></td>
        </tr>
        <tr>
            <td><code>ul.inline</code></td>
            <td><code>.list-inline</code></td>
        </tr>
        <tr>
            <td><code>.muted</code></td>
            <td><code>.text-muted</code></td>
        </tr>
        <tr>
            <td><code>.text-error</code></td>
            <td><code>.text-danger</code></td>
        </tr>
        <tr>
            <td><code>.table .error</code></td>
            <td><code>.table .danger</code></td>
        </tr>
        <tr>
            <td><code>.bar</code></td>
            <td><code>.progress-bar</code></td>
        </tr>
        <tr>
            <td><code>.bar-*</code></td>
            <td><code>.progress-bar-*</code></td>
        </tr>
        <tr>
            <td><code>.accordion</code></td>
            <td><code>.panel-group</code></td>
        </tr>
        <tr>
            <td><code>.accordion-group</code></td>
            <td><code>.panel .panel-default</code></td>
        </tr>
        <tr>
            <td><code>.accordion-heading</code></td>
            <td><code>.panel-heading</code></td>
        </tr>
        <tr>
            <td><code>.accordion-body</code></td>
            <td><code>.panel-collapse</code></td>
        </tr>
        <tr>
            <td><code>.accordion-inner</code></td>
            <td><code>.panel-body</code></td>
        </tr>
        <tr>
            <td><code>.alert-error</code></td>
            <td><code>.alert-danger</code></td>
        </tr>
        </tbody>
    </table>
</div><!-- /.table-responsive -->

<h2 id="migration-new">What's new</h2>
<p>We've added new elements and changed some existing ones. Here are the new or updated styles.</p>
<div class="table-responsive">
    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>Element</th>
            <th>Description</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Panels</td>
            <td><code>.panel .panel-default</code> <code>.panel-body</code> <code>.panel-title</code> <code>.panel-heading</code> <code>.panel-footer</code> <code>.panel-collapse</code></td>
        </tr>
        <tr>
            <td>List groups</td>
            <td><code>.list-group</code> <code>.list-group-item</code> <code>.list-group-item-text</code> <code>.list-group-item-heading</code></td>
        </tr>
        <tr>
            <td>Glyphicons</td>
            <td><code>.glyphicon</code></td>
        </tr>
        <tr>
            <td>Jumbotron</td>
            <td><code>.jumbotron</code></td>
        </tr>
        <tr>
            <td>Extra small grid (&lt;768px)</td>
            <td><code>.col-xs-*</code></td>
        </tr>
        <tr>
            <td>Small grid (≥768px)</td>
            <td><code>.col-sm-*</code></td>
        </tr>
        <tr>
            <td>Medium grid (≥992px)</td>
            <td><code>.col-md-*</code></td>
        </tr>
        <tr>
            <td>Large grid (≥1200px)</td>
            <td><code>.col-lg-*</code></td>
        </tr>
        <tr>
            <td>Responsive utility classes (≥1200px)</td>
            <td><code>.visible-lg</code> <code>.hidden-lg</code></td>
        </tr>
        <tr>
            <td>Offsets</td>
            <td><code>.col-sm-offset-*</code> <code>.col-md-offset-*</code> <code>.col-lg-offset-*</code></td>
        </tr>
        <tr>
            <td>Push</td>
            <td><code>.col-sm-push-*</code> <code>.col-md-push-*</code> <code>.col-lg-push-*</code></td>
        </tr>
        <tr>
            <td>Pull</td>
            <td><code>.col-sm-pull-*</code> <code>.col-md-pull-*</code> <code>.col-lg-pull-*</code></td>
        </tr>
        <tr>
            <td>Input groups</td>
            <td><code>.input-group</code> <code>.input-group-addon</code> <code>.input-group-btn</code></td>
        </tr>
        <tr>
            <td>Form controls</td>
            <td><code>.form-control</code> <code>.form-group</code></td>
        </tr>
        <tr>
            <td>Button group sizes</td>
            <td><code>.btn-group-xs</code> <code>.btn-group-sm</code> <code>.btn-group-lg</code></td>
        </tr>
        <tr>
            <td>Navbar text</td>
            <td><code>.navbar-text</code></td>
        </tr>
        <tr>
            <td>Navbar header</td>
            <td><code>.navbar-header</code></td>
        </tr>
        <tr>
            <td>Justified tabs / pills</td>
            <td><code>.nav-justified</code></td>
        </tr>
        <tr>
            <td>Responsive images</td>
            <td><code>.img-responsive</code></td>
        </tr>
        <tr>
            <td>Contextual table rows</td>
            <td><code>.success</code> <code>.danger</code> <code>.warning</code> <code>.active</code></td>
        </tr>
        <tr>
            <td>Contextual panels</td>
            <td><code>.panel-success</code> <code>.panel-danger</code> <code>.panel-warning</code> <code>.panel-info</code></td>
        </tr>
        <tr>
            <td>Modal</td>
            <td><code>.modal-dialog</code> <code>.modal-content</code></td>
        </tr>
        <tr>
            <td>Thumbnail image</td>
            <td><code>.img-thumbnail</code></td>
        </tr>
        <tr>
            <td>Well sizes</td>
            <td><code>.well-sm</code> <code>.well-lg</code></td>
        </tr>
        <tr>
            <td>Alert links</td>
            <td><code>.alert-link</code></td>
        </tr>
        </tbody>
    </table>
</div><!-- /.table-responsive -->


<h2 id="migration-dropped">What's removed</h2>
<p>The following elements have been dropped or changed in v3.0.</p>
<div class="table-responsive">
    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>Element</th>
            <th>Removed from 2.x</th>
            <th>3.0 Equivalent</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Form actions</td>
            <td><code>.form-actions</code></td>
            <td class="text-muted">N/A</td>
        </tr>
        <tr>
            <td>Search form</td>
            <td><code>.form-search</code></td>
            <td class="text-muted">N/A</td>
        </tr>
        <tr>
            <td>Fluid container</td>
            <td><code>.container-fluid</code></td>
            <td><code>.container</code> (no more fixed grid)</td>
        </tr>
        <tr>
            <td>Fluid row</td>
            <td><code>.row-fluid</code></td>
            <td><code>.row</code> (no more fixed grid)</td>
        </tr>
        <tr>
            <td>Controls wrapper</td>
            <td><code>.controls</code></td>
            <td class="text-muted">N/A</td>
        </tr>
        <tr>
            <td>Controls row</td>
            <td><code>.controls-row</code></td>
            <td><code>.row</code> or <code>.form-group</code></td>
        </tr>
        <tr>
            <td>Navbar inner</td>
            <td><code>.navbar-inner</code></td>
            <td class="text-muted">N/A</td>
        </tr>
        <tr>
            <td>Navbar vertical dividers</td>
            <td><code>.navbar .divider-vertical</code></td>
            <td class="text-muted">N/A</td>
        </tr>
        <tr>
            <td>Dropdown submenu</td>
            <td><code>.dropdown-submenu</code></td>
            <td class="text-muted">N/A</td>
        </tr>
        <tr>
            <td>Tab alignments</td>
            <td><code>.tabs-left</code> <code>.tabs-right</code> <code>.tabs-below</code></td>
            <td class="text-muted">N/A</td>
        </tr>
        <tr>
            <td>Nav lists</td>
            <td><code>.nav-list</code> <code>.nav-header</code></td>
            <td>No direct equivalent, but <a target="_blank" href="http://getbootstrap.com/components/#list-group">list groups</a> and <a target="_blank" href="http://getbootstrap.com/javascript/#collapse"><code>.panel-group</code>s</a> are similar.</td>
        </tr>
        </tbody>
    </table>
</div><!-- /.table-responsive -->


<h2 id="migration-notes">Additional notes</h2>
<p>Other changes in v3.0 are not immediately apparent. Base classes, key styles, and behaviors have been adjusted for flexibility and our <em>mobile first</em> approach. Here's a partial list:</p>
<ul>
    <li>By default, text-based form controls now receive only minimal styling.  For focus colors and rounded corners, apply the <code>.form-control</code> class on the element to style.</li>
    <li>Text-based form controls with the <code>.form-control</code> class applied are now 100% wide by default. Wrap inputs inside <code>&lt;div class="col-*"&gt;&lt;/div&gt;</code> to control input widths.</li>
    <li><code>.badge</code> no longer has contextual (-success,-primary,etc..) classes.</li>
    <li><code>.btn</code> must also use <code>.btn-default</code> to get the "default" button.</li>
    <li><code>.container</code> and <code>.row</code> are now fluid (percentage-based).</li>
    <li>Images are no longer responsive by default. Use <code>.img-responsive</code> for fluid <code>&lt;img&gt;</code> size.</li>
    <li>The icons, now <code>.glyphicon</code>, are now font based. Icons also require a base and icon class (e.g. <code>.glyphicon .glyphicon-asterisk</code>).</li>
    <li>Typeahead has been dropped, in favor of using <a target="_blank" href="http://twitter.github.io/typeahead.js/">Twitter Typeahead</a>.</li>
    <li>Modal markup has changed significantly. The <code>.modal-header</code>, <code>.modal-body</code>, and <code>.modal-footer</code> sections are now wrapped in <code>.modal-content</code> and <code>.modal-dialog</code> for better mobile styling and behavior.</li>
    <li>The HTML loaded by the <code>remote</code> modal option is now injected into the <code>.modal</code> instead of into the <code>.modal-body</code>. This allows you to also easily vary the header and footer of the modal, not just the modal body.</li>
    <li>JavaScript events are namespaced. For example, to handle the modal "show" event, use <code>'show.bs.modal'</code>. For tabs "shown" use <code>'shown.bs.tab'</code>, etc..</li>
</ul>
<p>For more information on upgrading to v3.0, and code snippets from the community, see <a target="_blank" href="http://bootply.com/">Bootply</a>.</p>
</div>


<!-- Browser support
================================================== -->
<div class="bs-docs-section">
    <div class="page-header">
        <h1 id="browsers">Browser support</h1>
    </div>
    <p class="lead">Bootstrap is built to work best in the latest desktop and mobile browsers, meaning older browsers might display differently styled, though fully functional, renderings of certain components.</p>

    <h3>Supported browsers</h3>
    <p>Specifically, we support the latest versions of the following:</p>
    <ul>
        <li>Chrome (Mac, Windows, iOS, and Android)</li>
        <li>Safari (Mac and iOS only, as the Windows version is being abandoned)</li>
        <li>Firefox (Mac, Windows)</li>
        <li>Internet Explorer</li>
        <li>Opera (Mac, Windows)</li>
    </ul>
    <p>Unofficially, Bootstrap should look and behave well enough in Chromium and Chrome for Linux, Firefox for Linux, and Internet Explorer 7, though they are not officially supported.</p>

    <h3>Internet Explorer 8 and 9</h3>
    <p>Internet Explorer 8 and 9 are also supported, however, please be aware that some CSS3 properties and HTML5 elements are not fully supported by these browsers. In addition, <strong>Internet Explorer 8 requires the use of <a target="_blank" href="https://github.com/scottjehl/Respond">Respond.js</a> to enable media query support.</strong></p>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th scope="col" class="col-xs-4">Feature</th>
                <th scope="col" class="col-xs-4">Internet Explorer 8</th>
                <th scope="col" class="col-xs-4">Internet Explorer 9</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row"><code>border-radius</code></th>
                <td class="text-danger"><span class="glyphicon glyphicon-remove"></span> Not supported</td>
                <td class="text-success"><span class="glyphicon glyphicon-ok"></span> Supported</td>
            </tr>
            <tr>
                <th scope="row"><code>box-shadow</code></th>
                <td class="text-danger"><span class="glyphicon glyphicon-remove"></span> Not supported</td>
                <td class="text-success"><span class="glyphicon glyphicon-ok"></span> Supported</td>
            </tr>
            <tr>
                <th scope="row"><code>transform</code></th>
                <td class="text-danger"><span class="glyphicon glyphicon-remove"></span> Not supported</td>
                <td class="text-success"><span class="glyphicon glyphicon-ok"></span> Supported, with <code>-ms</code> prefix</td>
            </tr>
            <tr>
                <th scope="row"><code>transition</code></th>
                <td colspan="2" class="text-danger"><span class="glyphicon glyphicon-remove"></span> Not supported</td>
            </tr>
            </tbody>
            <tbody>
            <tr>
                <th scope="row"><code>placeholder</code></th>
                <td colspan="2" class="text-danger"><span class="glyphicon glyphicon-remove"></span> Not supported</td>
            </tr>
            </tbody>
        </table>
    </div>

    <p>Visit <a target="_blank" href="http://caniuse.com/">Can I use...</a> for details on browser support of CSS3 and HTML5 features.</p>

    <h3>Internet Explorer 8 and Respond.js</h3>
    <p>Beware of the following caveats when using Respond.js in your development and production environments for Internet Explorer 8.</p>
    <h4 id="respond-js-x-domain">Respond.js and cross-domain CSS</h4>
    <p>Using Respond.js with CSS hosted on a different (sub)domain (for example, on a CDN) requires some additional setup. <a target="_blank" href="https://github.com/scottjehl/Respond/blob/master/README.md#cdnx-domain-setup">See the Respond.js docs</a> for details.</p>
    <h4 id="respond-file-proto">Respond.js and <code>file://</code></h4>
    <p>Due to browser security rules, Respond.js doesn't work with pages viewed via the <code>file://</code> protocol (like when opening a local HTML file). To test responsive features in IE8, view your pages over HTTP(S). <a target="_blank" href="https://github.com/scottjehl/Respond/blob/master/README.md#support--caveats">See the Respond.js docs</a> for details.</p>
    <h4 id="respond-import">Respond.js and <code>@import</code></h4>
    <p>Respond.js doesn't work with CSS that's referenced via <code>@import</code>. In particular, some Drupal configurations are known to use <code>@import</code>. <a target="_blank" href="https://github.com/scottjehl/Respond/blob/master/README.md#support--caveats">See the Respond.js docs</a> for details.</p>

    <h3>Internet Explorer 8 and box-sizing</h3>
    <p>IE8 does not fully support <code>box-sizing: border-box;</code> when combined with <code>min-width</code>, <code>max-width</code>, <code>min-height</code>, or <code>max-height</code>. For that reason, as of v3.0.1, we no longer use <code>max-width</code> on <code>.container</code>s.</p>

    <h3 id="ie-compat-modes">IE Compatibility modes</h3>
    <p>Bootstrap is not supported in the old Internet Explorer compatibility modes. To be sure you're using the latest rendering mode for IE, consider including the appropriate <code>&lt;meta&gt;</code> tag in your pages:</p>
    <div class="highlight"><pre><code class="html"><span class="nt">&lt;meta</span> <span class="na">http-equiv=</span><span class="s">"X-UA-Compatible"</span> <span class="na">content=</span><span class="s">"IE=edge"</span><span class="nt">&gt;</span>
            </code></pre></div>
    <p>This tag is included in all docs pages and examples to ensure the best rendering possible in each supported version of Internet Explorer.</p>
    <p>See <a target="_blank" href="http://stackoverflow.com/questions/6771258/whats-the-difference-if-meta-http-equiv-x-ua-compatible-content-ie-edge">this StackOverflow question</a> for more information.</p>

    <h3 id="ie-10-width">Internet Explorer 10 in Windows 8 and Windows Phone 8</h3>
    <p>Internet Explorer 10 doesn't differentiate <strong>device width</strong> from <strong>viewport width</strong>, and thus doesn't properly apply the media queries in Bootstrap's CSS. Normally you'd just add a quick snippet of CSS to fix this:</p>
    <div class="highlight"><pre><code class="css"><span class="k">@-ms-viewport</span>       <span class="p">{</span> <span class="nt">width</span><span class="o">:</span> <span class="nt">device-width</span><span class="o">;</span> <span class="p">}</span>
            </code></pre></div>
    <p>However, this doesn't work as it causes Windows Phone 8 devices to show a mostly desktop view instead of narrow "phone" view. To address this, you'll need to <strong>include the following CSS and JavaScript to work around the bug until Microsoft issues a fix</strong>.</p>
    <div class="highlight"><pre><code class="css"><span class="k">@-webkit-viewport</span>   <span class="p">{</span> <span class="nt">width</span><span class="o">:</span> <span class="nt">device-width</span><span class="o">;</span> <span class="p">}</span>
                <span class="k">@-moz-viewport</span>      <span class="p">{</span> <span class="nt">width</span><span class="o">:</span> <span class="nt">device-width</span><span class="o">;</span> <span class="p">}</span>
                <span class="k">@-ms-viewport</span>       <span class="p">{</span> <span class="nt">width</span><span class="o">:</span> <span class="nt">device-width</span><span class="o">;</span> <span class="p">}</span>
                <span class="k">@-o-viewport</span>        <span class="p">{</span> <span class="nt">width</span><span class="o">:</span> <span class="nt">device-width</span><span class="o">;</span> <span class="p">}</span>
                <span class="k">@viewport</span>           <span class="p">{</span> <span class="nt">width</span><span class="o">:</span> <span class="nt">device-width</span><span class="o">;</span> <span class="p">}</span>
            </code></pre></div>

    <div class="highlight"><pre><code class="js"><span class="k">if</span> <span class="p">(</span><span class="nx">navigator</span><span class="p">.</span><span class="nx">userAgent</span><span class="p">.</span><span class="nx">match</span><span class="p">(</span><span class="sr">/IEMobile\/10\.0/</span><span class="p">))</span> <span class="p">{</span>
                <span class="kd">var</span> <span class="nx">msViewportStyle</span> <span class="o">=</span> <span class="nb">document</span><span class="p">.</span><span class="nx">createElement</span><span class="p">(</span><span class="s2">"style"</span><span class="p">)</span>
                <span class="nx">msViewportStyle</span><span class="p">.</span><span class="nx">appendChild</span><span class="p">(</span>
                <span class="nb">document</span><span class="p">.</span><span class="nx">createTextNode</span><span class="p">(</span>
                <span class="s2">"@-ms-viewport{width:auto!important}"</span>
                <span class="p">)</span>
                <span class="p">)</span>
                <span class="nb">document</span><span class="p">.</span><span class="nx">getElementsByTagName</span><span class="p">(</span><span class="s2">"head"</span><span class="p">)[</span><span class="mi">0</span><span class="p">].</span><span class="nx">appendChild</span><span class="p">(</span><span class="nx">msViewportStyle</span><span class="p">)</span>
                <span class="p">}</span>
            </code></pre></div>
    <p>For more information and usage guidelines, read <a target="_blank" href="http://timkadlec.com/2013/01/windows-phone-8-and-device-width/">Windows Phone 8 and Device-Width</a>.</p>
    <p>As a heads up, we include this in the Bootstrap docs as an example.</p>

    <h3 id="safari-percentages">Safari percent rounding</h3>
    <p>As of Safari v6.1 for OS X and Safari for iOS v7.0.1, Safari's rendering engine has some trouble with the number of decimal places used in our <code>.col-*-1</code> grid classes. So if you have 12 individual grid columns, you'll notice that they come up short compared to other rows of columns. We can't do much here (<a target="_blank" href="https://github.com/twbs/bootstrap/issues/9282">see #9282</a>) but you do have some options:</p>
    <ul>
        <li>Add <code>.pull-right</code> to your last grid column to get the hard-right alignment</li>
        <li>Tweak your percentages manually to get the perfect rounding for Safari (more difficult than the first option)</li>
    </ul>
    <p>We'll keep an eye on this though and update our code if we have an easy solution.</p>

    <h3 id="mobile-modals">Modals and mobile devices</h3>
    <h4>Overflow and scrolling</h4>
    <p>Support for <code>overflow: hidden</code> on the <code>&lt;body&gt;</code> element is quite limited in iOS and Android. To that end, when you scroll past the top or bottom of a modal in either of those devices' browsers, the <code>&lt;body&gt;</code> content will begin to scroll.</p>
    <h4>Virtual keyboards</h4>
    <p>Also, note that if you're using inputs in your modal – iOS has a rendering bug that doesn't update the position of fixed elements when the virtual keyboard is triggered. A few workarounds for this include transforming your elements to <code>position: absolute</code> or invoking a timer on focus to try to correct the positioning manually. This is not handled by Bootstrap, so it is up to you to decide which solution is best for your application.</p>

    <h3 id="browser-zoom">Browser zooming</h3>
    <p>Page zooming inevitably presents rendering artifacts in some components, both in Bootstrap and the rest of the web. Depending on the issue, we may be able to fix it (search first and then open an issue if need be). However, we tend to ignore these as they often have no direct solution other than hacky workarounds.</p>
</div>


<!-- Third party support
================================================== -->
<div class="bs-docs-section">
    <div class="page-header">
        <h1 id="third-parties">Third party support</h1>
    </div>
    <p class="lead">While we don't officially support any third party plugins or add-ons, we do offer some useful advice to help avoid potential issues in your projects.</p>

    <h3>Box-sizing</h3>
    <p>Some third party software, including Google Maps and Google Custom Search Engine, conflict with Bootstrap due to <code>* { box-sizing: border-box; }</code>, a rule which makes it so <code>padding</code> does not affect the final computed width of an element. Learn more about <a target="_blank" href="http://css-tricks.com/box-sizing/">box model and sizing at CSS Tricks</a>.</p>
    <p>Depending on the context, you may override as-needed (Option 1) or reset the box-sizing for entire regions (Option 2).</p>
    <div class="highlight"><pre><code class="css"><span class="c">/* Box-sizing resets</span>
                <span class="c"> *</span>
                <span class="c"> * Reset individual elements or override regions to avoid conflicts due to</span>
                <span class="c"> * global box model settings of Bootstrap. Two options, individual overrides and</span>
                <span class="c"> * region resets, are available as plain CSS and uncompiled LESS formats.</span>
                <span class="c"> */</span>

                <span class="c">/* Option 1A: Override a single element's box model via CSS */</span>
                <span class="nc">.element</span> <span class="p">{</span>
                <span class="o">-</span><span class="n">webkit</span><span class="o">-</span><span class="n">box</span><span class="o">-</span><span class="n">sizing</span><span class="o">:</span> <span class="k">content</span><span class="o">-</span><span class="n">box</span><span class="p">;</span>
                <span class="o">-</span><span class="n">moz</span><span class="o">-</span><span class="n">box</span><span class="o">-</span><span class="n">sizing</span><span class="o">:</span> <span class="k">content</span><span class="o">-</span><span class="n">box</span><span class="p">;</span>
                <span class="n">box</span><span class="o">-</span><span class="n">sizing</span><span class="o">:</span> <span class="k">content</span><span class="o">-</span><span class="n">box</span><span class="p">;</span>
                <span class="p">}</span>

                <span class="c">/* Option 1B: Override a single element's box model by using a Bootstrap LESS mixin */</span>
                <span class="nc">.element</span> <span class="p">{</span>
                <span class="o">.</span><span class="n">box</span><span class="o">-</span><span class="n">sizing</span><span class="p">(</span><span class="k">content</span><span class="o">-</span><span class="n">box</span><span class="p">);</span>
                <span class="p">}</span>

                <span class="c">/* Option 2A: Reset an entire region via CSS */</span>
                <span class="nc">.reset-box-sizing</span><span class="o">,</span>
                <span class="nc">.reset-box-sizing</span> <span class="o">*,</span>
                <span class="nc">.reset-box-sizing</span> <span class="o">*</span><span class="nd">:before</span><span class="o">,</span>
                <span class="nc">.reset-box-sizing</span> <span class="o">*</span><span class="nd">:after</span> <span class="p">{</span>
                <span class="o">-</span><span class="n">webkit</span><span class="o">-</span><span class="n">box</span><span class="o">-</span><span class="n">sizing</span><span class="o">:</span> <span class="k">content</span><span class="o">-</span><span class="n">box</span><span class="p">;</span>
                <span class="o">-</span><span class="n">moz</span><span class="o">-</span><span class="n">box</span><span class="o">-</span><span class="n">sizing</span><span class="o">:</span> <span class="k">content</span><span class="o">-</span><span class="n">box</span><span class="p">;</span>
                <span class="n">box</span><span class="o">-</span><span class="n">sizing</span><span class="o">:</span> <span class="k">content</span><span class="o">-</span><span class="n">box</span><span class="p">;</span>
                <span class="p">}</span>

                <span class="c">/* Option 2B: Reset an entire region with a custom LESS mixin */</span>
                <span class="nc">.reset-box-sizing</span> <span class="p">{</span>
                <span class="o">&amp;,</span>
                <span class="o">*,</span>
                <span class="o">*:</span><span class="n">before</span><span class="o">,</span>
                <span class="o">*:</span><span class="n">after</span> <span class="err">{</span>
                <span class="o">.</span><span class="n">box</span><span class="o">-</span><span class="n">sizing</span><span class="p">(</span><span class="k">content</span><span class="o">-</span><span class="n">box</span><span class="p">);</span>
                <span class="p">}</span>
                <span class="err">}</span>
                <span class="nc">.element</span> <span class="p">{</span>
                <span class="o">.</span><span class="n">reset</span><span class="o">-</span><span class="n">box</span><span class="o">-</span><span class="n">sizing</span><span class="p">();</span>
                <span class="p">}</span>
            </code></pre></div>
</div>


<!-- Accessibility
================================================== -->
<div class="bs-docs-section">
    <div class="page-header">
        <h1 id="accessibility">Accessibility</h1>
    </div>
    <p class="lead">Bootstrap follows common web standards, and with minimal extra effort, can be used to create sites that are accessible to those using <abbr title="Assistive Technology" class="initialism">AT</abbr>.</p>

    <h3>Skip navigation</h3>
    <p>If your navigation contains many links and comes before the main content in the DOM, add a <code>Skip to main content</code> link immediately after your opening <code>&lt;body&gt;</code> tag. <a target="_blank" href="http://a11yproject.com/posts/skip-nav-links/">(read why)</a></p>
    <div class="highlight"><pre><code class="html"><span class="nt">&lt;body&gt;</span>
                <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#content"</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>Skip to main content<span class="nt">&lt;/a&gt;</span>
                <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container"</span> <span class="na">id=</span><span class="s">"content"</span><span class="nt">&gt;</span>
                The main page content.
                <span class="nt">&lt;/div&gt;</span>
                <span class="nt">&lt;/body&gt;</span>
            </code></pre></div>

    <h3>Nested headings</h3>
    <p>When nesting headings (<code>&lt;h1&gt;</code> - <code>&lt;h6&gt;</code>), your primary document header should be an <code>&lt;h1&gt;</code>. Subsequent headings should make logical use of <code>&lt;h2&gt;</code> - <code>&lt;h6&gt;</code> such that screen readers can construct a table of contents for your pages.</p>
    <p>Learn more at <a target="_blank" href="http://squizlabs.github.io/HTML_CodeSniffer/Standards/Section508/">HTML CodeSniffer</a> and <a target="_blank" href="http://accessibility.psu.edu/headings">Penn State's AccessAbility</a>.</p>

    <h3>Additional resources</h3>
    <ul>
        <li><a target="_blank" href="https://github.com/squizlabs/HTML_CodeSniffer">"HTML Codesniffer" bookmarklet for identifying accessibility issues</a></li>
        <li><a target="_blank" href="http://a11yproject.com/">The A11Y Project</a></li>
        <li><a target="_blank" href="https://developer.mozilla.org/en-US/docs/Accessibility">MDN accessibility documentation</a></li>
    </ul>
</div>


<!-- License FAQs
================================================== -->
<div class="bs-docs-section">
    <div class="page-header">
        <h1 id="license-faqs">License FAQs</h1>
    </div>
    <p class="lead">Bootstrap is released under the Apache 2 license and is copyright 2013 Twitter. Boiled down to smaller chunks, it can be described with the following conditions.</p>

    <div class="row">
        <div class="col-12 col-lg-6">
            <h4>It allows you to:</h4>
            <ul>
                <li>Freely download and use Bootstrap, in whole or in part, for personal, company internal or commercial purposes</li>
                <li>Use Bootstrap in packages or distributions that you create</li>
            </ul>
        </div>
        <div class="col-12 col-lg-6">
            <h4>It forbids you to:</h4>
            <ul>
                <li>Redistribute any piece of Bootstrap without proper attribution</li>
                <li>Use any marks owned by Twitter in any way that might state or imply that Twitter endorses your distribution</li>
                <li>Use any marks owned by Twitter in any way that might state or imply that you created the Twitter software in question</li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-lg-6">
            <h4>It requires you to:</h4>
            <ul>
                <li>Include a copy of the license in any redistribution you may make that includes Bootstrap</li>
                <li>Provide clear attribution to Twitter for any distributions that include Bootstrap</li>
            </ul>
        </div>
        <div class="col-12 col-lg-6">
            <h4>It does not require you to:</h4>
            <ul>
                <li>Include the source of Bootstrap itself, or of any modifications you may have made to it, in any redistribution you may assemble that includes it</li>
                <li>Submit changes that you make to Bootstrap back to the Bootstrap project (though such feedback is encouraged)</li>
            </ul>
        </div>
    </div>
    <p>The full Bootstrap license is located <a target="_blank" href="https://github.com/twbs/bootstrap/blob/master/README.md">in the project repository</a> for more information.</p>
</div><!-- /.bs-docs-section -->


<div class="bs-docs-section">
    <div class="page-header">
        <h1 id="customizing">Customizing Bootstrap</h1>
    </div>
    <p class="lead">Bootstrap is best maintained when you treat it as a separate and independently-versioned dependency in your development environment. Doing this makes upgrading Bootstrap easier in the future.</p>

    <p>Once you've downloaded and included Bootstrap's styles and scripts, you can customize its components. Just create a new stylesheet (LESS, if you like, or just plain CSS) to house your customizations.</p>

    <div class="bs-callout bs-callout-info">
        <h4>Compiled or minified?</h4>
        <p>Unless you plan on reading the CSS, go with minified stylesheets. It's the same code, just compacted. Minified styles use less bandwidth, which is good, especially in production environments.</p>
    </div>

    <p>From there, include whatever Bootstrap components and HTML content you need to create templates for your site's pages.</p>

    <h3>Customizing components</h3>
    <p>You can customize components to varying degrees, but most fall into two camps: <em>light customizations</em> and <em>overhauls</em>. Plenty examples of both are available from third parties.</p>
    <p>We define <em>light customizations</em> as superficial changes, for example, color and font changes to existing Bootstrap components. A light customization example is the <a target="_blank" href="http://translate.twitter.com">Twitter Translation Center</a> (coded by <a target="_blank" href="https://twitter.com/mdo">@mdo</a>). Let's look at how to implement the custom button we wrote for this site, <code>.btn-ttc</code>.</p>
    <p>The stock Bootstrap buttons require just one class, <code>.btn</code>, to start.  Here we extend the <code>.btn</code> style with a new modifier class, <code>.btn-ttc</code>, that we will create. This gives us a distinct custom look with minimal effort.</p>
    <p>Our customized button will be coded like this:</p>
    <div class="highlight"><pre><code class="html"><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-ttc"</span><span class="nt">&gt;</span>Save changes<span class="nt">&lt;/button&gt;</span>
            </code></pre></div>
    <p>Note how <code>.btn-ttc</code> is added to the standard <code>.btn</code> class.</p>

    <p>To implement this, in the custom stylesheet, add the following CSS:</p>

    <div class="highlight"><pre><code class="css"><span class="c">/* Custom button</span>
                <span class="c">-------------------------------------------------- */</span>

                <span class="c">/* Override base .btn styles */</span>
                <span class="c">/* Apply text and background changes to three key states: default, hover, and active (click). */</span>
                <span class="nc">.btn-ttc</span><span class="o">,</span>
                <span class="nc">.btn-ttc</span><span class="nd">:hover</span><span class="o">,</span>
                <span class="nc">.btn-ttc</span><span class="nd">:active</span> <span class="p">{</span>
                <span class="k">color</span><span class="o">:</span> <span class="nb">white</span><span class="p">;</span>
                <span class="k">text-shadow</span><span class="o">:</span> <span class="m">0</span> <span class="m">-1px</span> <span class="m">0</span> <span class="n">rgba</span><span class="p">(</span><span class="m">0</span><span class="o">,</span> <span class="m">0</span><span class="o">,</span> <span class="m">0</span><span class="o">,</span> <span class="m">0</span><span class="o">.</span><span class="m">25</span><span class="p">);</span>
                <span class="k">background-color</span><span class="o">:</span> <span class="m">#007da7</span><span class="p">;</span>
                <span class="p">}</span>

                <span class="c">/* Apply the custom-colored gradients */</span>
                <span class="c">/* Note: you'll need to include all the appropriate gradients for various browsers and standards. */</span>
                <span class="nc">.btn-ttc</span> <span class="p">{</span>
                <span class="k">background-repeat</span><span class="o">:</span> <span class="k">repeat-x</span><span class="p">;</span>
                <span class="k">background-image</span><span class="o">:</span> <span class="n">linear</span><span class="o">-</span><span class="n">gradient</span><span class="p">(</span><span class="k">top</span><span class="o">,</span> <span class="m">#009ED2</span> <span class="m">0</span><span class="o">%,</span> <span class="m">#007DA7</span> <span class="m">100</span><span class="o">%</span><span class="p">);</span>
                <span class="o">...</span>
                <span class="p">}</span>

                <span class="c">/* Set the hover state */</span>
                <span class="c">/* An easy hover state is just to move the gradient up a small amount. Add other embellishments as you see fit. */</span>
                <span class="nc">.btn-ttc</span><span class="nd">:hover</span> <span class="p">{</span>
                <span class="k">background-position</span><span class="o">:</span> <span class="m">0</span> <span class="m">-15px</span><span class="p">;</span>
                <span class="p">}</span>
            </code></pre></div>

    <p>In short: Look to the style source and duplicate the selectors you need for your modifications.</p>
    <p><strong>In summary, here's the basic workflow:</strong></p>
    <ul>
        <li>For each element you want to customize, find its code in the compiled Bootstrap CSS.</li>
        <li>Copy the component's selector and styles and paste them in your custom stylesheet. For instance, to customize the navbar background, just copy the <code>.navbar</code> style specification.</li>
        <li>In your custom stylesheet, edit the CSS you just copied from the Bootstrap source. No need for prepending additional classes, or appending <code>!important</code> here.  Keep it simple.</li>
        <li>Rinse and repeat until you're happy with your customizations.</li>
    </ul>
    <p>Once you are comfortable performing light customizations, visual overhauls are just as straightforward. For a site like <a target="_blank" href="http://yourkarma.com">Karma</a>, which uses Bootstrap as a CSS reset with heavy modifications, more extensive work is involved.  But the same principle applies: include Bootstrap's default stylesheet first, then apply your custom stylesheet.</p>

    <div class="bs-callout bs-callout-info">
        <h4>Alternate customization methods</h4>
        <p>While not recommended for folks new to Bootstrap, you may use one of two alternate methods for customization. The first is modifying the source <code>.less</code> files (making upgrades super difficult), and the second is mapping source LESS code to <a target="_blank" href="http://ruby.bvision.com/blog/please-stop-embedding-bootstrap-classes-in-your-html">your own classes via mixins</a>. For the time being, neither of those options are documented here.</p>
    </div>

    <h3>Removing potential bloat</h3>
    <p>Not all sites and applications need to make use of everything Bootstrap has to offer, especially in production environments where optimizing bandwidth is an issue. We encourage you to remove whatever is unused with our <a target="_blank" href="http://getbootstrap.com/customize/">Customizer</a>.</p>
    <p>Using the Customizer, simply uncheck any component, feature, or asset you don't need. Hit download and swap out the default Bootstrap files with these newly customized ones. You'll get vanilla Bootstrap, but without the features *you* deem unnecessary. All custom builds include compiled and minified versions, so use whichever works for you.</p>

</div>

</div>
</div>

</div>

<!-- Footer
================================================== -->
<footer class="bs-footer" role="contentinfo">
    <div class="container">
        <div class="bs-social">
            <ul class="bs-social-buttons">
                <li>
                    <iframe class="github-btn" src="http://ghbtns.com/github-btn.html?user=twbs&amp;repo=bootstrap&amp;type=watch&amp;count=true" width="100" height="20" title="Star on GitHub"></iframe>
                </li>
                <li>
                    <iframe class="github-btn" src="http://ghbtns.com/github-btn.html?user=twbs&amp;repo=bootstrap&amp;type=fork&amp;count=true" width="102" height="20" title="Fork on GitHub"></iframe>
                </li>
                <li class="follow-btn">
                    <a target="_blank" href="https://twitter.com/twbootstrap" class="twitter-follow-button" data-link-color="#0069D6" data-show-count="true">Follow @twbootstrap</a>
                </li>
                <li class="tweet-btn">
                    <a target="_blank" href="https://twitter.com/share" class="twitter-share-button" data-url="http://getbootstrap.com/" data-count="horizontal" data-via="twbootstrap" data-related="mdo:Creator of Twitter Bootstrap">Tweet</a>
                </li>
            </ul>
        </div>


        <p>Designed and built with all the love in the world by <a target="_blank" href="http://twitter.com/mdo">@mdo</a> and <a target="_blank" href="http://twitter.com/fat">@fat</a>.</p>
        <p>Code licensed under <a target="_blank" href="http://www.apache.org/licenses/LICENSE-2.0">Apache License v2.0</a>, documentation under <a target="_blank" href="http://creativecommons.org/licenses/by/3.0/">CC BY 3.0</a>.</p>
        <ul class="footer-links">
            <li>Currently v3.0.1</li>
            <li class="muted">·</li>
            <li><a target="_blank" href="http://getbootstrap.com/2.3.2/">Bootstrap 2.3.2 docs</a></li>
            <li class="muted">·</li>
            <li><a target="_blank" href="http://blog.getbootstrap.com">Blog</a></li>
            <li class="muted">·</li>
            <li><a target="_blank" href="https://github.com/twbs/bootstrap/issues?state=open">Issues</a></li>
            <li class="muted">·</li>
            <li><a target="_blank" href="https://github.com/twbs/bootstrap/releases">Releases</a></li>
        </ul>
    </div>
</footer>
<script src="{{asset('js/bootstrap.js')}}"></script>
</body>
</html>