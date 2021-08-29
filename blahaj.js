//load new image on button click
document.getElementById('refreshBtn').addEventListener('click', function(){

    var img = document.getElementById('randImg');
    img.setAttribute('src', 'blahaj.php?t='+Date.now());

})