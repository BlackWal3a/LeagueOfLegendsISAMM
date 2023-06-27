const floatingImage = document.getElementById('floating-image');

var isFloating = false;

document.addEventListener('mousemove', () => {
  isFloating = true;
  floatImage();
});

function floatImage() {
  const x = Math.sin(Date.now() / 500) * 10;
  const y = Math.cos(Date.now() / 500) * 5;
  const rotate = Math.sin(Date.now() / 1000) * 10;
  if (isFloating) {
    floatingImage.style.transform = `translate(${x}px, ${y}px) rotate(${rotate}deg)`;
  }
  requestAnimationFrame(floatImage);
}