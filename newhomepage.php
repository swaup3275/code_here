<!DOCTYPE html>
<html>
<title>online judge</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<style>
body {font-family: "Lato", sans-serif}
</style>
<body>
<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">NEUTRON OJ</a>
    <a href="showprob.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">PROBLEMS</a>
    <a href="showrank.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">RANKLIST</a>
    <?php
        session_start();
        if(!isset($_SESSION['uid']))
        {
    ?>
    <a href="signup.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">SIGNUP</a>
    <a href="signin.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">LOGIN</a>
    <?php
        }
        else
        {
    ?>
    <a href="logout.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">SIGN OUT</a>
    <a href="update.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">UPDATE</a>
    <a href="profile.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small"><?php echo strtoupper($_SESSION['uname']);?></a>
    <?php
        }
    ?>
    <a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>
  </div>
  
  <!-- content -->
  <!-- rank list-->
  <div class="w3-container" id="ranklist">
  <h2  style="text-align:center;">RANKLIST</h2>
   <div class="w3-responsive w3-card-4">
  <table style="text-align:center;" class="w3-table-all w3-hoverable">
    <thead>
      <tr class="w3-light-grey">
        <th>Rank</th>
        <th>Name</th>
        <th>Title</th>
        <th>Questions solved</th>
        <th>Accuracy</th>
      </tr>
    </thead>
    <tbody>
    <tr>
      <td>1</td>
      <td>shashank</td>
      <td>baby</td>
      <td>500</td>
      <td>100%</td>
    </tr>
    <tr>
    <td>2</td>
      <td>ezaz</td>
      <td>prakash</td>
      <td>1000</td>
      <td>100%</td>
    </tr>
    <tr>
    <td>3</td>
      <td>Jill</td>
      <td>Smith</td>
      <td>50</td>
      <td>100%</td>
    </tr>
    </tbody>
  </table>
</div>

  
  <!--learning blogs-->
<div class="w3-container" id="blogs" >
<h2 class="w3-center">LEARNING RESOURCES BLOG</h2>
<div class="w3-border">
<div class="w3-bar w3-theme">
  <button class="w3-bar-item w3-button testbtn w3-padding-60 " onclick="openCity(event,'dp')">DP</button>
  <button class="w3-bar-item w3-button testbtn w3-padding-60" onclick="openCity(event,'greedy')">GREEDY</button>
  <button class="w3-bar-item w3-button testbtn w3-padding-60" onclick="openCity(event,'graphs')">GRAPHS</button>
  <button class="w3-bar-item w3-button testbtn w3-padding-60" onclick="openCity(event,'trees')">TREES</button>
  <button class="w3-bar-item w3-button testbtn w3-padding-60" onclick="openCity(event,'completesearch')">COMPLETE SEARCH</button>
  <button class="w3-bar-item w3-button testbtn w3-padding-60" onclick="openCity(event,'advancedds')">ADVANCED DS</button>
  <button class="w3-bar-item w3-button testbtn w3-padding-60" onclick="openCity(event,'sorting')">SORTINGS</button>
  <button class="w3-bar-item w3-button testbtn w3-padding-60" onclick="openCity(event,'maths')">BASIC MATHS</button>
  <button class="w3-bar-item w3-button testbtn w3-padding-60" onclick="openCity(event,'strings')">STRING ALGORITHMS</button>
  <button class="w3-bar-item w3-button testbtn w3-padding-60" onclick="openCity(event,'others')">OTHERS</button>
</div>

<div id="dp" class="w3-container city w3-animate-opacity" height="400px" width="600px">
<p>The core idea of Dynamic Programming is to avoid repeated work by remembering partial results and this concept finds it application in a lot of real life situations.

In programming, Dynamic Programming is a powerful technique that allows one to solve different types of problems in time O(n2) or O(n3) for which a naive approach would take exponential time<p>
     <a href="https://www.hackerearth.com/challenges/">basic problems</a>
     <a href="https://www.hackerearth.com/challenges/">practice</a>
     <a href="http://www.geeksforgeeks.org/longest-common-subsequence/">longest-common-subsequence</a>
     <a href="http://www.geeksforgeeks.org/dynamic-programming-set-5-edit-distance/">edit distance</a>
    <li> <a href="http://www.geeksforgeeks.org/longest-increasing-subsequence/">longest-increasing-subsequence</a></li>
     <li> <a href="http://www.geeksforgeeks.org/find-the-longest-path-in-a-matrix-with-given-constraints/">matrix path</a></li>
     <li> <a href="http://www.geeksforgeeks.org/count-number-of-ways-to-cover-a-distance/">ways-to-cover-a-distance</a></li>
     <li> <a href="http://www.geeksforgeeks.org/partition-a-set-into-two-subsets-such-that-the-difference-of-subset-sums-is-minimum/">subset-sums</a></li>
</div>

<div id="greedy" class="w3-container city w3-animate-opacity" style="text-align:center;" height="400px" width="600px">
  <p>Greedy is an algorithmic paradigm that builds up a solution piece by piece, always choosing the next piece that offers the most obvious and immediate benefit. Greedy algorithms are used for optimization problems. An optimization problem can be solved using Greedy if the problem has the following property: At every step, we can make a choice that looks best at the moment, and we get the optimal solution of the complete problem.
If a Greedy Algorithm can solve a problem, then it generally becomes the best method to solve that problem as the Greedy algorithms are in general more efficient than other techniques like Dynamic Programming. But Greedy algorithms cannot always be applied.</p>a 

<li><a href="https://en.wikipedia.org/wiki/Kruskal%27s_algorithm">kruskal algorithm </a></li>
<li><a href="http://www.geeksforgeeks.org/greedy-algorithms-set-1-activity-selection-problem/">prims algorithm </a></li>
<li><a href="https://en.wikipedia.org/wiki/Huffman_coding">Huffman_coding </a></li>
<li><a href="https://en.wikipedia.org/wiki/Travelling_salesman_problem">Travelling_salesman_problem </a></li>

</div>

<div id="graphs" class="w3-container city w3-animate-opacity" style="text-align:center;" height="400px" width="600px">
  <p>Graph is a data structure that consists of following two components:
1. A finite set of vertices also called as nodes.
2. A finite set of ordered pair of the form (u, v) called as edge. The pair is ordered because (u, v) is not same as (v, u) in case of directed graph(di-graph). The pair of form (u, v) indicates that there is an edge from vertex u to vertex v. The edges may contain weight/value/cost.

Graphs are used to represent many real life applications: Graphs are used to represent networks. The networks may include paths in a city or telephone network or circuit network. Graphs are also used in social networks like linkedIn, facebook. For example, in facebook, each person is represented with a vertex(or node). Each node is a structure and contains information like person id, name, gender and locale.</p>
  <li><a href="http://www.geeksforgeeks.org/breadth-first-traversal-for-a-graph/"> BFS</a></li>
  <li><a href="http://www.geeksforgeeks.org/depth-first-traversal-for-a-graph/">DFS </a></li>
  <li><a href="http://www.geeksforgeeks.org/topological-sorting/">topological-sorting </a></li>
  <li><a href="http://www.geeksforgeeks.org/graph-data-structure-and-algorithms/#introDFSnBFS">DETECT CYCLE </a></li>
</div>

<div id="trees" class="w3-container city w3-animate-opacity" style="text-align:center;" height="400px" width="600px">
   <p>A tree data structure can be defined recursively (locally) as a collection of nodes (starting at a root node), where each node is a data structure consisting of a value, together with a list of references to nodes (the "children"), with the constraints that no reference is duplicated, and none points to the root.</p>
 <li><a href="http://www.geeksforgeeks.org/breadth-first-traversal-for-a-graph/"> BFS</a></li>
  <li><a href="http://www.geeksforgeeks.org/depth-first-traversal-for-a-graph/">DFS </a></li>
  <li><a href="http://www.geeksforgeeks.org/topological-sorting/">topological-sorting </a></li>
  <li><a href="http://www.geeksforgeeks.org/graph-data-structure-and-algorithms/#introDFSnBFS">DETECT CYCLE </a></li>
</div>

<div id="completesearch" class="w3-container city w3-animate-opacity" style="text-align:center;" height="400px" width="600px">
   <p>Search a sorted array by repeatedly dividing the search interval in half. Begin with an interval covering the whole array. If the value of the search key is less than the item in the middle of the interval, narrow the interval to the lower half. Otherwise narrow it to the upper half. Repeatedly check until the value is found or the interval is empty.</p>
  <li><a href="http://www.geeksforgeeks.org/binary-search/">binary search </a></li>
  <li><a href="http://www.geeksforgeeks.org/quick-sort/">quick sort </a></li>
<a href="http://www.geeksforgeeks.org/merge-sort/">merge sort </a><a href="http://www.geeksforgeeks.org/counting-sort/">count sort </a><a href="http://www.geeksforgeeks.org/counting-sort/">
</div>

<div id="advancedds" class="w3-container city w3-animate-opacity" style="text-align:center;" height="400px" width="600px">
  <p>Binary Indexed Tree is represented as an array. Let the array be BITree[]. Each node of Binary Indexed Tree stores sum of some        elements of given array. Size of Binary Indexed Tree is equal to n where n is size of input array. In the below code, we have used size as n+1 for ease of implementation.
Construction
We construct the Binary Indexed Tree by first initializing all values in BITree[] as 0. Then we call update() operation for all indexes to store actual sums</p>

<li><a href="https://en.wikipedia.org/wiki/Kruskal%27s_algorithm">kruskal algorithm </a></li>
<li><a href="http://www.geeksforgeeks.org/greedy-algorithms-set-1-activity-selection-problem/">prims algorithm </a></li>
<li><a href="https://en.wikipedia.org/wiki/Huffman_coding">Huffman_coding </a></li>
<li><a href="https://en.wikipedia.org/wiki/Travelling_salesman_problem">Travelling_salesman_problem </a></li>
</div>
<div id="sorting" class="w3-container city w3-animate-opacity" style="text-align:center;" height="400px" width="600px">
   <p>Greedy is an algorithmic paradigm that builds up a solution piece by piece, always choosing the next piece that offers the most obvious and immediate benefit. Greedy algorithms are used for optimization problems. An optimization problem can be solved using Greedy if the problem has the following property: At every step, we can make a choice that looks best at the moment, and we get the optimal solution of the complete problem.
If a Greedy Algorithm can solve a problem, then it generally becomes the best method to solve that problem as the Greedy algorithms are in general more efficient than other techniques like Dynamic Programming. But Greedy algorithms cannot always be applied.</p>a 

<li><a href="https://en.wikipedia.org/wiki/Kruskal%27s_algorithm">kruskal algorithm </a></li>
<li><a href="http://www.geeksforgeeks.org/greedy-algorithms-set-1-activity-selection-problem/">prims algorithm </a></li>
<li><a href="https://en.wikipedia.org/wiki/Huffman_coding">Huffman_coding </a></li>
<li><a href="https://en.wikipedia.org/wiki/Travelling_salesman_problem">Travelling_salesman_problem </a></li> 
</div>
<div id="maths" class="w3-container city w3-animate-opacity" style="text-align:center;" height="400px" width="600px">
   <p>Greedy is an algorithmic paradigm that builds up a solution piece by piece, always choosing the next piece that offers the most obvious and immediate benefit. Greedy algorithms are used for optimization problems. An optimization problem can be solved using Greedy if the problem has the following property: At every step, we can make a choice that looks best at the moment, and we get the optimal solution of the complete problem.
If a Greedy Algorithm can solve a problem, then it generally becomes the best method to solve that problem as the Greedy algorithms are in general more efficient than other techniques like Dynamic Programming. But Greedy algorithms cannot always be applied.</p>a 

<li><a href="https://en.wikipedia.org/wiki/Kruskal%27s_algorithm">kruskal algorithm </a></li>
<li><a href="http://www.geeksforgeeks.org/greedy-algorithms-set-1-activity-selection-problem/">prims algorithm </a></li>
<li><a href="https://en.wikipedia.org/wiki/Huffman_coding">Huffman_coding </a></li>
<li><a href="https://en.wikipedia.org/wiki/Travelling_salesman_problem">Travelling_salesman_problem </a></li>
</div>
<div id="strings" class="w3-container city w3-animate-opacity" style="text-align:center;" height="400px" width="600px">
   <p>Greedy is an algorithmic paradigm that builds up a solution piece by piece, always choosing the next piece that offers the most obvious and immediate benefit. Greedy algorithms are used for optimization problems. An optimization problem can be solved using Greedy if the problem has the following property: At every step, we can make a choice that looks best at the moment, and we get the optimal solution of the complete problem.
If a Greedy Algorithm can solve a problem, then it generally becomes the best method to solve that problem as the Greedy algorithms are in general more efficient than other techniques like Dynamic Programming. But Greedy algorithms cannot always be applied.</p>a 

<li><a href="https://en.wikipedia.org/wiki/Kruskal%27s_algorithm">kruskal algorithm </a></li>
<li><a href="http://www.geeksforgeeks.org/greedy-algorithms-set-1-activity-selection-problem/">prims algorithm </a></li>
<li><a href="https://en.wikipedia.org/wiki/Huffman_coding">Huffman_coding </a></li>
<li><a href="https://en.wikipedia.org/wiki/Travelling_salesman_problem">Travelling_salesman_problem </a></li>
</div>
<div id="others" class="w3-container city w3-animate-opacity" >
   <p>Greedy is an algorithmic paradigm that builds up a solution piece by piece, always choosing the next piece that offers the most obvious and immediate benefit. Greedy algorithms are used for optimization problems. An optimization problem can be solved using Greedy if the problem has the following property: At every step, we can make a choice that looks best at the moment, and we get the optimal solution of the complete problem.
If a Greedy Algorithm can solve a problem, then it generally becomes the best method to solve that problem as the Greedy algorithms are in general more efficient than other techniques like Dynamic Programming. But Greedy algorithms cannot always be applied.</p>a 

<li><a href="https://en.wikipedia.org/wiki/Kruskal%27s_algorithm">kruskal algorithm </a></li>
<li><a href="http://www.geeksforgeeks.org/greedy-algorithms-set-1-activity-selection-problem/">prims algorithm </a></li>
<li><a href="https://en.wikipedia.org/wiki/Huffman_coding">Huffman_coding </a></li>
<li><a href="https://en.wikipedia.org/wiki/Travelling_salesman_problem">Travelling_salesman_problem </a></li>
     <a href="https://www.hackerearth.com/challenges/">CHALLENGES</a>
     <a href="https://www.hackerearth.com/challenges/">CHALLENGES</a>
</div>
<hr>
   
</div>
</div>
<script>

// Tabs
function openCity(evt, cityName) {
  var i;
  var x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  var activebtn = document.getElementsByClassName("testbtn");
  for (i = 0; i < x.length; i++) {
      activebtn[i].className = activebtn[i].className.replace(" w3-dark-grey", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " w3-dark-grey";
}

var mybtn = document.getElementsByClassName("testbtn")[0];
mybtn.click();
</script>

</body>
</html>

