<!DOCTYPE HTML>
<!--
	Prologue by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
  <head>
    <title>DMseq Raw Data</title>
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.scrolly.min.js"></script>
    <script src="js/jquery.scrollzer.min.js"></script>
    <script src="js/skel.min.js"></script>
    <script src="js/skel-layers.min.js"></script>
    <script src="js/init.js"></script>
    <noscript>
      <link rel="stylesheet" href="css/skel.css" />
      <link rel="stylesheet" href="css/style.php" />
      <link rel="stylesheet" href="css/style-wide.css" />
    </noscript>
    <!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
    <!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
  </head>

  <body>
    <!-- Header -->
    <div id="header" class="skel-layers-fixed">      
      <div class="top">
	
	<!-- Logo -->
	<div id="logo">
	  <!-- <span class="image avatar48"><img src="images/avatar.jpg" alt="" /></span> -->
	  <h1 id="title">DMseq<br/>Raw Data</h1>
	  <p>Deep Sequencing<br /> Data Repository</p>
	</div>
	
	<!-- Nav -->
	<nav id="nav">
	  <!--
	      Prologue's nav expects links in one of two formats:
	      1. Hash link (scrolls to a different section within the page)
	      <li><a href="#foobar" id="foobar-link" class="icon fa-whatever-icon-you-want skel-layers-ignoreHref"><span class="label">Foobar</span></a></li>
	      2. Standard link (sends the user to another page/site)
	  <li><a href="http://foobar.tld" id="foobar-link" class="icon fa-whatever-icon-you-want"><span class="label">Foobar</span></a></li>
	  -->
	  <ul>
	    <li><a href="index.html" id="home-link" class="skel-layers-ignoreHref"><span class="icon fa-home">Home</span></a></li>
	    <li><a href="#fastq" id="fastq-link" class="skel-layers-ignoreHref"><span class="icon fa-file-text">Raw Reads</span></a></li>
	    <li><a href="#phenotype" id="phenotype-link" class="skel-layers-ignoreHref"><span class="icon fa-slideshare">Phenotypic Data</span></a></li>
	    <li><a href="#bam" id="bam-link" class="skel-layers-ignoreHref"><span class="icon fa-globe">Mapped Reads</span></a></li>
	    <li><a href="#bedgraph" id="bedgraph-link" class="skel-layers-ignoreHref"><span class="icon fa-area-chart">Read Densities</span></a></li>
	    <li><a href="#geneexpr" id="geneexpr-link" class="skel-layers-ignoreHref"><span class="icon fa-bar-chart">Gene Expression</span></a></li>
	    <li><a href="#miso" id="miso-link" class="skel-layers-ignoreHref"><span class="icon fa-line-chart">MISO Estimates</span></a></li>
	  </ul>
	</nav>	
      </div>
    </div>

    <!-- Main -->
    <div id="main">
      
      <!-- Raw reads -->
      <section id="fastq" class="three">
	<div class="container">

	  <header>
	    <h2>Raw Reads</h2>
	  </header>
							
	  <p class="left-align">
	    Raw read files (fastq) will be hosted on the <a href="http://www.ncbi.nlm.nih.gov/sra">
        Short Read Archive</a> at NCBI. 
        Series numbers are pending.
      </p>
          
	</div>
      </section>
			
      <!-- Phenotypic Data -->
      <section id="phenotype" class="two">
	<div class="container">
	  
	  <header>
        <h2>Phenotypic Data</h2>
	  </header>
      
	  <p class="left-align">
        Patient phenotypic information will be hosted at <a href="https://dbgap.ncbi.nlm.nih.gov/">dbGAP</a> under controlled access.  Investigators must apply for access to this information.
      </p>
	</div>
      </section>
                
      <!-- Genome Browser -->
      <section id="bam" class="three">
	<div class="container">
	  <header>
	    <h2>Mapped Reads</h2>
	  </header>

	  <p class="left-align">
	    Mapped read files (bam) can be found below (PENDING). Reads were mapped using <a href="gsnap">gsnap</a>: 
      <p class="left-align pre">
      gsnap ...
      </p>
      </p>
	  
	</div>
      </section>
                
      <!-- Isoform Expression -->
      <section id="bedgraph" class="two">
	<div class="container">
	  
	  <header>
	    <h2>Read Densities by Position</h2>
	  </header>
	  <p class="left-align">
	    Bedgraph files can be found below.  These files were generated from bam files 
        using bedtools:
      </p>
      <p class="left-align pre">
      bedtools genomecov -ibam &lt;bam&gt; -g &lt;genome&gt; -bg -split &gt; &lt;bedgraph&gt;<br>
      sort -k1,1 -k2,2n &lt;bedgraph&gt; &gt; &lt;sorted&gt;<br>
      bgzip &lt;sorted&gt;<br>
      tabix -p bed &lt;sorted.gz&gt;<br>
      </p>
      
        <?php
        $fnames1 = scandir("d/hg19/tibialis/");
        $fnames2 = scandir("d/hg19/quadricep/");
        $fnames3 = scandir("d/hg19/dmseq_other/");
        ?>
	  
	</div>
      </section>
			
      <!-- Raw Data -->
      <section id="geneexpr" class="three">
	<div class="container">
	  <header>
	    <h2>Gene Expression Estimates</h2>
	  </header>
	  <p class="left-align">
	    Tables of gene expression estimates can be found below.  
      </p>
	</div>
      </section>
      
      <!-- Contact -->
      <section id="miso" class="four">
	<div class="container">

	  <header>
	    <h2>MISO Estimates</h2>
	  </header>

	  <p class="left-align">
        MISO estimates of isoform usage can be found below.  
        MISO was run in single end mode, using the following parameters:
      </p>
	</div>
      </section>
      
    </div>

    <!-- Footer -->
    <div id="footer">
      
      <!-- Copyright -->
      <ul class="copyright">
	<li>&copy; DMseq.org. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
      </ul>				
    </div> 
 
  </body>
</html>
