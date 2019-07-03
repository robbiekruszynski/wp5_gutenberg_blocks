<?php
/* Template Name: Page Animation */
get_header();
?>

  <h1>testing if this reads</h1>
  <!-- <script src="js/three.js"></script> -->
  <style>
    body { margin: 0; }
    canvas {width: 100%; height: 100% }
  </style>

  <script>
  let scene = new THREE.Scene();
  let camera = new THREE.PerspectiveCamera( 75, window.innerWidth / window.innerHeight, 0.1, 1000 );

  let renderer = new THREE.WebGlRenderer();
  renderer.setSize(window.innerWidth, window.innerHeight);
  document.body.appendChild(renderer.domElement)

  //game logic
  let update = function(){

  };

  //draw scene
  let render = function() {
    renderer.render(scene, camera);
  };
  //run game loop (update, render, repeat)
   let GameLoop = function() {
     requestAnimationFrame(GameLoop);
     update();
     render();
   };

   GameLoop()
   console.log("hello");
  </script>
  <h1> another test </h1>

<?php get_footer();
