$(document).ready(function() {
  Webcam.set({
    width: 320,
    height: 320,
    image_format: 'jpeg',
    jpeg_quality: 50
  });
  Webcam.attach( '#my_camera' );
});