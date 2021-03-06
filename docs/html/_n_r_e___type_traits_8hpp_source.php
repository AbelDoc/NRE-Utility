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
        <title>NRE-Utility: /mnt/c/Users/abell/Documents/GitHub/NRE-Utility/src/Utility/Traits/NRE_TypeTraits.hpp Source File</title>
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
<li class="navelem"><a class="el" href="dir_68267d1309a1af8e8297ef4c3efbcdba.php">src</a></li><li class="navelem"><a class="el" href="dir_9761b53e3d9349800c0cb59b71c8cd3d.php">Utility</a></li><li class="navelem"><a class="el" href="dir_f128c7003cad90f352f0ea881c285188.php">Traits</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">NRE_TypeTraits.hpp</div>  </div>
</div><!--header-->
<div class="contents">
<a href="_n_r_e___type_traits_8hpp.php">Go to the documentation of this file.</a><div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;    </div><div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;<span class="preprocessor">    #pragma once</span></div><div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;</div><div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;<span class="preprocessor">    #include &lt;type_traits&gt;</span></div><div class="line"><a name="l00013"></a><span class="lineno">   13</span>&#160;</div><div class="line"><a name="l00018"></a><span class="lineno">   18</span>&#160;    <span class="keyword">namespace </span><a class="code" href="namespace_n_r_e.php">NRE</a> {</div><div class="line"><a name="l00023"></a><span class="lineno">   23</span>&#160;        <span class="keyword">namespace </span><a class="code" href="namespace_utility.php">Utility</a> {</div><div class="line"><a name="l00024"></a><span class="lineno">   24</span>&#160;    </div><div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;            <span class="keyword">template</span> &lt;<span class="keyword">class</span> T&gt;</div><div class="line"><a name="l00027"></a><span class="lineno"><a class="line" href="_n_r_e___type_traits_8hpp.php#a702d52e48b8f87e737805342cfad0ca1">   27</a></span>&#160;            constexpr <span class="keywordtype">bool</span> <a class="code" href="_n_r_e___type_traits_8hpp.php#a702d52e48b8f87e737805342cfad0ca1">IsTriviallyCopyableV</a> = std::is_trivially_copyable_v&lt;T&gt;;</div><div class="line"><a name="l00028"></a><span class="lineno">   28</span>&#160;            </div><div class="line"><a name="l00030"></a><span class="lineno">   30</span>&#160;            <span class="keyword">template</span> &lt;<span class="keyword">class</span> T&gt;</div><div class="line"><a name="l00031"></a><span class="lineno"><a class="line" href="_n_r_e___type_traits_8hpp.php#a00f2d17c21844690e32a3b18fa51e14c">   31</a></span>&#160;            <span class="keyword">using</span> <a class="code" href="_n_r_e___type_traits_8hpp.php#a00f2d17c21844690e32a3b18fa51e14c">UseIfTriviallyCopyable</a> = std::enable_if_t&lt;IsTriviallyCopyableV&lt;T&gt;, <span class="keywordtype">int</span>&gt;;</div><div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;    </div><div class="line"><a name="l00034"></a><span class="lineno">   34</span>&#160;            <span class="keyword">template</span> &lt;<span class="keyword">class</span> T&gt;</div><div class="line"><a name="l00035"></a><span class="lineno"><a class="line" href="_n_r_e___type_traits_8hpp.php#a3b1d7cd889564e13116bc5414219d2f9">   35</a></span>&#160;            <span class="keyword">using</span> <a class="code" href="_n_r_e___type_traits_8hpp.php#a3b1d7cd889564e13116bc5414219d2f9">UseIfNotTriviallyCopyable</a> = std::enable_if_t&lt;!IsTriviallyCopyableV&lt;T&gt;, <span class="keywordtype">int</span>&gt;;</div><div class="line"><a name="l00036"></a><span class="lineno">   36</span>&#160;        </div><div class="line"><a name="l00037"></a><span class="lineno">   37</span>&#160;        }</div><div class="line"><a name="l00038"></a><span class="lineno">   38</span>&#160;    }</div><div class="ttc" id="_n_r_e___type_traits_8hpp_php_a3b1d7cd889564e13116bc5414219d2f9"><div class="ttname"><a href="_n_r_e___type_traits_8hpp.php#a3b1d7cd889564e13116bc5414219d2f9">NRE::Utility::UseIfNotTriviallyCopyable</a></div><div class="ttdeci">std::enable_if_t&lt;!IsTriviallyCopyableV&lt; T &gt;, int &gt; UseIfNotTriviallyCopyable</div><div class="ttdef"><b>Definition:</b> NRE_TypeTraits.hpp:35</div></div>
<div class="ttc" id="_n_r_e___type_traits_8hpp_php_a00f2d17c21844690e32a3b18fa51e14c"><div class="ttname"><a href="_n_r_e___type_traits_8hpp.php#a00f2d17c21844690e32a3b18fa51e14c">NRE::Utility::UseIfTriviallyCopyable</a></div><div class="ttdeci">std::enable_if_t&lt; IsTriviallyCopyableV&lt; T &gt;, int &gt; UseIfTriviallyCopyable</div><div class="ttdef"><b>Definition:</b> NRE_TypeTraits.hpp:31</div></div>
<div class="ttc" id="_n_r_e___type_traits_8hpp_php_a702d52e48b8f87e737805342cfad0ca1"><div class="ttname"><a href="_n_r_e___type_traits_8hpp.php#a702d52e48b8f87e737805342cfad0ca1">NRE::Utility::IsTriviallyCopyableV</a></div><div class="ttdeci">constexpr bool IsTriviallyCopyableV</div><div class="ttdef"><b>Definition:</b> NRE_TypeTraits.hpp:27</div></div>
<div class="ttc" id="namespace_n_r_e_php"><div class="ttname"><a href="namespace_n_r_e.php">NRE</a></div><div class="ttdoc">The NearlyRealEngine&amp;#39;s global namespace. </div></div>
<div class="ttc" id="namespace_utility_php"><div class="ttname"><a href="namespace_utility.php">Utility</a></div><div class="ttdoc">Utility&amp;#39;s API. </div></div>
</div><!-- fragment --></div><!-- contents -->
<!-- HTML footer for doxygen 1.8.8-->
<!-- start footer part -->
</div>
</div>
</div>
</div>
</body>
</html>
