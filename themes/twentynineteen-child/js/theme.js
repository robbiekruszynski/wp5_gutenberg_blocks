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
