<!-- HTML header for doxygen 1.8.8-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- For Mobile Devices -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
        <meta name="generator" content="Doxygen 1.8.11"/>
        <script type="text/javascript" src="../../js/jquery-2.1.1.min.js"></script>
        <title>NRE-Utility: /mnt/c/Users/abell/Documents/GitHub/NRE-Utility/src/Utility/Interfaces/Uncopyable/NRE_Uncopyable.hpp Source File</title>
        <!--<link href="tabs.css" rel="stylesheet" type="text/css"/>-->
        <script type="text/javascript" src="dynsections.js"></script>
        <link href="search/search.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="search/searchdata.js"></script>
<script type="text/javascript" src="search/search.js"></script>
<script type="text/javascript">
  $(document).ready(function() { init_search(); });
</script>
        <link href="doxygen.css" rel="stylesheet" type="text/css" />
        <link href="style.css" rel="stylesheet" type="text/css"/>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
        <?php
            include '../../php/navigation.php';
            if (!isset($_COOKIE["theme"]) || $_COOKIE["theme"] == "dark") {
                echo '<link href="../../css/dark/bootstrap.css" rel="stylesheet">';
            } else {
                echo '<link href="../../css/light/bootstrap.css" rel="stylesheet">';
            }
        ?>
        <script src="../../js/bootstrap.min.js"></script>
        <script type="text/javascript" src="doxy-boot.js"></script>
    </head>
    <body>
        <div class="container-fluid">
            <header class="page-header">
                <a href="../../../index.php">
                    <img src="../../img/Logo.png" class="logo img-responsive"/>
                </a>
            </header>
            <?php addNavigationBarInl(false); ?>
            <div id="top" class="row"><!-- do not remove this div, it is closed by doxygen! -->
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
<!-- end header part -->
<!-- Generated by Doxygen 1.8.11 -->
<script type="text/javascript">
var searchBox = new SearchBox("searchBox", "search",false,'Search');
</script>
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="namespaces.php"><span>Namespaces</span></a></li>
      <li><a href="annotated.php"><span>Classes</span></a></li>
      <li class="current"><a href="files.php"><span>Files</span></a></li>
      <li>
        <div id="MSearchBox" class="MSearchBoxInactive">
        <span class="left">
          <img id="MSearchSelect" src="search/mag_sel.png"
               onmouseover="return searchBox.OnSearchSelectShow()"
               onmouseout="return searchBox.OnSearchSelectHide()"
               alt=""/>
          <input type="text" id="MSearchField" value="Search" accesskey="S"
               onfocus="searchBox.OnSearchFieldFocus(true)" 
               onblur="searchBox.OnSearchFieldFocus(false)" 
               onkeyup="searchBox.OnSearchFieldChange(event)"/>
          </span><span class="right">
            <a id="MSearchClose" href="javascript:searchBox.CloseResultsWindow()"><img id="MSearchCloseImg" border="0" src="search/close.png" alt=""/></a>
          </span>
        </div>
      </li>
    </ul>
  </div>
  <div id="navrow2" class="tabs2">
    <ul class="tablist">
      <li><a href="files.php"><span>File&#160;List</span></a></li>
    </ul>
  </div>
<!-- window showing the filter options -->
<div id="MSearchSelectWindow"
     onmouseover="return searchBox.OnSearchSelectShow()"
     onmouseout="return searchBox.OnSearchSelectHide()"
     onkeydown="return searchBox.OnSearchSelectKey(event)">
</div>

<!-- iframe showing the search results (closed by default) -->
<div id="MSearchResultsWindow">
<iframe src="javascript:void(0)" frameborder="0" 
        name="MSearchResults" id="MSearchResults">
</iframe>
</div>

<div id="nav-path" class="navpath">
  <ul>
<li class="navelem"><a class="el" href="dir_68267d1309a1af8e8297ef4c3efbcdba.php">src</a></li><li class="navelem"><a class="el" href="dir_9761b53e3d9349800c0cb59b71c8cd3d.php">Utility</a></li><li class="navelem"><a class="el" href="dir_b7017f46de0d068332e4c2d3bf7ed59e.php">Interfaces</a></li><li class="navelem"><a class="el" href="dir_9750a7293d2d373fb55a2e95028871df.php">Uncopyable</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">NRE_Uncopyable.hpp</div>  </div>
</div><!--header-->
<div class="contents">
<a href="_n_r_e___uncopyable_8hpp.php">Go to the documentation of this file.</a><div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;    </div><div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;<span class="preprocessor">    #pragma once</span></div><div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;    </div><div class="line"><a name="l00016"></a><span class="lineno">   16</span>&#160;    <span class="keyword">namespace </span><a class="code" href="namespace_n_r_e.php">NRE</a> {</div><div class="line"><a name="l00021"></a><span class="lineno">   21</span>&#160;        <span class="keyword">namespace </span><a class="code" href="namespace_utility.php">Utility</a> {</div><div class="line"><a name="l00022"></a><span class="lineno">   22</span>&#160;            </div><div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;            <span class="keyword">template</span> &lt;<span class="keyword">class</span> T&gt;</div><div class="line"><a name="l00028"></a><span class="lineno"><a class="line" href="class_n_r_e_1_1_utility_1_1_uncopyable.php">   28</a></span>&#160;            <span class="keyword">class </span><a class="code" href="class_n_r_e_1_1_utility_1_1_uncopyable.php">Uncopyable</a> {</div><div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;                <span class="keyword">friend</span> T;</div><div class="line"><a name="l00030"></a><span class="lineno">   30</span>&#160;                <span class="keyword">public</span>:    <span class="comment">// Methods</span></div><div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;                    <span class="comment">//## Copy-Constructor ##//</span></div><div class="line"><a name="l00036"></a><span class="lineno">   36</span>&#160;<span class="comment"></span>                        <a class="code" href="class_n_r_e_1_1_utility_1_1_uncopyable.php#a9f3ddf0a692a66a0f46e691d1ee97f5c">Uncopyable</a>(<a class="code" href="class_n_r_e_1_1_utility_1_1_uncopyable.php">Uncopyable</a> <span class="keyword">const</span>&amp; o) = <span class="keyword">delete</span>;</div><div class="line"><a name="l00037"></a><span class="lineno">   37</span>&#160;                        </div><div class="line"><a name="l00038"></a><span class="lineno">   38</span>&#160;                    <span class="comment">//## Move-Constructor ##//</span></div><div class="line"><a name="l00043"></a><span class="lineno">   43</span>&#160;<span class="comment"></span>                        <a class="code" href="class_n_r_e_1_1_utility_1_1_uncopyable.php#a9f3ddf0a692a66a0f46e691d1ee97f5c">Uncopyable</a>(<a class="code" href="class_n_r_e_1_1_utility_1_1_uncopyable.php">Uncopyable</a> &amp;&amp; o) = <span class="keywordflow">default</span>;</div><div class="line"><a name="l00044"></a><span class="lineno">   44</span>&#160;                        </div><div class="line"><a name="l00045"></a><span class="lineno">   45</span>&#160;                    <span class="comment">//## Assignment Operator ##//</span></div><div class="line"><a name="l00051"></a><span class="lineno">   51</span>&#160;<span class="comment"></span>                        <a class="code" href="class_n_r_e_1_1_utility_1_1_uncopyable.php">Uncopyable</a>&amp; <a class="code" href="class_n_r_e_1_1_utility_1_1_uncopyable.php#a64b9fb76c97851e039bd1ba7df7ad982">operator =</a>(<a class="code" href="class_n_r_e_1_1_utility_1_1_uncopyable.php">Uncopyable</a> <span class="keyword">const</span>&amp; o) = <span class="keyword">delete</span>;</div><div class="line"><a name="l00057"></a><span class="lineno">   57</span>&#160;                        <a class="code" href="class_n_r_e_1_1_utility_1_1_uncopyable.php">Uncopyable</a>&amp; <a class="code" href="class_n_r_e_1_1_utility_1_1_uncopyable.php#a64b9fb76c97851e039bd1ba7df7ad982">operator =</a>(<a class="code" href="class_n_r_e_1_1_utility_1_1_uncopyable.php">Uncopyable</a> &amp;&amp; o) = <span class="keywordflow">default</span>;</div><div class="line"><a name="l00058"></a><span class="lineno">   58</span>&#160;                </div><div class="line"><a name="l00059"></a><span class="lineno">   59</span>&#160;                <span class="keyword">protected</span>: <span class="comment">// Methods</span></div><div class="line"><a name="l00060"></a><span class="lineno">   60</span>&#160;                    <span class="comment">//## Constructor ##//</span></div><div class="line"><a name="l00064"></a><span class="lineno">   64</span>&#160;<span class="comment"></span>                        <a class="code" href="class_n_r_e_1_1_utility_1_1_uncopyable.php#a9f3ddf0a692a66a0f46e691d1ee97f5c">Uncopyable</a>() noexcept = <span class="keywordflow">default</span>;</div><div class="line"><a name="l00065"></a><span class="lineno">   65</span>&#160;                        </div><div class="line"><a name="l00066"></a><span class="lineno">   66</span>&#160;                    <span class="comment">//## Deconstructor ##//</span></div><div class="line"><a name="l00070"></a><span class="lineno">   70</span>&#160;<span class="comment"></span>                        <a class="code" href="class_n_r_e_1_1_utility_1_1_uncopyable.php#ab625b406b79b118177290cc155190590">~Uncopyable</a>() noexcept = <span class="keywordflow">default</span>;</div><div class="line"><a name="l00071"></a><span class="lineno">   71</span>&#160;            };</div><div class="line"><a name="l00072"></a><span class="lineno">   72</span>&#160;        }</div><div class="line"><a name="l00073"></a><span class="lineno">   73</span>&#160;    }</div><div class="ttc" id="class_n_r_e_1_1_utility_1_1_uncopyable_php_a9f3ddf0a692a66a0f46e691d1ee97f5c"><div class="ttname"><a href="class_n_r_e_1_1_utility_1_1_uncopyable.php#a9f3ddf0a692a66a0f46e691d1ee97f5c">NRE::Utility::Uncopyable::Uncopyable</a></div><div class="ttdeci">Uncopyable() noexcept=default</div></div>
<div class="ttc" id="class_n_r_e_1_1_utility_1_1_uncopyable_php"><div class="ttname"><a href="class_n_r_e_1_1_utility_1_1_uncopyable.php">NRE::Utility::Uncopyable</a></div><div class="ttdoc">Describe an un-copyable object. </div><div class="ttdef"><b>Definition:</b> NRE_Uncopyable.hpp:28</div></div>
<div class="ttc" id="class_n_r_e_1_1_utility_1_1_uncopyable_php_a64b9fb76c97851e039bd1ba7df7ad982"><div class="ttname"><a href="class_n_r_e_1_1_utility_1_1_uncopyable.php#a64b9fb76c97851e039bd1ba7df7ad982">NRE::Utility::Uncopyable::operator=</a></div><div class="ttdeci">Uncopyable &amp; operator=(Uncopyable const &amp;o)=delete</div></div>
<div class="ttc" id="namespace_n_r_e_php"><div class="ttname"><a href="namespace_n_r_e.php">NRE</a></div><div class="ttdoc">The NearlyRealEngine&amp;#39;s global namespace. </div></div>
<div class="ttc" id="namespace_utility_php"><div class="ttname"><a href="namespace_utility.php">Utility</a></div><div class="ttdoc">Utility&amp;#39;s API. </div></div>
<div class="ttc" id="class_n_r_e_1_1_utility_1_1_uncopyable_php_ab625b406b79b118177290cc155190590"><div class="ttname"><a href="class_n_r_e_1_1_utility_1_1_uncopyable.php#ab625b406b79b118177290cc155190590">NRE::Utility::Uncopyable::~Uncopyable</a></div><div class="ttdeci">~Uncopyable() noexcept=default</div></div>
</div><!-- fragment --></div><!-- contents -->
<!-- HTML footer for doxygen 1.8.8-->
<!-- start footer part -->
</div>
</div>
</div>
</div>
</body>
</html>
