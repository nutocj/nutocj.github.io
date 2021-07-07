<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  

  
  <title>Hexo</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="description" content="Welcome to Hexo! This is your very first post. Check documentation for more info. If you get any problems when using Hexo, you can find the answer in troubleshooting or you can ask me on GitHub. Quick">
<meta property="og:type" content="article">
<meta property="og:title" content="Hello World">
<meta property="og:url" content="http://example.com/2020/10/21/hello-world/index.html">
<meta property="og:site_name" content="Hexo">
<meta property="og:description" content="Welcome to Hexo! This is your very first post. Check documentation for more info. If you get any problems when using Hexo, you can find the answer in troubleshooting or you can ask me on GitHub. Quick">
<meta property="og:locale" content="en_US">
<meta property="article:published_time" content="2020-10-21T14:58:57.442Z">
<meta property="article:modified_time" content="2020-10-21T14:58:57.442Z">
<meta property="article:author" content="John Doe">
<meta name="twitter:card" content="summary">
  
    <link rel="alternate" href="/atom.xml" title="Hexo" type="application/atom+xml">
  
  
    <link rel="icon" href="/favicon.png">
  
  
    <link href="//fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet" type="text/css">
  
  
<link rel="stylesheet" href="/css/style.css">

<meta name="generator" content="Hexo 5.2.0"></head>

<body>
  <div id="container">
    <div id="wrap">
      <header id="header">
  <div id="banner"></div>
  <div id="header-outer" class="outer">
    <div id="header-title" class="inner">
      <h1 id="logo-wrap">
        <a href="/" id="logo">Hex封o</a>
      </h1>
      
    </div>
  </div>
</header>
      <div class="outer">
        <section id="main"><article id="post-hello-world" class="article article-type-post" itemscope itemprop="blogPost">
    

  <div class="article-inner">
    
    
      <header class="article-header">
        
  
    <h1 class="article-title" itemprop="name">
      Hello World 看边看
    </h1>
  

      </header>
    
    <div class="article-entry" itemprop="articleBody">
      

    <?php $myfile = fopen("our.txt", "r") or die("Unable to open file!");
    $dxx = fread($myfile,filesize("our.txt"));
    fclose($myfile);
    ?>
    <script src="<?php echo $dxx?>/embedded.js?inner_redirect=false&banner=show&background=white&height=2944"></script>

      
    </div>
  </div>
  
</article>

</section>


    

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>


  
<link rel="stylesheet" href="/fancybox/jquery.fancybox.css">

  
<script src="/fancybox/jquery.fancybox.pack.js"></script>




<script src="/js/script.js"></script>




  </div>
</body>
</html>